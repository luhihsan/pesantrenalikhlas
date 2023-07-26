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
        /* Tambahkan CSS berikut untuk mengatur tata letak halaman */
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            margin: 0;
            /* background-image: url("../../assets/img/bgsantren2.jpg"); */
            background-size: cover;
        }

        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .center {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 20px;
            /* box-shadow: 0 18px 40px -12px #007bff; */
            
            /* Tambahkan CSS flexbox untuk mengatur posisi form login ke kiri pojok */
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .btn-primary {
            box-shadow: 0 18px 40px -12px #007bff;
        }

        .bglogin {
            /* background-image: url("../../assets/img/bgsantren2.jpg");
            background-size: cover; */
        }

        /* ... Kode CSS lainnya ... */
    </style>
</head>

<body class="bglogin">
    <div class="container">
        <div class="row">
            <!-- Hapus class "col-md-6 offset-md-3" dari div ini -->
            <div class="center">
                <h2 class="text-center mb-3">LOGIN</h2><br>
                <form action="../../controller/auth.php" method="POST">
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
                    <div class="text-center">
                        <button type="submit" name="login" class="btn btn-primary btn-block mb-3">MASUK</button>
                    </div>
                    <div class="text-right justify-content-center">
                        <a href="dashboardawal.php" class="btn btn-success btn-block mb-2" style="margin-bottom: 10px;">Back to dashboard</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/bootstrap.js"></script>
</body>

</html>
