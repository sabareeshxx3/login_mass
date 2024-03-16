<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Login Demo</title>
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
            width: 400px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .alert {
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        .form-label {
            margin-bottom: 5px;
        }

        .form-control {
            margin-bottom: 15px;
        }

        .btn-success {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>LOGIN</h1>
        <div class="alert alert-primary" role="alert">
            <?php
            if(isset($_REQUEST['msg']))
                echo $_REQUEST['msg'];
            ?>
        </div>
        <form action="send_otp.php" method="post">
            <div class="mb-3">
                <label for="user_name" class="form-label">Enter Username</label>
                <input type="text" class="form-control" name="user_name" id="user_name" placeholder="Enter your username">
            </div>
            <div class="mb-3">
                <label for="user_email" class="form-label">Enter Email</label>
                <input type="email" class="form-control" name="user_email" id="user_email" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Send OTP</button>
            </div>
        </form>
    </div>
</body>
</html>
