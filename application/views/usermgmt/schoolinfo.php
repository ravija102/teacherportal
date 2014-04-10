<?=$this->load->view('usermgmt/header')?>
				
    <article class="content paymentinfo">
        
        <?=$this->load->view('usermgmt/side_menu')?>
        
        <section class="rightsidediv">						
            <div class="topdiv">								
                <ul>									
                    <li class="home"><a href="#">Home</a></li>									
                    <li>/</li>									
                    <li><a href="#">Lesson Plan (Manually)</a></li>							
                </ul>						
            </div>						
            <div class="contentdiv">								
                <div class="titletag">									
                    <h1>School Info</h1>									
                    <span>Note: All the fields marked with (<em>*</em>) is mendotory.</span> </div>							
                <div class="clear"></div>								
                <div class="formdiv">
                    <form action="<?=base_url('index.php/usermgmt/personal_info/?type=schoolinfo')?>" method="post" id="schoolinfoForm">
                        <?=validation_errors()?>
                    <div class="list_txt first">                           	
                        <input type="text" name="school_name" id="school_name" placeholder="Name of School:" class="marginleft30" value="<?=set_value('school_name')?><?=(isset($userdata[0]->school_name) && set_value('school_name')=='') ? $userdata[0]->school_name : '' ?>">                         
                        <span class="red">*</span>							    	
<!--                        <input type="text" name="school_type_id" id="school_type_id" placeholder="Type of School:" class="marginleft30" value="<?=isset($userdata[0]->school_type_id) ? $userdata[0]->school_type_id : '' ?>">
                            <span class="red">*</span>          -->
                       <div class="select_main right">										
                                <div class="select_bar">											
                                    <select  name="school_type_id" id="school_type_id" class="select error">													
                                        <option value="-1">Type of School:</option>
                                        <?php
                                        
                                            foreach($school_type as $school) {
                                                
                                                ?><option value="<?=$school->id?>" <?=(isset($userdata[0]->school_type_id) && $userdata[0]->school_type_id == $school->id) ? "selected" : '' ?>><?=$school->name?></option><?php
                                            }
                                        ?>
                                    </select>									
                                </div>                    
                                <span class="red">*</span>								
                            </div>									
                        <input type="text" name="principal_name" id="principal_name" placeholder="Name of Principal:" class="marginleft30" value="<?=set_value('principal_name')?><?=(isset($userdata[0]->principal_name) && set_value('principal_name')=='') ? $userdata[0]->principal_name : '' ?>">                    
                        <span class="red">*</span>                        
                    </div>                           
                    <div class="list_txt">                    
                        <input type="text" name="district_name" id="district_name" placeholder="Name of District:" class="marginleft30" value="<?=set_value('district_name')?><?=(isset($userdata[0]->district_name) && set_value('district_name')=='') ? $userdata[0]->district_name : '' ?>">                        
                        <span class="red">*</span> 							    	
                        <input type="text" name="s_contact_no" id="s_contact_no" placeholder="Contact No (landline):" class="marginleft30" value="<?=set_value('s_contact_no')?><?=(isset($userdata[0]->s_contact_no) && set_value('s_contact_no')=='') ? $userdata[0]->s_contact_no : '' ?>">                        
                        <span class="red">*</span>									
                        <input type="text" placeholder="Contact No (Other):" class="marginleft30" disabled="">                     
                        <span class="red">*</span>                      
                    </div>                          
                    <div class="list_txt">                       
                        <input type="text" name="s_address_1" id="s_address_1" placeholder="Address Line 1:" class="marginleft30" value="<?=set_value('s_address_1')?><?=(isset($userdata[0]->s_address_1) && set_value('s_address_1')=='') ? $userdata[0]->s_address_1 : '' ?>">                      
                        <span class="red">*</span>							    	
                        <input type="text" name="s_address_2" id="s_address_2" placeholder="Address Line 2:" class="marginleft30" value="<?=set_value('s_address_2')?><?=(isset($userdata[0]->s_address_2) && set_value('s_address_2')=='') ? $userdata[0]->s_address_2 : '' ?>">                       
                        <span class="red">*</span>									
                        <input type="text" name="s_address_3" id="s_address_3" placeholder="Address Line 3:" class="marginleft30" value="<?=set_value('s_address_3')?><?=(isset($userdata[0]->s_address_3) && set_value('s_address_3')=='') ? $userdata[0]->s_address_3 : '' ?>">                     
                        <span class="red">*</span>                   
                    </div>                          
                    <div class="list_txt">                       	
                        <input type="text" name="s_city" id="s_city" placeholder="City:" class="marginleft30" value="<?=set_value('s_city')?><?=(isset($userdata[0]->s_city) && set_value('s_city')=='') ? $userdata[0]->s_city : '' ?>">                       
                        <span class="red">*</span>                    
                        <input type="text" name="s_state" id="s_state" placeholder="State:" class="marginleft30" value="<?=set_value('s_state')?><?=(isset($userdata[0]->s_state) && set_value('s_state')=='') ? $userdata[0]->s_state : '' ?>">                       
                        <span class="red">*</span>                       
                        <div class="country_zip">									
                            <input type="text" name="s_country" id="s_country" placeholder="Country:" class="marginleft30 countrytxt" value="<?=set_value('s_country')?><?=(isset($userdata[0]->s_country) && set_value('s_country')=='') ? $userdata[0]->s_country : '' ?>">               
                            <span class="red">*</span>                
                            <input type="text" name="s_ZipCode" id="s_ZipCode" placeholder="Zipcode:" class="marginleft30z ziptxt" value="<?=set_value('s_ZipCode')?><?=(isset($userdata[0]->s_ZipCode) && set_value('s_ZipCode')=='') ? $userdata[0]->s_ZipCode : '' ?>">              
                            <span class="red">*</span>                         
                        </div>									
                        <div class="clear"></div>									
                        <div class="clear"></div>                       
                        <div class="btns_main">								
                            <input type="button" class="bluebtn left" value="Clear Form" name="" onclick="clearForm()">								
                            <div class="right">										
                                <a href="<?=base_url('index.php/usermgmt/personal_info/?type=personalinfo')?>">
                                    <input type="button" class="darkgreenbtn previous" value="Previous" name="">
                                </a>                   
                                <input type="submit" class="darkgreenbtn next" value="Next" name="" onclick="return schoolInfoValidate()">								
                            </div>                  
                        </div>						
                    </div>
                    </form>
                </div>			
        </section>		
    </article>		
<div class="clear"></div>
				
<?=$this->load->view('usermgmt/footer')?>