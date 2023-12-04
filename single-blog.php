<?php get_header(); ?>
<div class="single-contents">
    <?php if (have_posts()) :
        while (have_posts()) : the_post();
            $terms = get_the_terms(get_the_ID(), 'blog-cat');
            if ($terms && !is_wp_error($terms)) :
                foreach ($terms as $term) :
    ?>
                    <div>
                        <div class="tag">
                            <p><?php echo esc_html($term->name); ?></p>
                        </div>
                        <div class="ttlCol">
                            <h1><?php the_title(); ?></h1>
                        </div>
                    </div>

                    <div>
                        <?php the_post_thumbnail(); ?>
                    </div>

                    <article>
                        <?php echo apply_filters('the_content', get_the_content()); ?>

                    </article>
    <?php
                endforeach;
            endif;
        endwhile;
    endif;
    ?>
    <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>">
        <div class="more-btn">
            <p>VIEW MORE</p>
        </div>
    </a>

</div>
<?php get_footer(); ?>