<?php
 
if ( is_active_sidebar( 'custom-header-widget' ) ) : ?>
    <div id="header-widget-area" class="chw-widget-area widget-area" role="complementary">
    <?php dynamic_sidebar( 'custom-header-widget' ); ?>
    </div>
     
<?php endif; ?>


<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
	<meta charset=<?php bloginfo( 'charset' ); ?>>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
	<header class="top-header">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-auto">
					<ul class="top-header_support">
						<li>
							<a href="/">Support</a>
						</li>
						<li>
							<a href="/">Documentation</a>
						</li>
						<li>
							<a href="/">Blog</a>
						</li>
					</ul>
				</div>
				<div class="col-auto">
					<ul class="top-header_contact-list">
						<li>
							<a href="/">(123)456-7890</a>
						</li>
						<li>
							<a href="/">example@domain.com</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>

	<div class="logo">
		<?php 
		printf(
			'<a href="/"><img src="%1$s" /></a>',
			get_bloginfo( 'url' ) . '/wp-content/themes/loctran/assets/img/logo.png'
		);
		?>
	</div>

	<div class="menu">
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					icons
				</div>
				<div class="col-md-8">
					<?php loctran_menu('primary-menu') ?>
				</div>
				<div class="col-md-2">
					search
				</div>
			</div>
		</div>
	</div>

	<div class="hero">
		<div class="container">
			<div class="row">
				img
			</div>
		</div>
	</div>
	


