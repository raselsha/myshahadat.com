<?php get_header(); ?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="content border">
					<?php if ( have_posts() ) : ?>
						<?php
							// Start the loop.
							while ( have_posts() ) : the_post();
								get_template_part( 'content',get_post_format());
							// End the loop.

							the_post_navigation( array(
							'next_text' => '<span class="btn btn-default btn-sm pull-right">'.__( 'Next <i class="fa fa-angle-double-right"></i>', 'shahadat' ) . '</span> ',
							'prev_text' => '<span class="btn btn-default btn-sm pull-left">' . __( '<i class="fa fa-angle-double-left"></i> Previous ', 'shahadat' ) . '</span> ',
							) );
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
	</div>
</section>
<?php get_footer(); ?>