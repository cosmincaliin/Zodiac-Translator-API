# API de Predicciones de Signos del Zodíaco

Esta API está diseñada para proporcionar predicciones de signos del zodíaco en varios idiomas para una fecha específica. Utilizando el framework Laravel, la API traduce y ofrece horóscopos en los siguientes idiomas:

- Español (es)
- Inglés (en)
- Alemán (de)
- Ruso (ru)
- Chino (zh-CN)
- Francés (fr)
- Italiano (it)
- Polaco (pl)

## Configuración y Despliegue

Para implementar esta API en tu entorno local, sigue los pasos a continuación:

### Requisitos Previos

Asegúrate de tener instalados los siguientes componentes:

- PHP >= 7.3
- Composer
- Laravel

### Instalación

1. Clona el repositorio:
```bash
git clone https://github.com/tu_usuario/laravel-zodiac-api.git
```

2. Navega al directorio del proyecto:
```bash
cd laravel-zodiac-api
```

4. Instala las dependencias necesarias:
```bash
composer install
```

5. Configura tu archivo `.env`:
```bash
cp .env.example .env
php artisan key:generate
```

7. Configura la base de datos en tu archivo `.env` y migra las tablas necesarias:
```bash
php artisan migrate
```

9. Inicia el servidor de desarrollo:
```bash
php artisan serve
```

Ahora tu API debería estar ejecutándose en `http://localhost:8000`.

## Uso de la API

Para obtener la predicción de un signo del zodíaco en un idioma específico para una fecha determinada, realiza una solicitud GET a la siguiente URL:

### Endpoint de Solicitud

`GET /{idioma}/{signo}/{fecha}`

### Parámetros

- `idioma` El idioma en el que deseas obtener la predicción. Debe ser uno de los idiomas soportados (por ejemplo, `es`para español, `en` para inglés, etc.).
- `signo`: El signo del zodíaco para el cual deseas obtener la predicción (por ejemplo, `leo`, `aries`, `cancer`, etc.).
- `fecha`: La fecha para la cual deseas la predicción en formato `YYYY-MM-DD`.

### Ejemplo de Solicitud

```bash
GET /es/leo/2023-01-01
```

### Respuesta Exitosa

Si la solicitud es exitosa, recibirás una respuesta con la predicción para el signo y fecha especificados en el idioma solicitado. La respuesta tendrá el siguiente formato:

```bash
{
"prediction": "Hoy tendrás un día lleno de energía positiva y nuevas oportunidades. Es un buen momento para..."
}
```

### Respuesta de Error

Si no se encuentra la predicción para el signo y fecha especificados, recibirás una respuesta de error con el siguiente formato:

```bash
{
"error": "No se encontró la predicción para el signo y la fecha especificados."
}
```

## Ejemplos de Uso

Aquí hay algunos ejemplos de cómo puedes hacer solicitudes a la API:

1. **Predicción en Español para Leo el 1 de enero de 2023**:
```bash
GET /es/leo/2023-01-01
```

3. **Predicción en Inglés para Aries el 15 de febrero de 2023**:
```bash
GET /en/aries/2023-02-15
```

4. **Predicción en Chino para Cáncer el 10 de marzo de 2023**:
```bash
GET /zh-CN/cancer/2023-03-10
```

## Contribuciones

Si deseas contribuir a este proyecto, por favor sigue estos pasos:

1. Haz un fork del repositorio.
2. Crea una nueva rama (`git checkout -b feature/nueva-funcionalidad`).
3. Realiza tus cambios y haz commit (`git commit -am 'Añadir nueva funcionalidad'`).
4. Haz push a la rama (`git push origin feature/nueva-funcionalidad`).
5. Crea un nuevo Pull Request.

## Soporte

Si encuentras algún problema o tienes alguna pregunta, por favor abre un issue en el repositorio o contacta al administrador del proyecto.

---

Este README proporciona una visión detallada de cómo usar y desplegar la API de Predicciones de Signos del Zodíaco desarrollada con Laravel. Si necesitas más información o tienes alguna consulta específica, no dudes en contactar.
