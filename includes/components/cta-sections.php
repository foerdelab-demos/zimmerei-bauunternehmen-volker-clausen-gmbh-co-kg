<?php
// includes/components/cta-sections.php

?>
<style>
/* CTA Banner Styles */
.cta-banner {
    background: var(--color-primary);
    color: #fff;
    padding: var(--space-8) var(--space-4);
    text-align: center;
    position: relative;
    overflow: hidden;
    margin: var(--space-12) 0;
}

.cta-banner::before {
    content: '';
    position: absolute;
    inset: -50%;
    background: radial-gradient(ellipse at center, rgba(255,255,255,0.1), transparent 70%);
}

.cta-banner__title {
    font-size: var(--text-3xl);
    font-weight: 800;
    margin-bottom: var(--space-2);
    position: relative;
    z-index: 2;
}

.cta-banner .btn-primary {
    background: #fff;
    color: var(--color-primary);
    font-size: var(--text-lg);
    padding: 1rem 2.5rem;
    border: none;
    font-weight: 600;
    text-decoration: none;
    display: inline-block;
    position: relative;
    z-index: 2;
    transition: all 0.3s ease;
}

.cta-banner .btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}

.cta-micro {
    margin-top: var(--space-3);
    font-size: var(--text-sm);
    opacity: 0.9;
    position: relative;
    z-index: 2;
}

/* Split CTA Styles */
.cta-split {
    background: var(--color-background);
    border: 2px solid var(--color-accent);
    padding: var(--space-6);
    margin: var(--space-8) 0;
    display: grid;
    grid-template-columns: 1fr auto;
    gap: var(--space-6);
    align-items: center;
}

.cta-split__content h3 {
    font-size: var(--text-2xl);
    font-weight: 700;
    color: var(--color-primary);
    margin-bottom: var(--space-2);
}

.cta-split__content p {
    color: var(--color-neutral);
    margin-bottom: var(--space-4);
}

.cta-split__actions {
    display: flex;
    flex-direction: column;
    gap: var(--space-3);
    text-align: center;
}

.cta-split__phone {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: var(--space-2);
}

.cta-split__phone .phone-number {
    font-size: var(--text-xl);
    font-weight: 700;
    color: var(--color-primary);
    text-decoration: none;
}

.cta-split__phone .phone-hours {
    font-size: var(--text-sm);
    color: var(--color-neutral);
}

.cta-split__divider {
    font-size: var(--text-sm);
    color: var(--color-neutral);
    margin: var(--space-1) 0;
}

@media (max-width: 768px) {
    .cta-split {
        grid-template-columns: 1fr;
        text-align: center;
    }
}

/* Minimal CTA Styles */
.cta-minimal {
    text-align: center;
    padding: var(--space-6) var(--space-4);
    margin: var(--space-8) 0;
}

.cta-minimal__title {
    font-size: var(--text-xl);
    font-weight: 600;
    color: var(--color-text);
    margin-bottom: var(--space-4);
}

.cta-minimal .btn-outline {
    background: transparent;
    border: 2px solid var(--color-primary);
    color: var(--color-primary);
    padding: 0.75rem 2rem;
    text-decoration: none;
    display: inline-block;
    font-weight: 600;
    transition: all 0.3s ease;
}

.cta-minimal .btn-outline:hover {
    background: var(--color-primary);
    color: #fff;
}

/* Emergency CTA Styles */
.cta-emergency {
    background: linear-gradient(135deg, #dc2626, #b91c1c);
    color: #fff;
    padding: var(--space-6);
    margin: var(--space-8) 0;
    text-align: center;
    position: relative;
    overflow: hidden;
    border-radius: 8px;
}

.cta-emergency::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: repeating-linear-gradient(
        45deg,
        transparent,
        transparent 10px,
        rgba(255,255,255,0.05) 10px,
        rgba(255,255,255,0.05) 20px
    );
    animation: emergency-pulse 3s ease-in-out infinite;
}

@keyframes emergency-pulse {
    0%, 100% { opacity: 0.3; }
    50% { opacity: 0.6; }
}

.cta-emergency__title {
    font-size: var(--text-2xl);
    font-weight: 800;
    margin-bottom: var(--space-3);
    position: relative;
    z-index: 2;
}

.cta-emergency__phone {
    font-size: var(--text-3xl);
    font-weight: 900;
    text-decoration: none;
    color: #fff;
    display: inline-block;
    position: relative;
    z-index: 2;
    transition: all 0.3s ease;
}

.cta-emergency__phone:hover {
    transform: scale(1.05);
    text-shadow: 0 0 20px rgba(255,255,255,0.5);
}

.cta-emergency__subtitle {
    font-size: var(--text-sm);
    margin-top: var(--space-2);
    opacity: 0.9;
    position: relative;
    z-index: 2;
}
</style>

<?php

function cta_banner($title, $btnText, $btnLink) {
    echo '<div class="cta-banner">';
    echo '<h2 class="cta-banner__title">' . htmlspecialchars($title) . '</h2>';
    echo '<a href="' . htmlspecialchars($btnLink) . '" class="btn-primary">' . htmlspecialchars($btnText) . '</a>';
    echo '<p class="cta-micro">✓ Festpreise ohne versteckte Kosten &middot; ✓ Persönliche Beratung &middot; ✓ Seit Jahrzehnten vor Ort</p>';
    echo '</div>';
}

function cta_split($title, $text, $phone, $hours) {
    echo '<div class="cta-split">';
    echo '<div class="cta-split__content">';
    echo '<h3>' . htmlspecialchars($title) . '</h3>';
    echo '<p>' . htmlspecialchars($text) . '</p>';
    echo '</div>';
    echo '<div class="cta-split__actions">';
    echo '<a href="/kontakt" class="btn-primary">Kostenvoranschlag anfordern</a>';
    echo '<div class="cta-split__divider">oder</div>';
    echo '<div class="cta-split__phone">';
    echo '<a href="tel:' . str_replace(' ', '', $phone) . '" class="phone-number">' . htmlspecialchars($phone) . '</a>';
    echo '<span class="phone-hours">' . htmlspecialchars($hours) . '</span>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}

function cta_minimal($title, $btnText, $btnLink) {
    echo '<div class="cta-minimal">';
    echo '<h3 class="cta-minimal__title">' . htmlspecialchars($title) . '</h3>';
    echo '<a href="' . htmlspecialchars($btnLink) . '" class="btn-outline">' . htmlspecialchars($btnText) . '</a>';
    echo '</div>';
}

function cta_emergency($phone) {
    echo '<div class="cta-emergency">';
    echo '<h2 class="cta-emergency__title">Notfall? Sturmschaden?</h2>';
    echo '<a href="tel:' . str_replace(' ', '', $phone) . '" class="cta-emergency__phone">' . htmlspecialchars($phone) . '</a>';
    echo '<p class="cta-emergency__subtitle">Auch samstags und bei Wetterschäden sofort erreichbar</p>';
    echo '</div>';
}

?>