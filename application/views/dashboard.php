<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="<?=base_url('public_html/front/css/style1.css');?>" type="text/css" />
<link type="text/css" rel="stylesheet" href="<?=base_url('public_html/front/css/normalize.css');?>" />
<link type="text/css" rel="stylesheet" href="<?=base_url('public_html/front/css/reveal.css');?>">
<link href="<?=base_url('public_html/front/css/jquery.mCustomScrollbar.css');?>" rel="stylesheet" />
<link rel="stylesheet" href="<?=base_url('public_html/front/css/jQuery.alert.css');?>" />

<script type="text/javascript"> var BASE_URL = '<?=base_url()?>'; </script>	
<script type="text/javascript" src="<?=base_url('public_html/front/script/jquery.custom-scrollbar.js');?>"></script>
<script type="text/javascript" src="<?=base_url('public_html/front/script/jquery-1.9.1.js');?>"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
<script type="text/javascript" src="<?=base_url('public_html/front/script/jquery.reveal.js');?>"></script>
<script type="text/javascript" src="<?=base_url('public_html/front/script/form.js');?>"></script>
<script type="text/javascript" src="<?=base_url('public_html/front/script/jQuery.alert.js');?>"></script>



</head>

<body>
<article>
		<div class="wrapper">
				<header>
						<div class="logo">Virtual Para INC</div>
						<div class="nav">
								<ul>
										<li class="stats active"><a href="#" ><span></span>Stats</a></li>
										<li class="msg"><a href="#" ><span></span>Messages</a>
												<div class="msgbox">3</div>
										</li>
										<li class="work"><a href="#"><span></span>My Work</a></li>
								</ul>
						</div>
						<div class="profilepic"> <a href="#"><samp><img src="<?=base_url('public_html/front/images/profilepic.jpg');?>" /></samp></a>
								<div class="profilename"><a href="<?=base_url('index.php/usermgmt/logout/');?>">Me</a></div>
						</div>
				</header>
				<article class="content">
						<div class="side-menu">
								<div class="profileimg"> <samp><img src="<?=base_url('public_html/front/images/profilepic.jpg');?>" /></samp>
										<div class="profiledetail">User Name</div>
										<span class="profiledarea">Teacher</span> </div>
								<div class="main-menu">
										<ul>
												<li class="dashbord"><a href="#">Dashboard</a>
														<div class="orangebox">8</div>
												</li>
												<li class="class"><a href="#">Class Set up</a></li>
												<li class="schedual"><a href="#">Teacher Schedule</a></li>
												<li class="plan"><a href="#">Lesson Plan</a>
														<div class="garybox">8</div>
												</li>
												<li class="assignment"><a href="#">Assignment</a></li>
												<li class="assessment"><a href="#">Assessment</a></li>
												<li class="grading"><a href="#">Grading</a></li>
												<li class="homework"><a href="#">Homework</a></li>
												<li class="events"><a href="#">Events</a></li>
												<li class="behaviour"><a href="#">Behaviour</a></li>
										</ul>
										<div class="horline"></div>
										<div class="addmore"><a href="#">AddMore</a></div>
										<div class="horline"></div>
										<div class="greenbtn"><a href="#">New Assignment <span></span></a></div>
								</div>
						</div>
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
												<div class="select_main left">
														<div class="select_bar">
																<select  name="selState" class="select error">
																		<option>Grad Level:</option>
																</select>
														</div>
												</div>
												<div class="select_main left marginleft30">
														<div class="select_bar">
																<select  name="selState" class="select width285 error">
																		<option>Grad Level:</option>
																</select>
														</div>
												</div>
												<input type="text" placeholder="class:" class="marginleft30">
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
                                                                                                                                                <td><a href="#" data-reveal-id="gradeweight" data-animation="fade"><img src="<?=base_url('public_html/front/images/editicon.jpg');?>" alt="" title=""></a></td>
                                                                                                                                                <td class="bdrright"><img src="<?=base_url('public_html/front/images/deleteicon.png');?>" alt="" title=""></td>
																</tr>
                                                                                                                                <?php } ?>
<!--																<tr>
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
																</tr>-->                                                                         
																<tfoot>
																		<tr>
																				<td colspan="5" class="bdrbottom bdrleft bdrright"><div class="tabletotal"> <span>Total:</span>
																								<input type="text" plceholder="" value="<?=count($gradeweight_list)?>" name="">
																						</div></td>
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
																				<td colspan="5" class="bdrbottom bdrleft bdrright"><div class="tabletotal"> <span>Total:</span>
																								<input type="text" plceholder="" value="" name="">
																						</div></td>
																		</tr>
																</tfoot>
														</table>
												</div>
												<div class="formright">
														<form>
																<fieldset>
																		<label>Assistance Teacher/Paraprof:</label>
																		<input type="text" placeholder="" value="" name="" class="marginbottm">
																		<div class="clear"></div>
																		<label class="noline">Comments for Students:</label>
																		<textarea cols="" rows="" name="" class="marginbottm"></textarea>
																		<div class="clear marginbottom15"></div>
																		<label class="noline">Parental Email Setup:</label>
																		<textarea cols="" rows="" name="" class="marginbottm"></textarea>
																		<div class="clear marginbottom15"></div>
																		
																		<label class="noline">Grading Rubric:</label>
																		<div class="checkboxdiv marginbottm">
																				<input id="box_1" class="css-checkbox" type="checkbox" />
																				<label for="box_1" name="lbl_1" class="css-label">Check Box</label>
																				<div class="clear"></div>
																				<input id="box_2" class="css-checkbox" type="checkbox" />
																				<label for="box_2" name="lbl_2" class="css-label">Check Box</label>
																				<div class="clear"></div>
																				<input id="box_3" class="css-checkbox" type="checkbox" />
																				<label for="box_3" name="lbl_3" class="css-label">Check Box</label>
																		</div>
																		<div class="clear"></div>
																		<label>Screen View:</label>
																		<div class="select_main">
																				<div class="select_bar">
																						<select  name="selState" class="select error">
																								<option></option>
																						</select>
																				</div>
																		</div>
																		<div class="clear"></div>
																		<label>Email Template Setup:</label>
																		<div class="radiodiv">
																				<input type="radio" name="radiog1" id="radio1" class="css-radio" />
																				<label for="radio1" class="css-label">Option 1</label>
																				<input type="radio" name="radiog1" id="radio2" class="css-radio" checked="checked"/>
																				<label for="radio2" class="css-label">Option 2</label>
																		</div>
																</fieldset>
														</form>
												</div>
												<div class="clear"></div>
												<input type="button" class="bluebtn left" value="Back" name="">
												<div class="right">
														<input type="button" class="darkgreenbtn" value="Save" name="">
														<input type="button" class="darkgreenbtn marginleft10" value="Save & Continue" name="">
												</div>
										</div>
								</div>
						</section>
				</article>
				<div class="clear"></div>
				<footer>
						<div class="footerdiv">
								<ul>
										<li><a href="#"><span>Enquiry with us</span> |</a></li>
										<li><a href="#"><span>Become a Partner</span> |</a></li>
										<li><a href="#"><span>About Virtual Para</span> |</a></li>
										<li><a href="#"><span>Contact Us</span> |</a></li>
										<li><a href="#"><span>Sitemap</span> |</a></li>
										<li><a href="#"><span>Privacy Policy</span> |</a></li>
										<li><a href="#"><span>Terms & Conditions</span> |</a></li>
										<li><a href="#"><span>Help</span> |</a></li>
								</ul>
								<div class="clear"></div>
								<ul class="socialMedia">
										<li class="twitter"><a href="#">&nbsp;</a></li>
										<li class="fb"><a href="#">&nbsp;</a></li>
										<li class="rss"><a href="#">&nbsp;</a></li>
										<li class="tube"><a href="#">&nbsp;</a></li>
								</ul>
								<div class="clear"></div>
								<div class="copyright">© 2014 Virtual Para  |   All rights reserved.</div>
						</div>
				</footer>
		</div>
</article>

	
	
	<div id="gradeweight" class="reveal-modal gradediv">
			<h1>Add Grade Weight</h1>
			<div class="gradedetail">
			 <label>Name</label>
                         <input type="text" value="" plceholder="" name="name" class="marginbottom15" id="grade_name">
			  <label>Percentage (%)</label>
			 <input type="text" value="" plceholder="" name="percentage" id="grade_per">
			 
                         <input type="button" value="Save" class="darkgreenbtn" name="" onclick="add_gradeWeight()">
			 </div>
			 
			<!--<a class="close-reveal-modal">&#215;</a>-->
		</div>
		
		<div id="studentgroup" class="reveal-modal gradediv">
			<h1>Add Student Grouping</h1>
			<div class="gradedetail">
			 <label>Name</label>
			 <input type="text" value="" plceholder="" name="" class="marginbottom15">
			  <label>Grade Level</label>
			 <input type="text" value="" plceholder="" name="">
			 <div class="checkboxdiv">
			 <div class="left">
			 <input type="checkbox" class="css-checkbox" id="box11">
			 <label class="css-label" name="lbl11" for="box11">Check Box</label>
			 <div class="clear"></div>
			 <input type="checkbox" class="css-checkbox" id="box12">
			 <label class="css-label" name="lbl12" for="box12">Check Box</label>
			 </div>
			 <div class="right">
			 <input type="checkbox" class="css-checkbox" id="box13">
			 <label class="css-label" name="lbl13" for="box13">Check Box</label>
			 <div class="clear"></div>
			 <input type="checkbox" class="css-checkbox" id="box14">
			 <label class="css-label" name="lbl14" for="box14">Check Box</label>
			 </div>
			 </div>
			 <input type="button" value="Save" class="darkgreenbtn" name="">
			 </div>
			 
			<!--<a class="close-reveal-modal">&#215;</a>-->
		</div>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="js/minified/jquery-1.9.1.min.js"%3E%3C/script%3E'))</script>
	<!-- custom scrollbars plugin -->
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script>
		(function($){
			$(window).load(function(){
				var textArea=$(".content textarea");
				textArea.wrap("<div class='textarea-wrapper' />");
				var textAreaWrapper=textArea.parent(".textarea-wrapper");
				textAreaWrapper.mCustomScrollbar({
					scrollInertia:0,
					advanced:{autoScrollOnFocus:false}
				});
				var hiddenDiv=$(document.createElement("div")),
        			content=null;
    			hiddenDiv.addClass("hiddendiv");
    			$("body").prepend(hiddenDiv);
    			textArea.bind("keyup",function(e){
        			content=$(this).val();
					var clength=content.length;
        			var cursorPosition=textArea.getCursorPosition();
					content="<span>"+content.substr(0,cursorPosition)+"</span>"+content.substr(cursorPosition,content.length);
					content=content.replace(/\n/g,"<br />");
        			hiddenDiv.html(content+"<br />");
        			$(this).css("height",hiddenDiv.height());
					textAreaWrapper.mCustomScrollbar("update");
					var hiddenDivSpan=hiddenDiv.children("span"),
						hiddenDivSpanOffset=0,
						viewLimitBottom=(parseInt(hiddenDiv.css("min-height")))-hiddenDivSpanOffset,
						viewLimitTop=hiddenDivSpanOffset,
						viewRatio=Math.round(hiddenDivSpan.height()+textAreaWrapper.find(".mCSB_container").position().top);
					if(viewRatio>viewLimitBottom || viewRatio<viewLimitTop){
						if((hiddenDivSpan.height()-hiddenDivSpanOffset)>0){
							textAreaWrapper.mCustomScrollbar("scrollTo",hiddenDivSpan.height()-hiddenDivSpanOffset);
						}else{
							textAreaWrapper.mCustomScrollbar("scrollTo","top");
						}
					}
    			});
				$.fn.getCursorPosition=function(){
        			var el=$(this).get(0),
						pos=0;
        			if("selectionStart" in el){
            			pos=el.selectionStart;
        			}else if("selection" in document){
            			el.focus();
            			var sel=document.selection.createRange(),
							selLength=document.selection.createRange().text.length;
            			sel.moveStart("character",-el.value.length);
            			pos=sel.text.length-selLength;
        			}
        			return pos;
    			}
			});
		})(jQuery);
	</script>
	
		<script type="text/javascript">
		
		$('select.select').each(function () {
                var title = $(this).attr('title');
                if ($('option:selected', this).val() != '') title = $('option:selected', this).text();
                $(this)
                    .css({ 'z-index': 10, 'opacity': 0, '-khtml-appearance': 'none' })
                    .after('<span id="spnSelect" class="select">' + title + '</span>')
                    .change(function () {
                        val = $('option:selected', this).text();
                        $(this).next().text(val);
                    })
            });
	</script>
	
	
</body>
</html>
