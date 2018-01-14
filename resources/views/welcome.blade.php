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

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
          <img src="/img/logo-long.svg" alt="Blackpeak - The online outdoor community"/>
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
      <section class="header-splash">
        <div class="header-content">
          <h1 class="text-center">Welcome to Blackpeak</h1>
          <p class="text-center">
            The Online Outdoor Community
          </p>
        </div>
      </section>
      <footer class="darkfooter">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-xs-3">
            <h5 class="footerheader text-center">Company</h5>
            <hr />

          </div>
          <div class="col-lg-3 col-md-3 col-xs-3">
            <h5 class="footerheader text-center">Shop</h5>
            <hr />
          </div>
          <div class="col-lg-3 col-md-3 col-xs-3">
            <h5 class="footerheader text-center">Events</h5>
            <hr />

          </div>
          <div class="col-lg-3 col-md-3 col-xs-3">
            <img src="/img/logo-long-white.svg" style="width: 75%;"/>
            <p class="footer-text">
              Subscribe to the Blackpeak newsletter for updates on events, competitions &amp; up-coming changes to the website.
            </p>
            <form class="newsletter">
            <div class="form-group">
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter your name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email Address">
            </div>
            <button type="submit" class="btn btn-primary newsletter-submit">Submit</button>
          </form>
          </div>
        </div>
      </footer>
    </body>
</html>
