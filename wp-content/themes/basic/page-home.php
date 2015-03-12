<?php get_header();
/*
Template Name: Home Page
*/
?>


<div class="row white">

	<div class="container down3">
	
		<?php


		// Query Medicines
		$args = array(
			'post_type'=>'model'
		);
		$model = new WP_Query( $args );

		if($model->have_posts()) : while ($model->have_posts()) : $model->the_post(); ?>

								
			  		
		 <div class="col-xs-12 col-lg-4">
		    <!-- <div class="well"> -->
				<img class="img-responsive" src="<?php the_field("image");?>" alt="">
					<a class="btn btn-primary round2 btn-block" href="<?php the_permalink();?>"><?php the_title(); ?></a>				 
			<!-- </div> -->
		 </div>		  	


    <?php endwhile; else: ?>
		  <p>Sorry, no cosmetics matched your criteria.</p>
    <?php endif; ?>



	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  	


 
	<div class="col-xs-12 down3 fonty">
		
			<?php the_content(); ?>
		
	</div>
  		
  	<?php endwhile; else: ?>
    	<p>Sorry, no pages matched your criteria.</p>
	<?php endif; ?>


	<?php $args = array(
            'post_type'       =>'com',
            'orderby'         =>'rand',
            'posts_per_page'  => '2',
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