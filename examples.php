<?php namespace ProcessWire;

/**
 * Ejemplos de uso del módulo TextformatterFontAwesome
 * 
 * Este archivo muestra diferentes formas de usar el módulo
 * en tus plantillas de ProcessWire
 */

// Ejemplo 1: Uso automático en campos
// El textformatter se aplica automáticamente cuando está configurado en el campo
echo $page->body; // Los atajos se convierten automáticamente

// Ejemplo 2: Uso manual del textformatter
$textformatter = $modules->get('TextformatterFontAwesome');
$text = "¡Hola mundo! :fa-star: Este es un texto con iconos :fa-heart:";
$textformatter->format($text);
echo $text;

// Ejemplo 3: Configuración dinámica
$fa = $modules->get('TextformatterFontAwesome');
$fa->set('outputFormat', 'html');
$fa->set('loadAssets', true);

$content = "Contacto: :fa-email: | Teléfono: :fa-phone: | Ubicación: :fa-home:";
$fa->format($content);
echo $content;

// Ejemplo 4: Uso en funciones de plantilla
function formatWithIcons($text) {
    $fa = wire('modules')->get('TextformatterFontAwesome');
    $fa->format($text);
    return $text;
}

// Ejemplo 5: Mapeos personalizados para contenido específico
$customMappings = array(
    ':mi-empresa:' => 'fa-solid fa-building',
    ':mi-producto:' => 'fa-solid fa-box',
    ':mi-servicio:' => 'fa-solid fa-cogs'
);

// Ejemplo 6: Uso en bucles de páginas
foreach($pages->find("template=blog-post") as $post) {
    echo "<h2>{$post->title}</h2>";
    echo $post->body; // Si el textformatter está aplicado al campo body
}

// Ejemplo 7: Contenido de ejemplo con iconos
$sampleContent = "
Servicios que ofrecemos:

:fa-star: Desarrollo web profesional
:fa-heart: Diseño centrado en el usuario  
:fa-cog: Mantenimiento y soporte técnico
:fa-shield: Seguridad y respaldos
:fa-rocket: Optimización de rendimiento

Contáctanos:
:fa-email: info@ejemplo.com
:fa-phone: +1 (555) 123-4567
:fa-map-marker: 123 Calle Principal, Ciudad

Síguenos:
:fa-facebook: Facebook
:fa-twitter: Twitter  
:fa-instagram: Instagram
:fa-linkedin: LinkedIn
";

$fa = $modules->get('TextformatterFontAwesome');
$fa->format($sampleContent);
echo $sampleContent;