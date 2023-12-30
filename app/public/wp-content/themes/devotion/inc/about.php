<?php
/**
 * Theme About Page
 *
 * @package Devotion
 * @since 1.0
 */

function devotion_theme_page_admin_style( $hook ) {
	if ( 'appearance_page_devotion-theme' === $hook ) {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'devotion-theme-admin-style',
			get_theme_file_uri( 'assets/css/about-admin.css' ),
			array(),
			$version_string
		);
	}
}
add_action( 'admin_enqueue_scripts', 'devotion_theme_page_admin_style' );

/**
 * Add theme page
 */
function devotion_menu() {
	add_theme_page( esc_html__( 'Devotion', 'devotion' ), esc_html__( 'Devotion Theme Info', 'devotion' ), 'edit_theme_options', 'devotion-theme', 'devotion_theme_page_display' );
}
add_action( 'admin_menu', 'devotion_menu' );

/**
 * Display About page
 */
function devotion_theme_page_display() {
	$theme = wp_get_theme();
	
	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}
	?>
	
	<div id="welcome-panel" class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2><?php echo esc_html( $theme->Name ); ?></h2>
				<p><?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'devotion' ); ?></p>
				<div class="logo-panel">
					<a href="<?php echo esc_url('https://flythemes.net/','devotion'); ?>"><img src="<?php echo esc_url( get_template_directory_uri().'/images/flylogo.png' ); ?>"></a>
				</div>
			</div>
			
			<div class="welcome-panel-column-container">
				<div class="container-wrap">
					<div class="welcome-panel-column two-columns">
						<!-- <div class="welcome-panel-icon-pages"></div> -->
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Getting Started with Devotion!', 'devotion' ); ?></h3>
							<p><?php esc_html_e( 'Awesome! Devotion has been installed and activated successfully. Now, you can start building your dream website with a wide range of highly-customizable block patterns, templates, and template parts available in this astounding theme.', 'devotion' ); ?></p>
						</div>
					</div>
					
					<div class="welcome-panel-column two-columns">
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'More Features with Devotion Pro Theme', 'devotion' ); ?></h3>
							<p><?php esc_html_e( 'To get more features and unique home page sections, we recommend you activate the Devotion Pro. With the pro theme installed, get more options like google fonts, colors, sliders, page template, shortcodes and more.', 'devotion' ); ?></p>
							<a target="_blank" class="button green button-primary button-hero green" href=<?php echo esc_url("https://flythemes.net/wordpress-themes/devotion-wordpress-theme/"); ?>><?php esc_html_e( 'Buy Devotion Pro', 'devotion' ); ?></a>
						</div>
					</div>
					
				</div>
				<div class="sidebar">
					<div class="welcome-panel-column important-links">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Important Links', 'devotion' ); ?></h3>
						<a target="_blank" href="<?php echo esc_url( 'https://flythemes.net/wordpress-themes/devotion-wordpress-theme/' ); ?>"><?php esc_html_e( 'Theme Info', 'devotion' ); ?></a>
						<a target="_blank" href="https://flydemos.net/devotion/"><?php esc_html_e( 'View Demo', 'devotion' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( 'https://flythemes.net/forums/' ); ?>"><?php esc_html_e( 'Support', 'devotion' ); ?></a>
					</div>
				</div>
				
				<div class="welcome-panel-column review">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Leave us a review', 'devotion' ); ?></h3>
						<p><?php esc_html_e( 'Loved Devotion? Feel free to leave your feedback. Your opinion helps us reach more audiences!', 'devotion' ); ?></p>
						<a href="https://wordpress.org/support/theme/devotion/reviews/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Review', 'devotion' ); ?></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
