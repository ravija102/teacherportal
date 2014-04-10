
<!-- BEGIN TOP NAVIGATION BAR -->
        <?php $this->load->view('admin/top_menu'); ?>
<!-- END TOP NAVIGATION BAR -->

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
                                    <i class="fa fa-reorder"></i>Add Unit		
                                </div>	
                            </div>		
                            <div class="portlet-body form">			
                                <!-- BEGIN FORM-->
                                <?php
                                
                                if(isset($unit[0]->id) && $unit[0]->id > 0 ) {
                                    
                                    $action = 'edit_unit/'.$unit[0]->id;
                                }
                                else {
                                    
                                    $action = 'add_unit';
                                }
                                ?>
                                <form action="<?=base_url('index.php/admin/unit/'.$action)?>" id="form_sample_1" class="form-horizontal" method="post">			
                                    <div class="form-body">                          
                                        <div class="error1">                          
                                            <?php  //echo validation_errors(); ?>                       
                                            <?=(isset($error) ? $error : '');?>                      
                                        </div>				
                                        <div class="form-group">				
                                            <label class="control-label col-md-3">Unit Name				
                                                <span class="required">	* </span>				
                                            </label>				
                                            <div class="col-md-4">                                 
                                                <input type="text" name="name" data-required="1" class="form-control" value="<?=set_value('name')?><?=(isset($unit[0]->name) && set_value('name')=='') ? $unit[0]->name : '' ?>" />
                                                <div class="error"> <?=form_error('name')?> </div>				
                                            </div>			
                                        </div>			
                                    </div>			
                                    <div class="form-actions fluid">				
                                        <div class="col-md-offset-3 col-md-9">				
                                            <button type="submit" class="btn green">Submit</button>                                
                                            <a type="button" class="btn default" href="<?=base_url('index.php/admin/unit/')?>">Cancel</a>			
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

<?=$this->load->view('admin/footer')?>