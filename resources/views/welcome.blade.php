<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="/manifest.json">
        <meta name="theme-color" content="#1A1A1A">
        <title>Blackpeak - The Online Outdoor Community</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

        <!-- LESS -->
        <link href="/Resources/LESS" rel="stylesheet">

        <!-- Video Player -->
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/afterglowplayer@1.x"></script>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Slick Slider -->
        <script type="text/javascript" src="/slick/slick.min.js"></script>

        <!-- Fontawesome 5 -->
        <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">

        <!-- Bootstrap 4 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>

        <!-- SVG Animations -->
        <script src="/js/jquery.drawsvg.js"></script>

    </head>
    <body>
      <section class="topbar">
        <p class="text-center"><a href="#">Sign up for the Blackpeak newsletter here <i class="fas fa-arrow-circle-right"></i></a></p>
      </section>
      <header class="navigation-dark">
        <div class="header-logo">
          <img src="/img/logo-long-new.svg" alt="Blackpeak - The online outdoor community"/>
        </div>
        <div class="nav-right">
          <ul>
            <li><a href="/" class="active">Home</a></li>
            <li><a href="/">Activities <i class="fas fa-caret-down"></i></a></li>
            <li><a href="/">News</a></li>
            <li><a href="/">Events</a></li>
            <li><a href="/">Shop</a></li>
            <li><a href="/">Contact Us</a></li>
            <li class="accounts"><a href="/">Register</a></li>
            <li class="accounts"><a href="/"><i class="fas fa-question-circle"></i></a></li>
          </ul>
        </div>
      </header>
      @php
        $slides = (object)array(
          (object)array(
            'SlideTitle' => 'CLIMBING EVENTS',
            'SubTitle' => 'Head to our events area for updates on climbing events and competitions',
            'Class' => 'one',
          ),
          (object)array(
            'SlideTitle' => 'FELL RUNNING',
            'SubTitle' => 'Find fell running events across the UK and sign up to take part',
            'Class' => 'two',
          ),
          (object)array(
            'SlideTitle' => 'ACHIEVEMENTS',
            'SubTitle' => 'Track your progress to earn achievements and awards',
            'Class' => 'three',
          ),          
        );
      @endphp
      <div class="SlickMe">
        @foreach($slides as $slide)
          <section class="header-splash {{$slide->Class}}">
            <div class="header-content">
              <div class="slide-content">
              <h1 class="textarea1">{{$slide->SlideTitle}}</h1>
              <p class="textarea2">
                {{$slide->SubTitle}}
              </p>
            </div>
          </div>
          </section>
        @endforeach
      </div>
      <footer class="darkfooter">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-xs-3">


          </div>
          <div class="col-lg-3 col-md-3 col-xs-3">

          </div>
          <div class="col-lg-3 col-md-3 col-xs-3">

          </div>
          <div class="col-lg-3 col-md-3 col-xs-3">

          </div>
        </div>
      </footer>
      <!-- Scripts -->
      <script type="text/javascript" src="/js/slickslider-homepage.js"></script>
    </body>
</html>
