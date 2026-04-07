<?php 
$currentPage = 'ueber-uns'; 
require 'includes/header.php'; 

// Firmendaten
$firmenname = "Zimmerei & Bauunternehmen Volker Clausen GmbH & Co. KG";
$telefon = "0461 16779780";
$adresse = "Bregenberg 8, 24976 Handewitt";
$email = "info@v-clausen.de";

// Team-Mitglieder
$team_bereiche = [
    [
        'titel' => 'Zimmerei & Dachbau',
        'beschreibung' => 'Meisterliche Holzbearbeitung und moderne Dachtechnik',
        'anzahl' => '4 Fachkräfte'
    ],
    [
        'titel' => 'Maurerarbeiten',
        'beschreibung' => 'Fundamente, Mauerwerk und Betonarbeiten',
        'anzahl' => '3 Spezialisten'
    ],
    [
        'titel' => 'Holzfaser-Dämmung',
        'beschreibung' => 'Holzfaser-Einblasdämmung - unser Spezialgebiet seit Jahren',
        'anzahl' => '2 Experten'
    ]
];

// Qualifikationen
$qualifikationen = [
    'Zimmermeister mit über 25 Jahren Erfahrung',
    'Mitglied Zimmerer-Innung Schleswig-Holstein',
    'Spezialist für Holzfaser-Einblasdämmung',
    'Zimmerei mit eigener Maurerkolonne'
];
?>

<main id="main">
    <!-- Hero Section -->
    <section class="hero hero-interior animate-on-scroll fade-in-up">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Zimmerei & Bauunternehmen Volker Clausen</h1>
                <p class="hero-subtitle">Seit über 25 Jahren Ihr Partner für Bauvorhaben in Handewitt und der Region Schleswig-Flensburg. Als Zimmerei mit eigener Maurerkolonne können wir Ihnen echte Komplettlösungen anbieten - von der Bodenplatte bis zum Dachfirst.</p>
                <div class="trust-badges">
                    <span class="badge">
                        <svg class="badge-icon" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                        Mitglied der Zimmerer-Innung SH
                    </span>
                    <span class="badge">
                        <svg class="badge-icon" width="20" height="20" fill="currentColor">
                            <use href="#icon-location"></use>
                        </svg>
                        Lokaler Familienbetrieb
                    </span>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="section bg-surface animate-on-scroll fade-in-up">
        <div class="container">
            <div class="grid grid-lg gap-xl">
                <div class="content">
                    <h2>Tradition trifft moderne Handwerkskunst</h2>
                    <p class="text-lg">Als Zimmerei mit eigener Maurerkolonne stehen wir für das, was im Handwerk zählt: Fachkompetenz, Zuverlässigkeit und ehrliche Arbeit. In unserem Betrieb in Handewitt arbeiten erfahrene Zimmerleute und Maurer Hand in Hand.</p>
                    <p>Das bedeutet für Sie: Keine Abstimmungsprobleme zwischen verschiedenen Gewerken, ein Ansprechpartner für alle Fragen und Termine, die eingehalten werden. So einfach kann Bauen sein.</p>
                    
                    <div class="features-grid">
                        <div class="feature-item animate-on-scroll stagger-1">
                            <div class="feature-icon">
                                <svg width="24" height="24" fill="currentColor">
                                    <use href="#icon-user"></use>
                                </svg>
                            </div>
                            <div>
                                <h3>Persönliche Projektbetreuung</h3>
                                <p>Vom ersten Gespräch bis zur Schlüsselübergabe - ein fester Ansprechpartner</p>
                            </div>
                        </div>
                        
                        <div class="feature-item animate-on-scroll stagger-2">
                            <div class="feature-icon">
                                <svg width="24" height="24" fill="currentColor">
                                    <use href="#icon-tools"></use>
                                </svg>
                            </div>
                            <div>
                                <h3>Alle Gewerke aus einer Hand</h3>
                                <p>Zimmerei + Maurerarbeiten = Kein Gewerke-Chaos</p>
                            </div>
                        </div>
                        
                        <div class="feature-item animate-on-scroll stagger-3">
                            <div class="feature-icon">
                                <svg width="24" height="24" fill="currentColor">
                                    <use href="#icon-home"></use>
                                </svg>
                            </div>
                            <div>
                                <h3>Lokaler Familienbetrieb</h3>
                                <p>Seit Jahrzehnten in Handewitt - Ihre Nachbarn kennen uns</p>
                            </div>
                        </div>
                        
                        <div class="feature-item animate-on-scroll stagger-4">
                            <div class="feature-icon">
                                <svg width="24" height="24" fill="currentColor">
                                    <use href="#icon-clock"></use>
                                </svg>
                            </div>
                            <div>
                                <h3>Jahrelange Erfahrung</h3>
                                <p>Bewährte Techniken kombiniert mit modernen Verfahren</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="img-hover-container animate-on-scroll stagger-2">
                    <img 
                        src="https://images.unsplash.com/photo-1504148455328-c376907d081c?w=800&h=600&fit=crop&crop=center&auto=format&q=80" 
                        alt="Meister Volker Clausen in der Zimmerei-Werkstatt - Tradition und Erfahrung seit Jahrzehnten"
                        width="800" 
                        height="600"
                        loading="lazy"
                        decoding="async"
                        class="about-image"
                    />
                </div>
            </div>
        </div>
    </section>

    <!-- Meister Credentials Section -->
    <section class="section animate-on-scroll fade-in-up">
        <div class="container">
            <div class="text-center mb-xl">
                <h2>Qualifikation und Kompetenz</h2>
                <p class="text-lg">Meisterqualifikation und Fachkompetenz sind die Basis unserer Arbeit</p>
            </div>
            
            <div class="credentials-grid stagger-container">
                <?php foreach($qualifikationen as $index => $qualifikation): ?>
                <div class="credential-card animate-on-scroll stagger-<?php echo $index + 1; ?>">
                    <div class="credential-icon">
                        <svg width="32" height="32" fill="currentColor">
                            <use href="#icon-certificate"></use>
                        </svg>
                    </div>
                    <h3><?php echo $qualifikation; ?></h3>
                </div>
                <?php endforeach; ?>
            </div>
            
            <div class="trust-section animate-on-scroll fade-in-up">
                <div class="grid grid-md gap-lg">
                    <div class="trust-content">
                        <h3>Warum Meisterqualifikation wichtig ist</h3>
                        <p>Der Meistertitel ist mehr als nur ein Zertifikat. Er steht für jahrelange Erfahrung, tiefes Fachwissen und die Berechtigung zur Ausbildung von Nachwuchskräften. Bei uns arbeiten Sie mit Profis, die ihr Handwerk von der Pike auf gelernt haben.</p>
                        <div class="trust-stats">
                            <div class="stat">
                                <span class="count-up" data-target="25">0</span>
                                <span class="stat-label">Jahre Berufserfahrung</span>
                            </div>
                            <div class="stat">
                                <span class="count-up" data-target="150">0</span>
                                <span class="stat-label">Erfolgreiche Projekte</span>
                            </div>
                        </div>
                    </div>
                    <div class="trust-features">
                        <ul>
                            <li>✓ Ausbildungsberechtigung für Lehrlinge</li>
                            <li>✓ Regelmäßige Weiterbildung und Schulungen</li>
                            <li>✓ Mitgliedschaft in der Zimmerer-Innung</li>
                            <li>✓ Sachverständigentätigkeit im Holzbau</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Kompetenz Grid -->
    <section class="section bg-surface animate-on-scroll fade-in-up">
        <div class="container">
            <div class="text-center mb-xl">
                <h2>Unser Team - Fachkompetenz in jedem Bereich</h2>
                <p class="text-lg">Erfahrene Spezialisten für alle Bereiche des modernen Holz- und Massivbaus</p>
            </div>
            
            <div class="team-grid stagger-container">
                <?php foreach($team_bereiche as $index => $bereich): ?>
                <div class="team-card animate-on-scroll stagger-<?php echo $index + 1; ?>">
                    <div class="team-icon">
                        <svg width="48" height="48" fill="currentColor">
                            <use href="#icon-<?php echo $index === 0 ? 'hammer' : ($index === 1 ? 'building' : 'leaf'); ?>"></use>
                        </svg>
                    </div>
                    <h3><?php echo $bereich['titel']; ?></h3>
                    <p><?php echo $bereich['beschreibung']; ?></p>
                    <div class="team-count"><?php echo $bereich['anzahl']; ?></div>
                </div>
                <?php endforeach; ?>
            </div>
            
            <div class="team-philosophy animate-on-scroll fade-in-up">
                <div class="grid grid-md gap-lg">
                    <div>
                        <h3>Gemeinsam stark</h3>
                        <p>Unser Team arbeitet seit Jahren zusammen. Das schafft Vertrauen und Effizienz auf der Baustelle. Jeder kennt die Arbeitsweise des anderen, und das merken Sie an der reibungslosen Abwicklung Ihres Projekts.</p>
                    </div>
                    <div>
                        <h3>Fortbildung ist Pflicht</h3>
                        <p>Neue Materialien, geänderte Bauvorschriften, moderne Techniken - das Bauwesen entwickelt sich ständig weiter. Deshalb investieren wir kontinuierlich in die Weiterbildung unserer Mitarbeiter.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Unser Ansatz Section -->
    <section class="section animate-on-scroll fade-in-up">
        <div class="container">
            <div class="grid grid-lg gap-xl">
                <div class="content">
                    <h2>So arbeiten wir</h2>
                    <p class="text-lg">Persönliche Betreuung, fachliche Kompetenz und faire Preise - das sind die Grundlagen unserer Arbeit. Jedes Projekt wird individuell geplant und mit größter Sorgfalt ausgeführt.</p>
                    
                    <div class="process-steps">
                        <div class="step animate-on-scroll stagger-1">
                            <div class="step-number">1</div>
                            <div class="step-content">
                                <h3>Erstberatung vor Ort</h3>
                                <p>Persönlicher Termin bei Ihnen zu Hause. Wir schauen uns die Gegebenheiten an und beraten Sie ehrlich zu den Möglichkeiten.</p>
                            </div>
                        </div>
                        
                        <div class="step animate-on-scroll stagger-2">
                            <div class="step-number">2</div>
                            <div class="step-content">
                                <h3>Detailliertes Angebot</h3>
                                <p>Transparente Kostenaufstellung ohne versteckte Zusätze. Festpreise ohne versteckte Kosten - Norddeutsch ehrlich.</p>
                            </div>
                        </div>
                        
                        <div class="step animate-on-scroll stagger-3">
                            <div class="step-number">3</div>
                            <div class="step-content">
                                <h3>Professionelle Umsetzung</h3>
                                <p>Pünktlicher Beginn, saubere Arbeitsweise und regelmäßige Abstimmung mit Ihnen über den Fortschritt.</p>
                            </div>
                        </div>
                        
                        <div class="step animate-on-scroll stagger-4">
                            <div class="step-number">4</div>
                            <div class="step-content">
                                <h3>Übergabe und Service</h3>
                                <p>Ordentliche Übergabe mit allen Unterlagen und selbstverständlich auch Service nach Projektabschluss.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="sidebar animate-on-scroll stagger-2">
                    <div class="card">
                        <h3>Kontakt aufnehmen</h3>
                        <p>Haben Sie Fragen zu unserem Team oder unserer Arbeitsweise? Sprechen Sie uns an.</p>
                        
                        <div class="contact-info">
                            <div class="contact-item">
                                <svg width="20" height="20" fill="currentColor">
                                    <use href="#icon-phone"></use>
                                </svg>
                                <a href="tel:<?php echo $telefon; ?>"><?php echo $telefon; ?></a>
                            </div>
                            <div class="contact-item">
                                <svg width="20" height="20" fill="currentColor">
                                    <use href="#icon-envelope"></use>
                                </svg>
                                <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                            </div>
                            <div class="contact-item">
                                <svg width="20" height="20" fill="currentColor">
                                    <use href="#icon-location"></use>
                                </svg>
                                <span><?php echo $adresse; ?></span>
                            </div>
                        </div>
                        
                        <a href="kontakt.php" class="btn btn-primary">Beratungstermin vereinbaren</a>
                    </div>
                    
                    <div class="card">
                        <h3>Unsere Spezialgebiete</h3>
                        <ul class="services-list">
                            <li>Zimmerei & Holzbau</li>
                            <li>Maurerarbeiten & Massivbau</li>
                            <li>Holzfaser-Einblasdämmung</li>
                            <li>Energetische Sanierung</li>
                            <li>Gewerbe- und Hallenbau</li>
                            <li>Dachsanierung</li>
                        </ul>
                        <a href="leistungen.php" class="btn btn-outline">Alle Leistungen ansehen</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section bg-primary text-white animate-on-scroll fade-in-up">
        <div class="container text-center">
            <h2>Lernen Sie uns kennen</h2>
            <p class="text-lg">Ein persönliches Gespräch ist der beste Weg, um herauszufinden, ob wir zusammenpassen. Rufen Sie an oder besuchen Sie uns in Handewitt.</p>
            
            <div class="cta-buttons">
                <a href="tel:<?php echo $telefon; ?>" class="btn btn-white">
                    <svg width="20" height="20" fill="currentColor">
                        <use href="#icon-phone"></use>
                    </svg>
                    Jetzt anrufen
                </a>
                <a href="kontakt.php" class="btn btn-outline-white">Termin vereinbaren</a>
            </div>
            
            <div class="trust-note">
                <p><small>Auch samstags und bei Sturmschäden erreichbar</small></p>
            </div>
        </div>
    </section>
</main>

<?php require 'includes/footer.php'; ?>