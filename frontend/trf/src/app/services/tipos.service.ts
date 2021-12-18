import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class TiposService {

  constructor(private http: HttpClient) { }

  getTipos() {
    return this.http.get('http://apprecetas.local/json/tipos/');
  }
}
