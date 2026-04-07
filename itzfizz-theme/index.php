<?php get_header(); ?>
<main class="container py-5" style="min-height:80vh">
  <?php if(have_posts()):while(have_posts()):the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('py-4'); ?>>
      <h1 class="bh mb-3"><?php the_title(); ?></h1>
      <div class="bb"><?php the_content(); ?></div>
    </article>
  <?php endwhile;else: ?>
    <p class="bb"><?php esc_html_e('No content found.','itzfizz-hero'); ?></p>
  <?php endif; ?>
</main>
<?php get_footer(); ?>
