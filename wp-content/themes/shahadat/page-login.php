<?php
get_header(); ?>

<section>

	<div class="container">

		<div class="row">

			<div class="col-md-8 col-md-offset-2">
			
			<?php if ( is_user_logged_in() ): ?>

				<h2 class="text-center">User already loged in! <a class="btn btn-success btn-lg"  href="<?php echo wp_logout_url(); ?>">Logout</a></h2>

			<?php else: ?>

	

				<?php $login  = (isset($_GET['login']) ) ? $_GET['login'] : 0; ?>

			<?php



				if ( $login === "failed" ) {

					  echo '<div class="alert alert-dismissible alert-danger">

							  <button type="button" class="close" data-dismiss="alert">&times;</button>

							  <strong>ERROR:</strong> The password you entered for the username is incorrect.

							</div>';

					} elseif ( $login === "empty" ) {

					  echo '<div class="alert alert-dismissible alert-danger">

							  <button type="button" class="close" data-dismiss="alert">&times;</button>

							<strong>ERROR:</strong>The username and/ or password field is empty.

							</div>';

					} elseif ( $login === "false" ) {

					  echo '<div class="alert alert-dismissible alert-danger">

							  <button type="button" class="close" data-dismiss="alert">&times;</button>

							  <strong>ERROR:</strong> Please login.

							</div>';

					}



			?>

			<div class="panel panel-default">

			  <!-- Default panel contents -->

			  <div class="panel-heading"><h1><?php the_title() ?></h1></div>

			  <div class="panel-body">

			  <form id="loginform" action="<?= home_url(); ?>/wp-login.php" method="post" name="loginform" class="form-horizontal">			    

				    <div class="form-group">

				      <label for="user" class="col-lg-3 control-label">Username or Email</label>

				      <div class="col-lg-9">

				        <input class="form-control" id="user" placeholder="Email" type="text" value="" name="log">

				      </div>

				    </div>

				    <div class="form-group">

				      <label for="pass" class="col-lg-3 control-label">Password</label>

				      <div class="col-lg-9">

				        <input class="form-control" id="pass" placeholder="Password" type="password" name="pwd">



				        <div class="checkbox">

				          <label>

				            <input id="rememberme" name="rememberme" type="checkbox" value="forever" />Remember Me

				          </label>

				        </div>

				      </div>

				    </div>

				    <div class="form-group">

				   		<div class="col-lg-3 col-md-offset-3">

							<input id="wp-submit" class="btn btn-primary btn-md" name="wp-submit" type="submit" value="Log In" />

							<!-- <input name="testcookie" type="hidden" value="1" /> -->

							<input type="hidden" name="redirect_to" value="<?= home_url(); ?>/wp-admin/" />

						</div>

					</div>

			    </form>

			  </div>

			  <div class="panel-footer">

				<a href="<?= home_url(); ?>/wp-login.php?action=lostpassword">Lost your password?</a>

			  </div>

			</div>

			<?php endif; ?>				

			</div> <!--  end column -->

		</div>

	</div>

</section>

<?php get_footer(); ?>