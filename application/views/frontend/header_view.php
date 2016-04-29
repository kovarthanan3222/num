<!DOCTYPE html>
<html lang="en">
<head>
  <title>NewUrbanMechanic</title>
	<!-- !!!!!! META TAG !!!!!!! -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  
	<!-- !!!!!! CSS !!!!!!! -->
	<link rel="stylesheet" href="css/layout.min.css">
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/menu_offcanvas.css"/>
	<link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
	<link rel="stylesheet" href="css/swiper.min.css">
	<link href="css/bootstrap-select.css" rel="stylesheet">
	<link href="css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="css/jquery-ui-1.10.3.custom.css">
	<link rel="stylesheet" href="css/datepicker.css">
	<link rel="stylesheet" href="css/responsive.css">
	<!--<link rel='stylesheet prefetch' href="css/animate.css">-->

	<!-- !!!!!! FONT !!!!!!! -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lora:400,400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,600,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>	
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	
	
	<link href='https://www.google.com/fonts#UsePlace:use/Collection:Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='https://www.google.com/fonts#UsePlace:use/Collection:Alegreya:400,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	
	
	<!-- !!!!!! JAVA SCRIPT !!!!!!! -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/menu_offcanvas.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/validator.min.js"></script>

	
</head>
<body class="body-offcanvas">

<div id="load">
<div class="container_load">
<div class="bike-body">
<div class="seat"></div>
<div class="cover"></div>
<div class="lamp"></div>
<div class="motor">
<div class="part-1">
<div class="part-1-top"></div>
<div class="part-1-bottom"></div>
</div>
<div class="part-2">
<div class="part-2-base">
<div class="line"></div>
<div class="line"></div>
<div class="line"></div>
<div class="line"></div>
</div>
</div>
</div>
<div class="front"></div>
<div class="back"></div>
</div>
<div class="tire"></div>
<div class="tire"></div>
<div class="smoke"></div>
</div>
</div>

<section class="hed_con_in">
	<div class="contact_info">
		<div class="container">
		<div class="col-sm-9 mob_num">
		 <i class="glyphicon glyphicon-earphone"></i>+91 9566147451
		 <div class=" email_info">
		<i class="glyphicon glyphicon-envelope"></i>
		NewUrbanMechanic@gmail.com
		</div>
		</div>
		

		<div class="col-sm-3 align_right">
		<div class="log_button">
		<span data-toggle="modal" data-target="#registration">Registration</span>
		<span data-toggle="modal" data-target="#login">Login</span>
		</div>
		</div>
		</div>
	</div>
    <header class="clearfix">
        <nav class="navbar navbar-default" role="navigation">
			<div class="container">
			<div class="header_container">
            <div class="container-fluid">
                <div class="navbar-header">
                  <!-- navbar-brand -->  <a class="" href="index.php"><img src="images/Newurbanmechanic-logo.png" class="logo"></a>
                    <button type="button" class="navbar-toggle offcanvas-toggle pull-right" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas" style="float:left;">
                        <span class="sr-only">Toggle navigation</span>
                        <span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </span>
                    </button>
                </div>
                <div class="navbar-offcanvas navbar-offcanvas-touch" id="js-bootstrap-offcanvas">
					<ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php" class="nav_active">Home  </a></li>
                        <li><a href="index.php#howitworks">How it works</a></li>
                        <li><a href="index.php#aboutus">About Us</a></li>
                        <li  class="dropdown">
                            <a class="dropdown-toggle" href="#">Insurance<span class="caret"></span></a>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="insurance-bike.php">Bike Insurance</a></li>
                                <li><a href="insurance.php">Car Insurance</a></li>
                            </ul>
                        </li>
                        <li><a href="offers.php">Offers</a></li>
                        <!-- <li><a href="#" data-toggle="modal" data-target="#myModal">Sign Up</a></li>
                        <li><a href="#">Sign In</a></li> -->
                        <li><a href="index.php#contactus">Contact Us</a></li>
                        <li class="hide_menu"><a data-toggle="modal" data-target="#registration">Registration</a></li>
                        <li class="hide_menu"><a data-toggle="modal" data-target="#login">Login</a></li>
                    </ul>
                </div>
            </div>
            </div>
            </div>
        </nav>
    </header>	
</section>


<!-- !!!!!! LOGIN !!!!!!! -->
	<div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
             <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h4 id="myModalLabel" class="modal-title">Log in</h4>
                </div> <!-- /.modal-header -->

                <div class="modal-body">
                    <form  role="form" novalidate="true">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="email" required="" placeholder="Email" name="emailid" id="email" class="form-control">
                                <label class="input-group-addon glyphicon glyphicon-envelope" for="email"></label>
                            </div>
                        </div> <!-- /.form-group -->

                        <div class="form-group">
                            <div class="input-group">
                                <input type="password" required="" placeholder="Password" name="Passwordtext" id="password" class="form-control">
                                <label class="input-group-addon glyphicon glyphicon-lock" for="uPassword"></label>
                            </div> <!-- /.input-group -->
                        </div>
                    <!-- /.form-group -->
                        <div class="row">
					<div class="col-sm-6">
						<div class="checkbox checkbox-primary">
						<input id="loginn" type="checkbox" >
						<label for="loginn">
						I agree with 
						</label>
						</div>
                    </div>
					<div class="col-sm-6">
						<div class="forgot_account"><span data-target="#forgot_password_pop" data-toggle="modal" data-dismiss="modal">Forgot Password ?</span></div>
					</div>
					</div>
                    </form>
                </div> <!-- /.modal-body -->

                <div class="popup_submit">
                    <button>Login</button>
                </div>
      </div>
      
    </div>
  </div>
  
  
<!-- !!!!!! REGISTRATION !!!!!!! -->
	<div class="modal fade" id="registration" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
             <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h4 id="myModalLabel" class="modal-title">Registration</h4>
                </div> <!-- /.modal-header -->

                <div class="modal-body">
                <p align="center" class="hide" id="error">Invalid user name or password</p>
                    <form data-toggle="validator" role="form" novalidate="true">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" required="" placeholder="Email" name="name" id="name" class="form-control">
                                <label class="input-group-addon glyphicon glyphicon-user" for="Email"></label>
                            </div>
                        </div>

						 <div class="form-group">
                            <div class="input-group">
                                <input type="text" required="" placeholder="Number" name="number" id="email" class="form-control">
                                <label class="input-group-addon glyphicon glyphicon-envelope" for="number"></label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <input type="password" required="" placeholder="Password" name="Passwordtext" id="upassword" class="form-control">
                                <label class="input-group-addon glyphicon glyphicon-lock" for="uPassword"></label>
                            </div> <!-- /.input-group -->
                        </div>
						 <div class="form-group">
                            <div class="input-group">
                                <input type="password" required="" placeholder="Confirm Password" name="Passwordtext" id="cpassword" class="form-control">
                                <label class="input-group-addon glyphicon glyphicon-lock" for="cPassword"></label>
                            </div> <!-- /.input-group -->
                        </div>
                    <!-- /.form-group -->
                        <div class="row">
					<div class="col-sm-6">
						<div class="checkbox checkbox-primary">
						<input id="register" type="checkbox" >
						<label for="register">
						I agree with 
						</label>
						</div>
                    </div>
					<div class="col-sm-6">
					<div class="terms_con">
						<a href="#" >Terms & Conditions</a>
					</div>
					</div>
					</div>
                    </form>
                </div> <!-- /.modal-body -->

                <div class="popup_submit">
                    <button>Register</button>
                </div>
      </div>
      
    </div>
  </div>
	
	
<!-- !!!!!! Forgot password !!!!!!! -->
	<div class="modal fade" id="forgot_password_pop" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
	  
             <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h4 id="myModalLabel" class="modal-title"></h4>
                </div> <!-- /.modal-header -->
				<div class="modal-body text-center">
				<h2><i class="glyphicon glyphicon-refresh"></i></h2>
                          <h2 class="text-center">Forgot Password?</h2>
                          <p>You can reset your password here.</p>
                    <form  role="form" novalidate="true">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="email" required="" placeholder="Email" name="emailid" id="email" class="form-control">
                                <label class="input-group-addon glyphicon glyphicon-envelope" for="email"></label>
                            </div>
                        </div> <!-- /.form-group -->

                    </form>
                </div>
                <div class="popup_submit">
                    <button>Send My Password</button>
                </div>
      </div>
      
    </div>
  </div>
	
	<script>
	
	 $(document).ready(function(){
       $(".dropdown").click(function(e){
           $(".active").removeClass("");
           $(this).addClass("active");
           e.stopPropagation();
       });   
       $(document).click(function(){ 
           $(".navbar-offcanvas ul.nav li ul.dropdown-menu").removeClass("shown");
       });
    });
	
	</script>

