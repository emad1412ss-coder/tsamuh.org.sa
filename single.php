<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <h2 class="page-title"><?php the_title(); ?></h2>
  <div class="content">
    <?php if (has_post_thumbnail()) { the_post_thumbnail('large', array('style'=>'max-width:100%;height:auto;border-radius:14px;margin-bottom:12px;')); } ?>
    <?php the_content(); ?>
  </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
