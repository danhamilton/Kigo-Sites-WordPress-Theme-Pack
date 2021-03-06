<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;
/*
Template Name: Property Detail Page
*/
?>
<?php get_header(); ?>
<article class="property-detail-page">	
<div class="row-fluid">

	<?php if ( is_active_sidebar( 'insta-left-sidebar-prop-detail' ) ) : ?>
    	<aside class="span3">
            <?php dynamic_sidebar( 'insta-left-sidebar-prop-detail' ); ?>
    	</aside>		
    <?php endif; ?>
    
  <?php if ( is_active_sidebar( 'insta-left-sidebar-prop-detail' ) ) : ?>
  	<article class="span6">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; else: ?>
            <p><?php _e('Sorry, this page does not exist.'); ?></p>
        <?php endif; ?>
      </article>
  <?php else: ?>
  	<article class="span9">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; else: ?>
            <p><?php _e('Sorry, this page does not exist.'); ?></p>
        <?php endif; ?>
      </article>
  <?php endif; ?>  
    
  
  <aside class="span3">
  
  		<?php if ( is_active_sidebar( 'insta-right-sidebar-prop-detail' ) ) : ?>		
            <?php dynamic_sidebar( 'insta-right-sidebar-prop-detail' ); ?>		
        <?php endif; ?>
        
  </aside>
</div>

</article>
<?php get_footer(); ?>