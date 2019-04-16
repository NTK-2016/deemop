<?php /* Template Name: Investing Template */ ?>
<?php get_header(); ?>
<section id="titlebar-blank">&nbsp;</section>
<div id="content-wrapper">
   <?php if( get_field('investing_title') ){ ?>
   <section class="content-top">
      <div class="container">
         <div class="sixteen columns">
            <div class="region region-content-top">
               <div id="block-block-12" class="block block-block">
                  <div class="content">
                     <h1 class="center">
                        <?php the_field('investing_title'); ?>
                     </h1>
                     <p class="center"><?php the_field('investing_short_descriptions'); ?></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <?php } 
   if ( have_posts() ) : the_post(); ?>
	<div id="content-container" class="container">
		<?php the_content(); ?>
		<?php include 'template-right-sidebar.php'; ?>
		<div class="clearfix"></div>
	</div>                 
  <?php endif; ?>
</div>   
<?php get_footer(); ?>