/* Crear base de datos */
DROP DATABASE IF EXISTS recetas;
CREATE DATABASE recetas;
USE recetas;

/* Crear tablas */
CREATE TABLE usuarios(
	id INT NOT NULL AUTO_INCREMENT,
	dni VARCHAR(9),
	img_avatar LONGBLOB,
	nombre VARCHAR(60) NOT NULL,
	fecha_alta DATE,
	e_mail VARCHAR(150),
	apellidos VARCHAR(150),
	alias VARCHAR(150),
	fecha_nacimiento DATE,
	contrasena VARCHAR(150),
	PRIMARY KEY (id)
	/* Relacion 1 - N con sigo mismo */
);

CREATE TABLE trucos(
	id INT NOT NULL AUTO_INCREMENT,
	id_usuario INT,
	nombre VARCHAR(60) NOT NULL,
	PRIMARY KEY (id),
	CONSTRAINT FK_usuarios_trucos
	FOREIGN KEY (id_usuario) REFERENCES usuarios (id) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE tipo(
	id INT NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(60),
	PRIMARY KEY (id)
);

CREATE TABLE recetas(
	id INT NOT NULL AUTO_INCREMENT,
	id_tipo INT,
	id_usuario INT,
	nombre VARCHAR(60),
	descripcion VARCHAR(250),
	preparacion BLOB,
	fecha_creacion DATE,
	imagen LONGBLOB,
	inf_nutricional VARCHAR(150),
	ingredientes BLOB,
	PRIMARY KEY (id),
	CONSTRAINT FK_tipo_recetas
	FOREIGN KEY (id_tipo) REFERENCES tipo (id) ON UPDATE CASCADE ON DELETE CASCADE,
	CONSTRAINT FK_usuarios_recetas
	FOREIGN KEY (id_usuario) REFERENCES usuarios (id) ON UPDATE CASCADE ON DELETE CASCADE
	/* Relacion 1 - N con sigo mismo */
);

CREATE TABLE comentarios(
	id INT NOT NULL AUTO_INCREMENT,
	id_usuario INT,
	id_receta INT,
	comentario BLOB,
	fecha_comentario DATE,
	PRIMARY KEY (id),
	CONSTRAINT FK_usuarios_comentarios
	FOREIGN KEY (id_usuario) REFERENCES usuarios (id) ON UPDATE CASCADE ON DELETE CASCADE,
	CONSTRAINT FK_recetas_comentarios
	FOREIGN KEY (id_receta) REFERENCES recetas (id) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE valorar(
	id INT NOT NULL AUTO_INCREMENT,
	id_usuario INT,
	id_receta INT,
	fecha_valoracion DATE,
	puntos INT,
	PRIMARY KEY (id),
	CONSTRAINT FK_usuarios_valorar
	FOREIGN KEY (id_usuario) REFERENCES usuarios (id) ON UPDATE CASCADE ON DELETE CASCADE,
	CONSTRAINT FK_recetas_valorar
	FOREIGN KEY (id_receta) REFERENCES recetas (id) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE sociales(
	id INT NOT NULL AUTO_INCREMENT,
	id_usuario INT,
	nombre VARCHAR(60),
	url VARCHAR(150),
	usuario VARCHAR(60),
	PRIMARY KEY (id),
	CONSTRAINT FK_usuarios_sociales
	FOREIGN KEY (id_usuario) REFERENCES usuarios (id) ON UPDATE CASCADE ON DELETE CASCADE
);
