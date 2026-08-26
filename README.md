# Entornos de Desarrollo — Validación de datos con PHP

Modernización de la práctica de validación de un formulario de registro.

## Cambios principales

- Formulario semántico HTML5 y responsive.
- Tipos `email`, `number`, `date` y `url`, junto con restricciones nativas.
- PHP 8.x con `declare(strict_types=1)`.
- Sin `extract($_POST)`: acceso explícito y validación centralizada.
- Salida escapada con `htmlspecialchars`.
- Validación del lado servidor en `RegistrationValidator` y pruebas automatizadas.
- GitHub Actions ejecuta lint PHP y tests.

El payload histórico preparado durante la migración llegó corrupto al staging de GitHub y fue eliminado; por ello este repositorio publica la reconstrucción moderna funcional, sin afirmar que contiene la copia `legacy/` original.

## Probar

```bash
php tests/run.php
php -S localhost:8000 -t public
```
