<?php session_start();
include 'checksession.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Ether Wallet</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flat Modern Sign In Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<link href="css/font-awesome.css" rel="stylesheet"> 

<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

<script src="js/jquery.min.js"></script> 
<script src="js/script.js"></script> 
<script type="text/javascript">
	var web3 = new Web3(new Web3.providers.HttpProvider("http://127.0.0.1:8545"));
	console.log(web3);
	var username = "<?php echo $_SESSION["username"]; ?>";
	
    var address = "<?php echo $_SESSION["address"]; ?>";
     
</script>
</head>
<body onload="loadfunction()">
	
	<div class="main-agile">
		<h1>Ether Wallet</h1>
		<div id="w3ls_form" class="signin-form">
			
			<form id="signin">
				<div class="ribbon" > <a href="" id="flipToRecover" class="flipLink" title="Click Here to SignUp"  style="color:#f88a83;">Log Out</a></div>
				<h2 id="username"> </h2>
			<!-- 	<label for="brand">Email:  <p id="email"></p> </label> --> 
				<label for="brand">ADDRESS:  <p id="address"></p> </label> 
                <br><br><label for="brand">BALANCE:  <p id="balance"></p> </label>
				<br>
				<div class="signin-agileits-bottom" style="border-top:solid 2px #f88a83; width:90%; margin:auto;"> 
				</div> <h2>SEND ETHER </h2>
				<input type="text" name="toaddress" placeholder="Receiver Address" required="" />
				<input type="password" name="amount" placeholder="Amount to Send" required=""/>	 
				<br>
				<input type="submit" value="SEND" id="sendtransaction">
			</form>
			
		</div>
		
	</div>	
	<!-- //main --> 
</body>
</html>

<script type="text/javascript">
	

	    function loadfunction(){
          document.getElementById("username").innerHTML = username;
          
          document.getElementById("address").innerHTML = address;
          document.getElementById("balance").innerHTML = web3.fromWei(web3.eth.getBalance(address),'ether');   
       }
         $("#flipToRecover").on('click', function(){
              
         	window.location="logout.php";
 
         });
      
</script>