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
	<title>Pixit - Responsive Boostrap3 Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="" name="description"/>
	<meta content="themes-lab" name="author"/>
	<!-- END META SECTION -->
	<!-- BEGIN MANDATORY STYLE -->
	<link href="{{ Config::get('site.adminAssetsPath') }}css/icons/icons.min.css" rel="stylesheet">
	<link href="{{ Config::get('site.adminAssetsPath') }}css/bootstrap.min.css" rel="stylesheet">
	<link href="{{ Config::get('site.adminAssetsPath') }}css/plugins.min.css" rel="stylesheet">
	<link href="{{ Config::get('site.adminAssetsPath') }}css/style.min.css" rel="stylesheet">
	<!-- END  MANDATORY STYLE -->
	<!-- BEGIN PAGE LEVEL STYLE -->
	@yield('pageLevelStyle')
	<!-- END PAGE LEVEL STYLE -->
	<script
		src="{{ Config::get('site.adminAssetsPath') }}plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body data-page="dashboard">
<!-- BEGIN TOP MENU -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<div class="container-fluid">
<div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sidebar">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	<a id="menu-medium" class="sidebar-toggle tooltips">
		<i class="fa fa-outdent"></i>
	</a>
	<a class="navbar-brand" href="index.html">
		<img src="{{ Config::get('site.adminAssetsPath') }}img/logo.png" alt="logo" width="79" height="26">
	</a>
</div>
<div class="navbar-center">Dashboard</div>
<div class="navbar-collapse collapse">
<!-- BEGIN TOP NAVIGATION MENU -->
<ul class="nav navbar-nav pull-right header-menu">
<!-- BEGIN NOTIFICATION DROPDOWN -->
<li class="dropdown" id="notifications-header">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
		<i class="glyph-icon flaticon-notifications"></i>
		<span class="badge badge-danger badge-header">6</span>
	</a>
	<ul class="dropdown-menu">
		<li class="dropdown-header clearfix">
			<p class="pull-left">Notifications</p>
		</li>
		<li>
			<ul class="dropdown-menu-list withScroll" data-height="220">
				<li>
					<a href="#">
						<i class="fa fa-star p-r-10 f-18 c-orange"></i>
						Steve have rated your photo
						<span class="dropdown-time">Just now</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-heart p-r-10 f-18 c-red"></i>
						John added you to his favs
						<span class="dropdown-time">15 mins</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-file-text p-r-10 f-18"></i>
						New document available
						<span class="dropdown-time">22 mins</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-picture-o p-r-10 f-18 c-blue"></i>
						New picture added
						<span class="dropdown-time">40 mins</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-bell p-r-10 f-18 c-orange"></i>
						Meeting in 1 hour
						<span class="dropdown-time">1 hour</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-bell p-r-10 f-18"></i>
						Server 5 overloaded
						<span class="dropdown-time">2 hours</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-comment p-r-10 f-18 c-gray"></i>
						Bill comment your post
						<span class="dropdown-time">3 hours</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-picture-o p-r-10 f-18 c-blue"></i>
						New picture added
						<span class="dropdown-time">2 days</span>
					</a>
				</li>
			</ul>
		</li>
		<li class="dropdown-footer clearfix">
			<a href="#" class="pull-left">See all notifications</a>
			<a href="#" class="pull-right">
				<i class="fa fa-cog"></i>
			</a>
		</li>
	</ul>
</li>
<!-- END NOTIFICATION DROPDOWN -->
<!-- BEGIN MESSAGES DROPDOWN -->
<li class="dropdown" id="messages-header">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
		<i class="glyph-icon flaticon-email"></i>
                            <span class="badge badge-primary badge-header">
                             8
                        </span>
	</a>
	<ul class="dropdown-menu">
		<li class="dropdown-header clearfix">
			<p class="pull-left">
				Messages
			</p>
		</li>
		<li class="dropdown-body">
			<ul class="dropdown-menu-list withScroll" data-height="220">
				<li class="clearfix">
                                        <span class="pull-left p-r-5">
                                            <img src="{{ Config::get('site.adminAssetsPath') }}img/avatars/avatar3.png"
                                                 alt="avatar 3">
                                        </span>

					<div class="clearfix">
						<div>
							<strong>Alexa Johnson</strong>
							<small class="pull-right text-muted">
								<span class="glyphicon glyphicon-time p-r-5"></span>12 mins ago
							</small>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur...</p>
					</div>
				</li>
				<li class="clearfix">
                                        <span class="pull-left p-r-5">
                                            <img src="{{ Config::get('site.adminAssetsPath') }}img/avatars/avatar4.png"
                                                 alt="avatar 4">
                                        </span>

					<div class="clearfix">
						<div>
							<strong>John Smith</strong>
							<small class="pull-right text-muted">
								<span class="glyphicon glyphicon-time p-r-5"></span>47 mins ago
							</small>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur...</p>
					</div>
				</li>
				<li class="clearfix">
                                        <span class="pull-left p-r-5">
                                            <img src="{{ Config::get('site.adminAssetsPath') }}img/avatars/avatar5.png"
                                                 alt="avatar 5">
                                        </span>

					<div class="clearfix">
						<div>
							<strong>Bobby Brown</strong>
							<small class="pull-right text-muted">
								<span class="glyphicon glyphicon-time p-r-5"></span>1 hour ago
							</small>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur...</p>
					</div>
				</li>
				<li class="clearfix">
                                        <span class="pull-left p-r-5">
                                            <img src="{{ Config::get('site.adminAssetsPath') }}img/avatars/avatar6.png"
                                                 alt="avatar 6">
                                        </span>

					<div class="clearfix">
						<div>
							<strong>James Miller</strong>
							<small class="pull-right text-muted">
								<span class="glyphicon glyphicon-time p-r-5"></span>2 days ago
							</small>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur...</p>
					</div>
				</li>
			</ul>
		</li>
		<li class="dropdown-footer clearfix">
			<a href="mailbox.html" class="pull-left">See all messages</a>
			<a href="#" class="pull-right">
				<i class="fa fa-cog"></i>
			</a>
		</li>
	</ul>
</li>
<!-- END MESSAGES DROPDOWN -->
<!-- BEGIN USER DROPDOWN -->
<li class="dropdown" id="user-header">
	<a href="#" class="dropdown-toggle c-white" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
		<img src="{{ Config::get('site.adminAssetsPath') }}img/avatars/avatar2.png" alt="user avatar" width="30"
		     class="p-r-5">
		<span class="username">{{ Auth::user()->username }}</span>
		<i class="fa fa-angle-down p-r-10"></i>
	</a>
	<ul class="dropdown-menu">
		<li>
			<a href="extra_profile.html">
				<i class="glyph-icon flaticon-account"></i> 我的资料
			</a>
		</li>
		<li>
			<a href="calendar.html">
				<i class="glyph-icon flaticon-settings21"></i> 用户设置
			</a>
		</li>
		<li class="dropdown-footer clearfix">
			<a href="javascript:;" class="toggle_fullscreen" title="全屏">
				<i class="glyph-icon flaticon-fullscreen3"></i>
			</a>
			<a href="lockscreen.html" title="锁屏">
				<i class="glyph-icon flaticon-padlock23"></i>
			</a>
			<a href="{{ URL::to('admin/logout') }}" title="注销">
				<i class="fa fa-power-off"></i>
			</a>
		</li>
	</ul>
</li>
<!-- END USER DROPDOWN -->
<!-- BEGIN CHAT HEADER -->
<li id="chat-header">
	<a href="#" class="c-white" id="chat-toggle">
		<i class="glyph-icon flaticon-speech76 f-24"></i>
		<span id="chat-notification" class="notification notification-danger hide" data-delay="2000"></span>
	</a>

	<div id="chat-popup" class="chat-popup hide" data-delay="2000">
		<div class="arrow-up"></div>
		<div class="chat-popup-inner bg-blue">
			<div>
				<div class="clearfix w-600">
					<img src="{{ Config::get('site.adminAssetsPath') }}img/avatars/avatar3.png" alt="avatar 3"
					     width="30" class="pull-left img-circle p-r-5">Alexa Johnson
				</div>
				<div class="message m-t-5">Hey you there?</div>
			</div>
		</div>
	</div>
</li>
<!-- END CHAT HEADER -->
</ul>
<!-- END TOP NAVIGATION MENU -->
</div>
</div>
</nav>
<!-- END TOP MENU -->
<!-- BEGIN WRAPPER -->
<div id="wrapper">
	<!-- BEGIN MAIN SIDEBAR -->
	<nav id="sidebar">
		<div id="main-menu">
			<?php
			$menu = new Menu();
			$menu->listActiveCssClass = "current";
			$menu->menuOptions = array(
				'class' => 'sidebar-nav',
			);
			$menu->items = array(
				array(
					'label' => '仪表盘',
					'url' => URL::to('admin'),
					'icon' => 'dashboard',
					'active' => array('admin', 'admin/dashboard'),
				),
				array(
					'label' => '文章',
					'url' => URL::to('admin/post'),
					'icon' => 'book',
					'active' => array('admin/post', 'admin/post/list', 'admin/post/view/{id}', 'admin/post/edit/{id}'),
					'items' => array(
						array(
							'label' => '所有文章',
							'url' => URL::to('admin/post/list'),
							'active' => array('admin/post/list', 'admin/post/view/{id}', 'admin/post/edit/{id}'),
						),
						array(
							'label' => '添加文章',
							'url' => URL::to('admin/post/create'),
							'active' => array('admin/post/create'),
						),
					),
				),
				array(
					'label' => '分类',
					'url' => URL::to('admin/category'),
					'icon' => 'tasks',
					'active' => array('admin/category', 'admin/category/list', 'admin/category/view/{id}',
						'admin/category/edit/{id}'),
					'items' => array(
						array(
							'label' => '所有分类',
							'url' => URL::to('admin/category/list'),
							'active' => array('admin/category', 'admin/category/list', 'admin/category/view/{id}',
							),
						),
						array(
							'label' => '添加分类',
							'url' => URL::to('admin/category/create'),
							'active' => array('admin/category/create'),
						),
					),
				),
				array(
					'label' => '用户',
					'url' => URL::to('admin/user'),
					'icon' => 'user',
				),

			);
			$menu->make();
			?>
		</div>
		<div class="footer-widget">
			<img src="{{ Config::get('site.adminAssetsPath') }}img/gradient.png" alt="gradient effet"
			     class="sidebar-gradient-img"/>

			<div id="sidebar-charts">
				<div class="sidebar-charts-inner">
					<div class="sidebar-charts-left">
						<div class="sidebar-chart-title">Orders</div>
						<div class="sidebar-chart-number">1,256</div>
					</div>
					<div class="sidebar-charts-right" class="sparkline mini-chart" data-type="bar" data-color="theme">
						<span class="dynamicbar1"></span>
					</div>
				</div>
				<hr class="divider">
				<div class="sidebar-charts-inner">
					<div class="sidebar-charts-left">
						<div class="sidebar-chart-title">Income</div>
						<div class="sidebar-chart-number">$47,564</div>
					</div>
					<div class="sidebar-charts-right" class="sparkline mini-chart" data-type="bar" data-color="theme">
						<span class="dynamicbar2"></span>
					</div>
				</div>
				<hr class="divider">
				<div class="sidebar-charts-inner">
					<div class="sidebar-charts-left">
						<div class="sidebar-chart-title">Visits</div>
						<div class="sidebar-chart-number" id="number-visits">147,687</div>
					</div>
					<div class="sidebar-charts-right" class="sparkline mini-chart" data-type="bar" data-color="theme">
						<span class="dynamicbar3"></span>
					</div>
				</div>
			</div>
			<div class="sidebar-footer clearfix">
				<a class="pull-left" href="profil.html" rel="tooltip" data-placement="top"
				   data-original-title="Settings"><i
						class="glyph-icon flaticon-settings21"></i></a>
				<a class="pull-left toggle_fullscreen" href="#" rel="tooltip" data-placement="top"
				   data-original-title="Fullscreen"><i class="glyph-icon flaticon-fullscreen3"></i></a>
				<a class="pull-left" href="lockscreen.html" rel="tooltip" data-placement="top"
				   data-original-title="Lockscreen"><i
						class="glyph-icon flaticon-padlock23"></i></a>
				<a class="pull-left" href="login.html" rel="tooltip" data-placement="top"
				   data-original-title="Logout"><i
						class="fa fa-power-off"></i></a>
			</div>
		</div>
	</nav>
	<!-- END MAIN SIDEBAR -->


	<!-- BEGIN MAIN CONTENT -->
	@yield('content')
	<!-- END MAIN CONTENT -->

</div>
<!-- END WRAPPER -->
<!-- BEGIN CHAT MENU -->
<nav id="menu-right">
	<ul>
		<li class="mm-label label-big">ONLINE</li>
		<li class="img no-arrow have-message">
                <span>
                    <i class="online"></i>
                    <img src="{{ Config::get('site.adminAssetsPath') }}img/avatars/avatar3.png"/>
                    <div class="chat-name">Alexa Johnson</div>
                    <div class="pull-right badge badge-danger hide">3</div>
                    <div>Los Angeles</div>
                </span>
			<ul class="chat-messages">
				<li class="img"><span><div class="chat-detail"><img
								src="{{ Config::get('site.adminAssetsPath') }}img/avatars/avatar3.png"/>

							<div class="chat-bubble">Hi you!</div>
						</div></span>
				</li>
				<li class="img"><span><div class="chat-detail"><img
								src="{{ Config::get('site.adminAssetsPath') }}img/avatars/avatar3.png"/>

							<div class="chat-bubble">You there?</div>
						</div></span>
				</li>
				<li class="img"><span><div class="chat-detail"><img
								src="{{ Config::get('site.adminAssetsPath') }}img/avatars/avatar3.png"/>

							<div class="chat-bubble">Let me know when you come back</div>
						</div></span>
				</li>
				<div class="chat-input">
					<input type="text" class="form-control send-message" placeholder="Type your message"/>
				</div>
			</ul>
		</li>
		<li class="img no-arrow">
                <span>
                    <i class="online"></i>
                    <img src="{{ Config::get('site.adminAssetsPath') }}img/avatars/avatar2.png" alt="avatar 2"/>
                    <div class="chat-name">Bobby Brown</div>
                    <div>New York</div>
                </span>
			<ul class="chat-messages">
				<div class="chat-input">
					<input type="text" class="form-control send-message" placeholder="Type your message"/>
				</div>
			</ul>
		</li>
		<li class="img no-arrow">
                <span>
                    <i class="busy"></i>
                    <img src="{{ Config::get('site.adminAssetsPath') }}img/avatars/avatar13.png" alt="avatar 13"/>
                    <div class="chat-name">Fred Smith</div>
                    <div>Atlanta</div>
                </span>
			<ul class="chat-messages">
				<div class="chat-input">
					<input type="text" class="form-control send-message" placeholder="Type your message"/>
				</div>
			</ul>
		</li>
		<li class="img no-arrow">
                <span>
                    <i class="away"></i>
                    <img src="{{ Config::get('site.adminAssetsPath') }}img/avatars/avatar4.png" alt="avatar 4"/>
                    <div class="chat-name">James Miller</div>
                    <div>Seattle</div>
                </span>
			<ul class="chat-messages">
				<div class="chat-input">
					<input type="text" class="form-control send-message" placeholder="Type your message"/>
				</div>
			</ul>
		</li>
		<li class="img no-arrow">
                <span>
                    <i class="online"></i>
                    <img src="{{ Config::get('site.adminAssetsPath') }}img/avatars/avatar5.png" alt="avatar 5"/>
                    <div class="chat-name">Jefferson Jackson</div>
                    <div>Los Angeles</div>
                </span>
			<ul class="chat-messages">
				<div class="chat-input">
					<input type="text" class="form-control send-message" placeholder="Type your message"/>
				</div>
			</ul>
		</li>
		<li class="mm-label label-big m-t-30">OFFLINE</li>

		<li class="img no-arrow">
                <span>
                    <i class="offline"></i>
                    <img src="{{ Config::get('site.adminAssetsPath') }}img/avatars/avatar6.png" alt="avatar 6"/>
                    <div class="chat-name">Jordan</div>
                    <div>Savannah</div>
                </span>
			<ul class="chat-messages">
				<div class="chat-input">
					<input type="text" class="form-control send-message" placeholder="Type your message"/>
				</div>
			</ul>
		</li>
		<li class="img no-arrow">
                <span>
                    <i class="offline"></i>
                    <img src="{{ Config::get('site.adminAssetsPath') }}img/avatars/avatar7.png" alt="avatar 7"/>
                    <div class="chat-name">Kim Addams</div>
                    <div>Birmingham</div>
                </span>
			<ul class="chat-messages">
				<div class="chat-input">
					<input type="text" class="form-control send-message" placeholder="Type your message"/>
				</div>
			</ul>
		</li>
		<li class="img no-arrow">
                <span>
                    <i class="offline"></i>
                    <img src="{{ Config::get('site.adminAssetsPath') }}img/avatars/avatar8.png" alt="avatar 8"/>
                    <div class="chat-name">Meagan Miller</div>
                    <div>San Francisco</div>
                </span>
			<ul class="chat-messages">
				<div class="chat-input">
					<input type="text" class="form-control send-message" placeholder="Type your message"/>
				</div>
			</ul>
		</li>
		<li class="img no-arrow">
                <span>
                        <i class="offline"></i>
                        <img src="{{ Config::get('site.adminAssetsPath') }}img/avatars/avatar9.png" alt="avatar 9"/>
                        <div class="chat-name">Melissa Johnson</div>
                        <div>Austin</div>
                    </span>
			<ul class="chat-messages">
				<div class="chat-input">
					<input type="text" class="form-control send-message" placeholder="Type your message"/>
				</div>
			</ul>
		</li>
		<li class="img no-arrow">
                <span>
                    <i class="offline"></i>
                    <img src="{{ Config::get('site.adminAssetsPath') }}img/avatars/avatar12.png" alt="avatar 12"/>
                    <div class="chat-name">Nicole Smith</div>
                    <div>San Diego</div>
                </span>
			<ul class="chat-messages">
				<div class="chat-input">
					<input type="text" class="form-control send-message" placeholder="Type your message"/>
				</div>
			</ul>
		</li>
		<li class="img no-arrow">
                <span>
                    <i class="offline"></i>
                    <img src="{{ Config::get('site.adminAssetsPath') }}img/avatars/avatar11.png" alt="avatar 11"/>
                    <div class="chat-name">Samantha Harris</div>
                    <div>Salt Lake City</div>
                </span>
			<ul class="chat-messages">
				<div class="chat-input">
					<input type="text" class="form-control send-message" placeholder="Type your message"/>
				</div>
			</ul>
		</li>
		<li class="img no-arrow">
                <span>
                    <i class="offline"></i>
                    <img src="{{ Config::get('site.adminAssetsPath') }}img/avatars/avatar10.png" alt="avatar 10"/>
                    <div class="chat-name">Scott Thomson</div>
                    <div>Los Angeles</div>
                </span>
			<ul class="chat-messages">
				<div class="chat-input">
					<input type="text" class="form-control send-message" placeholder="Type your message"/>
				</div>
			</ul>
		</li>
	</ul>
</nav>
<!-- END CHAT MENU -->
<!-- BEGIN MANDATORY SCRIPTS -->
<script src="{{ Config::get('site.adminAssetsPath') }}plugins/jquery-1.11.js"></script>
<script src="{{ Config::get('site.adminAssetsPath') }}plugins/jquery-migrate-1.2.1.js"></script>
<script src="{{ Config::get('site.adminAssetsPath') }}plugins/jquery-ui/jquery-ui-1.10.4.min.js"></script>
<script src="{{ Config::get('site.adminAssetsPath') }}plugins/bootstrap/bootstrap.min.js"></script>
<script
	src="{{ Config::get('site.adminAssetsPath') }}plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js"></script>
<script src="{{ Config::get('site.adminAssetsPath') }}plugins/bootstrap-select/bootstrap-select.js"></script>
<script src="{{ Config::get('site.adminAssetsPath') }}plugins/icheck/icheck.js"></script>
<script
	src="{{ Config::get('site.adminAssetsPath') }}plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="{{ Config::get('site.adminAssetsPath') }}plugins/mmenu/js/jquery.mmenu.min.all.js"></script>
<script src="{{ Config::get('site.adminAssetsPath') }}plugins/nprogress/nprogress.js"></script>
<script src="{{ Config::get('site.adminAssetsPath') }}plugins/charts-sparkline/sparkline.min.js"></script>
<script src="{{ Config::get('site.adminAssetsPath') }}plugins/breakpoints/breakpoints.js"></script>
<script src="{{ Config::get('site.adminAssetsPath') }}plugins/numerator/jquery-numerator.js"></script>
<!-- END MANDATORY SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
@yield('pageLevelScripts')
<!-- END  PAGE LEVEL SCRIPTS -->
<script src="{{ Config::get('site.adminAssetsPath') }}js/application.js"></script>
</body>

</html>