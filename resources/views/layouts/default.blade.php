<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--[if IE]>
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
        <![endif]-->
        <meta name="keywords" content="swamp" />
        <meta name="author" content="b-malone" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>{{ setting('site.title') }}</title>
        <!-- Bootstrap -->
        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <!-- Master Css -->
        <link href="css/jquery-ui.css" rel="stylesheet">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/main.css" rel="stylesheet">
        <link href="assets/css/color.css" rel="stylesheet" id="colors">
        <link href="css/app.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
      {{-- @section('sidebar')
           This is the master sidebar.
       @show --}}

      <div id="page" class="container-fluid">
        @yield('content')
      </div>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="js/jquery-ui.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/plugins/fancyBox/js/jquery.fancybox.pack.js"></script>
      <script src="assets/plugins/fancyBox/js/jquery.fancybox-media.js"></script>
      <script src="assets/js/main.js"></script>

    </body>
</html>
