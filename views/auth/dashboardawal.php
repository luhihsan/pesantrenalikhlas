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
        .btnmsk {    
            margin-top: 1rem;
            display: inline-block;
            padding: 0.5rem 0rem 0.5rem;
            font-size: 1.2rem;
            color: #fff;
            background: black;
            cursor: pointer;
            border-radius: 50px;
            }
            .btnkiri{
                transform: translate(0%, -20%);
            }
            .btnkanan{
                transform: translate(110%, -140%);
            }
            .btntengah {
                transform: translate(0%, -110%);    
            }
        .bglogin {
            background-image: url("../../assets/img/bgsantren3.jpg");
            background-size: cover;
            
        }
        .bglogin::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
           
        }
        .col-3 {
            transform: translate(1050px, 100px);
        }
        .col-2 {
            transform: translate(100px, 300px);
        }
        .TitlePesantren {
           margin-right: -500px;
           /* font-family: "Roboto", sans-serif; */
           text-transform:capitalize;
           font-style:bold;
           text-shadow: 2px 2px 4px black;
           color: white;
           
           font-size: 3rem;
    text-transform: uppercase;
    color: rgb(255, 255, 255);
        }
        .input-group-text, .form-control, .btn-success, .btn-danger {
            border-radius:20px;
        }
       

    </style>
</head>
<body class="bglogin">
    <div class="col-2">
    <h1 class="TitlePesantren">PESANTREN <BR>AL - IKHLAS YOGYAKARTA</h4><br>
    
    
        <div class="text-center">
                <a href="login.php" class="btnmsk btn-block btnkiri">Login</a>
                <a href="register.php" class="btnmsk btn-block btnkanan">Register</a>
                <a href="login-admin.php" class="btnmsk btn-block btntengah">Login as Admin</a>
            </div>
    

    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/bootstrap.js"></script>
</body>

</html>