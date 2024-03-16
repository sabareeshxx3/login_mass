<?php
session_start();
include("dbconnect.php"); // Assuming this file contains database connection code
include("email.php"); // Assuming this file contains the send_otp() function

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: index.php"); // Redirect to the login page if not logged in
    exit();
}

// Get the current date and time
$currentDateTime = date("Y-m-d H:i:s");

// Get the user's email from the session
$email = $_SESSION['email'];

// Query to insert the user's email and login time into the database
$sql = "INSERT INTO logins (user_email, login_time) VALUES ('$email', '$currentDateTime')";
$result = mysqli_query($con, $sql) or die(mysqli_error($con));

if ($result) {
    // Successfully inserted the login time into the database
} else {
    // Failed to insert the login time into the database
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 40px;
            max-width: 600px;
            width: 100%;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #007bff;
        }

        .alert {
            margin-bottom: 20px;
        }

        p {
            text-align: center;
            margin-bottom: 0;
        }

        .logout-link {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }

        .logout-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">  
        <h1>Welcome to the Dashboard</h1>
        <div class="alert alert-primary" role="alert">
            <?php
                if(isset($_REQUEST['msg'])) {
                    echo $_REQUEST['msg'];
                }
            ?>
            <a href="logout.php?act=logout" class="logout-link">Logout</a>
        </div>
        <p>Login Time: <?php echo $currentDateTime; ?></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
