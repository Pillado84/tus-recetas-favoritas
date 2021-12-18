import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { TiposService } from 'src/app/services/tipos.service';

@Component({
  selector: 'app-accordion',
  templateUrl: './accordion.component.html',
  styleUrls: ['./accordion.component.css']
})
export class AccordionComponent implements OnInit {

  tipos: any = [];

  constructor(private tiposService: TiposService, private router: Router) { }

  ngOnInit(): void {
    this.tiposService.getTipos().subscribe( datos => {
      this.tipos = datos;
    });
  }

  search( termino: string ) {
    this.router.navigate(['search', termino]);
  }

}
