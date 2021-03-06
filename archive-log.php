<?php
/**
Template Name: Archives Change Logs
 */

get_header(); ?>
    <div class="site-content">
	    <div class="grid container">
			<article>	    
				<header class="page-header">
					<h1 class="title-large">Change Log</h1>
				</header>
				<hr>
				<div class="page-content page-content--changelog">
					<?php				
					if ( have_posts() ) :					
						$day_check = '';
						while (have_posts()) : the_post();
							$day = get_the_date('j');
							if ($day != $day_check) {
								if ($day_check != '') {
									echo '</ul>';
								}
								echo '<h2>' . get_the_date() . '</h2><ul class="fa-ul changes">';
							}
							$field = get_field_object('changelog_type');
							$value = $field['value'];
							$label = $field['choices'][ $value ];?>
							<li><span class="fa-li"><i class="<?php echo $value ?>"></i></span><strong><?php echo $label ?></strong> <?php the_title(); ?></li>
							<?php $day_check = $day;
						endwhile;		
					endif; 
	
					?>
				</div>
			</article>
			<nav class="navigation posts-navigation">
				<div class="nav-links">
					<div class="nav-next"><?php previous_posts_link( 'Newer Logs' ); ?></div>
					<div class="nav-previous"><?php next_posts_link( 'Older Logs', '' ); ?></div>
				</div>				
			</nav>
		</div>
	</div>
<?php
get_footer();