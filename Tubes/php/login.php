<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- --- Font Awesome --- -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <!-- --- My CSS --- -->
    <link rel="stylesheet" href="../assets/css/style.css" />

    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

    <title>NSO | Login</title>


</head>

<body>

    <div class="container-login">
        <div class="forms-container">
            <div class="signin-signup">

                <!-- Sign in -->
                <form action="#" class="sign-in-form">
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="#" id="#" placeholder="Usename">
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="text" name="#" id="#" placeholder="Password">
                    </div>

                    <input type="submit" value="Login" class="btn solid">

                    <p class="social-text">Or Sign in with social platforms</p>

                    <div class="social-media">
                        <a href="" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>

                        <a href="" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>

                        <a href="" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </form>

                <!-- Sign up -->

                <form action="#" class="sign-up-form">
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="#" id="#" placeholder="Usename">
                    </div>

                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" name="#" id="#" placeholder="Email">
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="text" name="#" id="#" placeholder="Password">
                    </div>

                    <input type="submit" value="Login" class="btn solid">

                    <p class="social-text">Or Sign in with social platforms</p>
                    <div class="social-media">
                        <a href="" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>

                        <a href="" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>

                        <a href="" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Sign up</h3>
                    <p>Not have account? Clik here to register.</p>
                    <button class="btn transparent" id="sign-up-btn">
                        Sign up
                    </button>
                </div>
                <img src="../assets/img/signin.png" alt="" class="image">
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>Sign in</h3>
                    <p>do you have account? Clik here to sign in.</p>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign up
                    </button>
                </div>
                <img src="../assets/img/signup.png" alt="" class="image">
            </div>
        </div>
    </div>

    <!-- --- Java Script --- -->
    <script src="../assets/js/login.js"></script>

</body>


</html>