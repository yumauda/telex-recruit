<?php get_header(); ?>
<main class="p-recruit">
  <section class="p-recruit__mv">
    <div class="p-recruit__mv-bg" aria-hidden="true">
      <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/images/common/recruit_mv.webp'); ?>" alt="" width="720" height="400">
    </div>
    <div class="p-recruit__mv-inner l-inner">
      <h1 class="p-recruit__title">テレックス関西<br>会社説明会</h1>
      <p class="p-recruit__date"><?php the_field('recruit_date_text'); ?></p>
    </div>
  </section>

  <section class="p-recruit__embed">
    <?php $recruit_iframe_url = get_post_meta(get_the_ID(), 'recruit_iframe_url', true); ?>
    <div class="p-recruit__embed-frame">
      <?php if (!empty($recruit_iframe_url)) : ?>
        <iframe src="<?php echo esc_url($recruit_iframe_url); ?>" title="会社説明会 参加登録" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <?php else : ?>
        <iframe
          src="https://player.vimeo.com/video/76979871?dnt=1&title=0&byline=0&portrait=0"
          title="（仮）Vimeo埋め込み"
          loading="lazy"
          allow="autoplay; fullscreen; picture-in-picture"
          allowfullscreen
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      <?php endif; ?>
    </div>
    <div class="p-recruit__embed-inner l-inner">
      <p class="p-recruit__embed-note">※視聴がうまくいかない場合は<br class="u-mobile">ブラウザを更新してください。</p>
    </div>
  </section>

  <section class="p-recruit__line">
    <div class="p-recruit__line-inner l-inner">
      <p class="p-recruit__line-text">
       
        <?php the_field('recruit_line_text'); ?>
      </p>

      <?php $recruit_line_url = get_post_meta(get_the_ID(), 'recruit_line_url', true); ?>
      <div class="p-recruit__line-btnWrapper">
        <a class="p-recruit__line-btn" href="<?php echo esc_url(!empty($recruit_line_url) ? $recruit_line_url : '#'); ?>" target="_blank" rel="noopener noreferrer">
          <p class="p-recruit__line-btnText">公式LINE追加はこちら</p>
          <div class="p-recruit__line-icon">
            <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/line_btn_icon.png" alt="公式LINE追加はこちら" width="14" height="14">
          </div>
        </a>
      </div>
    </div>
  </section>
</main>
<?php get_footer() ?>