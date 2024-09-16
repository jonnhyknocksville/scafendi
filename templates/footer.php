<footer class="pt-5">
    <div class="container">
        <div class="row">
            <!-- Logo de la société -->
            <a class="col-md-2" href="?page=home">
                <img src="./images/<?php echo htmlspecialchars($config['site']['logo_footer']); ?>" style="height:40px"
                    alt="Logo de la société" class="img-fluid">
            </a>
            <!-- Navigation Links -->
            <div class="col-md-3">
                <h4 class="text-center"><?= $config['navigation_title'] ?></h4>
                <ul class="list-unstyled">
                    <?php foreach ($config['navigation'] as $navItem): ?>
                        <li class="text-center">
                            <a aria-label="<?= htmlspecialchars($navItem['label']); ?>"
                                href="<?php echo htmlspecialchars($navItem['href']); ?>">
                                <?php echo htmlspecialchars($navItem['label']); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Legal Links -->
            <div class="col-md-3">
                <h4 class="text-center"><?= $config['pages']['home']['legal_title'] ?></h4>
                <?php if (isset($config['pages']['home']['legal_links']) && is_array($config['pages']['home']['legal_links'])):
                    ?>
                    <ul class="list-unstyled">
                        <?php foreach ($config['pages']['home']['legal_links'] as $link): ?>
                            <li class="text-center">
                                <a aria-label="<?= htmlspecialchars($link['label']); ?>"
                                    href="?page=<?= htmlspecialchars($link['page']); ?>">
                                    <?= htmlspecialchars($link['label']); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>

            <!-- Social Links -->
            <div class="col-md-4">
                <h4 class="text-center"><?= $config['pages']['home']['social_links_title'] ?></h4>
                <ul class="list-unstyled d-flex justify-content-center">
                    <?php foreach ($config['pages']['home']['social_links'] as $social) {
                        if (!empty($social['url'])) {
                            echo '<li class="mx-3">';
                            echo '<a href="' . htmlspecialchars($social['url']) . '" class="" target="_blank">';
                            echo '<i class="' . htmlspecialchars($social['icon']) . ' fa-2x"></i>';
                            echo '</a>';
                            echo '</li>';
                        }
                    } ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- SVG Wave -->
    <div class="wave-container">
        <svg viewBox="0 0 120 28" preserveAspectRatio="none" style="height: 75px; width: 100%;">
            <defs>
                <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%"
                        style="stop-color:<?php echo htmlspecialchars($config['site']['primary_color']); ?>;stop-opacity:1" />
                    <stop offset="50%"
                        style="stop-color:<?php echo htmlspecialchars($config['site']['secondary_color']); ?>;stop-opacity:1" />
                    <stop offset="100%"
                        style="stop-color:<?php echo htmlspecialchars($config['site']['info_color']); ?>;stop-opacity:1" />
                </linearGradient>
            </defs>
            <path d="M0 0 Q 60 28 120 0 V 28 H 0 V 0" fill="url(#gradient)"></path>
        </svg>
    </div>
    <!-- Footer Bottom -->
    <div class="bottom-bar text-center py-3">
        &copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($config['site']['title']); ?>. <?php echo htmlspecialchars($config['site']['footer']); ?>
    </div>
</footer>

<!-- JS de Bootstrap et jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- JS d'AOS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<!-- CountUp.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/1.9.3/countUp.min.js"></script>

<script src="./js/app.js"></script>
<script type="module">
    // Initialisation d'AOS
    AOS.init();

    // Script pour le défilement fluide avec compensation de la barre de navigation
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            // Vérifier si l'élément n'a pas la classe "toto"
            if (!this.classList.contains('project')) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);
                if (targetElement) {
                    const offsetPosition = targetElement.offsetTop - 80; // Ajuster selon la hauteur de votre barre de navigation
                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });

    // Script pour le défilement fluide avec compensation de la barre de navigation
    import { CountUp } from 'https://cdnjs.cloudflare.com/ajax/libs/countup.js/2.0.7/countUp.min.js';

    document.addEventListener('DOMContentLoaded', function () {
        const counters = document.querySelectorAll('.count');
        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            const countUp = new CountUp(counter, target);
            if (!countUp.error) {
                countUp.start();
            } else {
                console.error(countUp.error);
            }
        });
    });

    // Gestion de l'envoie de mail
    document.querySelector('form').addEventListener('submit', function (event) {
        event.preventDefault(); // Empêche le comportement par défaut de soumission du formulaire

        const formData = new FormData(this); // Crée un objet FormData avec les données du formulaire

        fetch('./send_quote.php', {
            method: 'POST',
            body: formData
        })
            .then(response => response.json()) // On suppose que send_quote.php renvoie une réponse JSON
            .then(data => {
                if (data.success) { // Si l'envoi a réussi
                    document.querySelector('form').style.display = 'none'; // Masque le formulaire
                    displayConfirmationMessage(); // Affiche le message de confirmation
                } else {
                    alert('Une erreur est survenue. Veuillez réessayer.');
                }
            })
            .catch(error => {
                console.error('Erreur:', error);
                alert('Une erreur est survenue. Veuillez réessayer.');
            });
    });

    function displayConfirmationMessage() {
        const confirmationMessage = document.createElement('div');
        confirmationMessage.className = 'alert alert-success';
        confirmationMessage.textContent = 'Merci ! Votre demande a été envoyée avec succès.';
        document.querySelector('#devis').appendChild(confirmationMessage);
    }

    window.addEventListener('load', function() {
    const preloader = document.querySelector('.preloader');
    const content = document.querySelector('.content');

    // Remove preloader and reveal content
    setTimeout(() => {
        preloader.style.opacity = '0';
        preloader.style.transition = 'opacity 0.5s ease';
        setTimeout(() => {
            preloader.style.display = 'none';
            content.classList.add('content-show');

            // Initialiser AOS après que le contenu soit visible
            AOS.init({
                duration: 1200,
                once: true
            });
        }, 500);
    }, 500);
});



</script>

</body>

</html>