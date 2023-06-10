<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Registrasi</title>
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

        .form-group {
            margin-bottom: 20px;
        }

        .btn-register {
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
        <div class="card-header text-center">Register</div>
        <div class="card-body">
            <form action="<?php echo site_url('Home/prosesdaftar') ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="label">Username</label>
                    <input type="text" class="form-control" name="username" required>
                </div>
                <div class="form-group">
                    <label class="label">Password</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <div class="form-group">
                    <label>Profile Picture</label>
                    <input type="file" class="form-control" name="gambar" required>
                </div>
                <br>
                <div>
                    <input type="submit" class="btn btn-primary btn-register" value="Register">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
