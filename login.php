<?php session_start(); ?>
<?php if(!isset($_SESSION['usuario'])){ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
<link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" href="images/apple-touch-startup-image-640x1096.png">
<meta name="author" content="Ing. Marco Brito" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>SISCOM - Login</title>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700,900' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/themes/default/jquery.mobile-1.4.5.css">
<link type="text/css" rel="stylesheet" href="style.css" />
<link type="text/css" rel="stylesheet" href="css/colors/yellow.css" />
<link type="text/css" rel="stylesheet" href="css/swipebox.css" />
</head>
<body>

<div data-role="page" id="login" class="secondarypage" data-theme="b">

<div class="back_btn"><a href="index.php" data-transition="flip"><img src="images/icons/black/back.png" alt="" title="" /></a></div>
    <div role="main" class="ui-content">
    
	
	
            <div class="content-block-login"> 
            			
            <div class="form_logo" style="font-size:28px;"><img src="images/logo3.png" alt="4tubing" title="4tubing"/></br></br>CONTROL DE ACCESO</div>
                        
                        <div class="loginform">
                        
                            <form id="LoginForm">
                            <input type="text" id="Username" name="Username" value="" class="form_input required" placeholder="usuario" data-role="none" />
                            <input type="password" id="Password" name="Password" value="" class="form_input required" placeholder="clave" data-role="none" />
                            <input type="button" name="submit" class="form_submit" id="submit" data-role="none" value="INGRESAR" />
                            </form></br>
							<div class="err" id="add_err" style="text-align:center; color:#FF0000; font-weight:bold; font-size:16px;"></div>
							<div class="close_loginpopup_button"><a href="index.php" data-transition="flip"><img src="images/icons/white/menu_close.png" alt="" title="" /></a></div>
							

                        </div>
						
            </div>

    </div><!-- /content -->


</div><!-- /page -->

<script src="js/jquery.min.js"></script>
<script src="js/procesos_mobile.js"></script>
<script src="js/jquery.mobile-1.4.5.min.js"></script>
<script src="js/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.swipebox.js"></script>
<script src="js/jquery.mobile-custom.js"></script>
</body>
</html>
<?php } else { ?>
<script>
location.href ="index.php";
</script>	
<?php } //fin del IF session ?>
