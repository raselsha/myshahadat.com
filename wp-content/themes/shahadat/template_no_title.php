<?php
// Template Name: No title
get_header(); ?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				
				<?php if ( have_posts() ) : ?>
					<?php
						// Start the loop.
						while ( have_posts() ) : the_post();
							get_template_part( 'content','no_title');
						// End the loop.
						endwhile;
					?>
				<?php
					else :
						get_template_part( 'content', 'none' );
					endif;
				?>
				<div class="text-center">
					<?php custom_pagination(); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>