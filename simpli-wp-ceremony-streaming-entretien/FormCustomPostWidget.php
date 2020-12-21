<?php

namespace SimpliCeremonyStreamingPlugin;

use SimpliCeremonyStreamingPlugin\Models\CustomPost;
use SimpliCeremonyStreamingPlugin\Models\View;

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
        // if form submited insert data in db
        if (isset($_POST) && isset($_POST['submit'])) {
            // get id of inserted post
            $newPost = new CustomPost(
                [
                    'postName' => $_POST['post_name'],
                    'postContent' => $_POST['post_content'],
                    'postMeta' => $_POST['post_meta']
                ]
            );
            $newPost->save();
        }
        $this->formPostView = new View(plugin_dir_path(__FILE__) . 'Views/FormCustomPostView.php', []);
        $this->formPostView->Render(array('broadcast' => null));
    }
}
