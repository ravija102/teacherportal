<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.0.3
Version: 1.5.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Metronic | Extra - User Profile</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<meta name="MobileOptimized" content="320">
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="<?=base_url('public_html/plugins/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css"/>
<link href="<?=base_url('public_html/plugins/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css"/>
<link href="<?=base_url('public_html/plugins/uniform/css/uniform.default.css');?>" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?=base_url('public_html/plugins/bootstrap-fileupload/bootstrap-fileupload.css');?>"/>
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="<?=base_url('public_html/css/style-metronic.css');?>" rel="stylesheet" type="text/css"/>
<link href="<?=base_url('public_html/css/style.css');?>" rel="stylesheet" type="text/css"/>
<link href="<?=base_url('public_html/css/style-responsive.css');?>" rel="stylesheet" type="text/css"/>
<link href="<?=base_url('public_html/css/plugins.css');?>" rel="stylesheet" type="text/css"/>
<link href="<?=base_url('public_html/css/themes/default.css');?>" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?=base_url('public_html/css/pages/profile.css');?>" rel="stylesheet" type="text/css"/>
<link href="<?=base_url('public_html/css/custom.css');?>" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="<?=base_url('public_html/favicon.ico');?>"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed page-sidebar-closed">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse navbar-fixed-top">
	<!-- BEGIN TOP NAVIGATION BAR -->
	<div class="header-inner">
		<!-- BEGIN LOGO -->
		<a class="navbar-brand" href="index.html">
		<img src="<?=base_url('public_html/img/logo.png');?>" alt="logo" class="img-responsive"/>
		</a>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<img src="<?=base_url('public_html/img/menu-toggler.png');?>" alt=""/>
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<ul class="nav navbar-nav pull-right">
			<!-- BEGIN NOTIFICATION DROPDOWN -->
			<li class="dropdown" id="header_notification_bar">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
				<i class="fa fa-warning"></i>
				<span class="badge">
					6
				</span>
				</a>
				<ul class="dropdown-menu extended notification">
					<li>
						<p>
							You have 14 new notifications
						</p>
					</li>
					<li>
						<ul class="dropdown-menu-list scroller" style="height: 250px;">
							<li>
								<a href="#">
								<span class="label label-icon label-success">
									<i class="fa fa-plus"></i>
								</span>
								 New user registered.
								<span class="time">
									Just now
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-icon label-danger">
									<i class="fa fa-bolt"></i>
								</span>
								 Server #12 overloaded.
								<span class="time">
									15 mins
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-icon label-warning">
									<i class="fa fa-bell-o"></i>
								</span>
								 Server #2 not responding.
								<span class="time">
									22 mins
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-icon label-info">
									<i class="fa fa-bullhorn"></i>
								</span>
								 Application error.
								<span class="time">
									40 mins
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-icon label-danger">
									<i class="fa fa-bolt"></i>
								</span>
								 Database overloaded 68%.
								<span class="time">
									2 hrs
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-icon label-danger">
									<i class="fa fa-bolt"></i>
								</span>
								 2 user IP blocked.
								<span class="time">
									5 hrs
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-icon label-warning">
									<i class="fa fa-bell-o"></i>
								</span>
								 Storage Server #4 not responding.
								<span class="time">
									45 mins
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-icon label-info">
									<i class="fa fa-bullhorn"></i>
								</span>
								 System Error.
								<span class="time">
									55 mins
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-icon label-danger">
									<i class="fa fa-bolt"></i>
								</span>
								 Database overloaded 68%.
								<span class="time">
									2 hrs
								</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="external">
						<a href="#">See all notifications <i class="m-icon-swapright"></i></a>
					</li>
				</ul>
			</li>
			<!-- END NOTIFICATION DROPDOWN -->
			<!-- BEGIN INBOX DROPDOWN -->
			<li class="dropdown" id="header_inbox_bar">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
				<i class="fa fa-envelope"></i>
				<span class="badge">
					5
				</span>
				</a>
				<ul class="dropdown-menu extended inbox">
					<li>
						<p>
							You have 12 new messages
						</p>
					</li>
					<li>
						<ul class="dropdown-menu-list scroller" style="height: 250px;">
							<li>
								<a href="inbox.html?a=view">
								<span class="photo">
									<img src="<?=base_url('public_html/img/avatar2.jpg');?>" alt=""/>
								</span>
								<span class="subject">
									<span class="from">
										Lisa Wong
									</span>
									<span class="time">
										Just Now
									</span>
								</span>
								<span class="message">
									 Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh...
								</span>
								</a>
							</li>
							<li>
								<a href="inbox.html?a=view">
								<span class="photo">
									<img src="<?=base_url('public_html/img/avatar3.jpg');?>" alt=""/>
								</span>
								<span class="subject">
									<span class="from">
										Richard Doe
									</span>
									<span class="time">
										16 mins
									</span>
								</span>
								<span class="message">
									 Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh...
								</span>
								</a>
							</li>
							<li>
								<a href="inbox.html?a=view">
								<span class="photo">
									<img src="<?=base_url('public_html/img/avatar1.jpg');?>" alt=""/>
								</span>
								<span class="subject">
									<span class="from">
										Bob Nilson
									</span>
									<span class="time">
										2 hrs
									</span>
								</span>
								<span class="message">
									 Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh...
								</span>
								</a>
							</li>
							<li>
								<a href="inbox.html?a=view">
								<span class="photo">
									<img src="<?=base_url('public_html/img/avatar2.jpg');?>" alt=""/>
								</span>
								<span class="subject">
									<span class="from">
										Lisa Wong
									</span>
									<span class="time">
										40 mins
									</span>
								</span>
								<span class="message">
									 Vivamus sed auctor 40% nibh congue nibh...
								</span>
								</a>
							</li>
							<li>
								<a href="inbox.html?a=view">
								<span class="photo">
									<img src="<?=base_url('public_html/img/avatar3.jpg');?>" alt=""/>
								</span>
								<span class="subject">
									<span class="from">
										Richard Doe
									</span>
									<span class="time">
										46 mins
									</span>
								</span>
								<span class="message">
									 Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh...
								</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="external">
						<a href="inbox.html">See all messages <i class="m-icon-swapright"></i></a>
					</li>
				</ul>
			</li>
			<!-- END INBOX DROPDOWN -->
			<!-- BEGIN TODO DROPDOWN -->
			<li class="dropdown" id="header_task_bar">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
				<i class="fa fa-tasks"></i>
				<span class="badge">
					5
				</span>
				</a>
				<ul class="dropdown-menu extended tasks">
					<li>
						<p>
							You have 12 pending tasks
						</p>
					</li>
					<li>
						<ul class="dropdown-menu-list scroller" style="height: 250px;">
							<li>
								<a href="#">
								<span class="task">
									<span class="desc">
										New release v1.2
									</span>
									<span class="percent">
										30%
									</span>
								</span>
								<span class="progress">
									<span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
										<span class="sr-only">
											40% Complete
										</span>
									</span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
									<span class="desc">
										Application deployment
									</span>
									<span class="percent">
										65%
									</span>
								</span>
								<span class="progress progress-striped">
									<span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
										<span class="sr-only">
											65% Complete
										</span>
									</span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
									<span class="desc">
										Mobile app release
									</span>
									<span class="percent">
										98%
									</span>
								</span>
								<span class="progress">
									<span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
										<span class="sr-only">
											98% Complete
										</span>
									</span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
									<span class="desc">
										Database migration
									</span>
									<span class="percent">
										10%
									</span>
								</span>
								<span class="progress progress-striped">
									<span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
										<span class="sr-only">
											10% Complete
										</span>
									</span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
									<span class="desc">
										Web server upgrade
									</span>
									<span class="percent">
										58%
									</span>
								</span>
								<span class="progress progress-striped">
									<span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
										<span class="sr-only">
											58% Complete
										</span>
									</span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
									<span class="desc">
										Mobile development
									</span>
									<span class="percent">
										85%
									</span>
								</span>
								<span class="progress progress-striped">
									<span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
										<span class="sr-only">
											85% Complete
										</span>
									</span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
									<span class="desc">
										New UI release
									</span>
									<span class="percent">
										18%
									</span>
								</span>
								<span class="progress progress-striped">
									<span style="width: 18%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
										<span class="sr-only">
											18% Complete
										</span>
									</span>
								</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="external">
						<a href="#">See all tasks <i class="m-icon-swapright"></i></a>
					</li>
				</ul>
			</li>
			<!-- END TODO DROPDOWN -->
			<!-- BEGIN USER LOGIN DROPDOWN -->
			<li class="dropdown user">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
				<img alt="" src="<?=base_url('public_html/img/avatar1_small.jpg');?>"/>
				<span class="username">
					Bob Nilson
				</span>
				<i class="fa fa-angle-down"></i>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="extra_profile.html"><i class="fa fa-user"></i> My Profile</a>
					</li>
					<li>
						<a href="page_calendar.html"><i class="fa fa-calendar"></i> My Calendar</a>
					</li>
					<li>
						<a href="inbox.html"><i class="fa fa-envelope"></i> My Inbox
						<span class="badge badge-danger">
							3
						</span>
						</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-tasks"></i> My Tasks
						<span class="badge badge-success">
							7
						</span>
						</a>
					</li>
					<li class="divider">
					</li>
					<li>
						<a href="javascript:;" id="trigger_fullscreen"><i class="fa fa-move"></i> Full Screen</a>
					</li>
					<li>
						<a href="extra_lock.html"><i class="fa fa-lock"></i> Lock Screen</a>
					</li>
					<li>
						<a href="login.html"><i class="fa fa-key"></i> Log Out</a>
					</li>
				</ul>
			</li>
			<!-- END USER LOGIN DROPDOWN -->
		</ul>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu">
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone">
					</div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<form class="sidebar-search" action="extra_search.html" method="POST">
						<div class="form-container">
							<div class="input-box">
								<a href="javascript:;" class="remove"></a>
								<input type="text" placeholder="Search..."/>
								<input type="button" class="submit" value=" "/>
							</div>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li class="start ">
					<a href="index.html">
					<i class="fa fa-home"></i>
					<span class="title">
						Dashboard
					</span>
					</a>
				</li>
				<li class="">
					<a href="index_horizontal_menu.html">
					<i class="fa fa-briefcase"></i>
					<span class="title">
						Dashboard 2
					</span>
					</a>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="fa fa-cogs"></i>
					<span class="title">
						Layouts
					</span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="layout_session_timeout.html">
							<span class="badge badge-roundless badge-important">
								new
							</span>
							Session Timeout</a>
						</li>
						<li>
							<a href="layout_idle_timeout.html">
							<span class="badge badge-roundless badge-important">
								new
							</span>
							User Idle Timeout</a>
						</li>
						<li>
							<a href="layout_language_bar.html">
							Language Switch Bar</a>
						</li>
						<li>
							<a href="layout_horizontal_sidebar_menu.html">
							Horizontal & Sidebar Menu</a>
						</li>
						<li>
							<a href="layout_horizontal_menu1.html">
							Horizontal Menu 1</a>
						</li>
						<li>
							<a href="layout_horizontal_menu2.html">
							Horizontal Menu 2</a>
						</li>
						<li>
							<a href="layout_search_on_header.html">
							<span class="badge badge-roundless badge-important">
								new
							</span>
							Search Box On Header</a>
						</li>
						<li>
							<a href="layout_sidebar_toggler_on_header.html">
							Sidebar Toggler On Header</a>
						</li>
						<li>
							<a href="layout_sidebar_reversed.html">
							<span class="badge badge-roundless badge-success">
								new
							</span>
							Right Sidebar Page</a>
						</li>
						<li>
							<a href="layout_sidebar_fixed.html">
							Sidebar Fixed Page</a>
						</li>
						<li>
							<a href="layout_sidebar_closed.html">
							Sidebar Closed Page</a>
						</li>
						<li>
							<a href="layout_disabled_menu.html">
							Disabled Menu Links</a>
						</li>
						<li>
							<a href="layout_blank_page.html">
							Blank Page</a>
						</li>
						<li>
							<a href="layout_boxed_page.html">
							Boxed Page</a>
						</li>
						<li>
							<a href="layout_boxed_not_responsive.html">
							Non-Responsive Boxed Layout</a>
						</li>
						<li>
							<a href="layout_promo.html">
							Promo Page</a>
						</li>
						<li>
							<a href="layout_email.html">
							Email Templates</a>
						</li>
						<li>
							<a href="layout_ajax.html">
							Content Loading via Ajax</a>
						</li>
					</ul>
				</li>
				<li id="frontend-link" class="tooltips" data-placement="right" data-original-title="Frontend&nbsp;Theme For&nbsp;Metronic&nbsp;Admin">
					<a href="http://keenthemes.com/preview/index.php?theme=metronic_frontend" target="_blank">
					<i class="fa fa-gift"></i>
					<span class="title">
						Frontend Theme
					</span>
					</a>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="fa fa-bookmark-o"></i>
					<span class="title">
						UI Features
					</span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="ui_general.html">
							General</a>
						</li>
						<li>
							<a href="ui_buttons.html">
							Buttons & Icons</a>
						</li>
						<li>
							<a href="ui_typography.html">
							Typography</a>
						</li>
						<li>
							<a href="ui_modals.html">
							Modals</a>
						</li>
						<li>
							<a href="ui_extended_modals.html">
							Extended Modals</a>
						</li>
						<li>
							<a href="ui_tabs_accordions_navs.html">
							Tabs, Accordions & Navs</a>
						</li>
						<li>
							<a href="ui_datepaginator.html">
							<span class="badge badge-roundless badge-success">
								new
							</span>
							Date Paginator</a>
						</li>
						<li>
							<a href="ui_bootbox.html">
							<span class="badge badge-roundless badge-important">
								new
							</span>
							Bootbox Dialogs</a>
						</li>
						<li>
							<a href="ui_tiles.html">
							Tiles</a>
						</li>
						<li>
							<a href="ui_toastr.html">
							Toastr Notifications</a>
						</li>
						<li>
							<a href="ui_tree.html">
							Tree View</a>
						</li>
						<li>
							<a href="ui_nestable.html">
							Nestable List</a>
						</li>
						<li>
							<a href="ui_ion_sliders.html">
							Ion Range Sliders</a>
						</li>
						<li>
							<a href="ui_noui_sliders.html">
							NoUI Range Sliders</a>
						</li>
						<li>
							<a href="ui_jqueryui_sliders.html">
							jQuery UI Sliders</a>
						</li>
						<li>
							<a href="ui_knob.html">
							Knob Circle Dials</a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="fa fa-table"></i>
					<span class="title">
						Form Stuff
					</span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="form_controls.html">
							Form Controls</a>
						</li>
						<li>
							<a href="form_layouts.html">
							Form Layouts</a>
						</li>
						<li>
							<a href="form_component.html">
							Form Components</a>
						</li>
						<li>
							<a href="form_editable.html">
							<span class="badge badge-roundless badge-warning">
								new
							</span>
							Form X-editable</a>
						</li>
						<li>
							<a href="form_wizard.html">
							Form Wizard</a>
						</li>
						<li>
							<a href="form_validation.html">
							Form Validation</a>
						</li>
						<li>
							<a href="form_image_crop.html">
							<span class="badge badge-roundless badge-important">
								new
							</span>
							Image Cropping</a>
						</li>
						<li>
							<a href="form_fileupload.html">
							Multiple File Upload</a>
						</li>
						<li>
							<a href="form_dropzone.html">
							Dropzone File Upload</a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="fa fa-sitemap"></i>
					<span class="title">
						Pages
					</span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="page_portfolio.html">
							<i class="fa fa-briefcase"></i>
							<span class="badge badge-warning badge-roundless">
								new
							</span>
							Portfolio</a>
						</li>
						<li>
							<a href="page_timeline.html">
							<i class="fa fa-clock-o"></i>
							<span class="badge badge-info">
								4
							</span>
							Timeline</a>
						</li>
						<li>
							<a href="page_coming_soon.html">
							<i class="fa fa-cogs"></i>
							Coming Soon</a>
						</li>
						<li>
							<a href="page_blog.html">
							<i class="fa fa-comments"></i>
							Blog</a>
						</li>
						<li>
							<a href="page_blog_item.html">
							<i class="fa fa-font"></i>
							Blog Post</a>
						</li>
						<li>
							<a href="page_news.html">
							<i class="fa fa-coffee"></i>
							<span class="badge badge-success">
								9
							</span>
							News</a>
						</li>
						<li>
							<a href="page_news_item.html">
							<i class="fa fa-bell"></i>
							News View</a>
						</li>
						<li>
							<a href="page_about.html">
							<i class="fa fa-group"></i>
							About Us</a>
						</li>
						<li>
							<a href="page_contact.html">
							<i class="fa fa-envelope-o"></i>
							Contact Us</a>
						</li>
						<li>
							<a href="page_calendar.html">
							<i class="fa fa-calendar"></i>
							<span class="badge badge-important">
								14
							</span>
							Calendar</a>
						</li>
					</ul>
				</li>
				<li class="active ">
					<a href="javascript:;">
					<i class="fa fa-gift"></i>
					<span class="title">
						Extra
					</span>
					<span class="selected">
					</span>
					<span class="arrow open">
					</span>
					</a>
					<ul class="sub-menu">
						<li class="active">
							<a href="extra_profile.html">
							User Profile</a>
						</li>
						<li>
							<a href="extra_lock.html">
							Lock Screen</a>
						</li>
						<li>
							<a href="extra_faq.html">
							FAQ</a>
						</li>
						<li>
							<a href="inbox.html">
							<span class="badge badge-important">
								4
							</span>
							Inbox</a>
						</li>
						<li>
							<a href="extra_search.html">
							Search Results</a>
						</li>
						<li>
							<a href="extra_invoice.html">
							Invoice</a>
						</li>
						<li>
							<a href="extra_pricing_table.html">
							Pricing Tables</a>
						</li>
						<li>
							<a href="extra_404_option1.html">
							404 Page Option 1</a>
						</li>
						<li>
							<a href="extra_404_option2.html">
							404 Page Option 2</a>
						</li>
						<li>
							<a href="extra_404_option3.html">
							404 Page Option 3</a>
						</li>
						<li>
							<a href="extra_500_option1.html">
							500 Page Option 1</a>
						</li>
						<li>
							<a href="extra_500_option2.html">
							500 Page Option 2</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="active" href="javascript:;">
					<i class="fa fa-leaf"></i>
					<span class="title">
						3 Level Menu
					</span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							Item 1
							<span class="arrow">
							</span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="#">Sample Link 1</a>
								</li>
								<li>
									<a href="#">Sample Link 2</a>
								</li>
								<li>
									<a href="#">Sample Link 3</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							Item 1
							<span class="arrow">
							</span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="#">Sample Link 1</a>
								</li>
								<li>
									<a href="#">Sample Link 1</a>
								</li>
								<li>
									<a href="#">Sample Link 1</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">
							Item 3 </a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="fa fa-folder-open"></i>
					<span class="title">
						4 Level Menu
					</span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							<i class="fa fa-cogs"></i> Item 1
							<span class="arrow">
							</span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="javascript:;">
									<i class="fa fa-user"></i>
									Sample Link 1
									<span class="arrow">
									</span>
									</a>
									<ul class="sub-menu">
										<li>
											<a href="#"><i class="fa fa-remove"></i> Sample Link 1</a>
										</li>
										<li>
											<a href="#"><i class="fa fa-pencil"></i> Sample Link 1</a>
										</li>
										<li>
											<a href="#"><i class="fa fa-edit"></i> Sample Link 1</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="fa fa-user"></i> Sample Link 1</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-external-link"></i> Sample Link 2</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-bell"></i> Sample Link 3</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							<i class="fa fa-globe"></i> Item 2
							<span class="arrow">
							</span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="#"><i class="fa fa-user"></i> Sample Link 1</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-external-link"></i> Sample Link 1</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-bell"></i> Sample Link 1</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">
							<i class="fa fa-folder-open"></i>
							Item 3 </a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="fa fa-user"></i>
					<span class="title">
						Login Options
					</span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="login.html">
							Login Form 1</a>
						</li>
						<li>
							<a href="login_soft.html">
							Login Form 2</a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="fa fa-th"></i>
					<span class="title">
						Data Tables
					</span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="table_basic.html">
							Basic Datatables</a>
						</li>
						<li>
							<a href="table_responsive.html">
							Responsive Datatables</a>
						</li>
						<li>
							<a href="table_managed.html">
							Managed Datatables</a>
						</li>
						<li>
							<a href="table_editable.html">
							Editable Datatables</a>
						</li>
						<li>
							<a href="table_advanced.html">
							Advanced Datatables</a>
						</li>
						<li>
							<a href="table_ajax.html">
							Ajax Datatables</a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="fa fa-file-text"></i>
					<span class="title">
						Portlets
					</span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="portlet_general.html">
							General Portlets</a>
						</li>
						<li>
							<a href="portlet_draggable.html">
							Draggable Portlets</a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="fa fa-map-marker"></i>
					<span class="title">
						Maps
					</span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="maps_google.html">
							Google Maps</a>
						</li>
						<li>
							<a href="maps_vector.html">
							Vector Maps</a>
						</li>
					</ul>
				</li>
				<li class="last ">
					<a href="charts.html">
					<i class="fa fa-bar-chart-o"></i>
					<span class="title">
						Visual Charts
					</span>
					</a>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN STYLE CUSTOMIZER -->
			<div class="theme-panel hidden-xs hidden-sm">
				<div class="toggler">
				</div>
				<div class="toggler-close">
				</div>
				<div class="theme-options">
					<div class="theme-option theme-colors clearfix">
						<span>
							THEME COLOR
						</span>
						<ul>
							<li class="color-black current color-default" data-style="default">
							</li>
							<li class="color-blue" data-style="blue">
							</li>
							<li class="color-brown" data-style="brown">
							</li>
							<li class="color-purple" data-style="purple">
							</li>
							<li class="color-grey" data-style="grey">
							</li>
							<li class="color-white color-light" data-style="light">
							</li>
						</ul>
					</div>
					<div class="theme-option">
						<span>
							Layout
						</span>
						<select class="layout-option form-control input-small">
							<option value="fluid" selected="selected">Fluid</option>
							<option value="boxed">Boxed</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
							Header
						</span>
						<select class="header-option form-control input-small">
							<option value="fixed" selected="selected">Fixed</option>
							<option value="default">Default</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
							Sidebar
						</span>
						<select class="sidebar-option form-control input-small">
							<option value="fixed">Fixed</option>
							<option value="default" selected="selected">Default</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
							Sidebar Position
						</span>
						<select class="sidebar-pos-option form-control input-small">
							<option value="left" selected="selected">Left</option>
							<option value="right">Right</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
							Footer
						</span>
						<select class="footer-option form-control input-small">
							<option value="fixed">Fixed</option>
							<option value="default" selected="selected">Default</option>
						</select>
					</div>
				</div>
			</div>
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					User Profile <small>user profile sample</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li class="btn-group">
							<button type="button" class="btn blue dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
							<span>
								Actions
							</span>
							<i class="fa fa-angle-down"></i>
							</button>
							<ul class="dropdown-menu pull-right" role="menu">
								<li>
									<a href="#">Action</a>
								</li>
								<li>
									<a href="#">Another action</a>
								</li>
								<li>
									<a href="#">Something else here</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Separated link</a>
								</li>
							</ul>
						</li>
						<li>
							<i class="fa fa-home"></i>
							<a href="index.html">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">Extra</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">User Profile</a>
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row profile">
				<div class="col-md-12">
					<!--BEGIN TABS-->
					<div class="tabbable tabbable-custom tabbable-full-width">
						<ul class="nav nav-tabs">
<!--							<li class="active">
								<a href="#tab_1_1" data-toggle="tab">Overview</a>
							</li>-->
							<li>
								<a href="#tab_1_3" data-toggle="tab">Account</a>
							</li>
<!--							<li>
								<a href="#tab_1_4" data-toggle="tab">Projects</a>
							</li>
							<li>
								<a href="#tab_1_6" data-toggle="tab">Help</a>
							</li>-->
						</ul>
						<div class="tab-content">
<!--							<div class="tab-pane active" id="tab_1_1">
								<div class="row">
									<div class="col-md-3">
										<ul class="list-unstyled profile-nav">
											<li>
												<img src="<?=base_url('public_html/img/profile/profile-img.png');?>" class="img-responsive" alt=""/>
												<a href="#" class="profile-edit">edit</a>
											</li>
											<li>
												<a href="#">Projects</a>
											</li>
											<li>
												<a href="#">Messages
												<span>
													3
												</span>
												</a>
											</li>
											<li>
												<a href="#">Friends</a>
											</li>
											<li>
												<a href="#">Settings</a>
											</li>
										</ul>
									</div>
									<div class="col-md-9">
										<div class="row">
											<div class="col-md-8 profile-info">
												<h1>John Doe</h1>
												<p>
													Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt laoreet dolore magna aliquam tincidunt erat volutpat laoreet dolore magna aliquam tincidunt erat volutpat.
												</p>
												<p>
													<a href="#">www.mywebsite.com</a>
												</p>
												<ul class="list-inline">
													<li>
														<i class="fa fa-map-marker"></i> Spain
													</li>
													<li>
														<i class="fa fa-calendar"></i> 18 Jan 1982
													</li>
													<li>
														<i class="fa fa-briefcase"></i> Design
													</li>
													<li>
														<i class="fa fa-star"></i> Top Seller
													</li>
													<li>
														<i class="fa fa-heart"></i> BASE Jumping
													</li>
												</ul>
											</div>
											end col-md-8
											<div class="col-md-4">
												<div class="portlet sale-summary">
													<div class="portlet-title">
														<div class="caption">
															Sales Summary
														</div>
														<div class="tools">
															<a class="reload" href="javascript:;"></a>
														</div>
													</div>
													<div class="portlet-body">
														<ul class="list-unstyled">
															<li>
																<span class="sale-info">
																	TODAY SOLD <i class="fa fa-img-up"></i>
																</span>
																<span class="sale-num">
																	23
																</span>
															</li>
															<li>
																<span class="sale-info">
																	WEEKLY SALES <i class="fa fa-img-down"></i>
																</span>
																<span class="sale-num">
																	87
																</span>
															</li>
															<li>
																<span class="sale-info">
																	TOTAL SOLD
																</span>
																<span class="sale-num">
																	2377
																</span>
															</li>
															<li>
																<span class="sale-info">
																	EARNS
																</span>
																<span class="sale-num">
																	$37.990
																</span>
															</li>
														</ul>
													</div>
												</div>
											</div>
											end col-md-4
										</div>
										end row
										<div class="tabbable tabbable-custom tabbable-custom-profile">
											<ul class="nav nav-tabs">
												<li class="active">
													<a href="#tab_1_11" data-toggle="tab">Latest Customers</a>
												</li>
												<li>
													<a href="#tab_1_22" data-toggle="tab">Feeds</a>
												</li>
											</ul>
											<div class="tab-content">
												<div class="tab-pane active" id="tab_1_11">
													<div class="portlet-body">
														<table class="table table-striped table-bordered table-advance table-hover">
														<thead>
														<tr>
															<th>
																<i class="fa fa-briefcase"></i> Company
															</th>
															<th class="hidden-xs">
																<i class="fa fa-question"></i> Descrition
															</th>
															<th>
																<i class="fa fa-bookmark"></i> Amount
															</th>
															<th>
															</th>
														</tr>
														</thead>
														<tbody>
														<tr>
															<td>
																<a href="#">Pixel Ltd</a>
															</td>
															<td class="hidden-xs">
																Server hardware purchase
															</td>
															<td>
																52560.10$
																<span class="label label-success label-sm">
																	Paid
																</span>
															</td>
															<td>
																<a class="btn default btn-xs green-stripe" href="#">View</a>
															</td>
														</tr>
														<tr>
															<td>
																<a href="#">
																Smart House </a>
															</td>
															<td class="hidden-xs">
																Office furniture purchase
															</td>
															<td>
																5760.00$
																<span class="label label-warning label-sm">
																	Pending
																</span>
															</td>
															<td>
																<a class="btn default btn-xs blue-stripe" href="#">View</a>
															</td>
														</tr>
														<tr>
															<td>
																<a href="#">
																FoodMaster Ltd </a>
															</td>
															<td class="hidden-xs">
																Company Anual Dinner Catering
															</td>
															<td>
																12400.00$
																<span class="label label-success label-sm">
																	Paid
																</span>
															</td>
															<td>
																<a class="btn default btn-xs blue-stripe" href="#">View</a>
															</td>
														</tr>
														<tr>
															<td>
																<a href="#">
																WaterPure Ltd </a>
															</td>
															<td class="hidden-xs">
																Payment for Jan 2013
															</td>
															<td>
																610.50$
																<span class="label label-danger label-sm">
																	Overdue
																</span>
															</td>
															<td>
																<a class="btn default btn-xs red-stripe" href="#">View</a>
															</td>
														</tr>
														<tr>
															<td>
																<a href="#">Pixel Ltd</a>
															</td>
															<td class="hidden-xs">
																Server hardware purchase
															</td>
															<td>
																52560.10$
																<span class="label label-success label-sm">
																	Paid
																</span>
															</td>
															<td>
																<a class="btn default btn-xs green-stripe" href="#">View</a>
															</td>
														</tr>
														<tr>
															<td>
																<a href="#">
																Smart House </a>
															</td>
															<td class="hidden-xs">
																Office furniture purchase
															</td>
															<td>
																5760.00$
																<span class="label label-warning label-sm">
																	Pending
																</span>
															</td>
															<td>
																<a class="btn default btn-xs blue-stripe" href="#">View</a>
															</td>
														</tr>
														<tr>
															<td>
																<a href="#">
																FoodMaster Ltd </a>
															</td>
															<td class="hidden-xs">
																Company Anual Dinner Catering
															</td>
															<td>
																12400.00$
																<span class="label label-success label-sm">
																	Paid
																</span>
															</td>
															<td>
																<a class="btn default btn-xs blue-stripe" href="#">View</a>
															</td>
														</tr>
														</tbody>
														</table>
													</div>
												</div>
												tab-pane
												<div class="tab-pane" id="tab_1_22">
													<div class="tab-pane active" id="tab_1_1_1">
														<div class="scroller" data-height="290px" data-always-visible="1" data-rail-visible1="1">
															<ul class="feeds">
																<li>
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label label-success">
																					<i class="fa fa-bell-o"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc">
																					 You have 4 pending tasks.
																					<span class="label label-danger label-sm">
																						 Take action <i class="fa fa-share"></i>
																					</span>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date">
																			 Just now
																		</div>
																	</div>
																</li>
																<li>
																	<a href="#">
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label label-success">
																					<i class="fa fa-bell-o"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc">
																					 New version v1.4 just lunched!
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date">
																			 20 mins
																		</div>
																	</div>
																	</a>
																</li>
																<li>
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label label-danger">
																					<i class="fa fa-bolt"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc">
																					 Database server #12 overloaded. Please fix the issue.
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date">
																			 24 mins
																		</div>
																	</div>
																</li>
																<li>
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label label-info">
																					<i class="fa fa-bullhorn"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc">
																					 New order received. Please take care of it.
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date">
																			 30 mins
																		</div>
																	</div>
																</li>
																<li>
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label label-success">
																					<i class="fa fa-bullhorn"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc">
																					 New order received. Please take care of it.
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date">
																			 40 mins
																		</div>
																	</div>
																</li>
																<li>
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label label-warning">
																					<i class="fa fa-plus"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc">
																					 New user registered.
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date">
																			 1.5 hours
																		</div>
																	</div>
																</li>
																<li>
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label label-success">
																					<i class="fa fa-bell-o"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc">
																					 Web server hardware needs to be upgraded.
																					<span class="label label-inverse label-sm">
																						Overdue
																					</span>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date">
																			 2 hours
																		</div>
																	</div>
																</li>
																<li>
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label label-default">
																					<i class="fa fa-bullhorn"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc">
																					 New order received. Please take care of it.
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date">
																			 3 hours
																		</div>
																	</div>
																</li>
																<li>
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label label-warning">
																					<i class="fa fa-bullhorn"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc">
																					 New order received. Please take care of it.
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date">
																			 5 hours
																		</div>
																	</div>
																</li>
																<li>
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label label-info">
																					<i class="fa fa-bullhorn"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc">
																					 New order received. Please take care of it.
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date">
																			 18 hours
																		</div>
																	</div>
																</li>
																<li>
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label label-default">
																					<i class="fa fa-bullhorn"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc">
																					 New order received. Please take care of it.
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date">
																			 21 hours
																		</div>
																	</div>
																</li>
																<li>
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label label-info">
																					<i class="fa fa-bullhorn"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc">
																					 New order received. Please take care of it.
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date">
																			 22 hours
																		</div>
																	</div>
																</li>
																<li>
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label label-default">
																					<i class="fa fa-bullhorn"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc">
																					 New order received. Please take care of it.
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date">
																			 21 hours
																		</div>
																	</div>
																</li>
																<li>
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label label-info">
																					<i class="fa fa-bullhorn"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc">
																					 New order received. Please take care of it.
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date">
																			 22 hours
																		</div>
																	</div>
																</li>
																<li>
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label label-default">
																					<i class="fa fa-bullhorn"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc">
																					 New order received. Please take care of it.
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date">
																			 21 hours
																		</div>
																	</div>
																</li>
																<li>
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label label-info">
																					<i class="fa fa-bullhorn"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc">
																					 New order received. Please take care of it.
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date">
																			 22 hours
																		</div>
																	</div>
																</li>
																<li>
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label label-default">
																					<i class="fa fa-bullhorn"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc">
																					 New order received. Please take care of it.
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date">
																			 21 hours
																		</div>
																	</div>
																</li>
																<li>
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label label-info">
																					<i class="fa fa-bullhorn"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc">
																					 New order received. Please take care of it.
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date">
																			 22 hours
																		</div>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
												tab-pane
											</div>
										</div>
									</div>
								</div>
							</div>
							tab_1_2-->
							<div class="tab-pane" id="tab_1_3">
								<div class="row profile-account">
									<div class="col-md-3">
										<ul class="ver-inline-menu tabbable margin-bottom-10">
											<li class="active">
												<a data-toggle="tab" href="#tab_1-1">
												<i class="fa fa-cog"></i> Personal info </a>
												<span class="after">
												</span>
											</li>
											<li>
												<a data-toggle="tab" href="#tab_2-2"><i class="fa fa-picture-o"></i> Change Avatar</a>
											</li>
											<li>
												<a data-toggle="tab" href="#tab_3-3"><i class="fa fa-lock"></i> Change Password</a>
											</li>
											<li>
												<a data-toggle="tab" href="#tab_4-4"><i class="fa fa-eye"></i> Privacity Settings</a>
											</li>
										</ul>
									</div>
									<div class="col-md-9">
										<div class="tab-content">
											<div id="tab_1-1" class="tab-pane active">
                                                                                            <form role="form" action="<?=base_url()?>index.php/admin/login/update_user/<?=$u_data[0]->id?>" method="post">
													<div class="form-group">
														<label class="control-label">First Name</label>
                                                                                                                <input type="text" placeholder="" class="form-control" name="first_name" value="<?=$u_data[0]->first_name?>" />
													</div>
													<div class="form-group">
														<label class="control-label">Last Name</label>
                                                                                                                <input type="text" placeholder="" class="form-control" name="last_name" value="<?=$u_data[0]->last_name?>" />
													</div>
                                                                                                        <div class="form-group">
                                                                                                            <label class="control-label">Email Id</label></br>
                                                                                                            <label class="" style="color: #329FCC;"><?=$u_data[0]->email_id?></label>
														
													</div>
													
													<div class="margiv-top-10">
                                                                                                            <input type="submit" href="" class="btn green" name="Save Changes" />
														<a href="#" class="btn default">Cancel</a>
													</div>
												</form>
											</div>
											<div id="tab_2-2" class="tab-pane">
												<p>
													Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
												</p>
												<form action="#" role="form">
													<div class="form-group">
														<div class="thumbnail" style="width: 310px;">
															<img src="http://www.placehold.it/310x170/EFEFEF/AAAAAA&amp;text=no+image" alt="">
														</div>
														<div class="margin-top-10 fileupload fileupload-new" data-provides="fileupload">
															<div class="input-group input-group-fixed">
																<span class="input-group-btn">
																	<span class="uneditable-input">
																		<i class="fa fa-file fileupload-exists"></i>
																		<span class="fileupload-preview">
																		</span>
																	</span>
																</span>
																<span class="btn default btn-file">
																	<span class="fileupload-new">
																		<i class="fa fa-paper-clip"></i> Select file
																	</span>
																	<span class="fileupload-exists">
																		<i class="fa fa-undo"></i> Change
																	</span>
																	<input type="file" class="default"/>
																</span>
																<a href="#" class="btn red fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
															</div>
														</div>
														<span class="label label-danger">
															NOTE!
														</span>
														<span>
															 Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only
														</span>
													</div>
													<div class="margin-top-10">
														<a href="#" class="btn green">Submit</a>
														<a href="#" class="btn default">Cancel</a>
													</div>
												</form>
											</div>
											<div id="tab_3-3" class="tab-pane">
												<form action="#">
													<div class="form-group">
														<label class="control-label">Current Password</label>
                                                                                                                <input type="password" name="curent_password" class="form-control"/>
													</div>
													<div class="form-group">
														<label class="control-label">New Password</label>
                                                                                                                <input type="password" name="pasword" class="form-control"/>
													</div>
													<div class="form-group">
														<label class="control-label">Re-type New Password</label>
                                                                                                                <input type="password" name="c_password" class="form-control"/>
													</div>
													<div class="margin-top-10">
                                                                                                            <input type="submit" class="btn green" value="Change Password" onclick="return change_pasword()"/>
														<a href="<?=base_url()?>index.php/admin/login/data" class="btn default">Cancel</a>
													</div>
												</form>
											</div>
											<div id="tab_4-4" class="tab-pane">
												<form action="#" class="">
													<table class="table table-bordered table-striped">
													<tr>
														<td>
															 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus..
														</td>
														<td>
															<label class="uniform-inline">
															<input type="radio" name="optionsRadios1" value="option1"/>
															Yes </label>
															<label class="uniform-inline">
															<input type="radio" name="optionsRadios1" value="option2" checked/>
															No </label>
														</td>
													</tr>
													<tr>
														<td>
															 Enim eiusmod high life accusamus terry richardson ad squid wolf moon
														</td>
														<td>
															<label class="uniform-inline">
															<input type="checkbox" value=""/> Yes </label>
														</td>
													</tr>
													<tr>
														<td>
															 Enim eiusmod high life accusamus terry richardson ad squid wolf moon
														</td>
														<td>
															<label class="uniform-inline">
															<input type="checkbox" value=""/> Yes </label>
														</td>
													</tr>
													<tr>
														<td>
															 Enim eiusmod high life accusamus terry richardson ad squid wolf moon
														</td>
														<td>
															<label class="uniform-inline">
															<input type="checkbox" value=""/> Yes </label>
														</td>
													</tr>
													</table>
													end profile-settings
													<div class="margin-top-10">
														<a href="#" class="btn green">Save Changes</a>
														<a href="#" class="btn default">Cancel</a>
													</div>
												</form>
											</div>
										</div>
									</div>
<!--									end col-md-9-->
								</div>
							</div>
<!--							end tab-pane-->
							<div class="tab-pane" id="tab_1_4">
								<div class="row">
									<div class="col-md-12">
										<div class="add-portfolio">
											<span>
												502 Items sold this week
											</span>
											<a href="#" class="btn icn-only green">Add a new Project <i class="m-icon-swapright m-icon-white"></i></a>
										</div>
									</div>
								</div>
								end add-portfolio
								<div class="row portfolio-block">
									<div class="col-md-5">
										<div class="portfolio-text">
											<img src="<?=base_url('public_html/img/profile/portfolio/logo_metronic.jpg');?>" alt=""/>
											<div class="portfolio-text-info">
												<h4>Metronic - Responsive Template</h4>
												<p>
													Lorem ipsum dolor sit consectetuer adipiscing elit.
												</p>
											</div>
										</div>
									</div>
									<div class="col-md-5 portfolio-stat">
										<div class="portfolio-info">
											 Today Sold
											<span>
												187
											</span>
										</div>
										<div class="portfolio-info">
											 Total Sold
											<span>
												1789
											</span>
										</div>
										<div class="portfolio-info">
											 Earns
											<span>
												$37.240
											</span>
										</div>
									</div>
									<div class="col-md-2">
										<div class="portfolio-btn">
											<a href="#" class="btn bigicn-only">
											<span>
												Manage
											</span>
											</a>
										</div>
									</div>
								</div>
								end row
								<div class="row portfolio-block">
									<div class="col-md-5 col-sm-12 portfolio-text">
										<img src="<?=base_url('public_html/img/profile/portfolio/logo_azteca.jpg');?>" alt=""/>
										<div class="portfolio-text-info">
											<h4>Metronic - Responsive Template</h4>
											<p>
												Lorem ipsum dolor sit consectetuer adipiscing elit.
											</p>
										</div>
									</div>
									<div class="col-md-5 portfolio-stat">
										<div class="portfolio-info">
											 Today Sold
											<span>
												24
											</span>
										</div>
										<div class="portfolio-info">
											 Total Sold
											<span>
												660
											</span>
										</div>
										<div class="portfolio-info">
											 Earns
											<span>
												$7.060
											</span>
										</div>
									</div>
									<div class="col-md-2 col-sm-12 portfolio-btn">
										<a href="#" class="btn bigicn-only">
										<span>
											Manage
										</span>
										</a>
									</div>
								</div>
								end row
								<div class="row portfolio-block">
									<div class="col-md-5 portfolio-text">
										<img src="<?=base_url('public_html/img/profile/portfolio/logo_conquer.jpg');?>" alt=""/>
										<div class="portfolio-text-info">
											<h4>Metronic - Responsive Template</h4>
											<p>
												Lorem ipsum dolor sit consectetuer adipiscing elit.
											</p>
										</div>
									</div>
									<div class="col-md-5 portfolio-stat">
										<div class="portfolio-info">
											 Today Sold
											<span>
												24
											</span>
										</div>
										<div class="portfolio-info">
											 Total Sold
											<span>
												975
											</span>
										</div>
										<div class="portfolio-info">
											 Earns
											<span>
												$21.700
											</span>
										</div>
									</div>
									<div class="col-md-2 portfolio-btn">
										<a href="#" class="btn bigicn-only">
										<span>
											Manage
										</span>
										</a>
									</div>
								</div>
								end row
							</div>
							<!--end tab-pane-->
							<div class="tab-pane" id="tab_1_6">
								<div class="row">
									<div class="col-md-3">
										<ul class="ver-inline-menu tabbable margin-bottom-10">
											<li class="active">
												<a data-toggle="tab" href="#tab_1">
												<i class="fa fa-briefcase"></i> General Questions </a>
												<span class="after">
												</span>
											</li>
											<li>
												<a data-toggle="tab" href="#tab_2"><i class="fa fa-group"></i> Membership</a>
											</li>
											<li>
												<a data-toggle="tab" href="#tab_3"><i class="fa fa-leaf"></i> Terms Of Service</a>
											</li>
											<li>
												<a data-toggle="tab" href="#tab_1"><i class="fa fa-info-circle"></i> License Terms</a>
											</li>
											<li>
												<a data-toggle="tab" href="#tab_2"><i class="fa fa-tint"></i> Payment Rules</a>
											</li>
											<li>
												<a data-toggle="tab" href="#tab_3"><i class="fa fa-plus"></i> Other Questions</a>
											</li>
										</ul>
									</div>
									<div class="col-md-9">
										<div class="tab-content">
											<div id="tab_1" class="tab-pane active">
												<div id="accordion1" class="panel-group">
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1">
															1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
															</h4>
														</div>
														<div id="accordion1_1" class="panel-collapse collapse in">
															<div class="panel-body">
																 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
															</div>
														</div>
													</div>
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_2">
															2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
															</h4>
														</div>
														<div id="accordion1_2" class="panel-collapse collapse">
															<div class="panel-body">
																 Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
															</div>
														</div>
													</div>
													<div class="panel panel-success">
														<div class="panel-heading">
															<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_3">
															3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ? </a>
															</h4>
														</div>
														<div id="accordion1_3" class="panel-collapse collapse">
															<div class="panel-body">
																 Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
															</div>
														</div>
													</div>
													<div class="panel panel-warning">
														<div class="panel-heading">
															<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_4">
															4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ? </a>
															</h4>
														</div>
														<div id="accordion1_4" class="panel-collapse collapse">
															<div class="panel-body">
																 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
															</div>
														</div>
													</div>
													<div class="panel panel-danger">
														<div class="panel-heading">
															<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_5">
															5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ? </a>
															</h4>
														</div>
														<div id="accordion1_5" class="panel-collapse collapse">
															<div class="panel-body">
																 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
															</div>
														</div>
													</div>
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_6">
															6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ? </a>
															</h4>
														</div>
														<div id="accordion1_6" class="panel-collapse collapse">
															<div class="panel-body">
																 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
															</div>
														</div>
													</div>
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_7">
															7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ? </a>
															</h4>
														</div>
														<div id="accordion1_7" class="panel-collapse collapse">
															<div class="panel-body">
																 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
															</div>
														</div>
													</div>
												</div>
											</div>
											<div id="tab_2" class="tab-pane">
												<div id="accordion2" class="panel-group">
													<div class="panel panel-warning">
														<div class="panel-heading">
															<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_1">
															1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
															</h4>
														</div>
														<div id="accordion2_1" class="panel-collapse collapse in">
															<div class="panel-body">
																<p>
																	 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
																</p>
																<p>
																	 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
																</p>
															</div>
														</div>
													</div>
													<div class="panel panel-danger">
														<div class="panel-heading">
															<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_2">
															2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
															</h4>
														</div>
														<div id="accordion2_2" class="panel-collapse collapse">
															<div class="panel-body">
																 Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
															</div>
														</div>
													</div>
													<div class="panel panel-success">
														<div class="panel-heading">
															<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_3">
															3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ? </a>
															</h4>
														</div>
														<div id="accordion2_3" class="panel-collapse collapse">
															<div class="panel-body">
																 Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
															</div>
														</div>
													</div>
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_4">
															4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ? </a>
															</h4>
														</div>
														<div id="accordion2_4" class="panel-collapse collapse">
															<div class="panel-body">
																 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
															</div>
														</div>
													</div>
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_5">
															5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ? </a>
															</h4>
														</div>
														<div id="accordion2_5" class="panel-collapse collapse">
															<div class="panel-body">
																 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
															</div>
														</div>
													</div>
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_6">
															6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ? </a>
															</h4>
														</div>
														<div id="accordion2_6" class="panel-collapse collapse">
															<div class="panel-body">
																 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
															</div>
														</div>
													</div>
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_7">
															7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ? </a>
															</h4>
														</div>
														<div id="accordion2_7" class="panel-collapse collapse">
															<div class="panel-body">
																 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
															</div>
														</div>
													</div>
												</div>
											</div>
											<div id="tab_3" class="tab-pane">
												<div id="accordion3" class="panel-group">
													<div class="panel panel-danger">
														<div class="panel-heading">
															<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_1">
															1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
															</h4>
														</div>
														<div id="accordion3_1" class="panel-collapse collapse in">
															<div class="panel-body">
																<p>
																	 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
																</p>
																<p>
																	 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
																</p>
																<p>
																	 Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
																</p>
															</div>
														</div>
													</div>
													<div class="panel panel-success">
														<div class="panel-heading">
															<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_2">
															2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
															</h4>
														</div>
														<div id="accordion3_2" class="panel-collapse collapse">
															<div class="panel-body">
																 Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
															</div>
														</div>
													</div>
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_3">
															3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ? </a>
															</h4>
														</div>
														<div id="accordion3_3" class="panel-collapse collapse">
															<div class="panel-body">
																 Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
															</div>
														</div>
													</div>
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_4">
															4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ? </a>
															</h4>
														</div>
														<div id="accordion3_4" class="panel-collapse collapse">
															<div class="panel-body">
																 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
															</div>
														</div>
													</div>
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_5">
															5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ? </a>
															</h4>
														</div>
														<div id="accordion3_5" class="panel-collapse collapse">
															<div class="panel-body">
																 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
															</div>
														</div>
													</div>
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_6">
															6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ? </a>
															</h4>
														</div>
														<div id="accordion3_6" class="panel-collapse collapse">
															<div class="panel-body">
																 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
															</div>
														</div>
													</div>
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_7">
															7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ? </a>
															</h4>
														</div>
														<div id="accordion3_7" class="panel-collapse collapse">
															<div class="panel-body">
																 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--end tab-pane-->
						</div>
					</div>
					<!--END TABS-->
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="footer">
	<div class="footer-inner">
		 2013 &copy; Metronic by keenthemes.
	</div>
	<div class="footer-tools">
		<span class="go-top">
			<i class="fa fa-angle-up"></i>
		</span>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/plugins/respond.min.js"></script>
<script src="assets/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="<?=base_url('public_html/plugins/jquery-1.10.2.min.js');?>" type="text/javascript"></script>
<script src="<?=base_url('public_html/plugins/jquery-migrate-1.2.1.min.js');?>" type="text/javascript"></script>
<script src="<?=base_url('public_html/plugins/bootstrap/js/bootstrap.min.js');?>" type="text/javascript"></script>
<script src="<?=base_url('public_html/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js');?>" type="text/javascript"></script>
<script src="<?=base_url('public_html/plugins/jquery-slimscroll/jquery.slimscroll.min.js');?>" type="text/javascript"></script>
<script src="<?=base_url('public_html/plugins/jquery.blockui.min.js');?>" type="text/javascript"></script>
<script src="<?=base_url('public_html/plugins/jquery.cokie.min.js');?>" type="text/javascript"></script>
<script src="<?=base_url('public_html/plugins/uniform/jquery.uniform.min.js');?>" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?=base_url('public_html/plugins/bootstrap-fileupload/bootstrap-fileupload.js');?>"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?=base_url('public_html/scripts/app.js');?>"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {       
   // initiate layout and plugins
   App.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>