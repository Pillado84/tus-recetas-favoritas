export class RecetaModel {
    idReceta!: number;
    idUsuario!: number;
    usuario!: string;
    tipo!:string;
    receta!: string;
    preparacion!: string;
    fechaCreacion!: Date;
    color!: string;
    ingredientes!: string;
    imagen?: ImageBitmap;
    informacionNutricional?: string;
    descripcion?: string;
}