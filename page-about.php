<?php get_header(); ?>
<main class="main-container">
  <section class="contents" id="sec4-about">
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

  <section class="contents">
    <h2 class="title">CONTACT</h2>
    <div class="contents-inner flex-r">
      <div>
        <p>お気軽にご連絡ください。</p>
      </div>
      <form action="">
        <div class="form__item">
          <label class="form__label" for=""><span>名前</span></label>
          <input type="text">
        </div>
        <div class="form__item">
          <label class="form__label" for=""><span>メールアドレス</span></label>
          <input type="text">
        </div>
        <div class="form__item">
          <label class="form__label" for=""><span>電話番号</span></label>
          <input type="tel">
        </div>
        <div class="form__item">
          <label class="form__label" for=""><span>お問い合わせ内容</span></label>
          <textarea name="" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="form__button">
          <input type="submit" value="送信する">
          <span class="btn-txt">送信する</span>
        </div>
      </form>
    </div>
  </section>
</main>
<?php get_footer(); ?>