
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>connectall</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
  </head>

  <body>

   @include('layouts.nav')

   @if($flash=session('message'))
   <div id="flash-message" class="alert alert-success" role="alert">
     {{ $flash }}
   </div>

   @endif
   <div class="blog-header">
     <div class="container">
       <h1 class="blog-title">awsome competitive programming</h1>
       <p class="lead blog-description"> register and write your artical in any competitive programming topic </p>
     </div>
   </div>



    <div class="container">
      <div class="row">
        <div class="col-sm-8 blog-main">
        @yield('content')
        </div>
        @include('layouts.sidebar')

      </div>
    </div>



  </body>
</html>
