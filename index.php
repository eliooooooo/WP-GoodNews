<?php
/**
 * Plugin Name: WP Goods News
 * Description: Un générateur de bonnes nouvelles pour Elementor.
 * Version: 1.0
 * Author: eliooooooo
 */

// Empêche l'accès direct au fichier
if (!defined('ABSPATH')) {
    exit;
}

// Inclure les fichiers nécessaires
require_once plugin_dir_path(__FILE__) . 'includes/generator.php';

// Initialiser le plugin
function run_wp_goodnews() {
    $plugin = new Good_News_Gen();
    $plugin->run();
}
run_wp_goodnews();
