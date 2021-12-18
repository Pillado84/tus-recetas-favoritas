import { TiposService } from 'src/app/services/tipos.service';
import { RecetasService } from 'src/app/services/recetas.service';
import { Component, Input, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-search',
  templateUrl: './search.component.html',
  styleUrls: ['./search.component.css']
})
export class SearchComponent implements OnInit {

  recetas: any = [];

  termino!: string;
  numero!: number;
  mensaje!: string;

  constructor(private recetasService: RecetasService,
              private activatedRoute: ActivatedRoute) { }

  ngOnInit(): void {
    this.activatedRoute.params.subscribe( params => this.termino = params['termino'] );
    this.getRecetaByName(this.termino);
  }

  private getRecetaByName(termino: string){
    this.recetasService.getRecetaByName(termino).subscribe( datos => {
      this.recetas = datos;

      if (this.recetas.items.length == 0) {
        this.numero = 0;
        this.mensaje = `No existen resultados con el término: ${this.termino}`;
      }

      if (this.recetas.items.length > 0) {
        this.numero = this.recetas.items.length;
      }
    } );
  }

}
