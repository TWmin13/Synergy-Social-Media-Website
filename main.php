<!DOCTYPE html>
<html>
<head>
    <title>Synergy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            overflow: hidden; /* Hide overflow */
        }
        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 600px; /* Maximum width of content */
            padding: 30px;
            border-radius: 10px; /* Rounded corners */
            background-color: rgba(0, 0, 0, 0.8); /* Translucent black background */
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5); /* Box shadow for depth */
            color: #fff; /* Text color */
        }
        .social-logo {
            width: 200px; /* Adjust the logo size */
            margin-bottom: 20px;
        }
        .feature-text {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .join-text {
            font-size: 18px;
            margin-top: 30px;
        }
        .btn-primary {
            background-color: #007bff; /* Button color */
            border-color: #007bff;
            margin-right: 10px;
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Button color on hover */
            border-color: #0056b3;
        }
        .signup-text {
            margin-top: 20px;
        }
        .bg-image {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1; /* Ensure the image stays behind other content */
            opacity: 0.5; /* Translucent effect */
            animation: moveBackground 20s linear infinite; /* Animation for moving background */
        }
        @keyframes moveBackground {
            0% {
                transform: translateZ(0);
            }
            100% {
                transform: translateZ(-100%);
            }
        }
    </style>
</head>
<body>
    <img src="bgi.png" class="bg-image" alt="Background Image">
    <div class="container text-center">
        <img src="social_logo.jpg" class="social-logo" alt="Soci@l Logo">
        <h1>Welcome to Synergy!</h1>
        <p class="lead">Connect with friends and the world around you.</p>
        <div class="row">
            <div class="col-md-4">
                <h3 class="feature-text"><i class="fas fa-search"></i> Follow Your Interests</h3>
            </div>
            <div class="col-md-4">
                <h3 class="feature-text"><i class="fas fa-comments"></i> Engage in Conversations</h3>
            </div>
            <div class="col-md-4">
                <h3 class="feature-text"><i class="fas fa-users"></i> Join the Conversation</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="join-text">See what's happening in the world right now. Join Synergy today!</p>
                <form method="post" action="register.php" style="display: inline;">
                    <button type="submit" name="signup" class="btn btn-primary btn-lg">Sign Up</button>
                </form>
                <form method="post" action="register.php" style="display: inline;">
                    <button type="submit" name="login" class="btn btn-primary btn-lg">Login</button>
                </form>
                <p class="signup-text">Don't have an account? <a href="register.php" style="color: #fff;">Sign Up</a></p>
            </div>
        </div>
    </div>
    <?php
    if(isset($_POST['login'])) {
        echo "<script>window.open('register.php', '_self')</script>";
    }
    if(isset($_POST['signup'])) {
        echo "<script>window.open('register.php', '_self')</script>";
    }
    ?>
</body>
</html>
