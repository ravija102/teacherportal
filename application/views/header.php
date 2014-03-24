<div class="header">
<div class="wrapper">
<div class="header_main">
<div class="header_text">
<h3>User Login</h3>
<div class="error" style="margin-top:20px; position: absolute;">
    <?=(isset($error) ? $error : '');?>
    <?=validation_errors()?>
</div>
<form action="<?=base_url('index.php/usermgmt/user_login/')?>" method="post" id="loginForm">
<div class="main_txt"><label for="textfield" class="lbl1">Email Add:</label>
<input type="text" name="username" id="textfield" class="txt1" value="<?=set_value('username')?>" />
</div>
<div class="main_txt">
<label for="textfield2" class="lbl2" >Password:</label>
<input type="text" name="password" id="textfield2" class="txt2" />

</div>
    <input type="submit" name="button" id="button" value="Submit" onclick="return validateLogin()"/><div class="clear"></div>
</form>
<div class="checkboxmain">
<input type="checkbox" name="checkbox" id="checkbox" />
<label for="checkbox">Remember Me</label>

<span>Forgot your password? <a href="#">Click Here</a></span>
<div id="myModal" class="reveal-modal register_popup">
			<h1>Get Register With Us</h1>
		<span>Feel free to drop us a line and we'll get back to you in 48 hours max!</span>
        <div class="register_form">
            <div id="error" style="margin-top: 40px; text-align: center;">
                
            </div>
            <form action="" method="post" id="user_form" onsubmit="return false">
                <label for="textfield3">Your Name</label>
                <input type="text" name="user_first_name" id="textfield3" class="nametxt inp" placeholder="example:  User Name" />
                <label for="textfield4">Last Name</label>
                <input type="text" name="user_last_name" id="textfield4"  class="nametxt inp"   placeholder="example:  Surname"/>
                <label for="textfield5">Your Email Address</label>
                <input type="text" name="email" id="textfield5"  class="emailtxt inp" placeholder="example:  office@example.com"/>
                <label for="textfield6">Password</label>
                <input type="text" name="password" id="textfield6" class="passtxt inp" />
                <label for="textfield7">Re-Type Password</label>
                <input type="text" name="cpassword" id="textfield7" class="passtxt inp"/>
                <input type="button" name="" value="Submit your details" class="darkgreenbtn marginleft10" onclick="submitForm()" id="form" >
            </form>
        </div>
        <!--register_form end-->
	<a class="close-reveal-modal">&#215;</a>
        
</div>
</div>
<div class="register_now">
<span>New to Virtual Para??</span> 
  <a href="#" class="big-link" data-reveal-id="myModal" data-animation="fade"><input type="submit" name="button2" id="button2" value="Submit" /></a>
</div>
<!--register_now end-->
</div>
<div class="header_img">
    <img src="<?=base_url('public_html/front/images/banner_img1.png');?>" alt="" title=""  />
</div>
</div>

</div>
<!--wrapper end-->
</div>
<!--header end-->
