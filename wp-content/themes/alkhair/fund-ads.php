<?php /* Template Name: fund-ads */ ?>
<?php get_header(); ?>
<div role="main" class="main">
                <section class="page-header page-header-modern page-header-background" style="background-image: url(<?php echo home_url(); ?>/wp-content/uploads/2022/02/asset-header.jpg);">
					<div class="container">
						<div class="row mt-5">
							<div class="col-md-12 align-self-center p-static order-2 text-center">
								<h1 class="text-9 font-weight-bold"></h1>
								<span class="sub-title"></span>
							</div>
						
						</div>
					</div>
				</section>
                <div class="container">
<p>&nbsp;</p>
<div class="row">
<div class="col-sm-12 col-lg-12">
<h4>Funds’ Announcements</h4>
<?php query_posts('post_type=funds&showposts=99&cat=4&order=DESC'); if(have_posts()) :  while(have_posts()) : the_post(); ?>
<section class="call-to-action with-borders mb-5">
								<div class="col-sm-9 col-lg-9">
									<div class="call-to-action-content">
										<p style="text-align:left"><?php echo get_the_title(); ?></p>
										
									</div>
								</div>
								<div class="col-sm-3 col-lg-3">
									<div class="call-to-action-btn">
										<a href="<?php the_field('files'); ?>" target="_blank" class="btn btn-modern text-2 btn-primary" rel="noopener">Download</a>
									</div>
								</div>
							</section>
                            <?php endwhile;  else :  endif;  wp_reset_query(); ?> 


<p>&nbsp;</p>

								</div>

							</div>
</div>

            
      

</div>
<?php get_footer(); ?>
