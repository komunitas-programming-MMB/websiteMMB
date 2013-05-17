<?php get_header();?>
<!-- headline -->
<div id="feature" class="sliderjs_with_pagination">
  <div class="slides_container">
  
  

<?php
global $post;
$args = array( 'numberposts' => 5, 'category' => 2 );
$myposts = get_posts( $args );
foreach( $myposts as $post ) :	setup_postdata($post); ?>

      <div class="slide">
<?php  the_post_thumbnail( array(950,385) ); ?>
        <div class="caption">
      <a href="<?php the_permalink();?>"><h3 class="title"><?php the_title();?></h3></a>
          <p class="description"><?php the_excerpt_rss(); ?></p>
        </div>
      </div>
<?php endforeach;?>
      
      
      
  </div>
</div>


<div id="news" class="sliderjs_with_buttons">
  <div class="slides_container">
     
      <div class="slide">
      
      
<?php
global $post;
$args = array( 'numberposts' => 4);
$myposts = get_posts( $args );
foreach( $myposts as $post ) :	setup_postdata($post); ?>

          <div class="item">
<div class="thumb"><?php  the_post_thumbnail('medium'); ?></div>
      <h3><?php the_title();?></h3> 
             <p>
              <?php the_excerpt_rss(10); ?>
             </p>
             <a href="<?php the_permalink();?>">Read More</a>
          </div> 
          
          <?php endforeach;?>

          
          
      </div>
  </div>
  <a href="#" class="next">Next</a>
  <a href="#" class="prev">Prev</a>
  
  <div style="clear:both"><br/><br/></div>
</div>
<?php get_footer();?>