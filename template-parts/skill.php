<?php
$sectionTitle = [
    'title' => 'My Specialization',
    'sub_title' => '提供できるもの',
];

$skills = [
    [
        "id" => "skill-card_design",
        "icon" => "icon-design.svg",
        "title" => "Web Design\nUI/UX Design",
        "count" => 13
    ],
    [
        "id" => "skill-card_develop",
        "icon" => "icon-development.svg",
        "title" => "Development",
        "count" => 20
    ],
    [
        "id" => "skill-card_marketing",
        "icon" => "icon-marketing.svg",
        "title" => "SEO/\nMarketing",
        "count" => 4
    ]
];

$designSkills = [
    ["name" => "Figma", "icon" => "logo-figma.png"],
    ["name" => "Photoshop", "icon" => "/logo-ps.png"],
    ["name" => "Illustrator", "icon" => "logo-ai.png"],
    ["name" => "XD", "icon" => "logo-xd.png"],
];

$devSkills = [
    ["name" => "HTML", "icon" => "icon-html.svg"],
    ["name" => "CSS", "icon" => "icon-css.svg"],
    ["name" => "JavaScript", "icon" => "icon-js.svg"],
    ["name" => "TypeScript", "icon" => "icon-ts.svg"],
    ["name" => "PHP", "icon" => "icon-php.svg"],
    ["name" => "React", "icon" => "icon-react.svg"],
    ["name" => "Vue", "icon" => "icon-vue.svg"],
];

$seoSkills = [
    ["name" => "Google Ads", "icon" => "logo-gads.png"],
    ["name" => "Google\nAnalytics", "icon" => "/logo-ganalytics.png"],
    ["name" => "Google\nTag Manager", "icon" => "logo-gtagmanager.png"],
];
?>

<section id="skill" class="fade-in">
    <div class="contents-inner flex-r">
        <div id="my-specialization" class="w-46">
            <div class="mb-10">
                <p class="txt_en font-38 font-w-700" id="text-target"><?= $sectionTitle['title'] ?></p>
                <p><?= $sectionTitle['sub_title'] ?></p>
            </div>
            <div>
                <ul class="flex-r">
                    <?php foreach ($skills as $skill) : ?>
                        <li id="<?= $skill['id'] ?>" class="card">
                            <div class="card-front">
                                <div class="card-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?= $skill['icon'] ?>" alt="アイコン">
                                </div>
                                <div>
                                    <p class="txt_en font-w-700"><?= nl2br($skill['title']) ?></p>
                                </div>
                            </div>
                            <div class="flex-c center card-inner">
                                <p class="txt_en font-w-700 font-48"><?= $skill['count'] ?></p>
                                <p class="txt_en font-w-700">Project</p>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <div id="skill-set" class="w-46">
            <div class="mb-10">
                <p class="txt_en font-38 font-w-700" id="text-target">Skill Set</p>
                <p>スキル</p>
            </div>
            <ul class="flex-r border-b a-center t-center mb-4" id="skill-set-head">
                <li id="skill-set-design">
                    <div>
                        <p class="txt_en font-w-700">Web Design</p>
                        <p class="txt_en font-w-700">UI/UX Design</p>
                    </div>
                </li>
                <li id="skill-set-develop">
                    <p class="txt_en font-w-700">Development</p>
                </li>
                <li id="skill-set-marketing">
                    <div>
                        <p class="txt_en font-w-700">SEO/</p>
                        <p class="txt_en font-w-700">Marketing</p>
                    </div>
                </li>
            </ul>
            <div id="design-skill-set" class="skill-set-list">
                <ul class="flex-r">
                    <?php foreach ($designSkills as $design) : ?>
                        <li class="flex-c center">
                            <div class="flex-c center skill-set-logo">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/<?= $design["icon"] ?>" alt="アイコン">
                            </div>
                            <p><?= $design["name"] ?></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div id="develop-skill-set" class="skill-set-list">
                <ul class="flex-r">
                    <?php foreach ($devSkills as $dev) : ?>
                        <li class="flex-c center">
                            <div class="flex-c center skill-set-logo">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/<?= $dev["icon"] ?>" alt="アイコン">
                            </div>
                            <p><?= $dev["name"] ?></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div id="seo-skill-set" class="skill-set-list">
                <ul class="flex-r">
                    <?php foreach ($seoSkills as $seo) : ?>
                        <li class="flex-c center">
                            <div class="flex-c center skill-set-logo">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/<?= $seo["icon"] ?>" alt="">
                            </div>
                            <p><?= nl2br($seo["name"]) ?></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>