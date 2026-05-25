# AGENTS.md

- Always use descriptive variables.
- Never use Hostinger Git deployment for this project when it targets `public_html`; it can overwrite the WordPress root files. Use a plugin ZIP upload or a scoped SFTP/GitHub Actions upload that writes only to `wp-content/plugins/ky-vibe-enhancements`.
- Before suggesting or running any deployment, verify the deployment target cannot delete or replace existing WordPress core files, WoodMart, WoodMart Child, uploads, or production content.

## WordPress Vibe Coding Architecture

- Preserve the current plugin identity: use `ky-vibe-enhancements` as the plugin slug, `ky-vibe-enhancements` as the text domain, and `ky-vibe-enhancements.zip` as the release asset unless the user explicitly asks to rename the project.
- Treat the plugin as a theme-agnostic enhancement layer. Keep WoodMart / WoodMart Child active and avoid relying on WoodMart private layout blocks for new reusable sections.
- Prefer native Gutenberg blocks for new page sections and templates, especially `core/group`, `core/columns`, `core/column`, `core/heading`, `core/paragraph`, `core/buttons`, `core/button`, and `core/image`.
- Write Gutenberg block markup with valid WordPress block comments, for example `<!-- wp:group {"className":"ky-vibe-section"} -->` and matching closing comments.
- Do not hard-code local, staging, or production absolute URLs in patterns. Use editable image blocks, placeholders, relative plugin asset URLs generated in PHP, or user-provided production-safe URLs.
- Keep styling scoped under project or brand classes such as `ky-vibe-*` or `teslamigo-*`. Prefer shared CSS in `assets/css/frontend.css` and editor-only fixes in `assets/css/editor.css`; avoid long inline style strings inside pattern content.
- When creating reusable section patterns, keep each section atomic and independently editable. Use descriptive file, slug, function, and CSS class names.
- When creating full-page patterns, assemble them declaratively from reusable section patterns whenever practical instead of duplicating thousands of lines of section markup in one file.
- For page modifications, first identify which reusable section owns the affected markup and edit that section only unless the user asks for a broader page-level change.
- Treat the Gemini-style `patterns/*.php` auto-registration idea as a feasible future migration, but implement it safely: keep files inside the plugin, register only trusted local `.php` pattern files, and preserve existing plugin constants, updater, asset loading, and ZIP release workflow.
- Do not copy examples that use plain `<section>` / `<main>` wrappers without Gutenberg block comments as "valid pattern markup." Any large wrapper must be represented as a core block, usually `core/group`, with matching block comments.
- For assembled full-page patterns, prefer a helper that renders known section slugs or concatenates trusted section file output. Do not duplicate entire sections into page files unless the user intentionally wants a one-off page.
