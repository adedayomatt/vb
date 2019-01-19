<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
        
        <!-- CSS 
        =========== ============== -->
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('themes/m4u/css/bootstrap.min.css')}}">

        <!-- Plugins CSS -->
        <link rel="stylesheet" href="{{asset('themes/m4u/css/plugins.css')}}">
        
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="{{asset('themes/m4u/css/style.css')}}">
        
        <!-- Modernizer JS -->
        <script src="{{asset('themes/m4u/js/vendor/modernizr-2.8.3.min.js')}}"></script>
        <!-- jQuery JS -->
        <script src="{{asset('themes/m4u/js/vendor/jquery-1.12.4.min.js')}}"></script>
         <!-- Typeahead JS -->
        <script src="{{asset('js/vendors/typeahead.min.js')}}"></script>
        @include('layouts.components.typeahead.product')

        <style>
            header.header_three{
                position:fixed;
                z-index: 100;
                width: 100%;
                background-image: url("{{$business->cover()['src']}}");
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
            }
            header .header_inner{
                background: rgba(0,0,0,.5) !important;
            }
            header .header_middel{
                padding: 5px 0 !important;
            }
            header .header-bottom{
                padding: 15px 0;
                background-color: #f9f9f9;
            }
            .header-bottom .header-bottom-inner{
                display: flex;
                overflow-x:auto;
                overflow-y: hidden
            }
            .main{
                padding-top: 190px;
            }
            @media (min-width: 768px){
                
            }
    </style>
    </head>

    <body>

    <!-- Main Wrapper Start -->
        <!--header area start-->
        <header class="header_area header_three">
            <div class="header_inner">  
                @include('themes.m4u.shell.components.header-top')  
                @include('themes.m4u.shell.components.header-middle')  
                @include('themes.m4u.shell.components.navigation')  
                {{--@include('themes.m4u.shell.components.header-bottom')--}} 
            </div>
        </header>
        <!--header area end-->
        <div class="main">
            @yield('main')
        </div>

        @include('themes.m4u.shell.components.product-quick-view')  
        @include('themes.m4u.shell.components.footer')  
    
        <!-- JS
    ============================================ -->

   
    <!-- Popper JS -->
    <script src="{{asset('themes/m4u/js/popper.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('themes/m4u/js/bootstrap.min.js')}}"></script>
    <!-- Plugins JS -->
    <script src="{{asset('themes/m4u/js/plugins.js')}}"></script>
    <!-- Ajax Mail -->
    <script src="{{asset('themes/m4u/js/ajax-mail.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('themes/m4u/js/main.js')}}"></script>


    </body>

</html>