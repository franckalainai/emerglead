<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Page title -->
      <title>CPVA</title>
      <!--[if lt IE 9]>
      <script src="js/respond.js"></script>
      <![endif]-->
      <!-- Bootstrap Core CSS -->
      <link href="/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
      <!-- Icon fonts -->
      <link href="/assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="/assets/fonts/flaticons/flaticon.css" rel="stylesheet" type="text/css">
      <link href="/assets/fonts/glyphicons/bootstrap-glyphicons.css" rel="stylesheet" type="text/css">
      <!-- Google fonts -->
      <link href="https://fonts.googleapis.com/css?family=Lato:400,800" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Baloo+Thambi" rel="stylesheet">
      <!-- Style CSS -->
      <link href="/assets/css/style.css" rel="stylesheet">
      <!-- Plugins CSS -->
      <link rel="stylesheet" href="/assets/css/plugins.css">
      <!-- Color Style CSS -->
      <link href="/assets/styles/maincolors.css" rel="stylesheet">
      <!-- Favicons-->
      <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
   </head>
<body id="page-top">
        @include('layouts.nav')
        @include('layouts.slide')
        @include('layouts.svg')
        
        @yield('content')

        @include('layouts.footer')

        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <!-- Main Js -->
        <script src="/assets/js/main.js"></script>
        <!-- Contact form -->
        <script src="/assets/js/contact.js"></script>
        <!--Other Plugins -->
        <script src="/assets/js/plugins.js"></script>
        <!-- Prefix free CSS -->
        <script src="/assets/js/prefixfree.js"></script>
        <!--Mail Chimp validator -->
        <script src='/assets/js/mc-validate.js'></script>	  
        <!-- Open street maps-->
        <script src="/assets/js/map.js"></script>
   </body>
</html>