<?php
/* Template Name: Услуги */
get_header();
?>
<section class="services">
<?php
$query = new WP_Query(['post_type'=>'expertise','posts_per_page'=>-1]);
if($query->have_posts()):
  while($query->have_posts()): $query->the_post(); ?>
    <div class="card">
      <?php if(has_post_thumbnail()) the_post_thumbnail('large'); ?>
      <h3><?php the_title(); ?></h3>
      <?php the_content(); ?>
    </div>
<?php endwhile; wp_reset_postdata(); endif; ?>
</section>
<?php get_footer(); ?>
