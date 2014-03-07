<?php
/**
 * @file
 * Returns the HTML for comments.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728216
 */
?>
<article class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <header>
    <p class="submitted">
      <div class="product_review_img"><?php print $picture; ?></div>
      <div class="product_review_ai">
        <div class="product_review_auth"><?php print $submitted; ?></div>
        <div class="product_review_info"><?php print render($content);?></div>
      </div>
    </p>

    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <h3<?php print $title_attributes; ?>>
        <?php print $title; ?>
        <?php if ($new): ?>
          <mark class="new"><?php print $new; ?></mark> 
        <?php endif; ?>
      </h3>
    <?php elseif ($new): ?>
      <mark class="new"><?php print $new; ?></mark>
    <?php endif; ?>
    <?php print render($title_suffix); ?>

    <?php if ($status == 'comment-unpublished'): ?>
      <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
    <?php endif; ?>
  </header>
<!--  -->
  <?php if ($signature): ?>
    <footer class="user-signature clearfix">
      <?php print $signature; ?>
    </footer>
  <?php endif; ?>

 
</article>
