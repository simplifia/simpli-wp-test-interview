<?php
/*
Plugin Name: simpli-wp-test-interview
Description: TEST
Author: Simplifia & Balr0g404 (Audran Scieur)
Version: 1.1
*/

namespace SimpliCeremonyStreamingPlugin;

use SimpliCeremonyStreamingPlugin\Models\Singleton;

include_once plugin_dir_path(__FILE__) . '/Autoloader.php';
include_once plugin_dir_path(__FILE__) . '/Models/Singleton.php';

class SimpliCeremonyStreamingPlugin extends Singleton
{
    public function __construct()
    {
        include_once plugin_dir_path(__FILE__) . '/CeremonyStreaming.php';
        include_once plugin_dir_path(__FILE__) . 'build/mission-block/render.php';

        new CeremonyStreamingPlugin();

        add_action('init', [$this, 'register_mission_block']);

        add_action('admin_menu', [$this, 'add_admin_menu_page']);
    }

    /**
     * Enregistrement du bloc "Mission Block".
     */
    public function register_mission_block()
    {
        register_block_type(
            plugin_dir_path(__FILE__) . 'build/mission-block/block.json',
            [
                'render_callback' => 'render_mission_block',
            ]
        );
    }

    /**
     * Ajouter la page d'administration
     */
    public function add_admin_menu_page()
    {
        add_menu_page(
            'Simpli WP Test',
            'Simpli WP Test',
            'manage_options',
            'simpli-wp-test',
            [$this, 'render_admin_page'],
            'dashicons-welcome-write-blog',
            2
        );
    }

    /**
     * Afficher la page d'administration
     */
    public function render_admin_page()
    {
        if (isset($_POST['simpli_test_create_post'])) {
            $this->process_form();
        }
        $this->render_template('admin-page', []);
    }

    /**
     * Traiter le formulaire pour enregistrer un post et sa métadonnée
     */
    private function process_form()
    {
        if (empty($_POST['post_title']) || empty($_POST['post_content'])) {
            echo '<div class="error notice"><p>Veuillez remplir tous les champs obligatoires.</p></div>';
            return;
        }

        $new_post = [
            'post_title'   => sanitize_text_field($_POST['post_title']),
            'post_content' => sanitize_textarea_field($_POST['post_content']),
            'post_status'  => 'publish',
            'post_type'    => 'post',
        ];

        $post_id = wp_insert_post($new_post);

        if ($post_id && !is_wp_error($post_id)) {
            if (!empty($_POST['post_mymeta'])) {
                $meta_value = sanitize_text_field($_POST['post_mymeta']);
                update_post_meta($post_id, 'mymeta', $meta_value);
            }

            $this->render_template('form-success', ['post_id' => $post_id]);
        } else {
            $this->render_template('form-error', []);
        }
    }

    /**
     * Charger un template depuis le répertoire 'templates'
     */
    private function render_template($template_name, $data = [])
    {
        $template_file = plugin_dir_path(__FILE__) . "templates/{$template_name}.php";
        if (file_exists($template_file)) {
            extract($data);
            include $template_file;
        } else {
            echo '<div class="error notice"><p>Le template demandé n\'existe pas : ' . esc_html($template_name) . '</p></div>';
        }
    }
}

Autoloader::register();

SimpliCeremonyStreamingPlugin::GetInstance();
