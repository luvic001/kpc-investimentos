<?php

if (!defined('PATH')) exit;
global ${'section-title'};

$terms = get_terms('categoria-de-projetos', [
  'hide_empty' => false
]);

$section = (object) [
  'title' => get_field('pj-title') ?: ${'section-title'}
];

$query = new WP_Query([
  'post_type' => 'projetos',
  'posts_per_page' => -1
]);

?>

<section class="site-sections section-projetos-realizados" id="projetos-realizados">

  <div class="container">
    <div class="section-title centered-title">
      <h2><?= $section->title ?></h2>
    </div>

    <?php if ($terms): ?>

      <div class="isotope-switcher">
        <ul>
          <li class="active">
            <a href="#" title="Mostrar Todos" isotope-toggle="*">Todos</a>
          </li>
          <?php foreach ($terms as $category): ?>
            <li>
              <a 
                href="#" 
                title="Filtrar apenas <?= $category->name ?>"
                isotope-toggle=".<?= $category->slug ?>"><?= $category->name ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

    <?php endif; ?>

    <?php if ($query->have_posts()): ?>
      <div class="row isotope-items">
        <?php while ($query->have_posts()): ?>
          <?php $query->the_post(); ?>
          <?php $ID = get_the_ID(); ?>

          <?php 
            $current_term = get_the_terms($ID, 'categoria-de-projetos')[0];
            $image = get_field('pj-home-image');
            $image = $image ? wp_get_image(get_field('pj-home-image')) : get_the_post_thumbnail_url();
          ?>

          <div class="col-12 col-sm-6 col-lg-4 isotope-item <?= $current_term->slug ?>">
            <a href="<?= get_the_permalink() ?>" title="<?= get_the_title() ?>">
              <div class="case-background background-item-<?= $ID ?>">
                <style>
                  .background-item-<?= $ID ?> {
                    background-image: url('<?= $image ?>');
                  }
                </style>
              </div>
              <div class="case-content">
                <p>
                  <span>
                    <?= $current_term->name ?>
                  </span>
                  <?= get_field('pj-home-title') ?: get_the_title() ?>
                </p>
              </div>

            </a>
          </div>

        <?php endwhile; ?>
      </div>
    <?php endif; ?>

  </div>

</section>

<?php

wp_reset_query();