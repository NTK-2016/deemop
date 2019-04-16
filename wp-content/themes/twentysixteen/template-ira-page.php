<?php /* Template Name: IRA Template */ ?>
<?php get_header(); ?>
<section id="titlebar">
	<div class="container">
		<div class="twelve columns">
			<h2><?php wp_title('', true,''); ?></h2>
		</div>
	</div>
</section>
<div id="content-wrapper">
	<?php
	if ( have_posts() ) : the_post(); ?>
		<div id="content-container" class="container">
			<?php the_content(); ?>
			<?php include 'template-right-sidebar.php'; ?>
			<div class="clearfix"></div>
		</div>                 
	<?php endif; ?>
</div>
<?php get_footer(); ?>