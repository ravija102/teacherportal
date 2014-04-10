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
                    <h1>Personal Info</h1>									
                    <span>Note: All the fields marked with (<em>*</em>) is mendotory.</span> </div>							
                <div class="clear"></div>								
                <div class="formdiv">                                                                
                    <form action="<?=base_url('index.php/usermgmt/personal_info/?type=personalinfo')?>" method="post" id="PersonalInfoForm" >
                        <?=validation_errors()?>
                        <div class="list_txt first">                        	
                            <input type="text" name="first_name" id="first_name" placeholder="First Name:" maxlength="50" class="marginleft30" value="<?=set_value('first_name')?><?=(isset($userdata) && set_value('first_name')=='') ? $userdata[0]->first_name : ''?>">                    
                            <span class="red">*</span>                     
                            <input type="text" name="middle_name" id="middle_name" placeholder="Middle Name:" maxlength="50" class="marginleft30" value="<?=set_value('middle_name')?><?=(isset($userdata) && set_value('middle_name')=='') ? $userdata[0]->middle_name : ''?>">                   
                            <span class="red">*</span>                   
                            <input type="text" name="last_name" id="last_name" placeholder="Last Name:" maxlength="50" class="marginleft30" value="<?=set_value('last_name')?><?=(isset($userdata) && set_value('last_name')=='') ? $userdata[0]->last_name : ''?>">                 
                            <span class="red">*</span>                  
                        </div>
                        <div class="radiodiv_main">                  
                            <label class="gender_title">Gender:   </label>                  
                            <div class="radiodiv">                  
                                <input type="radio" class="css-radio" id="radio1" name="gender" value="male"<?=(isset($userdata[0]->gender) && $userdata[0]->gender=='male') ? "checked" : '' ?>>																
                                <label class="css-label" for="radio1">Male</label>                                                                                                                              
                                <input type="radio" class="css-radio" id="radio2" name="gender" value="female" <?=(isset($userdata[0]->gender) && $userdata[0]->gender == 'female') ? "checked" : '' ?> >																
                                <label class="css-label" for="radio2">Female</label>														
                            </div>                                   
                        </div>                    
                        <div class="select_date">                     
                            <label>Date of Birth: </label>  
                            
                                <?php								
                                    if(isset($userdata[0]->DOB) && $userdata[0]->DOB != '') {

                                        $date = explode('-',$userdata[0]->DOB);  
                                    }								
                                ?>
                                                
                            <div class="select_main dateselect">												
                                <select class="select error" name="date" id="date" style="z-index: 10; opacity: 0;">													
                                    <option value="-1">Date</option>
                                                                                                                                                                                   
                                        <?php
																			
                                        for($i=1; $i<=31; $i++) {
																		
                                            if($i < 10) {
																																		
                                                $num = '0'.$i;  
                                            }														
                                            else {
															
                                                $num = $i;
                                            }														
                                            ?>
                                        <option value="<?=$num?>" <?=(isset($date) && $date[2]== $num) ? "selected" : '' ?> ><?=$num?></option> 
                                        <?php }	?>
																
                                </select>										
                            </div>                 
                            <div class="select_main monthselect">												
                                <select class="select error" name="month" id="month" style="z-index: 10; opacity: 0;">													
                                    <option value="-1">Month</option>
                                                                        
                                        <?php
																		
                                        $month = array('jan','feb','mar','apr','may','jun','jul','aug','sep','oct','nov','dec');
																															
                                        for($i=0; $i<count($month); $i++) { ?>
                                                                            
                                    <option value="<?=$month[$i]?>" <?=(isset($date) && $date[1]==$month[$i]) ? "selected" : '' ?> ><?=$month[$i]?></option>
                                                                            
                                        <?php } ?>
																
                                </select>										
                            </div>               
                            <div class="select_main yearselect">												
                                <select class="select error" name="year" id="year" style="z-index: 10; opacity: 0;">														
                                    <option value="-1">Year</option>
                                                                        
                                        <?php
																																
                                        for($i=1900; $i<=2014; $i++) { ?>
                                                                                
                                    <option value="<?=$i?>" <?=(isset($date) && $date[0]==$i) ? "selected" : '' ?> ><?=$i?></option>
                                                                                
                                        <?php } ?>
																
                                </select>										
                            </div>                  
                        </div>                   
                        <div class="list_txt">            
                            <input type="text" name="school_email" id="school_email" placeholder="Email Add (School):" maxlength="100" class="marginleft30" value="<?=set_value('school_email')?><?=(isset($userdata) && set_value('school_email')=='') ? $userdata[0]->school_email : ''?>">                   
                            <span class="red">*</span>								
                            <input type="text" name="email" id="email" placeholder="Email Add (Personal):" class="marginleft30" value="<?=set_value('email')?><?=(isset($userdata) && set_value('email')=='') ? $userdata[0]->email : ''?>" disabled >                 
                            <span class="red">*</span>                 
                            <div class="select_main right">										
                                <div class="select_bar">											
                                    <select  name="preferablemode" id="preferablemode" class="select error">													
                                        <option value="-1">Preferable Contact By:</option>                               
                                        <option value="teacher"<?php if(isset($userdata[0]->preferablemode) && $userdata[0]->preferablemode == 'teacher'){ echo "selected"; }?> >Teacher</option>                            
                                        <option value="student"<?php if(isset($userdata[0]->preferablemode) && $userdata[0]->preferablemode == 'student'){ echo "selected"; }?> >Student</option>											
                                    </select>									
                                </div>                    
                                <span class="red">*</span>								
                            </div>                   
                        </div>                       
                        <div class="list_txt">                
                            <input type="text" name="cell_no" id="cell_no" placeholder="Mobile No:" maxlength="20" class="marginleft30" value="<?=set_value('cell_no')?><?=(isset($userdata[0]->cell_no) && set_value('cell_no')=='') ? $userdata[0]->cell_no : '' ?>">                    
                            <span class="red">*</span> 						    	
                            <input type="text" name="h_contact_no" id="h_contact_no" placeholder="Contact No (Home):" maxlength="20" class="marginleft30" value="<?=set_value('h_contact_no')?><?=(isset($userdata[0]->h_contact_no) && set_value('h_contact_no')=='') ? $userdata[0]->h_contact_no : '' ?>">              
                            <span class="red">*</span>								
                            <input type="text" name="w_contact_no" id="w_contact_no" placeholder="Contact No (Work):" maxlength="20" class="marginleft30" value="<?=set_value('w_contact_no')?><?=(isset($userdata[0]->w_contact_no) && set_value('w_contact_no')=='') ? $userdata[0]->w_contact_no : '' ?>">                 
                            <span class="red">*</span>                 
                        </div>                   
                        <div class="list_txt">                  
                            <input type="text" name="address_1" id="address_1" placeholder="Address Line 1:" maxlength="150" class="marginleft30" value="<?=set_value('address_1')?><?=(isset($userdata[0]->address_1) && set_value('address_1')=='') ? $userdata[0]->address_1 : '' ?>">                   
                            <span class="red">*</span>						    	
                            <input type="text" name="address_2" id="address_2" placeholder="Address Line 2:" maxlength="150" class="marginleft30" value="<?=set_value('address_2')?><?=(isset($userdata[0]->address_2) && set_value('address_2')=='') ? $userdata[0]->address_2 : '' ?>">                   
                            <span class="red">*</span>								
                            <input type="text" name="address_3" id="address_3" placeholder="Address Line 3:" maxlength="150" class="marginleft30" value="<?=set_value('address_3')?><?=(isset($userdata[0]->address_3) && set_value('address_3')=='') ? $userdata[0]->address_3 : '' ?>">                 
                            <span class="red">*</span>                  
                        </div>                      
                        <div class="list_txt">                   	
                            <input type="text" name="city" id="city" placeholder="City:" maxlength="100" class="marginleft30" value="<?=set_value('city')?><?=(isset($userdata[0]->city) && set_value('city')=='') ? $userdata[0]->city : '' ?>">                    
                            <span class="red">*</span>                  
                            <input type="text" name="state" id="state" placeholder="State:" maxlength="100" class="marginleft30" value="<?=set_value('state')?><?=(isset($userdata[0]->state) && set_value('state')=='') ? $userdata[0]->state : '' ?>">                    
                            <span class="red">*</span>                    
                            <div class="country_zip">								
                                <input type="text" name="country" id="country" placeholder="Country:" maxlength="100" class="marginleft30 countrytxt" value="<?=set_value('country')?><?=(isset($userdata[0]->country) && set_value('country')=='') ? $userdata[0]->country : '' ?>">              
                                <span class="red">*</span>               
                                <input type="text" name="ZipCode" id="ZipCode" placeholder="Zipcode:" maxlength="50" class="marginleft30z ziptxt" value="<?=set_value('ZipCode')?><?=(isset($userdata[0]->ZipCode) && set_value('ZipCode')=='') ? $userdata[0]->ZipCode : '' ?>">              
                                <span class="red">*</span>               
                            </div>                    
                        </div>									
                        <div class="clear"></div>									
                        <div class="clear"></div>                     
                        <div class="btns_main">								
                            <input type="button" class="bluebtn left" value="Clear Form" name="" onclick="clearForm()">								
                            <div class="right">                                                                    
                                <input type="submit" class="darkgreenbtn next" value="Next" name="" onclick="return PersonalInfoValidate()">								
                            </div>
                        </div>                                                            
                    </form>								
                </div>						
            </div>				
        </section>
				
    </article>
				
<div class="clear"></div>
                                
<?=$this->load->view('usermgmt/footer')?>
