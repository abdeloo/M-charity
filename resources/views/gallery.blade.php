<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>SADAKA | Gallerie </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">


        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- PrettyPhoto -->
        <link rel="stylesheet" href="assets/css/prettyPhoto.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>


    </head>
    <body>
    <!-- NAVBAR
    ================================================== -->

    <header class="main-header">
        
    
        <nav class="navbar navbar-static-top">

            <div class="navbar-top">

              <div class="container">
                  <div class="row">

                    <div class="col-sm-6 col-xs-12">

                        <ul class="list-unstyled list-inline header-contact">
                            <li> <i class="fa fa-phone"></i> <a href="tel:">+212 658 986 213 </a> </li>
                             <li> <i class="fa fa-envelope"></i> <a href="mailto:contact@sadaka.org">contact@sadaka.org</a> </li>
                       </ul> <!-- /.header-contact  -->
                      
                    </div>

                    <div class="col-sm-6 col-xs-12 text-right">

                        <ul class="list-unstyled list-inline header-social">

                            <li> <a href="#" target="_blank"> <i class="fa fa-facebook"></i> </a> </li>
                            <li> <a href="#" target="_blank"> <i class="fa fa-twitter"></i>  </a> </li>
                            <li> <a href="#" target="_blank"> <i class="fa fa-google"></i>  </a> </li>
                            <li> <a href="#" target="_blank"> <i class="fa fa-youtube"></i>  </a> </li>
                            <li> <a href="#" target="_blank"> <i class="fa fa fa-pinterest-p"></i>  </a> </li>

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

                        <li><a href="index">ACCUEIL</a></li>
                        <li><a href="about">A PROPOS</a></li>
                        <li class="has-child"><a href="#">PROJETS</a>

                        <ul class="submenu">
                            <li class="submenu-item"><a href="projects1">Les projets à venir</a></li>
                            <li class="submenu-item"><a href="projects2">Les projets réalisés</a></li>
                            
                        </ul>

                        </li>

                    <li><a href="gallery" class="is-active">GALERIE</a></li>
                    <li><a href="contact">CONTACT</a></li>
                    
                    <li class="has-child"><a href="#">ADHESION</a>                    
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
                    </li>            


                </ul>

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header> <!-- /. main-header -->


	<div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title">Gallerie <span class="title-under"></span></h1>
			<p class="page-description">
                <p><a href="index">Accueil</a> / Gallerie </p>    
			</p>
			
		</div>

	</div>

	<div class="main-container">

		<div class="container gallery fadeIn animated">

			<div class="row">
				

					<a href="assets/images/gallery/1.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/1.jpg" alt="">

						<span class="on-hover">
							
						</span>

					</a> <!-- /.gallery-item -->

					<a href="assets/images/gallery/2.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/2.jpg" alt="">
						
						<span class="on-hover">
							
						</span>
						
					</a> <!-- /.gallery-item -->


					<a href="assets/images/gallery/3.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/3.jpg" alt="">
						
						<span class="on-hover">
							
						</span>
						
					</a> <!-- /.gallery-item -->


					<a href="assets/images/gallery/4.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/4.jpg" alt="">
						
						<span class="on-hover">
							
						</span>
						
					</a> <!-- /.gallery-item -->

					<a href="assets/images/gallery/5.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/5.jpg" alt="">
						
						<span class="on-hover">
							
						</span>
						
					</a> <!-- /.gallery-item -->

					<a href="assets/images/gallery/6.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/6.jpg" alt="">
						
						<span class="on-hover">
							
						</span>
						
					</a> <!-- /.gallery-item -->


					<a href="assets/images/gallery/7.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/7.jpg" alt="">

						<span class="on-hover">
							
						</span>

					</a> <!-- /.gallery-item -->

					<a href="assets/images/gallery/8.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/8.jpg" alt="">
						
						<span class="on-hover">
							
						</span>
						
					</a> <!-- /.gallery-item -->


					<a href="assets/images/gallery/9.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/9.jpg" alt="">
						
						<span class="on-hover">
							
						</span>
						
					</a> <!-- /.gallery-item -->


					<a href="assets/images/gallery/10.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/10.jpg" alt="">
						
						<span class="on-hover">
							
						</span>
						
					</a> <!-- /.gallery-item -->

					<a href="assets/images/gallery/11.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/11.jpg" alt="">
						
						<span class="on-hover">
							
						</span>
						
					</a> <!-- /.gallery-item -->

					<a href="assets/images/gallery/12.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/12.jpg" alt="">
						
						<span class="on-hover">
							
						</span>
						
					</a> <!-- /.gallery-item -->
					
				
			</div>
			
		</div>


	</div> <!-- /.main-container  -->


    <footer class="main-footer">

        <div class="footer-top">
            
        </div>


        <div class="footer-main">
            <div class="container">
                
                <div class="row">
                    <div class="col-md-4">

                        <div class="footer-col">

                            <h4 class="footer-title">A propos de nous <span class="title-under"></span></h4>

                            <div class="footer-content">
                            <p>
                                <b>sadaka</b> est une association non gouvernementale, à but non lucratif , spécialite dans les travaux bénévoles et dans la charité au maroc fondé en 2016 à fès par des jeunes marocains pour le but d'aider les gens et notamment les enfants des régions éloignées.
                                  <br><br>
                                </p> 
                                 
                                 <p>                                
                                  en effet en observant les difficultés que rencontraient certains habitants on ne pouvait qu’agir pour leurs bien. 
                                 </p>

                            </div>
                            
                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="footer-col">

                            <h4 class="footer-title">Les derniers twits<span class="title-under"></span></h4>

                            <div class="footer-content">
                                <ul class="tweets list-unstyled">
                                     <li class="tweet"> 

                                    dernier twit 1

                                    </li>

                                    <li class="tweet"> 

                                    dernier twit 2 

                                    </li>

                                    <li class="tweet"> 

                                    dernier twit 3  

                                </li>

                                </ul>
                            </div>
                            
                        </div>

                    </div>


                    <div class="col-md-4">

                        <div class="footer-col">

                            <h4 class="footer-title">Nous contacter <span class="title-under"></span></h4>

                            <div class="footer-content">

                                <div class="footer-form" >
                                    
                                    <form action="{{ url('addcontact') }}" method = "post">
                                        
                                      @csrf    
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Nom" required>
                                        </div>

                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                                        </div>

                                        <div class="form-group">
                                            <textarea name="message" class="form-control" placeholder="Message" required></textarea>
                                        </div>

                                        <div class="form-group alerts">

                                            <div class="alert alert-success" role="alert">
                                            
                                            </div>

                                            <div class="alert alert-danger" role="alert">
                                            
                                            </div>
                                            
                                        </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-submit pull-right">Envoyez message</button>
                            </div>

                        </form>
                                </div>
                            </div>
                            
                        </div>

                    </div>
                    <div class="clearfix"></div>



                </div>
                
                
            </div>

            
        </div>

        <div class="footer-bottom">

            <div class="container text-right">
                Sadaka @ copyrights 2015 - by <a href="http://www.ouarmedia.com" target="_blank">Ouarmedia</a>
            </div>
        </div>
        
    </footer>
        
        <!-- jQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

        <!-- Bootsrap javascript file -->
        <script src="assets/js/bootstrap.min.js"></script>

        <!-- PrettyPhoto javascript file -->
        <script src="assets/js/jquery.prettyPhoto.js"></script>

        <!-- Template main javascript -->
        <script src="assets/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
