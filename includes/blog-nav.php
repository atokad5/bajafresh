<?php 
  $bodyClass = get_body_class();
  $newsSingle = is_page_template('news-template-default');
  $root = get_template_directory_uri(); 
;?>

<nav class="nav-nf">
  <div class="is-dates-mobile inner is-center">
    <p>OCTOBER 19th & 20th</p>
  </div>
  <div class="inner">
    <div class="logo-nf">
      <a href="<?php echo site_url('');?>">
        <img src="<?php echo "$root/_assets/images/bbf-white.png"; ?>" alt="">
      </a>
    </div>
    <div class="back-home">
      <ul>
        <li class="buy-now-btn"><a href="<?php echo site_url('#tickets');?>">Tickets</a></li>
      </ul>
    </div>
    <div class="dates-desktop">
      <p>OCTOBER 19th & 20th</p>
    </div>
  </div>
</nav>
