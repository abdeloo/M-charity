<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sadaka</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootsrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Font awesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">

    <!-- Owl carousel -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">

    <!-- Template main Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Modernizr -->
    <script src="assets/js/modernizr-2.6.2.min.js"></script>
</head>
<body>
    <div id="app">
       
            <nav class="navbar navbar-static-top">

            <div class="navbar-top">

              <div class="container">
                  <div class="row">

                    <div class="col-sm-6 col-xs-12">

                        <ul class="list-unstyled list-inline header-contact">
                            <li> <i class="fa fa-phone"></i> <a href="tel:">+212 658 986 213 </a> </li>
                             <li> <i class="fa fa-envelope"></i> <a href="mailto:contact@sadaka.org">contact@sadaka.org</a></li>
                       </ul> <!-- /.header-contact  -->
                      
                    </div>

                    <div class="col-sm-6 col-xs-12 text-right">

                        <ul class="list-unstyled list-inline header-social">
                            <li> <a href="#"> <i class="fa fa-facebook"></i> </a> </li>
                            <li> <a href="#"> <i class="fa fa-twitter"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa-google"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa-youtube"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa fa-pinterest-p"></i>  </a> </li>
                       </ul> <!-- /.header-social  -->
                    </div>                    
                  </div>
              </div>

            </div>

            <div class="navbar-main">
              
              <div class="container">

                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                  </button>
                  
                  <a class="navbar-brand" href="index"><img src="assets/images/sadaka-logo.png" alt=""></a>
                  
                </div>

                <div id="navbar" class="navbar-collapse collapse pull-right">

                  <ul class="nav navbar-nav">

                    <li><a href="{{ url('index') }}">ACCUEIL</a></li>
                    <li><a href="{{ url('about') }}">A PROPOS</a></li>
                    <li class="has-child"><a href="#">PROJETS</a>

                      <ul class="submenu">
                         <li class="submenu-item"><a href="{{ url('projects1') }}">Les projets à venir</a></li>
                         <li class="submenu-item"><a href="{{ url('projects1') }}">Les projets réalisés</a></li>
                         
                      </ul>

                    </li>
                    
                    <li><a href="{{ url('gallery') }}">GALERIE</a></li>
                    <li><a href="{{ url('contact') }}">CONTACT</a></li>
                    
                    <li class="has-child"><a href="#"  class="is-active">ADHESION</a>                    
                    @guest
                    <ul class="submenu">
                      @if (Route::has('login'))
                         <li class="submenu-item"><a href="{{ route('login') }}">Se connecter</a></li>
                      @endif 
                      
                      @if(Route::has('register')) 
                         <li class="submenu-item"><a href="{{ route('register') }}">S'adhérer</a></li>
                      @endif   
                    
                    @else
                    <li class="has-child">
                                <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="submenu">
                                <li class="submenu-item" ><a href="{{ route('home') }}">Tableau de bord</a></li> 
                                <li class="submenu-item">
                                
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('auth.Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                              
                                </li>
                                </ul>
                    </li>
                    

                    @endguest
                    </ul>
                    </li>
                   
                 

                    


                  </ul>

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
