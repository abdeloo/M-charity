<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>SADAKA | A propos</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

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

                    <li><a href="index">ACCUEIL</a></li>
                    <li><a class = "is-active" href="about" >A PROPOS</a></li>
                    <li class="has-child"><a href="#">PROJETS</a>

                      <ul class="submenu">
                         <li class="submenu-item"><a href="projects1">Les projets à venir</a></li>
                         <li class="submenu-item"><a href="projects2">Les projets réalisés</a></li>
                         
                      </ul>

                    </li>

                    <li><a href="gallery">GALERIE</a></li>
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
			
			<h1 class="page-title">A propos de nous <span class="title-under"></span></h1>
			<p class="page-description">
					<p><a href="index">Accueil</a> / A propos de nous </p>  
			</p>
			
		</div>

	</div>

	<div class="main-container">

		<div class="container">

			<div class="row fadeIn animated">

				<div class="col-md-6">

					<img src="assets/images/about-us.jpg" alt="" class="img-responsive">

				</div>

				<div class="col-md-6">

					<h2 class="title-style-2">A PROPOS DE SADAKA <span class="title-under"></span></h2>

                                
                                <p style="font-size:16px">
                                
                                <b >sadaka</b> est une association non gouvernementale, à but non lucratif , spécialite dans les travaux bénévoles et dans la charité au maroc fondé en 2016 à fès par des jeunes marocains pour le but d'aider les gens et notamment les enfants des régions éloignées.
                                  en effet en observant les difficultés que rencontraient certains habitants on ne pouvait qu’agir pour leurs bien. 
                                 </p> 

                                 <br>
                   
                                 <p style="font-size:16px">
                                 
                                  Notre association a des objectifs globales  qui touche : 
                                  
                                  L’amélioration les conditions de vie des necessiteux, et ceci se faisant par un soutien et accompagnement perpetuel dans plusieurs domaines:
                                  </p>

                                  <ul style="font-weight:bold">  
                                  <li>Sanitaire (soins, dépistage diabète, examen de vue, radiologie, chirurgie...)</li>
                                  <li>Scolaire (fournitures, rénovation écoles…)</li>
                                  <li>Développement social des villages isolés</li>
                                  <li>Développement de l’autonomie des villages concernés</li>
                                  <li>Echanges interculturel national et international</li>
                                  </ul>
                                  
					<br><br>	
				         
					
				</div>

			</div> <!-- /.row -->

			<<div class="section-home about-us">

				<div class="row">

						<div class="col-md-3 col-sm-6">
								
						<div class="about-us-col">

								<div class="col-icon-wrapper">
								<img src="assets/images/icons/our-mission-icon.png" alt="">
								</div>
								<h3 class="col-title">notre mission</h3>
								<div class="col-details">

								<p>Nos missions ont tous une seule et même base : L’amélioration des conditions de vie des necessiteux ... </p>

						
								</div>
								<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#missionModal">Lire la suite</a>
							
						</div>
						
						</div>


					<div class="col-md-3 col-sm-6">
					
					<div class="about-us-col">

							<div class="col-icon-wrapper">
							<img src="assets/images/icons/make-donation-icon.png" alt="">
							</div>
							<h3 class="col-title">faire des dons</h3>
							<div class="col-details">

							<p>Vous pouvez faire un don maintenant</p>
							
							</div>

							<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal">Faire un Don</a>
						
					</div>
					
					</div>


					<div class="col-md-3 col-sm-6">
					
					<div class="about-us-col">

							<div class="col-icon-wrapper">
							<img src="assets/images/icons/help-icon.png" alt="">
							</div>
							<h3 class="col-title">AIDE ET SUPPORT</h3>
							<div class="col-details">

							<p>si vous s'avez des suggestions des questions etc .. merci de nous contacter  </p>
							
							</div>
							<a href="contact" class="btn btn-primary"> Nous contacter </a>
						
					</div>
					
					</div>


					<div class="col-md-3 col-sm-6">
					
					<div class="about-us-col">

							<div class="col-icon-wrapper">
							<img src="assets/images/icons/programs-icon.png" alt="">
							</div>
							<h3 class="col-title">nos projets</h3>
							<div class="col-details">

							<p>Nos projets réalisés et nos projets à venir par ici</p>
							
							</div>
							<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#projetsModal">Voir nos projets</a>
						
					</div>
					
					</div>
					

					
				</div>
		
			</div> <!-- /.about-us -->


	    <div class="our-team animate-onscroll fadeIn">

	        <div class="container">

	            <h2 class="title-style-1">Notre  Equipe <span class="title-under"></span></h2>

	            <div class="row">

	                <div class="col-md-3 col-sm-6">

	                    <div class="team-member">

	                        <div class="thumnail">

	                            <img src="assets/images/team/1.jpg" alt="" class="cause-img">
	                            
	                        </div>



	                        <h4 class="member-name">Ahmed Moulay Driss</h4>

	                        <div class="member-position">
	                            CO-FONDATEUR
	                        </div>

	                        <div class="btn-holder">

	                          <a href="#" class="btn"> <i class="fa fa-envelope"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-facebook"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-google"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-twitter"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-linkedin"></i> </a>
	                          
	                        </div>

	                        

	                    </div> <!-- /.team-member -->
	                    
	                </div>

	                <div class="col-md-3 col-sm-6">

	                    <div class="team-member">

	                        <div class="thumnail">

	                            <img src="assets/images/team/2.jpg" alt="" class="cause-img">
	                            
	                        </div>



	                        <h4 class="member-name">Aicha Elbarnoussi</h4>

	                        <div class="member-position">
                                  CO-FONDATEUR
	                        </div>

	                        <div class="btn-holder">

	                          <a href="#" class="btn"> <i class="fa fa-envelope"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-facebook"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-google"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-twitter"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-linkedin"></i> </a>
	                          
	                        </div>

	                        

	                    </div> <!-- /.team-member -->
	                    
	                </div>


	                <div class="col-md-3 col-sm-6">

	                    <div class="team-member">

	                        <div class="thumnail">

	                            <img src="assets/images/team/3.jpg" alt="" class="cause-img">
	                            
	                        </div>



	                        <h4 class="member-name">Najlae Mohammed</h4>

	                        <div class="member-position">
                                    CO-FONDATEUR
	                        </div>

	                        <div class="btn-holder">

	                          <a href="#" class="btn"> <i class="fa fa-envelope"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-facebook"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-google"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-twitter"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-linkedin"></i> </a>
	                          
	                        </div>

	                        

	                    </div> <!-- /.team-member -->
	                    
	                </div>


	                <div class="col-md-3 col-sm-6">

	                    <div class="team-member">

	                        <div class="thumnail">

	                            <img src="assets/images/team/4.jpg" alt="" class="cause-img">
	                            
	                        </div>



	                        <h4 class="member-name">Moneime Charqui</h4>

	                        <div class="member-position">
                                CO-FONDATEUR
	                        </div>

	                        <div class="btn-holder">

	                          <a href="#" class="btn"> <i class="fa fa-envelope"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-facebook"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-google"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-twitter"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-linkedin"></i> </a>
	                          
	                        </div>

	                        

	                    </div> <!-- /.team-member -->
	                    
	                </div>

	            </div> <!-- /.row -->

	        </div>

	    </div>
		


	</div>
	</div>		

    <footer class="main-footer">

        <div class="footer-top">
            
        </div>


        <div class="footer-main">
            <div class="container">
                
                <div class="row">
                    <div class="col-md-4">

                        <div class="footer-col">

                            <h4 class="footer-title">A propos de nous  <span class="title-under"></span></h4>

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

                            <h4 class="footer-title">Les derniers tweets <span class="title-under"></span></h4>

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
                                            <input type="text" name="name" class="form-control" placeholder="Nome" required>
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
                                            <button type="submit" class="btn btn-submit pull-right">Envoyez Message</button>
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

	<!-- Donate Modal -->
    <div class="modal fade" id="donateModal" tabindex="-1" role="dialog" aria-labelledby="donateModalLabel" aria-hidden="true">

      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="donateModalLabel">FAIRE UN DON MAINTENANT</h4>
          </div>
          <div class="modal-body">

                <form class="form-donation">

                        <h3 class="title-style-1 text-center">Merci pour votre don<span class="title-under"></span>  </h3>

                        <div class="row">

                            <div class="form-group col-md-12 ">
                                <input type="text" class="form-control" id="montant" placeholder="MONTANT">
                            </div>

                        </div>


                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="firstName" placeholder="Prenom">
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="lastName" placeholder="Nom*">
                            </div>
                        </div>


                        <div class="row">

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="email" placeholder="Email*">
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="phone" placeholder="Téléphone">
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="address" placeholder="Adresse">
                            </div>

                        </div>


                        <div class="row">

                            <div class="form-group col-md-12">
                                <textarea cols="30" rows="4" class="form-control" name="note" placeholder="Note supplémentaire"></textarea>
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" name="donateNow" >FAIRE UN DON MAINTENENT</button>
                            </div>

                        </div>
                                           
                </form>
            
          </div>
        </div>
      </div>

    </div> <!-- /.modal -->

 	<!-- MissionModal -->
	<div class="modal fade" id="missionModal" tabindex="-1" role="dialog" aria-labelledby="donateModalLabel" aria-hidden="true">

			<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="donateModalLabel">NOTRE MISSION</h4>
				</div>
				<div class="modal-body">
						
				
				<img src="assets/images/mission/mission.jpg" width="90%" height="50%"> 

				<br></br>	
						<p>Nos missions ont tous une seule et même base : L’amélioration des conditions de vie des necessiteux, et ceci se faisant par un soutien et accompagnement perpetuel dans plusieurs domaines:</p>

						<ul>
						
							<li>Sanitaire (soins, dépistage diabète, examen de vue, radiologie, chirurgie...)</li>		

							<li>Scolaire (fournitures, rénovation écoles…)</li>

							<li>Développement social des villages isolés</li>

							<li>Développement de l’autonomie des villages concernés</li>

							<li>Echanges interculturel national et international</li>


						</ul>
				</div>
			</div>
			</div>

    </div> <!-- /.modal -->

	<!--projectsModal-->
	<div class="modal fade" id="projetsModal" tabindex="-1" role="dialog" aria-labelledby="donateModalLabel" aria-hidden="true">

				<div class="modal-dialog">
				<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="donateModalLabel">Nos Projets</h4>
			</div>
			<div class="modal-body">
				
				<br>
				<a href="projects1" ><img src="assets/images/projects/avenir.jpg" alt="" width="200" width="200" href="projects1"></a><br>
				<br>
				<a href="projects2" ><img src="assets/images/projects/realises.jpg" alt="" width="200" width="200"></a>

			</div>
			</div>
			</div>

	</div> <!-- /.modal -->
	
   
        
        <!-- jQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

        <!-- Bootsrap javascript file -->
        <script src="assets/js/bootstrap.min.js"></script>


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
