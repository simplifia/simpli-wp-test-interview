<?php
/*
Plugin Name: simpli-wp-cerenomy-streaming
Description: Ceremony streaming
Author: Simplifia
Version: 1.0
*/

namespace SimpliCeremonyStreamingPlugin;
use \SimpliCeremonyStreamingPlugin\Models\Singleton;

include_once plugin_dir_path(__FILE__).'/Autoloader.php';
include_once plugin_dir_path(__FILE__).'/Models/Singleton.php';

class SimpliCeremonyStreamingPlugin extends Singleton
{

    public function __construct()
    {
        include_once plugin_dir_path( __FILE__ ).'/CeremonyStreaming.php';
        new CeremonyStreamingPlugin();
    }

}
Autoloader::register();
\SimpliCeremonyStreamingPlugin\SimpliCeremonyStreamingPlugin::GetInstance();


