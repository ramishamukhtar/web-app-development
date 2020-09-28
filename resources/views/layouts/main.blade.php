<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta content="" name="description">
    <meta content="" name="author">
    <!--Any config settings you want to fetch you will get in $config array, -->
    <?php //echo $config['COMPANY']; ?>
    <title>..: Brick Build  :..</title>
    <link href="#" rel="icon">
    <link rel="icon" type="image/png" href="{{asset(isset($favicon)?$favicon:'')}}">
    <link rel="icon" type="image/jpg" href="{{asset(isset($favicon)?$favicon:'')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('layouts.links')
    @yield('css')
  </head>
  <body class="effects" id="effects">
    <input type="hidden" id="web_base_url" value="{{url('/')}}"/>
    @include('layouts.header', [
    'menu'=>$menu,
    'blogmenu'=>$blogmenu,
	'aboutmenu'=>$aboutmenu,
	'testimonialmenu'=>$testimonialmenu,
	'contactmenu'=>$contactmenu,
    ])
    @yield('content')
    @include('layouts.footer')
    @include('layouts.scripts')
    @yield('js')
    @include('layouts.errorhandler')
    @include('adminiy.core.editor')
  </body>
</html>