
 <?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
<h2><?php the_field('about_headline'); ?></h2>
 <hr>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
