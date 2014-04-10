<?=$this->load->view('usermgmt/header')?>

        <article class="content paymentinfo lessonplanmain">
                                    
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
                        <h1>Lesson Plan (Manually)</h1>									
                        <span>Note: All the fields marked with (<em>*</em>) is mendotory.</span> </div>							
                    <div class="clear"></div>							
                    <div class="formdiv">
                        <div class="left_form">           
                            <div class="select_main left preferableselect">         
                                <label>Grade Level:</label>						
                                <div class="select_bar">												
                                    <select  name="grade_level_id" class="select error" onchange="select_subject(this.options[this.selectedIndex].value)">													
                                        <option value="-1">Select Grade Level:</option>
                                        <?php

                                            foreach($gradelevel as $data) {
                                                
                                                ?><option value="<?=$data->id?>"><?=$data->name?></option><?php
                                            }
                                        ?>
                                    </select>									
                                </div>      
                            </div>          
                            <div class="select_main left preferableselect">        
                                <label>Subject: </label>						
                                <div class="select_bar">											
                                    <select  name="selState" class="select error" id="sub">													
                                        <option value="-1">Subject</option>											
                                    </select>										
                                </div>       
                            </div>        
                            <div class="txtbox">
                                <label>Title:</label>
                                <input type="text" placeholder="&nbsp;" class="marginleft30 firsttxt">
                            </div>         
                            <div class="textareamain">       
                                <label>Objective:</label>       
                                <textarea class="marginbottm"></textarea>       
                            </div>         
                            <div class="txtbox">   
                                <label>Content Area:</label>     
                                <input type="text" placeholder="&nbsp;" class="marginleft30 firsttxt">         
                            </div>          
                            <div class="txtbox">     
                                <label>Learning Standard:</label>       
                                <input type="text" placeholder="&nbsp;" class="marginleft30 firsttxt">       
                            </div>          
                            <div class="textareamain">   
                                <label>Aim:</label>       
                                <textarea class="marginbottm"></textarea>       
                            </div>         
                            <div class="textareamain">     
                                <label>Do Now:</label>     
                                <textarea class="marginbottm"></textarea>     
                            </div>          
                            <div class="textareamain">      
                                <label>Mini Lessoon:</label>    
                                <textarea class="marginbottm"></textarea>      
                            </div>            
                        </div>							
                        <div class="left_form right">           
                            <div class="textareamain">   
                                <label>Guided Learning Question:</label>     
                                <textarea class="marginbottm"></textarea>     
                            </div>      
                            <div class="textareamain">      
                                <label>Guided Practice:</label>     
                                <textarea class="marginbottm"></textarea>   
                            </div>     
                            <div class="select_main left preferableselect">      
                                <label>Assignments:</label>					
                                <div class="select_bar">											
                                    <select  name="selState" class="select error">													
                                        <option>&nbsp;</option>											
                                    </select>									
                                </div>        
                            </div>          
                            <div class="select_main left preferableselect">       
                                <label>Unit of Studies:</label>						
                                <div class="select_bar">											
                                    <select  name="selState" class="select error">													
                                        <option>&nbsp;</option>											
                                    </select>									
                                </div>      
                            </div>         
                            <div class="select_main left preferableselect">       
                                <label>CCCS:</label>						
                                <div class="select_bar">											
                                    <select  name="selState" class="select error">													
                                        <option>&nbsp;</option>											
                                    </select>										
                                </div>        
                            </div>         
                            <div class="select_main left preferableselect">        
                                <label>Perfomance Critaria:</label>						
                                <div class="select_bar">											
                                    <select  name="selState" class="select error">													
                                        <option>&nbsp;</option>											
                                    </select>									
                                </div>      
                            </div>         
                            <div class="txtbox">     
                                <label>Class Goal:</label>       
                                <input type="text" placeholder="&nbsp;" class="marginleft30 firsttxt">        
                            </div>       
                            <div class="select_main left preferableselect">         
                                <label>Iep & Bip:</label>						
                                <div class="select_bar">											
                                    <select  name="selState" class="select error">													
                                        <option>&nbsp;</option>											
                                    </select>									
                                </div>       
                            </div>      
                        </div>             
                        <div class="txtbox uploadbotton">
                            <div>            
                                <label>Content Area:</label>      
                                <input type="text" placeholder="&nbsp;" class="marginleft30 firsttxt">      
                                <input type="button"  value="Choose File" class="marginleft30 choose_file" >          
                            </div>         
                        </div>									
                        <div class="clear"></div>									
                        <div class="clear"></div>                    
                        <div class="btns_main">								
                            <input type="button" class="bluebtn left" value="Clear Form" name="">								
                            <div class="right">										
                                <input type="button" name="" value="Save" class="darkgreenbtn">										
                                <input type="button" name="" value="Save &amp; Continue" class="darkgreenbtn marginleft10">								
                            </div>                  
                        </div>							
                    </div>					
                </div>				
            </section>		
        </article>		
<div class="clear"></div>
				
<?=$this->load->view('usermgmt/footer')?>