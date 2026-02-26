<?php
$posts = get_query_var('recruit_event_posts');
$use_posts_array = is_array($posts);
?>

<section class="p-recruit-archive">
  <div class="l-inner">
    <h1 class="p-recruit-archive__title">説明会一覧</h1>

    <?php if ($use_posts_array ? !empty($posts) : have_posts()) : ?>
      <ul class="p-recruit-archive__lists">
        <?php if ($use_posts_array) : ?>
          <?php foreach ($posts as $post) : ?>
            <?php
            setup_postdata($post);
            $date_text = telexr_get_custom_field('recruit_date_text', get_the_ID(), '');
            ?>
            <li class="p-recruit-archive__list">
              <a class="p-recruit-archive__link" href="<?php the_permalink(); ?>">
                <?php if (!empty($date_text)) : ?>
                  <p class="p-recruit-archive__date"><?php echo esc_html($date_text); ?></p>
                <?php endif; ?>
                <p class="p-recruit-archive__name"><?php the_title(); ?></p>
              </a>
            </li>
          <?php endforeach; ?>
        <?php else : ?>
          <?php while (have_posts()) : the_post(); ?>
            <?php $date_text = telexr_get_custom_field('recruit_date_text', get_the_ID(), ''); ?>
            <li class="p-recruit-archive__list">
              <a class="p-recruit-archive__link" href="<?php the_permalink(); ?>">
                <?php if (!empty($date_text)) : ?>
                  <p class="p-recruit-archive__date"><?php echo esc_html($date_text); ?></p>
                <?php endif; ?>
                <p class="p-recruit-archive__name"><?php the_title(); ?></p>
              </a>
            </li>
          <?php endwhile; ?>
        <?php endif; ?>
      </ul>
      <?php wp_reset_postdata(); ?>
    <?php else : ?>
      <p class="p-recruit-archive__empty">現在、表示できる説明会はありません。</p>
    <?php endif; ?>
  </div>
</section>

