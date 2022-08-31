	<?php
	if (is_home() || is_front_page() || is_page('our-projects') || is_page('what-we-do') || is_page('in-the-news') || is_page('who-we-are') || is_single()) : ?>
	<div id="get-in-touch" class="git-sec">
	  <div class="container">
	    <div class="row get-in-touch">
				<div class="col col-lg-1 d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
	      <div class="col-lg-7 get-in-touch-description fade-left-to-right-footer">
	        <h2>Get In Touch.</h2>
					<div class="get-in-touch-description-cta">
		        <p>If you’re interested in learning more about HRNCIR Construction, please get in touch.</p>
						<button class="shutter-in-horizontal"><a href="<?php echo site_url('contact'); ?>">Contact Us</a></button>
					</div>
	      </div>
				<div class="col-12 get-in-touch-hidden d-block d-sm-block d-md-block d-lg-none d-xl-none">
					<img class="img-fluid" src="<?php bloginfo( 'template_directory' ); ?>/images/home-get-in-touch.jpg" />
				</div>
	      <div class="get-in-touch-img fade-right-to-left">
	      </div>
	    </div>
	  </div>
	</div><?php
	endif;
	if (is_page('contact')) : ?>
	<div id="get-in-touch" class="get-in-touch-hrncir-cf">
	  <div class="container">
	    <div class="row get-in-touch">
				<div class="col col-lg-1 d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
	      <div class="col-lg-7 get-in-touch-description fade-left-to-right-footer contact-form-hrncir">
	        <h2>Get In Touch.</h2>
					<div class="get-in-touch-description-cta">
		        <p>If you’re interested in learning more about HRNCIR Construction, please get in touch.</p>
						<?php echo do_shortcode('[contact-form-7 id="147" title="Contact"]'); ?>
					</div>
	      </div>
				<div class="col-12 get-in-touch-hidden d-block d-sm-block d-md-block d-lg-none d-xl-none">
					<img class="img-fluid" src="<?php bloginfo( 'template_directory' ); ?>/images/footer-contact.jpg" />
				</div>
	      <div class="get-in-touch-img-contact fade-right-to-left">
	      </div>
	    </div>
	  </div>
	</div><?php
	endif; ?>
	<!-- Footer -->
	<div id="footer">
    <div class="container">
      <div class="row">
				<div class="col-sm-3 col-3 d-block d-sm-block d-md-none d-lg-none d-xl-none"></div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-6 footer-quick-contact">
					<img class="logo-footer" src="<?php bloginfo( 'template_directory' ); ?>/images/HRNCIR-Construction-Logo.svg" />
					<p class="footer-address">
						​3710 Rawlins St. Suite 850<br />
						Dallas, TX 75219<br />
						<span>P:</span> <a href="tel:(214) 821-4100">(214) 821-4100</a>
					</p>
					<button class="d-block d-sm-block d-md-none d-lg-none d-xl-none"><a href="<?php echo site_url('contact'); ?>">Contact Us</a></button>
				</div>
				<div class="col-sm-3 col-3 d-block d-sm-block d-md-none d-lg-none d-xl-none"></div>
				<div class="col-lg-9 col-md-9 col-sm-12 footer-navigation">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-12 col-12">
							<h4><a href="/our-projects/">Our Projects</a></h4>
							<p><a href="/our-projects/?tenant">Tenant Improvements</a></p>
							<p><a href="/our-projects/?capital">Capital Improvements</a></p>
							<p><a href="/our-projects/?special">Special Improvements</a></p>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-12">
							<h4><a href="/our-projects/">What We Do</a></h4>
							<p><a href="/what-we-do/#preconstruction-description-top">Preconstruction</a></p>
							<p><a href="/what-we-do/#construction-description-top">Construction</a></p>
							<p><a href="/what-we-do/#scheduling-description-top">Scheduling</a></p>
							<p><a href="/what-we-do/#safety-description-top">Safety</a></p>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-12">
							<h4><a href="/who-we-are">Who We Are</a></h4>
							<p><a href="/who-we-are/#preconstruction-description">About Us</a></p>
							<p><a href="/our-projects/">Our Clients</a></p>
							<p class="footer-case-studies"><a href="/what-we-do/#cs-description">Case Studies</a></p>
							<p class="footer-in-the-news"><a href="/in-the-news">In The News</a></p>
						</div>
					</div>
				</div>
			</div>
      <div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 d-none d-sm-none d-md-block d-lg-block d-xl-block">
					<button class="shutter-in-horizontal"><a href="<?php echo site_url('/contact'); ?>">Contact Us</a></button>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-12 footer-copyright">
					<div class="row">
						<div class="col-lg-7 col-md-7 copyright">Copyright 2021 © HRNCIR Construction</div>
						<div class="col-lg-5 col-md-5 social-media">
							<a href="https://www.facebook.com/hrncirconstruction/"><div class="facebook"></div></a>
							<a href="https://www.linkedin.com/company/hrncir-construction-lp"><div class="linked-in"></div></a>
							<a href="https://www.instagram.com/hrncir_construction/?hl=en"><div class="instagram"><img src="<?php bloginfo( 'template_directory' ); ?>/images/instagram-icon.png" /></div></a>
						</div>
					</div>
				</div>
			</div>
    </div>
  </div>
	<?php wp_footer(); ?>
	<script src="//code.jquery.com/jquery-1.12.4.js"></script>
	<script src="//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js" integrity="sha512-nKZDK+ztK6Ug+2B6DZx+QtgeyAmo9YThZob8O3xgjqhw2IVQdAITFasl/jqbyDwclMkLXFOZRiytnUrXk/PM6A==" crossorigin="anonymous"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script src="<?php bloginfo( 'template_directory' ); ?>/js/parallax.min.js"></script>
	<script src="<?php bloginfo( 'template_directory' ); ?>/js/mixitup.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous"></script>
	<script>
		/* Functions
		 -------------------------------------------------------------------------*/
		$(document).ready(function()
		{
			<?php if (is_home() || is_front_page()) : ?>
			/* Every time the window is scrolled... */
			$(window).scroll( function(){
			  var bottom_of_object = $(".main-service-01").offset().top + $(".main-service-01").outerHeight();
			  var bottom_of_window = $(window).scrollTop() + $(window).height();

			  /* If the object is completely visible in the window, fade it in */
			  if ( bottom_of_window > bottom_of_object )
				{
					setTimeout(function(){
						$(".main-service-01").addClass('visible');
						setTimeout(function(){
							$(".main-service-02").addClass('visible');
							setTimeout(function(){
								$(".main-service-03").addClass('visible');
							}, 100);
						}, 100);
					}, 100);
				}
			});

      $('#home-projects-slider').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				centerMode: true,
				focusOnSelect: true,
				dots: false,
    		prevArrow: false,
    		nextArrow: false,
  			autoplay: false,
				autoplaySpeed: 2000,
				prevArrow: $('.prev'),
      	nextArrow: $('.next')
      });

			var initial_slider_title = $('.home-projects-01').children('h2').html(); //console.log(initial_slider_title);
			$('#home-projects').children('.home-projects-description').children('h2').html(initial_slider_title);

			$('#home-projects-slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
			    //console.log('change');
					var slider_title = $('.slick-current').children('h2').html(); //console.log(slider_title);
					$('#home-projects').children('.home-projects-description').children('h2').html(slider_title);
					var slider_link = $('.slick-current').children('.hidden-link').html(); //console.log(slider_link);
					$('#home-projects').children('.home-projects-description').children('.home-projects-description-cta').children('.home-links-slider').attr('href', slider_link);
			});

			<?php endif; ?>

			<?php if (is_page( 'our-projects' )) : ?>

			$('.nav-item').click(function(){
				$('.navbar-nav').children('.nav-item').removeClass('active');
				$(this).addClass('active');
			});

			//var hash = window.location.hash;
			//console.log(hash);
			var url = $(location).attr('href'),
			parts = url.split("/"),
			last_part = parts[parts.length-1]; //console.log(last_part);

			if (last_part == '?tenant') {
				$('.nav-link-tenant').trigger('click');
					var mixer = mixitup('.sort-projects', {
				    load: {
			        filter: '.tenant-spaces'
				    }
				});
				$('.cat-content').removeClass("active-cc");	
				$('div#cat-tenant-spaces').addClass("active-cc");
			}
			else if (last_part == '?capital') {
				$('.nav-link-capital').click();
				var mixer = mixitup('.sort-projects', {
			    load: {
		        filter: '.capital-improvement'
			    }
				});
				$('.cat-content').removeClass("active-cc");	
				$('div#cat-capital-improvement').addClass("active-cc");
			}
			else if (last_part == '?special') {
				$('.nav-link-special').click();
				var mixer = mixitup('.sort-projects', {
			    load: {
		        filter: '.special-projects'
			    }
				});

				$('.cat-content').removeClass("active-cc");	
				$('div#cat-special-projects').addClass("active-cc");
			}
			else {
				var mixer = mixitup('.sort-projects');
			}
			<?php endif; ?>

			<?php if (is_singular( 'projects' )) : ?>
			$('#single-project-gallery').slick({
						slidesToShow: 1,
						slidesToScroll: 1,
						centerMode: true,
						focusOnSelect: true,
						dots: false,
					prevArrow: false,
					nextArrow: false,
					autoplay: false,
						autoplaySpeed: 2000,
						prevArrow: $('.prev'),
				nextArrow: $('.next')
			});
			<?php endif; ?>

			<?php if (is_page( 'what-we-do' )) : ?>
			$('.nav-item').click(function(){
				$('.navbar-nav').children('.nav-item').removeClass('active');
				$(this).addClass('active');
			});

      $('#preconstruction-gallery-slider').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				centerMode: false,
				focusOnSelect: true,
				dots: false,
    		prevArrow: false,
    		nextArrow: false,
  			autoplay: false,
				autoplaySpeed: 2000,
				prevArrow: $('.preconstruction-prev'),
      	nextArrow: $('.preconstruction-next')
      });
      $('#construction-gallery-slider').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				centerMode: false,
				focusOnSelect: true,
				dots: false,
    		prevArrow: false,
    		nextArrow: false,
  			autoplay: false,
				autoplaySpeed: 2000,
				prevArrow: $('.construction-prev'),
      	nextArrow: $('.construction-next')
      });
      $('#scheduling-gallery-slider').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				centerMode: false,
				focusOnSelect: true,
				dots: false,
    		prevArrow: false,
    		nextArrow: false,
  			autoplay: false,
				autoplaySpeed: 2000,
				prevArrow: $('.scheduling-prev'),
      	nextArrow: $('.scheduling-next')
      });
      $('#safety-gallery-slider').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				centerMode: false,
				focusOnSelect: true,
				dots: false,
    		prevArrow: false,
    		nextArrow: false,
  			autoplay: false,
				autoplaySpeed: 2000,
				prevArrow: $('.safety-prev'),
      	nextArrow: $('.safety-next')
      });

	  $('#preconstruction-gallery-slider').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				centerMode: false,
				focusOnSelect: true,
				dots: false,
    		prevArrow: false,
    		nextArrow: false,
  			autoplay: false,
				autoplaySpeed: 2000,
				prevArrow: $('.preconstruction-prev'),
      	nextArrow: $('.preconstruction-next')
      });
			<?php endif; ?>

			<?php if (is_page( 'who-we-are' )) : ?>
			/* Every time the window is scrolled... */
			$(window).scroll( function(){
				var bottom_of_object = $(".fade-bottom-up-leaders-92").offset().top + $(".fade-bottom-up-leaders-92").outerHeight();
				var bottom_of_window = $(window).scrollTop() + $(window).height();

				/* If the object is completely visible in the window, fade it in */
				if ( bottom_of_window > bottom_of_object )
				{
					setTimeout(function(){
						$(".fade-bottom-up-leaders-92").addClass('visible');
						setTimeout(function(){
							$(".fade-bottom-up-leaders-93").addClass('visible');
							setTimeout(function(){
								$(".fade-bottom-up-leaders-94").addClass('visible');
							}, 100);
						}, 100);
					}, 100);
				}
			});

			$('#testimonials-slider').slick({
			  centerMode: true,
			  centerPadding: '120px',
			  slidesToShow: 3,
				dots: false,
				prevArrow: $('.testimonial-prev'),
				nextArrow: $('.testimonial-next'),
			  responsive: [
			    {
			      breakpoint: 768,
			      settings: {
			        arrows: false,
			        centerMode: true,
			        centerPadding: '40px',
			        slidesToShow: 3
			      }
			    },
			    {
			      breakpoint: 480,
			      settings: {
			        arrows: false,
			        centerMode: true,
			        centerPadding: '40px',
			        slidesToShow: 1
			      }
			    }
			  ]
			});
			<?php endif; ?>

			$(".fancybox").fancybox();

			$(".projects-showcase-images").click(function(){
				$(this).children("ul").children("a:first").click();
			});

			// $(".projects-showcase-description").click(function(){
			// 	console.log($(this).html());
			// 	$(this).parent().children(".projects-showcase-images").children("ul").children("a.fancybox").click();
			// });

			/* Scroll Magic Controller */
			var controller = new ScrollMagic.Controller();

			<?php if (is_page( 'who-we-are' ) || is_page( 'contact' )) : ?>
			new ScrollMagic.Scene({
				triggerElement: ".fade-bottom-up",
				triggerHook: 0.8, // show, when scrolled 10% into view
				offset: 50 // move trigger to center of element
			})
			.setClassToggle(".fade-bottom-up", "visible") // add class to reveal
			.reverse(false)
			.addTo(controller);

			new ScrollMagic.Scene({
				triggerElement: ".fade-bottom-up-leadership",
				triggerHook: 0.8, // show, when scrolled 10% into view
				offset: 50 // move trigger to center of element
			})
			.setClassToggle(".fade-bottom-up-leadership", "visible") // add class to reveal
			.reverse(false)
			.addTo(controller);

			new ScrollMagic.Scene({
				triggerElement: ".fade-left-to-right-leaders",
				triggerHook: 0.5, // show, when scrolled 10% into view
				offset: 50 // move trigger to center of element
			})
			.setClassToggle(".fade-left-to-right-leaders", "visible") // add class to reveal
			.reverse(false)
			.addTo(controller);
			<?php endif; ?>

			new ScrollMagic.Scene({
				triggerElement: ".fade-in",
				triggerHook: 0.8, // show, when scrolled 10% into view
				offset: 50 // move trigger to center of element
			})
			.setClassToggle(".fade-in", "visible") // add class to reveal
			.reverse(false)
			.addTo(controller);

			new ScrollMagic.Scene({
				triggerElement: ".fade-left-to-right",
				triggerHook: 0.5, // show, when scrolled 10% into view
				offset: 50 // move trigger to center of element
			})
			.setClassToggle(".fade-left-to-right", "visible") // add class to reveal
			.reverse(false)
			.addTo(controller);

			new ScrollMagic.Scene({
				triggerElement: ".fade-left-to-right-footer",
				triggerHook: 0.5, // show, when scrolled 10% into view
				offset: 50 // move trigger to center of element
			})
			.setClassToggle(".fade-left-to-right-footer", "visible") // add class to reveal
			.reverse(false)
			.addTo(controller);

			new ScrollMagic.Scene({
				triggerElement: ".fade-right-to-left",
				triggerHook: 0.8, // show, when scrolled 10% into view
				offset: 50 // move trigger to center of element
			})
			.setClassToggle(".fade-right-to-left", "visible") // add class to reveal
			.reverse(false)
			.addTo(controller);

			new ScrollMagic.Scene({
				triggerElement: ".project-fade-right-to-left",
				triggerHook: 0.8, // show, when scrolled 10% into view
				offset: 50 // move trigger to center of element
			})
			.setClassToggle(".project-fade-right-to-left", "visible") // add class to reveal
			.reverse(false)
			.addTo(controller);

			$('.tnp-email').attr('placeholder', 'YOUR EMAIL ADDRESS');
		});
	</script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
		AOS.init({
			delay: 3000,
		});
	</script>
</body>
</html>
