
<?php



?>

<?php
// Charger la configuration depuis le fichier JSON
require_once('gestion_lang.php');


// Déterminer la page à afficher
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$pages = ['home', 'mention_legales', 'condition_generales_utilisation', 'politique_cookies'];

if (!in_array($page, $pages)) {
    $page = 'home';
}

$title = $config['pages'][$page]['title'] ?? '';
$content = $config['pages'][$page]['content'] ?? '';

    include 'templates/header.php';
    include "templates/{$page}.php";
    include 'templates/footer.php';

?>

<script>
    
  </script>