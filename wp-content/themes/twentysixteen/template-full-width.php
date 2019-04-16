<?php /* Template Name: Full Width Template */ ?>
<?php get_header(); ?>
<div id="primary" class="content-area">
	<section id="titlebar">
		<div class="container">
			<div class="twelve columns">
				<h2><?php wp_title('', true,''); ?></h2>
			</div>
		</div>
	</section>
	<div id="content-wrapper">
		<div id="content-container" class="container">
			<div class="sixteen columns">
				<section class="page-content">
					<main id="main" class="site-main" role="main">
					<?php
					while ( have_posts() ) : the_post();
						echo the_content();
					endwhile;
					?>
					</main>
				</section>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>