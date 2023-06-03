<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login and Registration</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="wrapper">
        <div class="form-wrapper sign-in">
            <form action="">
                <h2>Sign In</h2>

                <div class="input-group">
                    <input type="text" required>
                    <label for="">Username</label>
                </div>

                <div class="input-group">
                    <input type="password" required>
                    <label for="">Password</label>
                </div>

                <div class="remember">
                    <label for=""><input type="checkbox">Remember me</label>
                </div>

                <button type="submit">Sign In</button>

                <div class="signUp-link">
                    <p>Don't have an account?<a href="#" class="signUpBtn-link">Sign Up</a></p>
                </div>
            </form>
        </div>


    <!-- Registration -->
        <div class="form-wrapper sign-up">
            <form action="">
                <h2>Sign Up</h2>

                <div class="input-group">
                    <input type="text" required>
                    <label for="">Username</label>
                </div>

                <div class="input-group">
                    <input type="email" required>
                    <label for="">Email</label>
                </div>


                <div class="input-group">
                    <input type="password" required>
                    <label for="">Password</label>
                </div>

                <!-- <div class="input-group">
                    <input type="password" required>
                    <label for="">C.Password</label>
                </div> -->

                <div class="remember">
                    <label for=""><input type="checkbox">I agree to the terms & conditions</label>
                </div>

                <button type="submit">Sign Up</button>

                <div class="signUp-link">
                    <p>Already have an account?<a href="#" class="signInBtn-link">Sign In</a></p>
                </div>
            </form>
        </div>

    </div>

    
    <script src="script.js"></script>

</body>
</html>