<?php
header("Content-Type: text/css");

// Inclure le fichier de gestion de la langue
include(__DIR__ . '/../gestion_lang.php');

?>


{# 
    CONFIGURATION DU STYLE
#}

{# 
    
    GESTION DES SECTIONS

#}

<?php

$white = "#fff";
$black = "#000";

// 01 - nav

$bgNav = htmlspecialchars($config['site']['primary_color']);
$textNav = htmlspecialchars($config['site']['text_color']);
$iconNav = htmlspecialchars($config['site']['ternary_color']);

// 01 - Carousel

$bgCarousel = htmlspecialchars($config['site']['primary_color']);
$textCarousel = htmlspecialchars($config['site']['text_color']);
$iconCarousel = htmlspecialchars($config['site']['ternary_color']);

// 02 - Presentation

$bgPresentation = htmlspecialchars($config['site']['bg_body_color']);
$textPresentation = htmlspecialchars($config['site']['text_color_dark']);
$iconPresentation = htmlspecialchars($config['site']['ternary_color']);

// 02 - Service

$bgServices = htmlspecialchars($config['site']['secondary_color']);
$textServices = htmlspecialchars($config['site']['text_color']);
$iconServices = htmlspecialchars($config['site']['ternary_color']);

// 03 - Projects

$bgProjects = htmlspecialchars($config['site']['primary_color']);
$textProjects = htmlspecialchars($config['site']['primary_color']);
$iconProjects = htmlspecialchars($config['site']['primary_color']);

// 04 - Profils

$bgProfils = htmlspecialchars($config['site']['primary_color']);
$textProfils = htmlspecialchars($config['site']['text_color']);
$iconProfils = htmlspecialchars($config['site']['ternary_color']);

// 05 - Approach

$bgApproach = $white;
$textApproach = htmlspecialchars($config['site']['text_color_dark']);
$iconApproach = htmlspecialchars($config['site']['ternary_color']);

// 06 - Technologies

$bgTechnologies = htmlspecialchars($config['site']['primary_color']);
$textTechnologies = htmlspecialchars($config['site']['text_color']);
$iconTechnologies = htmlspecialchars($config['site']['ternary_color']);

// 07 - Reviews

$bgReviews = $white;
$textReviews = htmlspecialchars($config['site']['text_color_dark']);
$iconReviews = htmlspecialchars($config['site']['ternary_color']);

// 08 - Partners

$bgPartners = htmlspecialchars($config['site']['primary_color']);
$textPartners = htmlspecialchars($config['site']['text_color']);
$iconPartners = htmlspecialchars($config['site']['ternary_color']);

// 09 - Values

$bgValues = $white;
$textValues = htmlspecialchars($config['site']['text_color_dark']);
$iconValues = htmlspecialchars($config['site']['ternary_color']);

// 10 - Clients

$bgClients = htmlspecialchars($config['site']['primary_color']);
$textClients = htmlspecialchars($config['site']['text_color']);
$iconClients = htmlspecialchars($config['site']['ternary_color']);

// 10 - Clients

$bgContact = $white;
$textContact = htmlspecialchars($config['site']['text_color_dark']);
$iconContact = htmlspecialchars($config['site']['ternary_color']);

// 11 - Footer

$bgFooter = htmlspecialchars($config['site']['primary_color']);
$textFooter = htmlspecialchars($config['site']['text_color']);
$iconFooter = htmlspecialchars($config['site']['ternary_color']);


?>


.btn-primary {
    background-color: <?php echo htmlspecialchars($config['site']['ternary_color']) ?> !important;
    border:1px solid rgba(255,255,255,0.2);
}

.btn-secondary {
    background-color: <?php echo htmlspecialchars($config['site']['secondary_color']) ?> !important;
    border:1px solid rgba(255,255,255,0.2);
}

nav {
    background-color: <?php echo $bgCarousel ?>;
    color: <?php echo $textCarousel ?>;
}

nav a {
    color: <?= $textNav; ?> !important;
}

nav i {
    color: <?= $iconNav; ?> !important;
}



{# Accueil #}

#<?= str_replace('#', '', $config['navigation'][0]['href']); ?> {
    background-color: <?php echo $bgCarousel ?>;
    color: <?php echo $textCarousel ?>;
}

#<?= str_replace('#', '', $config['navigation'][0]['href']); ?> i {
    color: <?php echo $iconCarousel ?>;
}

#<?= str_replace('#', '', $config['navigation'][0]['href']); ?> i {
    color: <?php echo $textCarousel ?>;
}

{# Presentation #}

#presentation {
    background-color: <?php echo $bgPresentation ?>;
    color: <?php echo $textPresentation ?>;
}

#presentation .bg-icon {
    background-color: <?php echo $iconPresentation ?>;
    color:<?php echo $white ?>;
}

{# Services #}
#<?= str_replace('#', '', $config['navigation'][1]['href']); ?> {
    background-color: <?php echo $bgServices ?>;
    color: <?php echo $textServices ?>;
}

#<?= str_replace('#', '', $config['navigation'][1]['href']); ?> i {
    color: <?php echo $iconPresentation ?>;
}

{# Profils #}
#<?= str_replace('#', '', $config['navigation'][2]['href']); ?> {
    background-color: <?php echo $bgProfils ?>;
    color: <?php echo $textProfils ?>;
}

#<?= str_replace('#', '', $config['navigation'][2]['href']); ?> i {
    color: <?php echo $iconProfils ?>;
}

{# Approach #}
#<?= str_replace('#', '', $config['navigation'][3]['href']); ?> {
    background-color: <?php echo $bgApproach ?>;
    color: <?php echo $textApproach ?>;
}

#<?= str_replace('#', '', $config['navigation'][3]['href']); ?> i {
    color: <?php echo $iconApproach ?>;
}

{# Technologies #}
#<?= str_replace('#', '', $config['navigation'][4]['href']); ?> {
    background-color: <?php echo $bgTechnologies ?>;
    color: <?php echo $textTechnologies ?>;
}

#<?= str_replace('#', '', $config['navigation'][4]['href']); ?> i {
    color: <?php echo $iconTechnologies ?>;
}

{# Avis #}
#<?= str_replace('#', '', $config['navigation'][5]['href']); ?> {
    background-color: <?php echo $bgReviews ?>;
    color: <?php echo $textReviews ?>;
}

#<?= str_replace('#', '', $config['navigation'][5]['href']); ?> i {
    color: <?php echo $iconApproach ?>;
}

{# Partners #}
#<?= str_replace('#', '', $config['navigation'][6]['href']); ?> {
    background-color: <?php echo $bgPartners ?>;
    color: <?php echo $textPartners ?>;
}

#<?= str_replace('#', '', $config['navigation'][6]['href']); ?> i {
    color: <?php echo $iconPartners ?>;
}

{# Values #}
#values {
    background-color: <?php echo $bgValues ?>;
    color: <?php echo $textValues ?>;
}

#values i {
    color: <?php echo $iconValues ?>;
}

{# Clients #}

#clients {
    background-color: <?php echo $bgClients?>;
    color: <?php echo $textClients?>;
}

#clients i {
    color: <?php echo $iconClients?>;
}

{# Contact #}
#<?= str_replace('#', '', $config['navigation'][8]['href']); ?> {
    background-color: <?php echo $bgContact ?>;
    color: <?php echo $textContact ?>;
}

#<?= str_replace('#', '', $config['navigation'][8]['href']); ?> i {
    color: <?php echo $white ?>;
}

#<?= str_replace('#', '', $config['navigation'][8]['href']); ?> .bg-icon {
    background-color: <?php echo $bgNav ?>;
}

{# Projects #}

#projects {
    color: black;
}

#projects a{
    color: black;
    font-weight:bold;
}

{# Footer #}
footer {
    background-color: <?php echo $bgFooter ?>;
    color: <?php echo $textFooter ?>;
}

footer i {
    color: <?php echo $iconFooter ?>;
}


{# 

    RESET CSS
    
#}


html, body {
    overflow-x: hidden;
    font-family: '<?php echo explode(':', $config['site']['font_family'])[0]; ?>', sans-serif;
    background-color: <?php echo htmlspecialchars($config['site']['bg_body_color']); ?>;
    margin: 0;
    padding: 0;
}

/* Condition pour la langue arabe */

<?php if ($lang === 'ar'): ?>

p, a, li, h1, h2, h3, h4, h5, h6 {
    text-align: right !important;
}

.text-left {
    text-align : right !important;
}

footer ul {
    padding:0;
    margin:0;
}

<?php endif; ?>

p {
    font-size:1.5rem;
}

h1 {
    font-size:50px;
}

h1, h2, h3, h4, h5, h6 {
    font-weight:bold;
}


i {
    font-size: 3rem;
    margin-bottom: 1rem;
    transition: transform 0.3s ease-in-out;
}


{# 

    NAVIGATION
    
#}


.fixed-top {
    z-index:999999;
}

.navbar-dark .navbar-nav .nav-link.active {
    font-weight:bold;
}

.navbar-dark .navbar-nav .nav-link.contact {
    border: 1px solid <?php echo $white ?>;
    border-radius: 5px;
    background: transparent;
    color: black;
    font-weight:bold;
}


{# 
    Services Section
#}


.card-img-top {
    min-height:230px;
}

.section-5 {
    width: 100%;
    overflow: hidden;
}

{# 

    NOS PROFILS
    
#}

.card-profile {
    padding: 20px;
    text-align: center;
    background-color: transparent; /* Remove background */
}

.card-profile img {
    border-radius: 50%;
    width: 120px;
    height: 120px;
}

.card-profile h5, .card-profile p {
    margin-top: 10px;
}


{# 

    SECTION CONTACT
    
#}

#map-container {
    width: 100%;
    height: 400px;
}

#contact {
    width: 100vw;
    margin-left: calc(-50vw + 50%);
    position: relative;
}

.contact-card {
    background-color: white;
    border: 10px solid <?php echo $bgFooter; ?>;
    border-radius: 1rem;
    overflow: hidden;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    z-index: 10;
    top: 60px; right: 20px; width: 300px; z-index: 9999;
}

.contact-card .card-body {
    padding: 20px; /* Ajustez le padding selon vos besoins */
}


{#
    

    SECTION REVIEWS
    
#}

.review-card {
    background-color: #f9f9f9;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.rating i {
    margin-right: 5px;
}

.total-reviews h4 {
    margin-top: 1rem;
    font-weight: bold;
}

.total-reviews .rating {
    font-size: 1.5rem;
    color: #ffc107; /* Couleur des étoiles */
    display: flex;
    align-items: center;
}

.total-reviews .rating span {
    font-size: 1.25rem;
    margin-left: 10px;
    color: #34303B;
}


{#
    
    SECTION PARTENAIRE

    
#}

.partner-logo, .client-logo {
    flex: 1 1 30%; /* Largeur flexible pour les logos */
    max-width: 150px; /* Largeur maximale des logos */
    transition: transform 0.3s ease-in-out;
}

.partner-logo img, .client-logo img {
    max-width: 100%; /* S'assure que l'image ne dépasse pas du conteneur */
    height: auto;
    display: block;
    margin: 0 auto;
}

.partner-logo:hover, .client-logo:hover {
    transform: scale(1.1); /* Effet de zoom au survol */
}



{# 

    FOOTER

#}

footer .bottom-bar {
    background: <?php echo $bgFooter ?>;
}

.wave-container {
    position: relative;
    width: 100%;
    overflow: hidden;
    line-height: 0;
}

.wave-container svg {
    position: relative;
    display: block;
    width: calc(100% + 1.3px);
    height: 75px;
}

footer i {
    font-size:1rem;
}

footer a {
    text-decoration:none;
    color: <?php echo $textFooter; ?>;
}


{# 

    BUTTONS
    
#}


.btn-services {
    background-color: <?php echo htmlspecialchars($config['site']['error_color']); ?> !important;
    color: <?php echo htmlspecialchars($config['site']['bg_body_color']); ?> !important;
}

.btn-contact {
    background-color: <?php echo htmlspecialchars($config['site']['bg_body_color']); ?> !important;
    border:1px solid <?php echo htmlspecialchars($config['site']['text_color']); ?>;
    color: <?php echo htmlspecialchars($config['site']['text_color']); ?> !important;

}

.rounded-circle {
    border: 8px solid <?php echo htmlspecialchars($config['site']['secondary_color']); ?>;
}

{# 

    NOTRE APPROCHE

#}

.approach {
    height:300px;
    background:url('../images/approach.jpg') no-repeat;
    background-size: 100%;
    background-position: center;
    border-radius:10px;
}


{# 

    NOS VALEURS

#}

#values .col-md-2:hover .value-icon {
    transform: scale(1.2); /* Effet de zoom au survol */
}




{# 
 
    COMMON CLASSES
    
#}

.fw-bold {
    font-weight: 900;
}

.small-text {
    font-size:1rem !important;

}  

{#
    caroussel
#}

.carousel-item {
    min-height: 290px !important; /* Hauteur fixe du carrousel */
}

.carousel-item > div {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
}

.carousel-control-prev, .carousel-control-next {
    fill: <?php echo $textProfils ?>;
}


{# 

    RESPONSIVE

#}

@media (max-width: 991.98px) {
    .navbar-dark .navbar-nav .nav-link.contact {
        border: none;
        border-radius: 0;
        background: none;
        color: inherit;
        font-weight: normal;
        margin:0 !important;
    }
}