<?php get_header(); 
/*
Template name: О компании
*/
?>
  <!-- О компании -->
  <div class="about-company" style="background-image: url(<?= CFS()->get('about_bg'); ?>)">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <img src="<?= CFS()->get('about_img'); ?>" alt="">
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
  <!-- Преимущества  -->
  	<?php get_header('advantages'); ?>
  <!-- Технический паспорт -->
  <div class="pasport" style="background-image: url(<?= CFS()->get('about_pasport_bf'); ?>)">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2><?= CFS()->get('about_pasport_title'); ?></h2>
          <p><?= CFS()->get('about_pasport_text'); ?></p>
          <a href="<?= CFS()->get('about_pasport_open'); ?>" class="btn" target="_blank"><?= CFS()->get('about_pasport_open_btn'); ?></a>
          <a href="<?= CFS()->get('about_pasport_download'); ?>" class="btn" download=""><?= CFS()->get('about_pasport_download_btn'); ?></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Футер -->
  <?php get_footer(); ?>