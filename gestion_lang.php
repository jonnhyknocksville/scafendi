<?php
// Définir la durée de vie du cookie (par exemple, 30 jours)
$cookie_duration = time() + (86400 * 30); // 86400 = 1 jour

// Vérifier si une langue est définie via GET ou Cookie
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    setcookie('lang', $lang, $cookie_duration, "/"); // Définir le cookie pour 30 jours
} elseif (isset($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];
} else {
    // Langue par défaut si aucune n'est définie
    $lang = 'fr';
    setcookie('lang', $lang, $cookie_duration, "/"); // Définir le cookie par défaut
}

// Charger le fichier JSON correspondant à la langue
$lang_file = __DIR__ . '/' . $lang . '.json';

if (file_exists($lang_file)) {
    $config = json_decode(file_get_contents($lang_file), true);
} else {
    // Si le fichier de langue n'existe pas, charger la langue par défaut
    $config = json_decode(file_get_contents(__DIR__ . '/ho.json'), true);
}
?>
