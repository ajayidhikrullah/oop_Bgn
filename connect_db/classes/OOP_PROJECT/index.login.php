<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
            
        <h4>SIGNUP Please</h4>
        <p>dont have an account, pls sign up here</p>
        <form action="includes/signup.inc.php" method = "post">
            <input type="text" name = "uid" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwdrepeat" placeholder="Repeat Password">
            <input type="text" name ="email" placeholder="Please your email">
            <br>
            <button type = "submit" name="submit">Sign Up NOW</button>

        </form>
</div>


<div>
    <h4>LOGIN Please</h4>
    <p>You've got an account, okay, sign in here or login in</p>
    <form action="includes/login.inc.php" method ="post">
        <input type="text" name="uid" placeholder="your username goes here...">
        <input type="password" name = "pwd" placeholder="paswword goes in here...">
        <br>
        <button type = "submit" name ="submit">Login</button>
    </form>
</div>
</body>
</html>