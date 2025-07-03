# Ultraholic Theme

Ultraholic is a custom child theme of [Frost](https://frostwp.com/), built for WordPress Full Site Editing (FSE). It uses SCSS and Webpack for modern asset bundling and lives in a **monorepo** with `wp-content/` as the repository root.

---

## 🚀 Requirements

- WordPress (preferably 6.0+ with FSE support)
- PHP 7.4+
- Node.js (18+ recommended)
- npm (v8+)
- Composer

---

## 📁 Repo Structure

This theme assumes your repo root is `wp-content/`. From there:

```
wp-content/
├── themes/
│   ├── frost/          ← Installed via Composer
│   └── ultraholic/     ← This theme
├── plugins/
├── composer.json
```

---

## ⚙️ Composer Setup (Parent Theme: Frost)

The **Frost** parent theme is installed via Composer using [WPackagist](https://wpackagist.org).

### 1. Install dependencies from the `wp-content` root:

```bash
composer install
```

This will place the Frost theme in:

```
wp-content/themes/frost/
```

> Frost is defined in `composer.json` and placed using `installer-paths`.

---

## 📦 Theme Setup

Navigate to the `ultraholic` theme directory:

```bash
cd wp-content/themes/ultraholic
npm install
```

---

## 🔨 Build Commands

From the `ultraholic` directory:

| Command           | Description                                      |
|-------------------|--------------------------------------------------|
| `npm run build`   | Development build (fast, unminified)             |
| `npm run dist`    | Production build (minified with hashed filenames)|
| `npm run watch`   | Rebuild on file changes                          |

The output CSS file is named `theme.min.[hash].css` and enqueued dynamically via PHP.

---

## 🧱 File Structure

```
ultraholic/
├── css/
│   ├── build/               # Output: hashed, minified CSS
│   └── src/                 # SCSS source files
│       ├── base/
│       │   ├── _layout.scss
│       │   └── _theme-values.scss (generated from theme.json)
│       └── main.scss
├── js/
│   ├── shrink-header.js     # Optional JS
│   └── build/               # Output JS
├── functions.php            # Enqueues hashed CSS
├── theme.json               # FSE settings (layout, fonts, colors)
├── style.css                # Required WordPress theme header only
├── webpack.config.js        # Webpack build config
├── package.json             # npm scripts
```

---

## 🧠 Notes

- Fonts are registered via `theme.json` using local file paths.
- `style.css` exists only for WordPress recognition — styles are built via SCSS.
- CSS is enqueued via `glob()` and `filemtime()` in `functions.php` for cache-busting and hash awareness.

---

## 🧼 Cleanup

To remove previous build artifacts:

```bash
rm -rf css/build js/build
npm run dist
```

---

## 🧠 About

Built by Geoff Cordner.  
Based on the [Frost](https://frostwp.com/) WordPress theme.



