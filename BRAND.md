# TALEBERT Child Care Uganda — Brand Reference

Extracted from the live site (talebertchildcare.org, WordPress + Elementor,
Astra theme) on 2026-07-11. All values below are taken directly from the
site's CSS custom properties and rendered markup — nothing here is invented.

## Name / Tagline

- **Org name:** Talebert Child Care Uganda (wordmark renders as "TALEBERT")
- **Tagline (hero wordmark, second line):** "CHILD CARE UGANDA"
- **Founder:** Mrs. Talemwa Edith
- **Founded:** 2007
- **Hero headline:** "Empowering Lives, Building Futures: Supporting Uganda's
  Disadvantaged Children and Mothers"

## Logo & Favicon

- Logo: `assets/images/logo.webp` (original: `assets/originals/Talebert-LOGO_Brochure-Outside.png`)
  — circular emblem (people, heart, sun, helping hand) + wordmark "TALEBERT"
  in navy, "CHILD CARE UGANDA" in teal, all-caps, bold/condensed sans-serif.
- Favicon set (kept as PNG — WebP favicon support is inconsistent across browsers):
  - `assets/icons/favicon-32.png` (32×32)
  - `assets/icons/apple-touch-icon.png` (180×180)
  - `assets/icons/icon-192.png` (192×192)

## Colors (from live site's CSS custom properties, `--ast-global-color-*` / `--e-global-color-*`)

| Token | Hex | Role on live site |
|---|---|---|
| `--color-primary` | `#29d8db` | Buttons, CTA accents, link/icon accent (bright teal) |
| `--color-secondary` | `#01578c` | Button hover/focus, box-shadow tint, deep-blue accents |
| `--color-navy` | `#1c3e5a` | Decorative borders (image frames) |
| `--color-text` | `#4a4a4a` | Body text |
| `--color-text-muted` | `#7a7a7a` | Secondary/muted text |
| `--color-surface` | `#f6f9f9` | Section backgrounds |
| `--color-white` | `#ffffff` | Backgrounds, text on dark/photo sections |
| `--color-black` | `#000000` | Hero text-shadow |

These are non-negotiable and are reproduced exactly in `assets/css/style.css`
as CSS custom properties.

## Typography

- **Headings:** Montserrat, weight 800 (extra-bold), all major headings on
  the live site use this.
- **Body:** Work Sans, weight 400.
- Loaded from Google Fonts on the live site: `Work Sans:400` and
  `Montserrat:800`. The rebuild self-hosts or links the same two families
  (same weights) via `<link>` in the header template.
- Live type scale (desktop): h1 = 60px/3.75rem, h2 = 40px/2.5rem, hero
  heading override = 55px with white text + `text-shadow: 1px 1px 17px #000`.

## Imagery style

- Real photography from Talebert's community work (children, mothers,
  Ugandan village setting) — not stock photography. Two usable photos were
  found: `photo-community-1.webp`, `photo-community-2.webp`.
- Program icons are simple flat/line-art circular icons (education,
  maternal/young-mothers, healthcare, community, talent/skills, future
  school-plans) — `assets/images/icon-*.webp`.
- One partner logo: HNMI ("HNMI Jesus Cares", dove/globe emblem) —
  `assets/images/partner-hnmi.webp`.

## Voice

Warm, mission-driven NGO tone. Short declarative sentences, first-person
plural ("we", "our"), verbs like "empower", "uplift", "transform lives",
"break the cycle of poverty". No slang, no jargon.

---

## Important findings from the live-site audit (read before trusting "content parity")

1. **Every sub-page is an empty WordPress stub.** Verified via both the
   rendered HTML and the WP REST API (`/wp-json/wp/v2/pages`): About Us,
   Our Story, Mission and Vision, Core Values, Our Team, Programs (and its
   4 children), Get Involved (and its 3 children), Blogs, News & Updates,
   Success Stories, and Contact Us all return **zero characters** of
   `post_content`. The only text rendered on those URLs is the page `<h1>`
   title plus the site-wide header/footer. All real copy lives on the
   **home page only** (Elementor post ID 384, ~58KB of markup).
2. Because of (1), the rebuild's sub-pages only contain verbatim text where
   that exact text already exists on the homepage (e.g. the Mission/Vision
   page reuses the homepage's Mission/Vision paragraphs word-for-word). Where
   no source text exists anywhere on the live site (Our Story, Core Values,
   Our Team, Success Stories, News & Updates), the new page says so honestly
   ("content coming soon") instead of inventing copy — per your instruction
   never to invent content.
3. **No sitemap.xml or robots.txt** exists on the live site (both 404). Page
   discovery was done via the rendered nav menu plus the WP REST API, which
   also supplied the real slugs (e.g. `about-us`, `mission-and-vision`) —
   the on-page links actually use `?page_id=NNNN` query URLs because the
   site never enabled pretty permalinks. The rebuild uses the REST-API slugs
   as clean URLs.
4. **No contact information is published anywhere on the live site** — no
   phone, email, or address in the markup, and the Contact Us page is one of
   the empty stubs. The rebuilt contact form posts to a placeholder address
   (`info@talebertchildcare.org`) that you'll need to confirm/replace, per
   your note that SMTP details are coming later.
4b. The footer's Facebook icon has **no `href` at all** (not even `#`) — it
   is visually present but completely non-functional. No other social links
   exist anywhere on the site. The rebuild omits the dead icon rather than
   linking it to a guessed URL; `content/site.php` has an empty `social`
   array ready for real links once you have them.
5. **Security/hygiene note:** on the live homepage, 5 of the 6 "Programs"
   image-boxes (Young Mothers, Healthcare, Community, Talent, Future Plans)
   link out to `http://callandwell.com/?product=...consultation` — an
   unrelated third-party telehealth product site, and one leftover team
   photo (`team-member01.jpg`) is hotlinked from `callandwell.com` too. This
   looks like uncleaned demo/starter-template content (the site has
   WooCommerce, Astra Sites, and other starter-kit plugins installed) rather
   than a hack, but it means visitors clicking those program cards currently
   leave the site. The rebuild does **not** carry these links over — program
   cards link to the corresponding internal program page instead.
6. The live footer credits "Powered By Thirdsan Enterprises" (the previous
   site builder) as an "OUR PARTNER" logo. That's the vendor's own
   self-promotion, not a Talebert program partner, so it's dropped from the
   rebuild; the genuine partner logo (HNMI) is kept.
7. Every CTA button on the live homepage ("DONATE NOW", "More...", "Proceed
   and Support") has `href="#"` — none of them go anywhere. The rebuild
   keeps the exact button copy but points them at the obvious matching
   internal page (Donate → `/donate`, More... → `/about-us`, Proceed and
   Support → `/get-involved`) so the site is actually usable.

## Content pivot: the organization profile document (supersedes the live-site scrape)

On 2026-07-13 the client added `Talebert Child Care Uganda organization
profile.docx` to the repo and gave explicit direction: narrow program
messaging to two focus areas — **Vulnerable Children** and **Street
Children** — plus one future plan (an **orphanage combined with a
school**), and remove literature about every other program. That
document is now the authoritative content source, superseding the live
WordPress scrape wherever the two disagree. Extracted via direct
`word/document.xml` parsing (LibreOffice headless conversion failed in
this sandbox). Notable consequences:

- **Founder identity changed.** The live site named the founder "Mrs.
  Talemwa Edith" (est. 2007). The profile document names the founder
  **Pastor Robert Talemwa** and gives no specific founding year — the
  rebuild now uses the document's name throughout (`content/site.php`,
  Our Team, Our Story) and the unverified 2007 date was dropped rather
  than guessed at.
- **Mission, Vision, and Motto rewritten** from the document's own
  wording (Parts "OUR VISION" / "OUR MISSION" / "OUR MOTTO"). The old
  live-site Mission/Vision (which centered young mothers and community
  development) is retired.
- **Core Values, Our Story, and Our Team** — all previously empty stubs —
  now have real content (Parts 2, 3, 4 of the document).
- **Programs cut from six to two, plus one future plan.** Removed
  entirely: Education Support, Young Mothers Training, Health Care &
  Advocacy, Community Development, Talent & Skills Development (none of
  these are named as standalone programs in the client's new direction).
  Added: `/vulnerable-children` (Part 5 + supporting facets from Parts 6,
  7, 9, 10, 13) and `/street-children` (Part 8, a direct match). The old
  program URLs 301-redirect to `/programs` (see root `.htaccess`) since
  the site was already deployed once.
- **Future Plans reframed** from "Talebert School Project" to "Orphanage &
  School," combining the document's residential-care rationale (Part 10)
  with its Five-Year Goals (Part 17).
- **Get Involved / Donate / Volunteer / Partner With Us** now quote Part
  18 ("Partnership Opportunities") instead of the old young-mothers-era
  copy.
- **Success Stories** uses the document's one example testimony (Part
  15) — the document itself labels this a placeholder ("Replace this
  example with real testimonies... with the appropriate permission"), so
  it's presented on-site as an explicitly illustrative sample, not a
  verified real story.
- **Contact info still has no real values to use** — the document's own
  contact section is entirely placeholders ("Insert official email
  address," etc.), same as the live site. `content/site.php`'s
  placeholder email stands until real details are provided.
- Not yet incorporated (present in the document but out of scope for this
  pass — ask if you want them added): Part 16 Governance/Safeguarding,
  the full Part 17 strategic plan narrative beyond the Five-Year Goals
  list, and Part 20's back-cover/closing-scripture copy.
