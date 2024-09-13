<style>
    .list-carousel {
        width: fit-content;
        border: 1px solid
            <?php echo htmlspecialchars($config['site']['ternary_color']) ?>
        ;
        border-radius: 0.5rem;
        padding: 1rem;
        background-color:
            <?php echo htmlspecialchars($config['site']['ternary_color']) ?>
        ;
    }

    #<?= str_replace('#', '', $config['navigation'][1]['href']); ?> {
        position: relative;
        padding: 100px 0;
    }

    #<?= str_replace('#', '', $config['navigation'][1]['href']); ?>::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url('./images/backgrounds/services.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        opacity: 0.5;
        /* Réduire l'opacité de l'image */
        z-index: 1;
        /* Mettre l'image et le filtre derrière le contenu */
    }

    #<?= str_replace('#', '', $config['navigation'][1]['href']); ?> .col-md-8 {
        position: relative;
        z-index: 2;
        /* S'assurer que le contenu est au-dessus du filtre */
    }

    #<?= str_replace('#', '', $config['navigation'][1]['href']); ?>::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
        /* Couleur de filtre gris */
        z-index: 1;
        /* Le filtre est appliqué uniquement sur l'image */
    }

    .carousel-inner,
    .carousel-control-prev,
    .carousel-control-next {
        z-index:9999;
    }
</style>

<section id="<?= str_replace('#', '', $config['navigation'][1]['href']); ?>" class="row py-5 justify-content-center">

    <div class="col-md-8">
        <!-- Section Header -->
        <div class="text-center mb-4">
            <h2 class="section-title">Nos services</h2>
        </div>

        <!-- Services Grid -->
        <div class="row">
            <?php
            $delay = 0;
            foreach ($config['services_details'] as $service): ?>
                <div class="col-md-3 col-sm-6 mb-4" data-aos="fade-up" data-aos-delay="<?= $delay; ?>">
                    <div class="service-box text-left">
                        <div class="icon mb-3">
                            <i class="<?= htmlspecialchars($service['icon']); ?>" style="font-size: 2rem;"></i>
                        </div>
                        <h3><?= htmlspecialchars($service['title']); ?></h3>
                        <p><?= htmlspecialchars($service['text']); ?></p>
                    </div>
                </div>
                <?php $delay += 100; // Augmenter le délai pour chaque service ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>