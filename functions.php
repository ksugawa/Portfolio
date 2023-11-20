<?php
/* ---------- サムネイル画像設定 ---------- */
function setup_theme() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'setup_theme');



/* ---------- 「投稿」の表記変更 ---------- */
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'work'; //任意のスラッグ名←アーカイブページを有効に
        $args['label'] = '実績'; //管理画面左ナビに「投稿」の代わりに表示される
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

/* ---------- カスタム投稿タイプを追加 ---------- */
function create_post_type()
{

    register_post_type(
        'blog',
        array(
            'label' => '記事',
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,
            'menu_position' => 5,
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'revisions',
            ),
        )
    );

    register_taxonomy(
        'watercolor-cat',
        'watercolor',
        array(
            'label' => 'カテゴリー',
            'hierarchical' => true,
            'public' => true,
            'show_in_rest' => true,
        )
    );

    register_taxonomy(
        'watercolor-tag',
        'watercolor',
        array(
            'label' => 'タグ',
            'hierarchical' => false,
            'public' => true,
            'show_in_rest' => true,
            'update_count_callback' => '_update_post_term_count',
        )
    );
}
add_action('init', 'create_post_type');

/* ---------- メールフォームの実装 ---------- */
function form_init() {
    if ( is_home() ) {
        return;
    }

    if (isset($_POST['name'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = &$_POST['message'];

        $to = "sugawakumiko.biz@gmail.com";
        $subject = "お問合せがありました";
        $body = "お名前 : \n{$name}\n";
                "メールアドレス : \n{$email}\n";
                "お問合せ内容 : \n{$message}\n";
        $fromname = "ポートフォリオサイト 須川 公美子";
        $from = "sugawakumiko.biz@gmail.com";
        $header = "From: {$fromname} <{$from}>\r\n";
    }
}

/* ---------- 固定ページのスラッグをclassに付与 ---------- */
function my_body_class($classes)
{
    if (is_page()) {
        $page = get_post();
        $classes[] = $page->post_name;
    } elseif (is_archive()) {
        $queried_object = get_queried_object();
        if ($queried_object && property_exists($queried_object, 'name')) {
            $classes[] = $queried_object->name;
        }
    }
    return $classes;
}
add_filter('body_class', 'my_body_class');






?>