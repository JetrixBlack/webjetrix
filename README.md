# WebJetrix

Sitio web empresarial de **JetrixBlack** — servicios de desarrollo web, chatbots, automatizacion y sistemas a medida. Frontend con Tailwind (CDN Play) + PHP serverless en Vercel.

## Demo en produccion

| Recurso | URL |
|---------|-----|
| **Sitio** | https://webjetrix.vercel.app |
| **Proyectos** | https://webjetrix.vercel.app/proyectos |

## Caracteristicas

- **Paginas:** Home, Servicios (timeline), Proyectos (grid 4x4 con filtros), Planes (con PROMO IA y switcher de moneda USD/VES), Sobre mi, Blog, Contacto, Legal, Rates (BCV)
- **PaginaLink integrado** en 5 puntos: portafolio, home, servicios, footer y select de contacto
- **Grid 4x4 de proyectos** con filtros por categoria (card de PageLink incluye demo + panel admin + credenciales)
- **Scraping BCV** para tasa de cambio del dolar/euro con cache
- **Presupuesto/contacto** con formularios
- Dark/light, tipografia Tailwind, sin framework de build (CDN Play)
- Sitemap + robots.txt

## Arquitectura

- **Front controller:** `api/index.php` (runtime `vercel-php@0.7.2` en Vercel)
- Cada pagina es un archivo PHP serverless en `api/` con contenido hardcodeado (sin BD/MVC)
- Tailwind vía CDN (no hay build step)
- Estilos custom de marca en `assets/css/custom.css`

```
WebJetrix/
├── api/                        # Paginas PHP serverless
│   ├── index.php               # Home
│   ├── servicios.php           # Servicios (timeline)
│   ├── proyectos.php           # Proyectos (grid + filtros)
│   ├── planes.php              # Planes + PROMO IA + switcher USD/VES
│   ├── sobre-mi.php            # Sobre mi
│   ├── blog.php                # Blog
│   ├── contacto.php            # Contacto / presupuesto
│   ├── legal.php               # Legal
│   └── rates.php               # Tasas BCV
├── includes/                   # header, navbar, footer
├── assets/
│   ├── css/custom.css          # Estilos de marca
│   ├── js/main.js              # Logic frontend (promo, moneda, etc.)
│   ├── js/projects-filter.js   # Filtros del grid de proyectos
│   └── img/                    # Imagenes, fondos, video
├── vercel.json                 # Rutas + funciones
├── sitemap.xml                 # Sitemap
└── robots.txt
```

## Deploy

1. Conectar el repo `JetrixBlack/webjetrix` (rama `main`) a Vercel
2. Push a `main` → deploy automatico (sin config extra, ambient en `vercel.json`)

## Estilo

- Tonos marca: `#c47a8a` (rosado), `deep-slate`, `electric-blue`, `black` en botones
- Sin lorem ipsum, contenido real por proyecto
- Cards de proyectos: `border-radius: 18px`, hover overlay con gradiente de marca

## Licencia

MIT