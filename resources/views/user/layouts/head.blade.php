<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>@yield('title') {{ config('app.name', 'MABS | FASHION') }}</title>

<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
<!-- jQuery -->
<script src="{{asset('Assets/frontend/js/jquery-2.0.0.min.js')}}" type="text/javascript"></script>
<!-- Bootstrap4 files-->
<script src="{{asset('Assets/frontend/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
<link href="{{asset('Assets/frontend/css/bootstrap.css')}}" rel="stylesheet" type="text/css"/>
<!-- Font awesome 5 -->
<link href="{{asset('Assets/frontend/fonts/fontawesome/css/fontawesome-all.min.css')}}" type="text/css" rel="stylesheet">
<!-- plugin: owl carousel  -->
<link href="{{asset('Assets/frontend/plugins/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
<link href="{{asset('Assets/frontend/plugins/owlcarousel/assets/owl.theme.default.css')}}" rel="stylesheet">
<script src="{{asset('Assets/frontend/plugins/owlcarousel/owl.carousel.min.js')}}"></script>
<!-- custom style -->
<link href="{{asset('Assets/frontend/css/ui.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('Assets/frontend/css/responsive.css')}}" rel="stylesheet" media="only screen and (max-width: 1200px)" />
<!-- custom javascript -->
<script src="{{asset('Assets/frontend/js/script.js')}}" type="text/javascript"></script>