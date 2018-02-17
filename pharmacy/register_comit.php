<?php
define('server','localhost');
define('user','root');
define('password','');
define('dbname','pharmacy');
$dbname="pharmacy";
$link=mysqli_connect(server,user,password) or die(mysqli_error());
mysqli_select_db($link,$dbname) or die("connection error".mysqli_error());
$customer_id="";
$firstname="";
$lastname="";
$password="";
$sex="";
$address="";
$phone_no="";
$email="";
if( empty($_POST['customer_id']) || empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['password']) || empty($_POST['sex']) || empty($_POST['address']) || empty($_POST['phone_no']) || empty($_POST['email'])){
  echo "please fill in the empty boxes";
}else{
  $customer_id=$_POST['customer_id'];
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $password=$_POST['password'];
  $sex=$_POST['sex'];
  $address=$_POST['address'];
  $phone_no=$_POST['phone_no'];
  $email=$_POST['email'];

  $sql="  select * from customer where customer_id='$customer_id'";
  $result=mysqli_query($link,$sql);
  $row=mysqli_num_rows($result);
    if($row=mysqli_num_rows($result)>0){
      echo "record already exist";
    }else{

    $sql="insert into customer(customer_id,firstname,lastname,password,sex,address,phone_no,email) VALUES ('$customer_id','$firstname','$lastname','$password','$sex','$address','$phone_no','$email')";
    $result=mysqli_query($link,$sql);
     if($result){
    echo "customer created successfully";
    }else{
      echo "customer not created successfully";
    }
  }

}
?>
