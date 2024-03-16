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
            max-width: 90%;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        .alert {
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        .form-label {
            margin-bottom: 10px;
            color: #666;
            font-weight: bold;
        }

        .form-control {
            margin-bottom: 20px;
            border-color: #ccc;
        }

        .btn-success {
            width: 100%;
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>OTP</h1>
        <div class="alert alert-primary" role="alert">
            <?php
            if(isset($_REQUEST['msg'])) {
                echo $_REQUEST['msg'];
            }
            ?>
        </div>
        <form action="login.php" method="post">
            <label for="user_otp" class="form-label">Enter OTP</label>
            <input type="number" class="form-control" name="user_otp" id="user_otp" placeholder="5 Digits OTP" required>
            <button type="submit" class="btn btn-success">Verify OTP</button>
        </form>
    </div>
</body>
</html>
