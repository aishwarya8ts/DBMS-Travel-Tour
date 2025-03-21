<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tours and Travel Management - Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="login">
        <div class="login-container">
            <h2 id="login-header">Tours and Travel Management</h2>
            <h3 id="login-subheader">Login to your account</h3>
            <form action="home.php" method="POST">
                <div class="input-box">
                    <input type="text" name="username" id="username" placeholder="Username" required>
                </div>
                <div class="input-box">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn1">Login</button>
            </form>
            <p id="login-signup">Don't have an account? <a href="signup.php">Sign Up</a></p>
        </div>
    </section>
</body>

</html>