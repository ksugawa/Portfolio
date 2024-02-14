<?php require('constant.php') ?>

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
      <?php get_template_part('template-parts/about-me'); ?>
    </div>
  </section>
  <section id="skill" class="fade-in">
    <div class="contents-inner flex-r">
      <?php get_template_part('template-parts/my-specialization'); ?>
      <?php get_template_part('template-parts/skillset'); ?>
    </div>
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
        <?php get_template_part('template-parts/projects'); ?>
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
              <?php foreach ($sns_links as $sns_link) : ?>
                <li>
                  <a href="<?= $sns_link['link'] ?>">
                    <img src="<?= $sns_link['icon'] ?>" alt="SNSアイコン">
                  </a>
                </li>
              <?php endforeach; ?>
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