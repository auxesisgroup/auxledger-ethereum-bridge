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
	session_start();

	$name = $_REQUEST['UserName']; // ? $_REQUEST['UserName'] : 'devansh'; 
    $password = $_REQUEST['Password'];//  ? $_REQUEST['Password'] : '12345';
  
    $sql = "SELECT * from users where user_name='$name'and password='$password';";
	// $result = $conn->query($sql);
	// die;
	// echo $result->num_rows;

	// if ($result->num_rows > 0) {
	//     $_SESSION['username'] = $row["user_name"];
	//     $_SESSION['email'] = $row["email"];
	//     $_SESSION['address'] = $row["address"];
	//     header('Location: profile.php');

	// } 
	// else {
	//   session_destroy();
	//   header('Location: index.php');
	// }


	if ($result = $conn->query($sql)) {
    /* fetch object array */
	    while ($row = $result->fetch_row()) {
	        $_SESSION['username'] = $row[1];
		    // $_SESSION['email'] = $row[3];
		    $_SESSION['address'] = $row[4];
		    header('Location: profile.php');
	    }
	}
	else {
	  session_destroy();
	  header('Location: index.php');
	}
	mysqli_close($conn);
    
?>
   