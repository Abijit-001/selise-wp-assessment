<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>

<body <?php body_class(); ?>>

    <header>
        <h1><?php bloginfo('name'); ?></h1>
        <p><?php bloginfo('description'); ?></p>
    </header>

    <main>
        <h2>Latest Posts</h2>
        <div class="category-dropdown">
            <button class="button">View Categories</button>
            <div class="category-dropdown-content">
                <?php
                $categories = get_categories();
                foreach ($categories as $category) :
                    echo '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . $category->name . '</a>';
                endforeach;
                ?>
            </div>
        </div>

        <section class="latest-posts">

            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
            ?>
                    <article <?php post_class(); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                        <?php endif; ?>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php the_excerpt(); ?>
                        <div class="post-meta">
                            <span>By <?php the_author(); ?></span>
                            <span> | </span>
                            <span><?php the_time('F j, Y'); ?></span>
                            <?php if (has_tag()) : ?>
                                <span> | </span>
                                <span>Tags: <?php the_tags('', ', ', ''); ?></span>
                            <?php endif; ?>
                        </div>
                    </article>
            <?php
                endwhile;
            else :
                echo 'No posts found';
            endif;
            ?>
        </section>

        <section class="latest-books">
            <?php
            $latest_books_query = new WP_Query(array(
                'post_type' => 'book',
                'posts_per_page' => 5,
            ));

            if ($latest_books_query->have_posts()) :
            ?>
                <h2>Latest Books</h2>
                <?php
                while ($latest_books_query->have_posts()) : $latest_books_query->the_post();
                ?>
                    <article <?php post_class(); ?>>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p>Author: <?php echo esc_html(get_post_meta(get_the_ID(), '_author_name', true)); ?></p>
                        <p>Email: <?php echo esc_html(get_post_meta(get_the_ID(), '_author_email', true)); ?></p>
                        <p>Category: <?php echo esc_html(get_post_meta(get_the_ID(), '_category', true)); ?></p>
                        <div><?php the_excerpt(); ?></div>

                    </article>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo 'No books found';
            endif;
            ?>
        </section>


    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
    </footer>

    <?php wp_footer(); ?>
</body>

</html>