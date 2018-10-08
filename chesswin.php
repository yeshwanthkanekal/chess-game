<?php
   $filename = "chess1.txt";
   $file = fopen( $filename, "w+" );
   fwrite( $file, $_GET["p"] );
   fclose( $file );
   $filename1 = "chess2.txt";
   $file1 = fopen( $filename1, "w+" );
   fwrite( $file1, $_GET["q"] );
   fclose( $file1 );
   $filename2 = "chesswin.txt";
   $file2 = fopen( $filename2, "w+" );
   fwrite( $file2, $_GET["t"] );
   fclose( $file2 );
  
?>
