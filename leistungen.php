<?php 
$currentPage = 'leistungen'; 
require 'includes/header.php'; 

// Firmendaten
$phone = "0461 16779780";
$email = "info@v-clausen.de";
$address = "Bregenberg 8, 24976 Handewitt";

// Service-Kategorien
$services = [
    'zimmerei' => [
        'title' => 'Zimmerei',
        'content' => 'Als traditioneller Zimmereibetrieb erstellen wir Dachstühle, Fassaden und Holzkonstruktionen aller Art. Vom einfachen Carport bis zur komplexen Hallenkonstruktion.',
        'items' => ['Dachstühle', 'Fassadenbau', 'Carports', 'Gauben', 'Dachfenster', 'Holzterrassen']
    ],
    'energie' => [
        'title' => 'Energetische Sanierung',
        'content' => 'Spezialisiert auf Holzfaser-Einblasdämmung und komplette energetische Sanierung. Als einer der wenigen Betriebe in der Region Schleswig-Flensburg dämmen wir Dächer und Geschossdecken fachgerecht mit diesem nachhaltigen Verfahren.',
        'items' => ['Dämmung von Dächern', 'Geschossdeckendämmung', 'Holzfasereinblasdämmung', 'Dachsanierung', 'Neueindeckung']
    ],
    'holzrahmen' => [
        'title' => 'Holzrahmenbau',
        'content' => 'Moderne Holzrahmenbauweise für Neubauten, Anbauten und Aufstockungen. Da wir als Zimmerei mit eigener Maurerkolonne arbeiten, bekommen Sie wirklich alles aus einer Hand - von der Bodenplatte bis zum First.',
        'items' => ['Neubau', 'Anbau', 'Aufstockungen', 'Garagen', 'Massivbauwände', 'Fundamente und Sohlen']
    ],
    'trocken' => [
        'title' => 'Trockenbau',
        'content' => 'Professioneller Trockenbau für Wände, Decken und Böden. Inklusive Einbau genormter Bauteile und Akustikdecken für optimale Raumgestaltung.',
        'items' => ['Trockenbauwände', 'Decken und Böden', 'Zargen und Mehrzwecktüren', 'Akustikdecken']
    ],
    'gewerbe' => [
        'title' => 'Gewerbe- und Hallenbau',
        'content' => 'Erfahrung im gewerblichen Bereich und landwirtschaftlichen Bauten. Von der Lagerhalle bis zum Stallbau - wir realisieren auch größere Projekte.',
        'items' => ['Gewerbehallen', 'Landwirtschaftliche Bauten', 'Trapezblecheindeckung', 'Außenanlagen']
    ]
];
?>

<main id="main">
    <!-- Hero Section -->
    <section class="hero hero-interior animate-on-scroll fade-in-up">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Unsere Leistungen</h1>
                <p class="hero-subtitle">Als Zimmerei mit eigener Maurerkolonne bieten wir Ihnen das komplette Spektrum des modernen Holzbaus. Spezialisiert auf energetische Sanierung mit Holzfaser-Einblasdämmung.</p>
            </div>
        </div>
    </section>
    <section class="hero hero-services animate-on-scroll fade-in-up">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Unsere Leistungen</h1>
                <p class="hero-subtitle">Zimmerei und Maurerarbeiten unter einem Dach - von der Planung bis zur Schlüsselübergabe</p>
                <div class="hero-trust">
                    <div class="trust-badge">
                        <span class="trust-icon">🏆</span>
                        <span>Mitglied der Zimmerer-Innung SH</span>
                    </div>
                    <div class="trust-badge">
                        <span class="trust-icon">⚡</span>
                        <span>Auch samstags und bei Sturmschäden erreichbar</span>
                    </div>
                </div>
                <a href="kontakt.php" class="btn btn-primary hero-cta">Kostenlos anfragen</a>
            </div>
            <div class="hero-image">
                <div class="img-hover-container">
                    <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=800&h=600&fit=crop&auto=format" 
                         alt="Zimmerei Werkzeuge - Professionelles Handwerk aus Handewitt" 
                         width="800" height="600" loading="eager" fetchpriority="high">
                </div>
            </div>
        </div>
    </section>

    <!-- Komplettlösung Flow -->
    <section class="komplettlosung-flow animate-on-scroll fade-in-up" style="background: var(--color-background); padding: var(--space-16) 0;">
        <div class="container">
            <div class="section-header text-center">
                <h2>Alles aus einer Hand</h2>
                <p class="section-subtitle">Zimmerei + Maurerarbeiten = Kein Gewerke-Chaos</p>
            </div>
            <div class="flow-steps stagger-container">
                <div class="flow-step animate-on-scroll stagger-1">
                    <div class="step-number">1</div>
                    <h3>Zimmerei</h3>
                    <p>Holzkonstruktion, Dachstuhl, Carports</p>
                </div>
                <div class="flow-arrow">→</div>
                <div class="flow-step animate-on-scroll stagger-2">
                    <div class="step-number">2</div>
                    <h3>Maurerarbeiten</h3>
                    <p>Fundamente, Mauern, Putzarbeiten</p>
                </div>
                <div class="flow-arrow">→</div>
                <div class="flow-step animate-on-scroll stagger-3">
                    <div class="step-number">3</div>
                    <h3>Energetik</h3>
                    <p>Dämmung, Sanierung, Einblasverfahren</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Depth Accordion -->
    <section class="service-sections" style="padding: var(--space-16) 0;">
        <div class="container">
            <div class="services-grid">
                
                <!-- Zimmerei -->
                <article class="service-card animate-on-scroll fade-in-up stagger-1" id="zimmerei-service">
                    <div class="service-image">
                        <div class="img-hover-container">
                            <img src="https://images.unsplash.com/photo-1581833971358-2c8b550f87b3?w=800&h=600&fit=crop&auto=format" 
                                 alt="Traditionelle Zimmerei-Verbindungen - Fachmännische Holzarbeiten in Schleswig-Holstein" 
                                 width="800" height="600" loading="lazy">
                        </div>
                    </div>
                    <div class="service-content">
                        <h3><?php echo $services['zimmerei']['title']; ?></h3>
                        <p><?php echo $services['zimmerei']['content']; ?></p>
                        <details class="service-details">
                            <summary>Details anzeigen</summary>
                            <ul class="service-list">
                                <?php foreach($services['zimmerei']['items'] as $item): ?>
                                    <li><?php echo $item; ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <div class="service-materials">
                                <strong>Materialien:</strong> Konstruktionsvollholz, Brettschichtholz, heimische Hölzer
                            </div>
                        </details>
                    </div>
                </article>

                <!-- Energetische Sanierung -->
                <article class="service-card animate-on-scroll fade-in-up stagger-2" id="energie-service">
                    <div class="service-image">
                        <div class="img-hover-container">
                            <img src="https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?w=800&h=600&fit=crop&auto=format" 
                                 alt="Holzfasereinblasdämmung - Energetische Sanierung vom Experten aus Handewitt" 
                                 width="800" height="600" loading="lazy">
                        </div>
                    </div>
                    <div class="service-content">
                        <h3><?php echo $services['energie']['title']; ?></h3>
                        <p><?php echo $services['energie']['content']; ?></p>
                        <details class="service-details">
                            <summary>Details anzeigen</summary>
                            <ul class="service-list">
                                <?php foreach($services['energie']['items'] as $item): ?>
                                    <li><?php echo $item; ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <div class="service-materials">
                                <strong>Spezialisierung:</strong> Holzfasereinblasdämmung - umweltfreundlich und effizient
                            </div>
                        </details>
                    </div>
                </article>

                <!-- Holzrahmenbau -->
                <article class="service-card animate-on-scroll fade-in-up stagger-3" id="holzrahmen-service">
                    <div class="service-image">
                        <div class="img-hover-container">
                            <img src="https://images.unsplash.com/photo-1503387837-b154d5074bd2?w=800&h=600&fit=crop&auto=format" 
                                 alt="Holzrahmenbau Konstruktion - Moderne Bauweise mit traditionellen Methoden" 
                                 width="800" height="600" loading="lazy">
                        </div>
                    </div>
                    <div class="service-content">
                        <h3><?php echo $services['holzrahmen']['title']; ?></h3>
                        <p><?php echo $services['holzrahmen']['content']; ?></p>
                        <details class="service-details">
                            <summary>Details anzeigen</summary>
                            <ul class="service-list">
                                <?php foreach($services['holzrahmen']['items'] as $item): ?>
                                    <li><?php echo $item; ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <div class="service-materials">
                                <strong>Vorteil:</strong> Inklusive Maurerarbeiten - alles aus einer Hand
                            </div>
                        </details>
                    </div>
                </article>

                <!-- Trockenbau -->
                <article class="service-card animate-on-scroll fade-in-up stagger-1" id="trocken-service">
                    <div class="service-image">
                        <div class="img-hover-container">
                            <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=800&h=600&fit=crop&auto=format" 
                                 alt="Professioneller Trockenbau - Innenausbau von der Zimmerei Clausen" 
                                 width="800" height="600" loading="lazy">
                        </div>
                    </div>
                    <div class="service-content">
                        <h3><?php echo $services['trocken']['title']; ?></h3>
                        <p><?php echo $services['trocken']['content']; ?></p>
                        <details class="service-details">
                            <summary>Details anzeigen</summary>
                            <ul class="service-list">
                                <?php foreach($services['trocken']['items'] as $item): ?>
                                    <li><?php echo $item; ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <div class="service-materials">
                                <strong>Qualität:</strong> Nur genormte Bauteile und bewährte Systeme
                            </div>
                        </details>
                    </div>
                </article>

                <!-- Gewerbe- und Hallenbau -->
                <article class="service-card animate-on-scroll fade-in-up stagger-2" id="gewerbe-service">
                    <div class="service-image">
                        <div class="img-hover-container">
                            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=800&h=600&fit=crop&auto=format" 
                                 alt="Gewerbe- und Hallenbau - Gewerbliche Bauprojekte in Schleswig-Holstein" 
                                 width="800" height="600" loading="lazy">
                        </div>
                    </div>
                    <div class="service-content">
                        <h3><?php echo $services['gewerbe']['title']; ?></h3>
                        <p><?php echo $services['gewerbe']['content']; ?></p>
                        <details class="service-details">
                            <summary>Details anzeigen</summary>
                            <ul class="service-list">
                                <?php foreach($services['gewerbe']['items'] as $item): ?>
                                    <li><?php echo $item; ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <div class="service-materials">
                                <strong>Erfahrung:</strong> Auch größere Projekte und landwirtschaftliche Bauten
                            </div>
                        </details>
                    </div>
                </article>

                <!-- Zusätzlicher Service Highlight -->
                <article class="service-card service-highlight animate-on-scroll fade-in-up stagger-3">
                    <div class="service-content highlight-content">
                        <h3>Notfallservice</h3>
                        <p>Sturmschäden und dringende Reparaturen - wir sind auch samstags für Sie da. Schnelle Hilfe aus Handewitt.</p>
                        <div class="highlight-contact">
                            <a href="tel:<?php echo $phone; ?>" class="btn btn-secondary">
                                <span class="btn-icon">📞</span>
                                Jetzt anrufen
                            </a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Lokale Verankerung -->
    <section class="local-trust animate-on-scroll fade-in-up" style="background: var(--color-surface); padding: var(--space-12) 0;">
        <div class="container">
            <div class="local-content">
                <div class="local-text">
                    <h2>Seit Jahrzehnten in Handewitt</h2>
                    <p>Ihre Nachbarn kennen uns. Als lokaler Betrieb stehen wir für Verlässlichkeit und sind auch nach Projektende für Sie da. Kurze Wege, schnelle Hilfe.</p>
                    <div class="local-stats stagger-container">
                        <div class="stat animate-on-scroll stagger-1">
                            <div class="stat-number count-up" data-target="30">0</div>
                            <div class="stat-label">Jahre Erfahrung</div>
                        </div>
                        <div class="stat animate-on-scroll stagger-2">
                            <div class="stat-number count-up" data-target="500">0</div>
                            <div class="stat-label">Projekte</div>
                        </div>
                        <div class="stat animate-on-scroll stagger-3">
                            <div class="stat-number count-up" data-target="24">0</div>
                            <div class="stat-label">Std. Erreichbarkeit</div>
                        </div>
                    </div>
                </div>
                <div class="local-contact">
                    <div class="contact-card">
                        <h3>Direkter Draht zum Chef</h3>
                        <p>Volker Clausen berät Sie persönlich</p>
                        <div class="contact-details">
                            <a href="tel:<?php echo $phone; ?>" class="contact-link">
                                <span class="contact-icon">📱</span>
                                <?php echo $phone; ?>
                            </a>
                            <a href="mailto:<?php echo $email; ?>" class="contact-link">
                                <span class="contact-icon">✉️</span>
                                <?php echo $email; ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Transparente Preise -->
    <section class="pricing-transparency animate-on-scroll fade-in-up" style="padding: var(--space-16) 0;">
        <div class="container">
            <div class="pricing-content text-center">
                <h2>Festpreise ohne versteckte Kosten</h2>
                <p class="section-subtitle">Norddeutsch ehrlich - Sie wissen vorher, was es kostet</p>
                
                <div class="pricing-features">
                    <div class="feature animate-on-scroll stagger-1">
                        <div class="feature-icon">✓</div>
                        <h3>Kostenlose Beratung</h3>
                        <p>Vor Ort Termin ohne Verpflichtung</p>
                    </div>
                    <div class="feature animate-on-scroll stagger-2">
                        <div class="feature-icon">✓</div>
                        <h3>Detaillierter Kostenvoranschlag</h3>
                        <p>Alle Positionen transparent aufgeführt</p>
                    </div>
                    <div class="feature animate-on-scroll stagger-3">
                        <div class="feature-icon">✓</div>
                        <h3>Festpreis-Garantie</h3>
                        <p>Keine Überraschungen während der Bauzeit</p>
                    </div>
                </div>

                <div class="pricing-cta">
                    <a href="kontakt.php" class="btn btn-primary btn-large">
                        Kostenlosen Termin vereinbaren
                    </a>
                    <p class="cta-note">Unverbindliche Beratung • Festpreise • Auch samstags</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Navigation zu anderen Bereichen -->
    <section class="related-pages animate-on-scroll fade-in-up" style="background: var(--color-background); padding: var(--space-12) 0;">
        <div class="container">
            <h2 class="text-center">Mehr über uns erfahren</h2>
            <div class="page-links">
                <a href="referenzen.php" class="page-link animate-on-scroll stagger-1">
                    <div class="link-content">
                        <h3>Referenzen</h3>
                        <p>Schauen Sie sich unsere abgeschlossenen Projekte an</p>
                        <span class="link-arrow">→</span>
                    </div>
                </a>
                <a href="ueber-uns.php" class="page-link animate-on-scroll stagger-2">
                    <div class="link-content">
                        <h3>Über uns</h3>
                        <p>Lernen Sie unser Team und unsere Geschichte kennen</p>
                        <span class="link-arrow">→</span>
                    </div>
                </a>
                <a href="kontakt.php" class="page-link animate-on-scroll stagger-3">
                    <div class="link-content">
                        <h3>Kontakt</h3>
                        <p>Nehmen Sie direkt Kontakt mit uns auf</p>
                        <span class="link-arrow">→</span>
                    </div>
                </a>
            </div>
        </div>
    </section>

</main>

<?php require 'includes/footer.php'; ?>