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
                            <?php $this->load->view('admin/header'); ?>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box light-grey">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>Gradelevel List
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
								<a href="#portlet-config" data-toggle="modal" class="config"></a>
								<a href="javascript:;" class="reload"></a>
								<a href="javascript:;" class="remove"></a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="btn-group">
                                                                    <a href="<?=base_url()?>index.php/admin/grade_level/add_gradelevel" id="sample_editable_1_new" class="btn green">
									Add New <i class="fa fa-plus"></i>
									</a>
								</div>
								<div class="btn-group pull-right">
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
								</div>
							</div>
							<table class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>
							<tr>
                                                            <th class="table-checkbox" style="display: none">
									<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes"/>
								</th>
								<th>
									Gradelevel Name
								</th>
                                                                <th style="display: none">
									Email
								</th>
								<th>
									Date Modefied 
								</th>
								<th>
									Edit
								</th>
								<th>
									Delete
								</th>
							</tr>
							</thead>
							<tbody>
                                                            <?php foreach($gradelevel as $gradelevel_data){?>
							<tr class="odd gradeX">
                                                            <td style="display: none">
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									<?=$gradelevel_data->name?>
								</td>
                                                                <td style="display: none">
									<a href="mailto:shuxer@gmail.com">shuxer@gmail.com</a>
								</td>
								<td>
									<?=$gradelevel_data->createdon?>
								</td>
								<td class="center">
                                                                    <a href="<?=base_url()?>index.php/admin/grade_level/edit_gradelevel/<?=$gradelevel_data->id?>">Edit</a>
								</td>
								<td>
									<span class="">
                                                                            <a href="<?=base_url()?>index.php/admin/grade_level/delete_gradelevel/<?=$gradelevel_data->id?>" onclick="return deletechecked()">Delete</a>
									</span>
								</td>
                                                            </tr><?php }?>
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
							<tr class="odd gradeX">
								<td>
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
			<div class="row">
<!--				<div class="col-md-6 col-sm-12">
					 BEGIN EXAMPLE TABLE PORTLET
					<div class="portlet box grey">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-user"></i>Table
							</div>
							<div class="actions">
								<a href="#" class="btn blue"><i class="fa fa-pencil"></i> Add</a>
								<div class="btn-group">
									<a class="btn green" href="#" data-toggle="dropdown">
									<i class="fa fa-cogs"></i> Tools <i class="fa fa-angle-down"></i>
									</a>
									<ul class="dropdown-menu pull-right">
										<li>
											<a href="#"><i class="fa fa-pencil"></i> Edit</a>
										</li>
										<li>
											<a href="#"><i class="fa fa-trash-o"></i> Delete</a>
										</li>
										<li>
											<a href="#"><i class="fa fa-ban"></i> Ban</a>
										</li>
										<li class="divider">
										</li>
										<li>
											<a href="#"><i class="i"></i> Make admin</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_2">
							<thead>
							<tr>
								<th style="width1:8px;">
									<input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes"/>
								</th>
								<th>
									Username
								</th>
								<th>
									Email
								</th>
								<th>
									Status
								</th>
							</tr>
							</thead>
							<tbody>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									shuxer
								</td>
								<td>
									<a href="mailto:shuxer@gmail.com">shuxer@gmail.com</a>
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
									looper
								</td>
								<td>
									<a href="mailto:looper90@gmail.com">looper90@gmail.com</a>
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
									foopl
								</td>
								<td>
									<a href="mailto:userwow@gmail.com">good@gmail.com</a>
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
									<span class="label label-sm label-success">
										Approved
									</span>
								</td>
							</tr>
							</tbody>
							</table>
						</div>
					</div>
					 END EXAMPLE TABLE PORTLET
				</div>-->
<!--				<div class="col-md-6 col-sm-12">
					 BEGIN EXAMPLE TABLE PORTLET
					<div class="portlet box purple">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs"></i>Table
							</div>
							<div class="actions">
								<a href="#" class="btn green"><i class="fa fa-plus"></i> Add</a>
								<a href="#" class="btn yellow"><i class="fa fa-print"></i> Print</a>
							</div>
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_3">
							<thead>
							<tr>
								<th class="table-checkbox">
									<input type="checkbox" class="group-checkable" data-set="#sample_3 .checkboxes"/>
								</th>
								<th>
									Username
								</th>
								<th>
									Email
								</th>
								<th>
									Status
								</th>
							</tr>
							</thead>
							<tbody>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									shuxer
								</td>
								<td>
									<a href="mailto:shuxer@gmail.com">shuxer@gmail.com</a>
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
									looper
								</td>
								<td>
									<a href="mailto:looper90@gmail.com">looper90@gmail.com</a>
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
									foopl
								</td>
								<td>
									<a href="mailto:userwow@gmail.com">good@gmail.com</a>
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
									<span class="label label-sm label-success">
										Approved
									</span>
								</td>
							</tr>
							</tbody>
							</table>
						</div>
					</div>
					 END EXAMPLE TABLE PORTLET
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