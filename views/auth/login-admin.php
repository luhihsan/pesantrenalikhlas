<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesantren Al - Ikhlas Yogyakarta</title>
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
        /* .bglogin {
            background-image: url("../../assets/img/bgsantren2.jpg");
            background-size: cover;
        } */
        /* .bglogin::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            backdrop-filter: blur(3.5px); 
        } */
    </style>
</head>

<body class="bglogin">
<div class="col-md-4 mx-auto">
    <br>
    <h4 class="text-center mb-3">LOGIN SEBAGAI ADMIN</h4>
        <form action="../../controller/auth-admin.php" method="POST">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class=" fa fa-user"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="masukkan email" name="email"
                    aria-label="email" aria-describedby="basic-addon1" required="true">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class=" fa fa-key"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="masukkan password" name="password"
                    aria-label="password" aria-describedby="basic-addon1" required="true">
            </div>
            
                <button type="submit" name="login" class="btn btn-primary btn-block mb-3">MASUK</button>
                <div class="text-center justify-content-center">
            <a href="dashboardawal.php" class="btn btn-success btn-block mb-3" style="margin-bottom: 10px;">Back to dashboard</a><br>
             </div>
        </form>
</div>
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/bootstrap.js"></script>
</body>

</html>