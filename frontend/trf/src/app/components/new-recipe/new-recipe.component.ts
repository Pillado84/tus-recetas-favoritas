import { TiposService } from './../../services/tipos.service';
import { Component, OnInit } from '@angular/core';
import { FormArray, FormBuilder, FormGroup, Validators } from '@angular/forms';

@Component({
  selector: 'app-new-recipe',
  templateUrl: './new-recipe.component.html',
  styleUrls: ['./new-recipe.component.css']
})
export class NewRecipeComponent implements OnInit {

  forma!: FormGroup;
  tipos!: any[];

  constructor(private formBuilder: FormBuilder,
    private tiposService: TiposService) {
    this.crearFormulario();
  }

  ngOnInit(): void {
    this.tiposService.getTipos().subscribe( (items: any) => this.tipos = items.items);
  }

  crearFormulario() {
    this.forma = this.formBuilder.group({
      nombre: ['', [Validators.required, Validators.minLength(5)]],
      ingredientes: this.formBuilder.array([]),
      nutricion: [],
      preparacion: ['', [Validators.required, Validators.minLength(5)]],
      url: []
    });
  }

  crearListeners() {
    this.forma.valueChanges.subscribe( valor => console.log(valor) );

    this.forma.statusChanges.subscribe( status => console.log({status}) );
  }

  get ingredientes() {
    return this.forma.get('ingredientes') as FormArray;
  }

  get nombreNoValido() {
    return this.forma.get('nombre')?.invalid && this.forma.get('nombre')?.touched;
  }

  agregarIngrediente() {
    this.ingredientes.push(this.formBuilder.control(''));
  }

  borrarIngrediente(i: number) {
    this.ingredientes.removeAt(i);
  }

  guardar() {
    if (this.forma.invalid) {
      return Object.values(this.forma.controls).forEach( control => {
        if (control instanceof FormGroup) {
          Object.values(control.controls).forEach( control => control.markAllAsTouched);
        } else {
          control.markAllAsTouched();
        }
      });
    }

    // Posteo de información

    this.forma.reset;
  }

}
