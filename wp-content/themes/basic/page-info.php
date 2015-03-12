<?php get_header();
/*
Template Name: Info Page
*/
?>


<div class="row white">

	<div class="container down3">
	
	

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  	


	<div class="col-xs-12 col-lg-6 down3 fonty2">
		
			<?php the_content(); ?>
		
	</div>
  		
  	<?php endwhile; else: ?>
    	<p>Sorry, no pages matched your criteria.</p>
	<?php endif; ?>


	<?php $args = array(
            'post_type'       =>'com',
            'orderby'         =>'rand',
            'posts_per_page'  => '1',
            );
          
          // WP LOOP
          $com = new WP_Query( $args ); ?>
          
          <?php if ($com->have_posts()) : while ($com->have_posts()) : $com->the_post(); ?>
          <!-- CONTENT TO BE RETRIVED IS HERE -->
             <div class="col-xs-12 col-lg-6">
                <div class="well">
                    <a target="_blank" href="<?php the_field('link');?>">
                       <img class="img-responsive" src="<?php the_field('image3');?>" alt="">
                    </a>
                </div>
            </div>
          <?php endwhile; else: ?>
            <p>Sorry, no pages matched your criteria.</p>
          <?php endif; ?>  

 	
	</div>
</div>
 	


  


<?php get_footer(); ?>