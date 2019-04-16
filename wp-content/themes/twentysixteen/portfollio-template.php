<?php /* Template Name: Portfollio */ ?>
<?php get_header(); ?>
<section id="titlebar-blank">&nbsp;</section>
	<?php 
	if ( have_posts() ) : the_post();
		echo the_content();
	endif; 
	?>
<div id="content-wrapper">
   <!-- Content top -->
   <?php if( get_field('add_title_blog') ){ ?>
   <section class="content-top">
      <div class="container">
         <div class="sixteen columns">
            <div class="region region-content-top">
               <div id="block-block-15" class="block block-block top-sectors">
                  <div class="content">
                     <h2 class="center margin-small-top-bottom">
                        <?php the_field('add_title_blog'); ?>
                     </h2>
                     <?php the_field('add_content_blog'); ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <?php } ?>
   <!-- Content top -->
   <div id="content-container" class="container">
      <!-- Page Content -->
      <div class="sixteen columns">
         <section class="page-content">
            <a id="main-content"></a>
            <div class="tabs"></div>
            <div class="region region-content">
               <article id="node-47" class="node node-page node-page post" about="/fund/portfolio" typeof="foaf:Document">
                  <section class="content-section">
                     <header class="meta">
                        <span property="dc:title" content="Portfolio Information" class="rdf-meta element-hidden"></span><span property="sioc:num_replies" content="0" datatype="xsd:integer" class="rdf-meta element-hidden"></span>
                     </header>
                  </section>
                  <div class="clearfix"></div>
               </article>
            </div>
         </section>
      </div>
      <!-- Page Content / End -->
      <div class="clearfix"></div>
   </div>
   <!-- Content bottom -->
   <?php if( get_field('add_title_middle') ){ ?>
   <section class="content-bottom">
      <div class="container">
         <div class="sixteen columns">
            <div class="region region-content-bottom">
               <div id="block-block-16" class="block block-block top-holdings">
                  <div class="content">
                     <h2 class="center">
                        <?php the_field('add_title_middle'); ?>
                     </h2>
                      <?php the_field('add_content_middle'); ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <?php } ?>
   <!-- Content bottom -->
   <?php if( get_field('add_title_lower') ){ ?>
   <section class="content-bottom-footer">
      <div class="container">
         <div class="sixteen columns">
            <div class="region region-bottom-highlight">
               <div id="block-block-17" class="block block-block asset-class">
                  <div class="content">
                     <h2 class="center">
                        <?php the_field('add_title_lower'); ?>
                     </h2>
                     <?php the_field('add_content_lower'); ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <?php } ?>
   <!-- Content bottom -->
</div>
<!-- Content Wrapper / End -->
<?php get_footer(); ?>