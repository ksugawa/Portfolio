<?php get_header(); ?>

<main class="page-main">
    <div class="main-container">

        <section class="section-inner">
            <h3 class="caption">Work</h3>
            <div class="work-lists">

                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 9,
                    'order' => 'DESC'
                );
                $the_query = new WP_Query($args);
                ?>

                <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="work-item">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                                <div class="ttl">
                                    <div class="txt">
                                        <p class="tag"><?php echo $cat->cat_name; ?></p>
                                        <p class="day"><?php echo get_the_date(); ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>