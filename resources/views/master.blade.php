<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ShopworksTest</title>

        <!-- Metadata -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        
        {{-- Bootstrap --}}
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/sb-admin.css" rel="stylesheet">
        <link href="css/app.css" rel="stylesheet">
        <link href="css/plugins.css" rel="stylesheet">

        {{-- Custom fonts --}}
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <div id="wrapper">
            @yield('wrapper')
        </div>
        <!-- /#wrapper -->

        <!-- JS -->
        <script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>
        @yield('javascript')
    </body>

</html>