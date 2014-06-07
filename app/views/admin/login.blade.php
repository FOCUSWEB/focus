<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="<?php echo Config::get('site.assetsPath'); ?>images/favicon.ico">

	<title>Signin Template for Bootstrap</title>

	<!-- Bootstrap core CSS -->
	<link href="{{ Config::get('site.adminAssetsPath') }}css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="{{ Config::get('site.adminAssetsPath') }}css/login.css" rel="stylesheet">


	<script src="{{ Config::get('site.adminAssetsPath') }}js/jquery-1.11.1.min.js"></script>
	<script src="{{ Config::get('site.adminAssetsPath') }}js/button.js"></script>


	<!-- Just for debugging purposes. Don't actually copy this line! -->
	<!--[if lt IE 9]>
	<script src="<?php echo Config::get('site.adminAssetsPath');?>js/ie8-responsive-file-warning.js"></script>
	<![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>

<div class="container">

	<?php echo Form::open(array('route' => 'adminLogin', 'class' => 'login-form')); ?>
	<h2 class="login-form-heading">请登录</h2>

	<div class="input-row">
		<?php echo Form::text('username', null, array('id' => 'username', 'class' => 'form-control',
			'placeholder' => '用户名',
			'required',
			'autofocus'));?>
		<span class="glyphicon glyphicon-user"></span>
	</div>
	<div class="input-row">
		<?php echo Form::password('password', array('id' => 'password', 'class' => 'form-control', 'placeholder' => '密码',
			'required')); ?>
		<span class="glyphicon glyphicon-lock"></span>
	</div>
	<div class="link-row">
		<a href="#" class="pull-right">忘记密码了?</a>
	</div>
	<?php echo Form::submit('登录', array('class' => 'btn btn-lg btn-primary btn-block', 'id' => 'login-btn',
		'data-loading-text' => "正在登录"));?>
	<script>
		$('#login-btn').click(function () {
			var btn = $(this);
			btn.button('loading');
			$.ajax({
				url: "{{ URL::route('adminLogin') }}",
				data: {
					"username": $('#username').val(),
					"password": $('#password').val()
				},
				dataType: "json",
				type: "POST",
				success: function (data) {
					if (data["status"] == "success") {
						location.href = "{{ URL::route('adminDashboard') }}"
					} else if (data["status"] == "error") {
						alert(data["messages"]);
					}
				}
			}).always(function () {
				btn.button('reset')
			});
			return false;
		});
	</script>
	<?php echo Form::close(); ?>

</div>
<!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
</body>
</html>
