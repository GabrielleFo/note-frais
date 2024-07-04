<?php

function handle_validation() {
    if (isset($_POST['valider_n1'])) {
        $post_id = intval($_POST['post_id']);
        wp_update_post(array(
            'ID' => $post_id,
            'post_status' => 'validated_by_n1'
        ));
    }

    if (isset($_POST['valider_compta'])) {
        $post_id = intval($_POST['post_id']);
        wp_update_post(array(
            'ID' => $post_id,
            'post_status' => 'validated_by_compta'
        ));
    }
}
add_action('init', 'handle_validation');

