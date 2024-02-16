<section id="project" class="fade-in">
    <div class="contents-inner">
        <div class="flex-r">
            <div class="mb-4">
                <p class="txt_en font-38 font-w-700">Recent Project</p>
                <p>最新のプロジェクト</p>
            </div>
            <div>
                <a href="<?php echo home_url(); ?>/work">
                    <div class="more-btn">
                        <span>VIEW MORE</span>
                    </div>
                </a>
            </div>

        </div>
        <div>

            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 5
            );
            $my_query = new WP_Query($args);
            ?>
            <?php if ($my_query->have_posts()) : ?>

                <ul class="flex-r slider-line" id="project-slider">

                    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

                        <?php
                        $cat = get_the_category();
                        $cat = $cat[0];
                        $cat_link = get_category_link($cat);
                        ?>

                        <li class="item">
                            <a href="<?php the_permalink(); ?>">
                                <div class="item-img">
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
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
</section>