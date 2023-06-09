<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeleComm Nig. LTD.</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.goog-leapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body class="body1">
    <!--header-->
    <nav>
        <div class="navbar-2">
            <img src="./images/Red Minimalist Internet Logo.png" alt="Logo">
            <a class="navbar-1" href="index.html">TeleComm Nig. LTD.</a>
            <ul>
                <li><a href="index.html" class="navbar-22">Home</a></li>
                <li><a href="signup.html" class="navbar-22" id="signuppage">Sign Up</a></li>
                <li><a href="signin.php" class="navbar-22">Log In</a></li>
            </ul>
        </div>
    </nav>
    <section id="section_2">
        <h2 id="createacc">Create a new account, Sign up.</h2>
        <div class="box">
            <form action="./database/dbi.php" method="post">
                <div class="form1">
                <input type="text" name="customer_name" placeholder="Full Name" id="input" required/><br>
                <input type="tel" name="phone_number" size="13" placeholder="Phone Number" id="input" required/><br>
                <input type="email" name="email" placeholder="Email Address" id="input" required/><br><br>
                <p style="font-size: x-small; position: absolute; top: 27.7rem; right: 64rem;">Date of Birth</p><input type="date" name="dateofbirth" id="input" required/><br>
                <input type="password" name="password" placeholder="Password" id="password" required/>
                <img src="./images/eye-close.png" alt="Image-Eye" id="eyeicon" class="eyeicon"><br>
                </div>
                <input type="submit" value="Submit" name="" id="button">
            </form>

            <p id="query">Already have an account?<a href="signin.php">Login</a></p>
            <p id="copyright">All rights reserved (c) 2023</p>
        </div>

    </section>

    <script src="app.js"></script>
</body>

</html>