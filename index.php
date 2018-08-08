<!DOCTYPE html>
<html lang="en">
<head>
<title>Ether Wallet</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flat Modern Sign In Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript">
    
      		var web3 = new Web3(new Web3.providers.HttpProvider("http://127.0.0.1:8545"));
   	
		    
			
</script>

<link href="css/font-awesome.css" rel="stylesheet"> 

<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

<script src="js/jquery.min.js"></script> 
<script src="js/script.js"></script> 

</head>
<body>
	<div class="main-agile">
		<h1>Ether Wallet</h1>
		<div id="w3ls_form" class="signin-form">
			<!-- Sign In Form -->
			<form id="signin">
				<div class="ribbon"><a href="#" id="flipToRecover" class="flipLink" title="Click Here to SignUp" style="color:#f88a83;">Create Wallet</a></div>
				<h2>Sign In </h2>
				<input type="text" name="UserName" placeholder="Username" required="" />
				<input type="password" name="Password" placeholder="Password" required=""/>	 
				<input type="checkbox" id="brand" value="">
				<label for="brand"><span></span> Remember me ?</label> 
				<input type="submit" value="SIGN IN">
				<div class="signin-agileits-bottom"> 
					<p><a href="#" style="color:#f88a83;">Forgot Password ?</a></p>    
				</div> 
				<!-- <div class="social-grids">
					<div class="social-text">
						<p>Or Sign in with</p>
					</div>
					<div class="social-icons">
						<ul>
							 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
							 <li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
						</ul>
					</div>
					<div class="clear"> </div>
				</div> -->
			</form>

			<form id="signup">
				<div class="ribbon"><a href="#" id="flipToRecover1" class="flipLink" title="Click Here to signin" style="color:#f88a83;">Sign In</a></div>
				<h3>Create Wallet</h3>
				<input type="text" name="UserName" placeholder="User Name" required=""/>
				<input type="text" name="Email" placeholder="Your Email" required=""/>
				<input type="password" name="Password" placeholder="Password" required=""/>	
				<input type="hidden" name="Address" id="Address" value="" />
				<input type="checkbox" id="brand1" value="" />
				<label for="brand1"><span></span>I accept the terms of use</label> 
				<input type="submit" value="CREATE WALLET" id="submitbttn"> 
			</form>
		</div>
		
	</div>	
</body>
</html>

<script type="text/javascript">
            $(function () {
        		$('#signup').submit(function (e) {   
				var res = web3.personal.newAccount();
        		console.log(res);
        		$("#Address").val(res); 
     		      e.preventDefault();
		          $.ajax({
		            type: "post",
		            url: 'signup.php',
		            data: $('#signup').serialize(), 
		            success: function (data) {
		               alert(data); 
		               window.location.href = 'index.php'; 	 
		            }
		          });
        		});


        		// signnin

        		$('#signin').submit(function (e) {   
				  e.preventDefault();
		          $.ajax({
		            type: "post",
		            url: 'signin.php',
		            data: $('#signin').serialize(), 

		            success: function (data) {
		               console.log(data); 
		               window.location.href = "profile.php"; 	 
		            },
		            error: function(error) {
		            	console.log('msg', error)
		            }
		          });
        		});
		    });




</script>