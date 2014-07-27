<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><small class=" pt10"><?php get_template_part('templates/entry-meta'); ?></small></h2>
    
  </header>
  <div class="entry-summary">
    <?php 
    // the_excerpt(); 
    the_content('weiterlesen'); 
    ?>
  </div>
</article>
