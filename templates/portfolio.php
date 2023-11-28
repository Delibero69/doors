<?php get_header(); 
/*
Template name: Примеры работ
*/
?>
  <!-- Наши работы -->
  <div class="portfolio" style="background-image: url(<?= CFS()->get('background_portfolio'); ?>)">
    <div class="container">
      <div class="row">
        <div class="col-12">

          <div class="gallery">
          <?php
                $loop=CFS()->get( 'portfolio' );
                foreach ( $loop as $row ) {
                    ?>

                    <a href="<?=$row['portfolio__image']; ?>" data-caption="<?=$row['portfolio__description']; ?>">
                      <img src="<?=$row['portfolio__image']; ?>" alt="<?=$row['portfolio__title']; ?>">
                    </a>

                    <?php
                }
                ?>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- Футер -->
	<?php get_footer(); ?>