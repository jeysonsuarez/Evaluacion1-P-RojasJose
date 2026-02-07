
UNIVERSIDAD POLITÉCNICA TERRITORIAL DEL ESTADO ARAGUA “FEDERICO BRITO FIGUEROA"

Integrantes: Jose Rojas / C.I 30864204
Trayecto 2 / seccion 1
PNF: Informatica

Enunciado 1: Sistema de Biblioteca


1. Configurar el entorno: el archivo .env.example cambiale el nombre a .env y asegurate que dentro diga DB_CONNECTION=sqlite

2. Crear la estructura: Ejecuta el comando php artisan migrate para generar las tablas en la base de datos (incluyendo la entidad Libro).

3. Limpiar y poblar datos: Utiliza php artisan migrate:fresh --seed para truncar las tablas existentes y cargar los datos iniciales de prueba.

4. Iniciar el sistema: Ejecuta php artisan serve para levantar el servidor de desarrollo local.
