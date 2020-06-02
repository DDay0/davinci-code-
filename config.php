<?php

$servername='localhost';    
$dbusername='root';                
$dbpassword='';               
$dbname='ctf_prankster';     

connecttodb($servername,$dbname,$dbusername,$dbpassword);
function connecttodb($servername,$dbname,$dbusername,$dbpassword)
{
  global $link;
  $link=mysql_connect ("$servername","$dbusername","$dbpassword");
  if(!$link){die("Ne mogu se spojiti na MySQL");}
  mysql_select_db("$dbname",$link) or die ("Ne mogu otvoriti bazu podataka".mysql_error());
}
?>