<?php /* Template Name: news-full */ ?>
<?php get_header(); ?>
<div role="main" class="main">
                <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
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
				</section>
<div  style="background: #F3F1EF;">
				<div class="container py-4">
                <p>&nbsp;</p>
                <div class="row">
						<div class="col">
							<div class="blog-posts single-post">

								<article class="post post-large blog-single-post border-0 m-0 p-0">
<div class="post-image ml-0">
										<a>
                                        <?php the_post_thumbnail('full', array('class' => 'img-fluid img-thumbnail img-thumbnail-no-borders rounded-0')); ?>
											
										</a>
									</div>

									<div class="post-date ml-0">
										<span class="day"><?php echo get_the_date( 'd' ); ?></span>
										<span class="month"><?php echo get_the_date( 'M' ); ?></span>
									</div>

									<div class="post-content ml-0">

										<h2 class="font-weight-semi-bold"><?php echo get_the_title(); ?></h2>
                                        <div class="post-meta">
											<span><i class="far fa-user"></i> By <a>Admin</a> </span>
										
										
										</div>
								
                                        <?php the_content(); ?>




							
									</div>
								</article>
<p>&nbsp;</p>
<p>&nbsp;</p>

							</div>
						</div>
					</div>


				</div>
            </div>
			</div>
<?php get_footer(); ?>