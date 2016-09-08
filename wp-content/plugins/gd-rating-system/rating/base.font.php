<?php

if (!defined('ABSPATH')) exit;

abstract class gdrts_font {
    public $status = 'hold';

    public $version = '';
    public $name = '';
    public $label = '';

    public $icons = array();

    public $active = array(
        'stars-rating'
    );

    public function __construct() {
        if (in_array('stars-rating', $this->active)) {
            add_action('gdrts_pre_load_method_stars-rating', array($this, 'settings_stars_rating'));
        }
    }

    protected function option_name($prefix = '') {
        return $prefix.'style_'.$this->name.'_name';
    }
    
    protected function hook_name($name) {
        return 'gdrts_'.$name.'_'.$this->name;
    }

    public function actions() {
        $this->status = 'active';

        add_action('gdrts_enqueue_core_files', array($this, 'enqueue_core_files'));

        add_filter('gdrts_list_stars_style_types', array($this, 'list_style_types'));

        add_filter('gdrts_embed_function_defaults_method', array($this, 'embed_defaults_method'));

        add_filter('gdrts_widget_settings_defaults', array($this, 'widget_settings'));
        add_filter('gdrts_widget_settings_save', array($this, 'widget_save'), 10, 2);
        add_action('gdrts_widget_display_types', array($this, 'widget_display'), 10, 3);
        add_action('gdrts_widget_default_keys', array($this, 'widget_default_keys'));

        add_filter('gdrts_shortcode_attributes', array($this, 'shortcode_attributes'), 10, 2);

        if (in_array('stars-rating', $this->active)) {
            add_filter('gdrts_shared_settings_stars-rating', array($this, 'shared_settings_stars_rating'), 10, 5);
        }
    }

    public function default_star() {
        $icons = array_keys($this->icons);
        return reset($icons);
    }

    public function get_stars_list() {
        return apply_filters($this->hook_name('list_stars_styles_icons'), wp_list_pluck($this->icons, 'label'));
    }

    public function get_star_char($name) {
        if (!isset($this->icons[$name]) || empty($name)) {
            $name = $this->default_star();
        }

        return $this->icons[$name]['char'];
    }

    public function enqueue_core_files() { }

    public function widget_default_keys($keys) {
        $keys[] = $this->option_name();

        return $keys;
    }

    public function list_style_types($list) {
        $list[$this->name] = $this->label;

        return $list;
    }

    public function shortcode_attributes($settings, $shortcode) {
        $settings[$this->option_name()] = '';

        return $settings;
    }

    public function embed_defaults_method($settings) {
        $settings[$this->option_name()] = '';

        return $settings;
    }

    public function widget_settings($settings) {
        $settings[$this->option_name()] = '';

        return $settings;
    }

    public function widget_save($instance, $new_instance) {
        $instance[$this->option_name()] = d4p_sanitize_basic($new_instance[$this->option_name()]);

        return $instance;
    }

    public function widget_display($widget, $instance, $method = 'stars-rating') {
        $_name = $this->option_name();
        $_list = array();

        switch ($method) {
            default:
            case 'stars-rating':
                $_list = $this->get_stars_list();
                break;
        }

        echo '<label for="'.$widget->get_field_id($_name).'">'.$this->label.':</label>';
        d4p_render_select($_list, array('id' => $widget->get_field_id($_name), 'class' => 'widefat', 'name' => $widget->get_field_name($_name), 'selected' => $instance[$_name]));
    }

    public function settings_stars_rating() {
        gdrts_settings()->register('methods', $this->option_name('stars-rating_'), $this->default_star());
    }

    public function shared_settings_stars_rating($settings, $type, $real_prefix, $prefix, $prekey) {
        $_name = $this->option_name();

        array_splice($settings['msr_style']['settings'], 3, 0, 
            array(new d4pSettingElement($real_prefix, gdrtsm_stars_rating()->key($_name, $prekey), $this->label, '', d4pSettingType::SELECT, gdrtsm_stars_rating()->get($_name, $prefix, $prekey), 'array', $this->get_stars_list(), array('wrapper_class' => 'gdrts-select-type gdrts-sel-type-'.$this->name.' '.($type == $this->name ? 'gdrts-select-type-show' : ''))))
        );

        return $settings;
    }
}
