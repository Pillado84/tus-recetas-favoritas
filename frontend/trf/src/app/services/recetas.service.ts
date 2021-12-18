import { RecetaModel } from './../models/receta.model';
import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { map } from 'rxjs/operators';

@Injectable({
  providedIn: 'root'
})
export class RecetasService {

  constructor(private http: HttpClient) { }

  getRecetas() {
    return this.http.get('http://apprecetas.local/json/recetas/');
  }

  getRecetaByName(name: string) {
    return this.http.get(`http://apprecetas.local/json/recetas/?name=${name}`);
  }

  getRecetaById(id: number) {
    return this.http.get(`http://apprecetas.local/json/recetas/?id=${id}`);
  }

  getRecetaByIdUsuario(id: number) {
    return this.http.get(`http://apprecetas.local/json/recetas/?idUsuario=${id}`);
  }

  getRecetaByTipo(tipo: string) {
    return this.http.get(`http://apprecetas.local/json/recetas/?tipo=${tipo}`);
  }
}
