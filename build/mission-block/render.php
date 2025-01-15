<?php
function render_mission_block( $attributes ) {
    $text = $attributes['text'] ?? 'Hello World';
    $backgroundColor = $attributes['backgroundColor'] ?? '#ffffff';
    $borderColor = $attributes['borderColor'] ?? '#000000';

    // Générer le HTML du bloc
    return sprintf(
        '<div class="wp-block-create-block-mission-block" style="background-color: %s; border: 2px solid %s; padding: 10px;">
            <p id="block-text">%s</p>
            <script>
                if (typeof wp === "undefined" || !wp.isEditor) {
                    document.addEventListener("DOMContentLoaded", function () {
                        const button = document.querySelector(".reverse-text-button");
                        const textElement = document.getElementById("block-text");
                        if (button && textElement) {
                            button.addEventListener("click", function () {
                                textElement.textContent = textElement.textContent.split("").reverse().join("");
                            });
                        }
                    });
                }
            </script>
        </div>',
        esc_attr( $backgroundColor ),
        esc_attr( $borderColor ),
        esc_html( $text )
    );
}
