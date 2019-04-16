<?php /* Template Name: Contact Us */ ?>
<?php get_header(); ?>
<section id="titlebar">
	<div class="container">
		<div class="twelve columns">
			<h2>Contact Us</h2>
		</div>
	</div>
</section>
<div id="slider-wrapper">
   <div class="region region-slider">
      <div id="block-block-18" class="block block-block">
        <div class="content">
            <p><img alt="" class="full-width" src="<?php echo site_url('/wp-content/uploads/2018/06/map-block.jpg'); ?>" /></p>
        </div>
      </div>
   </div>
</div>
<?php
if ( have_posts() ) : the_post(); ?>
	<div id="content-wrapper">
	<?php echo the_content(); ?>
	  <div id="content-container" class="container">
	   <div class="eleven alt columns">
		  <section class="page-content">
			 <a id="main-content"></a>
			 <div class="tabs"></div>
			 <div class="region region-content">
				<div id="block-webform-client-block-51" class="block block-webform">
				   <h2>Contact Form</h2>
				   <div class="content">
					  <?php echo do_shortcode('[contact-form-7 id="434" title="Contact form 1"]'); ?>
				   </div> 
				</div>
				<article id="node-50" class="node node-page node-page post" about="/contact-us" typeof="foaf:Document">
				   <section class="content-section">
					  <header class="meta">
						 <span property="dc:title" content="Contact Us" class="rdf-meta element-hidden"></span><span property="sioc:num_replies" content="0" datatype="xsd:integer" class="rdf-meta element-hidden"></span>
					  </header>
				   </section>
				   <div class="clearfix"></div>
				</article>
			 </div>
		  </section>
	   </div>
	   <!-- Page Content / End -->
	   <?php if( get_field('add_details') ){ ?>
	   <div id="sidebar-second" class="five columns">
		  <aside class="sidebar">
			 <div class="section">
				<div class="region region-sidebar-second">
				   <div id="block-block-19" class="widget block block-block">
					  <div class="content">
						 <?php the_field('add_details'); ?>
					  </div>
				   </div>
				</div>
			 </div>
		  </aside>
	   </div>
	   <?php } ?>
	   <div class="clearfix"></div>
	</div>
  </div>
<?php endif; ?>	
<?php get_footer(); ?>