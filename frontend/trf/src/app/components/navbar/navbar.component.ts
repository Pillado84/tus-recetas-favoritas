import { UserModel } from 'src/app/models/user.model';
import { UserService } from './../../services/user.service';
import { AuthService } from './../../services/auth.service';
import { Component, EventEmitter, OnInit, Output } from '@angular/core';
import { FormControl } from '@angular/forms';
import { Router } from '@angular/router';
import { debounceTime } from 'rxjs/operators';

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.css']
})
export class NavbarComponent implements OnInit {

  user!: UserModel;

  loginUser!: boolean;
  logoutUser!: boolean;

  constructor(private router: Router, private auth: AuthService, private userService: UserService) {
    this.auth.getLoggedInName.subscribe( name => this.changeName(name));

    // this.auth.isLoggedIn()
    if (false) {
      console.log('Loggedin');
      this.loginUser = false;
      this.logoutUser = true;
    } else {
      this.loginUser = true;
      this.logoutUser = false;
    }
  }

  ngOnInit(): void {
    // Simular inicio de sesion
    this.userService.getById(2).subscribe( (datos: any) => this.user = datos.items[0]);
  }

  search(termino: string) {
    this.router.navigate(['search', termino]);
    window.location.reload();
    // termino = '';
  }

  private changeName(name: boolean): void {
    this.logoutUser = name;
    this.loginUser = !name;
  }
}
