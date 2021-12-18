import { UserService } from './../../services/user.service';
import { Component, OnInit } from '@angular/core';
import { UserModel } from 'src/app/models/user.model';

@Component({
  selector: 'app-profile',
  templateUrl: './profile.component.html',
  styleUrls: ['./profile.component.css']
})
export class ProfileComponent implements OnInit {
  usuario!: UserModel;

  constructor(private userService: UserService) { }

  ngOnInit(): void {
    this.userService.getById(2).subscribe( (datos: any) => {this.usuario = datos.items[0]; console.log(this.usuario);});
  }

  getMensaje( msg: string): string {
    let mensaje!: string;

    if (this.usuario.alias != null) {
      mensaje = this.usuario.alias;  
    } else if (this.usuario.nombre) {
      mensaje = this.usuario.nombre;
    }

    mensaje += msg;

    return mensaje;
    
  }

}
