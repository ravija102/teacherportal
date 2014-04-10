<?=$this->load->view('usermgmt/header')?>

<article class="content">

        <?=$this->load->view('usermgmt/side_menu')?>
						
    <section class="rightsidediv">
        <div class="topdiv">								
            <ul>										
                <li class="home"><a href="#">Home</a></li>									
                <li>/</li>										
                <li><a href="#">Class Setup</a></li>								
            </ul>						
        </div>						
        <div class="contentdiv">								
            <div class="titletag">										
                <h1>Class Setup</h1>										
                <span>Note: All the fields marked with (<em>*</em>) is mendotory.</span> </div>								
            <div class="clear"></div>								
            <div class="formdiv">
                <?=validation_errors()?>
                <form action="<?=base_url('index.php/classsetup/add_classsetup/')?>" method="post" id="classsetupForm" >
                <div class="select_main left">											
                    <div class="select_bar">                                                                                         
                        <select  name="grade_level_id" id="grade_level_id" class="select error" onchange="select_subject(this.options[this.selectedIndex].value)">                                                                                            
                            <option value="-1">Grade Level:</option>                                                                                                             
                                <?php foreach($gradelevel as $data) { ?>                                                                                                                    
                            <option value="<?=$data->id?>" <?=set_select('grade_level_id',$data->id)?> ><?=$data->name?></option>                                                                                                                          
                                <?php } ?>														
                        </select>											
                    </div>									
                </div>										
                <div class="select_main left marginleft30">											
                    <div class="select_bar">													
                        <select  name="subject_id" class="select width285 error" id="sub">														
                            <option value="-1">Subject:</option>												
                        </select>											
                    </div>									
                </div>									
                    <input type="text" placeholder="class:" name="class" id="class" value="<?=set_value('class')?>" class="marginleft30">									
                <div class="clear"></div>										
                <div class="formleft">											
                    <h1 class="left">Grade Weight</h1>											
                    <span class="right"><a href="#" data-reveal-id="gradeweight" data-animation="fade"><img src="<?=base_url('public_html/front/images/addplusicon.png');?>" alt="" title=""></a></span>											
                    <div class="clear"></div>											
                    <table>													
                        <tr>														
                            <th width="25px">No.</th>														
                            <th width="165px">Name</th>														
                            <th width="129px">Percentage (%)</th>																
                            <th width="63px">Edit</th>																		
                            <th width="78px">Delete</th>													
                        </tr>                                                                                                    
                            <?php                                                                                                
                            foreach($gradeweight_list as $data) { ?>												
                        <tr class="bg">														
                            <td class="bdrleft"><?=$data->id?></td>														
                            <td><?=$data->name?></td>														
                            <td><?=$data->percentage?></td>                                                                                                                 
                            <td><a href="#" data-reveal-id="gradeweight" data-animation="fade"><img src="<?=base_url('public_html/front/images/editicon.jpg');?>" alt="" title="" onclick="get_gradeWeight(<?=$data->id?>)"></a></td>                                                                                                                  
                            <td class="bdrright"><a href="<?=base_url('index.php/classsetup/delete_gradeweight/'.$data->id) ?>"  onclick="return confirmDelete(this)"><img src="<?=base_url('public_html/front/images/deleteicon.png');?>" alt="" title=""></a></td>												
                        </tr>
                                                                                                                                
                            <?php } ?>
                        
                        <tfoot>															
                            <tr>																	
                                <td colspan="5" class="bdrbottom bdrleft bdrright">
                                    <div class="tabletotal"> <span>Total:</span>																				
                                        <input type="text" plceholder="" value="<?=count($gradeweight_list)?>" name="" disabled="">																				
                                    </div>
                                </td>															
                            </tr>													
                        </tfoot>											
                    </table>                                                                                          
                            <?=$pagination?>											
                    <h1 class="left">Student Grouping</h1>											
                    <span class="right"><a href="#" data-reveal-id="studentgroup" data-animation="fade"><img src="<?=base_url('public_html/front/images/addplusicon.png');?>" alt="" title=""></a></span>											
                    <div class="clear"></div>											
                    <table>													
                        <tr>														
                            <th width="42px">No.</th>															
                            <th width="134px">Group Name</th>														
                            <th width="129px">No. of Student</th>															
                            <th width="63px">Edit</th>															
                            <th width="78px">Delete</th>													
                        </tr>       													
                        <tr class="bg">															
                            <td class="bdrleft">&nbsp;</td>															
                            <td>&nbsp;</td>															
                            <td>&nbsp;</td>															
                            <td><img src="<?=base_url('public_html/front/images/editicon.jpg');?>" alt="" title=""></td>														
                            <td class="bdrright"><img src="<?=base_url('public_html/front/images/deleteicon.png');?>" alt="" title=""></td>                                                                                                            
                        </tr>													
                        <tr>																
                            <td class="bdrleft">&nbsp;</td>																
                            <td>&nbsp;</td>																	
                            <td>&nbsp;</td>															
                            <td><img src="<?=base_url('public_html/front/images/editicon.jpg');?>" alt="" title=""></td>															
                            <td class="bdrright"><img src="<?=base_url('public_html/front/images/deleteicon.png');?>" alt="" title=""></td>													
                        </tr>													
                        <tr class="bg">																
                            <td class="bdrleft">&nbsp;</td>																	
                            <td>&nbsp;</td>																	
                            <td>&nbsp;</td>																	
                            <td><img src="<?=base_url('public_html/front/images/editicon.jpg');?>" alt="" title=""></td>																	
                            <td class="bdrright"><img src="<?=base_url('public_html/front/images/deleteicon.png');?>" alt="" title=""></td>															
                        </tr>											
                        <tr>														
                            <td class="bdrleft">&nbsp;</td>															
                            <td>&nbsp;</td>															
                            <td>&nbsp;</td>															
                            <td><img src="<?=base_url('public_html/front/images/editicon.jpg');?>" alt="" title=""></td>														
                            <td class="bdrright"><img src="<?=base_url('public_html/front/images/deleteicon.png');?>" alt="" title=""></td>												
                        </tr>							
                        <tr class="bg">														
                            <td class="bdrleft bdrbottom">&nbsp;</td>														
                            <td  class="bdrbottom">&nbsp;</td>															
                            <td class="bdrbottom">&nbsp;</td>															
                            <td class="bdrbottom"><img src="<?=base_url('public_html/front/images/editicon.jpg');?>" alt="" title=""></td>														
                            <td class="bdrright bdrbottom"><img src="<?=base_url('public_html/front/images/deleteicon.png');?>" alt="" title=""></td>												
                        </tr>													
                        <tfoot>														
                            <tr>																
                                <td colspan="5" class="bdrbottom bdrleft bdrright">
                                    <div class="tabletotal"> <span>Total:</span>																			
                                        <input type="text" plceholder="" value="" name="" disabled="">																	
                                    </div>
                                </td>														
                            </tr>												
                        </tfoot>											
                    </table>									
                </div>										
                <div class="formright">											
                    													
                        <fieldset>														
                            <label>Assistance Teacher/Paraprof:</label>														
                            <input type="text" placeholder="" value="<?=set_value('assistant_teacher')?>" name="assistant_teacher" id="assistant_teacher" class="marginbottm">														
                            <div class="clear"></div>														
                            <label class="noline">Comments for Students:</label>														
                            <textarea cols="" rows="" name="comments" id="comments" class="marginbottm"><?=set_value('comments')?></textarea>														
                            <div class="clear marginbottom15"></div>														
                            <label class="noline">Parental Email Setup:</label>
                            
                            <div class="select_main left marginleft30">											
                            <div class="select_bar">
                            <select  name="parental_email_id" class="select width285 error" id="parental_email_id" onchange="get_perental_emaiTemplateValue(this.options[this.selectedIndex].value)" >														
                            <option value="-1">Select Template:</option>
                            <?php
                            
                                foreach($template as $data) {
                                    
                                    ?><option value="<?=$data->id?>"><?=$data->name?></option><?php
                                }
                            ?>
                            </select>											
                            </div>									
                            </div>
                            
                            <textarea cols="" rows="" name="parental_email_value" id="parental_email_value" class="marginbottm"></textarea>														
                            <div class="clear marginbottom15"></div>														
                            <label class="noline">Grading Rubric:</label>														
                            <div class="checkboxdiv marginbottm">																
                                <input id="box_1" class="css-checkbox" type="checkbox" id="grading_rubric" name="grading_rubric[]" value="a"<?=set_checkbox('grading_rubric[]','a')?> />																
                                <label for="box_1" name="lbl_1" class="css-label">A</label>																
                                <div class="clear"></div>																
                                <input id="box_2" class="css-checkbox" type="checkbox" id="grading_rubric" name="grading_rubric[]" value="b"<?=set_checkbox('grading_rubric[]','b')?> />															
                                <label for="box_2" name="lbl_2" class="css-label">B</label>																
                                <div class="clear"></div>																
                                <input id="box_3" class="css-checkbox" type="checkbox" id="grading_rubric" name="grading_rubric[]" value="c"<?=set_checkbox('grading_rubric[]','c')?> />															
                                <label for="box_3" name="lbl_3" class="css-label">C</label>														
                            </div>														
                            <div class="clear"></div>														
                            <label>Screen View:</label>														
                            <div class="select_main">																
                                <div class="select_bar">																	
                                    <select  name="screen_view" id="screen_view" class="select error">																			
                                        <option value="-1">Select</option>
                                        <option value="list"<?=set_select('screen_view','list')?> >List</option>
                                        <option value="desk"<?=set_select('screen_view','desk')?> >Desk</option>
                                    </select>															
                                </div>														
                            </div>														
                            <div class="clear"></div>														
                            <label>Email Template Setup:</label>														
                            <div class="radiodiv">																
                                <input type="radio" name="email_template_setup" value="text"<?=set_radio('email_template_setup','text')?> id="radio1" class="css-radio" />																
                                <label for="radio1" class="css-label">Text</label>																
                                <input type="radio" name="email_template_setup" value="html"<?=set_radio('email_template_setup','html')?> id="radio2" class="css-radio" checked="checked"/>															
                                <label for="radio2" class="css-label">HTML</label>													
                            </div>												
                        </fieldset>											
                    									
                </div>										
                <div class="clear"></div>									
                <input type="button" class="bluebtn left" value="Back" name="">										
                <div class="right">											
                    <input type="submit" class="darkgreenbtn" value="     Save    " name="" onclick="return classsetupValidate()">											
<!--                    <input type="button" class="darkgreenbtn marginleft10" value="Save & Continue" name="">										-->
                </div>
                </form>
            </div>						
        </div>					
    </section>			
</article>			
<div class="clear"></div>			

<?=$this->load->view('usermgmt/footer')?>
    
    <?=isset($_GET['msg']) ? $_GET['msg'] : '' ?>
    <?=isset($error) ? $error : '' ?>
	
	<div id="gradeweight" class="reveal-modal gradediv">
			<h1>Add Grade Weight</h1>
			<div class="gradedetail">
			 <label>Name</label>
                         <input type="hidden" name="hidden_id" value="" id="hidden_gradeweight" >
                         <input type="text" value="" plceholder="" name="name" class="marginbottom15" id="grade_name">
			  <label>Percentage (%)</label>
			 <input type="text" value="" plceholder="" name="percentage" id="grade_per">
			 
                         <input type="button" value="Save" class="darkgreenbtn" name="" onclick="gradeWeight($('#hidden_gradeweight').val())">
			 </div>
			 
			<!--<a class="close-reveal-modal">&#215;</a>-->
		</div>
		
		<div id="studentgroup" class="reveal-modal gradediv">
			<h1>Add Student Grouping</h1>
			<div class="gradedetail">
			 <label>Name</label>
			 <input type="text" value="" plceholder="" name="" class="marginbottom15">
			  <label>Grade Level</label>
<!--			 <input type="text" value="" plceholder="" name="">-->
                          <select name="gradelevel_id" id="" onchange="getStudents(this.options[this.selectedIndex].value)">
                              <option value="-1">Select Gradelevel:</option>
                              <?php foreach($gradelevel as $data) { ?>
                                  
                                    <option value="<?=$data->id?>" <?=set_select('grade_level_id',$data->id)?> ><?=$data->name?></option>                                                                                                                          
                                    
                               <?php } ?>
                          </select>
			 <div class="checkboxdiv">
                         <div class="left" id="groupdiv">
<!--                     <input type="checkbox" name="student_id[]" class="css-checkbox" id="box11">
			 <label class="css-label" name="lbl11" for="box11">Check Box</label>
			 <div class="clear"></div>
                         <input type="checkbox" name="student_id[]" class="css-checkbox" id="box12">
			 <label class="css-label" name="lbl12" for="box12">Check Box</label>-->
			 </div>
<!--			 <div class="right">
			 <input type="checkbox" class="css-checkbox" id="box13">
			 <label class="css-label" name="lbl13" for="box13">Check Box</label>
			 <div class="clear"></div>
			 <input type="checkbox" class="css-checkbox" id="box14">
			 <label class="css-label" name="lbl14" for="box14">Check Box</label>
			 </div>-->
			 </div>
			 <input type="button" value="Save" class="darkgreenbtn" name="">
			 </div>
			 
			<!--<a class="close-reveal-modal">&#215;</a>-->
		</div>

</body>
</html>
