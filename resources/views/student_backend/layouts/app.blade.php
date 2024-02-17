<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>LMS</title>
    <link rel="icon" type="image/x-icon" href="{{asset('backend/assets/img/favicon.ico')}}"/>
    <link href="{{asset('backend/assets/css/loader.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('backend/assets/js/loader.js')}}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

    <link href="{{asset('backend/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{asset('backend/assets/css/dashboard/dash_1.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/css/components/cards/card.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <link href="https://vjs.zencdn.net/7.15.4/video-js.css" rel="stylesheet" />

</head>
<body>
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

  

 
     
        
   
    @include('student_backend.layouts.header')

    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        @include('student_backend.layouts.sidenav')

        <div id="content" class="main-content">
         @yield('content')

          
        </div>
     

    </div>

    <script src="https://vjs.zencdn.net/7.15.4/video.min.js"></script>
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('backend/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('backend/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('backend/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('backend/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('backend/plugins/blockui/jquery.blockUI.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/app.js')}}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
     <script src="{{asset('backend/plugins/highlight/highlight.pack.js')}}"></script>
    <script src="{{asset('backend/assets/js/custom.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{asset('backend/assets/js/dashboard/dash_1.js')}}"></script>
    <script src="{{asset('backend/assets/js/scrollspyNav.js')}}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>

</html>