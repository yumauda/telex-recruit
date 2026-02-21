<?php get_header(); ?>
<main>
  <div class="l-inner">
    <p class="test">vite環境のテストで</p>
    <?php get_template_part('includes/reserve'); ?>
  </div>
  <figure class="p-test__img">
    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/adult_img.webp" alt="金属の未来をリファイン" width="431" height="38">
  </figure>
</main>
<?php get_footer() ?>