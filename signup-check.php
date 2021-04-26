<?php
session_start();
include('fonction_mysql.inc.php');
$conn=connexion();

if (isset($_POST['uname']) && isset($_POST['name']) && isset($_POST['pwd'])&& isset($_POST['re_pwd'])) {

    # code...
    $uname = $_POST['uname'];
    $name = $_POST['name'];
    $pass = $_POST['pwd'];
    $re_pass = $_POST['re_pwd'];

    $user_data = 'uname='. $uname . 'name=' . $name ;


    if (empty($uname)) {
        header("Location : signup.php?error=User name is required &$user_data");
        exit();
    } elseif (empty($name)) {
        # code...
        header("Location : signup.php?error= Name is required &$uer_data");
        exit();
    }elseif (empty($pass)) {
        header("Location:signup.php?erro=Password is required &$user_data");
        exit();
    } elseif (empty($re_pass)) {
        header("Location:signup.php?error=Confirmation password does not match! &$user_data");
        exit();
    }
    else {
        $pass = md5($pass);
        $sql = "SELECT * FROM users WHERE user_name ='$uname' " ;
        $result=mysqli_query($conn,$sql);
        if (mysqli_num_rows($result>0)) {
            # code...
            header("Location:signup.php?error= The user name is taken try another &$user_data");
            exit();
        }else {
            # code...
            $sql2="INSERT INTO users(user_name , name , pwd) values('$uname' , '$name','$pass')";
            $result2= mysqli_query($conn , $sql2);
            if ($result2) {
                # code...
                header("Location:signup.php?success=Your account has been created successfully!");
                exit();
            }else {
                # code...
                header("Location:signup.php?error=Unknow error occurred&$user_data");
                exit();
            }
        }
    }
} else {
    # code...
    header("Location:signup.php");
    exit();
}