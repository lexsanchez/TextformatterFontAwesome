# TextformatterFontAwesome

A Textformatter module for ProcessWire that converts text shortcuts into Font Awesome icons.

## Features

- ✅ Converts shortcuts like `:fa-star:` into Font Awesome icons
- ✅ Flexible icon mapping configuration
- ✅ Support for Font Awesome 6+ (solid, regular, brands)
- ✅ Automatic asset loading from CDN
- ✅ HTML or SVG output
- ✅ Cache for improved performance
- ✅ Easy configuration from the ProcessWire admin

## Installation

1. Download or clone this module into `/site/modules/TextformatterFontAwesome/`
2. Go to **Modules** > **Refresh** in the ProcessWire admin
3. Install the **TextformatterFontAwesome** module
4. Configure icon mappings as needed

## Configuration

### Icon Mappings

Define your text shortcuts and their corresponding Font Awesome classes:

```
:fa-star: = fa-solid fa-star
:fa-heart: = fa-solid fa-heart
:fa-home: = fa-solid fa-house
:fa-user: = fa-solid fa-user
:fa-email: = fa-solid fa-envelope
:fa-facebook: = fa-brands fa-facebook
:fa-twitter: = fa-brands fa-twitter
```

### Configuration Options

- **Output Format**: HTML (CSS) or SVG
- **Load Assets**: Automatically include Font Awesome from CDN
- **CDN Version**: Font Awesome version to load (default 6.5.1)
- **Custom CSS**: Optional URL for custom CSS
- **Enable Cache**: Cache mappings for improved performance

## Usage

### 1. Apply to Fields

Go to **Setup** > **Fields** > select your text field and in the **Details** tab:

1. Under **Applied Textformatters**, select **Font Awesome Icons**
2. Save the field

### 2. Use in Templates

```php
// The textformatter is automatically applied when rendering the field
echo $page->body; // Shortcuts like :fa-star: are converted automatically

// Or apply manually
$textformatter = $modules->get('TextformatterFontAwesome');
$text = "I like this page :fa-heart: It's great! :fa-star:";
$textformatter->format($text);
echo $text; // Output: I like this page <i class="fa-solid fa-heart"></i> It's great! <i class="fa-solid fa-star"></i>
```

### 3. Shortcut Examples

| Shortcut | Result | Description |
|----------|--------|-------------|
| `:fa-star:` | `<i class="fa-solid fa-star"></i>` | Solid star |
| `:fa-heart:` | `<i class="fa-solid fa-heart"></i>` | Solid heart |
| `:fa-home:` | `<i class="fa-solid fa-house"></i>` | Solid house |
| `:fa-facebook:` | `<i class="fa-brands fa-facebook"></i>` | Facebook logo |
| `:fa-email:` | `<i class="fa-solid fa-envelope"></i>` | Email envelope |

## Content Usage Examples

### In a Text Editor

```
Welcome to our site! :fa-star:

Contact us:
- Email: info@example.com :fa-email:
- Phone: +1234567890 :fa-phone:

Follow us on social media:
- Facebook :fa-facebook:
- Twitter :fa-twitter:
- Instagram :fa-instagram:

Thanks for visiting! :fa-heart:
```

### HTML Output

```html
Welcome to our site! <i class="fa-solid fa-star"></i>

Contact us:
- Email: info@example.com <i class="fa-solid fa-envelope"></i>
- Phone: +1234567890 <i class="fa-solid fa-phone"></i>

Follow us on social media:
- Facebook <i class="fa-brands fa-facebook"></i>
- Twitter <i class="fa-brands fa-twitter"></i>
- Instagram <i class="fa-brands fa-instagram"></i>

Thanks for visiting! <i class="fa-solid fa-heart"></i>
```

## Advanced Customization

### Custom Mappings

You can create your own shortcuts:

```
:my-icon: = fa-solid fa-custom-icon
:company: = fa-solid fa-building
:product: = fa-solid fa-box
```

### Custom CSS

If you use Font Awesome Pro or have custom icons:

```css
.fa-custom-icon::before {
    content: "\f123";
}
```

### Programmatic Usage

```php
// Get the module
$fa = $modules->get('TextformatterFontAwesome');

// Format text
$content = "Text with icons :fa-star: and :fa-heart:";
$fa->format($content);
echo $content;

// Configure dynamically
$fa->set('outputFormat', 'svg');
$fa->set('loadAssets', false);
```

## Performance

- The module includes cache for parsed mappings
- Assets are loaded only when needed
- Smart detection of content with icons

## Compatibility

- ProcessWire 3.0+
- Font Awesome 6.0+
- PHP 7.4+

## Support

To report bugs or request features, visit:
[GitHub Issues](https://github.com/yourusername/TextformatterFontAwesome/issues)

## License

Mozilla Public License v2.0

## Credits

Based on [TextformatterEmoji](https://github.com/ryancramerdesign/TextformatterEmoji) by Ryan Cramer.
