<?php
session_start();
$movie_name=$_GET['movie_name'];
$movie_price=$_GET['movie_price'];
$movie_purchased=array($movie_name => $movie_price);

if(!isset($_SESSION['basket'])){
$_SESSION['basket']=array();
array_push($_SESSION['basket'], $movie_purchased);
}
else{
array_push($_SESSION['basket'], $movie_purchased);

}
/*foreach($_SESSION['basket'] as $val){
    foreach($val as $cle => $element){

   echo '[' . $cle . '] vaut ' . $element . '<br />';
   }
}*/
//header('Location: genres.php');
 echo'<ul class="media-list">';
$movies=$_SESSION['basket'];
$total=0;
foreach($movies as $val){
    foreach ($val as $cle => $element){
   $movie_name=$cle;
   $movie_price=$element;

$total=$total+$movie_price;
$_SESSION['total']=$total;
                                  echo' <li>';

                                               echo'<h5 id="online_user">'.$movie_name.'.price'.$movie_price.'</h5>';

                                   echo' </li>';





                             echo'</ul>';


}
}
 //echo 'total'. $total;

//echo 'sessuin'. $_SESSION['total'];
   ?>