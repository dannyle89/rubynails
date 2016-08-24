<!DOCTYPE html>
<html ng-app="home">
<head>
    <title>Laravel</title>
    <meta name="csrf-token" content="<% csrf_token() %>">

    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <script type="text/javascript" src="js/jquery-2.2.4.js"></script>
    <script type="text/javascript" src="js/bootstrap/bootstrap.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
    <script src="js/angular/app.js"></script>
</head>
<body>
    <div id="wrapper">
        <!-- header -->
        @include('layouts.header')
        <div class="clearfix"></div>
        <!-- end #header -->
        <!-- side-bar -->
        @include('layouts.side-bar')
        <!-- end #side-menu -->
        <div id="main-content" class="right">
            <div id="primary">
                <div class="content">
                    @yield('content')
                </div>
            </div>
            <!-- end #primary -->
            @include('layouts.footer')
            <!-- end #footer -->

        </div>
        <!-- end #main-content -->
    </div>
    <!-- end #wrapper -->    
    <script type="text/javascript">
        $.ajaxSetup({
         headers: { 'X-CSRF-Token' : $('meta[name=csrf-token]').attr('content') }
        });
    </script> 
</body>
</html>
