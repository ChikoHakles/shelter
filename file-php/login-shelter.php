<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>LOGIN SHELTER</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style/login-shelter.css" >
</head>
    <body>
    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <!-- <img id="ikon-login" src="t-pose-senko.png"> -->
                <h2>LOGIN SHELTER </h2>
                <div class="underline-title"></div>
            </div>
            <form method="post" class="form" action="input-login-shelter.php">
                <label for="username" style="padding-top:13px">
                    &nbsp;Username
                </label>
                <input id="username" class="form-content" type="text" name="username" autocomplete="on" required />
                <div class="form-border"></div>
            
                <label for="pass1" style="padding-top:22px">
                    &nbsp;Password
                </label>
                <input id="user-password" class="form-content" type="password" name="pass1" required />
                <div class="form-border"></div>
                
                <!-- <a href="#">
                    <legend id="forgot-pass">Forgot password?</legend>
                </a> -->
                
                <input id="submit-btn" type="submit" name="submit" value="LOGIN" />
            
                <a href="register-shelter.php" id="signup">DAFTAR DISINI</a>
            </form>
        </div>
    </div>
</body>
</html>

