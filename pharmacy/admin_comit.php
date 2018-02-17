<?php
define('server','localhost');
define('user','root');
define('password','');
$link=mysqli_connect(server,user,password);
$database="pharmacy";
mysqli_select_db($link,$database) or die ("connection error:".mysqli_error());
$admin_ID="";
$password="";
if(empty($_POST['admin_ID'] ) || (empty($_POST['admin_ID'])) ){
  echo "username/password is empty";
}else{
    $admin_ID=$_POST['admin_ID'];
    $password=$_POST['password'];
    $sql="select * from admin where admin_ID='$admin_ID' and password='$password'";
    $result=mysqli_query($link,$sql);
    $row=mysqli_num_rows($result);
    if($row=mysqli_num_rows($result)>0){
    header("location:admin_dashboard.php");
    }
      else{
        $errmsg_arr[] = 'user name and password not found';
        $errflag = true;
            if($errflag) {
                $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
                session_write_close();
                header("location:admin.php");
                exit();
      }
    }

}

mysqli_close($link);
?>