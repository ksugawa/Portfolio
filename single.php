<?php get_header(); ?>
<div class="page-head">
<h2>Work</h2>
<p class="sub-heading">実績</p>
</div>
<?php while ( have_posts() ) : the_post(); ?>
<div class="content-inner single-content-inner">
<h1 class="ttlCol"><?php the_title(); ?></h1>
<?php the_content(); ?>
<?php endwhile; ?>
</div>
<?php get_footer(); ?>