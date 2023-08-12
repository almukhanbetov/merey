<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{asset('adm/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('adm/dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('adm/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <link rel="stylesheet" href="{{asset('adm/plugins/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('adm/plugins/summernote/summernote-bs4.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    @include('includes.admin.nav')
    @include('includes.admin.aside')
    <div class="content-wrapper">
        @yield('content')
    </div>
    @include('includes.admin.footer')
</div>
<script src="{{asset('adm/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('adm/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{asset('adm/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('adm/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('adm/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('adm/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{asset('adm/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<script src="{{asset('adm/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script src="{{asset('adm/dist/js/adminlte.js')}}"></script>
<script>
    $(function () {
        bsCustomFileInput.init();
    });
</script>
</body>
</html>

