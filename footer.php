<?php 
	$root = get_template_directory_uri();
	$homePage = is_page_template('templates/home.php');
	$formLanding = is_page_template('templates/form-landing.php') || is_page_template('templates/thank-you-landing.php');
	// $thanks = is_page_template('templates/thank-you-landing.php');
?>


<?php if(!$formLanding) { ;?>
<!-- Share features -->
<div class="sharing-icons">
	<div class="share-event">SHARE</div>
	<ul class="share-element share-element-ul">
		<li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_page_link();?>"><i class="fa fa-facebook"></i></a></li>
		<li><a target="_blank" href="http://twitter.com/share?url=<?php echo get_page_link();?>&hashtags=BajaBeach"><i class="fa fa-twitter"></i></a></li>
	</ul>
</div>

 <!-- / sharing -->

<?php } ;?>
<div class="lineup-modal">
		<div class="line-up-modal-inner">
			<img src="<?php the_field('banner_image', 'options');?>" alt="">
			<button class="close-lineup lineup_link">
				<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
			</button>
		</div>
	</div>
<?php if($homePage) { ;?>
 



<div class="footer-nav-el">
	<div class="inner inner-footer">
		<!-- <div class="inner-foot-el has-the-img">
			<img class="minor-logo" src="<?php the_field('header_logo', 'options'); ;?>" alt="">
		</div> -->
		<div class="inner-foot-el">
			<div class="shop-ticks-parent">
				<a id="number5-48802458467" class="shop-ticks">
					<i class="fa fa-ticket"></i> Shop Tickets
				</a>
			</div>
		</div>
	</div>
</div>


<section id="faqs">
	<div class="inner faq-inner">
		<div class="is-centered-with-content">
			<div class="section-title faq-title">
				<h1><?php the_field('faq_title', 'options') ;?></h1>
			</div>
			<?php the_field('faq_content', 'options') ;?>
		</div>
		

		<div class="cat-parent">
			<?php 
				$faq = get_field('faqs', 'options');
				foreach($faq as $theF) {
			;?>
			
				<div class="cat-el">
					<div class="cat-section">
						<h2 class="cat-type"><?php echo $theF['category'] ;?></h2>
					</div>
					<div class="cat-section">
						<?php $info = $theF['the_info'] ;?>
						<?php foreach($info as $showDets) { ;?>			
							<div class="info-parent">
								<div class="the-question">
									<h4><?php echo $showDets['question'] ;?></h4>
									<div class="indicator">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3.471 3.471">
											<g id="Group_1" data-name="Group 1" transform="translate(-98 -85)">
												<rect id="Rectangle_1" data-name="Rectangle 1" width="0.423" height="3.471" transform="translate(99.524 85)"/>
												<rect id="Rectangle_2" data-name="Rectangle 2" width="0.423" height="3.471" transform="translate(101.471 86.524) rotate(90)"/>
											</g>
										</svg>
									</div>
								</div>
								<div class="the-answer">
									<?php echo $showDets['answer'] ;?>
								</div>
							</div>	
						<?php } ;?>
					</div>
				</div>		

			<?php } ;?>
		</div>

	</div>
</section>


<?php } ;?>

<?php if(!$formLanding) { ;?>
<footer>
	<div class="inner chyea">

	
		<div class="ft-logo-parent">
			<figure class="ft-logo">
				<img src="<?php the_field('header_logo', 'options');?>" alt="">
			</figure>
		</div>
	
		
			<div class="footer-nav">
				<ul class="footer-li">
					<?php get_template_part('includes/nav') ;?>
				</ul>
			</div>
		

		<?php $spons = get_field('show_sponsors', 'options'); ?>

			<?php if($spons) { ;?>
			<section class="sponsors">
				<div class="inner">
					<div class="sponsor-parent">

						<div class="sponsor-el">
								<h3>Sponsored By</h3>
						</div>
						<div class="sponsor-el image-parent-sponsor">
							<?php $imga = get_field('sponsor_gallery','options') ;?>
							<?php foreach($imga as $shI) { ?>
								<figure class="spn-img">
									<a href="<?php echo $shI['caption'];?>">
										<img src="<?php echo $shI['url'];?>" alt="">
									</a>
								</figure>
							<?php } ?>
						</div>
					</div>
				</div>
			</section>
			<?php } ;?>

		<ul class="social-nav">
			<li><a target="_blank" href="https://www.instagram.com/bajabeachfest"><i class="fa fa-instagram"></i></a></li>
			<li><a target="_blank" href="https://twitter.com/BajaBeachFest"><i class="fa fa-twitter"></i></a></li>
			<li><a target="_blank" href="https://www.facebook.com/BajaBeachFest/"><i class="fa fa-facebook"></i></a></li>
		</ul>

		<div class="copy-rights">
			<p style="margin-top: 0em;">Questions? Feel free to contact <a href="mailto:support@bajabeachfest.com" style="color: white; font-weight: bolder;" >support@bajabeachfest.com</a></p>
		Copyright © <?php echo date('Y'); ?>, COLLECTIVMX LLC. All Rights Reserved.
		</div>
							
		<div class="payment-options">
			<div class="terms" style="padding-bottom: 0.6em; font-size: 0.7em; ">
				<span class="mt-modal" style="cursor: pointer;">Terms & Conditions</span>
				<span style="margin: 0em 0.5em;">|</span>
				<span class="site-by">
					<a href="https://zitrocreative.com" style="color: white; text-decoration: none;">
						Site by Zitro Creative
					</a>
				</span>
			</div>
			<ul>
				<li>
					<div class="payment-img-parent">
						<?php get_template_part('includes/payment/visa') ;?>
					</div>
				</li>
				<li>
					<div class="payment-img-parent">
						<?php get_template_part('includes/payment/mastcard') ;?>
					</div>
				</li>
				<li>
					<div class="payment-img-parent">
						<?php get_template_part('includes/payment/american') ;?>
					</div>
				</li>
				<li>
					<div class="payment-img-parent">
						<?php get_template_part('includes/payment/discover') ;?>
					</div>
				</li>
			</ul>
		</div>
	</div>
</footer>

<?php } ;?>

<div class="modal-for-terms">
	<div class="modal-inner inner">
		<h1><?php the_field('tos_headline','options') ;?></h1>
		<?php the_field('tos_copy', 'options') ;?>
		<button class="mt-modal close-text">Close</button>
	</div>
	<button class="mt-modal btn">
	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
</button>
</div>

</main>



<!-- Noscript content for added SEO -->
<noscript><a href="https://www.eventbrite.com/e/test-1-tickets-48753302440" rel="noopener noreferrer" target="_blank"></noscript>
<!-- You can customize this button any way you like -->

<noscript></a>Buy Tickets on Eventbrite</noscript>

<script src="https://www.eventbrite.com/static/widgets/eb_widgets.js"></script>

<script type="text/javascript">
    var exampleCallback = function() {
        console.log('Order complete!');
    };
		var $id = '48802458467';

    window.EBWidgets.createWidget({
			widgetType: 'checkout',
			eventId: $id,
			modal: true,
			modalTriggerElementId: 'number1-'+$id,
			onOrderComplete: exampleCallback
		});
		window.EBWidgets.createWidget({
			widgetType: 'checkout',
			eventId: $id,
			modal: true,
			modalTriggerElementId: 'number2-'+$id,
			onOrderComplete: exampleCallback
		});
		window.EBWidgets.createWidget({
			widgetType: 'checkout',
			eventId: $id,
			modal: true,
			modalTriggerElementId: 'number3-'+$id,
			onOrderComplete: exampleCallback
		});
		window.EBWidgets.createWidget({
			widgetType: 'checkout',
			eventId: $id,
			modal: true,
			modalTriggerElementId: 'number4-'+$id,
			onOrderComplete: exampleCallback
		});
		window.EBWidgets.createWidget({
			widgetType: 'checkout',
			eventId: $id,
			modal: true,
			modalTriggerElementId: 'number5-'+$id,
			onOrderComplete: exampleCallback
		});

</script>

<script src="<?php echo "$root/dist/assets/js/app.bundle.js?a=saew" ?>"></script>
<?php  wp_footer();  ?>
</body>
</html>