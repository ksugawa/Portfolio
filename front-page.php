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
  <?php get_template_part('template-parts/aboutme'); ?>
  <?php get_template_part('template-parts/skill'); ?>
  <?php get_template_part('template-parts/project'); ?>    
  <?php get_template_part('template-parts/contact'); ?>
</main>
<?php get_footer(); ?>