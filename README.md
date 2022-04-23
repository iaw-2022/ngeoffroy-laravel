# Proyecto Inicial

## Idea a Implementar

> La idea principal es poder implementar un conjunto de aplicaciones que permitan administrar una base de datos
asociadas a un equipo deportivo, y consultarlos a través de distintos campos o criterios.

## Tema y Conexión

> El tema propuesto para llevar a cabo los proyectos, es el de diseñar una aplicación que permita administrar
los partidos, jugadores, torneos y localidades de los diferentes equipos de softball de bahia blanca.

## Diagrama ER

> Se debe incluir un Diagrama ER de los datos a utilizar

![ERD con entidades coloreadas (notación UML)](https://user-images.githubusercontent.com/81689515/164911475-8f747fb5-714e-481c-b911-9d9f3d5ad29a.png)


## Actualizaciones a los datos

> Dentro del proyecto PHP-Laravel:
    Los usuarios con el rol de edición podrán:
        -Cargar, editar o eliminar jugadores
        -Cargar, editar o eliminar equipos
        -Cargar, editar o eliminar partidos
        -Cargar, editar o eliminar torneos
        -Cargar, editar o eliminar localidades
    
    Los usuarios con el rol de administrador podrán:
        -Administrar usuarios
        -Mismos permisos que los usuarios con el rol de edición


## Información del Servicio Web

> El servicio web permitirá acceder a distintos datos a través de los siguientes campos:
    -Fecha de partido
    -Nombre de equipo
    -Estado del encuentro (finalizado, suspendido o aplazado)
    -Nombre de jugadores
    -Nombre de torneo
    -Por localidad

## Visualización y Acceso a la Información

> El proyecto en React/Vue permitirá al usuario consultar un partido o jugador, agregando campos o filtros necesarios para que la búsqueda sea amigable. Por ejemplo, el usuario puede ingresar un texto para filtrar partidos por nombre de torneo disputado, por ejemplo Primaveral, o consultar el promedio de un jugador a través de su apellido.
