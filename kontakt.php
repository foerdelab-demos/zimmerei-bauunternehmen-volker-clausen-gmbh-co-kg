<?php 
$currentPage = 'kontakt';

// Firmendaten
$firma = [
    'name' => 'Zimmerei & Bauunternehmen Volker Clausen GmbH & Co. KG',
    'phone' => '0461 16779780',
    'phone_display' => '+49 461 16779780',
    'address' => 'Bregenberg 8, 24976 Handewitt',
    'email' => 'info@v-clausen.de',
    'notfall_phone' => '0461 16779780',
    'region' => 'Handewitt, Flensburg, Schleswig'
];

// Kontaktformular Handler
$form_sent = false;
$form_error = '';

if ($_POST && isset($_POST['kontakt_form'])) {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $message = trim($_POST['message'] ?? '');
    
    if (empty($name) || empty($email) || empty($message)) {
        $form_error = 'Bitte füllen Sie Name, E-Mail und Nachricht aus.';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $form_error = 'Bitte geben Sie eine gültige E-Mail-Adresse ein.';
    } else {
        $form_sent = true;
    }
}

require 'includes/header.php'; 
?>

<main id="main">
    <!-- Hero Section mit Notfall CTA -->
    <section class="hero hero--contact animate-on-scroll fade-in-up">
        <div class="container">
            <div class="hero__content">
                <h1 class="hero-title">Kontakt zur Zimmerei Clausen</h1>
                <p class="hero-subtitle">
                    Rufen Sie an oder schreiben Sie uns. Bei Sturmschäden und Notfällen 
                    sind wir auch am Wochenende für Sie da.
                </p>
                
                <div class="hero__contact-grid">
                    <div class="contact-card contact-card--emergency animate-on-scroll stagger-1">
                        <div class="contact-card__icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02L9 6.62z"/>
                            </svg>
                        </div>
                        <div class="contact-card__content">
                            <h3>Notfall & Sturmschäden</h3>
                            <p>Auch am Wochenende erreichbar</p>
                            <a href="tel:+4946116779780" class="contact-emergency-btn"><?php echo $firma['phone']; ?></a>
                        </div>
                    </div>
                    
                    <div class="contact-card animate-on-scroll stagger-2">
                        <div class="contact-card__icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                            </svg>
                        </div>
                        <div class="contact-card__content">
                            <h3>Büro & Werkstatt</h3>
                            <p><?php echo $firma['address']; ?></p>
                            <span class="contact-hours">Nach Vereinbarung</span>
                        </div>.02L9 6.62z"/>.02l-2.2 2.2z"/>
                            </svg>
                        </div>
                        <div class="contact-card__content">
                            <h3>Notfall-Hotline</h3>
                            <p>Auch samstags und bei Sturmschäden erreichbar</p>
                            <a href="tel:<?= $firma['phone'] ?>" class="btn btn--primary">
                                <?= $firma['phone'] ?>
                            </a>
                        </div>
                    </div>
                    
                    <div class="contact-card animate-on-scroll stagger-2">
                        <div class="contact-card__icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                            </svg>
                        </div>
                        <div class="contact-card__content">
                            <h3>Unser Standort</h3>
                            <p>Zentral in Handewitt - Ihre Nachbarn kennen uns</p>
                            <address>
                                <?= $firma['address'] ?>
                            </address>
                        </div>
                    </div>
                    
                    <div class="contact-card animate-on-scroll stagger-3">
                        <div class="contact-card__icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                            </svg>
                        </div>
                        <div class="contact-card__content">
                            <h3>E-Mail Anfrage</h3>
                            <p>Kostenlose Beratung und unverbindliches Angebot</p>
                            <a href="mailto:<?= $firma['email'] ?>" class="btn btn--secondary">
                                <?= $firma['email'] ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontaktformular Section -->
    <section class="section section--contact-form animate-on-scroll fade-in-up">
        <div class="container">
            <div class="section__header">
                <h2>Nachricht senden</h2>
                <p>
                    Beschreiben Sie Ihr Bauprojekt. Wir melden uns innerhalb von 24 Stunden 
                    zurück und vereinbaren einen Termin vor Ort.
                </p>
            </div>
            
            <div class="contact-form-wrapper">
                <?php if ($form_sent): ?>
                    <div class="form-success animate-on-scroll fade-in-up">
                        <div class="form-success__icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                            </svg>
                        </div>
                        <h3>Nachricht gesendet</h3>
                        <p>
                            Danke für Ihre Anfrage. Wir melden uns innerhalb von 24 Stunden 
                            bei Ihnen zurück. Bei dringenden Fällen rufen Sie direkt an: 
                            <a href="tel:<?= $firma['phone'] ?>"><?= $firma['phone'] ?></a>
                        </p>
                    </div>
                <?php else: ?>
                    <form method="POST" class="contact-form animate-on-scroll fade-in-up" novalidate>
                        <input type="hidden" name="kontakt_form" value="1">
                        
                        <?php if ($form_error): ?>
                            <div class="form-error" role="alert" aria-live="polite">
                                <?= htmlspecialchars($form_error) ?>
                            </div>
                        <?php endif; ?>
                        
                        <div class="form-group">
                            <label for="name">Ihr Name *</label>
                            <input 
                                type="text" 
                                id="name" 
                                name="name" 
                                value="<?= htmlspecialchars($_POST['name'] ?? '') ?>"
                                required 
                                aria-required="true"
                            >
                        </div>
                        
                        <div class="form-group">
                            <label for="email">E-Mail-Adresse *</label>
                            <input 
                                type="email" 
                                id="email" 
                                name="email" 
                                value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"
                                required 
                                aria-required="true"
                            >
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Telefonnummer</label>
                            <input 
                                type="tel" 
                                id="phone" 
                                name="phone" 
                                value="<?= htmlspecialchars($_POST['phone'] ?? '') ?>"
                            >
                            <small class="form-help">Für Rückfragen - freiwillig</small>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Ihre Nachricht *</label>
                            <textarea 
                                id="message" 
                                name="message" 
                                rows="6" 
                                required 
                                aria-required="true"
                                placeholder="Beschreiben Sie Ihr Bauprojekt: Neubau, Sanierung, Reparatur..."
                            ><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
                        </div>
                        
                        <div class="form-actions">
                            <button type="submit" class="btn btn--primary btn--large">
                                Nachricht senden
                            </button>
                            <p class="form-note">
                                * Pflichtfelder | Festpreise ohne versteckte Kosten - Norddeutsch ehrlich
                            </p>
                        </div>
                    </form>
                <?php endif; ?>
                
                <div class="contact-alternative animate-on-scroll fade-in-up">
                    <h3>Lieber telefonieren?</h3>
                    <p>
                        Rufen Sie direkt durch: <a href="tel:<?= $firma['phone'] ?>" class="phone-link"><?= $firma['phone'] ?></a><br>
                        Zimmerei + Maurerarbeiten = Kein Gewerke-Chaos
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Standort & Einzugsgebiet -->
    <section class="section section--location animate-on-scroll fade-in-up">
        <div class="container">
            <div class="location-grid">
                <div class="location-info">
                    <h2>Unser Standort in Handewitt</h2>
                    <p>
                        Zentral gelegen zwischen Flensburg und der dänischen Grenze. 
                        Von unserem Standort aus erreichen wir alle Projekte in 
                        Schleswig-Holstein und der Grenzregion schnell und flexibel.
                    </p>
                    
                    <div class="location-details animate-on-scroll stagger-container">
                        <div class="location-detail stagger-1">
                            <h3>Anschrift</h3>
                            <address>
                                <?= $firma['name'] ?><br>
                                <?= $firma['address'] ?>
                            </address>
                        </div>
                        
                        <div class="location-detail stagger-2">
                            <h3>Erreichbarkeit</h3>
                            <p>
                                Nach Vereinbarung<br>
                                Notfälle: Auch am Wochenende
                            </p>
                        </div>
                        
                        <div class="location-detail stagger-3">
                            <h3>Einzugsgebiet</h3>
                            <ul class="service-radius-list">
                                <li>Handewitt (vor Ort)</li>
                                <li>Flensburg (15 Min.)</li>
                                <li>Schleswig (25 Min.)</li>
                                <li>Süderbrarup (30 Min.)</li>
                                <li>Sonderborg/DK (20 Min.)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="location-map">
                    <div class="map-placeholder">
                        <div class="map-placeholder__content">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                            </svg>
                            <h3>Handewitt</h3>
                            <p>Ihr lokaler Partner für Zimmerei und Maurerarbeiten</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service-Zeiten & Notfall -->
    <section class="section section--service-hours animate-on-scroll fade-in-up">
        <div class="container">
            <h2>Unsere Erreichbarkeit</h2>
            
            <div class="service-hours-grid">
                <div class="service-card animate-on-scroll stagger-1">
                    <div class="service-card__icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M16.2,16.2L11,13V7H12.5V12.2L17,14.9L16.2,16.2Z"/>
                        </svg>
                    </div>
                    <h3>Reguläre Zeiten</h3>
                    <p>
                        Beratung und Termine nach Vereinbarung.<br>
                        Flexible Terminplanung auch abends möglich.
                    </p>
                    <a href="tel:<?= $firma['phone'] ?>" class="btn btn--secondary">
                        Termin vereinbaren
                    </a>
                </div>
                
                <div class="service-card service-card--emergency animate-on-scroll stagger-2">
                    <div class="service-card__icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12.5,2C17,2 21,6 21,10.5C21,15 17,19 12.5,19H11V17.5H12.5C16.1,17.5 19,14.6 19,11C19,7.4 16.1,4.5 12.5,4.5S6,7.4 6,11V12H4.5V11C4.5,6 8.5,2 12.5,2Z"/>
                        </svg>
                    </div>
                    <h3>Notfall-Service</h3>
                    <p>
                        Bei Sturmschäden, undichten Dächern oder anderen 
                        dringenden Reparaturen sind wir auch am Wochenende da.
                    </p>
                    <a href="tel:<?= $firma['notfall_phone'] ?>" class="btn btn--primary">
                        Notfall-Hotline
                    </a>
                </div>
                
                <div class="service-card animate-on-scroll stagger-3">
                    <div class="service-card__icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12,8A4,4 0 0,1 16,12A4,4 0 0,1 12,16A4,4 0 0,1 8,12A4,4 0 0,1 12,8M12,10A2,2 0 0,0 10,12A2,2 0 0,0 12,14A2,2 0 0,0 14,12A2,2 0 0,0 12,10M10,22C9.75,22 9.54,21.82 9.5,21.58L9.13,18.93C8.5,18.68 7.96,18.34 7.44,17.94L4.95,18.95C4.73,19.03 4.46,18.95 4.34,18.73L2.34,15.27C2.21,15.05 2.27,14.78 2.46,14.63L4.57,12.97L4.5,12L4.57,11L2.46,9.37C2.27,9.22 2.21,8.95 2.34,8.73L4.34,5.27C4.46,5.05 4.73,4.96 4.95,5.05L7.44,6.05C7.96,5.66 8.5,5.32 9.13,5.07L9.5,2.42C9.54,2.18 9.75,2 10,2H14C14.25,2 14.46,2.18 14.5,2.42L14.87,5.07C15.5,5.32 16.04,5.66 16.56,6.05L19.05,5.05C19.27,4.96 19.54,5.05 19.66,5.27L21.66,8.73C21.79,8.95 21.73,9.22 21.54,9.37L19.43,11L19.5,12L19.43,13L21.54,14.63C21.73,14.78 21.79,15.05 21.66,15.27L19.66,18.73C19.54,18.95 19.27,19.04 19.05,18.95L16.56,17.95C16.04,18.34 15.5,18.68 14.87,18.93L14.5,21.58C14.46,21.82 14.25,22 14,22H10M11.25,4L10.88,6.61C9.68,6.86 8.62,7.5 7.85,8.39L5.44,7.35L4.69,8.65L6.8,10.2C6.4,11.37 6.4,12.64 6.8,13.8L4.68,15.36L5.43,16.66L7.86,15.62C8.63,16.5 9.68,17.14 10.87,17.38L11.24,20H12.76L13.13,17.39C14.32,17.14 15.37,16.5 16.14,15.62L18.57,16.66L19.32,15.36L17.2,13.81C17.6,12.64 17.6,11.37 17.2,10.2L19.31,8.65L18.56,7.35L16.15,8.39C15.38,7.5 14.32,6.86 13.12,6.62L12.75,4H11.25Z"/>
                        </svg>
                    </div>
                    <h3>Vor-Ort-Termine</h3>
                    <p>
                        Kostenlose Beratung und Kostenvoranschlag direkt 
                        bei Ihnen. Termine auch außerhalb der Geschäftszeiten.
                    </p>
                    <a href="mailto:<?= $firma['email'] ?>" class="btn btn--secondary">
                        Termin anfragen
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section section--cta animate-on-scroll fade-in-up">
        <div class="container">
            <div class="cta-card">
                <h2>Bereit für Ihr Bauprojekt?</h2>
                <p>
                    Seit Jahrzehnten in Handewitt - Ihre Nachbarn kennen uns. 
                    Rufen Sie an oder schreiben Sie uns für ein unverbindliches Angebot.
                </p>
                <div class="cta-actions">
                    <a href="tel:<?= $firma['phone'] ?>" class="btn btn--primary btn--large">
                        Jetzt anrufen: <?= $firma['phone'] ?>
                    </a>
                    <a href="mailto:<?= $firma['email'] ?>" class="btn btn--secondary btn--large">
                        E-Mail senden
                    </a>
                </div>
                <p class="trust-badge">
                    Mitglied der Zimmerer-Innung SH | Zimmerei + Maurerarbeiten aus einer Hand
                </p>
            </div>
        </div>
    </section>
</main>

<?php require 'includes/footer.php'; ?>