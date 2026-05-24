# WordPress Vibe Coding

Vibe coding for WordPress: a Hostinger-ready plugin project for enhancing an existing WoodMart / WoodMart Child site without replacing the active theme.

## Project Goal

Build polished Gutenberg-editable sections and front-end enhancements through a versioned local workflow:

1. Develop locally with Codex.
2. Push code to GitHub.
3. Deploy the plugin from GitHub to Hostinger staging.
4. Activate and review the plugin in WordPress.
5. Promote staging to production only after testing.

## Current Plugin

Plugin source path:

```text
ky-vibe-enhancements
```

Build the uploadable plugin ZIP:

```bash
bash scripts/build-plugin-zip.sh
```

Upload this file in WordPress Admin:

```text
dist/ky-vibe-enhancements.zip
```

## Existing Theme Strategy

Keep WoodMart and WoodMart Child active. This repository should not replace the active theme, overwrite WoodMart settings, or deploy to `public_html` with Hostinger Git.

## First Milestone

Create the staging deployment path, connect this repository to Hostinger Git deployment, then activate the plugin on the staging WordPress site.
