import { HttpClient } from '@angular/common/http';
import { Injectable, Output, EventEmitter } from '@angular/core';
import { map } from 'rxjs/operators';
import { Md5 } from 'ts-md5';

@Injectable({
  providedIn: 'root'
})
export class AuthService {
  redirectUrl!: string;
  URL = 'http://apprecetas.local/json/Usuarios/';
  baseUrl = 'http://apprecetas.local/json/Usuarios/';

  @Output()
  getLoggedInName: EventEmitter<any> = new EventEmitter();

  constructor(private http: HttpClient, private httpClient: HttpClient) {
  }

  public userLogin(email: any, password: any) {
    let passwordEncriptada = this.encrypt(password);

    return this.httpClient.post<any>(this.baseUrl + 'login.php', {email, passwordEncriptada})
      .pipe( map( users => {
        this.setToken(users[0].name);
        this.getLoggedInName.emit(true);
        return users;
      }))
  }

  InserccionDatos(contacto: any) {
    return this.http.post(`${this.URL}/register.php`, JSON.stringify(contacto));
  }

  // token
  setToken(token: string) {
    localStorage.setItem('token', token);
  }

  getToken() {
    return localStorage.getItem('token');
  }

  deleteToken() {
    localStorage.removeItem('token');
  }

  isLoggedIn() {
    const userToken = this.getToken();

    if (userToken == null) {
      return true;
    }

    return false;
  }

  // Encriptar contraseña
  private encrypt(password: string) {

    const md5 = new Md5();
    const passwordEncriptada = md5.appendStr(password).end();

    return passwordEncriptada;

  }

  // JWT
  // express mysql jsonwebtoken cors
}