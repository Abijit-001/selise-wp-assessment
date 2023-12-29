<?php
add_action('wp_enqueue_scripts', 'enqueue_child_theme_styles');
function enqueue_child_theme_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_footer', 'debug_book_custom_fields');
function debug_book_custom_fields()
{
    global $post;

    if (is_singular('book') && $post) {
        $author_name = get_post_meta($post->ID, '_author_name', true);
        $author_email = get_post_meta($post->ID, '_author_email', true);
        $category = get_post_meta($post->ID, '_category', true);

        echo '<!-- Debug: Author Name: ' . esc_html($author_name) . ', Author Email: ' . esc_html($author_email) . ', Category: ' . esc_html($category) . ' -->';
    }
}
