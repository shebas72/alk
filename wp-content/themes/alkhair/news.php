<?php /* Template Name: news */ ?>
<?php get_header(); ?>
<div role="main" class="main">
                <!-- <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
					<div class="container">
						<div class="row">


							<div class="col-md-4 align-self-center">

							<p style="text-align: right; font-weight:bold; color:#271100;">
                            <a href="<?php echo home_url(); ?>/latest-news/" style="border-bottom: 3px solid #271100; padding-bottom:20px;color:#271100;">Latest News</a></p>
							</div>
                            <div class="col-md-4 align-self-center">

								<p style="text-align: center;"><a style="color:#271100;" href="<?php echo home_url(); ?>/announcements-reports-statements/">Announcements, Reports & Statements</a></p>

							</div>
                            <div class="col-md-4 align-self-center">

								<p style="text-align: left;"><a style="color:#271100;" href="<?php echo home_url(); ?>/privacy-policy/">Privacy Policy</a></p>

							</div>


						
						</div>
					</div>
				</section> -->
<div  style="background: #F3F1EF;">
				<div class="container py-4">
                <p>&nbsp;</p>
					<div class="row">
						<div class="col">
							<div class="blog-posts">

								<div class="row">
								<?php  query_posts('post_type=news&showposts=99&cat=1&order=DESC'); if(have_posts()) :  while(have_posts()) : the_post(); ?>
									<div class="col-md-4">
										<article class="post post-medium border-0 pb-0 mb-5 white-blog">
											<div class="post-image">
												<a href="<?php the_field('link'); ?>">
											
												<?php the_post_thumbnail('full', array('class' => 'img-fluid img-thumbnail img-thumbnail-no-borders rounded-0')); ?>
												
												
												</a>
											</div>

											<div class="post-content blog-pad-left">

                                                <div class="post-meta" style="margin-top:10px;">
													<span><?php echo get_the_date( 'Y-F-d' ); ?> </span>
													
												</div>

												<h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="<?php the_field('link'); ?>"><?php echo get_the_title(); ?></a></h2>
												<?php the_content(); ?>

											

											</div>
										</article>
									</div>
									<?php endwhile;  else :  endif;  wp_reset_query(); ?> 
                                 
                           
                                    
                               
                               

							
								

								</div>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
								

							</div>
						</div>

					</div>

				</div>
            </div>
			</div>
<?php get_footer(); ?>