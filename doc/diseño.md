# Diseño

## Modelo conceptual del dominio de la aplicación

- Modelo Vista Controlador

![mvc](./img/mvc.png)

- Diagrama UML

![uml](./img/uml.png)

## Casos de uso

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
	+ Ver otros chefs con afinidad
- Usuario administrador
	+ Funciones propias para gestionar la app
	+ No tiene acceso a lo mismo que el usuario anonimo y el usuario chef
- Webmaster
    + Administrar el servidor
    + Acceder a MySQL
    + Crear usuario administrador

![ImagenDeCasosDeUso](./img/casos-de-uso.png)


## Deseño de interface de usuarios 

Los mockups presentados a continuación no representan el resultado final de la vista, si no más bien es una aproximación pues cuando se implemente puede variar algunos pequeños detalles.

- Vista para ordenadores:
	+ Inicio

	![Pantalla de inicio](./img/mockup/home.png)
	+ Perfil del usuario

	![Perfil de usuario](./img/mockup/perfil-usuario.png)
	+ Datos personales

	![Pantalla de inicio](./img/mockup/datos-personales.png)
	
	+ Cambio de contraseña

	![Pantalla de inicio](./img/mockup/cambio-contrasena.png)

	+ Blog

	![Pantalla de inicio](./img/mockup/blog.png)

	+ Crear receta

	![Pantalla de inicio](./img/mockup/crear-receta.png)

	+ Busacar, cuando esta haciondo la busqueda

	![Pantalla de inicio](./img/mockup/home-search-buscando.png)
	+ Buscar, cuando no encuentra resultados

	![Pantalla de inicio](./img/mockup/home-search-sinresultado.png)
- Vista para movil
	+ Inicio

	![Pantalla de inicio](./img/mockup/home-movil.png)
	+ Filtro

	![Pantalla de inicio](./img/mockup/home-movil-filter.png)
	+ Desplegando el menú

	![Pantalla de inicio](./img/mockup/home-movil-search.png)
	+ Buscar una receta
	+ Busqueda sin resultado

	![Pantalla de inicio](./img/mockup/home-movil-search-without-results.png)

## Diagrama de la Base de Datos.

- Modelo Entidad/Relación
![Modelo E/R de la base de datos](./img/ProyectoRecetas.png)

