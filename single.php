<?php get_header(); ?>
<div class="single-contents">
    <?php if (have_posts()) :
        while (have_posts()): the_post(); 
            $cat = get_the_category();
            $cat = $cat[0];        
        
        ?>
            <div>
                <div class="tag">
                    <p><?php echo $cat->cat_name; ?></p>
                </div>
                <div class="ttlCol">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="companyname">
                    <p><?php the_field('company-name'); ?></p>
                </div>
                <div class="item-info__url">
                    <a href="<?php the_field('url'); ?>" class="flex-r">
                        <p><?php the_field('url'); ?></p>
                        <img class="linkout-icon" src="<?php echo get_template_directory_uri(); ?>/assets/public/icon-linkout.svg" alt="">
                    </a>
                </div>
            </div>

            <div>
                <?php the_post_thumbnail(); ?>
            </div>

            <article>
                <?php the_content(); ?>

            </article>
    <?php endwhile;
endif; ?>
    
    <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>">
        <div class="more-btn">
            <p>VIEW MORE</p>
        </div>
    </a>

</div>
<?php get_footer(); ?>