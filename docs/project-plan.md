# Project Plan

## Architecture

```text
Codex local development
  -> GitHub repository
  -> GitHub release asset
  -> WordPress plugin updater
  -> WordPress plugin
  -> WoodMart Child remains active
  -> Gutenberg patterns, shortcodes, styles, and optional custom blocks
```

## Modern Block Pattern Strategy

The project should move toward an AI-friendly, native Gutenberg section system:

- New reusable visual sections should be built as native Gutenberg block patterns, not WoodMart private layout blocks.
- Pattern markup should use valid WordPress block comments and editable core blocks so sections remain usable in Gutenberg.
- Sections should be atomic: hero, feature grid, proof, process, CTA, contact, and similar units should each have their own reusable pattern.
- Full-page templates should be assembled from section patterns where practical. This keeps pages readable and prevents large duplicated HTML files.
- Pattern categories should separate reusable sections from full pages, for example `KY Vibe Sections` and `KY Vibe Full Pages`.
- The current plugin slug remains `ky-vibe-enhancements`; external examples using names like `my-vibe-patterns` are architecture examples only.

The existing `includes/patterns.php` function-based registration is valid for starter patterns. As the pattern library grows, prefer migrating toward a file-backed pattern library under a dedicated `patterns/` directory with automatic registration, while keeping the existing plugin constants, text domain, asset loading, updater, and ZIP workflow intact.

## Evaluation Of File-Backed Pattern Proposal

The proposed `patterns/*.php` library is feasible and aligns with the project direction, with these adjustments:

- Keep the real plugin identity as `ky-vibe-enhancements`; names like `my-vibe-patterns` are examples only.
- Auto-registering pattern files is useful once there are more sections, because Codex can add `patterns/section-name.php` without editing central registration code.
- `page-*.php` full-page patterns are useful, but should assemble known reusable sections rather than copy thousands of lines of markup.
- The proposed "correct example" using only a raw `<section>` wrapper is incomplete. Gutenberg patterns must include valid block comments such as `<!-- wp:group --> ... <!-- /wp:group -->`.
- PHP pattern files are trusted repository code. Do not load user-uploaded or remote PHP files.
- Deployment stays plugin-ZIP / GitHub Release based. Do not reintroduce Hostinger Git deployment to `public_html`.

Future target structure:

```text
ky-vibe-enhancements/
  includes/
    assets.php
    patterns.php
    shortcodes.php
    updater.php
  patterns/
    section-why-teslamigo.php
    section-hero.php
    section-cta.php
    page-home.php
  assets/
    css/
      frontend.css
      editor.css
```

Future registration behavior:

- Register `KY Vibe Sections` for `section-*` files.
- Register `KY Vibe Full Pages` for `page-*` files.
- Derive titles from file headers when present, then from filenames as fallback.
- Capture pattern output with output buffering.
- Keep all shared CSS in plugin assets, not inline style strings.

## Principle

Do not replace the current WoodMart / WoodMart Child theme. The plugin layer should add enhancements while preserving existing theme settings, menus, widgets, WooCommerce templates, and WoodMart configuration.

Use WoodMart for the site shell and existing theme-controlled areas. Use this plugin for reusable Gutenberg-editable sections, scoped styles, shortcodes, and optional custom blocks when patterns are not enough.

## Deployment Incident Note

On 2026-05-24, Hostinger Git deployment was tested with root directory fixed to `public_html`. This replaced the WordPress root file layout with repository contents and removed visible WordPress core files from `public_html`.

Do not use Hostinger Git deployment for this project unless Hostinger provides a safe, scoped target that writes only to the plugin directory. The preferred deployment methods are:

- Upload a plugin ZIP through WordPress Admin.
- Use GitHub Releases plus the plugin's built-in updater after the first install.
- Use SFTP only if the upload target is strictly limited to `wp-content/plugins/ky-vibe-enhancements`.

## Step 1: Staging Plugin Deployment Setup

Goal: get a safe staging WordPress site running this plugin before touching production.

Checklist:

- Create or confirm a Hostinger WordPress staging site.
- Confirm the production site is currently using WoodMart Child.
- Keep this GitHub repository connected to the local workspace.
- Build `dist/ky-vibe-enhancements.zip`.
- In staging WordPress Admin, open `Plugins -> Add New -> Upload Plugin`.
- Upload `dist/ky-vibe-enhancements.zip`.
- Activate `KY Vibe Enhancements`.
- Confirm WoodMart Child remains the active theme.
- Visit the staging homepage and confirm the site still looks unchanged except for plugin-provided additions.

## Step 2: Remote Update Workflow

Goal: avoid manual ZIP uploads for every vibe coding update.

Checklist:

- Keep the plugin installed through WordPress Admin.
- Publish new plugin versions as GitHub releases.
- Let the plugin check `https://api.github.com/repos/KnowYourself7/wordpress-vibe-coding/releases/latest`.
- Update the plugin from `Plugins -> Installed Plugins` in WordPress Admin.
- Test on staging before updating production.

## Step 2: Visual Direction

Define what the plugin should add:

- Site name and purpose.
- Target audience.
- Primary conversion action.
- Color direction.
- Typography preference.
- Required pages.
- Reference sites or aesthetic examples.
- Which parts must remain controlled by WoodMart.
- Which parts should become Gutenberg patterns, shortcodes, or custom blocks.

## Step 3: Plugin Expansion

After staging works, expand the plugin:

- Add Gutenberg block patterns for hero, services, proof, process, CTA, and contact sections.
- Add shortcodes for sections that need to be embedded inside WoodMart layouts.
- Add front-end CSS scoped under plugin classes.
- Add optional editor CSS so Gutenberg previews match the front end.
- Add optional custom blocks only when patterns and shortcodes are not enough.
- Test on staging with WoodMart Child active.

## Deployment Target

Safe plugin source directory:

```text
ky-vibe-enhancements
```

First-install artifact:

```text
dist/ky-vibe-enhancements.zip
```

Ongoing update channel:

```text
GitHub Release asset: ky-vibe-enhancements.zip
```

Do not deploy this repository to `public_html` with Hostinger Git deployment.

Do not deploy this repository to:

```text
public_html/wp-content/themes/woodmart-child
```

unless the existing child theme has first been backed up and intentionally brought into version control.
