import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { RecetasService } from 'src/app/services/recetas.service';

@Component({
  selector: 'app-see',
  templateUrl: './see.component.html',
  styleUrls: ['./see.component.css']
})
export class SeeComponent implements OnInit {

  receta: any = [];
  id!: number;
  ingredientes!: string[];

  constructor(private recetasService: RecetasService,
              private activatedRoute: ActivatedRoute) { }

  ngOnInit(): void {
    this.activatedRoute.params.subscribe( params => this.id = params['id'] );

    this.recetasService.getRecetaById(this.id).subscribe( datos => {
      this.receta = datos;

      let ingr = this.receta.items[0].ingredientes;
      this.ingredientes = ingr.split(', ');
    } );
  }

}
