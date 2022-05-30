<?php /* Template Name: invest */ ?>
<?php get_header(); ?>

<div role="main" class="main">
                <section class="page-header page-header-modern page-header-background" style="background-image: url(<?php echo home_url(); ?>/wp-content/uploads/2022/02/iv-header-1.jpg);">
					<div class="container">
						<div class="row mt-5">
							<div class="col-md-12 align-self-center p-static order-2 text-center">
								<h1 class="text-9 font-weight-bold"></h1>
								<span class="sub-title"></span>
							</div>
						
						</div>
					</div>
				</section>

			
				<div class="container special-bottom pt-5">

					<div class="row align-items-center">
						<div class="col-md-6 over_header" style="background: #F3F1EF;">
							<h2 class="font-weight-bold text-6 mb-3">Investment Banking
                                </h2>
							<p class="text-3">Our solid track record of sound financial performance and investment management has allowed us to structure innovative and strategic Sharia-compliant deals for our clients. <br>

                                The services we offer include Mergers and Acquisitions, Capital Advisory (Equity and Debt) as well as structuring finance products and solutions</p>
                                <div class="testimonial testimonial-primary">
                                <blockquote>
									<p class="mb-0">We take pride in the fact that our company is a pioneer in several capital market solutions in the GCC.</p>
								</blockquote>
                            </div>
						</div>
						
					</div>

                </div>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


       
<?php the_content(); ?>



<?php endwhile; ?>
<?php endif; ?>
			
            
			</div>



<?php get_footer(); ?>