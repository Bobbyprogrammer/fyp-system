{{-- <!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('assets/images/favicon.png') }}">
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <span style="color: white">@include('message')</span>
                                    
                                    <form action="" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="email" name="email" class="form-control" value="">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control" value="">
                                        </div>
                                        
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Sign me in</button>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ url('assets/vendor/global/global.min.js') }}"></script>
	<script src="{{ url('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ url('assets/js/custom.min.js') }}"></script>
    <script src="{{ url('assets/js/dlabnav-init.js') }}"></script>

</body>

</html> --}}
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Preskool - Login</title>

<link rel="shortcut icon" href="assets/img/favicon.png">

<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{ url('admin-assets/assets/plugins/bootstrap/css/bootstrap.min.css') }}">

<link rel="stylesheet" href="{{ url('admin-assets/assets/plugins/feather/feather.css') }}">

<link rel="stylesheet" href="{{ url('admin-assets/assets/plugins/icons/flags/flags.css') }}">

<link rel="stylesheet" href="{{ url('admin-assets/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ url('admin-assets/assets/plugins/fontawesome/css/all.min.css') }}">

<link rel="stylesheet" href="{{ url('admin-assets/assets/css/style.css') }}">
</head>
<body>

<div class="main-wrapper login-body">
<div class="login-wrapper">
<div class="container">
<div class="loginbox">
<div class="login-left">
<img class="img-fluid" src="{{ url('admin-assets/assets/img/login.png') }}" alt="Logo">
</div>
<div class="login-right">
<div class="login-right-wrap">
<h1>Welcome to FYP</h1>
<h2>Sign in</h2>

<form action="" method="post">
    @csrf
<div class="form-group">
<label>Email <span class="login-danger">*</span></label>
<input class="form-control" type="email" name="email">
<span class="profile-views"><i class="fas fa-user-circle"></i></span>
</div>
<div class="form-group">
<label>Password <span class="login-danger">*</span></label>
<input class="form-control pass-input" type="password" name="password">
<span class="profile-views feather-eye toggle-password"></span>
</div>

<div class="form-group">
<button class="btn btn-primary btn-block" type="submit">Login</button>
</div>
</form>

</div>
</div>
</div>
</div>
</div>
</div>

<script src="{{ url('admin-assets/assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ url('admin-assets/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('admin-assets/assets/js/feather.min.js') }}"></script>
<script src="{{ url('admin-assets/assets/js/script.js') }}"></script>
</body>
</html>