<head>
    <title>Login</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="web login dan register.css">
</head>
<body>
    <div class="kotak">
        <h1>Login</h1>
        <br><hr><br>
        <form action="aksi_login.php" method="POST">
            <input name="user" class="blok1" placeholder="Username" autocomplete="off" required>
            <input name="pass" class="blok1" type="password" placeholder="Password" required>
            <hr>
            <input class="blok1" type="Submit" value="Sign in">
        </form>
        <a href="signup.php"><h4>Sign up?</h4></a>
              
         
    </div>
</body>