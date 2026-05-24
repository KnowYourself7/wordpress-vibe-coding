# AGENTS.md

- Always use descriptive variables.
- Never use Hostinger Git deployment for this project when it targets `public_html`; it can overwrite the WordPress root files. Use a plugin ZIP upload or a scoped SFTP/GitHub Actions upload that writes only to `wp-content/plugins/ky-vibe-enhancements`.
- Before suggesting or running any deployment, verify the deployment target cannot delete or replace existing WordPress core files, WoodMart, WoodMart Child, uploads, or production content.
