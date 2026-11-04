<?php
/**
 * Template Name: Aurelle Home
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body class="au-page">

<!-- ===== MOBILE NAV OVERLAY ===== -->
<div class="au-nav-overlay" id="au-nav-overlay" role="dialog" aria-modal="true" aria-label="Navigation menu">
  <button class="au-nav-close" id="au-nav-close" aria-label="Close menu">&times;</button>
  <nav aria-label="Mobile navigation">
    <a href="#treatments">Treatments</a>
    <a href="#doctor">Our Doctor</a>
    <a href="#results">Results</a>
    <a href="#reviews">Reviews</a>
    <a href="#book">Contact</a>
  </nav>
  <div style="margin-top:40px;">
    <a href="#book" class="au-btn au-btn-dark" style="width:100%;justify-content:center;">Book Appointment</a>
  </div>
  <div style="margin-top:24px;font-size:14px;color:var(--ink2);">+1 (415) 555 0182</div>
</div>

<!-- ===== HEADER / NAV ===== -->
<header class="au-header" style="position:absolute;left:0;right:0;top:0;z-index:10;padding:22px 0;">
  <div class="au-wrap" style="display:flex;align-items:center;justify-content:space-between;gap:24px;">

    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="au-logo" style="font-family:'Cormorant Garamond',serif;font-size:22px;letter-spacing:0.22em;text-transform:uppercase;font-weight:500;display:flex;align-items:center;gap:10px;text-decoration:none;color:var(--ink);">
      <span style="width:30px;height:30px;border-radius:50%;border:1px solid var(--rose);display:inline-grid;place-items:center;font-size:14px;color:var(--rose);letter-spacing:0;font-family:'Cormorant Garamond',serif;">A</span>
      Aurelle
    </a>

    <!-- Desktop nav -->
    <nav class="au-nav-desktop" style="display:flex;gap:34px;font-size:13px;letter-spacing:0.06em;color:var(--ink2);font-weight:400;" aria-label="Primary navigation">
      <a href="#treatments" style="color:var(--ink2);">Treatments</a>
      <a href="#doctor" style="color:var(--ink2);">Our Doctor</a>
      <a href="#results" style="color:var(--ink2);">Results</a>
      <a href="#reviews" style="color:var(--ink2);">Reviews</a>
      <a href="#book" style="color:var(--ink2);">Contact</a>
    </nav>

    <!-- Desktop phone + CTA -->
    <div class="au-nav-phone" style="display:flex;align-items:center;gap:22px;font-size:13px;">
      <span style="color:var(--ink2);letter-spacing:0.04em;">+1 (415) 555 0182</span>
      <a href="#book" class="au-btn au-btn-dark" style="padding:12px 22px;font-size:13px;">Book Appointment</a>
    </div>

    <!-- Hamburger (mobile only, hidden by default) -->
    <button class="au-nav-hamburger" id="au-nav-open" type="button" aria-label="Open menu" style="display:none;width:44px;height:44px;border-radius:50%;border:1px solid var(--line);background:transparent;place-items:center;cursor:pointer;">
      <svg width="16" height="12" viewBox="0 0 16 12" aria-hidden="true">
        <path d="M0 1h16M0 6h16M0 11h16" stroke="#2A2630" stroke-width="1.4" fill="none"/>
      </svg>
    </button>

  </div>
</header>

<!-- ===== HERO ===== -->
<section id="top" style="position:relative;min-height:900px;padding:150px 0 70px;display:flex;align-items:center;overflow:hidden;">

  <!-- Decorative blobs -->
  <div aria-hidden="true" style="position:absolute;border-radius:50%;filter:blur(70px);width:620px;height:620px;right:-140px;top:-120px;background:radial-gradient(circle,rgba(217,212,234,0.95),rgba(217,212,234,0) 70%);pointer-events:none;"></div>
  <div aria-hidden="true" style="position:absolute;border-radius:50%;filter:blur(70px);width:540px;height:540px;right:220px;bottom:-240px;background:radial-gradient(circle,rgba(231,207,198,0.9),rgba(231,207,198,0) 70%);pointer-events:none;"></div>

  <div class="au-wrap au-hero-grid" style="position:relative;z-index:1;display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:60px;align-items:center;">

    <!-- Left: copy -->
    <div class="au-hero-copy" style="display:flex;flex-direction:column;align-items:flex-start;">
      <div class="eyebrow">Aesthetic &amp; Dermatology Clinic</div>

      <h1 class="au-hero-h1" style="font-size:84px;margin:22px 0 26px;">
        Skin that feels<br>like you, <em>only brighter.</em>
      </h1>

      <p style="font-size:17px;color:var(--ink2);max-width:460px;margin-bottom:38px;">
        Medical-grade skincare treatments, personalised by board-certified dermatologists. Natural results, zero guesswork.
      </p>

      <div style="display:flex;gap:14px;flex-wrap:wrap;align-items:center;">
        <a href="#book" class="au-btn au-btn-dark">
          Book a Consultation
          <span class="arr"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
        </a>
        <a href="#treatments" class="au-btn au-btn-ghost">View Treatments</a>
      </div>

      <!-- Social proof -->
      <div style="display:flex;align-items:center;gap:18px;margin-top:46px;padding-top:28px;border-top:1px solid var(--line);width:100%;max-width:520px;">
        <div style="display:flex;">
          <span style="width:38px;height:38px;border-radius:50%;border:2px solid var(--cream);background:#D9D4EA;"></span>
          <span style="width:38px;height:38px;border-radius:50%;border:2px solid var(--cream);background:#E7CFC6;margin-left:-10px;"></span>
          <span style="width:38px;height:38px;border-radius:50%;border:2px solid var(--cream);background:#D5C4B8;margin-left:-10px;"></span>
          <span style="width:38px;height:38px;border-radius:50%;border:2px solid var(--cream);background:#CFCAD8;margin-left:-10px;"></span>
        </div>
        <div>
          <div style="color:var(--gold);letter-spacing:2px;font-size:13px;">★★★★★ <b style="font-weight:500;font-size:15px;color:var(--ink);letter-spacing:0;">4.9</b></div>
          <small style="display:block;font-size:13px;color:var(--muted);">Trusted by 10,000+ clients since 2011</small>
        </div>
      </div>
    </div>

    <!-- Right: image + floating cards -->
    <div class="au-hero-image-col" style="position:relative;height:620px;">

      <!-- Decorative ring -->
      <div aria-hidden="true" style="position:absolute;left:0;top:70px;width:230px;height:230px;border-radius:50%;border:1px solid var(--rose);opacity:0.7;pointer-events:none;"></div>

      <!-- Hero image placeholder -->
      <div class="au-ph" style="position:absolute;right:0;top:0;width:78%;height:100%;border-radius:999px 999px 28px 28px;box-shadow:var(--shadow);">
        <span>Photo: hero treatment close-up 4:5</span>
      </div>

      <!-- Est badge -->
      <div style="position:absolute;right:30px;top:-18px;width:120px;height:120px;border-radius:50%;background:var(--ink);color:#fff;display:grid;place-items:center;font-family:'Cormorant Garamond',serif;font-style:italic;font-size:22px;line-height:1.1;text-align:center;">
        est.<span style="position:absolute;bottom:14px;font-family:'Jost',sans-serif;font-style:normal;font-size:9px;letter-spacing:0.2em;text-transform:uppercase;">since 2011</span>
      </div>

      <!-- Float card: next slot -->
      <div class="au-float-card" style="position:absolute;left:-10px;bottom:120px;min-width:230px;">
        <span style="width:8px;height:8px;border-radius:50%;background:#6FBF9A;display:inline-block;margin-right:8px;"></span>
        <small style="color:var(--muted);">Next available slot</small>
        <b style="display:block;font-weight:500;font-size:15px;margin-top:4px;">Today, 3:30 PM</b>
      </div>

      <!-- Float card: recommend -->
      <div class="au-float-card" style="position:absolute;right:-14px;bottom:50px;display:flex;gap:14px;align-items:center;">
        <span style="font-family:'Cormorant Garamond',serif;font-size:34px;line-height:1;">98%</span>
        <div>
          <b style="font-weight:500;">Would recommend</b>
          <small style="color:var(--muted);display:block;">Based on 2,400 reviews</small>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ===== MARQUEE ===== -->
<div style="padding:22px 0;border-top:1px solid var(--line);border-bottom:1px solid var(--line);background:#fff;overflow:hidden;" aria-hidden="true">
  <div class="au-marquee-track">
    <span class="au-pill">Laser Resurfacing</span>
    <span class="au-pill">Hydrafacial</span>
    <span class="au-pill">Dermal Fillers</span>
    <span class="au-pill">Chemical Peel</span>
    <span class="au-pill">Microneedling</span>
    <span class="au-pill">Acne &amp; Scars</span>
    <span class="au-pill">Anti-Wrinkle</span>
    <span class="au-pill">Skin Brightening</span>
    <span class="au-pill">Collagen Boost</span>
    <span class="au-pill">Laser Hair Removal</span>
    <!-- Duplicate for seamless loop -->
    <span class="au-pill">Laser Resurfacing</span>
    <span class="au-pill">Hydrafacial</span>
    <span class="au-pill">Dermal Fillers</span>
    <span class="au-pill">Chemical Peel</span>
    <span class="au-pill">Microneedling</span>
    <span class="au-pill">Acne &amp; Scars</span>
    <span class="au-pill">Anti-Wrinkle</span>
    <span class="au-pill">Skin Brightening</span>
    <span class="au-pill">Collagen Boost</span>
    <span class="au-pill">Laser Hair Removal</span>
  </div>
</div>

<!-- ===== ABOUT ===== -->
<section class="au-section" style="padding:120px 0;">
  <div class="au-wrap au-about-grid" style="display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:80px;align-items:center;">

    <!-- Images -->
    <div style="position:relative;">
      <div class="au-ph" style="border-radius:28px;aspect-ratio:4/5;">Photo: clinic interior or treatment room 4:5</div>
      <div class="au-ph au-about-circle-img" style="position:absolute;left:-60px;bottom:60px;width:46%;aspect-ratio:1;border-radius:50%;border:10px solid var(--cream);box-shadow:0 30px 60px -30px rgba(42,38,48,0.3);">Photo 1:1</div>
    </div>

    <!-- Copy -->
    <div>
      <div class="eyebrow">About the clinic</div>
      <h2 class="au-section-h2" style="font-size:52px;margin:20px 0 24px;">
        Fifteen years of <em>honest</em> skincare.
      </h2>
      <p style="color:var(--ink2);font-size:16px;max-width:480px;">
        We believe great skin is the result of science, patience and care. Every treatment plan starts with a thorough skin analysis, so you only receive what your skin actually needs.
      </p>

      <!-- Stats -->
      <div style="display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:22px;margin-top:40px;">
        <div style="border-top:1px solid var(--line);padding-top:18px;">
          <b style="display:block;font-family:'Cormorant Garamond',serif;font-size:34px;font-weight:500;line-height:1;">15+</b>
          <small style="font-size:13px;color:var(--muted);display:block;margin-top:6px;">Years of practice</small>
        </div>
        <div style="border-top:1px solid var(--line);padding-top:18px;">
          <b style="display:block;font-family:'Cormorant Garamond',serif;font-size:34px;font-weight:500;line-height:1;">10k</b>
          <small style="font-size:13px;color:var(--muted);display:block;margin-top:6px;">Happy clients</small>
        </div>
        <div style="border-top:1px solid var(--line);padding-top:18px;">
          <b style="display:block;font-family:'Cormorant Garamond',serif;font-size:34px;font-weight:500;line-height:1;">32</b>
          <small style="font-size:13px;color:var(--muted);display:block;margin-top:6px;">Treatments offered</small>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ===== TREATMENTS ===== -->
<section id="treatments" class="au-section au-section-alt" style="padding:110px 0 120px;background:#fff;">
  <div class="au-wrap">

    <div style="display:flex;justify-content:space-between;align-items:flex-end;gap:30px;margin-bottom:56px;">
      <div>
        <div class="eyebrow">Our treatments</div>
        <h2 class="au-section-h2" style="font-size:52px;margin-top:18px;">
          Tailored to your skin, <em>not a trend.</em>
        </h2>
      </div>
      <p style="max-width:380px;color:var(--ink2);font-size:15px;">
        From gentle facials to advanced laser work, each treatment is performed by licensed practitioners using FDA-cleared devices.
      </p>
    </div>

    <div class="au-treatments-grid" style="display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:22px;">

      <div class="tcard">
        <span class="tcard-num">01</span>
        <div class="tcard-ico"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="8"/><path d="M12 4v16M4 12h16"/></svg></div>
        <h3>Hydrafacial</h3>
        <p class="tcard-desc">Deep cleanse, exfoliate and hydrate in one 45-minute session. No downtime, instant glow.</p>
        <div class="tcard-foot"><div><small>From</small><b>$149</b></div><a href="#book">Book &rarr;</a></div>
      </div>

      <div class="tcard">
        <span class="tcard-num">02</span>
        <div class="tcard-ico"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 20L20 4M8 4h12v12"/></svg></div>
        <h3>Laser Resurfacing</h3>
        <p class="tcard-desc">Smooth texture, fade sun damage and fine lines with fractional CO2 technology.</p>
        <div class="tcard-foot"><div><small>From</small><b>$390</b></div><a href="#book">Book &rarr;</a></div>
      </div>

      <div class="tcard">
        <span class="tcard-num">03</span>
        <div class="tcard-ico"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3c3 4 6 7 6 11a6 6 0 0 1-12 0c0-4 3-7 6-11z"/></svg></div>
        <h3>Dermal Fillers</h3>
        <p class="tcard-desc">Restore volume and definition with subtle, natural-looking hyaluronic acid fillers.</p>
        <div class="tcard-foot"><div><small>From</small><b>$520</b></div><a href="#book">Book &rarr;</a></div>
      </div>

      <div class="tcard">
        <span class="tcard-num">04</span>
        <div class="tcard-ico"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 16c4-8 12-8 16 0M4 20h16"/></svg></div>
        <h3>Chemical Peel</h3>
        <p class="tcard-desc">Medical-grade peels to brighten tone, reduce pigmentation and refine pores.</p>
        <div class="tcard-foot"><div><small>From</small><b>$180</b></div><a href="#book">Book &rarr;</a></div>
      </div>

      <div class="tcard">
        <span class="tcard-num">05</span>
        <div class="tcard-ico"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M6 18L18 6M6 6l12 12"/></svg></div>
        <h3>Microneedling</h3>
        <p class="tcard-desc">Stimulate collagen for firmer skin and visibly reduced acne scars and stretch marks.</p>
        <div class="tcard-foot"><div><small>From</small><b>$260</b></div><a href="#book">Book &rarr;</a></div>
      </div>

      <div class="tcard">
        <span class="tcard-num">06</span>
        <div class="tcard-ico"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2l2.5 6.5L21 9l-5 4.5L17.5 21 12 17.5 6.5 21 8 13.5 3 9l6.5-.5z"/></svg></div>
        <h3>Anti-Wrinkle</h3>
        <p class="tcard-desc">Soften expression lines on the forehead, frown and eye area with precise injectables.</p>
        <div class="tcard-foot"><div><small>From</small><b>$240</b></div><a href="#book">Book &rarr;</a></div>
      </div>

    </div>
  </div>
</section>

<!-- ===== DOCTOR ===== -->
<section id="doctor" class="au-section" style="padding:130px 0;position:relative;overflow:hidden;">
  <span class="ghost-text" aria-hidden="true" style="right:-40px;top:40px;">Doctor</span>
  <div class="au-wrap au-doctor-grid" style="display:grid;grid-template-columns:0.95fr 1.05fr;gap:90px;align-items:center;position:relative;">

    <!-- Photo -->
    <div style="position:relative;">
      <div class="au-ph" style="border-radius:28px 28px 240px 240px;aspect-ratio:4/5;">Photo: doctor portrait in white coat 4:5</div>
      <div style="position:absolute;right:-30px;top:40px;background:#fff;border-radius:18px;padding:16px 22px;box-shadow:0 20px 40px -20px rgba(42,38,48,0.3);font-size:13px;">
        <b style="display:block;font-family:'Cormorant Garamond',serif;font-size:20px;font-weight:500;">Dr. Elena Marchetti</b>
        <small style="color:var(--muted);">Board-certified dermatologist</small>
      </div>
    </div>

    <!-- Copy -->
    <div>
      <div class="eyebrow">Meet your doctor</div>
      <h2 class="au-section-h2" style="font-size:52px;margin:20px 0 22px;">
        Care that starts with <em>listening.</em>
      </h2>
      <p style="color:var(--ink2);font-size:16px;max-width:520px;margin-bottom:18px;">
        Dr. Marchetti has spent over fifteen years in medical and aesthetic dermatology, with a focus on conservative, long-term skin health rather than quick fixes.
      </p>
      <p style="color:var(--ink2);font-size:16px;max-width:520px;">
        Every first visit includes a 30-minute consultation and digital skin analysis, so your plan is built on evidence, not assumptions.
      </p>

      <!-- Credential chips -->
      <div style="display:flex;flex-wrap:wrap;gap:10px;margin:30px 0 36px;">
        <span style="padding:9px 16px;border-radius:999px;background:var(--lavender2);font-size:12px;letter-spacing:0.06em;color:var(--ink2);">MD, Dermatology</span>
        <span style="padding:9px 16px;border-radius:999px;background:var(--lavender2);font-size:12px;letter-spacing:0.06em;color:var(--ink2);">American Board of Dermatology</span>
        <span style="padding:9px 16px;border-radius:999px;background:var(--lavender2);font-size:12px;letter-spacing:0.06em;color:var(--ink2);">ASDS Member</span>
        <span style="padding:9px 16px;border-radius:999px;background:var(--lavender2);font-size:12px;letter-spacing:0.06em;color:var(--ink2);">Laser Safety Certified</span>
      </div>

      <blockquote style="margin:10px 0 0;border-left:1px solid var(--rose);padding-left:22px;font-family:'Cormorant Garamond',serif;font-style:italic;font-size:22px;color:var(--ink2);max-width:480px;">
        "The best treatment is the one you barely notice, except in how confident you feel."
      </blockquote>
    </div>

  </div>
</section>

<!-- ===== WHY AURELLE ===== -->
<section class="au-section au-section-dark" style="padding:110px 0;background:var(--ink);color:#fff;position:relative;overflow:hidden;">
  <span class="ghost-text" aria-hidden="true" style="right:-20px;bottom:-30px;-webkit-text-stroke:1px rgba(255,255,255,0.1);">Reason</span>
  <div class="au-wrap au-why-grid" style="display:grid;grid-template-columns:0.8fr 1.2fr;gap:80px;align-items:start;position:relative;">

    <div>
      <div class="eyebrow" style="color:var(--rose2);">Why Aurelle</div>
      <h2 class="au-section-h2" style="font-size:52px;margin-top:18px;color:#fff;">
        Three things we <em style="color:var(--rose2);">never</em> compromise on.
      </h2>
    </div>

    <div>
      <div style="display:grid;grid-template-columns:70px 1fr;gap:20px;padding:30px 0;border-top:1px solid rgba(255,255,255,0.14);">
        <i style="font-family:'Cormorant Garamond',serif;font-style:italic;font-size:30px;color:var(--rose2);line-height:1.1;">01</i>
        <div>
          <h3 style="font-size:24px;margin-bottom:8px;color:#fff;">Medical oversight on every visit</h3>
          <p style="color:rgba(255,255,255,0.72);font-size:14.5px;">All treatments are supervised by a licensed dermatologist, not sales staff. You always know who is treating you.</p>
        </div>
      </div>
      <div style="display:grid;grid-template-columns:70px 1fr;gap:20px;padding:30px 0;border-top:1px solid rgba(255,255,255,0.14);">
        <i style="font-family:'Cormorant Garamond',serif;font-style:italic;font-size:30px;color:var(--rose2);line-height:1.1;">02</i>
        <div>
          <h3 style="font-size:24px;margin-bottom:8px;color:#fff;">Honest, no-pressure plans</h3>
          <p style="color:rgba(255,255,255,0.72);font-size:14.5px;">We will tell you when a treatment is not right for you. Our consultations are about your skin, not our quotas.</p>
        </div>
      </div>
      <div style="display:grid;grid-template-columns:70px 1fr;gap:20px;padding:30px 0;border-top:1px solid rgba(255,255,255,0.14);border-bottom:1px solid rgba(255,255,255,0.14);">
        <i style="font-family:'Cormorant Garamond',serif;font-style:italic;font-size:30px;color:var(--rose2);line-height:1.1;">03</i>
        <div>
          <h3 style="font-size:24px;margin-bottom:8px;color:#fff;">Technology that is actually proven</h3>
          <p style="color:rgba(255,255,255,0.72);font-size:14.5px;">Only FDA-cleared devices and clinically studied protocols. New does not mean better, and we test before we adopt.</p>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ===== RESULTS ===== -->
<section id="results" class="au-section au-section-alt" style="padding:120px 0;background:#fff;">
  <div class="au-wrap">
    <div style="display:flex;justify-content:space-between;align-items:flex-end;gap:30px;margin-bottom:56px;">
      <div>
        <div class="eyebrow">Real results</div>
        <h2 class="au-section-h2" style="font-size:52px;margin-top:18px;">Before &amp; after, <em>unfiltered.</em></h2>
      </div>
      <p style="max-width:380px;color:var(--ink2);font-size:15px;">All photos are from Aurelle clients, taken under identical lighting with consent. Individual results vary.</p>
    </div>

    <div class="au-results-grid" style="display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:22px;">

      <figure style="margin:0;">
        <div class="au-ph" style="border-radius:24px;aspect-ratio:4/4.6;position:relative;">
          <span>Photo: before/after laser</span>
          <span style="position:absolute;top:0;bottom:0;left:50%;width:1px;background:#fff;"></span>
          <span style="position:absolute;bottom:16px;left:16px;font-size:11px;letter-spacing:0.18em;background:rgba(255,255,255,0.9);padding:6px 12px;border-radius:999px;color:var(--ink);">Before</span>
          <span style="position:absolute;bottom:16px;right:16px;font-size:11px;letter-spacing:0.18em;background:rgba(255,255,255,0.9);padding:6px 12px;border-radius:999px;color:var(--ink);">After</span>
        </div>
        <figcaption style="margin-top:14px;display:flex;justify-content:space-between;font-size:13px;color:var(--ink2);">
          <b style="font-weight:500;color:var(--ink);">Laser Resurfacing</b>
          <span>3 sessions</span>
        </figcaption>
      </figure>

      <figure style="margin:0;">
        <div class="au-ph" style="border-radius:24px;aspect-ratio:4/4.6;position:relative;">
          <span>Photo: before/after acne</span>
          <span style="position:absolute;top:0;bottom:0;left:50%;width:1px;background:#fff;"></span>
          <span style="position:absolute;bottom:16px;left:16px;font-size:11px;letter-spacing:0.18em;background:rgba(255,255,255,0.9);padding:6px 12px;border-radius:999px;color:var(--ink);">Before</span>
          <span style="position:absolute;bottom:16px;right:16px;font-size:11px;letter-spacing:0.18em;background:rgba(255,255,255,0.9);padding:6px 12px;border-radius:999px;color:var(--ink);">After</span>
        </div>
        <figcaption style="margin-top:14px;display:flex;justify-content:space-between;font-size:13px;color:var(--ink2);">
          <b style="font-weight:500;color:var(--ink);">Acne &amp; Scar Program</b>
          <span>12 weeks</span>
        </figcaption>
      </figure>

      <figure style="margin:0;">
        <div class="au-ph" style="border-radius:24px;aspect-ratio:4/4.6;position:relative;">
          <span>Photo: before/after peel</span>
          <span style="position:absolute;top:0;bottom:0;left:50%;width:1px;background:#fff;"></span>
          <span style="position:absolute;bottom:16px;left:16px;font-size:11px;letter-spacing:0.18em;background:rgba(255,255,255,0.9);padding:6px 12px;border-radius:999px;color:var(--ink);">Before</span>
          <span style="position:absolute;bottom:16px;right:16px;font-size:11px;letter-spacing:0.18em;background:rgba(255,255,255,0.9);padding:6px 12px;border-radius:999px;color:var(--ink);">After</span>
        </div>
        <figcaption style="margin-top:14px;display:flex;justify-content:space-between;font-size:13px;color:var(--ink2);">
          <b style="font-weight:500;color:var(--ink);">Skin Brightening Peel</b>
          <span>4 sessions</span>
        </figcaption>
      </figure>

    </div>
  </div>
</section>

<!-- ===== REVIEWS ===== -->
<section id="reviews" class="au-section" style="padding:110px 0 160px;background:var(--cream2);">
  <div class="au-wrap">
    <div style="margin-bottom:56px;">
      <div class="eyebrow">Client stories</div>
      <h2 class="au-section-h2" style="font-size:52px;margin-top:18px;">What our clients <em>say.</em></h2>
    </div>

    <div class="au-reviews-grid" style="display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:22px;align-items:start;">

      <div class="qcard">
        <span class="qcard-stars">★★★★★</span>
        <div class="qcard-q">"</div>
        <p class="qcard-text">I came in nervous about fillers and left with exactly what I wanted: nobody noticed, but everyone said I looked rested. Dr. Marchetti is incredibly honest.</p>
        <div class="qcard-who">
          <span class="qcard-avatar" style="background:var(--lavender);"></span>
          <div><b>Sarah K.</b><small>Dermal fillers, 2 visits</small></div>
        </div>
      </div>

      <div class="qcard" style="transform:translateY(40px);">
        <span class="qcard-stars">★★★★★</span>
        <div class="qcard-q">"</div>
        <p class="qcard-text">Three laser sessions and my acne scars are barely visible. The consultation alone was worth it, they explained everything without upselling.</p>
        <div class="qcard-who">
          <span class="qcard-avatar" style="background:var(--rose2);"></span>
          <div><b>Daniel R.</b><small>Laser resurfacing</small></div>
        </div>
      </div>

      <div class="qcard">
        <span class="qcard-stars">★★★★★</span>
        <div class="qcard-q">"</div>
        <p class="qcard-text">Finally a clinic that told me no. They refused a treatment I asked for and recommended something gentler. My skin has never looked better.</p>
        <div class="qcard-who">
          <span class="qcard-avatar" style="background:#D5C4B8;"></span>
          <div><b>Amira L.</b><small>Chemical peel program</small></div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ===== BOOKING ===== -->
<section id="book" class="au-section" style="padding:120px 0;">
  <div class="au-wrap au-booking-grid" style="display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:70px;align-items:start;">

    <!-- Left: info + hours -->
    <div>
      <div class="eyebrow">Book a visit</div>
      <h2 class="au-section-h2" style="font-size:52px;margin:18px 0 22px;">
        Your skin deserves a <em>second opinion.</em>
      </h2>
      <p style="color:var(--ink2);font-size:16px;max-width:420px;margin-bottom:40px;">
        Consultations are 30 minutes and include a digital skin analysis. No commitment, no sales pitch.
      </p>

      <div class="au-hours" style="border:1px solid var(--line);border-radius:24px;padding:28px 30px;background:#fff;max-width:440px;">
        <h4 style="font-size:24px;margin-bottom:16px;">Opening hours</h4>
        <div class="au-hours-row"><span>Monday to Friday</span><b>9:00 AM to 7:00 PM</b></div>
        <div class="au-hours-row"><span>Saturday</span><b>10:00 AM to 4:00 PM</b></div>
        <div class="au-hours-row"><span>Sunday</span><b style="color:var(--muted);">Closed</b></div>
        <div class="au-hours-row"><span>Location</span><b>240 Fillmore St, San Francisco</b></div>
      </div>
    </div>

    <!-- Right: form -->
    <form class="au-booking-form" id="au-booking-form" style="background:#fff;border-radius:28px;padding:44px;box-shadow:0 40px 80px -40px rgba(42,38,48,0.25);" novalidate>
      <h3 style="font-size:30px;margin-bottom:6px;">Request an appointment</h3>
      <p style="font-size:14px;color:var(--muted);margin-bottom:30px;">We will confirm your slot within 2 hours during opening hours.</p>

      <div class="au-form-name-row" style="display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:16px;">
        <div class="au-field"><label for="au-fn">First name</label><input id="au-fn" name="first_name" type="text" placeholder="Jane" required></div>
        <div class="au-field"><label for="au-ln">Last name</label><input id="au-ln" name="last_name" type="text" placeholder="Cooper" required></div>
      </div>

      <div class="au-field"><label for="au-em">Email</label><input id="au-em" name="email" type="email" placeholder="jane@email.com" required></div>

      <div class="au-form-mid-row" style="display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:16px;">
        <div class="au-field">
          <label for="au-tr">Treatment</label>
          <select id="au-tr" name="treatment">
            <option>Consultation</option>
            <option>Hydrafacial</option>
            <option>Laser Resurfacing</option>
            <option>Dermal Fillers</option>
            <option>Chemical Peel</option>
            <option>Microneedling</option>
            <option>Anti-Wrinkle</option>
          </select>
        </div>
        <div class="au-field"><label for="au-dt">Preferred date</label><input id="au-dt" name="preferred_date" type="text" placeholder="Oct 24, 2026"></div>
      </div>

      <button type="submit" class="au-btn au-btn-dark" style="width:100%;justify-content:center;margin-top:8px;">Request Appointment</button>
      <small style="display:block;text-align:center;font-size:12px;color:var(--muted);margin-top:16px;">By submitting you agree to our privacy policy. We never share your data.</small>

      <div id="au-form-success" style="display:none;margin-top:16px;padding:16px;background:#F0FAF4;border-radius:14px;font-size:14px;color:#2D6A4F;text-align:center;">
        Thank you! We&rsquo;ll confirm your appointment within 2 hours.
      </div>
    </form>

  </div>
</section>

<!-- ===== FOOTER ===== -->
<footer style="background:var(--ink);color:#fff;padding:80px 0 30px;">
  <div class="au-wrap">
    <div class="au-footer-grid" style="display:grid;grid-template-columns:1.4fr 1fr 1fr 1fr;gap:50px;padding-bottom:50px;border-bottom:1px solid rgba(255,255,255,0.12);">

      <div>
        <span style="font-family:'Cormorant Garamond',serif;font-size:22px;letter-spacing:0.22em;text-transform:uppercase;font-weight:500;display:flex;align-items:center;gap:10px;color:#fff;">
          <span style="width:30px;height:30px;border-radius:50%;border:1px solid var(--rose2);display:inline-grid;place-items:center;font-size:14px;color:var(--rose2);letter-spacing:0;font-family:'Cormorant Garamond',serif;">A</span>
          Aurelle
        </span>
        <p style="color:rgba(255,255,255,0.7);font-size:14px;max-width:320px;margin-top:18px;">Aesthetic and dermatology clinic in San Francisco. Medical-grade skincare with honest advice.</p>
      </div>

      <div>
        <p class="fh5">Treatments</p>
        <ul class="flist">
          <li><a href="#treatments">Hydrafacial</a></li>
          <li><a href="#treatments">Laser Resurfacing</a></li>
          <li><a href="#treatments">Dermal Fillers</a></li>
          <li><a href="#treatments">Chemical Peel</a></li>
          <li><a href="#treatments">Microneedling</a></li>
        </ul>
      </div>

      <div>
        <p class="fh5">Clinic</p>
        <ul class="flist">
          <li><a href="#top">About</a></li>
          <li><a href="#doctor">Our Doctor</a></li>
          <li><a href="#results">Results</a></li>
          <li><a href="#reviews">Reviews</a></li>
          <li>Careers</li>
        </ul>
      </div>

      <div>
        <p class="fh5">Contact</p>
        <ul class="flist">
          <li>240 Fillmore St, SF</li>
          <li>+1 (415) 555 0182</li>
          <li><a href="mailto:hello@aurelleclinic.com">hello@aurelleclinic.com</a></li>
        </ul>
      </div>

    </div>

    <div style="display:flex;justify-content:space-between;align-items:center;padding-top:26px;font-size:12px;color:rgba(255,255,255,0.6);flex-wrap:wrap;gap:12px;">
      <span>&copy; <?php echo date('Y'); ?> Aurelle Skin Clinic. All rights reserved.</span>
      <div style="display:flex;gap:10px;">
        <a href="#" aria-label="Instagram" style="width:36px;height:36px;border-radius:50%;border:1px solid rgba(255,255,255,0.2);display:inline-grid;place-items:center;font-size:11px;color:rgba(255,255,255,0.6);">IG</a>
        <a href="#" aria-label="Facebook" style="width:36px;height:36px;border-radius:50%;border:1px solid rgba(255,255,255,0.2);display:inline-grid;place-items:center;font-size:11px;color:rgba(255,255,255,0.6);">FB</a>
        <a href="#" aria-label="TikTok" style="width:36px;height:36px;border-radius:50%;border:1px solid rgba(255,255,255,0.2);display:inline-grid;place-items:center;font-size:11px;color:rgba(255,255,255,0.6);">TT</a>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
