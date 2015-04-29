<?php
    require_once(__DIR__ . "/../model/config.php");
?>

<html>

<body>
<h1>Login</h1>

<form method="POST" action="<?php echo $path . "controller/login-user.php"; ?>">
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username"/>
    </div>
    
    <div>
        <label for="password">Password: </label>
        <input type="password" name="password"/>
    </div>
    
    <div>
        <input type="hidden" name="login" value="login" />
        <button class="buhtton" type="submit">Submit</button>
    </div>
</form>

</body>
</html>
