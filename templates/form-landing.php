<?php /* Template Name: Form Landing */
get_header();
$root = get_template_directory_uri();
;?>
<section class="form-landing">
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
        <h1><?php the_field('section_title') ;?></h1>
        <?php the_field('section_content') ;?>
        
      </div>
      <form action="" class="the_landing_form" data-url="<?php the_field('form_url');?>">
        <div class="input-field">
          <input type="text" class="order_number" placeholder="Order Number" required>
        </div>
        <div class="input-field">
          <input type="text" class="first_name" placeholder="First Name" required>
        </div>
        <div class="input-field">
          <input type="text" class="last_name" placeholder="Last Name" required>
        </div>
        <div class="input-field">
          <input type="email" class="email_add" placeholder="Email Address" required>
        </div>
        <div class="input-field">
          <div class="drop-down">
            <span class="guest-count">Guest Count in Your Party</span>
            <div class="drop-down-inner">
              <ul>
                <li>2</li>
                <li>3</li>
                <li>4</li>
                <li>5</li>
                <li>6</li>
                <li>7</li>     
                <li>8</li>     
                <li>9</li>
                <li>9+</li>          
              </ul>
            </div>
          </div>
          <input class="groupSize" type="text" id="drop-down" required style="display: none;" value="">
        </div>
        <div class="input-field">
          <input type="tel" class="number_" placeholder="Phone Number" required>
        </div>
        <div class="input-field is-center">
          <button>Submit</button>
        </div>
      </form>
    </div>
  </div>

</section>

<?php get_footer() ;?>