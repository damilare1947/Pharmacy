<?php
define('server','localhost');
define('user','root');
define('password','');
$database="pharmacy";
$link=mysqli_connect(server,user,password);
mysqli_select_db($link, 'pharmacy') or die ("connection to database error:".mysqli_error());
$customer_id="";
$password="";
if(empty($_POST['customer_id']) || empty($_POST['password'])){
    echo "username/password is empty";
}else
{

    $customer_id=$_POST['customer_id'];
    $password=$_POST['password'];

    $sql="select * from customer where customer_id='$customer_id' and password='$password'";
    $result=mysqli_query($link,$sql);
    $row=mysqli_num_rows($result);
    if($row=mysqli_num_rows($result) >0){
        header("location:welcome.php");
    }else{
        $errmsg_arr[] = 'user name and password not found';
        $errflag = true;
            if($errflag) {
                $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
                session_write_close();
                header("location: /pharmacy/index.php");
                exit();
            }
        
    }
}