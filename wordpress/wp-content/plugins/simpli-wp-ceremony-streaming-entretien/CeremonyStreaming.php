<?php
namespace SimpliCeremonyStreamingPlugin;
class CeremonyStreamingPlugin
{
    public function __construct()
    {
        define('URL_SPHINX_BROADCAST','https://toto.fr');
        include_once plugin_dir_path( __FILE__ ).'/CeremonyStreamingWidget.php';
        //TODO utse WP widget in TunobWidget add_action('widgets_init', function(){register_widget('TunobWidget');});
        add_action('init', function (){
            new CeremonyStreamingWidget();
        });


    }
}

