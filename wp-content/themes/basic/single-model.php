<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <h1>Product Title: <?php the_title(); ?></h1>
      
      <div class="row black">
      	<div class="container down3">
      		<div class="well">
      			<?php the_content(); ?>
      			<h4>Nothing to see here, sorry...</h4>
      			<h6>-Greg K</h6>
      			<a href="<?php bloginfo('url');?>/home/" class="btn btn-primary round btn-sm">Go Back</a>
      		</div>
      	</div>

      </div>

     

	<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<?php get_footer(); ?>