<?php get_header(); ?>
<main> 
  <h2>
    <?php 
      single_post_title(); // imports the page title 
    ?> 
  </h2> 
<?php 
  if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
      the_content(); 
    endwhile; 
  else : 
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); 
  endif; 
?> 
</main>
<?php get_footer(); ?>

