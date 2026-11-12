# Digital Smart Hub Editorial — WordPress block theme

This folder is a WordPress block-theme scaffold. It gives the site a more restrained editorial look—warm paper, ink, soft brass accents, serif display headings, generous section spacing, and simpler page structure—while keeping the brand language: **“Your Digital World. Smarter, Simpler, Better.”**

## Install

1. Zip the `wordpress-theme` folder, preserving the folder name and structure.
2. In WordPress, go to **Appearance → Themes → Add New → Upload Theme**, upload the zip, then activate **Digital Smart Hub Editorial**.
3. Set the desired static front page under **Settings → Reading**. The `front-page.html` template is used for the site front page.
4. Install WooCommerce separately. Assign its real Shop, Cart, Checkout, and My Account pages in WooCommerce settings.
5. Create or assign the pages referenced in navigation (`/shop/`, `/ai-products/`, `/contact/`, `/privacy/`, `/my-account/`). Update links if your slugs differ.

## WooCommerce catalog

`templates/archive-product.html` uses WooCommerce's `[products]` shortcode to render actual published products and their configured prices. Add only approved products; leave unreleased products in draft. The theme does not set product prices, activate payments, or make draft products purchasable. WooCommerce handles cart, checkout, product details, account access, tax, and delivery when properly configured.

Current planning prices are not final offers: AI Prompt Toolkit $4.99 proposed; LordyVites Creator Workflow Pack $5.99 proposed; Android & Everyday Tech Starter Pack $3.99 proposed; Beginner Web & Computer Science Pack $6.99 proposed; Advanced AI App-Building Prompt Pack $9.99 proposed. Verify and approve each price and product before publishing. The manager prompt concept has no approved price.

## WordPress-native editing

Templates and header/footer parts use core WordPress block markup. Edit the site design in **Appearance → Editor**; edit homepage text and sections using the Site Editor or saved pages/patterns. The theme's `theme.json` defines the color, spacing, layout, and typography presets for consistent Gutenberg controls. WooCommerce product cards are populated from published WooCommerce records, not hard-coded sample offers.

## Before launch

- Confirm domain, hosting, HTTPS, and WordPress site URLs.
- Complete and review the Privacy Policy against actual plugins, host, analytics, forms, payment provider, and data retention.
- Configure the contact form and newsletter only after selecting services and adding appropriate consent/privacy notices.
- Test payment gateway in sandbox, order status handling, receipts, download permissions, refunds, and mobile layouts.
- Keep the shop in catalog/maintenance mode until payment and digital delivery are verified.
- The toolkit copy states 34 prompts, matching the supplied manuscript's numbered prompts 1–34.
