<!-- BEGIN TOP NAVIGATION BAR -->
	<?=$this->load->view('admin/top_menu')?>
<!-- END TOP NAVIGATION BAR -->

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
                                    <i class="fa fa-globe"></i>Unit List		
                                </div>			
                            </div>		
                            <div class="portlet-body">			
                                <div class="table-toolbar">			
                                    <div class="btn-group">                            
                                        <a href="<?=base_url()?>index.php/admin/unit/add_unit/" id="sample_editable_1_new" class="btn green">			
                                            Add New <i class="fa fa-plus"></i>			
                                        </a>			
                                    </div>			
                                </div>		
                                <table class="table table-striped table-bordered table-hover" id="sample_1">
                                    <thead>		
                                        <tr>                
                                            <th class="table-checkbox" style="display: none">			
                                                <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes"/>		
                                            </th>		
                                            <th> Username </th>                 
                                            <th style="display: none"> Email </th>		
                                            <th> Date Modified </th>		
                                            <th> Edit </th>		
                                            <th> Delete </th>	
                                        </tr>		
                                    </thead>		
                                    <tbody>                   
                                        <?php foreach($unit as $data){ ?>
                                        
                                        <tr class="odd gradeX">             
                                            <td style="display: none">			
                                                <input type="checkbox" class="checkboxes" value="1"/>		
                                            </td>		
                                            <td>
                                                <?=$data->name?>		
                                            </td>               
                                            <td style="display: none">			
                                                <a href="mailto:shuxer@gmail.com">shuxer@gmail.com</a>		
                                            </td>		
                                            <td>			
                                                <?=$data->CreatedOn?>		
                                            </td>		
                                            <td class="center">                  
                                                <a href="<?=base_url()?>index.php/admin/unit/edit_unit/<?=$data->id?>">Edit</a>	
                                            </td>		
                                            <td>			
                                                <span class="">                      
                                                    <a href="<?=base_url()?>index.php/admin/unit/delete_unit/<?=$data->id?>" onclick="return deletechecked()">Delete</a>			
                                                </span>		
                                            </td>                
                                        </tr>
                                            <?php } ?>   
							
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