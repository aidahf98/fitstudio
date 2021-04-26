<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <form action="login.php" method="post">
      <h3>LOGIN</h3><br>
      <label for="uname">User Name</label>
      <input type="text" name="uname" id="uname" placeholder="user name" required><br>
      <label for="pwd">User Password</label>
      <input type="password" name="pwd" id="pwd" placeholder="password" required><br>
      <button type="submit">LOGIN</button><br>
      <a href="signup.php" class="ca">Create an account</a>
    
    </form>
</body>
</html>