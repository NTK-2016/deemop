<?php /* Template Name: Downloads */ ?>
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
               <div id="block-block-24" class="block block-block">
                  <?php if(get_field( 'add_messege' )) {  ?> 
                  <div class="content">
                     <p><?php echo the_field('add_messege'); ?></p>
                  </div>
                  <?php } ?> 
               </div>
               <div id="block-views-documents-block-2" class="block block-views">
                  <h2>Forms</h2>
				  <p style="margin-top:5px;"></p>
                  <div class="content">
                     <div class="view view-documents view-id-documents view-display-id-block_2 view-dom-id-cb9c7e7e9737e2160858c69162a999c7">
                        <?php 
						if( have_rows('add_form_file') ){ 
						   while ( have_rows('add_form_file') ) : the_row();
							if(get_sub_field('add_file_title')){ ?>
								<div class="view-content">
								   <div class="views-row views-row-1 views-row-odd views-row-first >
									  <div class="views-field views-field-path">
										 <span class="field-content">
											<div class="download twelve columns">
											   <div class="ten columns">
												  <div class="file-type eight columns alpha">
													 <p><?php echo get_sub_field('add_file_title'); ?></p>
												  </div>
												  <?php 
													 $file_data = get_sub_field('upload_file'); 
													 if($file_data){
													  ?>
												  <a class="download-path two columns omega inline-block button" href="<?php echo $file_data['url']; ?>" target="_blank">Download</a>
												  <?php } ?>
											   </div>
											</div>
										 </span>
									  </div>
								   </div>
								</div>
								<?php
							}
							endwhile;
						}  ?>
                     </div>
                  </div>
               </div>
               <div id="block-views-documents-block-3" class="block block-views">
                  <h2>IRAs</h2>
                  <div class="content">
                     <div class="view view-documents view-id-documents view-display-id-block_3 view-dom-id-3ed60d0f3c470cc93dfed4adc2244138">
                        <?php 
						if( have_rows('add_ira_file') ){ 
						   while ( have_rows('add_ira_file') ) : the_row();
							if(get_sub_field('add_file_title')){ ?>
								<div class="view-content">
								   <div class="views-row views-row-1 views-row-odd views-row-first">
									  <div class="views-field views-field-path">
										 <span class="field-content">
											<div class="download twelve columns">
											   <div class="ten columns">
												  <div class="file-type eight columns alpha">
													 <p><?php echo get_sub_field('add_file_title'); ?></p>
												  </div>
												  <?php 
													 $file_data = get_sub_field('upload_file'); 
													 if($file_data){
													  ?>
												  <a class="download-path two columns omega inline-block button" href="<?php echo $file_data['url']; ?>" target="_blank">Download</a>
												  <?php } ?>
											   </div>
											</div>
										 </span>
									  </div>
								   </div>
								</div>
							<?php
							}
						   endwhile;
                        } ?>
                     </div>
                  </div>
               </div>
               <div id="block-views-documents-block-1" class="block block-views">
                  <h2>Reports</h2>
                  <div class="content">
                     <div class="view view-documents view-id-documents view-display-id-block_3 view-dom-id-3ed60d0f3c470cc93dfed4adc2244138">
                        <?php 
						if( have_rows('add_report_file') ){ 
                           while ( have_rows('add_report_file') ) : the_row();
                           	if(get_sub_field('add_file_title')){ ?>
								<div class="view-content">
								   <div class="views-row views-row-1 views-row-odd views-row-first">
									  <div class="views-field views-field-path">
										 <span class="field-content">
											<div class="download twelve columns">
											   <div class="ten columns">
												  <div class="file-type eight columns alpha">
													 <p><?php echo get_sub_field('add_file_title'); ?></p>
												  </div>
												  <?php 
													 $file_data = get_sub_field('upload_file'); 
													 if($file_data){
													  ?>
												   <a class="download-path two columns omega inline-block button" href="<?php echo $file_data['url']; ?>" target="_blank">Download</a>
												  <?php } ?>
											   </div>
											</div>
										 </span>
									  </div>
								   </div>
								</div>
                         <?php
							}
                           endwhile;
                        } ?>
                     </div>
                  </div>
               </div>
               <div id="block-block-25" class="block block-block">
					<div class="content">
						<p> </p>
						<?php
							while ( have_posts() ) : the_post();
							echo the_content();
							endwhile;
						?>
					</div>
               </div>
               <article id="node-36" class="node node-page node-page post" about="/downloads" typeof="foaf:Document">
                  <section class="content-section">
                     <header class="meta">
                        <span property="dc:title" content="Downloads" class="rdf-meta element-hidden"></span><span property="sioc:num_replies" content="0" datatype="xsd:integer" class="rdf-meta element-hidden"></span>
                     </header>
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
<?php get_footer(); ?>
