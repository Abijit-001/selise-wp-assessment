<?php
get_header();
?>

<body <?php body_class(); ?>>

    <header>
        <h1><?php bloginfo('name'); ?></h1>
        <p><?php bloginfo('description'); ?></p>
    </header>

    <main>

        <?php
        echo '<h1>Output WooCommerce content</h1>';
        woocommerce_content();
        ?>

    </main>

    <?php
    get_footer();
    ?>
</body>

</html>