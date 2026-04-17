# TextformatterFontAwesome

Un módulo Textformatter para ProcessWire que convierte atajos de texto en iconos de Font Awesome.

## Características

- ✅ Convierte atajos como `:fa-star:` en iconos de Font Awesome
- ✅ Configuración flexible de mapeos de iconos
- ✅ Soporte para Font Awesome 6+ (solid, regular, brands)
- ✅ Carga automática de assets desde CDN
- ✅ Salida HTML o SVG
- ✅ Cache para mejor rendimiento
- ✅ Fácil configuración desde el admin de ProcessWire

## Instalación

1. Descarga o clona este módulo en `/site/modules/TextformatterFontAwesome/`
2. Ve a **Módulos** > **Refresh** en el admin de ProcessWire
3. Instala el módulo **TextformatterFontAwesome**
4. Configura los mapeos de iconos según tus necesidades

## Configuración

### Mapeos de Iconos

Define tus atajos de texto y las clases de Font Awesome correspondientes:

```
:fa-star: = fa-solid fa-star
:fa-heart: = fa-solid fa-heart
:fa-home: = fa-solid fa-house
:fa-user: = fa-solid fa-user
:fa-email: = fa-solid fa-envelope
:fa-facebook: = fa-brands fa-facebook
:fa-twitter: = fa-brands fa-twitter
```

### Opciones de Configuración

- **Formato de Salida**: HTML (CSS) o SVG
- **Cargar Assets**: Incluir automáticamente Font Awesome desde CDN
- **Versión CDN**: Versión de Font Awesome a cargar (por defecto 6.5.1)
- **CSS Personalizado**: URL opcional para CSS personalizado
- **Habilitar Cache**: Cache de mapeos para mejor rendimiento

## Uso

### 1. Aplicar a Campos

Ve a **Configuración** > **Campos** > selecciona tu campo de texto y en la pestaña **Detalles**:

1. En **Textformatters aplicados**, selecciona **Font Awesome Icons**
2. Guarda el campo

### 2. Usar en Plantillas

```php
// El textformatter se aplica automáticamente al renderizar el campo
echo $page->body; // Los atajos :fa-star: se convierten automáticamente

// O aplicar manualmente
$textformatter = $modules->get('TextformatterFontAwesome');
$text = "Me gusta esta página :fa-heart: ¡Es genial! :fa-star:";
$textformatter->format($text);
echo $text; // Salida: Me gusta esta página <i class="fa-solid fa-heart"></i> ¡Es genial! <i class="fa-solid fa-star"></i>
```

### 3. Ejemplos de Atajos

| Atajo | Resultado | Descripción |
|-------|-----------|-------------|
| `:fa-star:` | `<i class="fa-solid fa-star"></i>` | Estrella sólida |
| `:fa-heart:` | `<i class="fa-solid fa-heart"></i>` | Corazón sólido |
| `:fa-home:` | `<i class="fa-solid fa-house"></i>` | Casa sólida |
| `:fa-facebook:` | `<i class="fa-brands fa-facebook"></i>` | Logo Facebook |
| `:fa-email:` | `<i class="fa-solid fa-envelope"></i>` | Sobre de correo |

## Ejemplos de Uso en Contenido

### En un Editor de Texto

```
¡Bienvenido a nuestro sitio! :fa-star:

Contáctanos:
- Email: info@ejemplo.com :fa-email:
- Teléfono: +1234567890 :fa-phone:

Síguenos en redes sociales:
- Facebook :fa-facebook:
- Twitter :fa-twitter:
- Instagram :fa-instagram:

¡Gracias por visitarnos! :fa-heart:
```

### Resultado HTML

```html
¡Bienvenido a nuestro sitio! <i class="fa-solid fa-star"></i>

Contáctanos:
- Email: info@ejemplo.com <i class="fa-solid fa-envelope"></i>
- Teléfono: +1234567890 <i class="fa-solid fa-phone"></i>

Síguenos en redes sociales:
- Facebook <i class="fa-brands fa-facebook"></i>
- Twitter <i class="fa-brands fa-twitter"></i>
- Instagram <i class="fa-brands fa-instagram"></i>

¡Gracias por visitarnos! <i class="fa-solid fa-heart"></i>
```

## Personalización Avanzada

### Mapeos Personalizados

Puedes crear tus propios atajos:

```
:mi-icono: = fa-solid fa-custom-icon
:empresa: = fa-solid fa-building
:producto: = fa-solid fa-box
```

### CSS Personalizado

Si usas Font Awesome Pro o tienes iconos personalizados:

```css
.fa-custom-icon::before {
    content: "\f123";
}
```

### Uso Programático

```php
// Obtener el módulo
$fa = $modules->get('TextformatterFontAwesome');

// Formatear texto
$content = "Texto con iconos :fa-star: y :fa-heart:";
$fa->format($content);
echo $content;

// Configurar dinámicamente
$fa->set('outputFormat', 'svg');
$fa->set('loadAssets', false);
```

## Rendimiento

- El módulo incluye cache para los mapeos parseados
- Los assets se cargan solo cuando es necesario
- Detección inteligente de contenido con iconos

## Compatibilidad

- ProcessWire 3.0+
- Font Awesome 6.0+
- PHP 7.4+

## Soporte

Para reportar bugs o solicitar características, visita:
[GitHub Issues](https://github.com/yourusername/TextformatterFontAwesome/issues)

## Licencia

Mozilla Public License v2.0

## Créditos

Basado en [TextformatterEmoji](https://github.com/ryancramerdesign/TextformatterEmoji) por Ryan Cramer.