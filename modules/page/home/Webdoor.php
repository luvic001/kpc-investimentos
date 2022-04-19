<?php

if (!defined('PATH')) exit;
$webdoor = to_object(get_field('webdoor'));
$ind = 0;

if ($webdoor):

?>

<section class="site-webdoor">

  <div id="carousel-webdoor" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-inner">

      <?php foreach ($webdoor as $item): ?>
        <div class="carousel-item carousel-item-<?= $ind ?> <?= ($ind == 0 ? 'active' : null) ?>">
          <div class="slide-content">
            <?php if ($item->{'background-video-code'}): ?>
              <div class="background-video">
                <video class="wp-video" width="640" height="390" preload="metadata" autoplay="autoplay" muted loop>
                  <source type="video/mp4" src="<?= $item->{'background-video-code'} ?>">
                  <a href="<?= $item->{'background-video-code'} ?>"><?= $item->{'background-video-code'} ?></a>
                </video>
              </div>
            <?php endif; ?>
            <div class="slide-background background-parallax">
              <style>
                .carousel-item-<?= $ind ?> .slide-background {
                  background-image: url('<?= wp_get_image($item->{'webdoor-image_mobile'}) ?>');
                }

                @media (min-width: 768px) {
                  .carousel-item-<?= $ind ?> .slide-background {
                    background-image: url('<?= wp_get_image($item->{'webdoor-image_desktop'}) ?>');
                  }
                }

                <?php if ($item->{'webdoor-content-color'}): ?>
                  .carousel-item-<?= $ind ?> .slide-text h2 {
                    color: <?= $item->{'webdoor-content-color'} ?>;
                  }
                <?php endif; ?>

                <?php if ($item->{'webdoor-content-line_color'}): ?>
                  section.site-webdoor 
                    #carousel-webdoor 
                      .carousel-inner 
                        .carousel-item.carousel-item-<?= $ind ?>
                          .slide-content 
                            .slide-text 
                              h2:after {
                                background-color: <?= $item->{'webdoor-content-line_color'} ?>;
                              }
                <?php endif; ?>

              </style>
            </div>
            
            <div class="container d-flex align-items-center h-100">
              <div class="slide-text">
                <h2><?= $item->{'webdoor-content'} ?></h2>

                <?php if ($item->{'webdoor-link'}): ?>
                  <a 
                    href="<?= $item->{'webdoor-link'} ?>" 
                    class="btn-site"
                    <?= ($item->{'webdoor-link_newblank'} ? 'target="_blank"' : null) ?>>
                    <?= $item->{'webdoor-link_text'} ?: 'Saiba Mais' ?>
                  </a>
                <?php endif; ?>

              </div>
            </div>

          </div>
        </div>
      <?php $ind++; endforeach; ?>

    </div>
    
    <?php if ($ind > 1): ?>
    <div class="carousel-indicators">
      <?php for ($i=0; $i < $ind; $i++): ?>
        <button 
          type="button" 
          data-bs-target="#carousel-webdoor" 
          data-bs-slide-to="<?= $i ?>" 
          class="<?= ($i == 0 ? 'active' : null) ?>" 
          aria-current="true" 
          aria-label="Slide <?= $i ?>"></button>
      <?php endfor; ?>
    </div>
    <?php endif; ?>

  </div>

  <div class="container scroll-down">
    <a href="#quem-somos" title="Quem Somos">
      <?= svg('angle-down-kpc') ?>
    </a>
  </div>

</section>

<?php

endif;