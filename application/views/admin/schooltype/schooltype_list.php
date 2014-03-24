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
        
        function deletechecked() {
            
            var answer = confirm("Are you sure you want to delete this Item ?")
            if (answer){
                document.messages.submit();
            }
    
            return false;  
        } 
    </script>
<meta charset="utf-8"/>
<title>Metronic | Data Tables - Managed Datatables</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<meta name="MobileOptimized" content="320">
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="<?=base_url('public_html/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css"/>
<link href="<?=base_url('public_html/plugins/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css"/>
<link href="<?=base_url('public_html/plugins/uniform/css/uniform.default.css');?>" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?=base_url('public_html/plugins/select2/select2_metro.css');?>"/>
<link rel="stylesheet" href="assets/plugins/data-tables/DT_bootstrap.css"/>
<!-- END PAGE LEVEL STYLES -->
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
	<!-- BEGIN SIDEBAR -->
	<?=$this->load->view('admin/side_menu')?>
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
<!--				<div class="toggler">
				</div>
				<div class="toggler-close">
				</div>-->
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
					School Datatables <small>School datatable</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
<!--						<li class="btn-group">
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
						</li>-->
						<li>
							<i class="fa fa-home"></i>
							<a href="index.html">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">Data Tables</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">School Datatables</a>
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box light-grey">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>School List
							</div>
<!--							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
								<a href="#portlet-config" data-toggle="modal" class="config"></a>
								<a href="javascript:;" class="reload"></a>
								<a href="javascript:;" class="remove"></a>
							</div>-->
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="btn-group">
									
                                                                    <a style="font-size: 15px; color:green; text-decoration: underline;" href="<?=base_url()?>index.php/admin/school_type/add_school" >Add New</a> 
									
								</div>
<!--								<div class="btn-group pull-right">
									<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
									</button>
									<ul class="dropdown-menu pull-right">
										<li>
											<a href="#">Print</a>
										</li>
										<li>
											<a href="#">Save as PDF</a>
										</li>
										<li>
											<a href="#">Export to Excel</a>
										</li>
									</ul>
								</div>-->
							</div>
							<table class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>
							<tr>
                                                            <th>School Name</th>
                                                            <th>Date Modefied</th>
                                                            <th>Edit</th>
                                                            <th>Delete</th>
							</tr>
							</thead>
							<tbody>
                                                   <?php foreach($school as $school_data) { ?>
                                                            
							<tr class="odd gradeX">
								
								<td>
									<?=$school_data->name?>
								</td>
								<td>
									<?=$school_data->createdon?>
								</td>
								
								<td>
									<span class="label label-sm label-success">
                                                                            <a href='<?=base_url()?>index.php/admin/school_type/edit_school/<?=$school_data->id?>' style="font-size: 15px;">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a>
									</span>
								</td>
                                                                <td>
                                                                    <span class="label label-sm label-warning">
                                                                        <a href='<?=base_url()?>index.php/admin/school_type/delete_school/<?=$school_data->id?>' style="font-size: 15px;" onclick="return deletechecked()">&nbsp;&nbsp;&nbsp;Delete&nbsp;&nbsp;&nbsp;</a>
                                                                    </span>
								</td>
							</tr>
                                                   <?php } ?>
<!--							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									looper
								</td>
								<td>
									<a href="mailto:looper90@gmail.com">looper90@gmail.com</a>
								</td>
								<td>
									120
								</td>
								<td class="center">
									12.12.2011
								</td>
								<td>
									<span class="label label-sm label-warning">
										Suspended
									</span>
								</td>
							</tr>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									userwow
								</td>
								<td>
									<a href="mailto:userwow@yahoo.com">userwow@yahoo.com</a>
								</td>
								<td>
									20
								</td>
								<td class="center">
									12.12.2012
								</td>
								<td>
									<span class="label label-sm label-success">
										Approved
									</span>
								</td>
							</tr>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									user1wow
								</td>
								<td>
									<a href="mailto:userwow@gmail.com">userwow@gmail.com</a>
								</td>
								<td>
									20
								</td>
								<td class="center">
									12.12.2012
								</td>
								<td>
									<span class="label label-sm label-default">
										Blocked
									</span>
								</td>
							</tr>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									restest
								</td>
								<td>
									<a href="mailto:userwow@gmail.com">test@gmail.com</a>
								</td>
								<td>
									20
								</td>
								<td class="center">
									12.12.2012
								</td>
								<td>
									<span class="label label-sm label-success">
										Approved
									</span>
								</td>
							</tr>
							<tr class=								<td>
"odd gradeX">
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									foopl
								</td>
								<td>
									<a href="mailto:userwow@gmail.com">good@gmail.com</a>
								</td>
								<td>
									20
								</td>
								<td class="center">
									19.11.2010
								</td>
								<td>
									<span class="label label-sm label-success">
										Approved
									</span>
								</td>
							</tr>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									weep
								</td>
								<td>
									<a href="mailto:userwow@gmail.com">good@gmail.com</a>
								</td>
								<td>
									20
								</td>
								<td class="center">
									19.11.2010
								</td>
								<td>
									<span class="label label-sm label-success">
										Approved
									</span>
								</td>
							</tr>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									coop
								</td>
								<td>
									<a href="mailto:userwow@gmail.com">good@gmail.com</a>
								</td>
								<td>
									20
								</td>
								<td class="center">
									19.11.2010
								</td>
								<td>
									<span class="label label-sm label-success">
										Approved
									</span>
								</td>
							</tr>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									pppol
								</td>
								<td>
									<a href="mailto:userwow@gmail.com">good@gmail.com</a>
								</td>
								<td>
									20
								</td>
								<td class="center">
									19.11.2010
								</td>
								<td>
									<span class="label label-sm label-success">
										Approved
									</span>
								</td>
							</tr>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									test
								</td>
								<td>
									<a href="mailto:userwow@gmail.com">good@gmail.com</a>
								</td>
								<td>
									20
								</td>
								<td class="center">
									19.11.2010
								</td>
								<td>
									<span class="label label-sm label-success">
										Approved
									</span>
								</td>
							</tr>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									userwow
								</td>
								<td>
									<a href="mailto:userwow@gmail.com">userwow@gmail.com</a>
								</td>
								<td>
									20
								</td>
								<td class="center">
									12.12.2012
								</td>
								<td>
									<span class="label label-sm label-default">
										Blocked
									</span>
								</td>
							</tr>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									test
								</td>
								<td>
									<a href="mailto:userwow@gmail.com">test@gmail.com</a>
								</td>
								<td>
									20
								</td>
								<td class="center">
									12.12.2012
								</td>
								<td>
									<span class="label label-sm label-success">
										Approved
									</span>
								</td>
							</tr>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									goop
								</td>
								<td>
									<a href="mailto:userwow@gmail.com">good@gmail.com</a>
								</td>
								<td>
									20
								</td>
								<td class="center">
									12.11.2010
								</td>
								<td>
									<span class="label label-sm label-success">
										Approved
									</span>
								</td>
							</tr>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									weep
								</td>
								<td>
									<a href="mailto:userwow@gmail.com">good@gmail.com</a>
								</td>
								<td>
									20
								</td>
								<td class="center">
									15.11.2011
								</td>
								<td>
									<span class="label label-sm label-default">
										Blocked
									</span>
								</td>
							</tr>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									toopl
								</td>
								<td>
									<a href="mailto:userwow@gmail.com">good@gmail.com</a>
								</td>
								<td>
									20
								</td>
								<td class="center">
									16.11.2010
								</td>
								<td>
									<span class="label label-sm label-success">
										Approved
									</span>
								</td>
							</tr>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									userwow
								</td>
								<td>
									<a href="mailto:userwow@gmail.com">userwow@gmail.com</a>
								</td>
								<td>
									20
								</td>
								<td class="center">
									9.12.2012
								</td>
								<td>
									<span class="label label-sm label-default">
										Blocked
									</span>
								</td>
							</tr>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									tes21t
								</td>
								<td>
									<a href="mailto:userwow@gmail.com">test@gmail.com</a>
								</td>
								<td>
									20
								</td>
								<td class="center">
									14.12.2012
								</td>
								<td>
									<span class="label label-sm label-success">
										Approved
									</span>
								</td>
							</tr>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									fop
								</td>
								<td>
									<a href="mailto:userwow@gmail.com">good@gmail.com</a>
								</td>
								<td>
									20
								</td>
								<td class="center">
									13.11.2010
								</td>
								<td>
									<span class="label label-sm label-warning">
										Suspended
									</span>
								</td>
							</tr>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									kop
								</td>
								<td>
									<a href="mailto:userwow@gmail.com">good@gmail.com</a>
								</td>
								<td>
									20
								</td>
								<td class="center">
									17.11.2010
								</td>
								<td>
									<span class="label label-sm label-success">
										Approved
									</span>
								</td>
							</tr>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									vopl
								</td>
								<td>
									<a href="mailto:userwow@gmail.com">good@gmail.com</a>
								</td>
								<td>
									20
								</td>
								<td class="center">
									19.11.2010
								</td>
								<td>
									<span class="label label-sm label-success">
										Approved
									</span>
								</td>
							</tr>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									userwow
								</td>
								<td>
									<a href="mailto:userwow@gmail.com">userwow@gmail.com</a>
								</td>
								<td>
									20
								</td>
								<td class="center">
									12.12.2012
								</td>
								<td>
									<span class="label label-sm label-default">
										Blocked
									</span>
								</td>
							</tr>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									wap
								</td>
								<td>
									<a href="mailto:userwow@gmail.com">test@gmail.com</a>
								</td>
								<td>
									20
								</td>
								<td class="center">
									12.12.2012
								</td>
								<td>
									<span class="label label-sm label-success">
										Approved
									</span>
								</td>
							</tr>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									test
								</td>
								<td>
									<a href="mailto:userwow@gmail.com">good@gmail.com</a>
								</td>
								<td>
									20
								</td>
								<td class="center">
									19.12.2010
								</td>
								<td>
									<span class="label label-sm label-success">
										Approved
									</span>
								</td>
							</tr>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									toop
								</td>
								<td>
									<a href="mailto:userwow@gmail.com">good@gmail.com</a>
								</td>
								<td>
									20
								</td>
								<td class="center">
									17.12.2010
								</td>
								<td>
									<span class="label label-sm label-success">
										Approved
									</span>
								</td>
							</tr>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									weep
								</td>
								<td>
									<a href="mailto:userwow@gmail.com">good@gmail.com</a>
								</td>
								<td>
									20
								</td>
								<td class="center">
									15.11.2011
								</td>
								<td>
									<span class="label label-sm label-success">
										Approved
									</span>
								</td>
							</tr>-->
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
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
<script type="text/javascript" src="<?=base_url('public_html/plugins/select2/select2.min.js');?>"></script>
<script type="text/javascript" src="<?=base_url('public_html/plugins/data-tables/jquery.dataTables.js');?>"></script>
<script type="text/javascript" src="<?=base_url('public_html/plugins/data-tables/DT_bootstrap.js');?>"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?=base_url('public_html/scripts/app.js');?>"></script>
<script src="<?=base_url('public_html/scripts/table-managed.js');?>"></script>
<script>
jQuery(document).ready(function() {       
   App.init();
   TableManaged.init();
});
</script>
</body>
<!-- END BODY -->
</html>