<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="Sentir, Responsive admin and dashboard UI kits template">
	<meta name="keywords" content="admin,bootstrap,template,responsive admin,dashboard template,web apps template">
	<meta name="author" content="Ari Rusmanto, Isoh Design Studio, Warung Themes">
	<title>Login | SENTIR - Responsive admin and dashboard UI kits template</title>

	<!-- BOOTSTRAP CSS (REQUIRED ALL PAGE)-->
	<link href="{{Config::get('site.adminAssetsPath')}}css/bootstrap.min.css" rel="stylesheet">

	<!-- PLUGINS CSS -->
	<link href="{{Config::get('site.adminAssetsPath')}}plugins/weather-icon/css/weather-icons.min.css" rel="stylesheet">
	<link href="{{Config::get('site.adminAssetsPath')}}plugins/prettify/prettify.min.css" rel="stylesheet">
	<link href="{{Config::get('site.adminAssetsPath')}}plugins/magnific-popup/magnific-popup.min.css" rel="stylesheet">
	<link href="{{Config::get('site.adminAssetsPath')}}plugins/owl-carousel/owl.carousel.min.css" rel="stylesheet">
	<link href="{{Config::get('site.adminAssetsPath')}}plugins/owl-carousel/owl.theme.min.css" rel="stylesheet">
	<link href="{{Config::get('site.adminAssetsPath')}}plugins/owl-carousel/owl.transitions.min.css" rel="stylesheet">
	<link href="{{Config::get('site.adminAssetsPath')}}plugins/chosen/chosen.min.css" rel="stylesheet">
	<link href="{{Config::get('site.adminAssetsPath')}}plugins/icheck/skins/all.css" rel="stylesheet">
	<link href="{{Config::get('site.adminAssetsPath')}}plugins/datepicker/datepicker.min.css" rel="stylesheet">
	<link href="{{Config::get('site.adminAssetsPath')}}plugins/timepicker/bootstrap-timepicker.min.css"
	      rel="stylesheet">
	<link href="{{Config::get('site.adminAssetsPath')}}plugins/validator/bootstrapValidator.min.css" rel="stylesheet">
	<link href="{{Config::get('site.adminAssetsPath')}}plugins/summernote/summernote.min.css" rel="stylesheet">
	<link href="{{Config::get('site.adminAssetsPath')}}plugins/markdown/bootstrap-markdown.min.css" rel="stylesheet">
	<link href="{{Config::get('site.adminAssetsPath')}}plugins/datatable/css/bootstrap.datatable.min.css"
	      rel="stylesheet">
	<link href="{{Config::get('site.adminAssetsPath')}}plugins/morris-chart/morris.min.css" rel="stylesheet">
	<link href="{{Config::get('site.adminAssetsPath')}}plugins/c3-chart/c3.min.css" rel="stylesheet">
	<link href="{{Config::get('site.adminAssetsPath')}}plugins/slider/slider.min.css" rel="stylesheet">

	<!-- MAIN CSS (REQUIRED ALL PAGE)-->
	<link href="{{Config::get('site.adminAssetsPath')}}plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="{{Config::get('site.adminAssetsPath')}}css/style.css" rel="stylesheet">
	<link href="{{Config::get('site.adminAssetsPath')}}css/style-responsive.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body class="login tooltips">


<!--
===========================================================
BEGIN PAGE
===========================================================
-->
<div class="login-header text-center">
	<img src="{{Config::get('site.adminAssetsPath')}}img/logo-login.png" class="logo" alt="Logo">
</div>
<div class="login-wrapper">
	<?php if ($errors->has('username')) {
		; ?>
		<div class="alert alert-warning alert-bold-border fade in alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>警告!</strong> 当前页面有错误.
			<?php foreach ($errors->all('<br/><span class="label label-danger">:message</span>') as $message) {
				echo $message;
			}; ?>
		</div>
	<?php }; ?>

	<?php echo Form::open(array('role' => 'form', 'route' => 'adminLogin', 'method' => 'POST')); ?>
	<div class="form-group has-feedback lg left-feedback no-label">
		<?php echo Form::text('username', null, array('class' => 'form-control no-border input-lg rounded',
			'placeholder' => '输入用户名', 'autofocus'));?>
		<span class="fa fa-user form-control-feedback"></span>
	</div>
	<div class="form-group has-feedback lg left-feedback no-label">
		<?php echo Form::text('password', null, array('class' => 'form-control no-border input-lg rounded',
			'placeholder' => '输入密码'));?>
		<span class="fa fa-unlock-alt form-control-feedback"></span>
	</div>
	<div class="form-group">
		<div class="checkbox">
			<label>
				<input type="checkbox" class="i-yellow-flat"> 下次记住我
			</label>
		</div>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-warning btn-lg btn-perspective btn-block">登录</button>
	</div>
	<?php echo Form::close(); ?>
	<p class="text-center"><strong><a href="forgot-password.html">忘记密码了?</a></strong></p>

	<p class="text-center">或者</p>

	<p class="text-center"><strong><a href="register.html">创建一个新的帐户</a></strong></p>
</div>
<!-- /.login-wrapper -->
<!--
===========================================================
END PAGE
===========================================================
-->

<!--
===========================================================
Placed at the end of the document so the pages load faster
===========================================================
-->
<!-- MAIN JAVASRCIPT (REQUIRED ALL PAGE)-->
<script src="{{Config::get('site.adminAssetsPath')}}js/jquery.min.js"></script>
<script src="{{Config::get('site.adminAssetsPath')}}js/bootstrap.min.js"></script>
<script src="{{Config::get('site.adminAssetsPath')}}plugins/retina/retina.min.js"></script>
<script src="{{Config::get('site.adminAssetsPath')}}plugins/nicescroll/jquery.nicescroll.js"></script>
<script src="{{Config::get('site.adminAssetsPath')}}plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="{{Config::get('site.adminAssetsPath')}}plugins/backstretch/jquery.backstretch.min.js"></script>

<!-- PLUGINS -->
<script src="{{Config::get('site.adminAssetsPath')}}plugins/skycons/skycons.js"></script>
<script src="{{Config::get('site.adminAssetsPath')}}plugins/prettify/prettify.js"></script>
<script src="{{Config::get('site.adminAssetsPath')}}plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="{{Config::get('site.adminAssetsPath')}}plugins/owl-carousel/owl.carousel.min.js"></script>
<script src="{{Config::get('site.adminAssetsPath')}}plugins/chosen/chosen.jquery.min.js"></script>
<script src="{{Config::get('site.adminAssetsPath')}}plugins/icheck/icheck.min.js"></script>
<script src="{{Config::get('site.adminAssetsPath')}}plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="{{Config::get('site.adminAssetsPath')}}plugins/timepicker/bootstrap-timepicker.js"></script>
<script src="{{Config::get('site.adminAssetsPath')}}plugins/mask/jquery.mask.min.js"></script>
<script src="{{Config::get('site.adminAssetsPath')}}plugins/validator/bootstrapValidator.min.js"></script>
<script src="{{Config::get('site.adminAssetsPath')}}plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="{{Config::get('site.adminAssetsPath')}}plugins/datatable/js/bootstrap.datatable.js"></script>
<script src="{{Config::get('site.adminAssetsPath')}}plugins/summernote/summernote.min.js"></script>
<script src="{{Config::get('site.adminAssetsPath')}}plugins/markdown/markdown.js"></script>
<script src="{{Config::get('site.adminAssetsPath')}}plugins/markdown/to-markdown.js"></script>
<script src="{{Config::get('site.adminAssetsPath')}}plugins/markdown/bootstrap-markdown.js"></script>
<script src="{{Config::get('site.adminAssetsPath')}}plugins/slider/bootstrap-slider.js"></script>

<!-- EASY PIE CHART JS -->
<script src="{{Config::get('site.adminAssetsPath')}}plugins/easypie-chart/easypiechart.min.js"></script>
<script src="{{Config::get('site.adminAssetsPath')}}plugins/easypie-chart/jquery.easypiechart.min.js"></script>

<!-- KNOB JS -->
<!--[if IE]>
<script type="text/javascript" src="{{Config::get('site.adminAssetsPath')}}plugins/jquery-knob/excanvas.js"></script>
<![endif]-->
<script src="{{Config::get('site.adminAssetsPath')}}plugins/jquery-knob/jquery.knob.js"></script>
<script src="{{Config::get('site.adminAssetsPath')}}plugins/jquery-knob/knob.js"></script>

<!-- FLOT CHART JS -->
<script src="{{Config::get('site.adminAssetsPath')}}plugins/flot-chart/jquery.flot.js"></script>
<script src="{{Config::get('site.adminAssetsPath')}}plugins/flot-chart/jquery.flot.tooltip.js"></script>
<script src="{{Config::get('site.adminAssetsPath')}}plugins/flot-chart/jquery.flot.resize.js"></script>
<script src="{{Config::get('site.adminAssetsPath')}}plugins/flot-chart/jquery.flot.selection.js"></script>
<script src="{{Config::get('site.adminAssetsPath')}}plugins/flot-chart/jquery.flot.stack.js"></script>
<script src="{{Config::get('site.adminAssetsPath')}}plugins/flot-chart/jquery.flot.time.js"></script>

<!-- MORRIS JS -->
<script src="{{Config::get('site.adminAssetsPath')}}plugins/morris-chart/raphael.min.js"></script>
<script src="{{Config::get('site.adminAssetsPath')}}plugins/morris-chart/morris.min.js"></script>

<!-- C3 JS -->
<script src="{{Config::get('site.adminAssetsPath')}}plugins/c3-chart/d3.v3.min.js" charset="utf-8"></script>
<script src="{{Config::get('site.adminAssetsPath')}}plugins/c3-chart/c3.min.js"></script>

<!-- MAIN APPS JS -->
<script src="{{Config::get('site.adminAssetsPath')}}js/apps.js"></script>

</body>
</html>