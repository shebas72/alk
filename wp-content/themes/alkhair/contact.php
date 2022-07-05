<?php /* Template Name: contact */ ?>
<?php get_header(); ?>

<div role="main" class="main">

<div class="container-fluid">

<div class="row align-items-center bg-color-grey">
    <div class="col-lg-6 order-2 order-lg-1 p-0">
        <section class="section section-no-border h-100 m-0">
            <div class="row justify-content-end m-0">
                <div class="col-half-section col-half-section-right custom-text-align-right">
                    <div class="overflow-hidden">
                        <h4 class="mb-4 appear-animation" data-appear-animation="maskUp"><a href="#" class="text-4 font-weight-bold pt-2 d-block text-dark text-decoration-none pb-1">Contact Us</a></h4>
                    </div>
                    <div class="overflow-hidden mb-2">
                        <p class="mb-49 lead text-4 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Thank you for reaching out to Alkhair Capital. With our deep knowledge of the Saudi market, our aim is always to achieve the best financial returns for our clients.
</p>
<p class="mb-49 lead text-4 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">
We pride ourselves on providing bespoke, shariah-compliant investment products and services.</p>
<p class="mb-49 lead text-4 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">
For complaints, please email us at: <a href="mailto:complaints@alkhaircapital.com.sa">complaints@alkhaircapital.com.sa</a> </p>
<p class="mb-49 lead text-4 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Or you can submit a request via contact us including your name, address, email, and your preferred contact number. Also provide us with detailed information about your complaint as much as possible to ensure a quicker response time.
 </p>
                    </div>
                  
                </div>
            </div>
        </section>
    </div>
    <div class="col-lg-6 order-1 order-lg-2 p-0">
        
        <img src="<?php echo home_url(); ?>/wp-content/uploads/2022/03/df31cfa909158e2e6fd550006ac284cba6dc0ea8.jpg" class="img-fluid" width="100%"/>
    </div>
</div>




</div>

<div class="container">

    <div class="row py-4">
        <div class="col-lg-12">

            <h2 class="font-weight-bold text-8 mt-2 mb-0">Contact Us</h2>
            <p class="mb-4">Feel free to ask for details, don't save any questions!</p>

            <form class="contact-form" action="php/contact-form.php" method="POST">
                <div class="contact-form-success alert alert-success d-none mt-4">
                    <strong>Success!</strong> Your message has been sent to us.
                </div>

                <div class="contact-form-error alert alert-danger d-none mt-4">
                    <strong>Error!</strong> There was an error sending your message.
                    <span class="mail-error-message text-1 d-block"></span>
                </div>

                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label class="mb-1 text-2">Full Name</label>
                        <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="name" required>
                    </div>
                    <div class="form-group col-lg-6">
                        <label class="mb-1 text-2">Email Address</label>
                        <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="email" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label class="mb-1 text-2">Subject</label>
                        <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control text-3 h-auto py-2" name="subject" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label class="mb-1 text-2">Message</label>
                        <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control text-3 h-auto py-2" name="message" required></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <input type="submit" value="Send Message" class="btn btn-primary btn-modern" data-loading-text="Loading...">
                    </div>
                </div>
            </form>

        </div>
       

    </div>

</div>

<div class="container">

    <div class="row py-4">
    <div class="col">

<div class="tabs tabs-bottom tabs-center tabs-simple">
    <ul class="nav nav-tabs">
        <li class="nav-item active">
            <a class="nav-link" href="#ksa" data-toggle="tab">Saudi Arabia</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#uae" data-toggle="tab">United Arab Emirates</a>
        </li>
      
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="ksa">
          
        <div class="row">
								<div class="col-lg-2">
									<div class="tabs tabs-vertical tabs-right tabs-navigation tabs-navigation-simple">
										<ul class="nav nav-tabs col-sm-3">
											<li class="nav-item active">
												<a class="nav-link" href="#hq" data-toggle="tab">Riyadh HQ</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#kafd" data-toggle="tab">Riyadh KAFD</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#jed" data-toggle="tab">Jeddah</a>
											</li>
										
										</ul>
									</div>
								</div>
								<div class="col-lg-10">
									<div class="tab-pane tab-pane-navigation active" id="hq">
                                    <div class="row">
                                    <div class="col-lg-6">
                                    <ul class="list list-icons list-icons-style-2 mt-2">
                    <li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Address:</strong> P.O Box 69410, Quara holding building <br> Kingdom of Saudi Arabia , King Abdulaziz Road,<br> Al Wizarat District</li>
                    <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong> +966 11 215 5607
</li>
<li><i class="fas fa-print top-6"></i> <strong class="text-dark">Fax:</strong> +966 11 219 1270</li>
                    <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> <a href="mailto:info@alkhaircapital.com.sa">info@alkhaircapital.com.sa</a></li>
                </ul>
                                    </div>
                                    <div class="col-lg-6">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3625.219498461896!2d46.71559571499944!3d24.684980184137064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03cf6bcd0cd1%3A0x98537d3fe11008aa!2sQuara%20Holding!5e0!3m2!1sen!2ssa!4v1647855652074!5m2!1sen!2ssa" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                     </div>

                                    </div>
									</div>
									<div class="tab-pane tab-pane-navigation" id="kafd">
                                    <div class="row">
                                    <div class="col-lg-6">
                                    <ul class="list list-icons list-icons-style-2 mt-2">
                    <li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Address:</strong> P.O Box 69410, KAFD - Area 5 <br> building No. 508 <br> Kingdom of Saudi Arabia.</li>
                    <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong> +966 11 215 5678
</li>
<li><i class="fas fa-print top-6"></i> <strong class="text-dark">Fax:</strong> +966 11 219 1270</li>
                    <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> <a href="mailto:Info@alkhaircapital.com.sa">info@alkhaircapital.com.sa</a></li>
                </ul>
                                    </div>
                                    <div class="col-lg-6">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d116006.88480837323!2d46.6477445!3d24.6851297!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2ee3e384aa3d6b%3A0xa7efd1657de74f70!2z2KfZhNiu2YrYsSDZg9io2KrZhA!5e0!3m2!1sen!2ssa!4v1647855688082!5m2!1sen!2ssa" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                     </div>

                                    </div>
									</div>
									<div class="tab-pane tab-pane-navigation" id="jed">
                                    <div class="row">
                                    <div class="col-lg-6">
                                    <ul class="list list-icons list-icons-style-2 mt-2">
                    <li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Address:</strong> P.O Box 69410, King Abdul Aziz Rd<br> screen tower <br>Kingdom of Saudi Arabia</li>
                    <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong> +966 11 264 4923
</li>
<li><i class="fas fa-print top-6"></i> <strong class="text-dark">Fax:</strong> +966 11 219 1270</li>
                    <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> <a href="mailto:Info@alkhaircapital.com.sa">info@alkhaircapital.com.sa</a></li>
                </ul>
                                    </div>
                                    <div class="col-lg-6">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3710.6843821340094!2d39.122978614941616!3d21.559193085713478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c3cfb38f39fa2b%3A0xe08fde489e8a7272!2sKing%20Road%20Tower!5e0!3m2!1sen!2ssa!4v1647855715716!5m2!1sen!2ssa" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                     </div>

                                    </div>
									</div>
								
								
								</div>
							</div>
         
        </div>
        <div class="tab-pane" id="uae">
            <div class="text-center">
                <h4>Coming soon</h4>
              
            </div>
        </div>
        
    </div>
</div>
</div>


    </div>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>
<?php get_footer(); ?>