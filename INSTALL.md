# Instalación del Módulo TextformatterFontAwesome

## Método 1: Instalación Manual

### Paso 1: Descargar el Módulo
1. Descarga todos los archivos del módulo
2. Crea la carpeta `/site/modules/TextformatterFontAwesome/`
3. Copia todos los archivos en esa carpeta

### Estructura de Archivos
```
/site/modules/TextformatterFontAwesome/
├── TextformatterFontAwesome.module
├── TextformatterFontAwesome.info.php
├── README.md
├── examples.php
└── INSTALL.md
```

### Paso 2: Instalar en ProcessWire
1. Ve al admin de ProcessWire
2. Navega a **Módulos** > **Refresh**
3. Busca "Font Awesome Icons Textformatter"
4. Haz clic en **Install**

## Método 2: Instalación vía Git

```bash
cd /path/to/your/processwire/site/modules/
git clone https://github.com/yourusername/TextformatterFontAwesome.git
```

## Configuración Inicial

### 1. Configurar el Módulo
1. Ve a **Módulos** > **Configure** > **TextformatterFontAwesome**
2. Revisa los mapeos de iconos por defecto
3. Ajusta la configuración según tus necesidades:
   - **Formato de Salida**: HTML o SVG
   - **Cargar Assets**: Activar para incluir Font Awesome automáticamente
   - **Versión CDN**: Versión de Font Awesome (por defecto 6.5.1)

### 2. Aplicar a Campos
1. Ve a **Configuración** > **Campos**
2. Selecciona el campo donde quieres usar iconos (ej: `body`, `content`)
3. En la pestaña **Detalles**, busca **Textformatters aplicados**
4. Selecciona **Font Awesome Icons Textformatter**
5. Guarda el campo

### 3. Configuración Avanzada (Opcional)

#### Mapeos Personalizados
Puedes agregar tus propios atajos en la configuración del módulo:

```
:mi-icono: = fa-solid fa-star
:empresa: = fa-solid fa-building
:contacto: = fa-solid fa-envelope
```

#### CSS Personalizado
Si tienes Font Awesome Pro o iconos personalizados:

1. Sube tu archivo CSS personalizado
2. En la configuración del módulo, ingresa la URL en **Custom CSS URL**

## Verificación de Instalación

### Prueba Básica
1. Crea una página de prueba
2. En un campo con el textformatter aplicado, escribe:
   ```
   Hola mundo :fa-star: Este es un test :fa-heart:
   ```
3. Guarda y visualiza la página
4. Deberías ver los iconos renderizados

### Verificar Assets
1. Inspecciona el código fuente de la página
2. Busca la inclusión de Font Awesome CSS:
   ```html
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
   ```

## Solución de Problemas

### Los iconos no aparecen
1. **Verifica que el textformatter esté aplicado al campo**
2. **Revisa que Font Awesome se esté cargando** (inspecciona el HTML)
3. **Confirma la sintaxis de los atajos** (deben estar entre `:` como `:fa-star:`)

### Assets no se cargan
1. Verifica que **"Auto-load Font Awesome Assets"** esté activado
2. Revisa la consola del navegador por errores de red
3. Considera usar una URL personalizada si el CDN no funciona

### Iconos no se muestran correctamente
1. Verifica que las clases de Font Awesome sean correctas
2. Revisa la versión de Font Awesome configurada
3. Confirma que no hay conflictos de CSS

## Desinstalación

1. Ve a **Módulos** > **Uninstall** > **TextformatterFontAwesome**
2. Confirma la desinstalación
3. Opcionalmente, elimina la carpeta del módulo

## Soporte

- **Documentación**: README.md
- **Ejemplos**: examples.php
- **Issues**: GitHub Issues (si está disponible)

## Próximos Pasos

1. Revisa el archivo `examples.php` para ver más casos de uso
2. Personaliza los mapeos según tus necesidades
3. Considera crear atajos específicos para tu sitio web