<?php

class Bonnes_Nouvelles_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'bonnes_nouvelles';
    }

    public function get_title() {
        return __('Good News Bloc', 'wp-goodnews');
    }

    public function get_icon() {
        return 'eicon-code';
    }

    public function get_categories() {
        return ['general'];
    }

    protected function _register_controls() {
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<div class="wp-goodnews-content">[WP GoodNews bloc]</div>';
    }
}
