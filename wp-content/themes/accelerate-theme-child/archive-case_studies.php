<?php
/**
 * The template for displaying the case studies archive page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
    
		<div class="main-content" role="main">
      
			<?php while ( have_posts() ) : the_post(); 
        $services = get_field('services');
        $image_1 = get_field('image_1');
        $size = "full";      
      ?>
     
      <article class="case-study">
        
        <aside class="case-study-sidebar">
          
          <div class="case-study-info">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><span><?php echo $services; ?></span></p>
          </div>
				  <?php the_excerpt(); ?>
          <p class="read-more-link"><a href="<?php the_permalink(); ?>">View Project</a></p>
          
        </aside> 
        
        
        <div class="case-study-images">
          
            <figure>
              <a href="<?php the_permalink(); ?>">  
                <?php echo wp_get_attachment_image($image_1, $size); ?> </a>
            </figure>

        </div>
        
      </article>
      
      
			<?php endwhile; // end of the loop. ?>
      
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
