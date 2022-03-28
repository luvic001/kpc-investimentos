<?php

if (!defined('PATH')) exit;
global $sitename;

?>

<footer class="site-footer">
  <div class="container">

    <div class="row footer-navigation">
      <div class="col-lg-3 site-logo">
        <a href="<?= site_url() ?>" target="_blank" title="<?= $sitename ?>">
          <?= get_site_logo('logo_do_site_footer') ?>
        </a>
      </div>
      <div class="col-lg-9">
        <div class="row">

          <div class="col-md-4">
            <?php if (get_theme_mod('contato-address')): ?>
              <article class="footer-widget">
                <div class="widget-icon">
                  <?= svg('location-pin') ?>
                </div>
                <div class="widget-content">
                  <h3 class="widget-title">
                    <?= get_theme_mod('contato-estado') ?>
                  </h3>
                  <address>
                    <?= get_theme_mod('contato-address') ?>
                  </address>
                </div>
              </article>
            <?php endif; ?>
          </div>
          
          <div class="col-md-8">
            <article class="footer-widget footer-menu">
              <div class="widget-icon">
                <?= svg('navigation-footer') ?>
              </div>
              <div class="widget-content">
                <h3 class="widget-title">
                  Navegue
                </h3>
                <nav class="d-flex menu-site">
                  <?= menu('menu-footer-1') ?>
                  <?= menu('menu-footer-2') ?>
                </nav>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-credits">
      <div class="d-flex flex-wrap flex-md-nowrap justify-content-center justify-content-md-between">
        <p class="">© 2022 KPC Investimentos. Todos os direitos reservados</p>
        <p class=" dev-link">
          Desenvolvido por:
          <a 
            href="https://agenciacampana.com.br" 
            title="Agência Campana | Marketing Digital"
            target="_blank">
            <img 
              src="<?= get_image('agencia-campana_logo_credit_white.png') ?>" 
              alt="Agência Campana | Marketing Digital">
          </a>
        </p>
      </div>
    </div>

  </div>
</footer>