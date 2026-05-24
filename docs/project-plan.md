# Project Plan

## Architecture

```text
Codex local development
  -> GitHub repository
  -> Hostinger Git deployment
  -> WordPress plugin
  -> WoodMart Child remains active
  -> Gutenberg patterns, shortcodes, styles, and optional custom blocks
```

## Principle

Do not replace the current WoodMart / WoodMart Child theme. The plugin layer should add enhancements while preserving existing theme settings, menus, widgets, WooCommerce templates, and WoodMart configuration.

## Step 1: Staging Plugin Deployment Setup

Goal: get a safe staging WordPress site running this plugin before touching production.

Checklist:

- Create or confirm a Hostinger WordPress staging site.
- Confirm the production site is currently using WoodMart Child.
- Keep this GitHub repository connected to the local workspace.
- Push the plugin project to GitHub.
- In Hostinger hPanel, open `Websites -> Dashboard -> Advanced -> Git`.
- Connect GitHub through OAuth.
- Select the repository and branch.
- Use Hostinger's fixed root directory: `public_html`.
- Keep plugin files nested in this repository under `wp-content/plugins/ky-vibe-enhancements`.
- Deploy to staging.
- In WordPress Admin, activate `KY Vibe Enhancements`.
- Confirm WoodMart Child remains the active theme.
- Visit the staging homepage and confirm the site still looks unchanged except for plugin-provided additions.

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

Hostinger Git deployment root:

```text
public_html
```

Plugin path inside this repository:

```text
wp-content/plugins/ky-vibe-enhancements
```

Resulting plugin path on the server:

```text
public_html/wp-content/plugins/ky-vibe-enhancements
```

Do not deploy this repository to:

```text
public_html/wp-content/themes/woodmart-child
```

unless the existing child theme has first been backed up and intentionally brought into version control.
