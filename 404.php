<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package soapatricksix
 */

get_header(); ?>
    <div class="site-content">
	    <div class="container">
			<article>
				<header class="page-header padding-indent">
					<h1 class="title-large"><?php esc_html_e( 'Not the Page you were looking for!', 'soapatricksix' ); ?></h1>
				</header>
				<hr class="margin-extend">
				<div class="page-content padding-indent">
					<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'soapatricksix' ); ?></p>
					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
				</div>				
			</article>
		</div>
	</div>
<?php
get_footer();
