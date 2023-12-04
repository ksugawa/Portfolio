<?php get_header(); ?>
<main class="page-main">
    <div class="main-container">

        <span class="caption font-playfair">Blog</span>
        <div class="work-lists">

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post();
                    $cat = get_the_category();
                    $cat = $cat[0];
                ?>

                    <div class="blog-item">
                        <a href="<?php the_permalink(); ?>">
                            <div class="ttlCol font-playfair">
                                <h2><?php the_title(); ?></h2>
                            </div>
                            <div class="ttl">
                                <div class="txt">
                                    <p class="tag font-playfair"></p>
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