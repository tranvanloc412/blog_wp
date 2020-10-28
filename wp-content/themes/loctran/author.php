<?php get_header(); ?>

<!-- thumbnail: feature image -->
<div class="content">

	<section id="main-content">

		<div class="author-box">
			<?php
			echo '<div class="author-avatar"> '. get_avatar(get_the_author_meta('ID')) . '</div>'; 
			printf( '<h3>'. __('Posts by %1$s', 'loctran') . '</h3>', get_the_author());
			echo '<p>' . get_the_author_meta('desciption') . '</p>';
			if (get_the_author_meta('user_url')) : 
				printf(__('<a href="%1$s" title="Visit to %2$s website"> Visit to my website</a>', 'loctran'), get_the_author_meta('user_url'), get_the_author());
			endif;
			?>

		</div>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
			<?php get_template_part( 'content', get_post_format() ); ?> 

		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
	</section>

	<section id="sidebar">
		<?php get_sidebar() ?>
	</section> 
</div>

<?php get_footer(); ?>