<style>
	.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
</style>

	<?php echo form_open('login/auth', array('class' => 'form-signin')); ?>
	 <form class="form-signin">
	 	<h2 class="form-signin-heading">Please sign in</h2>
	 	<input type="text" class="form-control" placeholder="username" autofocus name="username">
	 	<input type="password" class="form-control" placeholder="Password" name="password">
	 	<label class="checkbox">
	 		<input type="checkbox" value="remember-me"> Remember me
	 	</label>
	 	<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="submit">Sign in</button>
	 </form>
