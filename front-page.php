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
  <section id="aboutme" class="fade-in">
    <div class="contents-inner flex-r">
      <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutme.png" alt=""></div>
      <div class="w-60">
        <p class="txt_en font-26 font-w-600">About me</p>
        <p class="txt_en font-38 font-w-700 mb-2">
          I’m Kumiko, a UI/UX Designer and<br>
          Web Developer
        </p>
        <div class="flex-r desc">
          <p class="txt_en w-58">Starting from goal-setting for problem-solving, I utilize a wide range of skills to provide total support for web projects.I have extensive experience in creating and refurbishing various types of websites, including corporate sites and service sites.In design production, I consistently represent the brand image and build a strong visual identity.</p>
          <p class="paragraph_jp">
            幅広いスキルを駆使し、課題とゴール設定から、Webプロジェクトをトータルサポートします。コーポレートサイトやサービスサイトなど、さまざまなタイプのWebサイトの制作と改修を行っています。デザイン制作においては、 ブランドイメージを一貫して表現し強力なビジュアルアイデンティティを構築します。
          </p>
        </div>
      </div>
    </div>
  </section>
  <section id="skill" class="fade-in">
    <div class="contents-inner flex-r">
      <div class="w-46">
        <div class="mb-10">
          <p class="txt_en font-38 font-w-700">My Specialization</p>
          <p>提供できるもの</p>
        </div>
        <div>
          <ul class="flex-r">
            <li id="skill-card_design" class="card">
              <div class="flex-c center card-front">
                <div class="card-icon">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-design.svg" alt="">
                </div>
                <div>
                  <p class="txt_en font-w-700">Web Design</p>
                  <p class="txt_en font-w-700">UI/UX Design</p>
                </div>
              </div>
              <div class="flex-c center card-inner">
                <p class="txt_en font-w-700 font-48">12</p>
                <p class="txt_en font-w-700">Project</p>
              </div>
            </li>
            <li id="skill-card_develop" class="card">
              <div class="flex-c center card-front">
                <div class="card-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-development.svg" alt=""></div>
                <div>
                  <p class="txt_en font-w-700">Development</p>
                </div>
              </div>
              <div class="flex-c center card-inner">
                <p class="txt_en font-w-700 font-48">10</p>
                <p class="txt_en font-w-700">Project</p>
              </div>
            </li>
            <li id="skill-card_marketing" class="card">
              <div class="flex-c center card-front">
                <div class="card-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-marketing.svg" alt=""></div>
                <div>
                  <p class="txt_en font-w-700">SEO/</p>
                  <p class="txt_en font-w-700">Marketing</p>
                </div>
              </div>
              <div class="flex-c center card-inner">
                <p class="txt_en font-w-700 font-48">4</p>
                <p class="txt_en font-w-700">Project</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div id="skill-set" class="w-42">
        <div class="mb-10">
          <p class="txt_en font-38 font-w-700">Skill Set</p>
          <p>スキル</p>
        </div>
        <ul class="flex-r border-b a-center t-center">
          <li id="skill-set-design">
            <div>
              <p class="txt_en font-w-700">Web Design</p>
              <p class="txt_en font-w-700">UI/UX Design</p>
            </div>
          </li>
          <li id="skill-set-develop">
            <p class="txt_en font-w-700">Development</p>
          </li>
          <li>
            <div>
              <p class="txt_en font-w-700">SEO/</p>
              <p class="txt_en font-w-700">Marketing</p>
            </div>
          </li>
        </ul>
        <div id="design-skill-set" class="mt-4">
          <ul class="flex-r">
            <li class="flex-c center">
              <div class="flex-c center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-figma.png" alt="">
              </div>
              <p>Figma</p>
            </li>
            <li class="flex-c center">
              <div class="flex-c center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-ps.png" alt="">
              </div>
              <p>Photoshop</p>
            </li>
            <li class="flex-c center">
              <div class="flex-c center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-ai.png" alt="">
              </div>
              <p>Illustrator</p>
            </li>
            <li class="flex-c center">
              <div class="flex-c center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-xd.png" alt="">
              </div>
              <p>XD</p>
            </li>
          </ul>
        </div>
        <div id="develop-skill-set">
          <ul class="grid">
            <li>
              <p class="txt_en font-w-700">Html5/Css3</p>
              <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-skill1.svg" alt=""></div>
            </li>
            <li>
              <p class="txt_en font-w-700">jQuery</p>
              <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-skill1.svg" alt=""></div>
            </li>
            <li>
              <p class="txt_en font-w-700">JavaScipt</p>
              <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-skill3.svg" alt=""></div>
            </li>
            <li>
              <p class="txt_en font-w-700">PHP</p>
              <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-skill2.svg" alt=""></div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section id="project" class="fade-in">
    <div class="contents-inner">
      <div class="mb-4">
        <p class="txt_en font-38 font-w-700">Recent Project</p>
        <p>最新のプロジェクト</p>
      </div>
      <div>
        <ul class="grid">
          <?php
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3
          ); ?>

          <?php $my_query = new WP_Query($args); ?>

          <?php while ($my_query->have_posts()) : $my_query->the_post();
            $cat = get_the_category();
            $cat_name = $cat[0]->cat_name;
            $cat_slug = $cat[0]->slug;
          ?>

            <a href="<?php the_permalink(); ?>">
              <div class="item">
                <div class="item-img">
                  <?php the_post_thumbnail(); ?>
                </div>

                <div class="item-info">
                  <div class="cat-icon">
                    <p><?php echo $cat_name; ?></p>
                  </div>
                  <div class="ttl">
                    <p><?php the_title(); ?></p>
                  </div>
                  <div class="companyname">
                    <p><?php the_field('company-name'); ?></p>
                  </div>
                </div>
              </div>
            </a>
          <?php endwhile; ?>
        </ul>
        <a href="<?php echo home_url(); ?>/work">
          <div class="more-btn">
            <p>VIEW MORE</p>
          </div>
        </a>
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
          <form>
            <?php echo apply_shortcodes('[contact-form-7 id="078730a" title="コンタクトフォーム 1"]'); ?>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>