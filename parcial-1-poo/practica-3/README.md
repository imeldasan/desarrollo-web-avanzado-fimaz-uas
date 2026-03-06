# Práctica 3 - Sistema de Usuarios con Validaciones y Excepciones

## Objetivo
Desarrollar un sistema de usuarios utilizando Programación Orientada a Objetos en PHP, aplicando herencia, encapsulamiento y manejo de excepciones.

## Estructura del proyecto

practica-3
│
├── clases
│   ├── Usuario.php
│   ├── Admin.php
│   └── Alumno.php
│
├── index.php
└── README.md

## Descripción

Se creó una clase base llamada Usuario que contiene los atributos nombre y correo.

Las clases Admin y Alumno heredan de Usuario.

La clase Alumno agrega el atributo matricula.

También se implementó validación del correo electrónico y manejo de excepciones para evitar errores en el sistema.

## Instrucciones de ejecución
Abrir una terminal dentro de la carpeta practica-1.

Ejecutar el siguiente comando para iniciar el servidor integrado de PHP: 
php -S localhost:8000

Abrir el navegador y acceder a: ç
http://localhost:8000/index.php

## enlace del vídeo de prueba
https://youtu.be/6Kh0e7keOTY