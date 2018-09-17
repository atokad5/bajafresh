<?php $root = get_template_directory_uri(); ?>

<div class="signup-parent">
  <div class="signup-el">
    <h4><?php the_field('subscribe_header', 'options') ;?></h4>
    <form action="" class="form">
      <input class="email-el" type="email" placeholder="Email Address">
      <button type="submit"><?php the_field('subscribe_button', 'options') ;?></button>
    </form>
    <div class="msg"></div>
  </div>
</div>