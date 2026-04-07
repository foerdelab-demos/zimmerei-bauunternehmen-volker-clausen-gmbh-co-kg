<?php
// Aktuelle Seite bestimmen
$currentPage = basename($_SERVER['PHP_SELF'], '.php');
$pageTitle = isset($pageTitle) ? $pageTitle : 'Zimmerei & Bauunternehmen Volker Clausen - Handewitt';
$metaDescription = isset($metaDescription) ? $metaDescription : 'Zimmerei & Bauunternehmen Volker Clausen in Handewitt - Zimmerei und Maurerarbeiten aus einer Hand. Dachstühle, energetische Sanierung, Holzrahmenbau und Komplettlösungen.';
$canonicalUrl = 'https://www.v-clausen.de/' . ($currentPage === 'index' ? '' : $currentPage . '.php');
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="description" content="<?= htmlspecialchars($metaDescription) ?>">
    <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl) ?>">
    
    <!-- Open Graph -->
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($metaDescription) ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= htmlspecialchars($canonicalUrl) ?>">
    <meta property="og:locale" content="de_DE">
    <meta property="og:site_name" content="Zimmerei Clausen">
    
    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "GeneralContractor",
        "name": "Zimmerei & Bauunternehmen Volker Clausen GmbH & Co. KG",
        "description": "Zimmerei und Maurerarbeiten aus einer Hand in Handewitt. Spezialisiert auf Holzfasereinblasdämmung, energetische Sanierung und Gewerbe-/Hallenbau.",
        "url": "https://www.v-clausen.de/",
        "telephone": "+49 461 16779780",
        "email": "info@v-clausen.de",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Bregenberg 8",
            "postalCode": "24976",
            "addressLocality": "Handewitt",
            "addressRegion": "Schleswig-Holstein",
            "addressCountry": "DE"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 54.6833,
            "longitude": 9.4667
        },
        "openingHours": "Mo-Fr 07:00-17:00",
        "areaServed": ["Handewitt", "Flensburg", "Schleswig-Holstein"],
        "serviceType": ["Zimmerei", "Maurerarbeiten", "Dachstuhlbau", "Energetische Sanierung", "Holzfasereinblasdämmung", "Gewerbe-Hallenbau"],
        "priceRange": "€€",
        "image": "https://www.v-clausen.de/assets/images/og-image.jpg",
        "sameAs": [
            "https://www.google.com/maps/place/Zimmerei+Volker+Clausen"
        ]
    }
    </script>
    
    <!-- Additional Open Graph Tags -->
    <meta property="og:image" content="https://www.v-clausen.de/assets/images/og-image.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Zimmerei & Bauunternehmen Volker Clausen - Handewitt">nates",
            "latitude": 54.7419775,
            "longitude": 9.4106698
        },
        "url": "https://www.v-clausen.de",
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.6",
            "reviewCount": "9"
        }
    }
    </script>
    
    <!-- Preconnect für Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;600;700&family=Source+Sans+Pro:wght@300;400;600&display=swap" rel="stylesheet">
    
    <!-- Critical CSS Inline -->
    <style>
    :root {
        --color-primary: #8B4513;
        --color-secondary: #2F4F2F;
        --color-accent: #CD853F;
        --color-neutral: #696969;
        --color-bg: #F5F5DC;
        --color-text: #2F2F2F;
        --color-white: #ffffff;
        --font-headline: 'Roboto Slab', serif;
        --font-body: 'Source Sans Pro', sans-serif;
        --radius-sm: 4px;
        --radius-md: 8px;
        --shadow-sm: 0 2px 4px rgba(0,0,0,0.1);
        --shadow-md: 0 4px 12px rgba(0,0,0,0.15);
        --transition: 0.3s cubic-bezier(0.16,1,0.3,1);
    }
    * { box-sizing: border-box; }
    body { margin: 0; font-family: var(--font-body); color: var(--color-text); line-height: 1.6; }
    .skip-link { position: absolute; top: -100%; left: 1rem; padding: 0.5rem 1rem; background: var(--color-primary); color: var(--color-white); border-radius: var(--radius-md); z-index: 9999; transition: top 0.2s; text-decoration: none; }
    .skip-link:focus { top: 1rem; }
    .sr-only { position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0,0,0,0); white-space: nowrap; border: 0; }
    .header { position: fixed; top: 0; left: 0; right: 0; z-index: 1000; transition: all var(--transition); }
    .header--transparent { background: transparent; }
    .header--solid { background: var(--color-white); box-shadow: var(--shadow-sm); }
    .header__container { max-width: 1200px; margin: 0 auto; padding: 0 1rem; display: flex; align-items: center; justify-content: space-between; height: 80px; }
    .header__logo { font-family: var(--font-headline); font-size: 1.5rem; font-weight: 700; color: var(--color-primary); text-decoration: none; }
    .header__nav { display: none; }
    .header__nav-list { display: flex; list-style: none; margin: 0; padding: 0; gap: 2rem; }
    .header__nav-link { color: var(--color-text); text-decoration: none; font-weight: 500; transition: color var(--transition); }
    .header__nav-link:hover, .header__nav-link--active { color: var(--color-primary); }
    .header__cta { display: none; background: var(--color-primary); color: var(--color-white); padding: 0.75rem 1.5rem; border-radius: var(--radius-md); text-decoration: none; font-weight: 600; transition: background var(--transition); }
    .header__cta:hover { background: var(--color-secondary); }
    .header__hamburger { display: block; background: none; border: none; padding: 0.5rem; cursor: pointer; }
    .header__hamburger-icon { width: 24px; height: 18px; position: relative; }
    .header__hamburger-line { display: block; height: 2px; width: 100%; background: var(--color-text); margin: 4px 0; transition: all var(--transition); }
    .header__hamburger[aria-expanded="true"] .header__hamburger-line:nth-child(1) { transform: rotate(45deg) translate(5px, 5px); }
    .header__hamburger[aria-expanded="true"] .header__hamburger-line:nth-child(2) { opacity: 0; }
    .header__hamburger[aria-expanded="true"] .header__hamburger-line:nth-child(3) { transform: rotate(-45deg) translate(7px, -6px); }
    .mobile-menu { position: fixed; top: 0; right: 0; width: 100%; max-width: 320px; height: 100vh; background: var(--color-white); box-shadow: var(--shadow-md); padding: 2rem; transform: translateX(100%); transition: transform 0.35s cubic-bezier(0.16,1,0.3,1); z-index: 999; }
    .mobile-menu.is-open { transform: translateX(0); }
    .mobile-menu__nav { margin-top: 2rem; }
    .mobile-menu__list { list-style: none; margin: 0; padding: 0; }
    .mobile-menu__item { border-bottom: 1px solid #eee; }
    .mobile-menu__link { display: block; padding: 1rem 0; color: var(--color-text); text-decoration: none; font-weight: 500; min-height: 48px; display: flex; align-items: center; }
    .mobile-menu__link:hover, .mobile-menu__link--active { color: var(--color-primary); }
    .mobile-menu__cta { margin-top: 2rem; }
    .mobile-menu__cta-link { display: block; background: var(--color-primary); color: var(--color-white); padding: 1rem; border-radius: var(--radius-md); text-decoration: none; font-weight: 600; text-align: center; }
    .overlay { position: fixed; top: 0; left: 0; width: 100%; height: 100vh; background: rgba(0,0,0,0.5); opacity: 0; visibility: hidden; transition: all var(--transition); z-index: 998; }
    .overlay.is-open { opacity: 1; visibility: visible; }
    body.menu-open { overflow: hidden; }
    @media (min-width: 768px) {
        .header__nav { display: block; }
        .header__cta { display: block; }
        .header__hamburger { display: none; }
        .mobile-menu { display: none; }
        .overlay { display: none; }
    }
    </style>
    
    <!-- Nicht-kritisches CSS -->
    <link rel="stylesheet" href="css/style.css" media="print" onload="this.media='all'; this.onload=null;">
    <noscript><link rel="stylesheet" href="css/style.css"></noscript>
    <link rel="stylesheet" href="assets/css/animations.css">
<!-- Meta Descriptions -->
<?php
$meta_descriptions = [
  'index' => 'Zimmerei & Bauunternehmen Clausen Handewitt - Komplettlösungen aus einer Hand. Holzfaser-Dämmung, Dachbau & Maurerarbeiten seit Jahrzehnten in Schleswig-Holstein.',
  'leistungen' => 'Zimmerei, Maurerarbeiten & Holzfaser-Einblasdämmung von Meisterbetrieb Clausen. Komplette energetische Sanierung aus einer Hand in Handewitt.',
  'referenzen' => 'Referenzen Zimmerei Clausen - Energetische Sanierungen, Dachstühle & Anbauten in Schleswig-Holstein. Echte Projekte, echte Ergebnisse.',
  'ueber-uns' => 'Zimmerei Clausen Handewitt - Seit Jahrzehnten Ihr Meisterbetrieb für Zimmerei & Maurerarbeiten. Persönliche Betreuung durch den Chef.',
  'kontakt' => 'Kontakt Zimmerei Clausen Handewitt - Tel. 0461 16779780. Kostenlose Beratung für Dachsanierung, Anbau & energetische Sanierung.'
];
$current_meta = $meta_descriptions[$currentPage] ?? 'Zimmerei Clausen Handewitt';
?>
<meta name="description" content="<?= htmlspecialchars($current_meta) ?>">
<!-- foerdelab-tracking-pixel -->
<script>
(function(){
  var LEAD_ID=13,DEMO_SLUG="zimmerei-bauunternehmen-volker-clausen-gmbh-co-kg",API="https:\/\/foerdelab.de\/api\/track.php";
  var sid=Math.random().toString(36).slice(2,11);
  var startTime=Date.now(),maxScroll=0;
  function send(payload){
    try{
      payload.leadId=LEAD_ID;payload.demoSlug=DEMO_SLUG;payload.sessionId=sid;
      payload.page=location.pathname;payload.timestamp=new Date().toISOString();
      if(navigator.sendBeacon){
        navigator.sendBeacon(API,new Blob([JSON.stringify(payload)],{type:'application/json'}));
      }else{
        fetch(API,{method:'POST',headers:{'Content-Type':'application/json'},body:JSON.stringify(payload),keepalive:true}).catch(function(){});
      }
    }catch(e){}
  }
  send({event:'page_view',referrer:document.referrer,userAgent:navigator.userAgent,screenWidth:screen.width});
  document.addEventListener('visibilitychange',function(){
    if(document.hidden){
      send({event:'time_on_page',seconds:Math.round((Date.now()-startTime)/1000)});
    }else{startTime=Date.now();}
  });
  window.addEventListener('beforeunload',function(){
    send({event:'time_on_page',seconds:Math.round((Date.now()-startTime)/1000)});
  });
  window.addEventListener('scroll',function(){
    var h=document.body.scrollHeight-window.innerHeight;
    if(h<=0)return;
    var pct=Math.round((window.scrollY/h)*100);
    if(pct>maxScroll){
      maxScroll=pct;
      if(maxScroll>=25&&maxScroll%25===0){send({event:'scroll_depth',depth:maxScroll});}
    }
  },{passive:true});
  document.addEventListener('click',function(ev){
    var el=ev.target.closest('a[href*="kontakt"], .cta-primary, .fab-option, .sticky-btn, [href^="tel:"], [href^="mailto:"], [href*="wa.me"]');
    if(!el)return;
    var href=el.getAttribute('href')||'';
    var t='other';
    if(href.indexOf('tel:')===0)t='phone';
    else if(href.indexOf('wa.me')!==-1||href.indexOf('whatsapp')!==-1)t='whatsapp';
    else if(href.indexOf('kontakt')!==-1)t='contact';
    else if(href.indexOf('mailto:')===0)t='email';
    send({event:'cta_click',ctaType:t,element:(el.tagName||'')+' '+(el.className||href)});
  });
  document.addEventListener('mouseleave',function(e){
    if(e.clientY<0){send({event:'exit_intent',timeOnSite:Math.round((Date.now()-startTime)/1000)});}
  });
  if(window.flAB){send({event:'ab_variant_shown',variant:window.flAB.variant});}
})();
</script>
</head>
<body>
    <a href="#main" class="skip-link">Zum Inhalt springen</a>
    
    <header class="header header--transparent" role="banner" id="header">
        <div class="header__container">
            <a href="index.php" class="header__logo" aria-label="Zimmerei Clausen - Zur Startseite">
                Zimmerei Clausen
            </a>
            
            <nav class="header__nav" aria-label="Hauptnavigation">
                <ul class="header__nav-list">
                    <li><a href="index.php" class="header__nav-link <?= $currentPage === 'index' ? 'header__nav-link--active' : '' ?>">Startseite</a></li>
                    <li><a href="leistungen.php" class="header__nav-link <?= $currentPage === 'leistungen' ? 'header__nav-link--active' : '' ?>">Leistungen</a></li>
                    <li><a href="referenzen.php" class="header__nav-link <?= $currentPage === 'referenzen' ? 'header__nav-link--active' : '' ?>">Referenzen</a></li>
                    <li><a href="ueber-uns.php" class="header__nav-link <?= $currentPage === 'ueber-uns' ? 'header__nav-link--active' : '' ?>">Über uns</a></li>
                    <li><a href="kontakt.php" class="header__nav-link <?= $currentPage === 'kontakt' ? 'header__nav-link--active' : '' ?>">Kontakt</a></li>
                </ul>
            </nav>
            
            <a href="kontakt.php" class="header__cta">Angebot anfordern</a>
            
            <button class="header__hamburger" aria-label="Menü öffnen" aria-expanded="false" aria-controls="mobile-menu">
                <span class="header__hamburger-icon">
                    <span class="header__hamburger-line"></span>
                    <span class="header__hamburger-line"></span>
                    <span class="header__hamburger-line"></span>
                </span>
                <span class="sr-only">Menü</span>
            </button>
        </div>
    </header>
    
    <div class="overlay" id="overlay" aria-hidden="true"></div>
    
    <nav class="mobile-menu" id="mobile-menu" aria-label="Mobile Navigation">
        <div class="mobile-menu__nav">
            <ul class="mobile-menu__list">
                <li class="mobile-menu__item">
                    <a href="index.php" class="mobile-menu__link <?= $currentPage === 'index' ? 'mobile-menu__link--active' : '' ?>">Startseite</a>
                </li>
                <li class="mobile-menu__item">
                    <a href="leistungen.php" class="mobile-menu__link <?= $currentPage === 'leistungen' ? 'mobile-menu__link--active' : '' ?>">Leistungen</a>
                </li>
                <li class="mobile-menu__item">
                    <a href="referenzen.php" class="mobile-menu__link <?= $currentPage === 'referenzen' ? 'mobile-menu__link--active' : '' ?>">Referenzen</a>
                </li>
                <li class="mobile-menu__item">
                    <a href="ueber-uns.php" class="mobile-menu__link <?= $currentPage === 'ueber-uns' ? 'mobile-menu__link--active' : '' ?>">Über uns</a>
                </li>
                <li class="mobile-menu__item">
                    <a href="kontakt.php" class="mobile-menu__link <?= $currentPage === 'kontakt' ? 'mobile-menu__link--active' : '' ?>">Kontakt</a>
                </li>
            </ul>
            <div class="mobile-menu__cta">
                <a href="kontakt.php" class="mobile-menu__cta-link">Angebot anfordern</a>
            </div>
        </div>
    </nav>
    
    <script>
    (function() {
        const hamburger = document.getElementById('header').querySelector('.header__hamburger');
        const mobileMenu = document.getElementById('mobile-menu');
        const overlay = document.getElementById('overlay');
        const header = document.getElementById('header');
        const body = document.body;
        
        // Mobile Menu Toggle
        function toggleMenu() {
            const isOpen = hamburger.getAttribute('aria-expanded') === 'true';
            
            if (isOpen) {
                closeMenu();
            } else {
                openMenu();
            }
        }
        
        function openMenu() {
            hamburger.setAttribute('aria-expanded', 'true');
            hamburger.setAttribute('aria-label', 'Menü schließen');
            mobileMenu.classList.add('is-open');
            overlay.classList.add('is-open');
            overlay.setAttribute('aria-hidden', 'false');
            body.classList.add('menu-open');
        }
        
        function closeMenu() {
            hamburger.setAttribute('aria-expanded', 'false');
            hamburger.setAttribute('aria-label', 'Menü öffnen');
            mobileMenu.classList