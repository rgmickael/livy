# Livy

A testing ground for building interactive Laravel applications with **Livewire**, exploring real-time component reactivity and state management in a modern PHP stack.

Livewire lets you write full-stack components without leaving PHP—server-side reactivity without the complexity of a separate JavaScript framework. This project traces how a Livewire application grows from hello-world scaffolding through stateful components and real-world patterns.

## Progress

Built up in small steps, each one introducing one idea.

| Version | What shipped |
|---|---|
| **v0.1** | Laravel + Livewire v4 scaffolding with Tailwind and Vite build pipeline. |

## Stack

- **Laravel 13.17** — HTTP framework and application structure.
- **Livewire 4.4** — Full-stack PHP components with real-time reactivity.
- **Tailwind CSS 4.0** — Utility-first CSS framework for styling.
- **Vite 8.0** — Frontend build tool and dev server.
- **PEST** — Modern PHP testing framework, with Laravel plugin.
- **Laravel Boost** — MCP tools and AI agent support for development.

## Running it

```bash
composer run setup          # Install dependencies and migrate
composer run dev            # Start development server (PHP + Vite watch)
composer run test           # Run test suite
```

The dev command starts both `artisan dev` (which runs the PHP server and Vite concurrently). Open http://localhost:8000 in your browser.

Database is SQLite (committed in `database/database.sqlite`), so a fresh clone runs as-is.

## Layout

```
app/                        — Application code (models, components, controllers)
bootstrap/                  — Laravel bootstrap files
resources/                  — Frontend assets (views, CSS)
  ├─ css/
  │   └─ app.css           — Global styles; Tailwind directives
  └─ views/
      └─ livewire/         — Livewire component templates
routes/                     — HTTP route definitions
tests/                      — Test suite (Feature, Unit)
database/
  ├─ database.sqlite       — SQLite database file
  ├─ factories/            — Model factories for testing
  ├─ seeders/              — Database seeders
  └─ migrations/           — Schema migration files
config/                     — Laravel configuration files
storage/                    — Application runtime storage (logs, cache, sessions)
public/                     — Publicly served assets and entry point
vite.config.js             — Vite build configuration
composer.json              — PHP dependencies and scripts
package.json               — Node dependencies for build tools
```
