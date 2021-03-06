<?php
/**
 * Template part for displaying single factory item
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package soapatricksix
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post' ); ?>>
	<div class="grid">
		<nav class="breadcrumbs">
		    <span class="breadcrumbs--item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">SoaPatrick</a></span>						
		    <span class="breadcrumbs--item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>factory">Factory</a></span>
		    <span class="breadcrumbs--item__last"><?php the_title() ?></span>
		</nav>		
	</div>		
	<header class="grid blog-post-header"> 
		<?php the_title( '<h1 class="title-large">', '</h1>' ); ?>
	</header>					  
	<div class="grid blog-post-meta">
		<ul class="meta-wrapper fa-ul">
			<?php soapatricksix_posted_on(); ?>
			
			<li class="meta-wrapper--tags"><span class="fa-li"><i class="fal fa-tags fa-fw"></i></span>
			<?php $terms = get_the_terms( $post->ID , 'factory_tags' );
				$numItems = count($terms);
				$i = 0;
				foreach ( $terms as $term ) {
					echo '<a href="'.get_term_link($term).'">'.$term->name.'</a>';
					if(++$i != $numItems) {
						echo ', ';
					}									
				}
			?>
			</li>
			<?php edit_post_link('Edit', '<li><span class="fa-li"><i class="fal fa-pencil fa-fw"></i></span>','</li>'); ?>			
		</ul>
	</div>
	<div class="grid blog-post-content">
		<?php the_content('<strong>Continue Reading...</strong>'); ?>
	</div>
</article>