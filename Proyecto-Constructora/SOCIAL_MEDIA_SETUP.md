# Configuración de Redes Sociales

Este documento explica cómo configurar los enlaces de redes sociales en la página web.

## Ubicación

Los iconos de redes sociales aparecen en el **footer** de todas las páginas del sitio.

## Configuración

Hay dos formas de configurar las URLs de redes sociales:

### Opción 1: Usando variables de entorno (Recomendado)

Edita el archivo `.env` en la raíz del proyecto y agrega las siguientes líneas:

```env
# Redes Sociales
SOCIAL_FACEBOOK_URL=https://m.me/TU_USUARIO_DE_FACEBOOK
SOCIAL_INSTAGRAM_URL=https://www.instagram.com/TU_USUARIO_DE_INSTAGRAM

# Opcional: Deshabilitar una red social (true/false)
SOCIAL_FACEBOOK_ENABLED=true
SOCIAL_INSTAGRAM_ENABLED=true
```

**Ejemplos de URLs:**

- **Facebook Messenger**: `https://m.me/foursquareremodeling`
- **Facebook Perfil**: `https://www.facebook.com/foursquareremodeling`
- **Instagram Perfil**: `https://www.instagram.com/foursquareremodeling`

### Opción 2: Editar directamente el archivo de configuración

Edita el archivo `config/social.php` y modifica las URLs directamente:

```php
'facebook' => 'https://m.me/TU_USUARIO_DE_FACEBOOK',
'instagram' => 'https://www.instagram.com/TU_USUARIO_DE_INSTAGRAM',
```

## Formato de URLs para Mensajes

### Facebook Messenger

Para que los usuarios puedan enviar mensajes directamente a través de Messenger, usa el formato:
```
https://m.me/USUARIO_DE_FACEBOOK
```

O también puedes usar:
```
https://www.facebook.com/messages/t/USUARIO_DE_FACEBOOK
```

### Instagram

Para el perfil de Instagram:
```
https://www.instagram.com/USUARIO_DE_INSTAGRAM
```

Para mensajes directos (requiere que el usuario esté logueado en Instagram):
```
https://www.instagram.com/direct/inbox/
```

## Deshabilitar una Red Social

Si quieres ocultar temporalmente una red social sin eliminar el código, puedes deshabilitarla en el archivo `.env`:

```env
SOCIAL_FACEBOOK_ENABLED=false
```

O en `config/social.php`:

```php
'enabled' => [
    'facebook' => false,
    'instagram' => true,
],
```

## Notas Importantes

1. **Después de modificar el archivo `.env`**, no necesitas reiniciar el servidor, pero asegúrate de que los cambios se hayan guardado.

2. **Si editas `config/social.php`**, es posible que necesites limpiar la caché de configuración:
   ```bash
   php artisan config:clear
   ```

3. Los iconos se mostrarán automáticamente en el footer de todas las páginas que usen el layout principal.

4. Los enlaces se abren en una nueva pestaña (`target="_blank"`) para no interrumpir la navegación del usuario.

