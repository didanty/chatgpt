<?php get_header(); ?>
<div class="hero-video">
  <button class="showreel-btn">▶ Showreel</button>
  Видео заглушка
</div>

<section class="services">
  <div class="card">
    <h3>Future Vision Design</h3>
    <p>Определяем каким должен быть следующий шаг цифрового продукта</p>
    <div class="image-placeholder">Картинка Future Vision</div>
  </div>
  <div class="card">
    <h3>Продуктовый дизайн</h3>
    <p>Собираем продуктовые дизайн-команды для масштабирования продуктов</p>
    <div class="image-placeholder">Картинка Product Design</div>
  </div>
  <div class="card">
    <h3>Сайты и приложения</h3>
    <p>Мы проектируем сайты, сервисы и приложения любой сложности.</p>
    <div class="image-placeholder">Картинка Apps</div>
  </div>
  <div class="card">
    <h3>Брендинг</h3>
    <p>Создаём брендинг, который помогает бизнесу выделиться на рынке.</p>
    <div class="image-placeholder">Картинка Branding</div>
  </div>
</section>

<section class="stats">
  <div class="stat-card"><h2>60</h2>Завершённых проектов</div>
  <div class="stat-card"><h2>3</h2>Года на рынке</div>
  <div class="stat-card"><h2>133</h2>Клиентов по всему миру</div>
</section>

<section class="projects">
  <div class="project-item">Банк Бизнес<div class="label">Case</div></div>
  <div class="project-item">СТОМАН III<div class="label">Case</div></div>
  <div class="project-item">Абсолют страхование<div class="label">Case</div></div>
  <div class="project-item">METRO Cash & Carry<div class="label">Case</div></div>
  <div class="project-item">Аэропорт Шереметьево<div class="label">Case</div></div>
  <div class="project-carousel">Карусель фото заглушка</div>
</section>

<section class="methodology">
  <h3>Методология Design Disrupt by Beta</h3>
  <div class="cards">
    <div class="card">Блок 1</div>
    <div class="card">Блок 2</div>
    <div class="card">Блок 3</div>
  </div>
</section>

<section class="clients">
  <h3>Клиенты</h3>
  <ul>
    <li>Абсолют страхование</li>
    <li>METRO Cash & Carry</li>
    <li>Аэропорт Шереметьево</li>
    <li>Банк Бизнес</li>
    <li>СТОМАН III</li>
    <li>Future Vision</li>
  </ul>
</section>

<section class="contacts-block">
  <div>
    <h3>Контакты</h3>
    <p>Москва, Болотная набережная 3с3</p>
    <p>т. +7 (499) 704 63 34</p>
    <p>e. hello@beta.ru</p>
  </div>
  <div class="map">Карта заглушка</div>
</section>

<footer>
  © ООО «Бета Дисрапт» с 2021 года
</footer>

<script>
  document.querySelectorAll('.methodology .card').forEach(card => {
    card.addEventListener('click', () => {
      alert('Открыт интерактивный блок: ' + card.textContent);
    });
  });
</script>
<?php get_footer(); ?>
