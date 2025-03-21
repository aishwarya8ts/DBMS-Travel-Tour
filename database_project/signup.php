<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tours and Travel Management - Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="bodylog">
        <section class="signup">
            <div class="signup-container">
                <h2 id="signup-header" style="color:blueviolet">Tours and Travel Management</h2>
                <h3 id="signup-subheader" style="color:pink">Create your account</h3>
                <div class="input1">
                    <form action="login.php" method="POST">
                        <div class="input-box1">
                            <input type="text" name="username" id="username" placeholder="Username" required>
                        </div>
                        <div class="input-box1">
                            <input type="email" name="email" id="email" placeholder="Email" required>
                        </div>
                        <div class="input-box1">
                            <input type="password" name="password" id="password" placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn1">Sign Up</button>
                    </form>
                    <p id="signup-login">Already have an account? <a href="login.php">Login</a></p>
                </div>
            </div>
        </section>
    </div>
</body>

</html>