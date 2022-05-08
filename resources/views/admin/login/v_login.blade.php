<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{asset('template/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/dist/css/adminlte.min.css?v=3.2.0')}}">
</head>
<body class="hold-transition login-page">

    <style>
        .login-page {
        background-image: url('tempassetlanding/assets/img/riki.jpg');
        background-size:100% !important;
    }
        </style>
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="../../index2.html" class="h4"><b>PORTOFOLIO</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <form action="../../index3.html" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                           
                        </div>

                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>

                    </div>
                </form>
                
                <p class="mb-0">
                    <a href="/register" class="text-center">Register a new account</a>
                </p>
            </div>

        </div>

    </div>


    <script src="{{asset('template/plugins/jquery/jquery.min.js')}}"></script>

    <script src="{{asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('template/dist/js/adminlte.min.js?v=3.2.0')}}"></script>
</body>

</html>
