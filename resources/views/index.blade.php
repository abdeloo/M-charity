<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>SADAKA </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Owl carousel -->
        <link rel="stylesheet" href="assets/css/owl.carousel.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>


    </head>

    <body>


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

                    <li><a class="is-active" href="index">ACCUEIL</a></li>
                    <li><a href="about">A PROPOS</a></li>
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




    <!-- Carousel
    ================================================== -->
    <div id="homeCarousel" class="carousel slide carousel-home" data-ride="carousel">

          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#homeCarousel" data-slide-to="1"></li>
            <li data-target="#homeCarousel" data-slide-to="2"></li>
          </ol>

          <div class="carousel-inner" role="listbox">

            <div class="item active">
              <figure>  
              <img src="assets/images/slider/slider-1.jpg" alt="" >
              </figure>
              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow">PARCE QU'ILS ONT BESOIN DE VOTRE AIDE</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow ">Ne les laisse pas</h4>
                  <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">Faire un don maintenant</a>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->


            <div class="item ">
              <figure>
                <img src="assets/images/slider/slider-2.jpeg" alt="">
              </figure>
              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow">Ensemble, nous pouvons améliorer leur vie</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow"> ALORS FAISONS-LE !</h4>
                  <a href="{{ route('register') }}" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated">S'ADHERER</a>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->




            <div class="item ">
              <figure>  
                <img src="assets/images/slider/slider-3.jpg" alt="">
              </figure>
              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow" >Un centime, c'est beaucoup d'argent, si vous n'en avez pas.</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow">VOUS POUVEZ FAIRE LA DIFFÉRENCE !</h4>
                  <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">Faire un don maintenant</a>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->

          </div>

          <a class="left carousel-control" href="#homeCarousel" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>

          <a class="right carousel-control" href="#homeCarousel" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>

    </div><!-- /.carousel -->

    <div class="section-home about-us fadeIn animated">

        <div class="container">

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
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#contactModal">Nous contacter</a>
                    
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

        </div>
      
    </div> <!-- /.about-us -->

    <div class="section-home home-reasons">

        <div class="container">

            <div class="row">
                
                <div class="col-md-6">

                    <div class="reasons-col animate-onscroll fadeIn">

                        <img src="assets/images/reasons/reason1.png" alt="">

                        <div class="reasons-titles">

                            <h3 class="reasons-title">Nous sommes tous ensemble</h3>
                            <h5 class="reason-subtitle">nous sommes humains</h5>
                            
                        </div>

                        <div class="on-hover hidden-xs">
                            
                                <h1> être humain c'est d'étre solidaire  </h1>
                                
                        </div>
                    </div>
                    
                </div>


                <div class="col-md-6">

                    <div class="reasons-col animate-onscroll fadeIn">

                        <img src="assets/images/reasons/reason2.jpg" alt="">

                        <div class="reasons-titles">

                            <h3 class="reasons-title">NOUS PRENONS SOIN DES AUTRES</h3>
                            <h5 class="reason-subtitle">nous sommes humains</h5>
                            
                        </div>

                        <div class="on-hover hidden-xs center">
                            
                                <h1>Sadaka Prends soin des autres</h1>
                                
                        </div>


                    </div>
                    
                </div>


            </div>
          
  

        </div>
      

    </div> <!-- /.home-reasons -->

    <div class="section-home our-causes animate-onscroll fadeIn">

        <div class="container">

            <h2 class="title-style-1">NOS CAUSES<span class="title-under"></span></h2>

            <div class="row">

                <div class="col-md-3 col-sm-6">

                    <div class="cause">

                        <img src="assets/images/causes/cause-hunger.jpg" alt="" class="cause-img">

                        <!-- <div class="progress cause-progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                            10$ / 500$
                          </div>
                        </div> -->

                        <h4 class="cause-title"><a href="#">Faim et pauverté</a></h4>
                        <div class="cause-details">
                              parmi les objectifs de l'association sadaka c'est de lutter contre la pauvreté  et la faim dans les régions éloignées dans tous maroc, faire un don pour nos projets       
                        </div>

                        <div class="btn-holder text-center">

                          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal">FAIRE UN DON MAINTENENT</a>
                          
                        </div>

                        

                    </div> <!-- /.cause -->
                    
                </div> 

                <div class="col-md-3 col-sm-6">

                    <div class="cause">

                        <img src="assets/images/causes/cause-education.jpg" alt="" class="cause-img">

                        <!-- <div class="progress cause-progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            400$ / 700$
                          </div>
                        </div> -->

                        <h4 class="cause-title"><a href="#">Education et enseignement</a></h4>
                        <div class="cause-details">
                              <p>
                                il y a des enfants dans les régions éloignées et les villages qui ne disposent pas  les outils adéquats pour l'éducation et l'enseignement sadaka a une vision pour améliorer les environments d'educations des necessiteux.     
                              </p>
                        </div>

                        <div class="btn-holder text-center">

                          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> FAIRE UN DON MAINTENENT</a>
                          
                        </div>

                        

                    </div> <!-- /.cause -->
                    
                </div>


                <div class="col-md-3 col-sm-6">

                    <div class="cause">

                        <img src="assets/images/causes/causes-dev_soc.jpg" alt="" class="cause-img">

                        <!-- <div class="progress cause-progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                            400$ / 1000$
                          </div>
                        </div> -->

                        <h4 class="cause-title"><a href="#">le développement social</a></h4>
                        <div class="cause-details">
                             <p>
                             Il est nécessaire d'éliminer les obstacles empêchant les citoyens à réaliser leurs rêves avec confiance et dignité. Il ne faut pas se résigner au fait que les gens qui vivent dans la pauvreté seront toujours pauvres
                             </p> 
                        </div>

                        <div class="btn-holder text-center">

                          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> FAIRE UN DON MAINTENENT</a>
                            
                        </div>

                        

                    </div> <!-- /.cause -->
                    
                </div>

                <div class="col-md-3 col-sm-6">

                    <div class="cause">

                        <img src="assets/images/causes/cause-health.jpg" alt="" class="cause-img">

                        <!-- <div class="progress cause-progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            4000DH / 70000DH
                          </div>
                        </div> -->

                        <h4 class="cause-title"><a href="#">La santé</a></h4>
                        <div class="cause-details">
                            <p> On sait d'une façon générale que le taux de moralité chez les pauvres est plus élevés que chez les riches et ils sont généralement plus productives pour ça sadaka a des projets qui vise l'état sanitiares des nécessiteux </p>
                        </div>

                        <div class="btn-holder text-center">

                          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> FAIRE UN DON MAINTENENT</a>
                          
                        </div>

                        

                    </div> 
                    
                </div>

            </div>

        </div>
        
    </div> <!-- /.our-causes -->

    <div class="section-home our-sponsors animate-onscroll fadeIn">
    
        <div class="container">

            <h2 class="title-style-1">Nos sponsors<span class="title-under"></span></h2>

            <ul class="owl-carousel list-unstyled list-sponsors">

              <li> <img src="{{ asset('assets/images/sponsors/bus.png') }} " alt=""></li>
              <li> <img src="{{ asset('assets/images/sponsors/wikimedia.png') }}" alt=""></li>
              <li> <img src="{{ asset('assets/images/sponsors/one-world.png') }}" alt=""></li>
              <li> <img src="{{ asset('assets/images/sponsors/wikiversity.png') }}" alt=""></li>
              <li> <img src="{{ asset('assets/images/sponsors/united-nations.png') }}" alt=""></li>

              <li> <img src="{{ asset('assets/images/sponsors/bus.png') }}" alt=""></li>
              <li> <img src="{{ asset('assets/images/sponsors/wikimedia.png') }}" alt=""></li>
              <li> <img src="{{ asset('assets/images/sponsors/one-world.png') }}" alt=""></li>
              <li> <img src="{{ asset('assets/images/sponsors/wikiversity.png') }}" alt=""></li>
              <li> <img src="{{ asset('assets/images/sponsors/united-nations.png') }}" alt=""></li>

            </ul>

        </div>

    </div> <!-- /.our-sponsors -->

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
        
    </footer> <!-- main-footer -->




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

                        <h3 class="title-style-1 text-center">Merci pour votre don <span class="title-under"></span>  </h3>

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


  <!-- mission Modal -->
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

            <a href="{{ route('register') }}" class="btn btn-lg btn-secondary hidden-xs ">S'ADHERER</a>
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



<!--contactModal-->
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="donateModalLabel" aria-hidden="true">

  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title" id="donateModalLabel">FORMULAIRE DE CONTACT</h2></h4>
    </div>
    <div class="modal-body">
        
    
      </br></br>

        <form action="{{ url('addcontact') }}" method = "post" >
         
        @csrf 
        
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
                    <br><br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary pull-right">Envoyer message</button>
                    </div>

                    <div class="clearfix"></div>



      </form>
  </div>
</div>
</div>


</div> <!-- /.modal -->






    <!--  Scripts
    ================================================== -->

    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

    <!-- Bootsrap javascript file -->
    <script src="assets/js/bootstrap.min.js"></script>
    
    <!-- owl carouseljavascript file -->
    <script src="assets/js/owl.carousel.min.js"></script>

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
