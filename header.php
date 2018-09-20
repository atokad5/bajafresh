<?php 
	$root = get_template_directory_uri();
	$homePage = is_page_template('templates/home.php');
?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(''); ?></title>
	<link rel="stylesheet" href="<?php echo "$root/dist/assets/css/style.css?fwaw=fwa"; ?>">
	<meta name="viewport" content="Width=device-width, initial-scale=1, user-scalable=no">
	<script src="https://use.fontawesome.com/1eda73ce4d.js"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>



<main class="site-container imheresitecontainer">

	<?php if($homePage){ ;?>
	<div class="fixed-nav">
		<div class="inner fixed-naver">
			<ul class="duplicated-nav">
				<?php get_template_part('includes/nav') ;?>
			</ul>
		</div>
	</div>
	
	<div class="countdown-bar">
		
		<div class="countdown-el">
			<div class="countdown" data-countdown="<?php the_field('countdown', 'options'); ?>"></div>
		</div>
	</div>
	<nav>
		<div class="inner">
			<ul class="nav-li">
				<?php get_template_part('includes/nav') ;?>
			</ul>
		</div>
	</nav>

	<header>
		<div  class="inner over-bg">
			<div class="hdr-inner-contents">
				<div class="logo-icon">
					<img src="<?php the_field('header_logo', 'options'); ?>" alt="">
				</div>
				<div class="hero-title">
					<?php 
						$checker = get_field('header_text', 'options');

						if($checker) {
					?>
					<h1 class="the-title"><?php the_field('header_text', 'options') ;?></h1>
						<?php } ?>
				</div>
				<?php $showArtist = get_field('show_featured_artist', 'options');
						if($showArtist) {
				 ;?>
				<div class="featured-artist">
					<div class="featured-artist-parent">
						<figure class="the-featured-list">
							<img src="<?php the_field('featured_artist_image', 'options'); ?>" alt="">
						</figure>
					</div>
				</div>
				<?php } ?>
				<div class="cta-parent">
					<a id="number1-48802458467" class="cta">
						<span class="all-text">
							<span class="current-text">
								<?php the_field('button_one_text','options'); ;?>
							</span>
							<span class="next-text">
								shop now
							</span>
						</span>
						<span class="bg-sleeve"></span>
					</a>
					<a id="number2-48802458467" class="cta">
						<span class="all-text">
							<span class="current-text">
								<?php the_field('button_two_text','options'); ;?>
							</span>
							<span class="next-text">
								shop now
							</span>
						</span>
						<span class="bg-sleeve"></span>
					</a>
				</div>
				
				<div class="share-parent">
				
					<div class="share-element">
						<span>SHARE EVENT</span>
						
					</div>
					
					<ul class="share-element share-element-ul">
						<li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo site_url('');?>"><i class="fa fa-facebook"></i></a></li>
						<li><a target="_blank" href="http://twitter.com/share?url=<?php echo site_url('');?>&hashtags=BajaBeach"><i class="fa fa-twitter"></i></a></li>
					</ul>
					
				</div>
			</div>
		</div>

		<div id="hdrImg" class="bg-el" style="background-image: url(<?php the_field('background_image','options') ;?>);"></div>
	</header>

	<?php } ;?>



