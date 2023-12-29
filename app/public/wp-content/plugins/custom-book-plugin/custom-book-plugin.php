<?php
/*
Plugin Name: Custom Book Plugin
Description: Adds a custom post type for books.
Version: 1.0
Author: Abijit Barua
*/


function custom_book_register_post_type()
{
    register_post_type(
        'book',
        array(
            'labels' => array(
                'name' => 'Books',
                'singular_name' => 'Book',
                'add_new' => 'Add New Book',
                'add_new_item' => 'Add New Book',
                'edit_item' => 'Edit Book',
                'view_item' => 'View Book',
                'search_items' => 'Search Books',
                'not_found' => 'No books found',
                'not_found_in_trash' => 'No books found in trash',
            ),
            'public' => true,
            'menu_icon' => 'dashicons-book',
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
            'rewrite' => array('slug' => 'book'),
            'has_archive' => true,
            'hierarchical' => false,
        )
    );


    add_action('add_meta_boxes', 'custom_book_add_meta_box');
}
add_action('init', 'custom_book_register_post_type');


function custom_book_add_meta_box()
{
    add_meta_box(
        'book_meta_box',
        'Book Details',
        'custom_book_render_meta_box',
        'book',
        'normal',
        'high'
    );
}



function custom_book_render_meta_box($post)
{

    $author_name = get_post_meta($post->ID, '_author_name', true);
    $author_email = get_post_meta($post->ID, '_author_email', true);
    $category = get_post_meta($post->ID, '_category', true);


?>
    <label for="author_name">Author Name:</label>
    <input type="text" id="author_name" name="author_name" value="<?php echo esc_attr($author_name); ?>"><br>

    <label for="author_email">Author Email:</label>
    <input type="text" id="author_email" name="author_email" value="<?php echo esc_attr($author_email); ?>"><br>

    <label for="category">Category:</label>
    <input type="text" id="category" name="category" value="<?php echo esc_attr($category); ?>"><br>

    <input type="hidden" name="custom_book_meta_box_nonce" value="<?php echo wp_create_nonce('custom_book_nonce'); ?>">
<?php
}



function custom_book_save_meta_box($post_id)
{

    if (!isset($_POST['custom_book_meta_box_nonce']) || !wp_verify_nonce($_POST['custom_book_meta_box_nonce'], 'custom_book_nonce')) {
        return;
    }


    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }


    if ('book' === $_POST['post_type'] && !current_user_can('edit_page', $post_id)) {
        return;
    }


    if (isset($_POST['author_name'])) {
        update_post_meta($post_id, '_author_name', sanitize_text_field($_POST['author_name']));
    }

    if (isset($_POST['author_email'])) {
        update_post_meta($post_id, '_author_email', sanitize_text_field($_POST['author_email']));
    }

    if (isset($_POST['category'])) {
        update_post_meta($post_id, '_category', sanitize_text_field($_POST['category']));
    }


    error_log('Author Name: ' . sanitize_text_field($_POST['author_name']));
    error_log('Author Email: ' . sanitize_text_field($_POST['author_email']));
    error_log('Category: ' . sanitize_text_field($_POST['category']));
}
add_action('save_post', 'custom_book_save_meta_box');


function custom_book_add_nonce()
{
    wp_nonce_field('custom_book_nonce', 'custom_book_meta_box_nonce');
}
add_action('add_meta_boxes_book', 'custom_book_add_nonce');
