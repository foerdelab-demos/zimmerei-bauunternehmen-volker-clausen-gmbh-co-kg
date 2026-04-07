<?php
// includes/components/gallery.php - Masonry Galerie für Handwerk-Referenzen
?>

<section class="gallery-section" id="referenzen-galerie">
    <div class="container">
        <header class="gallery-header">
            <h2 class="gallery-title">Unsere Handwerksarbeit im Detail</h2>
            <p class="gallery-subtitle">Projekte aus Schleswig-Holstein - Von der Sanierung bis zum Neubau</p>
        </header>

        <div class="gallery-filters">
            <button class="filter-btn filter-btn--active" data-filter="all">Alle Arbeiten</button>
            <button class="filter-btn" data-filter="zimmerei">Zimmerei</button>
            <button class="filter-btn" data-filter="energetisch">Energetische Sanierung</button>
            <button class="filter-btn" data-filter="holzrahmenbau">Holzrahmenbau</button>
            <button class="filter-btn" data-filter="gewerbe">Gewerbebau</button>
        </div>

        <div class="gallery gallery--masonry" id="gallery-masonry">
            <?php 
            $galleryImages = [
                [
                    'id' => 'ref-01',
                    'category' => 'zimmerei',
                    'title' => 'Dachstuhl-Sanierung Einfamilienhaus',
                    'location' => 'Handewitt',
                    'year' => '2023',
                    'description' => 'Komplette Dachsanierung mit Holzfasereinblasdämmung',
                    'unsplash' => 'wooden-roof-construction-traditional-german-carpentry',
                    'alt' => 'Neuer Dachstuhl aus regionalem Holz - Zimmerei-Arbeiten in Handewitt'
                ],
                [
                    'id' => 'ref-02', 
                    'category' => 'energetisch',
                    'title' => 'Energetische Komplettsanierung',
                    'location' => 'Flensburg',
                    'year' => '2023',
                    'description' => 'Holzfaserdämmung und neue Fenster für optimale Energiewerte',
                    'unsplash' => 'house-insulation-renovation-energy-efficiency',
                    'alt' => 'Energetische Sanierung mit Holzfaserdämmung in Flensburg'
                ],
                [
                    'id' => 'ref-03',
                    'category' => 'holzrahmenbau', 
                    'title' => 'Moderner Holzrahmenbau-Anbau',
                    'location' => 'Schleswig',
                    'year' => '2022',
                    'description' => 'Anbau in Holzrahmenbauweise mit großen Glasflächen',
                    'unsplash' => 'timber-frame-extension-modern-design',
                    'alt' => 'Holzrahmenbau-Anbau in moderner Optik - Schleswig'
                ],
                [
                    'id' => 'ref-04',
                    'category' => 'gewerbe',
                    'title' => 'Gewerbehalle Landwirtschaft',
                    'location' => 'Großenwiehe', 
                    'year' => '2023',
                    'description' => 'Moderne Halle in Holzkonstruktion für landwirtschaftlichen Betrieb',
                    'unsplash' => 'agricultural-hall-timber-construction',
                    'alt' => 'Gewerbehalle in Holzbauweise - Großenwiehe'
                ],
                [
                    'id' => 'ref-05',
                    'category' => 'zimmerei',
                    'title' => 'Traditionelle Fachwerkrestaurierung',
                    'location' => 'Husby',
                    'year' => '2022', 
                    'description' => 'Behutsame Sanierung eines denkmalgeschützten Fachwerkhauses',
                    'unsplash' => 'traditional-half-timbered-house-restoration',
                    'alt' => 'Fachwerkrestaurierung mit traditionellen Methoden - Husby'
                ],
                [
                    'id' => 'ref-06',
                    'category' => 'energetisch',
                    'title' => 'Dachgeschoss-Ausbau mit Dämmung',
                    'location' => 'Harrislee',
                    'year' => '2023',
                    'description' => 'Ausbau des Dachgeschosses mit optimaler Wärmedämmung',
                    'unsplash' => 'attic-conversion-insulation-living-space',
                    'alt' => 'Dachgeschoss-Ausbau mit Wärmedämmung - Harrislee'
                ],
                [
                    'id' => 'ref-07',
                    'category' => 'holzrahmenbau',
                    'title' => 'Neubau Einfamilienhaus',
                    'location' => 'Oeversee',
                    'year' => '2022',
                    'description' => 'Kompletter Neubau in nachhaltiger Holzrahmenbauweise',
                    'unsplash' => 'new-house-timber-frame-sustainable',
                    'alt' => 'Neubau Einfamilienhaus in Holzrahmenbauweise - Oeversee'
                ],
                [
                    'id' => 'ref-08',
                    'category' => 'gewerbe',
                    'title' => 'Lagerhalle mit Bürotrakt',
                    'location' => 'Glücksburg',
                    'year' => '2023',
                    'description' => 'Funktionale Gewerbehalle mit integriertem Bürobereich',
                    'unsplash' => 'warehouse-office-commercial-building',
                    'alt' => 'Gewerbehalle mit Bürotrakt - Glücksburg'
                ]
            ];

            foreach ($galleryImages as $image): ?>
                <div class="gallery__item" data-category="<?= $image['category'] ?>" data-lightbox="<?= $image['id'] ?>">
                    <div class="gallery__image-container">
                        <img 
                            src="https://images.unsplash.com/featured/?<?= urlencode($image['unsplash']) ?>&w=400&h=300&fit=crop&auto=format"
                            alt="<?= $image['alt'] ?>"
                            loading="lazy"
                            class="gallery__image"
                            data-full="https://images.unsplash.com/featured/?<?= urlencode($image['unsplash']) ?>&w=1200&h=900&fit=crop&auto=format"
                        />
                        <div class="gallery__placeholder"></div>
                    </div>
                    
                    <div class="gallery__overlay">
                        <div class="gallery__content">
                            <h3 class="gallery__title"><?= $image['title'] ?></h3>
                            <div class="gallery__meta">
                                <span class="gallery__location"><?= $image['location'] ?></span>
                                <span class="gallery__year"><?= $image['year'] ?></span>
                            </div>
                            <p class="gallery__description"><?= $image['description'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Lightbox Modal -->
<div class="lightbox" id="lightbox">
    <div class="lightbox__backdrop"></div>
    <div class="lightbox__container">
        <button class="lightbox__close" aria-label="Lightbox schließen">&times;</button>
        <button class="lightbox__prev" aria-label="Vorheriges Bild">&larr;</button>
        <button class="lightbox__next" aria-label="Nächstes Bild">&rarr;</button>
        
        <div class="lightbox__content">
            <img class="lightbox__image" src="" alt="" />
            <div class="lightbox__info">
                <h3 class="lightbox__title"></h3>
                <div class="lightbox__meta">
                    <span class="lightbox__location"></span>
                    <span class="lightbox__year"></span>
                </div>
                <p class="lightbox__description"></p>
            </div>
        </div>
    </div>
</div>

<style>
/* Gallery Styles */
.gallery-section {
    padding: var(--space-6) 0;
    background: var(--color-background);
}

.gallery-header {
    text-align: center;
    margin-bottom: var(--space-5);
}

.gallery-title {
    font-family: var(--font-headline);
    font-size: var(--text-2xl);
    color: var(--color-primary);
    margin-bottom: var(--space-2);
}

.gallery-subtitle {
    color: var(--color-neutral);
    font-size: var(--text-lg);
    max-width: 600px;
    margin: 0 auto;
}

/* Filter Buttons */
.gallery-filters {
    display: flex;
    justify-content: center;
    gap: var(--space-2);
    margin-bottom: var(--space-5);
    flex-wrap: wrap;
}

.filter-btn {
    padding: var(--space-2) var(--space-3);
    border: 2px solid var(--color-neutral);
    background: transparent;
    color: var(--color-neutral);
    font-weight: 600;
    cursor: pointer;
    transition: all 250ms ease;
    border-radius: 0;
}

.filter-btn:hover,
.filter-btn--active {
    border-color: var(--color-primary);
    background: var(--color-primary);
    color: white;
}

/* Masonry Gallery */
.gallery--masonry {
    columns: 3;
    column-gap: var(--space-3);
    column-fill: balance;
}

.gallery__item {
    break-inside: avoid;
    margin-bottom: var(--space-3);
    background: white;
    border-radius: var(--radius-md);
    overflow: hidden;
    cursor: pointer;
    transition: all 300ms ease;
    position: relative;
    box-shadow: var(--shadow-sm);
}

.gallery__item:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-md);
}

.gallery__image-container {
    position: relative;
    overflow: hidden;
}

.gallery__image {
    width: 100%;
    height: auto;
    display: block;
    transition: transform 300ms ease;
    filter: blur(0);
}

.gallery__image[data-loading="true"] {
    filter: blur(10px);
}

.gallery__placeholder {
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, var(--color-primary), var(--color-accent));
    opacity: 0;
    transition: opacity 300ms ease;
}

.gallery__item:hover .gallery__image {
    transform: scale(1.05);
}

/* Overlay */
.gallery__overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(0,0,0,0.8), transparent 60%);
    opacity: 0;
    transition: opacity 300ms ease;
    display: flex;
    align-items: flex-end;
    padding: var(--space-3);
    color: white;
}

.gallery__item:hover .gallery__overlay {
    opacity: 1;
}

.gallery__content {
    width: 100%;
}

.gallery__title {
    font-size: var(--text-lg);
    font-weight: 700;
    margin-bottom: var(--space-1);
}

.gallery__meta {
    display: flex;
    gap: var(--space-2);
    font-size: var(--text-sm);
    opacity: 0.9;
    margin-bottom: var(--space-1);
}

.gallery__location::before {
    content: "📍 ";
}

.gallery__year::before {
    content: "📅 ";
}

.gallery__description {
    font-size: var(--text-sm);
    opacity: 0.8;
    line-height: 1.4;
}

/* Lightbox */
.lightbox {
    position: fixed;
    inset: 0;
    z-index: 1000;
    opacity: 0;
    visibility: hidden;
    transition: all 300ms ease;
}

.lightbox--active {
    opacity: 1;
    visibility: visible;
}

.lightbox__backdrop {
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.9);
    cursor: pointer;
}

.lightbox__container {
    position: relative;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: var(--space-4);
}

.lightbox__content {
    max-width: 90vw;
    max-height: 90vh;
    background: white;
    border-radius: var(--radius-lg);
    overflow: hidden;
    position: relative;
    display: grid;
    grid-template-rows: 1fr auto;
}

.lightbox__image {
    width: 100%;
    height: auto;
    max-height: 70vh;
    object-fit: cover;
    display: block;
}

.lightbox__info {
    padding: var(--space-4);
}

.lightbox__title {
    font-family: var(--font-headline);
    font-size: var(--text-xl);
    color: var(--color-primary);
    margin-bottom: var(--space-2);
}

.lightbox__meta {
    display: flex;
    gap: var(--space-3);
    margin-bottom: var(--space-2);
    color: var(--color-neutral);
}

.lightbox__description {
    line-height: 1.6;
    color: var(--color-text);
}

/* Navigation Buttons */
.lightbox__close,
.lightbox__prev,
.lightbox__next {
    position: absolute;
    background: rgba(255,255,255,0.9);
    border: none;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    cursor: pointer;
    transition: background 200ms ease;
    z-index: 10;
}

.lightbox__close:hover,
.lightbox__prev:hover,
.lightbox__next:hover {
    background: white;
}

.lightbox__close {
    top: var(--space-4);