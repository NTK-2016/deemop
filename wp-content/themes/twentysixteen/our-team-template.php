<?php /* Template Name: Our Team */ ?>
<?php get_header(); ?>
<div id="content-wrapper">
   <div id="content-container" class="container">
      <div class="sixteen columns">
         <section class="page-content">
            <a id="main-content"></a>
            <div class="tabs"></div>
            <div class="region region-content">
			<?php
				$count = 1;
				$custom_terms = get_terms('team-categories');
				foreach($custom_terms as $custom_term) {
					wp_reset_query();
					$args = array(
						'post_type' => 'our_team',
						'orderby' => 'post_date',
						'order'=> 'ASC',
						'tax_query' => array(
							array(
								'taxonomy' => 'team-categories',
								'field' => 'slug',
								'terms' => $custom_term->slug,
							),
						),
					 );
					 
					$loop = new WP_Query($args);
					if($loop->have_posts()) {
						if($count == 1){
						?>
					   <div id="block-views-team-block-1" class="block block-views">
						  <h2> <?php echo $custom_term->name; ?></h2>
						  
						 <?php 
						 while($loop->have_posts()) : $loop->the_post(); ?>
						  <div class="content">
							 <div class="view view-team view-id-team view-display-id-block_1 view-dom-id-ad67d4cad154fb7ee7a7b46c2c51715a">
								<div class="view-content">
								   <div class="views-row views-row-1 views-row-odd views-row-first six columns alpha">
									  <?php if(has_post_thumbnail()){ ?>
									  <div class="views-field views-field-field-team-image">
										 <div class="field-content full-width"><?php echo the_post_thumbnail(); ?></div>
									  </div>
									  <?php }else{ ?>
										<div class="views-field views-field-field-team-image">
											<div class="field-content full-width">
												<img typeof="foaf:Image" src="<?php echo site_url('/wp-content/uploads/2018/06/user-image.jpg'); ?>" alt="NO Image" width="220" height="220"/>
											</div>
										</div>  
									 <?php } ?>
									  <div class="views-field views-field-title">
										 <span class="field-content">
											<a href="<?php echo get_permalink(); ?>">
											   <?php echo get_the_title(); ?> <br />
											   <div class="center">
												  <p><?php the_field('job_title'); ?></p>
											   </div>
											</a>
										 </span>
									  </div>
								   </div>
								</div>
							 </div>
						  </div>
						  <?php endwhile; ?>
					   </div>
				<?php $count++;
						}else{ ?>
						<div id="block-views-team-block-2" class="block block-views">
						   <h2><?php echo $custom_term->name; ?></h2>
						   <?php 
							while($loop->have_posts()) : $loop->the_post(); ?>
						   <div class="content">
							  <div class="view view-team view-id-team view-display-id-block_2 view-dom-id-ca08784d1fdfa060579f6c4d3a969be8">
								 <div class="view-content">
									<div class="views-row views-row-1 views-row-odd views-row-first one-third column alpha">
										<?php if(has_post_thumbnail()){ ?>
									   <div class="views-field views-field-field-team-image">
										  <div class="field-content full-width"><?php echo the_post_thumbnail(); ?></div>
									   </div>
									   <?php }else{ ?>
									   <div class="views-field views-field-field-team-image">
										  <div class="field-content full-width">
											<img typeof="foaf:Image" src="<?php echo site_url('/wp-content/uploads/2018/06/user-image.jpg'); ?>" alt="NO Image" width="220" height="220"/>
										  </div>
									   </div>
									   <?php } ?>
									   <div class="views-field views-field-title">
										  <span class="field-content">
											 <a href="<?php echo get_permalink(); ?>">
												<?php echo get_the_title(); ?> <br />
												<div class="center">
												   <p><?php the_field('job_title'); ?></p>
												</div>
											 </a>
										  </span>
									   </div>
									</div>
								 </div>
							  </div>
						   </div>
						   <?php endwhile; ?>
						</div>	
					<?php	}
					}
				} ?>
               <article id="node-32" class="node node-page node-page post" about="/about/our-team" typeof="foaf:Document">
                  <section class="content-section">
                     <header class="meta">
                        <span property="dc:title" content="Our Team" class="rdf-meta element-hidden"></span><span property="sioc:num_replies" content="0" datatype="xsd:integer" class="rdf-meta element-hidden"></span>
                     </header>
                  </section>
                  <div class="clearfix"></div>
               </article>
            </div>
         </section>
      </div>
      <div class="clearfix"></div>
   </div>
</div>
<?php get_footer(); ?>