# Análisis: Requerimientos del sistema

## 1. Descripción general

El proyecto trata sobre la creación de una plataforma web de contenido digital cuya temática es la cocina. En concreto se trata de un recetario online, además de un punto de encuentro para ese chef que todo el mundo lleva dentro.

## 2. Funcionalidades

- Gestión de usuarios en la BD
	+ Crear (dni, imagen, nombre, apellidos, alias, e_mail, fecha_nacimiento, contrasena)
	+ Modificar (dni, imagen, nombre, apellidos, alias, e_mail, fecha_nacimiento, contrasena)
- Gestión de redes sociales
	+ Crear (url, usuario)
	+ Modificar (url, usuario)
- Gestión de recetas.
	+ Crear (nombre, preparación, imagen, información nutricional, ingredientes, descripción)
	+ Modificar (nombre, preparación, imagen, información nutricional, ingredientes, descripción)
- Gestión de tipos
	+ Crear (nombre)
- Gestión de comentarios
	+ Crear (comentario)
- Gestión de trucos
	+ Crear (nombre)
	+ Modificar (nombre)
- Gestión de la valoración
	+ Crear (puntos)
	+ Modificar (puntos)

## 3. Tipos de usuarios

- Usuario anonimo, tiene acceso a:
	+ Ver el listado de recetas
	+ Poder filtrarlas y hacer busqueda
	+ Visualizarlas.
- Usuario chef, tiene acceso a:
	+ Acceso a lo mismo que el usuario anonimo
	+ Valorar y comentar
	+ Ver su blog de recetas
	+ Añadir receta, tiene dos estados
		* Publico
		* Privado
	+ Ver otros chefs con votaciones similares
- Usuario administrador
	+ Funciones propias para gestionar la app
	+ No tiene acceso a lo mismo que el usuario anonimo y el usuario chef
- Webmaster
    + Administrar el servidor
    + Acceder a MySQL
    + Crear usuario administrador

## 4. Entorno operacional

### 4.1. Dominio

El proyecto esta en fase de desarro y por lo tanto el backend y el frontend se encuentra en una sola maquina virtual con el sistema operativo Ubuntu.

### 4.2. Hardware

Ordenador para el desarrollo de la aplicación y la visualización.

### 4.3. Software

El software a instalar es el siguiente:
- Servidor Web apache
- MySQL y phpMyAdmin
- Node.js y npm
- Typescript cli y Angular cli
- Opcionalmente un IDE como Visual Studio Code

## 5. Interfaces externos

- Hardware:
	+ Ordenador de sobremesa o portatil
	+ Tablet
	+ Smartphone
- Software:
	+ Navegador como por ejemplo chrome

## 6. Mejoras futuras

- Corrección en la base de datos:
	+ Aplicar una relación reflexiva a la tabla usuarios para llevar el tema de seguimiento de usuarios.
- Backend:
	+ Obtener un json con los datos de las tablas dificultad y duración
	+ Obtener recetas por su tipo, duración, dificultad
	+ Gestion de cuentas de usuario, registro y login
- Frontend:
	+ Correccion en la función de busqueda para el boton buscar
	+ Obtener datos de las tablas duración y dificultad para presentarlos en el filtro.
	+ Implementación de filtro por tipo, dificultad y duración
	+ Implementación de usuarios, login y registro
	+ Implementación de la votación de una receta
	+ Implementar comentarios de recetas
	+ Implementar seguimiento de usuarios
	+ Implementar afinidad
	+ Mejoras en diseño