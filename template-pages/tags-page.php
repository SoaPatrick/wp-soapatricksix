<?php
/*
Template Name: Tags Page
*/

get_header(); ?>

    <div class="site-content tags-archive-list">
	    <div class="grid container">	
			<article>	
				<nav class="breadcrumbs">
				    <span class="breadcrumbs--item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">SoaPatrick</a></span>						
				    <span class="breadcrumbs--item__last">Tags</span>
				</nav>						    
				<header class="page-header">		
					<h1 class="title-large">Tags</h1>
				</header>
				<hr>
				<div class="page-content page-content--tag-archive">			    
					<?php the_widget( 'WP_Widget_Tag_Cloud', '', '' ); ?>
				</div>
			</article>
		</div>
	</div>

<?php get_footer();