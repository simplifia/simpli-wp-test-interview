<?php

namespace SimpliCeremonyStreamingPlugin\Models;

class CustomPost
{
    public int $postId;
    public string $postName;
    public string $postContent;
    public string $postMeta;

    public function __construct($data = [])
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }

    public function save()
    {
        $this->postId = wp_insert_post(array(
            'post_name' => $this->postMeta,
            'post_content' => $this->postContent
        ));
        add_post_meta($this->postId, 'mymeta', $this->postMeta, true);
    }
}
