import { UserModel } from './../../models/user.model';
import { Component, OnInit } from '@angular/core';
import { FormGroup } from '@angular/forms';

@Component({
  selector: 'app-signup',
  templateUrl: './signup.component.html',
  styleUrls: ['./signup.component.css']
})
export class SignupComponent implements OnInit {

  contacto!: FormGroup;
  usuario!: UserModel;

  constructor() { }

  ngOnInit(): void {
  }

}
