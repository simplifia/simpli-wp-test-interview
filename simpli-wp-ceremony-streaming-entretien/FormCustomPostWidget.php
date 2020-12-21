<?php

namespace SimpliCeremonyStreamingPlugin;

class FormCustomPostWidget
{

    public function __construct()
    {
        // add to admin menu a section for the plugin
        add_action('admin_menu', function () {
            add_menu_page(
                'Create new Post',
                'simpli-wp-cerenomy-streaming',
                'manage_options',
                'custom-form-post',
                array($this, 'form')
            );
        });
    }

    public function form()
    {
        echo '<h1> Test </h1>';
    }
}
