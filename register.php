<?php session_start();
include ('connection.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/unsemantic-grid-responsive-tablet.css">
    <link rel="stylesheet" href="css/style_re.css">

    <title>online storage registration</title>
</head>

<body class="grid-container">
        <div class="grid-100">
            <header class="header1">
                <div class="logo">
                    <img src="#">
                </div>

                <div>
                    <h1>Online Storage</h1>
                </div>


            </header>
        </div>
        <div id="title">
            <h2>Welcome to Online Storage Registration Page</h2>
        </div>
        <main  class="grid-container">
        <div class="grid-95">
            <div  class="login-box-re">
                <form  class="" method="post" action="registration.php">
                    <h2>Registration Form</h2>

                    <?php include('errors.php'); ?>
                    <div class="input-box">
                        <input type="text" name="first" placeholder="first name" required>
                        <label>first name</label>
                    </div>
                    <div class="input-box">
                        <input type="text" name="last" placeholder="last name" required>
                        <label>last name</label>
                    </div>
                    <div class="input-box">
                        <input type="text" name="username" placeholder="username" required>
                        <label>username</label>
                    </div>
                    <div class="input-box">
                        <input type="email" name="email" placeholder="email" required>
                        <label>Email Address</label>
                    </div>
                    <div class="input-box">
                        <input type="password" name="password" placeholder="password" required>
                        <label>password</label>
                    </div>
                    <div class="input-box">
                        <input type="password" name="password_con" placeholder="confirm password" required>
                        <label>confirm password </label>
                    </div>

                        <button class="login-box-btn" type="submit" name="register">Sign up</button>

                    <p>click <a href="login.php">Here</a> to login if you are already a customer</p>
                </form>

            </div>
        </div>
    </main >

</body>
</html>