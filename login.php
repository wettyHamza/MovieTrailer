<?php
session_start();
    //open connection to mysql db
   $connection = mysqli_connect("localhost","root","","movie") or die("Error " . mysqli_error($connection));
 
	//if ($connection) {echo "connected";}
	
    $email=$_POST['Email'];
   $pass=$_POST['Password'];

$_SESSION['email']=$email;

    $sql = "select * from users where user_pswd='$pass' and user_mail='$email'";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
     $emparray = array();
        $i=0;

        while($row =mysqli_fetch_assoc($result))
        {
            $i++;
            $emparray[$i] = $row;
        }

        if (count($emparray)!=0) {
        $_SESSION['user_name']=$emparray[$i]['user_name'];
       // echo 'tayeb login',$_SESSION['user_name'];
         header('Location: home.php');

        } else {
            $emparray["result"]="0";
            echo json_encode($emparray);
        }

//echo 'tayeb login',$_SESSION['email'];
    mysqli_close($connection);
?>