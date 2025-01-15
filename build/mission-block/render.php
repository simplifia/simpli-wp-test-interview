<?php
function render_mission_block( $attributes ) {
    $text = $attributes['text'] ?? 'Hello World';
    $backgroundColor = $attributes['backgroundColor'] ?? '#ffffff';
    $borderColor = $attributes['borderColor'] ?? '#000000';
    
    ob_start();
    ?>
    <div
            class="wp-block-create-block-mission-block reverse-text-button"
            style="background-color: <?php echo esc_attr($backgroundColor); ?>;
                    border: 2px solid <?php echo esc_attr($borderColor); ?>;
                    padding: 10px;"
    >
        <p class="block-text"><?php echo esc_html($text); ?></p>
    </div>
    <?php
    return ob_get_clean();
}
