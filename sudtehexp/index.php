<?php get_header(); ?>
<div class="hero-video">
  <button class="showreel-btn">▶ Showreel</button>
  Для тех, кто защищается —
</div>
<section class="services">
  <?php
  $query = new WP_Query(array('post_type'=>'expertise','posts_per_page'=>-1));
  if($query->have_posts()):
    while($query->have_posts()): $query->the_post(); ?>
      <div class="card">
        <?php if(has_post_thumbnail()) { the_post_thumbnail('large'); } ?>
        <h3><?php the_title(); ?></h3>
        <?php the_content(); ?>
      </div>
  <?php endwhile; wp_reset_postdata(); endif; ?>
</section>
<section class="methodology">
  <h3>Методологический аппарат</h3>
  <div class="cards">
    <div class="card">Блок 1</div>
    <div class="card">Блок 2</div>
    <div class="card">Блок 3</div>
  </div>
</section>
<section class="clients">
  <h3>Клиентура</h3>
  <ul>
    <li>PetroExpert</li>
    <li>ExpertizaIndex</li>
    <li>IrbisCompany</li>
    <li>EuroExperts</li>
    <li>Fi.Center</li>
  </ul>
</section>
<section class="contacts-block">
  <div>
    <h3>Контакты</h3>
    <p>Email: <a href="mailto:sudtehexpert@ya.ru">sudtehexpert@ya.ru</a></p>
    <p>Telegram: <a href="https://t.me/sudtehexperts">@sudtehexperts</a></p>
  </div>
  <div class="map">Карта заглушка</div>
</section>
<footer>
  © sudtehexp.ru
</footer>
<?php get_footer(); ?>
