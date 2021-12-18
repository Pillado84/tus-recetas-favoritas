import { Component, OnInit } from '@angular/core';
import { AuthService } from 'src/app/services/auth.service';

@Component({
  selector: 'app-user',
  templateUrl: './user.component.html',
  styleUrls: ['./user.component.css']
})
export class UserComponent implements OnInit {

  profile: boolean = true;
  information: boolean = false;
  password: boolean = false;
  blog: boolean = false;

  constructor(private auth: AuthService) { }

  ngOnInit(): void {
  }

  menuVertical( parametro: string ) {
    /** 
     * p: profile
     * i: information
     * s: password
     * b: blog
    */
    switch (parametro) {
      case 'p':
        this.profile = true;
        this.information = false;
        this.password = false;
        this.blog = false;
        break;
      case 'i':
        this.profile = false;
        this.information = true;
        this.password = false;
        this.blog = false;
        break;
      case 's':
        this.profile = false;
        this.information = false;
        this.password = true;
        this.blog = false;
        break;
      case 'b':
        this.profile = false;
        this.information = false;
        this.password = false;
        this.blog = true;
        break
      default:
        break;
    }
  }

  // Mover al componente cerrar sesion
  logout() {
    this.auth.deleteToken();
    window.location.href = '/home';
  }

}
