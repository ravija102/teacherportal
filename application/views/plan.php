<?=$this->load->view('top_menu_plan')?>

<div class="mid">
<div class="wrapper">
<div class="mid_main">
<h2><spam>PRICING OVERVIEW</spam></h2>
<div class="pricing_box">
<h4>Besic</h4>
<div class="price_rs">
<img src="<?=base_url('public_html/front/images/price1.png');?>" alt="" title="" />
<span>Perfect for freelancers</span>
</div>
<ul>
<li class="icon1">Lorem ipsum dolor sit </li>
<li class="icon2">amet, consectetur a</li>
<li class="icon3">dipisicing elit, sed do </li>
<li class="icon4">eiusmod tempor </li>
</ul>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
<h5><a href="#" class="big-link" data-reveal-id="myModal" data-animation="fade">Select Plan</a></h5>
<div id="myModal" class="reveal-modal plan_popup">
			<h1>Payment Info</h1>

       <div class="plan_form">
         <div class="select_main">
         <label for="select">Select Plan</label>
         <select name="select" id="select" class="select required">
             <option value="standard">Standard</option>
         </select>
         </div>
         
         <label for="textfield3">Pricing</label>
         <input type="text" name="textfield3" id="textfield3" class="" placeholder="200$" value="$20" />
         
          <input type="button" name="" value="Confirm" class="darkbluebtn marginleft10" onclick="payment()">
            <input type="button" name="" value="Change Plan" class="darkgreenbtn marginleft10">
        </div>
        <!--register_form end-->
			<a class="close-reveal-modal">&#215;</a>
		</div>
</div>
<div class="pricing_box blue">
<h4>Besic</h4>
<div class="price_rs">
<img src="<?=base_url('public_html/front/images/price2.png');?>" alt="" title="" />
<span>Perfect for freelancers</span>
</div>
<ul>
<li class="icon1">Lorem ipsum dolor sit </li>
<li class="icon2">amet, consectetur a</li>
<li class="icon3">dipisicing elit, sed do </li>
<li class="icon4">eiusmod tempor </li>
</ul>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
<h5><a href="#">Select Plan</a></h5>

</div>
<div class="pricing_box yellow">
<h4>Besic</h4>
<div class="price_rs">
<img src="<?=base_url('public_html/front/images/price3.png');?>" alt="" title="" />
<span>Perfect for freelancers</span>
</div>
<ul>
<li class="icon1">Lorem ipsum dolor sit </li>
<li class="icon2">amet, consectetur a</li>
<li class="icon3">dipisicing elit, sed do </li>
<li class="icon4">eiusmod tempor </li>
</ul>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
<h5><a href="#">Select Plan</a></h5>

</div>
<div class="pricing_box red last">
<h4>Besic</h4>
<div class="price_rs">
<img src="<?=base_url('public_html/front/images/price4.png');?>" alt="" title="" />
<span>Perfect for freelancers</span>
</div>
<ul>
<li class="icon1">Lorem ipsum dolor sit </li>
<li class="icon2">amet, consectetur a</li>
<li class="icon3">dipisicing elit, sed do </li>
<li class="icon4">eiusmod tempor </li>
</ul>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
<h5><a href="#">Select Plan</a></h5>

</div>
<div class="green_btn"><a href="#"><img src="<?=base_url('public_html/front/images/btn.png');?>" alt="" title="" /></a></div>
</div>
</div>
<!--wrapper end-->
</div>
<!--mid end-->

<?=$this->load->view('footer')?>
