<?php
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
        'watercolor',
        array(
            'label' => '水彩画',
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

?>