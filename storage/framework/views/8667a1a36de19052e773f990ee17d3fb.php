<?php echo $__env->make('partials.topheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partials.headerMain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('styles.styleContact', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->
            <div class="container">
	        	<div class="page-header page-header-big text-center" style="background-image: url('https://images.unsplash.com/photo-1534536281715-e28d76689b4d?auto=format&fit=crop&w=1920&q=80')">
        			<h1 class="page-title text-white">Contact us<span class="text-white">We're Here to Help You Create Your Dream Home</span></h1>
	        	</div><!-- End .page-header -->
            </div><!-- End .container -->

            <div class="page-content pb-0">
                <div class="container">
                	<div class="row">
                		<div class="col-lg-6 mb-2 mb-lg-0">
                			<h2 class="title mb-1">Contact Information</h2><!-- End .title mb-2 -->
                			<p class="mb-3">We are here to assist you with any questions or concerns you may have. Our team is dedicated to providing you with the best experience possible. Reach out to us via any of the channels below.</p>
                			<div class="row">
                				<div class="col-sm-7">
                					<div class="contact-info">
                						<h3>The Office</h3>

                						<ul class="contact-list">
                							<li>
                								<i class="icon-map-marker"></i>
	                							70 Washington Square South New York, NY 10012, United States
	                						</li>
                							<li>
                								<i class="icon-phone"></i>
                								<a href="tel:#">+92 423 567</a>
                							</li>
                							<li>
                								<i class="icon-envelope"></i>
                								<a href="mailto:#">info@arymaid.com</a>
                							</li>
                						</ul><!-- End .contact-list -->
                					</div><!-- End .contact-info -->
                				</div><!-- End .col-sm-7 -->

                				<div class="col-sm-5">
                					<div class="contact-info">
                						<h3>The Office</h3>

                						<ul class="contact-list">
                							<li>
                								<i class="icon-clock-o"></i>
	                							<span class="text-dark">Monday-Saturday</span> <br>11am-7pm ET
	                						</li>
                							<li>
                								<i class="icon-calendar"></i>
                								<span class="text-dark">Sunday</span> <br>11am-6pm ET
                							</li>
                						</ul><!-- End .contact-list -->
                					</div><!-- End .contact-info -->
                				</div><!-- End .col-sm-5 -->
                			</div><!-- End .row -->
                		</div><!-- End .col-lg-6 -->
                		<div class="col-lg-6">
                			<h2 class="title mb-1">Got Any Questions?</h2><!-- End .title mb-2 -->
                			<p class="mb-2">Use the form below to get in touch with the sales team</p>

                			<form action="#" class="contact-form mb-3">
                				<div class="row">
                					<div class="col-sm-6">
                                        <label for="cname" class="sr-only">Name</label>
                						<input type="text" class="form-control" id="cname" placeholder="Name *" required>
                					</div><!-- End .col-sm-6 -->

                					<div class="col-sm-6">
                                        <label for="cemail" class="sr-only">Email</label>
                						<input type="email" class="form-control" id="cemail" placeholder="Email *" required>
                					</div><!-- End .col-sm-6 -->
                				</div><!-- End .row -->

                				<div class="row">
                					<div class="col-sm-6">
                                        <label for="cphone" class="sr-only">Phone</label>
                						<input type="tel" class="form-control" id="cphone" placeholder="Phone">
                					</div><!-- End .col-sm-6 -->

                					<div class="col-sm-6">
                                        <label for="csubject" class="sr-only">Subject</label>
                						<input type="text" class="form-control" id="csubject" placeholder="Subject">
                					</div><!-- End .col-sm-6 -->
                				</div><!-- End .row -->

                                <label for="cmessage" class="sr-only">Message</label>
                				<textarea class="form-control" cols="30" rows="4" id="cmessage" required placeholder="Message *"></textarea>

                				<button type="submit" class="btn btn-outline-primary-2 btn-minwidth-sm">
                					<span>SUBMIT</span>
            						<i class="icon-long-arrow-right"></i>
                				</button>
                			</form><!-- End .contact-form -->
                		</div><!-- End .col-lg-6 -->
                	</div><!-- End .row -->

                	<hr class="mt-4 mb-5">

                    <div class="row">
                        <div class="col-lg-6">
                            <h2 class="title mb-1 text-primary">Frequently Asked Questions</h2>
                            <p class="mb-2">Find quick answers to common inquiries about our services and policies.</p>
                            
                            <div class="accordion accordion-rounded" id="contact-faq">
                                <div class="card card-box card-sm bg-light">
                                    <div class="card-header" id="heading-1">
                                        <h2 class="card-title">
                                            <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                                What is your return policy?
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#contact-faq">
                                        <div class="card-body">
                                            We offer a 30-day money-back guarantee on all products. If you are not satisfied, we will provide a full refund or exchange.
                                        </div>
                                    </div>
                                </div>

                                <div class="card card-box card-sm bg-light">
                                    <div class="card-header" id="heading-2">
                                        <h2 class="card-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                                Do you offer international shipping?
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#contact-faq">
                                        <div class="card-body">
                                            Yes, we ship to over 50 countries worldwide. Shipping costs and delivery times vary by location.
                                        </div>
                                    </div>
                                </div>

                                <div class="card card-box card-sm bg-light">
                                    <div class="card-header" id="heading-3">
                                        <h2 class="card-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                                How can I track my order?
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#contact-faq">
                                        <div class="card-body">
                                            Once your order is shipped, you will receive an email with a tracking number and a link to track your package.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <h2 class="title mb-1 text-primary">Connect With Us</h2>
                            <p class="mb-2">Follow us on social media for the latest updates, inspiration, and trends.</p>
                            
                            <div class="contact-social-grid">
                                <a href="#" class="contact-social-item facebook">
                                    <i class="icon-facebook-f"></i>
                                    <span>Facebook</span>
                                </a>
                                <a href="#" class="contact-social-item instagram">
                                    <i class="icon-instagram"></i>
                                    <span>Instagram</span>
                                </a>
                                <a href="#" class="contact-social-item twitter">
                                    <i class="icon-twitter"></i>
                                    <span>Twitter</span>
                                </a>
                                <a href="#" class="contact-social-item pinterest">
                                    <i class="icon-pinterest"></i>
                                    <span>Pinterest</span>
                                </a>
                            </div>
                        </div>
                    </div>

                	<hr class="mt-5 mb-5">

                	<div class="stores mb-4 mb-lg-5">
	                	<h2 class="title text-center mb-3">Our Dedicated Showrooms</h2><!-- End .title text-center mb-2 -->

	                	<div class="row">
	                		<div class="col-lg-6">
	                			<div class="store">
	                				<div class="row">
	                					<div class="col-sm-5 col-xl-6">
	                						<figure class="store-media mb-2 mb-lg-0">
	                							<img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&w=600&q=80" alt="image">
	                						</figure><!-- End .store-media -->
	                					</div><!-- End .col-xl-6 -->
	                					<div class="col-sm-7 col-xl-6">
	                						<div class="store-content">
	                							<h3 class="store-title">Arymaid Casablanca</h3><!-- End .store-title -->
	                							<address>123 Boulevard d'Anfa, Casablanca, Morocco</address>
	                							<div><a href="tel:+212522000000">+212 522 000 000</a></div>

	                							<h4 class="store-subtitle">Store Hours:</h4><!-- End .store-subtitle -->
                								<div>Mon - Sat: 10am - 8pm</div>
                								<div>Sun: 11am - 6pm</div>

                								<a href="#" class="btn btn-link" target="_blank"><span>GET DIRECTIONS</span><i class="icon-long-arrow-right"></i></a>
	                						</div><!-- End .store-content -->
	                					</div><!-- End .col-xl-6 -->
	                				</div><!-- End .row -->
	                			</div><!-- End .store -->
	                		</div><!-- End .col-lg-6 -->

	                		<div class="col-lg-6">
	                			<div class="store">
	                				<div class="row">
	                					<div class="col-sm-5 col-xl-6">
	                						<figure class="store-media mb-2 mb-lg-0">
	                							<img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?auto=format&fit=crop&w=600&q=80" alt="image">
	                						</figure><!-- End .store-media -->
	                					</div><!-- End .col-xl-6 -->

	                					<div class="col-sm-7 col-xl-6">
	                						<div class="store-content">
	                							<h3 class="store-title">Arymaid Marrakesh</h3><!-- End .store-title -->
	                							<address>45 Avenue Mohammed VI, Marrakesh, Morocco</address>
	                							<div><a href="tel:+212524000000">+212 524 000 000</a></div>

	                							<h4 class="store-subtitle">Store Hours:</h4><!-- End .store-subtitle -->
												<div>Mon - Fri: 9am - 9pm</div>
												<div>Sat - Sun: 10am - 7pm</div>

                								<a href="#" class="btn btn-link" target="_blank"><span>GET DIRECTIONS</span><i class="icon-long-arrow-right"></i></a>
	                						</div><!-- End .store-content -->
	                					</div><!-- End .col-xl-6 -->
	                				</div><!-- End .row -->
	                			</div><!-- End .store -->
	                		</div><!-- End .col-lg-6 -->
	                	</div><!-- End .row -->
                	</div><!-- End .stores -->
                </div><!-- End .container -->
            	<div id="map"></div><!-- End #map -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->

		<?php echo $__env->make('styles.styleHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div><!-- End .page-wrapper -->

    

     <!-- Google Map -->
     <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDc3LRykbLB-y8MuomRUIY0qH5S6xgBLX4"></script>

<!-- Plugins JS File -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.hoverIntent.min.js"></script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/superfish.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<!-- Main JS File -->
<script src="assets/js/main.js"></script><?php /**PATH C:\Users\Mikasa Ackerman\arymaid\Arymaid\resources\views/components/contact.blade.php ENDPATH**/ ?>