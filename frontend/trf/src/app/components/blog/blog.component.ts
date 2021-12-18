import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { RecetasService } from 'src/app/services/recetas.service';

@Component({
  selector: 'app-blog',
  templateUrl: './blog.component.html',
  styleUrls: ['./blog.component.css']
})
export class BlogComponent implements OnInit {

  recetas:any = [];

  tabla: boolean = true;
  new: boolean = false;

  constructor(private recetasService: RecetasService, private router: Router) { }

  ngOnInit(): void {
    // Simulamos que se ha iniciado sesion
    this.recetasService.getRecetaByIdUsuario(2).subscribe( datos => this.recetas = datos);
  }

  search(id: number) {
    this.router.navigate(['see', id]);
  }

  nueva(parametro: string) {
    /** 
     * t: tabla
     * n: new
    */
    switch (parametro) {
      case 't':
        this.tabla = true;
        this.new = false;
        break;
      case 'n':
        this.tabla = false;
        this.new = true;
        break;
      default:
        break;
    }
  }

}
