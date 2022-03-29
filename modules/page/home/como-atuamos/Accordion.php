<?php

if (!defined('PATH')) exit;

global $accordion;
$ind = 0;

?>

<div class="accordion" id="accordion-atuacao">
  <?php foreach ($accordion as $atuacao): ?>
  <div class="accordion-item">
    <h2 class="accordion-header" id="accordion-item-head-<?= $ind ?>">
      <button 
        class="accordion-button collapsed" 
        type="button" 
        data-bs-toggle="collapse" 
        data-bs-target="#accordion-collapse-<?= $ind ?>" 
        aria-expanded="false" 
        aria-controls="accordion-collapse-<?= $ind ?>">
        <img src="<?= wp_get_image($atuacao->{'ca-accordeon-icon'}) ?>" alt="<?= $atuacao->{'ca-accordeon-title'} ?>">
        <?= $atuacao->{'ca-accordeon-title'} ?>
        <span class="accordion-arrow">
          <?= svg('angle-down-kpc--accordion') ?>
        </span>
      </button>
    </h2>
    <div 
      id="accordion-collapse-<?= $ind ?>" 
      class="accordion-collapse collapse" 
      aria-labelledby="accordion-item-head-<?= $ind ?>" 
      data-bs-parent="#accordion-atuacao">
      <div class="accordion-body">
        <?= $atuacao->{'ca-accordeon-content'} ?>
      </div>
    </div>
  </div>
  <?php $ind++; endforeach; ?>
  
</div>