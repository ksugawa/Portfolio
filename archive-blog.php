<?php get_header(); ?>
<main class="page-main" id="blog-page-main">
    <div class="main-container">

        <span class="caption font-playfair">Blog</span>
        <div class="lists">

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post();
                    $cats = get_the_terms(get_the_ID(), 'blog-cat');
                    if ($cats && !is_wp_error($cats)) {
                        $cat_names = array();
                        foreach ($cats as $cat) {
                            $cat_names[] = $cat->name;
                        }
                        $cat_name = implode(',', $cat_names);
                    } else {
                        $cat_name = '';
                    }
                ?>

                    <div class="item">
                        <a href="<?php the_permalink(); ?>">
                            <div class="ttlCol font-playfair">
                                <h2><?php the_title(); ?></h2>
                            </div>
                            <div class="ttl">
                                <div class="txt">
                                    <p class="tag font-playfair"><?php echo $cat_name; ?></p>
                                    <p class="day font-playfair"><?php echo get_the_date(); ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>