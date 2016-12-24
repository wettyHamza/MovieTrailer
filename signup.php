<?php
    //open connection to mysql db
   $connection = mysqli_connect("localhost","root","","movie") or die("Error " . mysqli_error($connection));
 
	//if ($connection) {echo "connected";}
	
    $name=$_POST['Username'];
    $email=$_POST['Email'];
    $password=$_POST['Password'];
	$card = $_POST['Card'];

    $sql = "INSERT INTO `users`(`user_name`, `user_mail`, `user_pswd`, `user_card`) VALUES ('$name','$email','$password','$card')";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
    //close the db connection
    mysqli_close($connection);
?>