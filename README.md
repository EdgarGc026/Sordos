<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Instalacion
Para comenzar a trabajar con laravel necesita las siguientes herramienta:

* Composer: [Descargar desde aqui](https://getcomposer.org/download/). 
* NodeJS: [Descargar desde aqui](https://nodejs.org/es/)

Una vez instaladas las herramientas necesarias procedemos a la instalación de laravel mediante composer. para ello se ejecuta el siguiente comando:

`composer global require laravel/installer` 

Este comando es de caracter global y solo debes ejecutarlo una vez, ya que composer lo guarda en cache.

El proyecto lo ejecuto desde la ruta `/xampp/htdocs/` porque trabajo con xampp y mysql.

## Correr el proyecto

Para ejecutar el proyecto, en la terminal debe ejecutarse el siguiente comando:

`php artisan serve`

Por defecto, laravel usa el `puerto:8000`

## Navegacion

Debe registrarse e iniciar sesión
Ya estando ahí, debe crear un examen.
Cuando termine de crearlo le aparece en una tabla
En la tabla habrá un botón verde, ahi debe clickear para crear la primera pregunta
Las preguntas y respuestas solo tienen disponibles la descripción de la pregunta y el campo donde puede agregar el iframe.

## Posibles problemas

Si presenta algunos problemas (tales como que auth no se vea con estilos, o no encuentre algunas dependenecias) debe ejecutar el comando:

` composer require laravel/ui`

`php artisan ui bootstrap`

`npm install`

## Nota

La primera versión del template para mostrar las preguntas y respuestas aun no esta completo, falta desplegar los datos para las respuesta. Esto lo ire trabajando el fin de semana.
