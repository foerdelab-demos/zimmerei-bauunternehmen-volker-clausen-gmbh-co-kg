<?php 
$currentPage = 'referenzen'; 
require 'includes/header.php'; 

// Referenz-Projekte Daten
$projects = [
    [
        'title' => 'Energetische Komplettsanierung Einfamilienhaus',
        'location' => 'Handewitt',
        'year' => '2023',
        'category' => 'Sanierung',
        'description' => 'Komplette Dachsanierung mit unserer Holzfaser-Einblasdämmung, zwei neue Gauben und energetische Fassadensanierung. Zimmerei- und Maurerarbeiten aus einer Hand - so wie es sich gehört.',
        'details' => ['180 m² Wohnfläche', '8 Wochen Bauzeit', 'Energetisch saniert'],
        'image_before' => 'https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?w=400&h=300&fit=crop',
        'image_after' => 'https://images.unsplash.com/photo-1564013799919-ab600027ffc6?w=400&h=300&fit=crop'
    ],
    [
        'title' => 'Gewerbehalle Neubau',
        'location' => 'Flensburg',
        'year' => '2023',
        'category' => 'Neubau',
        'description' => 'Moderne Gewerbehalle mit 800 m² Grundfläche für einen Handwerksbetrieb aus der Region. Holzrahmenbau mit fachgerechter Dämmung - energieeffizient und kostengünstig im Unterhalt.',
        'details' => ['800 m² Hallenfläche', '12 Wochen Bauzeit', 'Nachhaltiger Holzbau'],
        'image_before' => 'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=400&h=300&fit=crop',
        'image_after' => 'https://images.unsplash.com/photo-1587293852726-70cdb56c2866?w=400&h=300&fit=crop'
    ],
    [
        'title' => 'Dachausbau mit Gauben',
        'location' => 'Schleswig',
        'year' => '2022',
        'category' => 'Ausbau',
        'description' => 'Dachgeschossausbau mit zwei Gauben für zusätzlichen Wohnraum. Inklusive kompletter Dämmung und Innenausbau.',
        'details' => ['60 m² zusätzliche Wohnfläche', '6 Wochen Bauzeit', 'Zwei Schleppgauben'],
        'image_before' => 'https://images.unsplash.com/photo-1570129477492-45c003edd2be?w=400&h=300&fit=crop',
        'image_after' => 'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=400&h=300&fit=crop'
    ],
    [
        'title' => 'Sturmschaden Notfallreparatur',
        'location' => 'Großenwiehe',
        'year' => '2023',
        'category' => 'Reparatur',
        'description' => 'Schnelle Soforthilfe nach Sturmschäden. Provisorische Abdeckung am selben Tag, komplette Dachsanierung binnen 2 Wochen.',
        'details' => ['Notfallreaktion innerhalb 2h', '14 Tage Komplettlösung', 'Versicherungsabwicklung'],
        'image_before' => 'https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=400&h=300&fit=crop',
        'image_after' => 'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?w=400&h=300&fit=crop'
    ],
    [
        'title' => 'Altbau-Sanierung unter Denkmalschutz',
        'location' => 'Handewitt',
        'year' => '2022',
        'category' => 'Sanierung',
        'description' => 'Behutsame Sanierung eines denkmalgeschützten Bauernhauses von 1890. Erhalt der originalen Bausubstanz mit moderner Dämmtechnik.',
        'details' => ['Denkmalschutz-konform', 'Originale Balken erhalten', 'Moderne Dämmung integriert'],
        'image_before' => 'https://images.unsplash.com/photo-1582268611958-ebfd161ef9cf?w=400&h=300&fit=crop',
        'image_after' => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=400&h=300&fit=crop'
    ],
    [
        'title' => 'Carport und Geräteschuppen',
        'location' => 'Jarplund-Weding',
        'year' => '2023',
        'category' => 'Neubau',
        'description' => 'Doppelcarport mit integriertem Geräteschuppen. Robuste Holzkonstruktion passend zur vorhandenen Hausarchitektur.',
        'details' => ['Platz für 2 PKW', 'Integrierter Schuppen', 'Passend zur Hausarchitektur'],
        'image_before' => 'https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?w=400&h=300&fit=crop',
        'image_after' => 'https://images.unsplash.com/photo-1592595896551-12b371d546d5?w=400&h=300&fit=crop'
    ]
];

// Kundenstimmen
$testimonials = [
    [
        'name' => 'Familie Schmidt',
        'location' => 'Handewitt',
        'project' => 'Dachsanierung',
        'rating' => 5,
        'text' => 'Herr Clausen hat unser Dach nach dem Sturm binnen zwei Tagen provisorisch abgedichtet und in drei Wochen komplett erneuert. Alles aus einer Hand - Zimmerei und Maurerarbeiten. Genau wie versprochen, pünktlich und sauber.',
        'year' => '2023'
    ],
    [
        'name' => 'Jörn Petersen',
        'location' => 'Großenwiehe',
        'project' => 'Gewerbehalle',
        'rating' => 5,
        'text' => 'Unsere neue Lagerhalle steht perfekt. Die Holzfasereinblasdämmung hält die Temperaturen konstant - das spart richtig Heizkosten. Faire Preise, keine versteckten Kosten.',
        'year' => '2023'
    ],
    [
        'name' => 'Dr. Martina Weber',
        'location' => 'Schleswig',
        'project' => 'Dachausbau',
        'rating' => 5,
        'text' => 'Der Dachausbau war in 6 Wochen fertig. Zwei schöne Zimmer für die Kinder gewonnen. Das Team arbeitet ordentlich und räumt jeden Tag auf. So kennt man das von norddeutschen Handwerkern.',
        'year' => '2022'
    ]
];

// Lokale Referenzen für Karte
$local_references = [
    ['location' => 'Handewitt', 'count' => 45, 'distance' => '0 km'],
    ['location' => 'Flensburg', 'count' => 23, 'distance' => '8 km'],
    ['location' => 'Schleswig', 'count' => 18, 'distance' => '15 km'],
    ['location' => 'Großenwiehe', 'count' => 12, 'distance' => '12 km'],
    ['location' => 'Jarplund-Weding', 'count' => 8, 'distance' => '5 km']
];
?>

<main id="main" class="main-content">
    <!-- Hero Section -->
    <section class="hero hero--compact animate-on-scroll fade-in-up">
        <div class="hero__content">
            <div class="container">
                <h1 class="hero-title">Referenzen aus der Region</h1>
                <p class="hero-subtitle">Über 100 realisierte Projekte in Handewitt und Umgebung. Von der Notfallreparatur bis zum Gewerbeneubau - sehen Sie selbst, was wir schaffen.</p>
                <div class="hero__trust-badges">
                    <div class="trust-badge">
                        <strong>100+</strong> zufriedene Kunden
                    </div>
                    <div class="trust-badge">
                        Mitglied der <strong>Zimmerer-Innung SH</strong>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projekt-Filter -->
    <section class="project-filter animate-on-scroll fade-in-up">
        <div class="container">
            <div class="filter-tabs">
                <button class="filter-tab active" data-filter="all">Alle Projekte</button>
                <button class="filter-tab" data-filter="sanierung">Sanierung</button>
                <button class="filter-tab" data-filter="neubau">Neubau</button>
                <button class="filter-tab" data-filter="ausbau">Ausbau</button>
                <button class="filter-tab" data-filter="reparatur">Reparatur</button>
            </div>
        </div>
    </section>

    <!-- Projekt-Galerie mit Story Cards -->
    <section class="projects-gallery animate-on-scroll fade-in-up">
        <div class="container">
            <div class="section-header">
                <h2>Unsere Projekte</h2>
                <p>Jedes Projekt erzählt seine eigene Geschichte. Sehen Sie die Entwicklung von der ersten Bestandsaufnahme bis zur Schlüsselübergabe.</p>
            </div>

            <div class="projects-grid stagger-container">
                <?php foreach($projects as $index => $project): ?>
                <article class="project-card stagger-<?php echo ($index % 3) + 1; ?>" data-category="<?php echo strtolower($project['category']); ?>">
                    <div class="project-card__images">
                        <div class="before-after-slider">
                            <div class="image-container">
                                <div class="img-hover-container">
                                    <img loading="lazy" decoding="async" src="<?php echo $project['image_before']; ?>" 
                                         alt="Vorher - <?php echo $project['title']; ?>" 
                                         loading="lazy" decoding="async">
                                </div>
                                <div class="image-label">Vorher</div>
                            </div>
                            <div class="slider-divider"></div>
                            <div class="image-container">
                                <div class="img-hover-container">
                                    <img loading="lazy" decoding="async" src="<?php echo $project['image_after']; ?>" 
                                         alt="Nachher - <?php echo $project['title']; ?>" 
                                         loading="lazy" decoding="async">
                                </div>
                                <div class="image-label">Nachher</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="project-card__content">
                        <div class="project-meta">
                            <span class="category"><?php echo $project['category']; ?></span>
                            <span class="location"><?php echo $project['location']; ?></span>
                            <span class="year"><?php echo $project['year']; ?></span>
                        </div>
                        
                        <h3><?php echo $project['title']; ?></h3>
                        <p><?php echo $project['description']; ?></p>
                        
                        <div class="project-details">
                            <?php foreach($project['details'] as $detail): ?>
                            <span class="detail-tag"><?php echo $detail; ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Lokale Referenzen Karte -->
    <section class="local-references animate-on-scroll fade-in-up">
        <div class="container">
            <div class="section-header">
                <h2>Regional verwurzelt</h2>
                <p>Seit Jahrzehnten in der Region aktiv. Ihre Nachbarn kennen unsere Arbeit.</p>
            </div>

            <div class="references-map">
                <div class="map-visual">
                    <div class="map-center">
                        <div class="company-marker">
                            <div class="marker-icon">🏠</div>
                            <div class="marker-label">Zimmerei Clausen<br>Handewitt</div>
                        </div>
                    </div>
                    
                    <?php foreach($local_references as $index => $ref): ?>
                    <div class="reference-marker marker-<?php echo $index + 1; ?>" data-location="<?php echo $ref['location']; ?>">
                        <div class="marker-count count-up" data-target="<?php echo $ref['count']; ?>"><?php echo $ref['count']; ?></div>
                        <div class="marker-info">
                            <strong><?php echo $ref['location']; ?></strong><br>
                            <?php echo $ref['distance']; ?> entfernt
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                
                <div class="references-stats">
                    <div class="stat-item">
                        <div class="stat-number count-up" data-target="106">106</div>
                        <div class="stat-label">Projekte gesamt</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number count-up" data-target="25">25</div>
                        <div class="stat-label">km Umkreis</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number count-up" data-target="98">98</div>
                        <div class="stat-label">% Weiterempfehlung</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kundenstimmen -->
    <section class="testimonials animate-on-scroll fade-in-up">
        <div class="testimonials__bg" style="background: linear-gradient(120deg, #F5F5DC 0%, #CD853F 30%, #2F4F2F 100%);">
            <div class="container">
                <div class="section-header section-header--light">
                    <h2>Das sagen unsere Kunden</h2>
                    <p>Vertrauen entsteht durch gute Arbeit. Lesen Sie selbst, warum Kunden uns weiterempfehlen.</p>
                </div>

                <div class="testimonials-grid stagger-container">
                    <?php foreach($testimonials as $index => $testimonial): ?>
                    <div class="testimonial-card stagger-<?php echo $index + 1; ?>">
                        <div class="testimonial-rating">
                            <?php for($i = 0; $i < $testimonial['rating']; $i++): ?>
                            <span class="star">★</span>
                            <?php endfor; ?>
                        </div>
                        
                        <blockquote>
                            "<?php echo $testimonial['text']; ?>"
                        </blockquote>
                        
                        <div class="testimonial-author">
                            <div class="author-info">
                                <strong><?php echo $testimonial['name']; ?></strong><br>
                                <span><?php echo $testimonial['location']; ?> • <?php echo $testimonial['project']; ?> (<?php echo $testimonial['year']; ?>)</span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <div class="testimonials-summary">
                    <div class="summary-stats">
                        <div class="summary-stat">
                            <div class="stat-number count-up" data-target="4.9">4.9</div>
                            <div class="stat-label">⭐ Google Bewertung</div>
                        </div>
                        <div class="summary-stat">
                            <div class="stat-number count-up" data-target="98">98</div>
                            <div class="stat-label">% Weiterempfehlung</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projekt-Timeline -->
    <section class="project-timeline animate-on-scroll fade-in-up">
        <div class="container">
            <div class="section-header">
                <h2>Unser Vorgehen</h2>
                <p>Transparenz von Anfang an. So läuft ein Projekt bei uns ab:</p>
            </div>

            <div class="timeline">
                <div class="timeline-item stagger-1">
                    <div class="timeline-marker">1</div>
                    <div class="timeline-content">
                        <h3>Kostenlose Beratung vor Ort</h3>
                        <p>Bestandsaufnahme, Beratung und Festpreis-Angebot binnen 48 Stunden.</p>
                    </div>
                </div>

                <div class="timeline-item stagger-2">
                    <div class="timeline-marker">2</div>
                    <div class="timeline-content">
                        <h3>Detailplanung & Termine</h3>
                        <p>Gemeinsame Planung aller Gewerke und verbindliche Terminzusage.</p>
                    </div>
                </div>

                <div class="timeline-item stagger-3">
                    <div class="timeline-content">
                        <h3>Zuverlässige Ausführung</h3>
                        <p>Zimmerei und Maurerarbeiten aus einer Hand. Täglich aufgeräumte Baustelle.</p>
                    </div>
                    <div class="timeline-marker">3</div>
                </div>

                <div class="timeline-item stagger-4">
                    <div class="timeline-content">
                        <h3>Abnahme & Gewährleistung</h3>
                        <p>Gemeinsame Endabnahme und 5 Jahre Gewährleistung auf alle Arbeiten.</p>
                    </div>
                    <div class="timeline-marker">4</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust-Elemente -->
    <section class="trust-elements animate-on-scroll fade-in-up">
        <div class="container">
            <div class="trust-grid">
                <div class="trust-item stagger-1">
                    <div class="trust-icon">🏆</div>
                    <h3>Zimmerei + Maurerarbeiten</h3>
                    <p>Kein Gewerke-Chaos - alles aus einer Hand</p>
                </div>
                
                <div class="trust-item stagger-2">
                    <div class="trust-icon">⚡</div>
                    <h3>Notfall-Bereitschaft</h3>
                    <p>Auch samstags und bei Sturmschäden erreichbar</p>
                </div>
                
                <div class="trust-item stagger-3">
                    <div class="trust-icon">💰</div>
                    <h3>Transparente Preise</h3>
                    <p>Festpreise ohne versteckte Kosten - norddeutsch ehrlich</p>
                </div>
                
                <div class="trust-item stagger-4">
                    <div class="trust-icon">🏠</div>
                    <h3>Lokal verwurzelt</h3>
                    <p>Seit Jahrzehnten in Handewitt - Ihre Nachbarn kennen uns</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section cta-section--primary animate-on-scroll fade-in-up">
        <div class="container">
            <div class="cta-content">
                <h2>Ihr Projekt wartet auf uns</h2>
                <p>Kostenlose Beratung vor Ort. Festpreis-Angebot binnen 48 Stunden.</p>
                <div class="cta-buttons">
                    <a href="kontakt.php" class="btn btn-secondary btn-large hero-cta">Kostenlose Beratung anfragen</a>
                    <a href="tel:046116779780" class="btn btn-outline btn-large">
                        <span class="btn-icon">📞</span>
                        0461 16779780
                    </a>
                </div>
                <div class="cta-trust">
                    <p><strong>Festpreise ohne versteckte Kosten</strong> - Norddeutsch ehrlich</p>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
// Filter-Funktionalität
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-tab');
    const projectCards = document.querySelectorAll('.project-card');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.dataset.filter;
            
            // Active state
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            // Filter projects
            projectCards.forEach(card => {
                if (filter === 'all' || card.dataset.category === filter) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
    
    // Lokale Referenzen Marker Interaktion
    const referenceMarkers = document.querySelectorAll('.reference-marker');
    referenceMarkers.forEach(marker => {
        marker.addEventListener('click', function() {
            const location = this.dataset.location;
            alert(`${location}: Hier haben wir bereits viele Projekte erfolgreich realisiert.`);
        });
    });
});
</script>

<?php require 'includes/footer.php'; ?>