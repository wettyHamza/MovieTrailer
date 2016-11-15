<?php
$FileNo=1;

//Use Mysql Query to find the 'full path' of file using $FileNo.
// I Assume $FilePaths as 'Full File Path'.
 $connection = mysqli_connect("localhost","root","","movie") or die("Error " . mysqli_error($connection));

    $sql = "select * from movies where movie_id='$FileNo'";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
     $emparray = array();
        $i=0;

        while($row =mysqli_fetch_assoc($result))
        {
            $i++;
            $emparray[$i] = $row;
        }
        $FilePaths= $emparray[$i]['movie_path'];
        echo $FilePaths;
download_file($FilePaths);

function download_file( $fullPath )
{

  if( headers_sent() )
    die('Headers Sent');


  if(ini_get('zlib.output_compression'))
    ini_set('zlib.output_compression', 'Off');


  if( file_exists($fullPath) )
  {
    $fsize = filesize($fullPath);
    $path_parts = pathinfo($fullPath);
    $ext = strtolower($path_parts["extension"]);

    switch ($ext)
    {
      case "mp4": $ctype="video/x-mp4";break;
      default: $ctype="application/force-download";
    }

    header("Pragma: public");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Cache-Control: private",false);
    header("Content-Type: $ctype");
    header("Content-Disposition: attachment; filename=\"".basename($fullPath)."\";" );
    header("Content-Transfer-Encoding: binary");
    header("Content-Length: ".$fsize);
    ob_clean();
    flush();
    readfile( $fullPath );

  }
  else
    die('File Not Found');

}
?>