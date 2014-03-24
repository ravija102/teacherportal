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
    <script>
        
        function copyname(s)
	{
		//alert("das");
		if(s.checked)
		{
		  var c_name=document.getElementById("current_name").value;
		  document.getElementById("name").value=c_name;
		}
		else {
			document.getElementById("name").value="";
		}
	}
        
    </script>
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
	<!-- BEGIN TOP NAVIGATION BAR -->z
            <?php $this->load->view('admin/top_menu'); ?>
	<!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
            <?php $this->load->view('admin/side_menu'); ?>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
                            <?php $this->load->view('admin/header'); ?>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">

			</div>
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN VALIDATION STATES-->
					<div class="portlet box purple">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-reorder"></i>Edit School
							</div>

						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
                                                        <form action="<?=base_url()?>index.php/admin/school_type/edit_school/<?=$id_data[0]->id?>" id="form_sample_1" class="form-horizontal" method="post">
								<div class="form-body">
                                                                    <div class="error1">
                                                                        <?php  //echo validation_errors(); ?>
                                                                        <?=(isset($error) ? $error : '');?>
                                                                    </div>
									<div class="form-group">
										<label class="control-label col-md-3">School Name
										<span class="required">
											*
										</span>
										</label>
										<div class="col-md-4">
                                                                                   <input type="text" name="name" id="name" data-required="1" class="form-control" value="<?=$id_data[0]->name?>" /><!-- </br><input type="checkbox" name="check1" id="check1" onclick="copyname(this);" />...Same As Current Name-->
                                                                                    <div class="error">
                                                                                        <?=form_error('name')?>
                                                                                    </div>
										</div>
									</div>
								</div>
								<div class="form-actions fluid">
									<div class="col-md-offset-3 col-md-9">
										<button type="submit" class="btn green">Submit</button>
										<a type="button" class="btn default" href="<?=base_url()?>index.php/admin/school_type">Cancel</a>
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
			</div>
			<div class="row">
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