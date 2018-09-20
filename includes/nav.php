<?php 
$pageTemplate = is_page_template('templates/news.php');
$checkerPage = $pageTemplate ? 'True' : 'false';
?>

<?php if(!$checkerPage) { ?>
<li><a class="slide_link" href="#tickets">Tickets</a></li>
<li><a class="lineup_link" href="#lineup">Lineup</a></li>
<li><a class="slide_link" href="#venue">The Venue</a></li>
<li><a class="slide_link" href="#location">Location</a></li>
<li><a class="slide_link" href="#faqs">Faq's</a></li>
<li><a href="<?php echo site_url('/news');?>">News</a></li>
<?php }  else { ?>

<li><a href="<?php echo site_url(''); ?>#tickets">Tickets</a></li>
<li><a class="lineup_link" href="#lineup">Lineup</a></li>
<li><a href="<?php echo site_url(''); ?>#venue">The Venue</a></li>
<li><a href="<?php echo site_url(''); ?>#location">Location</a></li>
<li><a href="<?php echo site_url(''); ?>#faqs">Faq's</a></li>
<li><a href="<?php echo site_url('/news');?>">News</a></li>
<?php } ?>
<!-- <li><a href="mailto:support@bajabeachfest.com">Contact</a></li> -->