<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .login-page {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: linear-gradient(135deg, #c850c0, #4158d0);
            background-size: 400% 400%;
            animation: gradientBg 10s ease infinite;
        }

        @keyframes gradientBg {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .card {
            width: 300px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            
            color: #000;
            font-weight: bold;
        }

        .card-body {
            padding: 20px;
        }

        .form-control {
            margin-bottom: 10px;
        }

        .btn-login {
            width: 100%;
        }

        .card-footer {
            background-color: #fff;
            border-top: 1px solid #eee;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body class="login-page">
    <div class="card">
        <div class="card-header text-center">Login</div>
        <div class="card-body">
            <form action="<?php echo site_url('Home/login');?>" method="post">
                <label for="username" class="label">Username</label>
                <input type="text" class="form-control" name="username" required>
                <label for="password" class="label">Password</label>
                <input type="password" class="form-control" name="password" required>
                <br>
                <?php echo $this->session->userdata("error");?>
                <br>
                <input type="submit" class="btn btn-primary btn-login" value="Login">
        </div>
        </form>
        <div class="card-footer">
            Tidak Punya Akun?
            <br><a href="<?php echo site_url('Home/register') ?>">Register</a>
        </div>
    </div>
</body>
</html>
