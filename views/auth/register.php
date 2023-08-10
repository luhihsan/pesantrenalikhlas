<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran siswa baru</title>
    <link rel="icon" type="image/png" href="../../assets/img/logo.png">
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/all.css">
    <style>
        .center {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -70%);
        }
        .btn-primary {
            box-shadow: 0 18px 40px -12px #007bff;
        }
        
        .input-group-text, .form-control, .btn-primary, .btn-success, .btn-danger {
            border-radius:20px;
        }
    </style>
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/bootstrap.js"></script>
</head>

<body class="bglogin">

<div class="col-md-3 mx-auto">
    <br>
    <h4 class="text-center mb-3">REGISTRASI</h4><br>
    <form action="../../controller/auth.php" method="POST">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" required>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" placeholder="Masukkan Email" name="email" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Masukkan Password" name="password" required>
        </div>
        <button type="submit" name="register" class="btn btn-primary btn-block mb-3">REGISTRASI</button>
        
        <div class="text-center">
            <a href="?login" class="btn btn-link btn-block mb-3">Login dengan akun yang sudah ada</a>
        </div>
    </form>
</div>


    
</body>

</html>