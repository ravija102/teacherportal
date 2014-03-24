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
    <style>
        .error{color:red; font-weight: bold;}
        .error1{color:red; font-weight: bold; margin-left: 320px;}
    </style>
<meta charset="utf-8"/>
<title>Metronic | Form Stuff - Form Validation</title>
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
<link rel="stylesheet" type="text/css" href="<?=base_url('public_html/plugins/select2/select2_metro.css');?>"/>
<link rel="stylesheet" type="text/css" href="<?=base_url('public_html/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css');?>"/>
<link rel="stylesheet" type="text/css" href="<?=base_url('public_html/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css');?>">
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="<?=base_url('public_html/css/style-metronic.css');?>" rel="stylesheet" type="text/css"/>
<link href="<?=base_url('public_html/css/style.css');?>" rel="stylesheet" type="text/css"/>
<link href="<?=base_url('public_html/css/style-responsive.css');?>" rel="stylesheet" type="text/css"/>
<link href="<?=base_url('public_html/css/plugins.css');?>" rel="stylesheet" type="text/css"/>
<link href="<?=base_url('public_html/css/themes/default.css');?>" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?=base_url('public_html/css/custom.css');?>" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="<?=base_url('public_html/favicon.ico');?>"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
    <div class="header navbar navbar-inverse navbar-fixed-top">
	<!-- BEGIN TOP NAVIGATION BAR -->
	<?=$this->load->view('admin/top_menu')?>
	<!-- END TOP NAVIGATION BAR -->
    </div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR 
 
            <?=$this->load->view('admin/side_menu')?>
 
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
                            <?php $this->load->view('admin/header'); ?>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
<!--				<div class="col-md-12">
					 BEGIN VALIDATION STATES
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-reorder"></i>Validation States
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
								<a href="#portlet-config" data-toggle="modal" class="config"></a>
								<a href="javascript:;" class="reload"></a>
								<a href="javascript:;" class="remove"></a>
							</div>
						</div>
						<div class="portlet-body form">
							 BEGIN FORM
							<form action="#" class="form-horizontal">
								<div class="form-body">
									<h3 class="form-section">Basic validation States</h3>
									<div class="form-group has-warning">
										<label class="control-label col-md-3" for="inputWarning">Input with warning</label>
										<div class="col-md-4">
											<input type="text" class="form-control" id="inputWarning"/>
											<span class="help-block">
												Something may have gone wrong
											</span>
										</div>
									</div>
									<div class="form-group has-error">
										<label class="control-label col-md-3" for="inputError">Input with error</label>
										<div class="col-md-4">
											<input type="text" class="form-control" id="inputError"/>
											<span class="help-block">
												Please correct the error
											</span>
										</div>
									</div>
									<div class="form-group has-success">
										<label class="control-label col-md-3" for="inputSuccess">Input with success</label>
										<div class="col-md-4">
											<input type="text" class="form-control" id="inputSuccess"/>
										</div>
									</div>
									<h3 class="form-section">Validation States With Icons</h3>
									<div class="form-group has-warning">
										<label class="control-label col-md-3">Input with warning</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa fa-exclamation" data-original-title="please write a valid email"></i>
												<input type="text" class="form-control"/>
											</div>
										</div>
									</div>
									<div class="form-group has-error">
										<label class="control-label col-md-3">Input with error</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa fa-warning" data-original-title="please write a valid email"></i>
												<input type="text" class="form-control"/>
											</div>
										</div>
									</div>
									<div class="form-group has-success">
										<label class="control-label col-md-3">Input with success</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa fa-check" data-original-title="success input!"></i>
												<input type="text" class="form-control"/>
											</div>
										</div>
									</div>
								</div>
								<div class="form-actions fluid">
									<div class="col-md-offset-3 col-md-9">
										<button type="submit" class="btn green">Submit</button>
										<button type="button" class="btn default">Cancel</button>
									</div>
								</div>
							</form>
							 END FORM
						</div>
					</div>
					 END VALIDATION STATES
				</div>-->
			</div>
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN VALIDATION STATES-->
					<div class="portlet box purple">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-reorder"></i>Add Plan
							</div>
<!--							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
								<a href="#portlet-config" data-toggle="modal" class="config"></a>
								<a href="javascript:;" class="reload"></a>
								<a href="javascript:;" class="remove"></a>
							</div>-->
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
                                                        <form action="<?=base_url()?>index.php/admin/plan_detail/add_plan" id="form_sample_1" class="form-horizontal" method="post">
								<div class="form-body">
                                                                    <div class="error1">
                                                                        <?php  //echo validation_errors(); ?>
                                                                        <?=(isset($error) ? $error : '');?>
                                                                    </div>
<!--									<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
										You have some form errors. Please check below.
									</div>
									<div class="alert alert-success display-hide">
										<button class="close" data-close="alert"></button>
										Your form validation is successful!
									</div>-->
									<div class="form-group">
										<label class="control-label col-md-3">Plan Name
										<span class="required">
											*
										</span>
										</label>
										<div class="col-md-4">
                                                                                    <input type="text" name="name" data-required="1" class="form-control" value="<?=set_value('name')?>"/>
                                                                                    <div class="error">
                                                                                        <?=form_error('name')?> 
                                                                                    </div>
										</div>
									</div>
                                                                        <div class="form-group">
										<label class="control-label col-md-3">Price
										<span class="required">
											*
										</span>
										</label>
										<div class="col-md-4">
                                                                                    <input type="text" name="price" data-required="1" class="form-control" value="<?=set_value('price')?>"/>
                                                                                    <div class="error">
                                                                                        <?=form_error('price')?>
                                                                                    </div>
										</div>
									</div>
                                                                        <div class="form-group">
										<label class="control-label col-md-3">Description
										<span class="required">
											*
										</span>
										</label>
										<div class="col-md-4">
                                                                                    <textarea  name="description" data-required="1" class="form-control"><?=set_value('description')?></textarea>
                                                                                    <div class="error">
                                                                                        <?=form_error('description')?>
                                                                                    </div>
										</div>
									</div>
								</div>
								<div class="form-actions fluid">
									<div class="col-md-offset-3 col-md-9">
										<button type="submit" class="btn green">Submit</button>
                                                                                <a href="<?=base_url()?>index.php/admin/plan_detail" type="button" class="btn default">Cancel</a>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
					</div>
					<!-- END VALIDATION STATES-->
				</div>
			</div>
			<div class="row">
<!--				<div class="col-md-12">
					 BEGIN VALIDATION STATES
					<div class="portlet box yellow">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-reorder"></i>Validation Using Icons
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
								<a href="#portlet-config" data-toggle="modal" class="config"></a>
								<a href="javascript:;" class="reload"></a>
								<a href="javascript:;" class="remove"></a>
							</div>
						</div>
						<div class="portlet-body form">
							 BEGIN FORM
							<form action="#" id="form_sample_2" class="form-horizontal">
								<div class="form-body">
									<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
										You have some form errors. Please check below.
									</div>
									<div class="alert alert-success display-hide">
										<button class="close" data-close="alert"></button>
										Your form validation is successful!
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Name
										<span class="required">
											*
										</span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" name="name"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Email
										<span class="required">
											*
										</span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" name="email"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">URL
										<span class="required">
											*
										</span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" name="url"/>
											</div>
											<span class="help-block">
												e.g: http://www.demo.com or http://demo.com
											</span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Number
										<span class="required">
											*
										</span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" name="number"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Digits
										<span class="required">
											*
										</span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" name="digits"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Credit Card
										<span class="required">
											*
										</span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" name="creditcard"/>
											</div>
											<span class="help-block">
												e.g: 5500 0000 0000 0004
											</span>
										</div>
									</div>
								</div>
								<div class="form-actions fluid">
									<div class="col-md-offset-3 col-md-9">
										<button type="submit" class="btn green">Submit</button>
										<button type="button" class="btn default">Cancel</button>
									</div>
								</div>
							</form>
							 END FORM
						</div>
					</div>
					 END VALIDATION STATES
				</div>-->
			</div>
			<div class="row">
<!--				<div class="col-md-12">
					 BEGIN VALIDATION STATES
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-reorder"></i>Advance Validation
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
								<a href="#portlet-config" data-toggle="modal" class="config"></a>
								<a href="javascript:;" class="reload"></a>
								<a href="javascript:;" class="remove"></a>
							</div>
						</div>
						<div class="portlet-body form">
							 BEGIN FORM
							<form action="#" id="form_sample_3" class="form-horizontal">
								<div class="form-body">
									<h3 class="form-section">Advance validation. <small>Custom radio buttons, checkboxes and Select2 dropdowns</small></h3>
									<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
										You have some form errors. Please check below.
									</div>
									<div class="alert alert-success display-hide">
										<button class="close" data-close="alert"></button>
										Your form validation is successful!
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Name
										<span class="required">
											*
										</span>
										</label>
										<div class="col-md-4">
											<input type="text" name="name" data-required="1" class="form-control"/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Email Address
										<span class="required">
											*
										</span>
										</label>
										<div class="col-md-4">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-envelope"></i>
												</span>
												<input type="email" name="email" class="form-control" placeholder="Email Address">
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Occupation&nbsp;&nbsp;</label>
										<div class="col-md-4">
											<input name="occupation" type="text" class="form-control"/>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Category
										<span class="required">
											*
										</span>
										</label>
										<div class="col-md-4">
											<select class="form-control" name="category">
												<option value="">Select...</option>
												<option value="Category 1">Category 1</option>
												<option value="Category 2">Category 2</option>
												<option value="Category 3">Category 5</option>
												<option value="Category 4">Category 4</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Select2 Dropdown
										<span class="required">
											*
										</span>
										</label>
										<div class="col-md-4">
											<select id="form_2_select2" class="form-control select2me" name="options2">
												<option value="">Select...</option>
												<option value="Option 1">Option 1</option>
												<option value="Option 2">Option 2</option>
												<option value="Option 3">Option 3</option>
												<option value="Option 4">Option 4</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Membership
										<span class="required">
											*
										</span>
										</label>
										<div class="col-md-4">
											<div class="radio-list" data-error-container="#form_2_membership_error">
												<label>
												<input type="radio" name="membership" value="1"/>
												Fee </label>
												<label>
												<input type="radio" name="membership" value="2"/>
												Professional </label>
											</div>
											<div id="form_2_membership_error">
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Services
										<span class="required">
											*
										</span>
										</label>
										<div class="col-md-4">
											<div class="checkbox-list" data-error-container="#form_2_services_error">
												<label>
												<input type="checkbox" value="1" name="service"/> Service 1 </label>
												<label>
												<input type="checkbox" value="2" name="service"/> Service 2 </label>
												<label>
												<input type="checkbox" value="3" name="service"/> Service 3 </label>
											</div>
											<span class="help-block">
												(select at least two)
											</span>
											<div id="form_2_services_error">
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Markdown</label>
										<div class="col-md-9">
											<textarea name="markdown" data-provide="markdown" rows="10" data-error-container="#editor_error"></textarea>
											<div id="editor_error">
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">WYSIHTML5 Editor
										<span class="required">
											*
										</span>
										</label>
										<div class="col-md-9">
											<textarea class="wysihtml5 form-control" rows="6" name="editor1" data-error-container="#editor1_error"></textarea>
											<div id="editor1_error">
											</div>
										</div>
									</div>
									<div class="form-group last">
										<label class="control-label col-md-3">CKEditor
										<span class="required">
											*
										</span>
										</label>
										<div class="col-md-9">
											<textarea class="ckeditor form-control" name="editor2" rows="6" data-error-container="#editor2_error"></textarea>
											<div id="editor2_error">
											</div>
										</div>
									</div>
								</div>
								<div class="form-actions fluid">
									<div class="col-md-offset-3 col-md-9">
										<button type="submit" class="btn green">Submit</button>
										<button type="button" class="btn default">Cancel</button>
									</div>
								</div>
							</form>
							 END FORM
						</div>
						 END VALIDATION STATES
					</div>
				</div>-->
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
<script type="text/javascript" src="<?=base_url('public_html/plugins/jquery-validation/dist/jquery.validate.min.js');?>"></script>
<script type="text/javascript" src="<?=base_url('public_html/plugins/jquery-validation/dist/additional-methods.min.js');?>"></script>
<script type="text/javascript" src="<?=base_url('public_html/plugins/select2/select2.min.js');?>"></script>
<script type="text/javascript" src="<?=base_url('public_html/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js');?>"></script>
<script type="text/javascript" src="<?=base_url('public_html/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js');?>"></script>
<script type="text/javascript" src="<?=base_url('public_html/plugins/ckeditor/ckeditor.js');?>"></script>
<script type="text/javascript" src="<?=base_url('public_html/plugins/bootstrap-markdown/js/bootstrap-markdown.js');?>"></script>
<script type="text/javascript" src="<?=base_url('public_html/plugins/bootstrap-markdown/lib/markdown.js');?>"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL STYLES -->
<script src="<?=base_url('public_html/scripts/app.js');?>"></script>
<script src="<?=base_url('public_html/scripts/form-validation.js');?>"></script>
<!-- END PAGE LEVEL STYLES -->
<!--<script>
jQuery(document).ready(function() {   
   // initiate layout and plugins
   App.init();
   FormValidation.init();
});
</script>-->
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>