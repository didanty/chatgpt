<?php
/* Template Name: Лаборатории */
get_header();
?>
<table>
  <thead>
    <tr><th>№</th><th>Название</th><th>ИНН</th><th>Срок аккредитации</th></tr>
  </thead>
  <tbody>
  <?php
  $query = new WP_Query(['post_type'=>'laboratory','posts_per_page'=>-1]);
  $i=1;
  if($query->have_posts()):
    while($query->have_posts()): $query->the_post();
      $inn = get_post_meta(get_the_ID(),'lab_inn',true);
      $number = get_post_meta(get_the_ID(),'lab_number',true);
      $term = get_post_meta(get_the_ID(),'lab_term',true);
  ?>
    <tr>
      <td><?php echo $i++; ?></td>
      <td><?php the_title(); ?></td>
      <td><?php echo esc_html($inn); ?></td>
      <td><?php echo esc_html($term); ?></td>
    </tr>
  <?php endwhile; wp_reset_postdata(); endif; ?>
  </tbody>
</table>
<?php get_footer(); ?>
