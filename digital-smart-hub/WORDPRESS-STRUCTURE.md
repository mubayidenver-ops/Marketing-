# Digital Smart Hub — WordPress storefront structure

This repository currently contains static HTML previews. The pages below are a design/content handoff for a future WordPress + WooCommerce implementation; they do not activate a store, collect data, or process payments.

## Suggested page map

| Page | Static preview | WordPress destination | Notes |
| --- | --- | --- | --- |
| Home | `index.html` | Front page | Existing landing-page design |
| Shop | `shop.html` | WooCommerce Shop archive | Categories, pricing/status cards, filters; use real WooCommerce products when approved |
| AI Products | `ai-products.html` | Product category or landing page | Toolkit count corrected to 34 in supplied manuscript |
| Product detail | `product-ai-toolkit.html` | WooCommerce product page | Design preview; not purchasable until files and price are approved |
| Cart | `cart.html` | WooCommerce Cart | Current static preview only |
| Account | `account.html` | WooCommerce My Account | Current static preview only |
| Manager Workbench | `manager-ai-prompts.html` | Product landing page or draft | Separate original draft concept; not the supplied third-party playbook |
| Contact | `contact.html` | Contact page | Form is disabled; connect and test a form plugin before use |
| Privacy | `privacy.html` | Privacy Policy page | Template with required placeholders; not ready to publish unchanged |
| Coming soon | `coming-soon-minimal.html` | Temporary homepage / maintenance page | Minimal luxury design; no fake countdown or active signup |

## WooCommerce product card data — proposed only

| Product | Category | Proposed price | Status | Purchase action |
| --- | --- | ---: | --- | --- |
| AI Prompt Toolkit | AI Templates & Prompts | $4.99 | In preparation; manuscript lists 34 numbered prompts | Disabled in preview |
| LordyVites Creator Workflow Pack | Business Resources | $5.99 | In preparation | Disabled in preview |
| Android & Everyday Tech Starter Pack | Learning & Productivity | $3.99 | In preparation; device steps need testing | Disabled in preview |
| Beginner Web & Computer Science Pack | Learning & Productivity | $6.99 | Roadmap; lessons/examples need completion and testing | Disabled in preview |
| Advanced AI App-Building Prompt Pack | AI Templates & Prompts | $9.99 | Specialist roadmap concept | Disabled in preview |

All listed dollar amounts are unapproved planning proposals, not current prices or live offers. Create WooCommerce products only after the owner approves final price, product files, product copy, delivery settings, tax configuration, refund terms, and payment processing. The manager prompt concept has no approved price and is not included in this price table.

## WordPress implementation notes

1. Create WordPress pages using the map above. For the shop, cart, checkout, and account, assign the corresponding pages in WooCommerce settings rather than treating static mockups as functional commerce pages.
2. Replace preview links with actual WordPress page URLs or WooCommerce-generated product/category links. Avoid hard-coded cart totals and mock purchase buttons.
3. Create digital products as downloadable WooCommerce products only after final files are reviewed. Test a complete order, payment status, download permission, customer email, refunds, and mobile layout in a sandbox before enabling production checkout.
4. Keep preview labels until products, domain, SSL, policies, and payment configuration are confirmed. Never request credentials on the static account mockup.
5. Complete `privacy.html` placeholders to reflect actual hosting, forms, cookies, analytics, payment, account, and retention practices. Get jurisdiction-appropriate review before publishing.
6. Configure a real, consent-based email form only after selecting an email provider. The coming-soon page intentionally has no nonfunctional waitlist form or false countdown.
