<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>SADAKA<title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

        <!-- Template main Css -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        
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

                  <ul class="nav navbar-nav">

                        <li><a href="index">ACCUEIL</a></li>
                        <li><a href="about">A PROPOS</a></li>
                        <li class="has-child"><a href="#">PROJETS</a>

                        <ul class="submenu">
                            <li class="submenu-item"><a href="projects1">Les projets à venir</a></li>
                            <li class="submenu-item"><a href="projects2">Les projets réalisés</a></li>
                            
                        </ul>

                        </li>

                        <li class="has-child"><a class="is-active" href="#">ADHESION</a>                    
                        <ul class="submenu">
                         <li class="submenu-item"><a href="login">Se connecter</a></li>
                         <li class="submenu-item"><a href="register">S'adhérer</a></li>
                         
                        </ul>
                        
                        </li>
                        <li><a href="gallery">GALERIE</a></li>
                        <li><a href="contact">CONTACT</a></li>

</ul>

                  </ul>

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header> <!-- /. main-header -->


	<div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title">Connexion<span class="title-under"></span></h1>
			<p class="page-description">
                <p><a href="index">Accueil</a> / Connexion </p>
			</p>
			
		</div>

	</div>

	<div class="main-container fadeIn animated">

		<div class="container">

			<div class="row">

				<div class="col-md-7 col-sm-12 col-form">

					<h2 class="title-style-2">FORMULAIRE DE CONNEXION<span class="title-under"></span></h2>

					<form action="php/mail.php" class="contact-form ajax-form">

						<div class="row">

							<div class="form-group col-md-6">
	                            <input type="text" name="name" class="form-control" placeholder="Nom*" required>
	                        </div>

	                         <div class="form-group col-md-6">
	                            <input type="email" name="email" class="form-control" placeholder="E-mail*" required>
	                        </div>
							
						</div>

                        <div class="form-group">
                            <textarea name="message" rows="5" class="form-control" placeholder="Message*" required></textarea>
                        </div>

                        <div class="form-group alerts">
                        
                        	<div class="alert alert-success" role="alert">
							  
							</div>

							<div class="alert alert-danger" role="alert">
							  
							</div>

                        </div>	

                         <div class="form-group">
                            <button type="submit" class="btn btn-primary pull-right">Envoyer message</button>
                        </div>

                        <div class="clearfix"></div>

					</form>

				</div>

				<div class="col-md-4 col-md-offset-1 col-contact">

					<h2 class="title-style-2"> SADAKA CONTACTS <span class="title-under"></span></h2>
					<p>
                    <b>sadaka</b> est une association non gouvernementale, à but non lucratif , spécialite dans les travaux bénévoles et dans la charité au maroc fondé en 2016 à fès par des jeunes marocains pour le but d'aider les gens et notamment les enfants des régions éloignées.
                         <br><br>
					</p>

					<div class="contact-items">

						<ul class="list-unstyled contact-items-list">
							<li class="contact-item"> <span class="contact-icon"> <i class="fa fa-map-marker"></i></span> Fès, Morocco</li>
							<li class="contact-item"> <span class="contact-icon"> <i class="fa fa-phone"></i></span> 00 150 25 55  55 11</li>

							<li class="contact-item"> <span class="contact-icon"> <i class="fa fa-envoloppe"></i></span> conatct@sadaka.org</li>
						</ul>
					</div>

					
					
				</div>

			</div> <!-- /.row -->


		</div>
		


	</div>

	<div id="contact-map" class="contact-map">
		
	</div>


    <footer class="main-footer">

<div class="footer-top">
	
</div>


<div class="footer-main">
	<div class="container">
		
		<div class="row">
			<div class="col-md-4">

				<div class="footer-col">

					<h4 class="footer-title">À propos de nous<span class="title-under"></span></h4>

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

					<h4 class="footer-title">Les derniers twits <span class="title-under"></span></h4>

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

					<h4 class="footer-title">Nous contacter<span class="title-under"></span></h4>

					<div class="footer-content">

						<div class="footer-form">
							
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




       
        
        <!-- jQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

        <!-- Bootsrap javascript file -->
        <script src="assets/js/bootstrap.min.js"></script>


        <!-- Google map  -->
        <script src="http://maps.google.com/maps/api/js?sensor=false&amp;libraries=places" type="text/javascript"></script>


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
