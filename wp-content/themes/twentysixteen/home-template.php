<?php /* Template Name: Home Template */ ?>
<?php get_header(); ?>
<div id="content-wrapper">
	<div id="slider-wrapper">
		<div class="region region-slider">
			<div id="block-layer-slider-1" class="block block-layer-slider">
				<div class="content">
					<div class="ls-wp-fullwidth-container">
						<div class="ls-wp-fullwidth-helper">
							<div id="layerslider_1" style="width: 100%; height: 900px; margin: 0px auto; ">
								<div class="ls-layer"  style="slidedirection: right; slidedelay: 4000; durationin: 0; durationout: 0; easingin: easeOutExpo; easingout: easeOutExpo; delayin: 0; delayout: 0;">
									<?php $banner_image = get_field( 'banner_image' ); ?>
									<?php if ( $banner_image ) { ?>
									    <img class="ls-s2"  src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>"  style="position: absolute; top: 1px; left: -298px; slidedirection : bottom; slideoutdirection : bottom;  durationin : 0; durationout : 0; easingin : easeOutExpo; easingout : easeOutExpo; delayin : 0; delayout : 0; showuntil : 0; left: 0!important;">
									<?php } ?>
									<?php if( get_field('title') ){ ?>
										<h1  class="ls-s2" style="position: absolute; top:170px; left: 0px; slidedirection : bottom; slideoutdirection : bottom; durationin : 0; durationout : 0; easingin : easeOutExpo; easingout : easeOutExpo; delayin : 0; delayout : 0; showuntil : 0; right: 0!important; left:0!important; white-space: nowrap;"><?php the_field('title'); ?></h1>
									<?php } ?>
									<?php if( get_field('sub_title') ){ ?>
									    <h3  class="ls-s2" style="position: absolute; top:240px; left: px;   durationin : 0; durationout : 0; easingin : easeInOutQuint; easingout : easeInOutQuint; delayin : 0; delayout : 0; showuntil : 0;  white-space: nowrap;"><?php the_field('sub_title'); ?></h3>
									<?php } ?>
									<div  class="ls-s2" style="position: absolute; top:320px; left: px;   durationin : 0; durationout : 0; easingin : easeInOutQuint; easingout : easeInOutQuint; delayin : 0; delayout : 0; showuntil : 0; width: 1200px; white-space: nowrap;">
										<div class="full-width">
											<a class="button white" href="https://accountaccess.northeastinvestors.com/PAWeb/Logins/Login.aspx?planname=neitfunds">Account access </a>
										</div> 
									</div>
									<div  class="ls-s2" style="position: absolute; top:40px; left: 928.5px;   durationin : 0; durationout : 0; easingin : easeInOutQuint; easingout : easeInOutQuint; delayin : 0; delayout : 0; showuntil : 0;  white-space: nowrap;"> 
										<?php if( get_field('title') ){ ?>
											<p style="color: white!important; font-size: 20px!important;"><?php the_field('top_header_one'); ?></p>
										<?php } ?>
										<?php if( get_field('title') ){ ?>
											<p style="color: white!important; font-size: 18px!important;"><?php the_field('top_header_two'); ?></p>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div> 
				</div>
			</div>
		</div>
	</div>
	<!-- Editor Content -->  
	<div class="container">
		<div class="sixteen columns">
			<div id="highlighted">
				<div class="region region-highlighted">
					<div id="block-block-10" class="block block-block">
						<div class="content">
							<?php if( get_field('title_editor') ): ?>
								 <h1 class="center"><?php the_field('title_editor'); ?></h1>
							  <?php endif; ?>
							
							<?php if( get_field('editor') ): ?>
								<?php echo the_field( 'editor' ); ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>     
	<div id="content-container" class="container">
	<!-- Page Content -->
		<div class="sixteen columns">
			<section class="page-content">
				<a id="main-content"></a>
				<div class="tabs"></div>
				<div class="region region-content">
					<article id="node-9" class="node node-page node-page post" about="/home" typeof="foaf:Document">
						<section class="content-section">
							<header class="meta">
								<span property="dc:title" content="Home" class="rdf-meta element-hidden"></span><span property="sioc:num_replies" content="0" datatype="xsd:integer" class="rdf-meta element-hidden"></span>
							</header>
							<div class="field field-name-body field-type-text-with-summary field-label-hidden">
								<div class="field-items">
									<div class="field-item even" property="content:encoded">
										<div class="featured-boxes homepage">
											<!-- Custom post section start --> 
											<?php 
											$args = array( 
												'post_type' => 'post',
												'posts_per_page' => 3 ,
												'orderby' => 'post_date',
												'order'=> 'DESC',
											);
											$loop = new WP_Query( $args );
											while ( $loop->have_posts() ) : $loop->the_post(); ?>
											<div class="one-third column alpha">
												<div class="featured-box">
													<a href="<?php echo get_permalink($post->ID) ?>"><?php echo the_post_thumbnail(); ?></a>
													<div class="featured-desc">
														<h3>
															<a href="<?php echo get_permalink($post->ID) ?>"><?php the_field( 'post_name' ); ?></a>
														</h3>
														<?php $content = get_field('discriptions');
														if($content){
															echo '<p>';
															echo the_field( 'discriptions' ); 
															echo '</p>';
															?>
														<p class="no-padding no-margin-top"><a class="no-padding no-margin-top brown" href="<?php echo get_permalink($post->ID) ?>">Learn More &gt;</a></p> <?php } ?>
													</div>
												</div>
											</div>
											<?php endwhile ?>
										</div>
									</div>
								</div>
							</div> 
						</section>
						<div class="clearfix"></div>
					</article>
				</div>
			</section>
		</div>
		<div class="clearfix"></div>
	</div>
  
    <!-- Content bottom -->
	<section class="content-bottom">
		<div class="container">
			<div class="sixteen columns">
				<div class="region region-content-bottom">
					<div id="block-block-11" class="block block-block">
						<div class="content">
							<div class="seven columns contact-text margin-center"><!-- Begin MailChimp Signup Form -->
								<p class="center">If you want to receive correspondence from the fund, please provide your e-mail address below.</p>
							</div>
								<!-- Begin MailChimp Signup Form Advisors -->
							<div id="mc_embed_signup">
								<div id="advisor">
									<form action="//northeastinvestors.us12.list-manage.com/subscribe/post?u=0b3e24c3d811c7f6d42df9b42&amp;id=5ff93462be" class="validate" id="mc-embedded-subscribe-form" method="post" name="mc-embedded-subscribe-form" novalidate="" target="_blank">
										<div id="mc_embed_signup_scroll">
											<div class="mc-field-group">
												<br /><input class="required email" id="mce-EMAIL" name="EMAIL" placeholder="Email Address" type="email" value="" /><input class="button" id="mc-embedded-subscribe" name="subscribe" type="submit" value="Subscribe" />
											</div>
											<div class="clear" id="mce-responses">
												<div class="response" id="mce-error-response" style="display:none"></div>
												<div class="response" id="mce-success-response" style="display:none"></div>
											</div>
											<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
											<div aria-hidden="true" style="position: absolute; left: -5000px;">
												<input name="b_0b3e24c3d811c7f6d42df9b42_5ff93462be" tabindex="-1" type="text" value="" />
											</div>
										</div>
									</form>
								</div>
								<!-- Begin MailChimp Signup Form General-->
								<div id="general">
									<form action="//northeastinvestors.us12.list-manage.com/subscribe/post?u=0b3e24c3d811c7f6d42df9b42&amp;id=5f90e170db" class="validate" id="mc-embedded-subscribe-form" method="post" name="mc-embedded-subscribe-form" novalidate="" target="_blank">
										<div id="mc_embed_signup_scroll">
											<div class="mc-field-group">
												<input class="required email" id="mce-EMAIL" name="EMAIL" placeholder="Email Address" type="email" value="" /><input class="button" id="mc-embedded-subscribe" name="subscribe" type="submit" value="Subscribe" />
											</div>
											<div class="clear" id="mce-responses">
												<div class="response" id="mce-error-response" style="display:none"></div>
												<div class="response" id="mce-success-response" style="display:none"></div>
											</div>
											<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups--><div aria-hidden="true" style="position: absolute; left: -5000px;">
											<input name="b_0b3e24c3d811c7f6d42df9b42_5f90e170db" tabindex="-1" type="text" value="" /></div>
										</div>
									</form>
								</div>
							</div>
						</div><!--End mc_embed_signup-->  
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<?php get_footer(); ?>