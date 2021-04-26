<?php
session_start();
include("fonction_mysql.inc.php");
$conn=connexion();
if (isset($_POST['uname']) && isset ($_POST['pwd'])) {
    # code...
    $uname = $_POST['uname'];
    $pass = $_POST['pwd'];
    if (empty($uname)) {
        # code...
        header("Location : index.php?error = User name is required");
        exit();
    } else if (empty($pass)) {
            # code...
            header("Location : index.php?error= Password is required");
            exit();
    }
         else {
            # code...
            $pass = md5($pass);
            $sql = "SELECT * FROM users WHERE user_name=$uname AND $pwd='$pass'";
            $result= mysqli_query($conn , $sql);

            if (mysqli_num_rows($result)===1) {
                # code...
                $row=mysqli_fetch_assoc($result);
                if ($row['user_name']=== $uname && $row['password']===$pass) 
                {
                    # code...
                    $_SESSION['user_name']=$row['user_name'];
                    $_SESSION['name']=$row['name'];
                    $_SESSION['id']=$row['id'];
                    header("Location : home.php");
                    exit();
                } else {
                    # code...
                    header("Location : index.php ? error= Incorrect user name or password");
                    exit();
                     }
                }else{
                # code...
                header("Location : index.php ? error= Incorrect user name or password");
                exit();
                      }
             }
            }else {
                # code...
                header('Location : index.php');
    }
