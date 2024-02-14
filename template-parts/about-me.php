<?php
$sectionTitle = [
    'title_1' => 'About me',
];
?>

<div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutme.png" alt=""></div>
<div class="w-60">
    <p class="txt_en font-26 font-w-600"><?php echo $sectionTitle['title_1'] ?></p>
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