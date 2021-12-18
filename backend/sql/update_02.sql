USE recetas;

ALTER TABLE usuarios ADD CONSTRAINT FK_rol_usuarios FOREIGN KEY (id_rol) REFERENCES rol(id) ON UPDATE CASCADE ON DELETE CASCADE;
ALTER TABLE usuarios ADD descripcion VARCHAR(250);
ALTER TABLE tipo ADD color VARCHAR(100);

ALTER TABLE recetas DROP FOREIGN KEY FK_tipo_recetas;
ALTER TABLE recetas DROP COLUMN id_tipo;

CREATE TABLE recetas_tipo(
	id_recetas INT NOT NULL,
	id_tipo INT NOT NULL,
	CONSTRAINT FK_recetas_recetas_tipo
	FOREIGN KEY (id_recetas) REFERENCES recetas (id) ON UPDATE CASCADE ON DELETE CASCADE,
	CONSTRAINT FK_tipo_recetas_tipo
	FOREIGN KEY (id_tipo) REFERENCES tipo (id) ON UPDATE CASCADE ON DELETE CASCADE
);

UPDATE usuarios SET descripcion = 'Soy un chef aficionado que le cojio el gusto a hacer de comer hace poco' WHERE e_mail='jpillado84@gmail.com';
UPDATE usuarios SET descripcion = 'Soy un chef experto que quiere compartir sus mejores recetas' WHERE e_mail='jgonzalez@gmail.com';
UPDATE usuarios SET descripcion = 'Chef 5 estrellas con mucha experiencia en la hosteleria' WHERE e_mail='jdearco@gmail.com';
UPDATE usuarios SET descripcion = 'Aprendiz de cocina con ganas de aprender' WHERE e_mail='pximenez@gmail.com';
UPDATE usuarios SET descripcion = 'Experimentado chef con ganas de compartir y ver lo mucho que os gusta' WHERE e_mail='lgutierrez@gmail.com';


UPDATE tipo SET color = '--nord11' WHERE nombre='Postres';
UPDATE tipo SET color = '--nord12' WHERE nombre='Tapas';
UPDATE tipo SET color = '--nord13' WHERE nombre='Cóctel';
UPDATE tipo SET color = '--nord14' WHERE nombre='Comidas';
UPDATE tipo SET color = '--nord15' WHERE nombre='Desayunos';
UPDATE tipo SET color = '--nord10' WHERE nombre='Bocadillos';

INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('1', '4');
INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('2', '1');
INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('3', '3');
INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('4', '2');
INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('5', '6');

INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('6', '3');
INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('7', '1');
INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('8', '1');
INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('9', '4');
INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('10', '5');

INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('11', '2');
INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('12', '4');
INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('13', '2');
INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('14', '4');
INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('15', '4');

INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('16', '1');
INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('17', '4');
INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('18', '1');
INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('19', '5');
INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('20', '3');

INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('21', '1');
INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('22', '2');
INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('23', '5');
INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('24', '6');
INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('25', '6');

INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('26', '6');
INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('27', '6');
INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('28', '3');
INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('29', '4');
INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('30', '5');

INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('31', '3');
INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('32', '3');
INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('33', '3');
INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('34', '6');
INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('35', '6');

INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('36', '3');
INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('37', '3');
INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('38', '6');

INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('39', '3');
INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('40', '3');
INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('41', '3');
INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('42', '6');
INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('43', '1');

INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('44', '3');
INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('45', '3');
INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('46', '3');
INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('47', '1');
INSERT INTO recetas_tipo (id_recetas, id_tipo) VALUES ('48', '1');