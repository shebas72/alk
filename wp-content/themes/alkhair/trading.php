<?php /* Template Name: trading */ ?>
<?php get_header(); ?>
<div role="main" class="main">
                <section class="page-header page-header-modern page-header-background" style="background-image: url(<?php echo home_url(); ?>/wp-content/uploads/2022/02/trade-header.jpg);">
					<div class="container">
						<div class="row mt-5">
							<div class="col-md-12 align-self-center p-static order-2 text-center">
								<h1 class="text-9 font-weight-bold"></h1>
								<span class="sub-title"></span>
							</div>
						
						</div>
					</div>
				</section>

			
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


       
<?php the_content(); ?>



<?php endwhile; ?>
<?php endif; ?>
			
                <p>&nbsp;</p>
               
			
            
			</div>

<?php get_footer(); ?>