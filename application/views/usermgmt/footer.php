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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="js/minified/jquery-1.9.1.min.js"%3E%3C/script%3E'))</script>
	<!-- custom scrollbars plugin -->
	<script src="<?=base_url('public_html/front/script/jquery.mCustomScrollbar.concat.min.js');?>"></script>
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
        
        <!-- BEGIN CKEDITOR SCRIPT -->  
    
        <script type="text/javascript" src="<?=base_url('public_html/ckeditor/ckeditor.js');?>"></script>
        <script type="text/javascript">
        
            CKEDITOR.replace( 'parental_email_value',{

//              filebrowserBrowseUrl : '/browser/browse.php',
//              filebrowserUploadUrl : '/uploader/upload.php'
            } );
        </script>
        
        <!-- END CKEDITOR SCRIPT -->
        
</body>
</html>