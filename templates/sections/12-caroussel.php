<style>
    .list-carousel {
        position: relative;
        padding: 1rem;
    }

    .list-carousel::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: <?php echo htmlspecialchars($config['site']['primary_color']); ?>;
        opacity:0.8; /* Couleur noire avec 50% d'opacité */
        z-index: 1;
        pointer-events: none; /* Empêche d'interférer avec le contenu */
        border-radius: 1rem;
    }

    .list-carousel p {
        position: relative;
        z-index: 2; /* Place le texte au-dessus de l'arrière-plan */
    }

    #<?= str_replace('#', '', $config['navigation'][0]['href']); ?> {
        position: relative;
        padding: 100px 0;
    }

    #<?= str_replace('#', '', $config['navigation'][0]['href']); ?>::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url('./images/backgrounds/header.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        opacity: 0.5;
        /* Réduire l'opacité de l'image */
        z-index: 1;
        /* Mettre l'image et le filtre derrière le contenu */
    }

    #<?= str_replace('#', '', $config['navigation'][0]['href']); ?> .col-md-8 {
        position: relative;
        z-index: 2;
        /* S'assurer que le contenu est au-dessus du filtre */
    }

    #<?= str_replace('#', '', $config['navigation'][0]['href']); ?>::after {
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

    .carousel-item {
        min-height: 366px;
    }

    .carousel-inner,
    .carousel-control-prev,
    .carousel-control-next {
        z-index:9999;
    }
</style>

<div id="<?= str_replace('#', '', $config['navigation'][0]['href']); ?>" class="carousel slide py-5"
    data-ride="carousel" data-interval="3000">
    <div class="carousel-inner d-flex">
        <?php
        // Générer les items du carrousel dynamiquement
        $first = true;
        foreach ($config['caroussel'] as $item) {
            ?>
            <div class="carousel-item <?php if ($first) {
                echo 'active';
                $first = false;
            } ?>">
                <div class="d-flex justify-content-center z-index999">
                    <div class="d-flex flex-column text-center align-items-center">
                        <h1><?php echo nl2br(html_entity_decode($item['title'])); ?></h1>
                        <div class="list-carousel my-3">
                            <p><?php echo nl2br(html_entity_decode($item['text'])); ?></p>
                        </div>
                        <div class="d-flex">
                            <a href="<?php echo htmlspecialchars($item['button_1_href']); ?>"
                                class="btn btn-primary"><?php echo htmlspecialchars($item['button_1']); ?></a>
                            <a href="<?php echo htmlspecialchars($item['button_2_href']); ?>"
                                class="btn btn-secondary ml-2"><?php echo htmlspecialchars($item['button_2']); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <!-- Controls -->
    <a class="carousel-control-prev" href="#<?= str_replace('#', '', $config['navigation'][0]['href']); ?>"
        role="button" data-slide="prev">
        <!-- SVG inline for the Previous icon -->
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="bi bi-chevron-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
        </svg>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#<?= str_replace('#', '', $config['navigation'][0]['href']); ?>"
        role="button" data-slide="next">
        <!-- SVG inline for the Next icon -->
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="bi bi-chevron-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
        </svg>
        <span class="sr-only">Next</span>
    </a>
</div>