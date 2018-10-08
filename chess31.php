<?php

echo "<h1>You are Player 1.</h1>
<html>
<head>
<style>
body {
    background-image:url('images/5.jpg');
    background-repeat: no-repeat;
    background-size: 100% 100%;
}
html {
    height: 100%
}
</style>
<script
src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'>
</script>
<link rel='stylesheet' href='style.css'>
<script>
s = 1;
a = 1;
susp = 1;
function changec(){
yes1 = 'y';
yes2 = 'y';
for( p1 = 1; p1 < 9; p1++ ){
for( q1 = 1 ; q1 < 9 ; q1++ ){
r1 = p1+''+q1;
if((p1+q1)%2 != 0){
document.getElementById(r1).style.background = 'blue';
}
else{
document.getElementById(r1).style.background = 'rgb(255,255,255)';
}
cr1 = document.getElementById(r1).childNodes;
if(cr1[0].id == 'k'){yes1 = r1;}
if(cr1[0].id == 'kb'){yes2 = 'n';}
cr1[1].id = 2;
}}
if(yes2 == 'y'){window.location.href = 'whitewin.html';}
}
function strspl(str){
    var res = str.split('');
    res1 = res;
    res1[0] = 9-res[0];
    return res1[0]+res1[1];
}
function movepiece(idp,idc){

if(idc == 'p'){ye = 0;
  res2 = idp.split('');
   if(res2[0] != 1){
    res2[0]--;
    cr = document.getElementById(res2[0]+res2[1]).childNodes;
    if(cr[0].id == 2){document.getElementById(res2[0]+res2[1]).style.background = 'green';document.getElementById(res2[0]+res2[1]).innerHTML = '<p id=2 ></p><p id=5 ></p>';ye = 1;}
       if(res2[0] != 1){
    res2[0]--;
    cr = document.getElementById(res2[0]+res2[1]).childNodes;
    if(res2[0] == 5 && cr[0].id == 2 && ye){document.getElementById(res2[0]+res2[1]).style.background = 'green';document.getElementById(res2[0]+res2[1]).innerHTML = '<p id=2 ></p><p id=5 ></p>';}
       }
    res2 = idp.split('');
    res2[0] = Number(res2[0])-1;
    res2[1] = Number(res2[1])-1;
    if(res2[1]>0){
    cr = document.getElementById(String(res2[0])+String(res2[1])).childNodes;
    if( cr[0].id == 'pb' || cr[0].id == 'bb' || cr[0].id == 'rb' || cr[0].id == 'nb' || cr[0].id == 'qb' || cr[0].id == 'kb'){
     document.getElementById(String(res2[0])+String(res2[1])).style.background = 'red';
     cr[1].id = 5;}}
    res2[1] = Number(res2[1])+2;
     if(res2[1]<9){
    cr = document.getElementById(String(res2[0])+String(res2[1])).childNodes;
    if( cr[0].id == 'pb' || cr[0].id == 'bb' || cr[0].id == 'rb' || cr[0].id == 'nb' || cr[0].id == 'qb' || cr[0].id == 'kb'){
     document.getElementById(String(res2[0])+String(res2[1])).style.background = 'red';
     cr[1].id = 5;}}
  }
  }
if(idc == 'n'){
var arr = [2,1,2,-1,-2,1,-2,-1,1,2,-1,2,1,-2,-1,-2];
for(i=0;i<16;i+=2){
res2 = idp.split('');
res2[0] = Number(res2[0])+arr[i];
res2[1] = Number(res2[1])+arr[i+1];
if( res2[0]>0 && res2[0]<9 && res2[1]>0 && res2[1]<9 ){
cr = document.getElementById(String(res2[0])+String(res2[1])).childNodes;
 if( cr[0].id == 'pb' || cr[0].id == 'bb' || cr[0].id == 'rb' || cr[0].id == 'nb' || cr[0].id == 'qb' || cr[0].id == 'kb'){
     document.getElementById(String(res2[0])+String(res2[1])).style.background = 'red';
     cr[1].id = 5;}
 if( cr[0].id == 2){
     document.getElementById(String(res2[0])+String(res2[1])).style.background = 'green';
     cr[1].id = 5;}}
         }
  }
if(idc == 'b' || idc == 'q'){
if(idc == 'b'){var arr = [-1,1,-1,-1,1,-1,1,1];t = 8;}
else{var arr = [-1,1,-1,-1,1,-1,1,1,-1,0,1,0,0,-1,0,1];t = 16;}
for(i=0;i<t;i+=2){
res2 = idp.split('');
while(true){
res2[0] = Number(res2[0])+arr[i];
res2[1] = Number(res2[1])+arr[i+1];
if( res2[0]>0 && res2[0]<9 && res2[1]>0 && res2[1]<9 ){
cr = document.getElementById(String(res2[0])+String(res2[1])).childNodes;
 if( cr[0].id == 'pb' || cr[0].id == 'bb' || cr[0].id == 'rb' || cr[0].id == 'nb' || cr[0].id == 'qb' || cr[0].id == 'kb'){
     document.getElementById(String(res2[0])+String(res2[1])).style.background = 'red';
     cr[1].id = 5;break;}
 if( cr[0].id == 2){
     document.getElementById(String(res2[0])+String(res2[1])).style.background = 'green';
     cr[1].id = 5;}
 if( cr[0].id == 'p' || cr[0].id == 'b' || cr[0].id == 'r' || cr[0].id == 'n' || cr[0].id == 'q' || cr[0].id == 'k'){break;}
 }
else{break;}
         }}
  }
if(idc == 'r'){
var arr = [-1,0,1,0,0,-1,0,1];
for(i=0;i<8;i+=2){
res2 = idp.split('');
while(true){
res2[0] = Number(res2[0])+arr[i];
res2[1] = Number(res2[1])+arr[i+1];
if( res2[0]>0 && res2[0]<9 && res2[1]>0 && res2[1]<9 ){
cr = document.getElementById(String(res2[0])+String(res2[1])).childNodes;
 if( cr[0].id == 'pb' || cr[0].id == 'bb' || cr[0].id == 'rb' || cr[0].id == 'nb' || cr[0].id == 'qb' || cr[0].id == 'kb'){
     document.getElementById(String(res2[0])+String(res2[1])).style.background = 'red';
     cr[1].id = 5;break;}
 if( cr[0].id == 2){
     document.getElementById(String(res2[0])+String(res2[1])).style.background = 'green';
     cr[1].id = 5;}
 if( cr[0].id == 'p' || cr[0].id == 'b' || cr[0].id == 'r' || cr[0].id == 'n' || cr[0].id == 'q' || cr[0].id == 'k'){break;}
 }
else{break;}
         }}
  }
if(idc == 'k'){
var arr = [-1,1,-1,-1,1,-1,1,1,-1,0,1,0,0,-1,0,1];
for(i=0;i<16;i+=2){
res2 = idp.split('');
res2[0] = Number(res2[0])+arr[i];
res2[1] = Number(res2[1])+arr[i+1];
if( res2[0]>0 && res2[0]<9 && res2[1]>0 && res2[1]<9 ){
cr = document.getElementById(String(res2[0])+String(res2[1])).childNodes;
 if( cr[0].id == 'pb' || cr[0].id == 'bb' || cr[0].id == 'rb' || cr[0].id == 'nb' || cr[0].id == 'qb' || cr[0].id == 'kb'){
     document.getElementById(String(res2[0])+String(res2[1])).style.background = 'red';
     cr[1].id = 5;}
 if( cr[0].id == 2){
     document.getElementById(String(res2[0])+String(res2[1])).style.background = 'green';
     cr[1].id = 5;}
 }
         }
  }
}
function myfunc1(v1){
document.getElementById(v1).innerHTML = document.getElementById(r).innerHTML;
document.getElementById(r).innerHTML = '<p id=2 ></p><p id=2 ></p>';
}
function myfunc(v){
c = document.getElementById(v).childNodes;
if(s && susp){if( c[0].id == 'p' || c[0].id == 'b' || c[0].id == 'r' || c[0].id == 'n' || c[0].id == 'q' || c[0].id == 'k'){
movepiece(v,c[0].id);
r  = v; s = 0; }}
else{
s = 1;
cr1 = document.getElementById(v).childNodes;
if( cr1[1].id == 5 ){  
myfunc1(v);
changec();
document.getElementById('announcement').innerText = 'Waiting for the other Player';
$.ajax({
                    type: 'GET',
                    async: false ,
                    url: 'chesswin.php',
                    data: { p : r , q : v , t : 2 } ,
});
func1();
function func1() {
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            if (ajax.responseText == 'Successful') {
               $.ajax({
                    type: 'GET',
                    async: false ,
                    url: 'yeshtest1.php',
                    success: function(data1)
                    {
                        yeshe1 = data1;
                    }
});
                $.ajax({
                    type: 'GET',
                    async: false ,
                    url: 'yeshtest2.php',
                    success: function(data2)
                    {
                        document.getElementById(strspl(data2)).innerHTML = document.getElementById(strspl(yeshe1)).innerHTML ;
                        document.getElementById(strspl(yeshe1)).innerHTML = '<p id=2 ></p><p id=2 ></p>';
                    }
});
               document.getElementById('announcement').style.color = 'green'; 
               document.getElementById('announcement').innerText = 'It is your turn'; 
               susp = 1;
               cr2 = document.getElementById(yes1).childNodes;
               if(cr2[0].id != 'k'){window.location.href = 'blackwin.html';}
            }
            else{
                document.getElementById('announcement').style.color = 'red'; 
                document.getElementById('announcement').innerText = 'Waiting for other Player'; 
                susp = 0;
                func1();
             }
        }
    };
    ajax.open('GET', 'chesswin1.php?x=1', true); 
    ajax.send();
}}
changec();
}
}

</script>
</head> 
<body>
<table id='tab' align='center'>";
for( $x = 1; $x < 9; $x++ ){echo "<tr>";
$i = $x%2;
for( $y = 1 ; $y < 9 ; $y++ ){
$j = $y%2;
if($i){
$j = !($y%2);
}
$z = "$x"."$y";
echo "
<td ><button id= ";
echo $z;
echo " onclick='myfunc(this.id)'>";
if($x == 2){
echo "<img src='images/pawnb.png' id='pb' >";}
if($x == 7){
echo "<img src='images/pawn.png' id='p' >";
}
if($x == 1 || $x == 8){
if($y == 1 || $y == 8){echo "<img src='images/rook"; if($x == 1){echo "b";} echo ".png' ";if($x == 8){echo "id='r'";}else {echo "id='rb'";} echo ">";}
if($y == 2 || $y == 7){echo "<img src='images/knight"; if($x == 1){echo "b";} echo ".png' ";if($x == 8){echo "id='n'";}else {echo "id='nb'";} echo ">";}
if($y == 3 || $y == 6){echo "<img src='images/bishop"; if($x == 1){echo "b";} echo ".png' ";if($x == 8){echo "id='b'";}else {echo "id='bb'";} echo ">";}
if($y == 4 ){echo "<img src='images/queen"; if($x == 1){echo "b";} echo ".png' ";if($x == 8){echo "id='q'";}else {echo "id='qb'";} echo ">";}
if($y == 5){echo "<img src='images/king"; if($x == 1){echo "b";} echo ".png' ";if($x == 8){echo "id='k'";}else {echo "id='kb'";} echo ">";}
}
echo "<p id=2></p><p id=2></p></button></td>
";
if($j){
echo "<script>
document.getElementById(";
echo "$x"."$y";
echo ").style.background = '#0000FF' ;
</script>";
}
}
echo "</tr>";
}
echo "
</table>";

echo "
<h1 id='announcement'></h1>
</body>
</html>";
?>


