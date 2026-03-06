# Práctica 2 - Herencia y reutilización de código en PHP

## Objetivo
Implementar herencia en PHP mediante la extensión de clases, reutilizando atributos y métodos de una clase base.

## Explicación de la herencia aplicada
En esta práctica se utilizó herencia en PHP.  
Se creó la clase `Admin` que extiende de la clase `Usuario`.  
Esto permite reutilizar los atributos y métodos de la clase base sin tener que volver a escribirlos.

La herencia se aplica utilizando la palabra clave `extends`.

## Diferencias entre Usuario y Admin

Clase Usuario:
- Es la clase base.
- Contiene los atributos privados `nombre` y `correo`.
- Tiene métodos para obtener y modificar esos datos.

Clase Admin:
- Hereda de la clase `Usuario`.
- Puede utilizar los métodos `getNombre()` y `getCorreo()`.
- Agrega un método propio llamado `getRol()` que retorna "Administrador".

## Evidencia de ejecución

Abrir una terminal dentro de la carpeta practica-2

Ejecutar el siguiente comando para iniciar el servidor integrado de PHP: php -S 

php -S localhost:8000

Después  abrir el navegador en:

http://localhost:8000

El resultado muestra en pantalla los datos del administrador:
- Nombre
- Correo
- Rol

## link del video de prueba
https://youtu.be/gOzkiOCKjVo