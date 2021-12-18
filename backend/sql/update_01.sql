USE recetas;

CREATE TABLE rol(
	id INT NOT NULL AUTO_INCREMENT,
	descripcion VARCHAR(250),
	codigo VARCHAR(100),
	PRIMARY KEY (id)
);

ALTER TABLE usuarios ADD id_rol int;
ALTER TABLE recetas ADD descripcion VARCHAR(250);

INSERT INTO rol (descripcion, codigo) VALUES ('Usuario que comparte y valora recetas', 'CHEF');
INSERT INTO rol (descripcion, codigo) VALUES ('Usuario que gestiona la plataforma', 'ADMIN');
INSERT INTO rol (descripcion, codigo) VALUES ('Gestiona la plataforma y es dueño', 'MASTER');

UPDATE usuarios SET id_rol = 3 WHERE e_mail='jpillado84@gmail.com';
UPDATE usuarios SET id_rol = 1 WHERE e_mail='jgonzalez@gmail.com';
UPDATE usuarios SET id_rol = 1 WHERE e_mail='mcalvo@gmail.com';
UPDATE usuarios SET id_rol = 1 WHERE e_mail='jdearco@gmail.com';
UPDATE usuarios SET id_rol = 1 WHERE e_mail='pximenez@gmail.com';
UPDATE usuarios SET id_rol = 1 WHERE e_mail='mbros@gmail.com';
UPDATE usuarios SET id_rol = 1 WHERE e_mail='mpolo@gmail.com';
UPDATE usuarios SET id_rol = 1 WHERE e_mail='lgutierrez@gmail.com';
UPDATE usuarios SET id_rol = 1 WHERE e_mail='mporro@gmail.com';
UPDATE usuarios SET id_rol = 1 WHERE e_mail='msanchez@gmail.com';

UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=1;
UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=2;
UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=3;
UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=4;
UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=5;
UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=6;
UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=7;
UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=8;
UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=9;
UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=10;
UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=11;
UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=12;
UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=13;
UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=14;
UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=15;
UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=16;
UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=17;
UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=18;
UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=19;
UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=20;
UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=21;
UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=22;
UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=23;
UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=24;
UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=25;
UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=26;
UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=27;
UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=28;
UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=29;
UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=30;
UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=31;
UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=32;
UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=33;
UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=34;
UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=35;
UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=36;
UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=37;
UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=38;
UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=39;
UPDATE recetas SET descripcion = 'Esto es una breve descripcion de la receta' WHERE id=40;