<?php get_header(); ?>

<main class="page-main">
    <div class="main-container">

        <section class="section-inner">
            <h3 class="caption">Work</h3>
            <div class="work-lists">

                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post();
                        $cat = get_the_category();
                        $cat = $cat[0];
                    ?>
                    <div class="work-item">
                        <a href="<?php the_permalink(); ?>">
                                <div class="ttl">
                                    <div class="txt">
                                        <p class="tag"><?php echo $cat->cat_name; ?></p>
                                        <p class="day"><?php echo get_the_date(); ?></p>
                                    </div>
                                    <h4><?php the_title(); ?></h4>
                                </div>
                                <?php the_post_thumbnail(); ?>
                        </a>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>