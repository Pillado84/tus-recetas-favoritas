USE recetas;

DELETE FROM valorar WHERE id_usuario = 2 AND id_receta = 44;
INSERT INTO valorar (id_receta, id_usuario, fecha_valoracion, puntos) VALUES ('44', '2', '2021-11-29', '5');

DELETE FROM valorar WHERE id_usuario = 2 AND id_receta = 10;
INSERT INTO valorar (id_receta, id_usuario, fecha_valoracion, puntos) VALUES ('10', '2', '2021-11-29', '7');

DELETE FROM valorar WHERE id_usuario = 2 AND id_receta = 15;
INSERT INTO valorar (id_receta, id_usuario, fecha_valoracion, puntos) VALUES ('15', '2', '2021-11-29', '4');

DELETE FROM valorar WHERE id_usuario = 2 AND id_receta = 14;
INSERT INTO valorar (id_receta, id_usuario, fecha_valoracion, puntos) VALUES ('14', '2', '2021-11-29', '6');

DELETE FROM valorar WHERE id_usuario = 3 AND id_receta = 28;
INSERT INTO valorar (id_receta, id_usuario, fecha_valoracion, puntos) VALUES ('28', '3', '2021-11-29', '6');

DELETE FROM valorar WHERE id_usuario = 5 AND id_receta = 39;
INSERT INTO valorar (id_receta, id_usuario, fecha_valoracion, puntos) VALUES ('39', '5', '2021-11-29', '4');

DELETE FROM valorar WHERE id_usuario = 5 AND id_receta = 32;
INSERT INTO valorar (id_receta, id_usuario, fecha_valoracion, puntos) VALUES ('32', '2', '2021-11-29', '5');

DELETE FROM valorar WHERE id_usuario = 9 AND id_receta = 14;
INSERT INTO valorar (id_receta, id_usuario, fecha_valoracion, puntos) VALUES ('14', '9', '2021-11-29', '5');
