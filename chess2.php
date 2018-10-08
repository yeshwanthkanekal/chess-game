<?php
echo "You are Player ".(string)(((int)$_POST["name"])+1);
echo "
<html>
<head>
<style>
body {
    background-image:url('images/4.jpg');
    background-repeat: no-repeat;
    background-size: 100% 100%;
}
html {
    height: 100%
}
</style>
</head>
<body >";
if($_POST["name"] == "0"){
echo "
<h1 id='y' style='color:white;text-align:center;' >Waiting for other player to connect</h1>
<script>
function func1() {
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
           if (ajax.responseText == '') {
           window.location.href = 'chess31.php';
                                         }
           else{func1();}  
                                  }  
                                         }
     ajax.open('GET', '1.txt', true); 
    ajax.send();
                 }
func1();
</script>
";
}
else{
echo "
<form action='chess32.php'>
<h1 style='color:white;text-align:center;' >Opponent found<br>You have blacks<br>click ok to continue</h1>
<center><input type='submit' value='ok'></center>
</form>";
}
echo "
</body>
</html>";
?>
