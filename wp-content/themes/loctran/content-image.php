<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-thumbnail">
		<?php loctran_thumbnail('large'); ?>
	</div>
	<div class="entry-header">
		<?php loctran_entry_header(); ?>
		<?php 
			$attachments = get_children(array('post_parent' => $post->ID));
			$attachment_number = count($attachments);
			printf(__('This image post contains %1$s photos', 'loctran'), $attachment_number);
		 ?>
	</div>
	<div class="entry-content">
		<?php loctran_entry_content(); ?>
		<?php is_single() ? loctran_entry_tag() : '' ?>	
	</div>
</article>