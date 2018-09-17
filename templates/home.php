<?php /* Template Name: Home Page */ ?>
<?php get_header(); 
	$root = get_template_directory_uri();
?>

<?php get_template_part('includes/imagewcontent'); ;?>
<?php get_template_part('includes/tickets'); ;?>
<?php get_template_part('includes/venue-map') ;?>
<?php get_template_part('includes/location') ;?>
<?php get_template_part('includes/left-content') ;?>
<?php get_footer(); ?>
