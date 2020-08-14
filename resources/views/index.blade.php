<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">-->
      <link rel="stylesheet" href="/css/bootstrap.min.css">
      <link rel="stylesheet" href="/css/index.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
      <script>
      $(document).ready(function(){
        $("button").click(function(){
          $("#bob").animate({left: '1000px'});
        });
      });
      </script>

      <title>Tree Exercise</title>

      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="50">

      <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="#">thisisthetree</a>

        <!-- Links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#section1">Block 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#section2">Block 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#section3">Block 3</a>
          </li>
        </ul>
      </nav>

      <div id="section1" class="container-fluid">
        <h1>Block 1</h1>
        <p>This block showcases an onclick event. Click the move image button below!</p>
        <div class="moveright">
           <img src="/img/ladybird.jpg" alt="ladybird">
        </div>
        <div>
          <button>Move Image</button>
        </div>
      </div>
      <div id="section2" class="container-fluid">
        <h1>Block 2</h1>
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        <div class="col-lg-12">
          <div class="col-lg-6">
            <img class="zoom" src="/img/jaguar.jpg" alt="jaguar">
          </div>
        </div>
      </div>
      <div id="section3" class="container-fluid">
        <h1>Block 3</h1>
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
      </div>
    </body>
</html>
