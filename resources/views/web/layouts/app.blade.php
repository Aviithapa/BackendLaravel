<!DOCTYPE html>
<html>
<head>
    <link rel = "icon" href ="" type = "image/x-icon">
    <title></title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="keywords" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('web.layouts.style')
    @stack('styles')
  </head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body>
@include('web.layouts.header')
<!-- BEGIN CONTAINER -->

@yield('content')
<!-- END CONTAINER -->
@include('web.layouts.footer')
@include('web.layouts.script')
@stack('scripts')
</body>
</html>
