import { RecetasService } from './../../services/recetas.service';
import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {

  recetas: any = [];

  constructor(private recetasService: RecetasService, private router: Router) { }

  ngOnInit(): void {
    this.recetasService.getRecetas().subscribe( (datos:any) => {
      this.recetas = datos;
      // console.log(this.recetas);
    });
  }
}
