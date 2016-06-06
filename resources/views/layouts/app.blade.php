<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="/fonts/font.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link href="/css/skeleton.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="/css/ionicons.min.css">

    <link href="/css/common.css" rel="stylesheet" type="text/css">
      <link href="/css/skeleto.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="/css/carousel.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/css/tabs.css" />
    <link rel="stylesheet" type="text/css" href="/css/tabstyles.css" />
    <script src="/js/modernizr.custom.js"></script>
    <script src="//todo.local/js/jwplayer/jwplayer.js"></script>
    <script>jwplayer.key="inDIIaswDMI3tXlrXjXbc3OWzHgIWMg46uH+Pw==";</script>

    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Reveil-toi!
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Accueil</a></li>
                    <li><a href="{{ url('/video') }}">Enseignement</a></li>
                    <li><a href="{{ url('/home') }}">...</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">S'enregistrer</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-right:50px">
                              <img src="/uploads/avatars/{{Auth::user()->avatar}}"
                              style="width:32px; height:32px; border:1px solid #ddd;position:absolte; top:10px; left:10; border-radius:50%;" alt="" />
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/profile') }}"><i class="fa fa-btn fa-user"></i>Profile</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')



    <footer class="footer_page">
      <div class="social-links no-mobile-block" data-reactid=".17irlz3rklc.2.1">
        <div class="social-link" data-reactid=".17irlz3rklc.2.1.0">
          <a href="http://vevo.tumblr.com/" id="__footerTumblr" data-reactid=".17irlz3rklc.2.1.0.0">
            <i class="ion-social-skype"></i>
          </a>
        </div>

        <div class="social-link" data-reactid=".17irlz3rklc.2.1.2">
          <a href="https://www.facebook.com/vevo.fr" id="__footerFb" data-reactid=".17irlz3rklc.2.1.2.0">
            <i class="ion-social-whatsapp"></i>
          </a>
        </div>
        <div class="social-link" data-reactid=".17irlz3rklc.2.1.3">
          <a href="https://plus.google.com/+VEVO/posts" id="__footerGoogle" data-reactid=".17irlz3rklc.2.1.3.0">
            <i class="ion-social-youtube"></i>
          </a>
        </div>
      </div>
        <div class="links" data-reactid=".17irlz3rklc.2.2">
          <div class="link not-ready" data-reactid=".17irlz3rklc.2.2.0">
            <a href="//www.vevo.com/about" id="__footerAbout" data-reactid=".17irlz3rklc.2.2.0.0">Accueil</a></div>
            <div class="link" data-reactid=".17irlz3rklc.2.2.1"><a href="//www.vevo.com/apps" >A Propos</a></div>
            <div class="link not-ready" data-reactid=".17irlz3rklc.2.2.2"><a href="//www.vevo.com/news">Themes</a></div>
            <div class="link" data-reactid=".17irlz3rklc.2.2.3"><a target="_blank" href="http://www.vevo.com/careers">
              <span data-reactid=".17irlz3rklc.2.2.3.0.0">Contact</span>
            </div>
        </div>
        <div class="footmark" data-reactid=".17irlz3rklc.2.3">
          <span data-reactid=".17irlz3rklc.2.3.0">2016 </span>
          <span data-reactid=".17irlz3rklc.2.3.1"> </span>
          <span data-reactid=".17irlz3rklc.2.3.2">Reveil-Toi, Libre de tous droits.</span>
        </div>
    </footer>
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script type="text/javascript" src-"/js/jquery.easing-1.3.js"></script>
    <script src="/js/jquery.jcarousel.min.js"></script>
    <script src="/js/jcarousel.responsive.js"></script>

    <script>
      $(window).scroll(function() {
        if ($(this).scrollTop() > 1){
          $('nav').addClass("sticky");
        }
        else{
          $('nav').removeClass("sticky");
        }
      });
    </script>

    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
