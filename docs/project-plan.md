# Project Plan

## Architecture

```text
Codex local development
  -> GitHub repository
  -> Hostinger Git deployment
  -> WordPress block theme
  -> Gutenberg-editable pages and patterns
```

## Step 1: Staging Deployment Setup

Goal: get a safe staging WordPress site running this theme before touching production.

Checklist:

- Create or confirm a Hostinger WordPress staging site.
- Create a GitHub repository for this workspace.
- Push this local repository to GitHub.
- In Hostinger hPanel, open `Websites -> Dashboard -> Advanced -> Git`.
- Connect GitHub through OAuth.
- Select the repository and branch.
- Set deployment path to `public_html/wp-content/themes/vibe-aesthetic-theme`.
- Deploy to staging.
- In WordPress Admin, activate `Vibe Aesthetic Theme`.
- Visit the staging homepage and confirm the theme renders.

## Step 2: Visual Direction

Define the brand direction before expanding the site:

- Site name and purpose.
- Target audience.
- Primary conversion action.
- Color direction.
- Typography preference.
- Required pages.
- Reference sites or aesthetic examples.

## Step 3: Theme Expansion

After staging works, expand the theme:

- Add reusable patterns for hero, services, proof, process, CTA, and contact sections.
- Add page templates for homepage, service page, about page, and contact page.
- Tune `theme.json` spacing, typography, color palette, and block styles.
- Add responsive polish and accessibility checks.

