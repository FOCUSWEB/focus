<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js sidebar-large lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js sidebar-large lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js sidebar-large lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js sidebar-large"> <!--<![endif]-->

<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<!-- /Added by HTTrack -->
<head>
	<!-- BEGIN META SECTION -->
	<meta charset="utf-8">
	<title>登录 - <?php echo Config::get('site.name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="" name="description"/>
	<meta content="themes-lab" name="author"/>
	<!-- END META SECTION -->
	<!-- BEGIN MANDATORY STYLE -->
	<link href="<?php echo Config::get('site.adminAssetsPath'); ?>css/icons/icons.min.css" rel="stylesheet">
	<link href="<?php echo Config::get('site.adminAssetsPath'); ?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo Config::get('site.adminAssetsPath'); ?>css/plugins.min.css" rel="stylesheet">
	<link href="<?php echo Config::get('site.adminAssetsPath'); ?>css/style.min.css" rel="stylesheet">
	<!-- END  MANDATORY STYLE -->
	<!-- BEGIN PAGE LEVEL STYLE -->
	<link href="<?php echo Config::get('site.adminAssetsPath'); ?>css/animate-custom.css" rel="stylesheet">
	<!-- END PAGE LEVEL STYLE -->
	<script
		src="<?php echo Config::get('site.adminAssetsPath'); ?>plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body class="login fade-in" data-page="login">
<!-- BEGIN LOGIN BOX -->
<div class="container" id="login-block">
	<div class="row">
		<div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
			<div class="login-box clearfix animated flipInY">
				<div class="page-icon animated bounceInDown">
					<img src="<?php echo Config::get('site.adminAssetsPath'); ?>img/account/user-icon.png"
					     alt="Key icon">
				</div>
				<div class="login-logo">
					<a href="#?login-theme-3">
						<img src="<?php echo Config::get('site.adminAssetsPath'); ?>img/account/login-logo.png"
						     alt="Company Logo">
					</a>
				</div>
				<hr>
				<div class="login-form">
					<!-- BEGIN ERROR BOX -->
					<div class="alert alert-danger hide">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<h4>Error!</h4>
						Your Error Message goes here
					</div>
					<!-- END ERROR BOX -->
					<?php echo Form::open(array('route' => array('adminLogin'))); ?>
					<?php echo Form::text('username', '', array('class' => 'input-field form-control user',
						'placeholder' => '用户名'));?>
					<?php echo Form::password('password', array('class' => 'input-field form-control password',
						'placeholder' => '密码'));?>
					<?php echo Form::submit('登录', array('class' => 'btn btn-login')); ?>
					<?php echo Form::close(); ?>
					<div class="login-links">
						<a href="password_forgot.html">Forgot password?</a>
						<br>
						<a href="signup.html">Don't have an account? <strong>Sign Up</strong></a>
					</div>
				</div>
			</div>
			<div class="social-login row">
				<div class="fb-login col-lg-6 col-md-12 animated flipInX">
					<a href="#" class="btn btn-facebook btn-block">Connect with <strong>Facebook</strong></a>
				</div>
				<div class="twit-login col-lg-6 col-md-12 animated flipInX">
					<a href="#" class="btn btn-twitter btn-block">Connect with <strong>Twitter</strong></a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END LOCKSCREEN BOX -->
<!-- BEGIN MANDATORY SCRIPTS -->
<script src="<?php echo Config::get('site.adminAssetsPath'); ?>plugins/jquery-1.11.js"></script>
<script src="<?php echo Config::get('site.adminAssetsPath'); ?>plugins/jquery-migrate-1.2.1.js"></script>
<script src="<?php echo Config::get('site.adminAssetsPath'); ?>plugins/jquery-ui/jquery-ui-1.10.4.min.js"></script>
<script src="<?php echo Config::get('site.adminAssetsPath'); ?>plugins/bootstrap/bootstrap.min.js"></script>
<!-- END MANDATORY SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo Config::get('site.adminAssetsPath'); ?>plugins/backstretch/backstretch.min.js"></script>
<script src="<?php echo Config::get('site.adminAssetsPath'); ?>js/account.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
</body>

</html>