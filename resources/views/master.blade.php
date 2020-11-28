<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
        <!-- Styles -->
        <link href="//getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" >
        <link href="//getbootstrap.com/docs/4.5/examples/carousel/carousel.css" rel="stylesheet" >

    </head>
    <body>


<main role="main">

 @include('partials.navbar');
 @yield('carousel')

    <!-- /END THE FEATURETTES -->
    <div class="container marketing">
    @yield('aboutsection')
    @yield('productsection')
    </div><!-- /.container -->


  <!-- FOOTER -->
  @include('partials.footer');
</main>
<script src="//code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
      <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
      <script src="//getbootstrap.com/docs/4.5/dist/js/bootstrap.bundle.min.js"></script></body>
</html>
