<?php

class Good_News_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'wp_goodnews';
    }

    public function get_title() {
        return __('Good News Bloc', 'wp-goodnews');
    }

    public function get_icon() {
        return 'eicon-hypster';
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
