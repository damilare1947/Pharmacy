<?php
define('server','localhost');
define('user','root');
define('password','');
$database="pharmacy";
$link=mysqli_connect(server,user,password);
mysqli_select_db($link,$database) or die ("connection error:".mysqli_error());
$name="";
$manufacturer="";
$price="";
$status="";
if(isset($_POST['add'])){
  $name=$_POST['name'];
  $manufacturer=$_POST['manufacturer'];
  $price=$_POST['price'];
  $status=$_POST['status'];
  $sql="insert into drug (name,manufacturer,price,status) values('$name','$manufacturer','$price','$status')";
  $result=mysqli_query($link,$sql);
  if($result){
    echo "record inserted successfully";
  }else{
    echo "record not inserted successfully";
  }

}
if(isset($_POST['delete'])){
  $name=$_POST['name'];
  $manufacturer=$_POST['manufacturer'];
  $price=$_POST['price'];
  $status=$_POST['status'];
  $sql="delete from drug where name ='$name'";
  $result=mysqli_query($link,$sql);
  if($result){
    echo "record deleted successfully";
  }else{
    echo "record not deleted successfully";
  }

}
if(isset($_POST['update'])){
  $name=$_POST['name'];
  $manufacturer=$_POST['manufacturer'];
  $price=$_POST['price'];
  $status=$_POST['status'];
  $sql="update drug set manufacturer='$manufacturer', price='$price', status='$status' where name='$name'";
  $result=mysqli_query($link,$sql);
  if($result){
    echo "record updated successfully";
  }else{
    echo "record not updated successfully";
  }

}


?>
<!Doctype html>
<html lang="en-us">
  <head>
    <meta charset="utf-8"/>
    <title>Admin</title>
    <link rel="stylesheet" href="/pharmacy/css/default.css" type="text/css"/>
  </head>
  <body>
    <div id="wrapper">
      <header>
        <div id="header"></div>
        <nav>
          <ul>
            <a href="/pharmacy/index.php"><li>HOME</li></a>
            <a href=""><li>ABOUT US</li></a>
            <a href=""><li>CONTACT US</li></a>
          </ul>
        </nav>
      </header>
      <section>
        <h2 style="text-align:center; color:deeppink">Add/Update/Delete drugs</h2>
      <form action="add_drugs.php" method="post">
        <div id="formtext">Drug Name:</div>
        <input class="formbox" type="text" size="30" name="name" value=""><br></br>
        <div id="formtext">Drug Manufacturer:</div>
        <input class="formbox" type="text" size="30" name="manufacturer" value="" ><br></br>
        <div id="formtext">Price:</div>
        <input class="formbox" type="text" size="30" name="price" value="" ><br></br>
        <div id="formtext"> Status:</div>
        <input class="formbox" type="text" size="30" name="status" value="" ><br></br>
        
        <input  type="submit" name="add" value="Add"/>
        <input  type="submit" name="delete" value="Delete"/>
        <input  type="submit" name="update" value="Update"/>
        <input  type="reset" value="Clear form"/>
      
      </form>
      </section>
    </div>
  </body>
</html>
