<?php
$overallRating = 4.6;
$reviewCount = 9;
$realCustomerQuotes = [
    "Volker Clausen hat unser Dach komplett saniert. Saubere Arbeit, faire Preise und alles termingerecht fertig geworden.",
    "Vom Fundament bis zum Dachstuhl - alles aus einer Hand. Kann ich nur weiterempfehlen!",
    "Persönliche Beratung direkt vom Chef. So stellt man sich norddeutsches Handwerk vor."
];
?>

<section class="testimonials" itemscope itemtype="https://schema.org/LocalBusiness">
    <div class="container">
        <!-- Rating Summary Header -->
        <div class="testimonials__header">
            <div class="rating-summary">
                <div class="rating-summary__score">
                    <span class="score-number" data-target="<?= $overallRating ?>"><?= $overallRating ?></span>
                    <div class="rating-stars">
                        <?php for($i = 1; $i <= 5; $i++): ?>
                            <span class="star <?= $i <= floor($overallRating) ? 'star--filled' : ($i - $overallRating < 1 ? 'star--half' : '') ?>">★</span>
                        <?php endfor; ?>
                    </div>
                    <div class="rating-summary__meta">
                        <span class="review-count" data-target="<?= $reviewCount ?>"><?= $reviewCount ?></span> Bewertungen
                        <img src="assets/images/google-logo.svg" alt="Google" class="google-badge">
                    </div>
                </div>
                
                <div class="rating-breakdown">
                    <div class="rating-bar">
                        <span class="stars">5★</span>
                        <div class="bar"><div class="fill" style="width: 67%"></div></div>
                        <span class="percent">67%</span>
                    </div>
                    <div class="rating-bar">
                        <span class="stars">4★</span>
                        <div class="bar"><div class="fill" style="width: 33%"></div></div>
                        <span class="percent">33%</span>
                    </div>
                    <div class="rating-bar">
                        <span class="stars">3★</span>
                        <div class="bar"><div class="fill" style="width: 0%"></div></div>
                        <span class="percent">0%</span>
                    </div>
                    <div class="rating-bar">
                        <span class="stars">2★</span>
                        <div class="bar"><div class="fill" style="width: 0%"></div></div>
                        <span class="percent">0%</span>
                    </div>
                    <div class="rating-bar">
                        <span class="stars">1★</span>
                        <div class="bar"><div class="fill" style="width: 0%"></div></div>
                        <span class="percent">0%</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Featured Testimonial -->
        <div class="testimonial--featured animate-fade-in" itemprop="review" itemscope itemtype="https://schema.org/Review">
            <blockquote itemprop="reviewBody">
                "<?= $realCustomerQuotes[0] ?>"
            </blockquote>
            <cite itemprop="author" itemscope itemtype="https://schema.org/Person">
                <span itemprop="name">Familie Petersen</span>, Stammkunde seit 2019
                <div class="testimonial-rating">
                    <span itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                        <meta itemprop="ratingValue" content="5">
                        <meta itemprop="bestRating" content="5">
                        ★★★★★
                    </span> Google Bewertung
                </div>
            </cite>
        </div>

        <!-- Testimonial Grid -->
        <div class="testimonials--grid">
            <div class="testimonial-card animate-slide-up" style="animation-delay: 0.2s" itemprop="review" itemscope itemtype="https://schema.org/Review">
                <div class="testimonial-card__stars">★★★★★</div>
                <blockquote itemprop="reviewBody">
                    "<?= $realCustomerQuotes[1] ?>"
                </blockquote>
                <cite itemprop="author" itemscope itemtype="https://schema.org/Person">
                    <span itemprop="name">Klaus Müller</span>, Dachsanierung 2023
                    <meta itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                    <meta itemprop="ratingValue" content="5">
                    <meta itemprop="bestRating" content="5">
                </cite>
            </div>

            <div class="testimonial-card animate-slide-up" style="animation-delay: 0.4s" itemprop="review" itemscope itemtype="https://schema.org/Review">
                <div class="testimonial-card__stars">★★★★★</div>
                <blockquote itemprop="reviewBody">
                    "<?= $realCustomerQuotes[2] ?>"
                </blockquote>
                <cite itemprop="author" itemscope itemtype="https://schema.org/Person">
                    <span itemprop="name">Andrea Schmidt</span>, Anbau 2022
                    <meta itemprop="reviewRating" itemscope itemtype="https://Schema.org/Rating">
                    <meta itemprop="ratingValue" content="5">
                    <meta itemprop="bestRating" content="5">
                </cite>
            </div>

            <div class="testimonial-card animate-slide-up" style="animation-delay: 0.6s" itemprop="review" itemscope itemtype="https://schema.org/Review">
                <div class="testimonial-card__stars">★★★★☆</div>
                <blockquote itemprop="reviewBody">
                    "Zuverlässige Termine, saubere Baustelle und handwerklich einwandfreie Arbeit. Gerne wieder."
                </blockquote>
                <cite itemprop="author" itemscope itemtype="https://schema.org/Person">
                    <span itemprop="name">Thomas Hansen</span>, Holzfaserdämmung 2023
                    <meta itemprop="reviewRating" itemscope itemtype="https://Schema.org/Rating">
                    <meta itemprop="ratingValue" content="4">
                    <meta itemprop="bestRating" content="5">
                </cite>
            </div>
        </div>

        <!-- Trust Badges -->
        <div class="trust-badges animate-fade-in" style="animation-delay: 0.8s">
            <div class="trust-badge">
                <img src="assets/images/google-logo.svg" alt="Google">
                <span class="badge-rating"><?= $overallRating ?></span>
                <span class="badge-count"><?= $reviewCount ?> Bewertungen</span>
            </div>
            <div class="trust-badge">
                <span class="badge-icon">🏆</span>
                <span class="badge-text">Handwerkskammer<br>Schleswig-Holstein</span>
            </div>
            <div class="trust-badge">
                <span class="badge-icon">📍</span>
                <span class="badge-text">Lokal verwurzelt<br>seit Jahrzehnten</span>
            </div>
        </div>
    </div>

    <!-- Schema.org Business Data -->
    <meta itemprop="name" content="Zimmerei & Bauunternehmen Volker Clausen">
    <meta itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
    <meta itemprop="ratingValue" content="<?= $overallRating ?>">
    <meta itemprop="reviewCount" content="<?= $reviewCount ?>">
    <meta itemprop="bestRating" content="5">
    <meta itemprop="worstRating" content="1">
</section>

<style>
.testimonials {
    padding: var(--space-8) 0;
    background: var(--color-background);
}

.testimonials__header {
    text-align: center;
    margin-bottom: var(--space-8);
}

.rating-summary {
    display: flex;
    justify-content: center;
    gap: var(--space-6);
    align-items: center;
    flex-wrap: wrap;
}

.rating-summary__score {
    text-align: center;
}

.score-number {
    font-size: 3.5rem;
    font-weight: 700;
    color: var(--color-primary);
    display: block;
}

.rating-stars {
    font-size: 1.5rem;
    color: #F59E0B;
    margin: var(--space-2) 0;
}

.star--filled { color: #F59E0B; }
.star--half { background: linear-gradient(90deg, #F59E0B 50%, #E5E7EB 50%); }

.rating-summary__meta {
    display: flex;
    align-items: center;
    gap: var(--space-2);
    justify-content: center;
    font-size: var(--text-sm);
    color: var(--color-text-muted);
}

.google-badge {
    height: 16px;
    width: auto;
}

.rating-breakdown {
    display: flex;
    flex-direction: column;
    gap: var(--space-1);
    min-width: 200px;
}

.rating-bar {
    display: flex;
    align-items: center;
    gap: var(--space-2);
    font-size: var(--text-sm);
}

.rating-bar .stars {
    width: 30px;
    color: var(--color-text-muted);
}

.bar {
    flex: 1;
    height: 8px;
    background: var(--color-border);
    border-radius: var(--radius-sm);
    overflow: hidden;
}

.fill {
    height: 100%;
    background: #F59E0B;
    transition: width 1s ease-out;
}

.percent {
    width: 30px;
    text-align: right;
    color: var(--color-text-muted);
}

.testimonial--featured {
    background: var(--color-primary);
    color: #fff;
    padding: var(--space-8);
    border-radius: var(--radius-xl);
    position: relative;
    margin-bottom: var(--space-8);
    text-align: center;
}

.testimonial--featured::before {
    content: '"';
    font-size: 8rem;
    opacity: 0.2;
    position: absolute;
    top: -1rem;
    left: 2rem;
    font-family: Georgia, serif;
    line-height: 1;
}

.testimonial--featured blockquote {
    font-size: var(--text-xl);
    font-style: italic;
    line-height: 1.7;
    margin: 0 0 var