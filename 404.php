<?php get_header(); ?>
<main class="main-container">
    <div class="error-content">
        <h2>404 Not Found</h2>
        <p>ページが見つかりませんでした。</p>
        <p>指定されたページは存在しないか、または移動した可能性があります。</p>
        <p>お手数ですがサイトの「トップページへ戻る」からホームへ戻り、サイトをお楽しみいただきますようお願いいたします。</p>
        <a href="<?php echo home_url(); ?>">
            <div class="return_btn">
                <p>トップページに戻る</p>
            </div>
        </a>
    </div>
</main>
<?php get_footer(); ?>