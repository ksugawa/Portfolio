<?php get_header(); ?>
<div class="topimage">
  <div class="fv-center flex-c center">
    <div class="flex-r w-60">
      <a href="#contact">
        <div class="fv_btn contact_btn">
          <p>CONTACT</p>
        </div>
      </a>
      <div class="fv_btn">
        <p>CV</p>
      </div>
    </div>
    <div class="fv-font flex-r">
      <p>Design.</p>
      <p>Develop.</p>
    </div>
  </div>
</div>
<main class="main-container">
  <?php get_template_part('template-parts/head-line'); ?>
  <section id="aboutme" class="fade-in">
    <div class="contents-inner flex-r">
      <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutme.png" alt=""></div>
      <div class="w-60">
        <p class="txt_en font-26 font-w-600">About me</p>
        <p class="txt_en font-38 font-w-700 mb-2" id="text-target">
          I’m Kumiko, a UI/UX Designer and<br>
          Web Developer
        </p>
        <div class="flex-r desc">
          <p class="txt_en w-58">Starting from goal-setting, provide total support for web projects utilizing a wide range of skills. I have extensive experience in creating websites and developing web applications. In design production, I consistently represent the brand image and build a strong visual identity.</p>
          <p class="paragraph_jp">
            幅広いスキルを駆使し、課題とゴール設定から、Webプロジェクトをトータルサポートします。Webサイト制作や保守運用、Webアプリ等の開発を行っていきます。デザイン制作においては、ブランドイメージを一貫して表現し強力なビジュアルアイデンティティを構築します。
          </p>
        </div>
      </div>
    </div>
  </section>
  <section id="skill" class="fade-in">
    <div class="contents-inner flex-r">
      <?php get_template_part('template-parts/my-specialization'); ?>
      <?php get_template_part('template-parts/skillset'); ?>
  </section>
  <section id="project" class="fade-in">
    <div class="contents-inner">
      <div class="flex-r">
        <div class="mb-4">
          <p class="txt_en font-38 font-w-700">Recent Project</p>
          <p>最新のプロジェクト</p>
        </div>
        <div>
          <a href="<?php echo home_url(); ?>/work">
            <div class="more-btn">
              <span>VIEW MORE</span>
            </div>
          </a>
        </div>

      </div>
      <div>

        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 5
        );
        $my_query = new WP_Query($args);
        ?>
        <?php if ($my_query->have_posts()) : ?>

          <ul class="flex-r slider-line" id="project-slider">

            <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

              <?php
              $cat = get_the_category();
              $cat = $cat[0];
              $cat_link = get_category_link($cat);
              ?>

              <li class="item">
                <a href="<?php the_permalink(); ?>">
                  <div class="item-img">
                    <?php the_post_thumbnail(); ?>
                  </div>

                  <div class="ttlCol font-playfair">
                    <h2><?php the_title(); ?></h2>
                  </div>
                  <div class="ttl">
                    <div class="txt">
                      <p class="tag font-playfair"><?php echo $cat->cat_name; ?></p>
                      <p class="day font-playfair"><?php echo get_the_date(); ?></p>
                    </div>
                  </div>
                </a>
              </li>
            <?php endwhile; ?>
          </ul>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

      </div>
  </section>
  <section id="contact" class="fade-in">
    <div class="contents-inner flex-c">
      <div class="flex-r">
        <div class="contact-left">
          <div class="mb-4 contact-head">
            <p class="txt_en font-40 font-w-700">Contact</p>
            <p>お問い合わせ</p>
          </div>
          <div>
            <p>制作の依頼・ご相談などお気軽に<br>お問い合わせください。</p>
          </div>
          <div>
            <ul class="sns-icon-list flex-r">
              <li>
                <a href="https://github.com/ksugawa">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-github.svg" alt="">
                </a>
              </li>
              <li>
                <a href="https://www.linkedin.com/in/ksugawa">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-linkedin.svg" alt="">
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div>
          <?php get_template_part('template-parts/form'); ?>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>