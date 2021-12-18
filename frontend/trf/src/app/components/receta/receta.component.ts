import { Component, Input, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-receta',
  templateUrl: './receta.component.html',
  styleUrls: ['./receta.component.css']
})
export class RecetaComponent implements OnInit {

  mensaje!: string;

  @Input()
  receta!: any;
  @Input()
  index!: number;

  constructor(private router: Router) { }

  ngOnInit(): void { }

  search(id: number) {
    this.router.navigate(['see', id]);
  }

  descripcionIsNull() {
    let isNull = false;

    if (this.receta.descripcion == null) {
      isNull = true;
      this.mensaje = 'Esta receta no tiene una descripcion.';
    }

    return isNull;
  }

}
