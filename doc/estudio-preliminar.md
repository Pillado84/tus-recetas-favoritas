# Estudio preliminar

## 1. Introducción

El proyecto trata sobre la creación de una plataforma web de contenido digital cuya temática es la cocina. En concreto se trata de un recetario online, además de un punto de encuentro para ese chef que todo el mundo lleva dentro, donde los usuarios podrían realizar las siguientes acciones:

- Consulta de recetas categorizadas.
- Buscar recetas (por dificultad, nº de comensales, para clientes,...)
- Crear un perfil Chef en la plataforma.
- Dar de alta recetas propias.
- Opinar y valorar otras recetas.

La arquitectura de la navegación será fija pero el menú irá cambiando para adaptarse a la estacionalidad de algunas recetas con productos de temporada.
Los usuarios podrán compartir entre sus propios contactos en las redes sociales como parte de un evento especial o para determinar cual será el menú para un determinado evento.

## 2. Objectivo

- Implementar una plataforma digital online para la publicación, consulta y puntuación de recetas de cocina
- Facilitar la búsqueda de culaquier receta, ya sea a través de sus ingredientes, número de comnesales o dificultad de elaboración.
- Fomentar la compartición de recetas de cocina.
- Fomentar la autogeneración de contenido.
- Fomentar la competencia mediante la puntuación y ranking del perfil de cada miembro.
- Divulgar conceptos gastronómicos.

## 3. Audiencia

Comer es, para muchos, uno de los principales placeres de la vida. Pero no siempre sabemos ser originales, no repetir el menú día tras día o conseguir hacer un postre a la altura de los invitados que vienen a cenar. Sea como sea, si eres de esas personas que se pasa la vida entre fogones o si te estás iniciando en los aspectos más básicos de la gastronomía, tanto si te gusta la cocina oriental y no sabes por dónde empezar, si quieres hacer unas simples lentejas o si no sabes cómo utilizar la nueva olla o robot de cocina que te han regalado. La web se orienta para todos los niveles y gustos con mucha mejor pinta que todas esas fotos y vídeos que ves en Facebook o Instagram con dudosa fiabilidad y que nunca salen bien aqui podrás consultar y replicar recetas culinarias.

## 4. Necesidades

En la actualidad, el desarrollo de aplicaciones web dedicadas a la gastronomía está bastante saturado, lo cual hace que desarrollar una aplicación origuinal y que sea capaz de perdurar en el tiempo además de rentable, sea un reto no exento de dificultades.

## 5. Tecnologias

La aplicación se divide en dos partes, la primera relacionada con el backend y sa legunda relacionada con el frontend.

-  5.1. Backend

Aquí tenemos una base de datos relacional usando mysql y phpmyadmin para gestionarla. Tambien tenemos una pequeña api que usarmos para el CRUD basada en el lenguaje php.

- 5.2. Frontend

Aqui hay una api que el usuario final usara para interactuar con la información, para esta api usaremos principalmente dos frameworks uno es Angular y el otro es Bootstrap.