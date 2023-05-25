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

<body class="body2">
    <!--header-->
    <nav>
        <div class="navbar-2">
            <img src="./images/Red Minimalist Internet Logo.png" alt="Logo">
            <a class="navbar-1" href="index.html">TeleComm Nig. LTD.</a>
            <ul>
                <li><a href="index.html" class="navbar-22">Home</a></li>
                <li><a href="signup.php" class="navbar-22">Sign Up</a></li>
                <li><a href="signin.php" class="navbar-22" id="signinpage">Log In</a></li>
            </ul>
        </div>
    </nav>
    <section id="section_1">
        <h1>Log In</h1>
        <form action="./database/dbh.php" method="post" class="form1">
            <input type="tel" name="phone_number" placeholder="Phone Number" id="input" /><br>
            <input type="password" name="password" placeholder="Password" id="password" required />
            <img src="./images/eye-close.png" alt="Image-Eye" id="eyeicon" class="eyeicon2"><br>
            <button type="submit" id="button">Submit</button>
        </form>

        <p id="query">Don't have an account? <a href="signup.php">Sign Up</a></p>
        <p id="copyright">All rights reserved (c) 2023</p>
    </section>
    <script src="app.js"></script>
</body>

</html>