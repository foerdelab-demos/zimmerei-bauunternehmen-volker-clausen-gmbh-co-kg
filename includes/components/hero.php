<?php
$heroVariant = $_GET['variant'] ?? 'a';
$heroData = $heroVariants[$heroVariant] ?? $heroVariants['a'];
?>

<section class="hero hero--split" id="hero">
    <div class="hero__content">
        <div class="hero__text">
            <h1 class="hero__title">
                <?php if ($heroVariant === 'a'): ?>
                    Hier wächst Ihr Zuhause. <span class="hero__title-accent">Solide.</span> Seit Jahrzehnten.
                <?php else: ?>
                    Zimmerei + Maurerarbeiten aus einer Hand. <span class="hero__title-accent">Ohne Subunternehmer-Chaos.</span>
                <?php endif; ?>
            </h1>
            
            <p class="hero__subtitle">
                Komplettlösungen vom norddeutschen Handwerksmeister in Handewitt. 
                Von der energetischen Sanierung bis zum Holzrahmenbau - alles aus einer Hand.
            </p>
            
            <div class="hero__ctas">
                <a href="kontakt.php" class="btn btn-primary btn-lg">
                    Kostenlose Beratung
                </a>
                <a href="leistungen.php" class="btn btn-secondary btn-lg">
                    Unsere Leistungen
                </a>
            </div>
            
            <div class="hero__trust">
                <div class="hero__rating">
                    <div class="rating-stars">
                        <span class="star star--filled">★</span>
                        <span class="star star--filled">★</span>
                        <span class="star star--filled">★</span>
                        <span class="star star--filled">★</span>
                        <span class="star star--half">★</span>
                    </div>
                    <span class="rating-text">4,6 von 5 bei 9 Bewertungen</span>
                </div>
                <div class="hero__badge">
                    <span class="badge-text">Mitglied der Zimmerer-Innung SH</span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="hero__image">
        <picture>
            <img 
                src="https://images.unsplash.com/photo-1513475382585-d06e58bcb0e0?q=80&w=1920&h=1080&auto=format&fit=crop"
                alt="Erfahrener Zimmermann bei traditioneller Holzarbeit in norddeutscher Werkstatt - Zimmerei Clausen"
                class="hero__img"
                width="1920"
                height="1080"
                loading="eager"
                fetchpriority="high"
            />
        </picture>
        <div class="hero__image-overlay"></div>
    </div>
    
    <div class="hero__scroll">
        <div class="scroll-indicator">
            <div class="scroll-line"></div>
            <span class="scroll-text">Scrollen</span>
        </div>
    </div>
</section>

<style>
:root {
    --color-primary: #8B4513;
    --color-primary-dark: #734016;
    --color-primary-light: #A0611F;
    --color-secondary: #2F4F2F;
    --color-accent: #CD853F;
    --color-text: #2F2F2F;
    --color-text-muted: #696969;
    --color-background: #F5F5DC;
    --color-surface: #FFFFFF;
    --color-border: #E0E0E0;
    
    --font-headline: 'Roboto Slab', serif;
    --font-body: 'Source Sans Pro', sans-serif;
    
    --text-hero: clamp(3rem, 7vw, 5.5rem);
    --text-lg: clamp(1.1rem, 2.5vw, 1.4rem);
    --text-base: 1rem;
    
    --space-4: 1rem;
    --space-6: 1.5rem;
    --space-8: 2rem;
    --space-12: 3rem;
    --space-16: 4rem;
    
    --radius-md: 8px;
    --radius-lg: 12px;
    --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    --transition-base: 0.3s ease;
}

.hero--split {
    display: grid;
    grid-template-columns: 1fr 1fr;
    min-height: 100svh;
    align-items: center;
    position: relative;
    background: var(--color-background);
    overflow: hidden;
}

.hero__content {
    padding: var(--space-12) var(--space-8);
    z-index: 2;
}

.hero__title {
    font-family: var(--font-headline);
    font-size: var(--text-hero);
    font-weight: 900;
    line-height: 1.1;
    letter-spacing: -0.03em;
    color: var(--color-text);
    margin-bottom: var(--space-6);
    max-width: 15ch;
}

.hero__title-accent {
    color: var(--color-primary);
}

.hero__subtitle {
    font-family: var(--font-body);
    font-size: var(--text-lg);
    font-weight: 400;
    line-height: 1.6;
    color: var(--color-text-muted);
    margin-bottom: var(--space-8);
    max-width: 50ch;
}

.hero__ctas {
    display: flex;
    gap: var(--space-4);
    flex-wrap: wrap;
    margin-bottom: var(--space-8);
}

.btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 44px;
    padding: var(--space-4) var(--space-6);
    font-family: var(--font-body);
    font-weight: 600;
    text-decoration: none;
    border-radius: var(--radius-md);
    transition: all var(--transition-base);
    border: 2px solid transparent;
    cursor: pointer;
}

.btn-primary {
    background: var(--color-primary);
    color: white;
    box-shadow: var(--shadow-lg);
}

.btn-primary:hover {
    background: var(--color-primary-dark);
    transform: translateY(-2px);
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}

.btn-secondary {
    background: transparent;
    color: var(--color-text);
    border-color: var(--color-border);
}

.btn-secondary:hover {
    background: var(--color-surface);
    border-color: var(--color-primary);
    color: var(--color-primary);
    transform: translateY(-1px);
}

.btn-lg {
    padding: var(--space-4) var(--space-8);
    font-size: var(--text-lg);
}

.hero__trust {
    display: flex;
    flex-direction: column;
    gap: var(--space-4);
}

.hero__rating {
    display: flex;
    align-items: center;
    gap: var(--space-4);
}

.rating-stars {
    display: flex;
    gap: 2px;
}

.star {
    color: #FFD700;
    font-size: 1.2rem;
}

.star--half {
    background: linear-gradient(90deg, #FFD700 50%, #E0E0E0 50%);
    background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.rating-text {
    font-size: 0.9rem;
    color: var(--color-text-muted);
    font-weight: 500;
}

.hero__badge {
    font-size: 0.85rem;
    color: var(--color-secondary);
    font-weight: 600;
}

.hero__image {
    position: relative;
    height: 100%;
    overflow: hidden;
}

.hero__img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
}

.hero__image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(47, 79, 47, 0.1) 0%, rgba(139, 69, 19, 0.1) 100%);
}

.hero__scroll {
    position: absolute;
    bottom: var(--space-8);
    left: 50%;
    transform: translateX(-50%);
    z-index: 3;
}

.scroll-indicator {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: var(--space-2);
    color: var(--color-text-muted);
}

.scroll-line {
    width: 1px;
    height: 60px;
    background: currentColor;
    animation: scrollLine 1.5s infinite;
}

.scroll-text {
    font-size: 0.8rem;
    font-weight: 500;
    writing-mode: vertical-lr;
    text-orientation: mixed;
}

@keyframes scrollLine {
    0% {
        transform: scaleY(0);
        transform-origin: top;
    }
    50% {
        transform: scaleY(1);
        transform-origin: top;
    }
    51% {
        transform-origin: bottom;
    }
    100% {
        transform: scaleY(0);
        transform-origin: bottom;
    }
}

@media (max-width: 768px) {
    .hero--split {
        grid-template-columns: 1fr;
        grid-template-rows: auto 1fr;
        min-height: 100svh;
    }
    
    .hero__content {
        padding: var(--space-8) var(--space-6);
        order: 2;
        background: linear-gradient(to bottom, rgba(245, 245, 220, 0.95), rgba(245, 245, 220, 0.9));
    }
    
    .hero__image {
        order: 1;
        height: 40vh;
        min-height: 300px;
    }
    
    .hero__title {
        font-size: clamp(2.5rem, 8vw, 4rem);
        max-width: none;
    }
    
    .hero__ctas {
        flex-direction: column;
        align-items: stretch;
    }
    
    .hero__scroll {
        display: none;
    }
}

@media (prefers-reduced-motion: reduce) {
    .scroll-line {
        animation: none;
    }
    
    .btn {
        transition: none;
    }
    
    .btn:hover {
        transform: none;
    }
}

.btn:focus-visible {
    outline: 2px solid var(--color-primary);
    outline-offset: 2px;
}
</style>