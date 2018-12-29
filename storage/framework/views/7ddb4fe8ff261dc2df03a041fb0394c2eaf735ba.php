
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontEnd')); ?>/css/3.css" media="all" />


<div class="login-wrap">
	<div class="login-html">
			<input id="tab" type="radio" class="sign-up"><label for="tab" class="tab">Customer-Login</label>
		<div class="login-form">
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign Up">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="/login">Already Member?</a>
				</div>
			</div>
		</div>
	</div>
</div>