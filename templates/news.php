<?php /* Template Name: News */
$root = get_template_directory_uri(); 
get_header();
?>

<?php get_template_part('includes/blog-nav'); ?>

<header class="nav-spacer">
  <div class="inner">
    <div class="hdr-content-nf is-center over-bg">
      <h1 class="blog-hdr"><?php the_field('headline'); ;?></h1>
      <p><?php the_field('subheadline') ;?></p>
    </div>
  </div>
  <div id="hdrImg" class="bg-el is-el-bg" data-bg-src="<?php the_field('background_image') ;?>"></div>
</header>


<section>
  <div class="inner">

    <?php // get_template_part('includes/breadcrumbs') ;?>
    <div class="the-posts clear-fix">
      <?php 
        $news = New WP_Query(array(
          'post_type' => 'news'
        ));

        if($news -> have_posts()) : while ($news -> have_posts()) : $news -> the_post(); 
        
        ?>
        <?php $imgSrc = get_the_post_thumbnail(); ?>
          <div class="post-items">
          
            <div class="post-hero">
              <a href="<?php echo the_permalink();?>">
                <div class="post-bg is-el-bg" data-bg-src="<?php the_post_thumbnail_url(); ?>">
                
                </div>
              </a>
            </div>
            <div class="post-content">
              <h3><?php the_title(); ;?></h3>
              <small>🔥 since <?php echo get_the_date('m'.'.d'.'.Y');?></small>
              <p><?php echo wp_trim_words( get_the_content(), 40, '...' ); ?></p>
              <div class="buy-now-btn">
                <a href="<?php echo the_permalink();?>" class="btn">Read More</a>
              </div>
            </div>
          </div>
        <?php 
          endwhile;
          endif;
          wp_reset_postdata();
        ;?>
    </div>

    <?php get_template_part('includes/signup') ;?>
  </div>
</section>
<?php get_footer(); ?>