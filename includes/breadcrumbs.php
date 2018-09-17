<?php 
$bodyClass = get_body_class(); 
$singlePage = $bodyClass[2];
?>
<section id="bread">
  <div class="inner">
    <ul class="breadcrumbs">
      <li>
        <span class="li-elements">
          <a href="<?php echo site_url('/'); ?>">Home</a>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
        </span>
      </li>
      <li>
        <span class="li-elements">
          <a href="<?php echo site_url('/news'); ?>">News/Resources</a>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
        </span>
      </li>
      <?php if($singlePage === "single-news") { ;?>
      <li>
        <span class="li-elements">
          <a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
        </span>
      </li>
      <?php } ;?>
    </ul>
  </div>
</section>