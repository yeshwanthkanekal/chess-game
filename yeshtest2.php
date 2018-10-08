<?php
$filename3 = "chess2.txt";
     $file3 = fopen( $filename3, "r" );
         $filesize = filesize( $filename3 );
         $filetext = fread( $file3, $filesize );
         echo $filetext;
?>
