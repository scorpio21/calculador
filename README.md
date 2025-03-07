# Proyecto de Utilidades AOMania en PHP

## Descripción

Este proyecto proporciona una serie de utilidades para el juego AOMania, incluyendo cálculos de mana y habilidades de domar. Está desarrollado en PHP y diseñado para ser ejecutado en un servidor Apache.

## Estructura del Proyecto

```
php/
│
├── index.php
├── Mana.php
├── Domar.php
└── css/
    └── styles.css
```

## Archivos

### `index.php`
La página principal que redirige a las diferentes utilidades.

### `Mana.php`
Permite al usuario seleccionar una clase, ingresar inteligencia y nivel, y calcular el mana del personaje.

### `Domar.php`
Permite al usuario seleccionar una clase, carisma, criatura y calcular la habilidad necesaria para domar.

### `css/styles.css`
Contiene los estilos CSS para el proyecto.

## Requisitos

- PHP 7.0 o superior
- Servidor Apache

## Instalación

1. Clona el repositorio en tu directorio raíz de Apache:
   ```bash
   git clone https://github.com/scorpio21/utilidades.git
   ```
2. Asegúrate de que el servidor Apache esté ejecutándose.
3. Navega a la carpeta `php` dentro de tu directorio raíz de Apache:
   ```bash
   cd utilidades/php
   ```

## Uso

1. Abre tu navegador y accede a `http://localhost/utilidades/php`.
2. Selecciona la utilidad que deseas utilizar desde la página principal.

## Contribución

1. Haz un fork del repositorio.
2. Crea una nueva rama para tu funcionalidad (`git checkout -b feature/nueva-funcionalidad`).
3. Haz commit de tus cambios (`git commit -am 'Añade nueva funcionalidad'`).
4. Haz push a la rama (`git push origin feature/nueva-funcionalidad`).
5. Abre un Pull Request.

## Licencia

Este proyecto está licenciado bajo la Licencia MIT. Consulta el archivo [LICENSE](../LICENSE) para obtener más detalles.
