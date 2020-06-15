

<div class="well well-sm">

	<div class="row">

  	  	<div class="col-md-8 col-xs-6">

  	  		<i class="fa fa-download fa-sm"></i>&nbsp; <?php the_title();?>

  	  	</div>

  	  	<div class="col-md-2 col-xs-6">

	  	  	<?php if (post_password_required() ) :?>

				<form action="<?= get_site_url(); ?>/wp-login.php?action=postpass" class="post-password-form" method="post">

				<div class="input-group">

				    <input name="post_password" id="pwbox-125" size="1" type="password" class="form-control input-sm" placeholder="Password">

				    <span class="input-group-btn">

				      <input name="Submit" value="Unlock" type="submit" class="btn btn-primary btn-sm">

				    </span>

				</div>

				</form>

			<?php else: ?>

				<a href="<?= get_the_content();?>" class="btn btn-primary btn-sm btn-block" download>Download</a>

			<?php endif; ?>

  	  	</div>

  	  	<div class="col-md-2">



  	  	</div>

  	</div>

</div>