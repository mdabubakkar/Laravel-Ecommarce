<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('user/layouts/head')
</head>
<body>
<!-- ========================= HEADER MAIN S========================= -->
	@include('user/layouts/header')
<!-- ========================= HEADER MAIN E========================= -->

<!-- ========================= SECTION MAIN ========================= -->

@section('content')

 @show

<!-- ========================= FOOTER ========================= -->
 @include('user/layouts/footer')
<!-- ========================= FOOTER END // ========================= -->

</body>
</html>