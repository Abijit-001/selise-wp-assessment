<?php
get_header();
?>


<body <?php body_class(); ?>>

    <header>
        <h1><?php bloginfo('name'); ?></h1>
        <p><?php bloginfo('description'); ?></p>
    </header>
    <main>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article <?php post_class(); ?>>
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                    <?php endif; ?>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>

                    <p><a href="<?php the_permalink(); ?>">Read more...</a></p>
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
        <?php endwhile;
        endif; ?>

    </main>


    <?php
    get_footer();
    ?>