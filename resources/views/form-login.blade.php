<!-- <link href="/sb-admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="/sb-admin/css/sb-admin-2.min.css" rel="stylesheet">

<form action="{{ route("proses_login") }}" method="post">
 @csrf

 <div class="col-lg-6">
    <div class="p-5">
        <center><h3>LOGIN</h3></center>
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control form-control-user" placeholder="Masukkan username ..." required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control form-control-user" placeholder="Masukkan password ..." required>
        </div>
        <div class="form-group">
            <label>Level</label>
            <select name="level" class="form-control form-control-user" required>
                      <option value="">Pilih Level</option>
                      <option value="Admin">Admin</option>
                      <option value="User">User</option>
            </select>
        </div>
        <button class="btn btn-info btn-user btn-block" type="submit">Log In</button>
    </div>
</div>

</form> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | WEB PINANGGIH</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="login/dist/vendor/bootstrap-4.5.3/css/bootstrap.min.css" type="text/css">
    <!-- Material design icons -->
    <link rel="stylesheet" href="login/dist/icons/material-design-icons/css/mdi.min.css" type="text/css">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <!-- Latform styles -->
    <link rel="stylesheet" href="login/dist/css/latform-style-6.min.css" type="text/css">
</head>
<body>
<form action="{{ route("proses_login") }}" method="post">
 @csrf
<div class="form-shape-wrapper">
    <div class="form-shape">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 185.4">
            <path fill="red" d="M3000,0v185.4H0V0c496.4,115.6,996.4,173.4,1500,173.4S2503.6,115.6,3000,0z"></path>
        </svg>
    </div>
</div>
<div class="form-wrapper">
    <div class="container">
        <div class="card">
            <div class="row no-gutters">
                <div class="col d-none d-lg-flex" style="background: url(login/dist/images/batik-kalimantan-timur.jpg)">
                    <div class="logo">
                        <img src="login/dist/images/logo-colorful.png" alt="logo">
                    </div>
                    <div>
                        <h3 class="font-weight-bold">Welcome to myWeb</h3>
                        <p class="lead my-5">Jika anda belum mempunyai akun, silahkan Register terlebih dahulu</p>
                        <a href="#" class="btn btn-outline-primary 2btn-lg">Register</a>
                    </div>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="#">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Terms & Conditions</a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <div class="logo d-block d-lg-none text-center text-lg-left">
                                <img src="../../dist/images/logo-colorful.png" alt="logo">
                            </div>
                            <div class="my-5 text-center text-lg-left">
                                <h3 class="font-weight-bold">Sign In</h3>
                                <p class="text-muted">Silahkan masukkan username, password dan level anda ...</p>
                            </div>
                            <form>
                                <div class="form-group">
                                    <div class="form-icon-wrapper">
                                        <input type="text" name="username" class="form-control" placeholder="Masukkan username" autofocus
                                               required>
                                        <i class="form-icon-left mdi mdi-email"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-icon-wrapper">
                                        <input type="password" name="password" class="form-control" placeholder="Masukkan password"
                                               required>
                                        <i class="form-icon-left mdi mdi-lock"></i>
                                        <a href="#" class="form-icon-right password-show-hide"
                                           title="Hide or show password">
                                            <i class="mdi mdi-eye"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-icon-wrapper">
                                        <select name="level" class="form-control form-control-user" required>
                                                <option value="">Pilih Level</option>
                                                <option value="Admin">Admin</option>
                                                <option value="User">User</option>
                                        </select>
                                        <i class="form-icon-left mdi mdi-email"></i>
                                    </div>
                                </div>
                                <!-- <p class="text-center mb-4">
                                    Can't access your account? <a href="password-reset.html">Reset your password now</a>.
                                </p> -->
                                <button class="btn btn-primary btn-block mb-4">Sign In</button>
                            </form>
                            <div class="text-divider">||</div>
                            <!-- <div class="social-links justify-content-center">
                                <a href="#">
                                    <i class="mdi mdi-google"></i> Google
                                </a>
                                <a href="#">
                                    <i class="mdi mdi-facebook"></i> Facebook
                                </a>
                                <a href="#">
                                    <i class="mdi mdi-github"></i> Github
                                </a>
                            </div> -->
                            <p class="text-center d-block d-lg-none mt-5 mt-lg-0">
                                Don't have an account?
                                <a href="sign-up.html">Create a free account</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Jquery -->
<script src="login/dist/vendor/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="login/dist/vendor/bootstrap-4.5.3/js/bootstrap.min.js"></script>
<!-- Latform scripts -->
<script src="login/dist/js/latform.min.js"></script>
</form>
</body>
</html>
