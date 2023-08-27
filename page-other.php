<?php get_header(); ?>

<main class="main-container">

<section class="contents fade-in" id="sec1-watercolor">
 <div class="contents-inner">
    <h2 class="title">WATERCOLOR</h2>
    <h3 class="caption">
             <a href="watercolor.html">Gallery</a>
    </h3>
   <div class="sec1-gallery">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/watercolor-book.jpg" alt="watercolor-book">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/watercolor-earth.jpg" alt="watercolor-earth">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/watercolor-seadragon.jpg" alt="watercolor-seadragon">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/watercolor-batterfly.jpg" alt="watercolor-batterfly">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/watercolor-eggplant.jpg" alt="watercolor-eggplant">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/watercolor-animal.jpg" alt="watercolor-animal">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/watercolor-sunflower.jpg" alt="watercolor-sunflower">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/watercoloricecream.jpg" alt="watercoloricecream">
   </div>
 </div>
</section>

<section class="contents fade-in" id="sec2-travel">
  <div class="contents-inner">
    <h2 class="title">TRAVEL</h2>
      <h3 class="caption">
        <a href="travel.html">My Journey</a>
      </h3>
    <div class="sec2-swiper">
      <ul class="slider" id="js-slider">
        <li>
          <div class="slide-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/imgtravel1.jpg" alt="imgtravel1">
          </div>
        </li>
        <li>
          <div class="slide-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/imgtravel2.jpg" alt="imgtravel2">
          </div>
        </li>
        <li>
          <div class="slide-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/imgtravel3.jpg" alt="imgtravel3">
          </div>
        </li>
        <li>
          <div class="slide-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/imgtravel4.jpg" alt="imgtravel4">
          </div>
        </li>
        <li>
          <div class="slide-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/imgtravel5.jpg" alt="imgtravel5">
          </div>
        </li>
        <li>
          <div class="slide-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/imgtravel6.jpg" alt="imgtravel6">
          </div>
        </li>
      </ul>
      <div class="dots"></div>
    </div>
  </div>
</section>

<section class="contents fade-in" id="sec3-ecoactivity">
  <div class="contents-inner">
    <h2 class="title">ECOACT</h2>
        <h3 class="caption">
        <a href="ecoact.html">More Info</a>
        </h3>
    <div class="paragraph">
        <div class="paragraph_en">
          <h4 class="sub-caption">Mother Earth<br>Beach Clean</h4>
            <p class="txt_en">There are 8 million tonnes of plastic waste in the world's oceans annually. I organize the beach
            clean-up activity to enjoy the beauty of ocean!
            </p>
        </div>
        <div class="paragraph_jp">
          <h4 class="sub-caption_jp">
              マザーアース<br>
              <span class="second-line_sub-caption_jp">ビーチクリーン活動</span><br>
          </h4>
          <p class="txt_jp">世界中で年間<span class="text-combine">800</span>万トンの海洋ごみが発生していると言われています。
            いつまでも大好きな海を綺麗に保つためにビーチクリーン活動を始めました。</p>
        </div>
      </div>
      <figure class="sec3_img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/beachcleantopimg.jpg" alt="beachcleantopimg">
      </figure>
    </div>
</section>

<section class="contents fade-in" id="sec4-about">
  <div class="contents-inner">
    <h2 class="title">ABOUT</h2>
      <h3 class="caption">
            <a href="work.html">Works</a>
      </h3>
    <div class="sec4-flex">
      <div clas="about_image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-image2.jpg" alt="aboutimage">
      </div>
      <div class="info">
        <h4 class="name_en">
          Kumiko Sugawa
        </h4>
        <h5 class="name_jp">
          須川 公美子
        </h5>
        <p class="txt_en">
          Born in 1993. I am a Web designer and also watercolor 
          illustrator based in Yokohama,Japan. Dedicated spirit of adventure. Organize beach clean activity on my own.</p>
          <div class="paragraph_jp">
            <p class="txt_jp info-txt_jp">
                    <span class="text-combine">1993</span>年生まれ。横浜在住。趣味で水彩画を手掛けていたこともあり、ウェブデザイナーのお仕事に魅了され、学校でウェブデザイン制作を勉強しました。趣味はコーヒーを淹れたり、旅行に行くことです。海が大好きで、自身でビーチクリーン活動も行っています。
            </p>
          </div>
      </div>
    </div>
  </div>
</section>

<div class='cursor' id="cursor"></div>
<div class='cursor2' id="cursor2"></div>
<div class='cursor3' id="cursor3"></div>
</main>

<?php get_footer(); ?>