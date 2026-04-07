<?php $currentPage = '404'; $pageTitle = 'Seite nicht gefunden'; require 'includes/header.php'; ?>

<main class="main-content animate-on-scroll fade-in">
    <div class="container">
        <div class="error-404">
            <div class="error-content animate-on-scroll slide-up">
                <h1 class="error-title">404 - Seite nicht gefunden</h1>
                <div class="error-message">
                    <p>Entschuldigung, die gewünschte Seite konnte nicht gefunden werden. Möglicherweise wurde sie verschoben oder der Link ist nicht mehr aktuell.</p>
                    <p>Als traditionsreiches Bauunternehmen mit jahrzehntelanger Erfahrung helfen wir Ihnen gerne weiter - auch beim Finden der richtigen Seite.</p>
                </div>
            </div>
            
            <div class="error-navigation animate-on-scroll slide-up delay-200">
                <h2>Hier finden Sie, was Sie suchen:</h2>
                <div class="nav-links">
                    <a href="index.php" class="nav-link animate-on-scroll fade-in delay-300">
                        <span class="link-title">Startseite</span>
                        <span class="link-desc">Zurück zur Hauptseite</span>
                    </a>
                    <a href="leistungen.php" class="nav-link animate-on-scroll fade-in delay-400">
                        <span class="link-title">Leistungen</span>
                        <span class="link-desc">Zimmerei & Bauarbeiten</span>
                    </a>
                    <a href="referenzen.php" class="nav-link animate-on-scroll fade-in delay-500">
                        <span class="link-title">Referenzen</span>
                        <span class="link-desc">Unsere Projekte</span>
                    </a>
                    <a href="ueber-uns.php" class="nav-link animate-on-scroll fade-in delay-600">
                        <span class="link-title">Über uns</span>
                        <span class="link-desc">Das Unternehmen</span>
                    </a>
                    <a href="kontakt.php" class="nav-link animate-on-scroll fade-in delay-700">
                        <span class="link-title">Kontakt</span>
                        <span class="link-desc">Nehmen Sie Kontakt auf</span>
                    </a>
                </div>
            </div>

            <div class="search-section animate-on-scroll slide-up delay-400">
                <h3>Oder suchen Sie direkt:</h3>
                <div class="search-form">
                    <input type="text" id="search-input" placeholder="Suchbegriff eingeben..." class="search-input">
                    <button type="button" id="search-btn" class="search-btn">Suchen</button>
                </div>
                <div class="quick-search animate-on-scroll fade-in delay-500">
                    <span>Beliebte Suchbegriffe:</span>
                    <a href="leistungen.php#zimmerei" class="search-tag">Zimmerei</a>
                    <a href="leistungen.php#neubau" class="search-tag">Neubau</a>
                    <a href="leistungen.php#sanierung" class="search-tag">Sanierung</a>
                    <a href="kontakt.php" class="search-tag">Kontakt</a>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
document.getElementById('search-btn').addEventListener('click', function() {
    const searchTerm = document.getElementById('search-input').value.toLowerCase();
    if (searchTerm.includes('zimmerei') || searchTerm.includes('holz')) {
        window.location.href = 'leistungen.php#zimmerei';
    } else if (searchTerm.includes('bau') || searchTerm.includes('neubau')) {
        window.location.href = 'leistungen.php#neubau';
    } else if (searchTerm.includes('kontakt') || searchTerm.includes('telefon')) {
        window.location.href = 'kontakt.php';
    } else if (searchTerm.includes('referenz') || searchTerm.includes('projekt')) {
        window.location.href = 'referenzen.php';
    } else {
        window.location.href = 'index.php';
    }
});

document.getElementById('search-input').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        document.getElementById('search-btn').click();
    }
});
</script>

<?php require 'includes/footer.php'; ?>