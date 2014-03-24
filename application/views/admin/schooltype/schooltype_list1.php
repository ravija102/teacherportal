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
								<i class="fa fa-globe"></i>School List
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
                                                                    <a href="<?=base_url()?>index.php/admin/school_type/add_school" id="sample_editable_1_new" class="btn green">
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
									Username
								</th>
                                                                <th style="display: none">
									Email
								</th>
								<th>
									Date Modified 
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
                                                            <?php foreach($school as $school_data){?>
							<tr class="odd gradeX">
                                                            <td style="display: none">
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									<?=$school_data->name?>
								</td>
                                                                <td style="display: none">
									<a href="mailto:shuxer@gmail.com">shuxer@gmail.com</a>
								</td>
								<td>
									<?=$school_data->createdon?>
								</td>
								<td class="center">
                                                                    <a href="<?=base_url()?>index.php/admin/school_type/edit_school/<?=$school_data->id?>">Edit</a>
								</td>
								<td>
									<span class="">
                                                                            <a href="<?=base_url()?>index.php/admin/school_type/delete_school/<?=$school_data->id?>" onclick="return deletechecked()">Delete</a>
									</span>
								</td>
                                                            </tr><?php }?>
                                                            
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
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
<?=$this->load->view('admin/footer')?>