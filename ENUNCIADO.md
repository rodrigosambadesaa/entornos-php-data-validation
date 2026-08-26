# Enunciado original — validación de datos con PHP

Práctica de **Entornos de Desarrollo** centrada en validar del lado servidor los datos enviados por un formulario de registro.

## Objetivo funcional

- Crear un formulario de registro con los distintos datos personales solicitados por la práctica.
- Enviar los datos a PHP mediante formulario HTTP.
- Comprobar que los valores recibidos cumplen los formatos y restricciones esperados.
- Mostrar al usuario los errores detectados y, cuando los datos sean válidos, presentar/procesar la información recibida.
- Evitar que datos inválidos continúen hacia las operaciones posteriores de la aplicación.

La entrega antigua resolvía parte del tratamiento directamente sobre `$_POST` y utilizaba patrones habituales de PHP de la época. Esta revisión conserva el ejercicio, pero centraliza la validación, emplea PHP 8.x estricto, escapa la salida y añade pruebas automatizadas.

> El paquete histórico original que se preparó para la migración llegó corrupto y fue retirado del repositorio. Este documento recoge únicamente el alcance verificable de la práctica, sin atribuir requisitos que no puedan confirmarse.
