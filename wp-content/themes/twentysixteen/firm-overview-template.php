<?php /* Template Name: Firm Overview */ ?>
<?php get_header(); ?>
<div id="content-wrapper">
    <div id="content-container" class="container">
	<?php	if ( have_posts() ) : the_post(); ?>
		<div class="eleven alt columns">
		   <section class="page-content">
			  <a id="main-content"></a>
			  <div class="tabs"></div>
			  <div class="region region-content">
				 <article id="node-45" class="node node-page node-page post" about="/about/firm-overview" typeof="foaf:Document">
					<section class="content-section">
					   <div class="field field-name-body field-type-text-with-summary field-label-hidden">
						  <div class="field-items">
							 <div class="field-item even" property="content:encoded">
								<h2>
								   <?php echo get_the_title( $ID ); ?>
								</h2>
								<?php echo the_content(); ?>
							</div>
						  </div>
					   </div>
					</section>
					<div class="clearfix"></div>
				 </article>
			  </div>
		   </section>
		</div>
	<?php endif; ?>
	<?php include 'template-right-sidebar.php'; ?>
	</div>
</div>
<?php get_footer(); ?>