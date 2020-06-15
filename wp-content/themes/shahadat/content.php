
<div class="title text-center">
	<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
</div><!--End page title -->
<div class="post">
	<?php the_content(); ?>
</div>

<div class="end_post">
	<?php edit_post_link( __('Edit')); ?>
</div>

