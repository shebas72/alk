<?php /* Template Name: fund-report */ ?>
<?php get_header(); ?>
<div role="main" class="main">
                <section class="page-header page-header-modern page-header-background page-header-background-md" style="background-image: url(<?php echo home_url(); ?>/wp-content/uploads/2022/02/asset-header.jpg);">
					<div class="container">
						<div class="row mt-5">
							<div class="col-md-12 align-self-center p-static order-2 text-center">
								<h1 class="text-9 font-weight-bold">Asset Management</h1>
								<span class="sub-title">&nbsp;</span>
							</div>
						
						</div>
					</div>
				</section>
                <section class="call-to-action with-borders button-centered mb-5">
								<div class="container">
								<div class="col-12">
                                    <p>&nbsp;</p>
                                   
                                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


       
<?php the_content(); ?>



<?php endwhile; ?>
<?php endif; ?>
						
</div>


                                </div>
                </section>

            
                            <?php get_footer(); ?>