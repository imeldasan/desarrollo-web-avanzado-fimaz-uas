# CRUD de Productos con PHP, PDO y POO

##  Descripción de la actividad

Este proyecto consiste en el desarrollo de un sistema CRUD (Crear, Leer, Actualizar y Eliminar) para la gestión de productos utilizando **PHP**, **PDO** y **Programación Orientada a Objetos (POO)**.

En este sistema, cada producto se maneja como un objeto. La conexión a la base de datos se encapsula en una clase independiente para facilitar su reutilización. El CRUD se concentra en un controlador que utiliza **PDO con consultas preparadas**, lo que permite trabajar de forma segura y evitar inyecciones SQL.

Finalmente, la página principal integra un formulario y una tabla en una sola interfaz, permitiendo capturar y visualizar la información de manera sencilla.

---

##  Estructura del proyecto

El proyecto está organizado en las siguientes carpetas y archivos:

###  config

* **Database.php**
  Se encarga de establecer la conexión con la base de datos MySQL utilizando PDO.

---

###  models

* **Producto.php**
  Define la clase Producto, incluyendo sus atributos (id, nombre, descripción, existencia, precio) y sus métodos (getters y setters).

---

### controllers

* **ProductoController.php**
  Contiene la lógica del CRUD:

  * Insertar productos
  * Consultar productos
  * Actualizar productos
  * Eliminar productos

  Utiliza consultas preparadas con PDO para mayor seguridad.

---

###  index.php

Archivo principal del sistema:

* Muestra el formulario para agregar o editar productos
* Muestra la tabla con la lista de productos
* Permite realizar acciones de editar y eliminar
* Integra toda la funcionalidad en una sola interfaz

---

##  Base de datos

El sistema utiliza MySQL. Ejemplo de tabla:

```sql
CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    descripcion VARCHAR(255),
    existencia INT,
    precio DECIMAL(10,2)
);
```

---

##  Funcionamiento

1. El usuario ingresa datos en el formulario.
2. `index.php` envía la información al controlador.
3. `ProductoController.php` procesa la acción (crear, actualizar, eliminar o listar).
4. `Producto.php` representa el objeto producto.
5. `Database.php` gestiona la conexión a la base de datos.
6. Los datos se muestran en la tabla dentro de la misma página.

---

# Ejecucion 

1. tener instalado xampp con apache y mysql corriendo
2. en htdocs tener ubicada la carpeta del proyecto 
3. en el navegador poner la ruta en la cual esta el ubicado el index por ejemplo :http://localhost/desarrollo-web-avanzado-fimaz-uas/parcial-2-pdo/practica-1/index.php
4. mostrar los resustados del sistema en el navegador

