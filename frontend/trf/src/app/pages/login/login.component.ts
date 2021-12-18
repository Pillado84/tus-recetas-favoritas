import { UserModel } from './../../models/user.model';
import { Router } from '@angular/router';
import { AuthService } from './../../services/auth.service';
import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { HttpClient } from '@angular/common/http';
import { first } from 'rxjs/operators';

declare var ventana4: any; // para utilizar las funciones de javascript sweetAlert.js

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {
  contacto!: FormGroup;
  submitted = false;

  user!: UserModel;

  constructor(private auth: AuthService,
    private formBuilder: FormBuilder,
    private http: HttpClient,
    private router: Router) { }

  ngOnInit(): void {
    this.contacto = this.formBuilder.group({
      email: ['', [Validators.required, Validators.email]],
      password: ['', Validators.required]
    })
  }

  // Retorna al formulario cuando hay errores
  get f() { return this.contacto.controls; }

  login() {
    this.submitted = true;

    if (this.contacto.invalid) {
      return;
    }

    this.IniciarSesion(this.contacto);
  }

  ventana4(){
    this.ventana4();
  }

  IniciarSesion(contacto: FormGroup) {
    this.auth.userLogin(contacto.value.email, contacto.value.password)
      .pipe( first())
      .subscribe( (data: any) => {
        const redirect = this.auth.redirectUrl ? this.auth.redirectUrl : '/home';
        this.router.navigate([redirect]);
      }, error => {
        this.ventana4(); // mensaje javascripts
      })
  }

}
