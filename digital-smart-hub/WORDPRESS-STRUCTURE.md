# Digital Smart Hub — WordPress and WooCommerce handoff

The HTML files in this folder are static design previews. They are not a WordPress theme, do not collect customer information, and do not process orders or payments.

## Brand voice

**Brand line:** Your Digital World. Smarter, Simpler, Better.

**Positioning:** Thoughtful digital resources for work, business, studies, and everyday creativity.

**Tone:** Clear, practical, calm, encouraging, transparent. Prefer plain language over hype. Avoid claims of guaranteed results, unverified customer counts, or hours saved. Make preview status and proposed prices explicit.

**Product count:** The AI Prompt Toolkit manuscript supplied for this project contains 34 numbered prompts (1–34). Use “34 prompts”; do not claim “35+” unless the product is revised and recount-checked.

## Multi-page structure

| Page | File | Intended WordPress destination |
| --- | --- | --- |
| Home | `index.html` | Front page |
| Shop | `shop.html` | WooCommerce Shop archive or custom catalog landing page |
| AI Products | `ai-products.html` | Product category/landing page |
| AI Prompt Toolkit | `product-ai-toolkit.html` | WooCommerce product page after approval |
| Cart | `cart.html` | WooCommerce Cart page; this file is only a layout preview |
| Account | `account.html` | WooCommerce My Account page; this file is only a layout preview |
| Manager Workbench | `manager-ai-prompts.html` | Separate original draft concept, not the supplied third-party playbook |
| Contact | `contact.html` | Contact page; form is disabled until a provider is configured |
| Privacy | `privacy.html` | Privacy page; fill placeholders and review against actual site practices |
| Minimal coming soon | `coming-soon-minimal.html` | Optional temporary front page |

## WooCommerce catalog pricing — planning proposals only

| Product | Category | Proposed price | Status |
| --- | --- | ---: | --- |
| AI Prompt Toolkit | AI Templates & Prompts | $4.99 | In preparation; 34 prompts in supplied manuscript |
| LordyVites Creator Workflow Pack | Business Resources | $5.99 | In preparation |
| Android & Everyday Tech Starter Pack | Learning & Productivity | $3.99 | In preparation; device instructions need testing |
| Beginner Web & Computer Science Pack | Learning & Productivity | $6.99 | Roadmap; lessons and examples need completion/testing |
| Advanced AI App-Building Prompt Pack | AI Templates & Prompts | $9.99 | Specialist roadmap concept |

These are not active prices or offers. The cart page contains an illustrative $4.99 row solely to demonstrate layout. The manager prompt concept has no approved price.

## Implementation checklist

1. Set the WordPress front page to the Home page after domain and hosting are functioning.
2. Install and configure WooCommerce. Assign the actual Shop, Cart, Checkout, and My Account pages through WooCommerce settings; do not use static mockups as functional endpoints.
3. Create products only after final files, descriptions, categories, prices, tax treatment, refund terms, and digital-download settings are approved.
4. Configure a supported payment provider, use test/sandbox mode, and verify order status, payment callbacks, receipts, download permissions, account access, refunds, and mobile behavior before production payments.
5. Keep all purchase controls disabled until that testing is complete. Replace proposed prices with owner-approved live prices only at launch.
6. Configure navigation links to WordPress page URLs and WooCommerce-generated product/cart/account routes. Avoid duplicating WooCommerce totals or buy-button behavior in custom static markup.
7. Complete the Privacy Policy placeholders for the real host, forms, cookies, analytics, email service, payment processor, retention, and applicable jurisdiction. Review before publishing.
8. Enable the Contact form only after selecting a form plugin/provider, writing the data-use notice, testing delivery, and enabling spam protection.
9. The coming-soon page has no fake countdown or nonfunctional signup. Connect a consent-based mailing-list form only when an email service is selected.
