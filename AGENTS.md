# AGENTS.md

## Project

Personal website for Jonathan Torres (web developer). A single-page Vue 3 app
built with Vite, TypeScript, and Vue Router. Content is currently static:
a home page and a resume page.

## Commands

```bash
npm run dev      # Vite dev server with HMR
npm run build    # vue-tsc type-check, then vite build -> dist/
npm run preview  # serve the production build locally
```

There are no tests, lint scripts, or formatting scripts configured.

## Stack

- Vue 3 (`<script setup>` SFCs) + TypeScript
- Vue Router 5 with `createWebHistory` (HTML5 history mode, no hash)
- Vite 8
- Sass (Dart Sass) + Bootstrap 3 (imported from `node_modules`)
- Node tooling, package manager: npm (`package-lock.json`)

## Layout

```
index.html              Vite entry, mounts #app
src/main.ts             createApp + router + global styles
src/App.vue             Nav + <router-view /> + Footer
src/router/index.ts     route table
src/components/         Nav.vue, Footer.vue
src/views/              Home.vue, Resume.vue, NotFound.vue
src/sass/               global stylesheets, partials imported by main.scss
src/assets/             images used by components
public/                 static files copied as-is to dist/ (favicon.ico)
dist/                   build output (git-ignored)
```

## Routing and the 404 page

Routes live in `src/router/index.ts`. The last route is a catch-all:

```ts
{ path: '/:pathMatch(.*)*', name: 'NotFound', component: NotFound }
```

It renders `src/views/NotFound.vue` for any path not matched by an earlier
route. Keep it last in the route array.

Important: this is **client-side only**. Because the app uses
`createWebHistory` and is deployed as a static build, the host must serve
`index.html` for unknown paths (SPA fallback) so a direct request to e.g.
`/does-not-exist` loads the app and lets the router show the 404 view. There is
no server-side 404 status in that setup.

This site is not deployed to Netlify; do not add Netlify-style redirect files
such as `public/_redirects` (the old one was removed). Do not introduce
host-specific routing/fallback config unless the deployment target is known
and the user asks for it.

`deploy.sh` was deleted and must not be used or recreated; the old nginx
deployment flow is gone. The current deployment target is not defined in this
repo, so do not assume a specific host or write host-specific config unless
asked.

## Styling conventions

- All styles are global SCSS partials in `src/sass/`, imported at the bottom of
  `src/sass/main.scss`. New page/feature styles get a new `_name.scss` partial
  and an `@import "name";` line there.
- Partials use Bootstrap 3 classes (`.container`, `.row`, `.col-md-*`, etc.)
  in templates rather than scoped component styles.
- Variables and mixins (colors, spacing, `@include desktop/tablet`) are defined
  in `main.scss` and available to partials because they are imported after the
  variable/mixin definitions. Shared helper classes (e.g. `.red`, `.mee`) live
  in `_layout.scss`.
- The project still uses `@import` and deprecated Sass functions (`lighten`,
  slash division). Builds emit deprecation warnings; these are pre-existing and
  not a reason to change unrelated styles.
- Bootstrap 3 markup is intentional; do not upgrade to Bootstrap 4/5 as a
  drive-by change.

## Component conventions

- Use `<script setup lang="ts">`, not Options API.
- One component per `.vue` file; components in `src/components/`, pages/views
  in `src/views/`.
- Use `<router-link>` for internal navigation, plain `<a>` for external links
  (`target="_blank"`).
- Image assets referenced from components use relative imports
  (e.g. `../assets/mee.jpg`); files in `public/` are referenced by URL.

## Formatting and code style

- **2-space indentation** in Vue SFCs, TypeScript, JavaScript, JSON, HTML and
  config files (`vite.config.ts`, `tsconfig*.json`, `package.json`, etc.).
  Never use tabs in these files.
- SCSS is the one exception: existing partials use 4-space indentation. Match
  the surrounding file/partial rather than reindenting.
- No semicolons in TypeScript/JavaScript; use single quotes for strings and
  imports (existing files follow this).
- Use LF line endings and end files with a single trailing newline.
- Vue SFCs use `<script setup lang="ts">` first (when a script is needed),
  then `<template>`; templates use double quotes for attributes.
- Keep lines reasonably short (roughly 80-100 chars in prose/markdown and
  multi-line TS expressions).
- No formatter or linter is configured, so do not run Prettier/ESLint or
  reformat untouched code; keep diffs focused on the actual change and follow
  the style of the file you are editing.
