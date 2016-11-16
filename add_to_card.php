<?php
session_start();
$movie_name=$_GET['movie_name'];
$movie_price=$_GET['movie_price'];
echo $movie_name.'gghjhg';
if(!isset($movie_name)) {
echo 'ma jeniiiiiiiiiiiiiiiiiiich';
}
$movie_purchased=array($movie_name => $movie_price);

if(!isset($_SESSION['basket'])){
$_SESSION['basket']=array();
array_push($_SESSION['basket'], $movie_purchased);
}
else{
array_push($_SESSION['basket'], $movie_purchased);

}
foreach($_SESSION['basket'] as $val){
    foreach($val as $cle => $element){

   echo '[' . $cle . '] vaut ' . $element . '<br />';
   }
}
//header('Location: genres.php');
?>