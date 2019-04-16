<?php /* Template Name: Right Sidebar Template */ ?>
<div id="sidebar-second" class="five columns">
	<aside class="sidebar">
		<div class="section">
			<div class="region region-sidebar-second">
				 <?php 
				 if( have_rows('add_sidebar') ){ 
					while ( have_rows('add_sidebar') ) : the_row();
						if(get_sub_field('add_title')){ 
						    $click_here_link = get_sub_field('click_here_link'); ?>
							<div id="block-block-30" class="widget block block-block">
								<h3 class="headline" ><?php echo get_sub_field('add_title'); ?></h3>
								<span class="line"></span>
								<div class="clearfix"></div>
								<div class="content">
									<p><?php echo get_sub_field('add_descriptions'); ?>, <a href="<?php echo $click_here_link['url']; ?>">click here</a></p>
								</div>
							</div>
						<?php
						}
					endwhile;
				 }
				?>
				<?php if(get_field( 'add_investing_title' )) { 
							$add_page_link = get_field('add_page_link'); ?>
							<div id="block-block-21" class="widget block block-block">
								<div class="content">
									<div class="content-wrap button">
										<h2><a href="<?php echo $add_page_link['url']; ?>"><?php echo the_field('add_investing_title'); ?></a></h2>
									</div>
								</div>
							</div>
				<?php } ?>
				<?php 
				$add_image_sidebar = get_field( 'add_image_sidebar' );
				if (get_field('add_image_sidebar')) { ?>
						<div id="block-block-28" class="widget block block-block">
							<div class="content">
								<p><img alt="" src="<?php echo $add_image_sidebar['url']; ?>" /></p>
							</div>
						</div>
				<?php } ?>
			</div>
		</div>
	</aside>
</div>