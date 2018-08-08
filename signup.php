<?php 
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "ether";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	
    	$name = $_REQUEST['UserName']; 
	    $email = $_REQUEST['Email']; 
	     $password = $_REQUEST['Password'];
	     $address = $_REQUEST['Address'];
      
      
   $sql = "INSERT INTO users (user_name, password, email, address) VALUES ('$name','$password','$email','$address')";

   if (mysqli_query($conn, $sql)) {
 	    print_r("Wallet Created Successfully!!");
	} else {
    	print_r("Error!");
	}

mysqli_close($conn);
    
?>
   
     