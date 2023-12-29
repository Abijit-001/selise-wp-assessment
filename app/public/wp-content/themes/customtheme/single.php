<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        nav {
            background-color: #444;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        main img {
            max-width: 100%;
            height: auto;
        }

        main h2 {
            color: #333;
        }

        main p {
            color: #555;
            line-height: 1.6;
        }

        main .post-meta {
            font-size: 14px;
            color: #777;
            margin-top: 10px;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>

<body <?php body_class(); ?>>

    <header>
        <h1><?php bloginfo('name'); ?></h1>
        <p><?php bloginfo('description'); ?></p>
    </header>
    <main>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article <?php post_class(); ?>>
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('large'); ?>
                    <?php endif; ?>
                    <h2><?php the_title(); ?></h2>

                    <?php the_content(); ?>

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