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
     * @param $contentname
     * @param $metadata
     */
    public function __construct($postname, $contentname,$metadata){
        $this->postname = $postname;
        $this->contentname = $contentname;
        $this->metadata = $metadata;

    }

    
 

}
