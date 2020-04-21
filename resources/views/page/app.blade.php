<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{config('app.name')}}</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
    <link rel="stylesheet" href="assets/css/Social-Icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />
    <style>
        .shadow-sm social-icons aos-init:hover {
            color: blue !important;
        }
        .text-info {
            color: rgba(24, 175, 239, 0.74) !important;
        }
        .feature-box .icon {
            font-size: 30px;
            position: absolute;
            left: 15px;
            top: 15px;
            width: 30px;
            text-align: center;
            color:#00c7ff !important;
        }
        .btn-outline-primary {
            color: #00c7ff !important;
            background-color: transparent;
            background-image: none;
            border-color: #00c7ff!important;
        }
        .btn-outline-primary:hover {
            color: #fff!important;
            background-color: #00c7ff!important;
            border-color: #00c7ff!important;
        }
        .clean-navbar .navbar-nav .nav-link {
            font-weight: 600;
            font-size: large!important;
            text-transform: none !important;
        }
        .navbar-light .navbar-nav .nav-link {
            color: rgba(0,0,0,.5);
            font-size: large;
            font-weight: bold;
        }
        .bg-light {
            background-color: #fff!important;
        }
        .page-footer.dark .footer-copyright {
            background-color: #222425;
            border-color: #047afb !important;
        }
        .navbar-light .navbar-nav .nav-link {
            text-align: center;
            color: rgba(0,0,0,.5);
            font-size: large;
            font-weight: bold;
            align-items: center;
        }
        .fa-broadcast-tower:before {
            content: "\f519";
            margin-left: 10px !important;
            color: #9dd1ff !important;
        }
    </style>
</head>

<body>
@include('include.nav')
@include('include.alerts')
@yield('content')
<div class="shadow-sm social-icons" data-aos="slide-down"><a href="#"><i class="icon ion-social-twitter" id="twit"></i></a><a href="#"><i class="icon ion-social-facebook" id="facebook"></i></a><a href="#"><i class="icon ion-social-snapchat" id="snap"></i></a><a href="#"><i class="icon ion-social-youtube" id="youtube"></i></a></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<script src="assets/js/smoothproducts.min.js"></script>
<script src="assets/js/theme.js"></script>
<script src="assets/js/bs-animation.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
</body>

</html>
