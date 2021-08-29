<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta charset="utf-8"/>
    <link rel = "icon" href ="" type = "image/x-icon">
    <title> {{ config('app.site_name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta content="" name="description"/>
    <meta content="Abhishek Thapa" name="author"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('admin.layout.style')
    @stack('styles')
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="">
<div class="wrapper">
@include('admin.sidebar.administrator')
@include('admin.layout.header')

@yield('content')
<!-- END CONTAINER -->
</div>
@include('admin.layout.script')
@include('admin.layout.notification')
@stack('scripts')
</body>
</html>

