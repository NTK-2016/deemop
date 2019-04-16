<?php /* Template Name: Newsletter */ ?>
<?php get_header(); ?>
<section id="titlebar-blank">&nbsp;</section>
<div id="content-wrapper">
   <div id="content-container" class="container">
      <!-- Page Content -->
      <div class="eleven alt columns">
         <section class="page-content">
            <a id="main-content"></a>
            <div class="tabs"></div>
            <div class="region region-content">
               <div class="view view-blog view-id-blog view-display-id-page view-dom-id-39f1c74391c80ccfb2b428e164ebb768">
                  <!-- Custom post section start --> 
                  <div class="view-content">
                     <?php 
                        $news = array( 
                        	'post_type' => 'newsletter',
                        	'orderby' => 'post_date',
                        	'order'=> 'DESC',
                        );
                        $news_loop = new WP_Query( $news );
                        while ( $news_loop->have_posts() ) : $news_loop->the_post(); ?>
							 <div class="views-row views-row-1 views-row-odd views-row-first">
								<div class="views-field views-field-title">
								   <h2 class="field-content"><a href="<?php echo get_permalink($post->ID) ?>"><?php the_title(); ?></a></h2>
								</div>
								<div class="views-field views-field-body">
								   <div class="field-content">
									   <?php 
										 $post = $post->ID;
										 if($post == 312){
											 $content = get_the_content();
											 echo '<p>';
											 echo mb_strimwidth($content, 0, 146, '').'<br>'; 
											 echo '...';
											 echo '</p>';
										 }else{
											 echo '<p>';
											 $content = get_the_content();
											 echo mb_strimwidth($content, 0, 149, '...'); 
											 echo '</p>';
										 }
										 ?>
								   </div>
								</div>
							 </div>
                     <?php endwhile ?>
                  </div>
               </div>
            </div>
         </section>
      </div>
      <!-- Page Content / End -->
      <div id="sidebar-second" class="five columns">
         <aside class="sidebar">
            <div class="section">
               <div class="region region-sidebar-second">
                  <div id="block-views-blog-block-1" class="widget block block-views">
                     <h3 class="headline">Newsletter</h3>
                     <span class="line"></span>
                     <div class="clearfix"></div>
                     <div class="content">
                        <div class="view view-blog view-id-blog view-display-id-block_1 view-dom-id-a6575aa8af35d039b253d023af1f10c1">
                           <div class="view-content">
                              <?php 
								$news = array( 
                                 	'post_type' => 'newsletter',
                                 	'posts_per_page' => 2 ,
                                 	'orderby' => 'post_date',
									'order'=> 'DESC',
                                 );
                                 $news_loop = new WP_Query( $news );
                                 while ( $news_loop->have_posts() ) : $news_loop->the_post(); ?>
									  <div class="views-row views-row-1 views-row-odd views-row-first">
										 <div class="views-field views-field-body">
											<div class="field-content">
											   <?php 
												 $post = $post->ID;
												 if($post == 312){
													 $content = get_the_content();
													 echo '<p>';
													 echo mb_strimwidth($content, 0, 146, '').'<br>'; 
													 echo '...';
													 echo '</p>';
												 }else{
													 echo '<p>';
													 $content = get_the_content();
													 echo mb_strimwidth($content, 0, 149, '...'); 
													 echo '</p>';
												 }
												 ?>
											</div>
										 </div>
										 <div class="views-field views-field-path">
											<span class="field-content"><a href="<?php echo get_permalink($post->ID) ?>">Read More ></a></span>
										 </div>
									  </div>
                              <?php endwhile ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </aside>
      </div>
      <div class="clearfix"></div>
   </div>
   <!-- Content bottom -->
   <section class="content-bottom-footer">
      <div class="container">
         <div class="sixteen columns">
            <div class="region region-bottom-highlight">
               <div id="block-block-32" class="block block-block padding-top-bottom">
                  <h2> Something More with Chris Boyd</h2>
                  <div class="content">
                     <p><iframe allow="autoplay" frameborder="no" height="100" scrolling="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/403531749&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true" width="100%"></iframe></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Content bottom -->
</div>
<?php get_footer(); ?>
