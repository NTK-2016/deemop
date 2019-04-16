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
	
	<div class="eleven alt columns">
      <section class="page-content">
                <a id="main-content"></a>
         <div class="tabs"></div><div class="region region-content">
    <article id="node-48" class="node node-page node-page post" about="/fund/performance-information" typeof="foaf:Document">
      <section class="content-section">
    <div class="field field-name-body field-type-text-with-summary field-label-hidden"><div class="field-items"><div class="field-item even" property="content:encoded">
		<?php the_content(); ?>		
		<div class="clearfix"></div>
		</div></div></div>      </section>
  <div class="clearfix"></div>

  </article>




  </div>
              </section>
    </div>
	<?php include 'template-right-sidebar.php'; ?>
	</div>                 
  <?php endif; ?>
</div>   
<?php get_footer(); ?>