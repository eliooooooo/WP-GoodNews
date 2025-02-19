<?php

class Good_News_Gen {

    public function run() {
        // Enregistrer les scripts et les styles
        add_action('wp_enqueue_scripts', [$this, 'enqueue_scripts']);
    
        // Initialiser les hooks personnalisés
        add_action('init', [$this, 'custom_init']);
    
        // Enregistrer les widgets Elementor
        add_action('elementor/widgets/widgets_registered', [$this, 'register_widgets']);
    
        // Ajouter des shortcodes si nécessaire
        add_shortcode('wp_goodnews', [$this, 'wp_goodnews_shortcode']);
    }
    
    // Fonction pour enregistrer les scripts et les styles
    public function enqueue_scripts() {
        wp_enqueue_style('wp-goodnews-style', plugin_dir_url(__FILE__) . '../assets/css/style.css');
        wp_enqueue_script('wp-goodnews-script', plugin_dir_url(__FILE__) . '../assets/js/script.js', [], null, true);
    }
    
    // Fonction pour initialiser des hooks personnalisés
    public function custom_init() {
    }
    
    // Fonction pour enregistrer les widgets Elementor
    public function register_widgets() {
        require_once plugin_dir_path(dirname(__FILE__)) . 'widgets/widget.php';
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Good_News_Widget());
    }
    
    // Fonction pour ajouter un shortcode
    public function wp_goodnews_shortcode() {
        ob_start();
        ?>
        <div class="wp-goodnews-content"></div>
        <?php
        return ob_get_clean();
    }
    
}
