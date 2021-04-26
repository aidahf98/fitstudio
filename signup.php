<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP</title>
</head>
<body>
    <form action="signup-check.php" method="post">
    <label for="name"> Name:</label>
    <input type="text" name="name" id="name" placeholder="name" required><br>
    <label for="uname">User name:</label>
    <input type="text" name="uname" id="uname" placeholder="user name" required><br>
    <label for="pwd">Password:</label>
    <input type="password" name="pwd" id="pwd" placeholder="password" required><br>
    <label for="re_pwd">Re Password</label>
    <input type="password" name="re_pwd" id="re_pwd" placeholder="re password" required><br>
    <button type="submit">Sign up</button>
    <a href="index.php" class="ca">Already have an account</a>
    
    
    
    
    </form>
</body>
</html>