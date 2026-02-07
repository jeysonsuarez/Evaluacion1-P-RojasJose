
UNIVERSIDAD POLITÉCNICA TERRITORIAL DEL ESTADO ARAGUA “FEDERICO BRITO FIGUEROA"

Integrantes: Jose Rojas / C.I 30864204
Trayecto 2 / seccion 1
PNF: Informatica

1. Sistema de Biblioteca: Crear entidad Libro (ID, Título:string, 
Páginas:integer, Disponible:boolean, Publicado:date).


Para el desarrollo de este sistema, se ha implementado la entidad Libro, la cual gestiona los campos de ID, Título (string), Páginas (integer), Disponible (boolean) y Publicado (date). Es importante destacar que, previo a la ejecución, se debe asegurar que el archivo .env de prueba cuente con la configuración correcta de la base de datos (host, puerto, nombre de BD y credenciales). Una vez verificada la conexión, se procede con la preparación del entorno mediante los comandos php artisan migrate para la creación de tablas, php artisan migrate:fresh --seed para el truncado y carga de datos iniciales, y finalmente php artisan serve para iniciar el servidor de desarrollo.