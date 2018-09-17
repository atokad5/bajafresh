<?php get_header(); ?>


<?php get_template_part('includes/blog-nav'); ?>

<?php 
  if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="nav-spacer">
    <?php get_template_part('includes/breadcrumbs') ;?>
      <div class="inner">
        <div class="title-date">
          <h1 class="blog-hdr"><?php the_title();?></h1>
          <small>🔥 since: <?php the_date(); ?></small>
        </div>
        <div class="is-center">
          <img class="featured-image-single lazy-image" data-lazy="<?php the_post_thumbnail_url(); ?>" src="" alt="">
        </div>
        <article>
          <?php the_content(); ?>
        </article>
      </div>
    </section>
  <?php endwhile; ?>
<?php endif; ?>


<section>
  <div class="inner">
    <?php get_template_part('includes/signup') ;?>
  </div>
</section>
<?php get_footer(); ?>