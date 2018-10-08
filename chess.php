<html>
<head>
<style>
.container {
    position: relative;
    text-align: center;
    color: white;
}
.centered {
    background-color: green;
    border: none;
    color: white;
    padding: 30px 52px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, +120%);
}
</style>
</head>
<body bgcolor="pink">
<?php
         $filename = "1.txt";
         $file = fopen( $filename, "r" );
         $filesize = filesize( $filename );
         fclose( $file );
      ?>
<img src="images/2.gif" alt="Smiley face" style="float:left;width:400px;height:400px;">
<img src="images/3.gif" alt="Smiley face" style="float:right;width:400px;height:300px;">
<div class="container">
  <img src="images/1.gif" alt="Norway" style="width:50%;">

<form action="chess2.php" method="post">
<?php if($filesize) {

echo "<input type='hidden' name='name' value='1'>";
}
else{
echo "<input type='hidden' name='name' value='0'>";
$filename1 = "1.txt";
$file1 = fopen( $filename1, "w" );
fwrite( $file1, "0" );
fclose( $file1 );
}?>
<input type="submit"  class="centered" value="Click me to get an opponent" >
</form>

</div>
</body>
</html>

