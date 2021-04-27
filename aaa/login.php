<?php 
//session_start — Démarre une nouvelle session ou reprend une session existante
session_start(); 
include("fonction_mysqli.inc.php");
$conn=connexion();

//test si les variables sont declares
if (isset($_POST['cin']) && isset($_POST['password']) && isset($_POST['name'])&& isset($_POST['adress'])&& isset($_POST['birth'])&& isset($_POST['program'])&& isset($_POST['genre'])) {

	# code...
	$cin = $_POST['cin'];
	$password = $_POST['password'];
	$name = $_POST['name'];
	$adress = $_POST['adress'];
	$birth = $_POST['birth'];
	$program = $_POST['program'];
	$genre = $_POST['genre'];

	$user_data = 'cin='. $cin. '&name='. $name;

	if (empty($cin)) {
		header("Location: signup.php?error=User CIN is required&$user_data");
	    exit();
	}else if(empty($password)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
		}else if(empty($name)){
			header("Location: signup.php?error=Name is required&$user_data");
		  exit();
		}else if(empty($adress)){
			header("Location: signup.php?error=Address is required&$user_data");
		  exit();
		}else if(empty($birth)){
			header("Location: signup.php?error=Birthday is required&$user_data");
		  exit();
		}else if(empty($program)){
			header("Location: signup.php?error=Program is required&$user_data");
		  exit();
		}else if(empty($genre)){
			header("Location: signup.php?error=Sexe is required&$user_data");
		  exit();
		
	}else{
		$password = md5($password);
		$sql="SELECT * FROM users WHERE name='$name' AND cin='$cin'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_fetch_array($result))
		{ echo "Vous êtes déja inscrit&$user_data";
		}
	   if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=The name is taken try another&$user_data");
			exit();
			}else {
			$sql2 = "INSERT INTO users(cin, password , name, adress , birth , program , genre) VALUES('$cin','$password','$name','$adress','$birth','$program','$genre')";
			$result2 = mysqli_query($conn, $sql2);
			if ($result2) {
			header("Location: signup.php?success=Your account has been created successfully");
			echo "<script>alert(\"Your account has been created successfully\")</script>";
			exit();
			}else {
			header("Location: signup.php?error=unknown error occurred&$user_data");
			exit();
			}
			}
			}
			}else{
			header("Location: signup.php");
			exit();
			}

  mysqli_close($conn);
?>
