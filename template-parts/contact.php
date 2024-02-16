<?php 
$sns_links = [
    [
        "name" => "github",
        "link" => "https://github.com/ksugawa",
        "icon" => get_template_directory_uri() . "/assets/images/icon-github.svg"

    ],
    [
        "name" => "linkedIn",
        "link" => "https://www.linkedin.com/in/ksugawa",
        "icon" => get_template_directory_uri() . "/assets/images/icon-linkedin.svg"
    ]
  ];
?>

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
                <?php echo apply_shortcodes('[contact-form-7 id="078730a" title="コンタクトフォーム 1" html_id="form"]'); ?>
            </div>
        </div>
    </div>
</section>