<div class="title text-center">
	<h2><img src="<?= get_template_directory_uri(); ?>/images/none.svg"></h2>
</div><!--End page title -->
<div class="post">
	<?php the_content(); ?>
</div>

<div class="end_post">
	<?php edit_post_link( __('Edit')); ?>
</div>
