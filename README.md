# Proyecto de fin de ciclo DAW

> Indice
> 1. [Estudio preliminar](doc/estudio-preliminar.md)
> 2. [Analisis: Requerimientos del sistema](doc/analisis.md)
> 3. [Diseño](doc/diseño.md)

## Descripción

> El proyecto trata sobre la creación de una plataforma web de contenido digital cuya temática es la cocina. En concreto se trata de un recetario online, además de un punto de encuentro para ese chef que todo el mundo lleva dentro.

## Instalación

> Preparamos el entorno en una maquina virtual con un sistema operativo Ubunto, instalamos apache, mysql, phpMyAdmin, git, node js, npm, typescript y angular para ello abrimos una terminal y ejecutamos los siguientes comandos:
> - `sudo apt update`
> - `sudo apt install apache2`
> - `sudo apt install mysql-server`
> - `sudo apt install phpmyadmin php-mbstring php-zip php-gd php-json php-curl`
> - `apt-get install git`
> - `sudo apt install nodejs`
> - `sudo apt install npm`
> - `npm install -g typescript`
> - `npm install -g @angular/cli`
>
> Nos dirigimos al directorio `/var/www` y dentro creamos el directorio appRecetas:
> - `sudo mkdir appRecetas`
>
> Dentro del directorio que acabamos de crear es donde clonamos el repositorio:
> - `git clone https://gitlab.iessanclemente.net/dawm/a18juliopc.git`
>
> Dentro del directorio del proyecto hay un directorio llamado apache y ahi tenemos un fichero `appRecetas.conf` que hay que copiarlo en `/etc/apache2/sites-available`
>
> Modificar el fichero `/etc/hosts` con la siguiente linea:
> - `127.0.0.1 appRecetas.Local`
>
>Para abrir el proyecto nos situamos en `frontend/trf/` y ejecutamos el comando `ng serve`
>
> Para información consultar los siguientes enlaces:
> - [Instalación y configuración de mysql](https://www.digitalocean.com/community/tutorials/how-to-install-mysql-on-ubuntu-20-04-es)
> - [Instalación y configuración de phpmyadmin](https://www.digitalocean.com/community/tutorials/how-to-install-and-secure-phpmyadmin-on-ubuntu-20-04-es)
> - [Instalación y configuración de Node.js](https://www.digitalocean.com/community/tutorials/how-to-install-node-js-on-ubuntu-20-04-es)
> - [Documentación de angular](https://angular.io/docs)

## Uso

> Los usuarios de la plataforma podrían realizar las siguientes acciones:
>
>- Consulta de recetas categorizadas.
>- Buscar recetas (por dificultad, nº de comensales, para clientes,...)
>- Crear un perfil Chef en la plataforma.
>- Dar de alta recetas propias.
>- Opinar y valorar otras recetas.
>- Compartir entre sus propios contactos o en las redes sociales.

## Sobre el autor

> Mi identidad me lleva a correlacionar y hace converger la informática con la nuevas tecnologías.
>
> Los entornos en los que mejor me desenvuelvo son aquellas relacionadas con el frontend, tales como html, css, javascript y angular. Este último es un framework con el cual desarrollo algunos de los proyectos que la empresa donde realizo la FCT me ha encomendado. Además he de añadir que me encuentro actualmente  realizando un curso online para tal fin mediante la plataforma Udemy para profundizar más en mis conocimientos. 
>
> El principal motivo que me llevó a realizar este proyecto fue conseguir agrupar los conceptos adquiridos en mis primeros meses como estudiante de diseño Web con mi propio ocio (informática y gastronomía en un sólo clic)
>
> Tras un estudio de mercado realizado por las diferentes webs pude encontrar páginas con ciertas similitudes donde observé que mi idea primaria supondría una mejora sobre todas ellas haciendo más partícipe al usuario final.
>
> Datos de contacto:
> - Email: jpillado84@gmail.com / a18juliopc@iessanclemente.net
> - Teléfono: 603 87 87 39

## Licencia

> Toda la información sobre la licencia del proyecto se puede consultar en el fichero [LICENSE.md](./LICENSE.md)
