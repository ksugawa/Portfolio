<?php get_header(); ?>

<main class="page-main">
    <div class="main-container">

        <span class="caption font-playfair">Work</span>
        <div class="work-lists">

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post();
                    $cat = get_the_category();
                    $cat = $cat[0];
                ?>

                    <div class="work-item">
                        <a href="<?php the_permalink(); ?>">
                            <div class="work-item__img">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="ttlCol font-playfair">
                                <h2><?php the_title(); ?></h2>
                            </div>
                            <div class="ttl">
                                <div class="txt">
                                    <p class="tag font-playfair"><?php echo $cat->cat_name; ?></p>
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