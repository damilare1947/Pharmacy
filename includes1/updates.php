<?php 
$servername="localhost";
$username="root";
$password="";

$link=mysql_connect('localhost','root','') or die (mysql_error());
mysql_select_db("pharmacy") or die (mysql_error());
$query = "SELECT * FROM drug";
$result = mysql_query($query,$link)
or die(mysql_error());
$num_supp_name = mysql_num_rows($result);


?>
<!doctype html>
<HTML>
    <head>
        <link rel="stylesheet" href="/pharmacy/css/default.css" type="text/css"/>
        <style>
        li{ 
            list-style: none;
             padding:3px;    
        }
        a{
  text-decoration:none;
}
a:visited{
  color:white;
}
a:hover{
  color:yellow;
}
        </style>
    </head>
<!-- Updates and News Box for our site -->
<li id="news">
    <h2 style="color:navy"><u>Updates</u></h2>
    <ul>
        <li> 
            <p><a href="/pharmacy/pharmacy/drugs1.php"><?php echo "Please click to <b>check drugs</b>  in
            our store."; ?></a></p>
        </li>

</html>