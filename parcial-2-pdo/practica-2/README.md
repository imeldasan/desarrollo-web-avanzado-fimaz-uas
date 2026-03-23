# PRÁCTICA: TRANSACCIONES CON PDO Y MYSQL

## Descripción

En esta práctica se implementa el uso de transacciones en PHP mediante PDO (PHP Data Objects) para garantizar la integridad de los datos en una base de datos MySQL.

El sistema permite registrar alumnos y almacenar un historial de acciones (logs), aplicando los conceptos de `COMMIT` y `ROLLBACK`.

---

## Objetivo

* Implementar transacciones en PHP con PDO
* Garantizar la consistencia de los datos
* Aplicar manejo de errores en operaciones SQL
* Registrar acciones en una tabla de bitácora

---

## Estructura del proyecto

El proyecto está compuesto por un único archivo:

* `index.php`:
  Contiene la conexión a la base de datos, el formulario de registro, la lógica de transacciones y la visualización de datos.

---

## Configuración

### Ubicación del proyecto

Colocar el archivo en:
`htdocs/practica-transacciones/`

---

### Base de datos

Ejecutar las siguientes instrucciones en MySQL:

```sql
CREATE DATABASE escuela CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE escuela;

CREATE TABLE alumnos (
    idAlumno INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    correo VARCHAR(100) NOT NULL
);

CREATE TABLE logs_alumnos (
    idLog INT AUTO_INCREMENT PRIMARY KEY,
    idAlumno INT NOT NULL,
    accion VARCHAR(50) NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (idAlumno) REFERENCES alumnos(idAlumno)
);
```

---

## Funcionamiento

1. El usuario ingresa los datos del alumno mediante un formulario.

2. Al enviar el formulario:

   * Se inicia una transacción.
   * Se inserta el alumno en la tabla `alumnos`.
   * Se registra la acción en `logs_alumnos`.

3. Dependiendo del resultado:

   * Si todo es correcto → se ejecuta `COMMIT`.
   * Si ocurre un error → se ejecuta `ROLLBACK`.

---

## Pruebas realizadas

* Registro normal: los datos se almacenan correctamente en ambas tablas.
* Simulación de error: la transacción se cancela y no se guarda información.

---

## Resultados

* La tabla `alumnos` almacena los registros ingresados.
* La tabla `logs_alumnos` mantiene un historial de acciones con fecha y hora.

---