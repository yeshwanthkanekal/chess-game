<?php
     $filename3 = "chesswin.txt";
     $file3 = fopen( $filename3, "r" );
         $filesize = filesize( $filename3 );
         $filetext = fread( $file3, $filesize );
         if($filetext == $_GET["x"]){echo "Successful";}
         else {echo "UnSuccessful";}
         fclose( $file3 );
?>
