<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Yuppiechef Reviews</title>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('test/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{ asset('test/css/mdb.min.css') }}" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="{{ asset('test/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Start your project here-->

    @include('layouts/navbar')

    @yield('content')

    @include('layouts/footer')

    <!-- Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <!-- <script type="text/javascript" src="{{ asset('public/test/js/jquery-3.4.1.min.js') }}"></script> -->
  <!-- Bootstrap tooltips -->
  <!-- <script type="text/javascript" src="{{ asset('public/test/js/popper.min.js') }}"></script> -->
  <!-- Bootstrap core JavaScript -->
  <!-- <script type="text/javascript" src="{{ asset('public/test/js/bootstrap.min.js') }}"></script> -->
  <!-- MDB core JavaScript -->
  <!-- <script type="text/javascript" src="{{ asset('public/test/js/mdb.min.js') }}"></script> -->

  <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="test/star_rating/css/star-rating.css" media="all" type="text/css"/>
  <link rel="stylesheet" href="test/star_rating/css/themes/krajee-fa/theme.css" media="all" type="text/css"/>
  <link rel="stylesheet" href="test/star_rating/css/themes/krajee-svg/theme.css" media="all" type="text/css"/>
  <link rel="stylesheet" href="test/star_rating/css/themes/krajee-uni/theme.css" media="all" type="text/css"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="test/star_rating/js/star-rating.js" type="text/javascript"></script>
  <script src="test/star_rating/js/themes/krajee-fa/theme.js" type="text/javascript"></script>
  <script src="test/star_rating/js/themes/krajee-svg/theme.js" type="text/javascript"></script>
  <script src="test/star_rating/js/themes/krajee-uni/theme.js" type="text/javascript"></script>
</body>

</html>
