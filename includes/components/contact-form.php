<?php
// CSRF Token generieren falls nicht vorhanden
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>

<section class="contact-form-section">
    <div class="container">
        <div class="contact-form-grid">
            <!-- Kontakt-Info-Box -->
            <div class="contact-info-box">
                <h3>Direkter Draht zu uns</h3>
                
                <div class="contact-method">
                    <div class="contact-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                        </svg>
                    </div>
                    <div class="contact-details">
                        <strong>Telefon</strong>
                        <a href="tel:046116779780" class="contact-link">0461 16779780</a>
                        <span class="contact-note">Auch samstags bei Notfällen erreichbar</span>
                    </div>
                </div>

                <div class="contact-method">
                    <div class="contact-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                        </svg>
                    </div>
                    <div class="contact-details">
                        <strong>E-Mail</strong>
                        <a href="mailto:info@v-clausen.de" class="contact-link">info@v-clausen.de</a>
                        <span class="contact-note">Antwort werktags innerhalb von 24h</span>
                    </div>
                </div>

                <div class="contact-method">
                    <div class="contact-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                        </svg>
                    </div>
                    <div class="contact-details">
                        <strong>Werkstatt & Büro</strong>
                        <address class="contact-address">
                            Bregenberg 8<br>
                            24976 Handewitt
                        </address>
                        <a href="https://maps.google.com/?q=Bregenberg+8,+24976+Handewitt" target="_blank" class="contact-link">
                            Route planen
                        </a>
                    </div>
                </div>

                <div class="service-radius-note">
                    <strong>Unser Einzugsgebiet:</strong><br>
                    Schleswig-Holstein bis 50km um Handewitt.<br>
                    Fahrtzeiten ab unserer Werkstatt.
                </div>
            </div>

            <!-- Kontaktformular -->
            <div class="contact-form-container">
                <div class="form-header">
                    <h3>Projekt anfragen</h3>
                    <p>Schildern Sie uns Ihr Vorhaben. Wir melden uns innerhalb von 24 Stunden zurück.</p>
                </div>

                <form id="contactForm" method="POST" action="/process-contact.php" class="contact-form">
                    <!-- Spam Protection -->
                    <input type="text" name="website_url" style="display:none" tabindex="-1" autocomplete="off">
                    <input type="hidden" name="form_time" value="<?= time() ?>">
                    <input type="hidden" name="csrf" value="<?= $_SESSION['csrf_token'] ?>">

                    <div class="form-row">
                        <div class="form-group">
                            <input type="text" id="name" name="name" placeholder=" " required class="form-input">
                            <label for="name" class="form-label">Ihr Name *</label>
                            <span class="form-error" role="alert"></span>
                        </div>

                        <div class="form-group">
                            <input type="tel" id="phone" name="phone" placeholder=" " required class="form-input">
                            <label for="phone" class="form-label">Telefon *</label>
                            <span class="form-error" role="alert"></span>
                            <span class="form-hint">Für Rückfragen zu Ihrem Projekt</span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <input type="email" id="email" name="email" placeholder=" " class="form-input">
                            <label for="email" class="form-label">E-Mail</label>
                            <span class="form-error" role="alert"></span>
                            <span class="form-hint">Optional - für schriftliche Bestätigung</span>
                        </div>

                        <div class="form-group">
                            <input type="text" id="location" name="location" placeholder=" " class="form-input">
                            <label for="location" class="form-label">Ort des Projekts</label>
                            <span class="form-error" role="alert"></span>
                            <span class="form-hint">Für Anfahrtsplanung</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <select id="project_type" name="project_type" required class="form-select">
                            <option value="">Bitte wählen *</option>
                            <option value="dachsanierung">Dachsanierung komplett</option>
                            <option value="dachausbau">Dachausbau / Gauben</option>
                            <option value="carport">Carport / Garage</option>
                            <option value="anbau">Anbau / Erweiterung</option>
                            <option value="neubau">Neubau Wohnhaus</option>
                            <option value="gewerbebau">Gewerbebau / Halle</option>
                            <option value="daemmung">Dämmung / Sanierung</option>
                            <option value="reparatur">Reparatur / Notfall</option>
                            <option value="beratung">Beratung / Begutachtung</option>
                            <option value="sonstiges">Sonstiges</option>
                        </select>
                        <label for="project_type" class="form-label-select">Art des Projekts *</label>
                        <span class="form-error" role="alert"></span>
                    </div>

                    <div class="form-group">
                        <textarea id="message" name="message" rows="4" placeholder=" " required class="form-textarea"></textarea>
                        <label for="message" class="form-label">Projektbeschreibung *</label>
                        <span class="form-error" role="alert"></span>
                        <span class="form-hint">Je detaillierter, desto präziser unsere Beratung</span>
                    </div>

                    <div class="form-group">
                        <div class="checkbox-group">
                            <input type="checkbox" id="urgent" name="urgent" value="1" class="form-checkbox">
                            <label for="urgent" class="checkbox-label">
                                <span class="checkbox-mark"></span>
                                Notfall / Dringend (Sturmschaden, undichtes Dach etc.)
                            </label>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary btn-large">
                            <span class="btn-text">Kostenlose Beratung anfragen</span>
                            <span class="btn-loading" style="display:none;">
                                <svg class="loading-spinner" width="20" height="20" viewBox="0 0 50 50">
                                    <circle cx="25" cy="25" r="20" fill="none" stroke="currentColor" stroke-width="5" stroke-linecap="round" stroke-dasharray="31.416" stroke-dashoffset="31.416">
                                        <animate attributeName="stroke-array" dur="2s" values="0 31.416;15.708 15.708;0 31.416" repeatCount="indefinite"/>
                                        <animate attributeName="stroke-dashoffset" dur="2s" values="0;-15.708;-31.416" repeatCount="indefinite"/>
                                    </circle>
                                </svg>
                                Wird gesendet...
                            </span>
                        </button>
                        
                        <div class="form-note">
                            <small>
                                * Pflichtfelder. Ihre Daten werden vertraulich behandelt und nicht weitergegeben.
                                <br>Oder rufen Sie direkt an: <a href="tel:046116779780">0461 16779780</a>
                            </small>
                        </div>
                    </div>

                    <!-- Success State -->
                    <div id="form-success" class="form-success" style="display:none;">
                        <div class="success-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="9,11 12,14 22,4"></polyline>
                                <path d="M21,12v7a2,2 0,0 1,-2,2H5a2,2 0,0 1,-2,-2V5a2,2 0,0 1,2,-2h11"></path>
                            </svg>
                        </div>
                        <h4>Anfrage eingegangen!</h4>
                        <p>
                            Vielen Dank für Ihre Anfrage. Wir melden uns <strong>innerhalb von 24 Stunden</strong> 
                            telefonisch bei Ihnen, um die Details zu besprechen.
                        </p>
                        <p>
                            <strong>Bei Notfällen</strong> rufen Sie uns bitte direkt an: 
                            <a href="tel:046116779780">0461 16779780</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<style>
.contact-form-section {
    padding: 4rem 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

.contact-form-grid {
    display: grid;
    grid-template-columns: 1fr 2fr;
    gap: 4rem;
    max-width: 1200px;
    margin: 0 auto;
}

/* Kontakt Info Box */
.contact-info-box {
    background: white;
    padding: 2rem;
    border-radius: var(--radius-lg);
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    height: fit-content;
    position: sticky;
    top: 2rem;
}

.contact-info-box h3 {
    margin: 0 0 2rem 0;
    color: var(--color-primary);
    font-size: 1.5rem;
}

.contact-method {
    display: flex;
    gap: 1rem;
    margin-bottom: 2rem;
    padding-bottom: 2rem;
    border-bottom: 1px solid var(--color-border);
}

.contact-method:last-of-type {
    border-bottom: none;
    margin-bottom: 1.5rem;
}

.contact-icon {
    flex-shrink: 0;
    width: 48px;
    height: