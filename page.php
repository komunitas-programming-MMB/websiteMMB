<?php get_header();?>
 
<div id="news" class="sliderjs_with_buttons">
      <div class="post">
<?php while ( have_posts() ) : the_post(); ?>

				 <h2><?php the_title();?></h2>
                 <i><?php echo get_the_date(); ?></i>
                 <div class="clearnew"></div>
                 <?php the_content();?>
                 
                 <div class="clearnew"></div>
                 
				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>


</div>

   <div style="clear:both"><br/><br/></div>
</div>
<?php get_footer();?>