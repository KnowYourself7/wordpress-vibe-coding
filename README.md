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

Hostinger currently deploys this repository to:

```text
public_html
```

Because that root directory is fixed in hPanel, this repository includes the WordPress plugin path inside the repo:

```text
wp-content/plugins/ky-vibe-enhancements
```

After deployment, WordPress should see the plugin at:

```text
public_html/wp-content/plugins/ky-vibe-enhancements/ky-vibe-enhancements.php
```

## Existing Theme Strategy

Keep WoodMart and WoodMart Child active. This repository should not replace the active theme or overwrite WoodMart settings.

## First Milestone

Create the staging deployment path, connect this repository to Hostinger Git deployment, then activate the plugin on the staging WordPress site.
