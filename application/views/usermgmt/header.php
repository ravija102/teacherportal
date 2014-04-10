<!DOCTYPE html>
<html>
<head>
    <style>
        .form_error {
              color:red; font-weight: bold; margin-left: 80px;
          }
    </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="<?=base_url('public_html/front/css/style1.css');?>" type="text/css" />
<link rel="stylesheet" href="<?=base_url('public_html/front/css/style2.css');?>" type="text/css" />
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
<script type="text/javascript" src="<?=base_url('public_html/front/script/usermgmt.js');?>"></script>

</head>

<body>
    <?=isset($_GET['msg']) ? $_GET['msg'] : '' ?>
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