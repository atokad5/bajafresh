<?php /* Template Name: Thank You Landing */
get_header();
$root = get_template_directory_uri();
$user = $_GET['firstname']
;?>
<section class="form-landing form-field_landing-test">
  <div class="is-form-el left-image-side">
    <div class="baja-logo desktop">
      <img src="<?php echo "$root/_assets/images/bbf-white.png" ; ?> " alt="">
    </div>

    <div class="is-el-bg" data-bg-src="<?php the_field('background_image') ;?> "></div>
  </div>

  <div class="is-form-el right-form-side">
    <div class="form-element">
      <div class="form-hdr is-center">
      <div class="mobile mobile-logo">
        <img src="<?php echo "$root/_assets/images/bbf-white.png" ; ?> " alt="">
      </div>
        <h1><?php the_field('thank_you_title') ;?>
        <?php 
          if(isset($user)) {
           echo $user.",";
          }?>
           </h1>
          <?php the_field('thank_you_message') ;?>
        
      </div>
      
    </div>
  </div>

</section>

<?php get_footer() ;?>