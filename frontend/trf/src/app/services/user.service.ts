import { UserModel } from './../models/user.model';
import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { map } from 'rxjs/operators';

@Injectable({
  providedIn: 'root'
})
export class UserService {

  constructor(private http: HttpClient) { }

  getByEmail(email: string) {
    return this.http.get(`http://apprecetas.local/json/Usuarios/?email=${email}`);
  }

  getById(id: number) {
    return this.http.get(`http://apprecetas.local/json/Usuarios/?id=${id}`);
  }
}
