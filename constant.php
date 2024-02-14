<?php

/*
* ヘッダー／ナビメニュー
*/
$nav_menus = [
    [
        "name" => "HOME",
        "link" => "/"
    ],
    [
        "name" => "WORK",
        "link" => "/work"
    ],
    [
        "name" => "BLOG",
        "link" => "/blog"
    ],
    [
        "name" => "OTHER",
        "link" => "/other"
    ]
];

/*
* スキルセット
*/
$skills = [
    [
        "id" => "skill-card_design",
        "icon" => "icon-design.svg",
        "titles" => ["Web Design", "UI/UX Design"],
        "count" => 13
    ],
    [
        "id" => "skill-card_develop",
        "icon" => "icon-development.svg",
        "titles" => ["Development"],
        "count" => 20
    ],
    [
        "id" => "skill-card_marketing",
        "icon" => "icon-marketing.svg",
        "titles" => ["SEO/", "Marketing"],
        "count" => 4
    ]
];

/*
* SNSリンク
*/
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
