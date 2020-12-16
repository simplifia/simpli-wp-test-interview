<?php
/**
 * Created by PhpStorm.
 * User: mayssa
 * Date: 09/05/18
 * Time: 09:28
 */
namespace SimpliCeremonyStreamingPlugin\Models;


class View {
    private $postname;
    private $contentname;
    private $metadata;

    /**
     * View constructor.
     *
     * @param $postname
     * @param $postcontent
     * @param $metadata
     */
    public function __construct($postname, $postcontent,$metadata){
        $this->postname = $postname;
        $this->postcontent = $postcontent;
        $this->metadata = $metadata;

    }

    
 

}
