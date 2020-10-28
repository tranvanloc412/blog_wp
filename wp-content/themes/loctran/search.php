<?php get_header(); ?>

<!-- thumbnail: feature image -->
<div class="content">

	<section id="main-content">
		<div class="search-info">
			<?php 
			$search_query = new WP_Query('s='.$s.'&showposts=-1');
			$search_keyword = esc_html( $s );
			$search_count = $search_query->post_count;

			printf( __('Search results for <strong>%1$s</strong>. We found <strong>%2$s</strong> articles for you.', 'loctran'), $search_keyword, $search_count );
			?>
		</div>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
			<?php get_template_part( 'content', get_post_format() ); ?> 

		<?php endwhile; ?>
		<?php loctran_pagination() ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
	</section>

	<section id="sidebar">
		<?php get_sidebar() ?>
	</section> 
</div>

<?php get_footer(); ?>