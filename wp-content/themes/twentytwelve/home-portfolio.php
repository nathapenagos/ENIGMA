<!-- portfolio section -->
<?php $wl_theme_options=get_option('enigma_options'); ?>
<div class="enigma_project_section">
<?php if($wl_theme_options['port_heading'] !='') { ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="enigma_heading_title">
					<h3><?php echo $wl_theme_options['port_heading']; ?></h3>		
				</div>
			</div>
		</div>
	</div>
<?php } ?>	
<div class="container">
		<div class="row" >
			<div id="enigma_portfolio_section" class="enima_photo_gallery">
				<?php for($i=1 ; $i<=4; $i++) { ?>
				<div class="col-lg-3 col-md-3 col-sm-6 pull-left scrollimation fade-right d1"> 
					<div class="img-wrapper">
					<?php if($wl_theme_options['port_'.$i.'_img'] !='') { ?>
						<div class="enigma_home_portfolio_showcase">
							<img class="enigma_img_responsive" alt="enigma" src="<?php echo $wl_theme_options['port_'.$i.'_img']; ?>">
							<div class="enigma_home_portfolio_showcase_overlay">
								<div class="enigma_home_portfolio_showcase_overlay_inner ">
									<div class="enigma_home_portfolio_showcase_icons">
										<a title="<?php the_title_attribute(); ?>" href="<?php echo $wl_theme_options['port_'.$i.'_link']; ?>"><i class="fa fa-link"></i></a>
										<a class="photobox_a" href="<?php echo $wl_theme_options['port_'.$i.'_img']; ?>"><i class="fa fa-search-plus"></i><img src="<?php echo $wl_theme_options['port_'.$i.'_img']; ?>" alt="<?php echo $wl_theme_options['port_'.$i.'_title']; ?>" style="display:none !important;visibility:hidden"></a>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
					<?php if($wl_theme_options['port_'.$i.'_title'] !='') { ?>	
					<div class="enigma_home_portfolio_caption">
					<h3><a href="<?php echo $wl_theme_options['port_'.$i.'_link']; ?>"><?php echo $wl_theme_options['port_'.$i.'_title']; ?></a></h3>
					</div>
					<?php } ?>
					</div>
					<div class="enigma_portfolio_shadow"></div>
				</div>
				<?php } ?>
			</div>
			</div>
						
		</div>
	</div>
<!-- /portfolio section -->