<?php
   /**
    * The template for displaying all single posts and attachments
    *
    * @package WordPress
    * @subpackage Twenty_Sixteen
    * @since Twenty Sixteen 1.0
    */
   
get_header(); ?>
<?php if ($post->post_type == "newsletter") { ?>
<section id="titlebar-blank"></section>
<div id="content-wrapper">
   <div id="content-container" class="container">
      <div class="eleven alt columns">
         <section class="page-content">
            <a id="main-content"></a>
            <div class="tabs"></div>
            <div class="region region-content">
               <article id="node-80" class="node node-newsletter node-newsletter post" about="/newsletters/monthly-fact-sheets" typeof="sioc:Item foaf:Document">
                  <div class="field field-name-field-image field-type-image field-label-hidden">
                     <div class="field-items"></div>
                  </div>
                  <?php
                     if( have_posts()){
						while ( have_posts() ) : the_post(); ?>
						  <section class="content-section">
							 <header class="meta">
								<h2><?php the_title(); ?></h2>
								<span property="dc:title" content="Monthly Fact Sheets" class="rdf-meta element-hidden"></span><span property="sioc:num_replies" content="0" datatype="xsd:integer" class="rdf-meta element-hidden"></span>
							 </header>
							 <div class="field field-name-body field-type-text-with-summary field-label-hidden">
								<div class="field-items">
								   <div class="field-item even" property="content:encoded">
									  <p><?php the_content(); ?></p>
									  <?php 
										if( have_rows('upload_file') ){ 
											while ( have_rows('upload_file') ) : the_row();
											if(get_sub_field('add_file_name')){ 
												$add_file = get_sub_field('add_file'); ?>
												<p>
													<a href="<?php echo $add_file['url']; ?>" target="_blank"><?php echo get_sub_field('add_file_name'); ?></a>
												</p>
											<?php	
											}
											endwhile;
										} ?>
								   </div>
								</div>
							 </div>
						  </section>
					<?php 
						endwhile;
                     } ?>
                  <div class="clearfix"></div>
               </article>
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
                        <div class="view view-blog view-id-blog view-display-id-block_1 view-dom-id-8e23ef7ee6714e52b39ff2d13f035c9c">
                           <div class="view-content">
                              <?php 
								 $postid = get_the_ID();
                                 $news = array( 
                                 	'post_type' => 'newsletter',
                                 	'posts_per_page' => 2 ,
									'post__not_in' => array($postid),
                                 	'orderby' => 'post_date',
                                 	'order'=> 'DESC',
                                 );
                                 $news_loop = new WP_Query( $news );
                                 while ( $news_loop->have_posts() ) : $news_loop->the_post(); ?>
									  <div class="views-row views-row-1 views-row-odd views-row-first">
										 <div class="views-field views-field-body">
											<div class="field-content">
											   <p>
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
											   </p>
											</div>
										 </div>
										 <div class="views-field views-field-path"><span class="field-content"><a href="<?php echo get_permalink($post->ID) ?>">Read More</a></span>  </div>
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
<?php 
}else if($post->post_type == "our_team"){ ?>
	<div id="content-wrapper">
		<div id="content-container" class="container">
		<?php if( have_posts() ) : the_post(); ?>
			<div class="eleven alt columns">
			   <section class="page-content">
				  <a id="main-content"></a>
				  <div class="tabs"></div>
				  <div class="region region-content">
					 <article id="node-22" class="node node-team node-team post" about="/about/our-team/ernest-e-monrad" typeof="sioc:Item foaf:Document">
						<section class="content-section">
						   <header class="meta">
							  <h2><?php echo the_title(); ?></h2>
							  <span property="dc:title" content="Ernest E. Monrad" class="rdf-meta element-hidden"></span><span property="sioc:num_replies" content="0" datatype="xsd:integer" class="rdf-meta element-hidden"></span>
						   </header>
						   <?php if(has_post_thumbnail()){ ?>
						   <div class="field field-name-field-team-image field-type-image field-label-hidden">
							  <div class="field-items">
								 <div class="field-item even">
									<?php echo the_post_thumbnail( 'medium' ); ?>
								 </div>
							  </div>
						   </div>
						   <?php }else{ ?>
						   <div class="field field-name-field-team-image field-type-image field-label-hidden">
							  <div class="field-items">
								 <div class="field-item even">
									<img typeof="foaf:Image" src="<?php echo site_url('/wp-content/uploads/2018/06/user-image.jpg'); ?>" width="420" height="300" alt="" />
								 </div>
							  </div>
						   </div>
						   <?php } ?>
						   <?php if( get_field('role') ){ ?>
						   <div class="field field-name-field-role-team field-type-list-text field-label-inline clearfix">
							  <div class="field-label">Role:&nbsp;</div>
							  <div class="field-items">
								 <div class="field-item even"><?php the_field('role'); ?></div>
							  </div>
						   </div>
						   <?php } ?>
						   <?php if( get_field('job_title') ){ ?>
						   <div class="field field-name-field-team-expereince field-type-text field-label-inline clearfix">
							  <div class="field-label">Job title:&nbsp;</div>
							  <div class="field-items">
								 <div class="field-item even"><?php the_field('job_title'); ?></div>
							  </div>
						   </div>
						   <?php } ?>
						   <?php if( get_field('education') ){ ?>
						   <div class="field field-name-field-team-industry field-type-text field-label-inline clearfix">
							  <div class="field-label">Education:&nbsp;</div>
							  <div class="field-items">
								 <div class="field-item even"><?php the_field('education'); ?></div>
							  </div>
						   </div>
						   <?php } ?>
						   <?php if(get_the_content()){ ?>
						   <div class="field field-name-body field-type-text-with-summary field-label-hidden">
							  <div class="field-items">
								 <div class="field-item even" property="content:encoded">
									<?php echo the_content(); ?>
								 </div>
							  </div>
						   </div>
						<?php } ?>
						</section>
						<div class="clearfix"></div>
					 </article>
				  </div>
			   </section>
			</div>
		<?php endif; ?>
		
			<div id="sidebar-second" class="five columns">
			   <aside class="sidebar">
				  <div class="section">
					 <div class="region region-sidebar-second">
						<div id="block-views-team-block-4" class="widget block block-views">
						   <h3 class="headline" >Team</h3>
						   <span class="line"></span>
						   <div class="clearfix"></div>
						   <?php 
							$team = array(
								'posts_per_page' => -1,
								'post_type' => 'our_team',
								'orderby' => 'post_date',
								'order'=> 'DESC',
							);
							$team_loop = new WP_Query( $team );
							while ( $team_loop->have_posts() ) : $team_loop->the_post(); ?>
						   <div class="content">
							  <div class="view view-team view-id-team view-display-id-block_4 view-dom-id-ecdf2abe6164bcb994feeb5d48aa4710">
								 <div class="view-content">
									<div class="views-row views-row-1 views-row-odd views-row-first">
									   <div class="views-field views-field-field-role-team">
										  <div class="field-content">
											<?php if(has_post_thumbnail()){ 
												//$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'s');
												?>
											 <div class="column two alpha">
												<a href="<?php echo get_permalink(); ?>"><?php echo the_post_thumbnail(array(100 , 66)); ?></a>
											 </div>
											<?php }else{ ?>
												 <div class="column two alpha">
													<a href="<?php echo get_permalink(); ?>"><img typeof="foaf:Image" class="small-no-image" src="<?php echo site_url('/wp-content/uploads/2018/06/small-user-image.jpg'); ?>" width="100" height="66" alt="" /></a>
												 </div>
											<?php } ?>
											 <div class="two columns omega">
												<p><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a><br />
												   <?php the_field('role'); ?>
												</p>
											 </div>
										  </div>
									   </div>
									</div>
								 </div>
							  </div>
						   </div>
						   <?php endwhile; ?>
						</div>
						
					 </div>
				  </div>
			   </aside>
			</div>
			
			<div class="clearfix"></div>
		</div>
	</div>
<?php } else{ 
	if( have_posts() ) : the_post(); ?>
	<section id="titlebar">
	   <div class="container">
		  <div class="twelve columns">
			 <h2><?php the_title(); ?></h2>
		  </div>
	   </div>
	</section>
	<div id="content-wrapper">
	   <div id="content-container" class="container">
		  <div class="eleven alt columns">
			 <section class="page-content">
				<a id="main-content"></a>
				<div class="tabs"></div>
				<div class="region region-content">
				   <article id="node-77" class="node node-page node-page post" about="/investing-easy-automatic-investment-plan" typeof="foaf:Document">
					  <section class="content-section">
						 <header class="meta">
							<span property="dc:title" content="Investing is easy with automatic investment plan" class="rdf-meta element-hidden"></span><span property="sioc:num_replies" content="0" datatype="xsd:integer" class="rdf-meta element-hidden"></span>
						 </header>
						
							 <div class="field field-name-body field-type-text-with-summary field-label-hidden">
								<div class="field-items">
								   <div class="field-item even" property="content:encoded">
									  <?php the_content(); ?>
									</div>
								</div>
							 </div>
							
					  </section>
					  <div class="clearfix"></div>
				   </article>
				</div>
			 </section>
		  </div>
		   <?php include 'template-right-sidebar.php'; ?>    
		  <div class="clearfix"></div>
	   </div>
	</div>
<?php endif ; } ?>
<?php get_footer(); ?>
