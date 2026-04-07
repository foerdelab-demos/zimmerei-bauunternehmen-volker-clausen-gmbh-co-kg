<?php $currentPage = 'index'; require 'includes/header.php'; ?>

<?php
// Variablen für die Seite
$companyName = "Zimmerei & Bauunternehmen Volker Clausen";
$phone = "0461 16779780";
$address = "Bregenberg 8, 24976 Handewitt";
$email = "info@v-clausen.de";
?>

<!-- A/B Testing Hero -->
<div id="hero-a" class="hero-variant" data-variant="a">
    <section class="hero hero--full animate-on-scroll fade-in-up">
        <div class="hero__background">
            <div class="img-hover-container">
                <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Moderne Zimmerei - Holzbau und Dachkonstruktionen von <?php echo htmlspecialchars($companyName); ?>" width="1920" height="1080" loading="eager" fetchpriority="high"o=format&fit=crop&w=1920&q=80" 
                     alt="Zimmerei Clausen Handewitt - Erfahrene Zimmerleute bei der Holzbearbeitung in Schleswig-Holstein"
                     width="1920" height="1080" loading="eager" fetchpriority="high">tchpriority="high" class="hero-image">
            </div>
            <div class="hero__overlay"></div>
        </div>
        <div class="container">
            <div class="hero__content">
                <div class="hero__text">
                    <h1 class="hero-title">Hier wächst Ihr Zuhause. Solide. Seit Jahrzehnten.</h1>
                    <p class="hero-subtitle">Komplette Bauvorhaben aus einer Hand: Zimmerei und Maurerarbeiten unter einem Dach. Spezialisiert auf energetische Sanierung mit Holzfaser-Einblasdämmung. Wir bauen in Handewitt und der Region Schleswig-Flensburg solide und termingerecht.</p>
                    <div class="hero__actions">
                        <a href="tel:+49461167779780" class="btn btn-primary hero-cta">
                            <svg class="icon" aria-hidden="true">
                                <use href="#icon-phone"></use>
                            </svg>
                            Jetzt anrufen: 0461 16779780
                        </a>
                        <a href="kontakt.php" class="btn btn-secondary">Kostenlos beraten lassen</a>
                    </div>
                </div>
                <div class="hero__trust">
                    <div class="trust-badge">
                        <span class="trust-text">Mitglied Zimmerer-Innung SH</span>
                    </div>
                    <div class="trust-badge">
                        <span class="trust-text">Seit über 25 Jahren in Handewitt</span>
                    </div>
                </div>
                    <div class="trust-badge">
                        <svg class="trust-badge__icon" aria-hidden="true">
                            <use href="#icon-shield"></use>
                        </svg>
                        <span>Mitglied der Zimmerer-Innung SH</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div id="hero-b" class="hero-variant" data-variant="b" style="display:none">
    <section class="hero hero--split animate-on-scroll fade-in-up">
        <div class="container">
            <div class="hero__grid">
                <div class="hero__content">
                    <h1 class="hero-title">Zimmerei + Maurerarbeiten aus einer Hand. Ohne Subunternehmer-Chaos.</h1>
                    <p class="hero-subtitle">Als einziger Betrieb in der Region bieten wir beide Gewerke selbst an. Das spart Zeit, Geld und Nerven bei Ihrem Bauprojekt.</p>
                    <div class="competence-matrix">
                        <div class="competence-item">
                            <svg class="competence-icon" aria-hidden="true">
                                <use href="#icon-hammer"></use>
                            </svg>
                            <span>Zimmerei</span>
                        </div>
                        <div class="competence-item">
                            <svg class="competence-icon" aria-hidden="true">
                                <use href="#icon-brick"></use>
                            </svg>
                            <span>Maurerarbeiten</span>
                        </div>
                        <div class="competence-item">
                            <svg class="competence-icon" aria-hidden="true">
                                <use href="#icon-leaf"></use>
                            </svg>
                            <span>Holzfaser-Dämmung</span>
                        </div>
                    </div>
                    <div class="hero__actions">
                        <a href="tel:+49461167779780" class="btn btn-primary hero-cta">
                            Projekt besprechen: 0461 16779780
                        </a>
                        <a href="leistungen.php" class="btn btn-secondary">Alle Leistungen ansehen</a>
                    </div>
                </div>
                <div class="hero__timeline">
                    <h3>Ihr Projekt in 4 Schritten</h3>
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-number">1</div>
                            <div class="timeline-content">
                                <h4>Beratung vor Ort</h4>
                                <p>Kostenlose Besichtigung und ehrliche Einschätzung</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-number">2</div>
                            <div class="timeline-content">
                                <h4>Planung & Angebot</h4>
                                <p>Festpreise ohne versteckte Kosten</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-number">3</div>
                            <div class="timeline-content">
                                <h4>Ausführung</h4>
                                <p>Alles aus einer Hand - ohne Koordinations-Chaos</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-number">4</div>
                            <div class="timeline-content">
                                <h4>Übergabe</h4>
                                <p>Garantie und persönlicher Service auch danach</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<main id="main">
    <!-- Services Section -->
    <section class="services section animate-on-scroll fade-in-up">
        <div class="container">
            <div class="section__header">
                <h2 class="section__title">Alles aus einer Hand</h2>
                <p class="section__subtitle">Als erfahrener Zimmereibetrieb mit eigenen Maurern bieten wir Ihnen Komplettlösungen für Ihr Bauprojekt. Vom Fundament bis zum fertigen Dach arbeiten unsere Fachkräfte Hand in Hand.</p>
            </div>
            <div class="services__grid stagger-container">
                <div class="services__content">
                    <div class="services__list">
                        <div class="service-item animate-on-scroll fade-in-up stagger-1">
                            <svg class="service-item__icon" aria-hidden="true">
                                <use href="#icon-hammer"></use>
                            </svg>
                            <div class="service-item__content">
                                <h3>Zimmerei & Dachstühle</h3>
                                <p>Traditionelle Holzverbindungen und moderne Konstruktionen für langlebige Dachstühle</p>
                            </div>
                        </div>
                        <div class="service-item animate-on-scroll fade-in-up stagger-2">
                            <svg class="service-item__icon" aria-hidden="true">
                                <use href="#icon-brick"></use>
                            </svg>
                            <div class="service-item__content">
                                <h3>Maurer- und Betonarbeiten</h3>
                                <p>Solide Fundamente und Mauerwerk - die Basis für Ihr stabiles Bauwerk</p>
                            </div>
                        </div>
                        <div class="service-item animate-on-scroll fade-in-up stagger-3">
                            <svg class="service-item__icon" aria-hidden="true">
                                <use href="#icon-leaf"></use>
                            </svg>
                            <div class="service-item__content">
                                <h3>Energetische Sanierung</h3>
                                <p>Spezialist für Holzfasereinblasdämmung - natürlich dämmen und Heizkosten sparen</p>
                            </div>
                        </div>
                        <div class="service-item animate-on-scroll fade-in-up stagger-4">
                            <svg class="service-item__icon" aria-hidden="true">
                                <use href="#icon-building"></use>
                            </svg>
                            <div class="service-item__content">
                                <h3>Gewerbe- und Hallenbau</h3>
                                <p>Große Projekte für Industrie und Landwirtschaft - auch in Holzbauweise</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services__image animate-on-scroll fade-in-left">
                    <div class="img-hover-container">
                        <img src="https://images.unsplash.com/photo-1632778149955-e80f8ceca2e8?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Holzrahmenkonstruktion im Bau - Komplettlösungen von der Zimmerei Clausen"
                             width="800" height="600" loading="lazy" class="services-image">
                    </div>
                </div>
            </div>
            <div class="services__trust">
                <div class="trust-banner">
                    <svg class="trust-icon" aria-hidden="true">
                        <use href="#icon-tools"></use>
                    </svg>
                    <span>Zimmerei + Maurerarbeiten = Kein Gewerke-Chaos</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Regional Trust Banner -->
    <section class="regional-trust section section--accent animate-on-scroll fade-in-up">
        <div class="container">
            <div class="regional-trust__content">
                <div class="regional-trust__text">
                    <h2>Seit Jahrzehnten vor Ort</h2>
                    <p>In Handewitt und ganz Schleswig-Holstein kennt man uns. Ihre Nachbarn können Ihnen von unserer Arbeit erzählen.</p>
                    <div class="regional-stats">
                        <div class="stat-item">
                            <span class="stat-number count-up" data-target="25">0</span>
                            <span class="stat-label">Jahre Erfahrung</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number count-up" data-target="500">0</span>
                            <span class="stat-label">Projekte realisiert</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number count-up" data-target="50">0</span>
                            <span class="stat-label">km Einzugsgebiet</span>
                        </div>
                    </div>
                </div>
                <div class="regional-trust__map">
                    <div class="map-container">
                        <div class="map-pin map-pin--handewitt" data-tooltip="Handewitt - Unser Standort">
                            <svg class="pin-icon" aria-hidden="true">
                                <use href="#icon-map-pin"></use>
                            </svg>
                        </div>
                        <div class="map-pin map-pin--flensburg" data-tooltip="Projekt in Flensburg">
                            <svg class="pin-icon" aria-hidden="true">
                                <use href="#icon-home"></use>
                            </svg>
                        </div>
                        <div class="map-pin map-pin--schleswig" data-tooltip="Projekt in Schleswig">
                            <svg class="pin-icon" aria-hidden="true">
                                <use href="#icon-home"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features section animate-on-scroll fade-in-up">
        <div class="container">
            <div class="features__grid">
                <div class="features__image animate-on-scroll fade-in-right">
                    <div class="img-hover-container">
                        <img src="https://images.unsplash.com/photo-1621905252507-b35492cc74b4?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" 
                             alt="Präzise Handwerksarbeit - Norddeutsche Tradition bei Zimmerei Clausen"
                             width="600" height="400" loading="lazy" class="features-image">
                    </div>
                </div>
                <div class="features__content">
                    <div class="section__header">
                        <h2 class="section__title">Warum Clausen wählen?</h2>
                        <p class="section__subtitle">Seit Jahren stehen wir für zuverlässige Handwerksarbeit in Schleswig-Holstein. Unsere Kunden schätzen die persönliche Betreuung und die Kompetenz bei komplexen Bauprojekten.</p>
                    </div>
                    <div class="features__list stagger-container">
                        <div class="feature-item animate-on-scroll fade-in-left stagger-1">
                            <div class="feature-item__icon">
                                <svg aria-hidden="true">
                                    <use href="#icon-check-circle"></use>
                                </svg>
                            </div>
                            <div class="feature-item__content">
                                <h3>Zimmerei UND Maurerarbeiten</h3>
                                <p>Als einziger Betrieb in der Region beherrschen wir beide Gewerke perfekt</p>
                            </div>
                        </div>
                        <div class="feature-item animate-on-scroll fade-in-left stagger-2">
                            <div class="feature-item__icon">
                                <svg aria-hidden="true">
                                    <use href="#icon-leaf"></use>
                                </svg>
                            </div>
                            <div class="feature-item__content">
                                <h3>Spezialist für Holzfasereinblasdämmung</h3>
                                <p>Natürliche Dämmung mit bester Wärmedämmung und Schallschutz</p>
                            </div>
                        </div>
                        <div class="feature-item animate-on-scroll fade-in-left stagger-3">
                            <div class="feature-item__icon">
                                <svg aria-hidden="true">
                                    <use href="#icon-map-pin"></use>
                                </svg>
                            </div>
                            <div class="feature-item__content">
                                <h3>Lokaler Betrieb aus Handewitt</h3>
                                <p>Kurze Wege, schnelle Reaktion - auch bei Sturmschäden oder Notfällen</p>
                            </div>
                        </div>
                        <div class="feature-item animate-on-scroll fade-in-left stagger-4">
                            <div class="feature-item__icon">
                                <svg aria-hidden="true">
                                    <use href="#icon-tools"></use>
                                </svg>
                            </div>
                            <div class="feature-item__content">
                                <h3>Komplettlösungen ohne Subunternehmer</h3>
                                <p>Ein Ansprechpartner, eine Rechnung - so einfach kann Bauen sein</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Preview Section -->
    <section class="process section section--light animate-on-scroll fade-in-up">
        <div class="container">
            <div class="section__header">
                <h2 class="section__title">So läuft Ihr Projekt ab</h2>
                <p class="section__subtitle">Transparente Abläufe von der ersten Idee bis zur Schlüsselübergabe</p>
            </div>
            <div class="process__grid stagger-container">
                <div class="process-step animate-on-scroll fade-in-up stagger-1">
                    <div class="process-step__number">1</div>
                    <div class="process-step__content">
                        <h3>Beratung vor Ort</h3>
                        <p>Kostenlose Besichtigung und ehrliche Einschätzung Ihres Projekts. Wir nehmen uns Zeit für Ihre Fragen.</p>
                        <ul>
                            <li>Vor-Ort-Termin innerhalb von 48h</li>
                            <li>Machbarkeitsanalyse</li>
                            <li>Erste Kosteneinschätzung</li>
                        </ul>
                    </div>
                </div>
                <div class="process-step animate-on-scroll fade-in-up stagger-2">
                    <div class="process-step__number">2</div>
                    <div class="process-step__content">
                        <h3>Planung & Angebot</h3>
                        <p>Detaillierte Planung und transparentes Angebot mit Festpreisen - norddeutsch ehrlich ohne versteckte Kosten.</p>
                        <ul>
                            <li>Technische Zeichnungen</li>
                            <li>Materialauswahl</li>
                            <li>Festpreis-Angebot</li>
                        </ul>
                    </div>
                </div>
                <div class="process-step animate-on-scroll fade-in-up stagger-3">
                    <div class="process-step__number">3</div>
                    <div class="process-step__content">
                        <h3>Fachgerechte Ausführung</h3>
                        <p>Unser eingespieltes Team arbeitet Hand in Hand. Zimmerei und Maurerarbeiten perfekt koordiniert.</p>
                        <ul>
                            <li>Termingerechte Ausführung</li>
                            <li>Regelmäßige Updates</li>
                            <li>Qualitätskontrolle</li>
                        </ul>
                    </div>
                </div>
                <div class="process-step animate-on-scroll fade-in-up stagger-4">
                    <div class="process-step__number">4</div>
                    <div class="process-step__content">
                        <h3>Übergabe & Service</h3>
                        <p>Gründliche Abnahme mit Ihnen zusammen. Garantie und persönlicher Service auch nach Projektende.</p>
                        <ul>
                            <li>Ausführliche Dokumentation</li>
                            <li>Garantieleistungen</li>
                            <li>Nachbetreuung</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta section section--primary animate-on-scroll fade-in-up">
        <div class="cta-bg"></div>
        <div class="container">
            <div class="cta__content">
                <h2 class="cta__title">Ihr Projekt besprechen?</h2>
                <p class="cta__subtitle">Rufen Sie an unter 0461 16779780 oder senden Sie uns eine Nachricht. Wir beraten Sie gerne zu Ihrem Bauvorhaben.</p>
                <div class="cta__actions">
                    <a href="tel:+49461167779780" class="btn btn-white">
                        <svg class="icon" aria-hidden="true">
                            <use href="#icon-phone"></use>
                        </svg>
                        Sofort anrufen
                    </a>
                    <a href="kontakt.php" class="btn btn-outline-white">Kontaktformular</a>
                </div>
                <div class="cta__trust">
                    <div class="trust-items">
                        <div class="trust-item">
                            <svg class="trust-icon" aria-hidden="true">
                                <use href="#icon-clock"></use>
                            </svg>
                            <span>Auch samstags und bei Sturmschäden erreichbar</span>
                        </div>
                        <div class="trust-item">
                            <svg class="trust-icon" aria-hidden="true">
                                <use href="#icon-euro"></use>
                            </svg>
                            <span>Festpreise ohne versteckte Kosten</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Local Trust Footer Banner -->
    <section class="local-trust section section--dark animate-on-scroll fade-in-up">
        <div class="container">
            <div class="local-trust__content">
                <div class="local-trust__text">
                    <h3>Seit Jahrzehnten in Handewitt - Ihre Nachbarn kennen uns</h3>
                    <p>Fragen Sie in der Nachbarschaft nach uns. Unsere Referenzen stehen überall in Schleswig-Holstein.</p>
                </div>
                <div class="local-trust__contact">
                    <p><strong><?php echo $companyName; ?></strong></p>
                    <p><?php echo $address; ?></p>
                    <p>Telefon: <a href="tel:+49461167779780"><?php echo $phone; ?></a></p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require 'includes/footer.php'; ?>