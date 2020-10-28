<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-thumbnail">
		<?php loctran_thumbnail('thumbnail'); ?>
	</div>
	<div class="entry-header">
		<?php loctran_entry_header(); ?>
		<?php loctran_entry_meta(); ?>
	</div>
	<div class="entry-content">
		<?php loctran_entry_content(); ?>
		<?php is_single() ? loctran_entry_tag() : '' ?>	
	</div>
</article>