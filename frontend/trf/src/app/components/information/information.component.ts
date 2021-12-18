import { UserModel } from './../../models/user.model';
import { UserService } from './../../services/user.service';
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-information',
  templateUrl: './information.component.html',
  styleUrls: ['./information.component.css']
})
export class InformationComponent implements OnInit {
  
  usuario!: UserModel;

  constructor(private userService: UserService) { }

  ngOnInit(): void {
    this.userService.getById(2).subscribe( (datos: any) => {
      this.usuario = datos.items[0];
    });
  }

}
