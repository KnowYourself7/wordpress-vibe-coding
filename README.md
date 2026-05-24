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

Upload this file in WordPress Admin for the first install:

```text
dist/ky-vibe-enhancements.zip
```

## Update Workflow

After the first install, updates should use GitHub Releases and the WordPress plugin update screen:

1. Change plugin code locally.
2. Bump `Version` and `KY_VIBE_ENHANCEMENTS_VERSION`.
3. Commit and push to GitHub.
4. Create and push a tag, such as `v0.1.2`.
5. Build `dist/ky-vibe-enhancements.zip` and attach it to the GitHub release.
6. In WordPress Admin, update `KY Vibe Enhancements` from the Plugins screen.

Do not use Hostinger Git deployment for this project.

## Existing Theme Strategy

Keep WoodMart and WoodMart Child active. This repository should not replace the active theme, overwrite WoodMart settings, or deploy to `public_html` with Hostinger Git.

## First Milestone

Install the plugin on staging through WordPress Admin, then use GitHub Releases for future WordPress plugin updates.
