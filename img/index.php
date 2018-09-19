<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VII Congreso de ingenieria y arquitectura</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- =======================================================
        Theme Name: Mentor
        Theme URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
        Author: BootstrapMade.com
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>
  <body>
	<?php
		include 'menu.php';
	?>
    <!--Modal box-->
    <div class="modal fade" id="login" role="dialog">
      <div class="modal-dialog modal-sm">
      
        <!-- Modal content no 1-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title text-center form-title">Login</h4>
          </div>
          <div class="modal-body padtrbl">

            <div class="login-box-body">
              <p class="login-box-msg">Sign in to start your session</p>
              <div class="form-group">
                <form name="" id="loginForm">
                 <div class="form-group has-feedback"> <!----- username -------------->
                      <input class="form-control" placeholder="Username"  id="loginid" type="text" autocomplete="off" /> 
            <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span><!---Alredy exists  ! -->
                      <span class="glyphicon glyphicon-user form-control-feedback"></span>
                  </div>
                  <div class="form-group has-feedback"><!----- password -------------->
                      <input class="form-control" placeholder="Password" id="loginpsw" type="password" autocomplete="off" />
            <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span><!---Alredy exists  ! -->
                      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  </div>
                  <div class="row">
                      <div class="col-xs-12">
                          <div class="checkbox icheck">
                              <label>
                                <input type="checkbox" id="loginrem" > Remember Me
                              </label>
                          </div>
                      </div>
                      <div class="col-xs-12">
                          <button type="button" class="btn btn-green btn-block btn-flat" onclick="userlogin()">Sign In</button>
                      </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!--/ Modal box-->
    <!--Banner-->
    <div class="banner">
      <div class="bg-color">
        <div class="container">
          <div class="row">
            <div class="banner-text text-center">
              <!--<a href="#feature" class="mouse-hover"><div class="mouse"></div></a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Banner-->
    <!--Home-->
    <section id ="feature" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <!--<h2>Features</h2>-->
            <p style="text-align:justify; margin-left: 10px; margin-right:10px;">
				La Universidad Centroamericana “José Simeón Cañas” (UCA) se complace en invitar 
				a profesionales, académicos, investigadores y empresas relacionadas con el quehacer de 
				la ingeniería y arquitectura en El Salvador y América a participar en el VII Congreso 
				de Ingeniería y Arquitectura (CONIA 2017). Este año el Congreso tiene como lema:
			</p>
			<h2>“Hacia un Desarrollo Sustentable”</h2>
				<div class="intro-para text-center quote" style="margin-bottom: 40px;">
                <a href="inscripcion2.php" class="btn" style="font-size: 35px;">Incribirse en CONIA 2017</a>
              </div>
			<p style="text-align:justify; margin-left: 10px; margin-right:10px;">
				Durante el CONIA 2017 se centrará la discusión en los siguientes ejes temáticos:
			</p>
          </div>
          <div class="feature-info">
			<div class="row">
				<div class="fea">
				  <div class="col-md-4">
					<div class="heading pull-right">
					  <h4>Medio Ambiente  y Energía</h4>
					  <p style="text-align:justify; width:95%">
						La energía y el medio ambiente son fundamentales para el desarrollo sustentable. 
						La demanda de recursos ambientales especialmente agua, alimentos y combustibles 
						crece continuamente. Es necesario, para asegurar la sostenibilidad de los recursos, 
						ideas novedosas que vuelvan eficiente su aprovechamiento.  En este eje se agruparán 
						las propuestas relacionadas con eficiencia energética, energías renovables, 
						impactos del cambio climático, monitoreo, control y prevención de la contaminación 
						ambiental y aprovechamiento  sostenible de recursos naturales.
					  </p>
					</div>
					<div class="fea-img pull-left">
					  <i class="fa fa-tree"></i>
					</div>
				  </div>
				</div>
				<div class="fea">
				  <div class="col-md-4">
					<div class="heading pull-right">
					  <h4>Optimización de Procesos</h4>
					  <p style="text-align:justify; width:95%">
						Los sistemas productivos representan fuentes de empleo, producción de bienes y 
						prestación de servicios necesarios para el desarrollo, sin embargo, lograr procesos 
						industriales sustentables, sostenibles y amigables con el medio ambiente es un reto 
						que requiere innovación. En este eje se agruparán las propuestas que promuevan la 
						eficiencia de sistemas productivos a través de nuevos o mejores productos y procesos,
						supervisión y control de procesos industriales, estrategias de producción más limpia,
						eficiencia energética en los procesos e industria inclusiva y sostenible.
					  </p>
					</div>
					<div class="fea-img pull-left">
					  <i class="fa fa-cogs"></i>
					</div>
				  </div>
				</div>
				<div class="fea">
				  <div class="col-md-4">
					<div class="heading pull-right">
					  <h4>Ciencia y tecnología</h4>
					  <p style="text-align:justify; width:95%">
						La ciencia es la base de la ingeniería. Por lo tanto se pretende abrir espacio a 
						investigaciones y reflexiones sobre las bases científicas de la ingeniería: 
						Física, Química, Matemática, Biología, etc., que puedan tener a futuro 
						implicaciones en el desarrollo del país. Por otro lado, se busca conocer 
						aplicaciones tecnológicas (incluidas las tecnologías de la información y la 
						comunicación) no contenidas explícitamente en las líneas anteriores, que puedan 
						contribuir a la búsqueda de un desarrollo sustentable.
					  </p>
					</div>
					<div class="fea-img pull-left">
					  <i class="fa fa-book"></i>
					</div>
				  </div>
				</div>
			</div>
			<div class="row">
				<div class="fea">
				  <div class="col-md-4">
					<div class="heading pull-right">
					  <h4>Diseño y construcción</h4>
					  <p style="text-align:justify; width:95%">
						Impulsar la construcción de una infraestructura sustentable, 
						eficiente y funcional, que permita optimizar recursos en la búsqueda de ayudar a 
						solucionar problemas de gran relevancia en el país, como el déficit habitacional 
						y el déficit en vías de comunicación, como carreteras y puentes. 
						En esta temática adquieren una importancia muy especial investigaciones relacionadas 
						con nuevos materiales de construcción, con la reparación y/o reforzamiento 
						estructural de edificaciones existentes y con la denominada Infraestructura 
						Resiliente, que está orientada a desarrollar en las sociedades una 
						infraestructura capaz de resistir situaciones 
						adversas como las producidas por un evento sísmico severo.
					  </p>
					</div>
					<div class="fea-img pull-left">
					  <i class="fa fa-building"></i>
					</div>
				  </div>
				</div>
				<div class="fea">
				  <div class="col-md-4">
					<div class="heading pull-right">
					  <h4>Gestión de riesgos</h4>
					  <p style="text-align:justify; width:95%">
						Por su situación ambiental y su gestión territorial, El Salvador es un país 
						altamente vulnerable ante amenazas, tanto de origen natural, como sismos o 
						fenómenos climatológicos intensos, así como de aquellas que son resultado de 
						la actividad humana, como la emisión de sustancias peligrosas a la atmósfera. 
						Por esta razón, para garantizar la sustentabilidad de cualquier actividad es 
						necesario incluir la gestión de riesgos como una forma estructurada para manejar 
						las amenazas a los recursos materiales o a la salud y bienestar de los seres humanos.
						Este eje incluye la evaluación de riesgo, actividades de mitigación y desarrollo 
						de estrategias de planificación y respuesta ante situaciones de peligro.
					  </p>
					</div>
					<div class="fea-img pull-left">
					  <i class="fa fa-globe"></i>
					</div>
				  </div>
				</div>
				<div class="fea">
				  <div class="col-md-4">
					<div class="heading pull-right">
					  <h4>Ciudades Sustentables</h4>
					  <p style="text-align:justify; width:95%">
						El acceso a una vivienda digna y equitativa para todos es todavía un desafío en 
						la región centroamericana, por lo que se requieren alternativas novedosas para 
						promover el ideal de tener ciudades que aseguren el acceso a los bienes urbanos 
						para todos y en armonía con el entorno natural. En este eje se agruparán 
						las propuestas relacionadas con propuestas y experiencias de gestión territorial 
						y urbanismo, sistemas de movilidad y transporte.
					  </p>
					</div>
					<div class="fea-img pull-left">
					  <i class="fa fa-users"></i>
					</div>
				  </div>
				</div>
			</div>
			<div class="row">
				<div class="fea">
				  <div class="col-md-4">
					<div class="heading pull-right">
					  <h4>Educación y cultura</h4>
					  <p style="text-align:justify; width:95%">
						Una herramienta fundamental para el desarrollo social y económico es la preparación 
						de ingenieros y arquitectos que estén comprometidos con la sociedad y que posean una 
						sólida formación técnica. Este eje agrupa propuestas innovadoras para el proceso 
						formativo de ingenieros y arquitectos, y busca además incluir estudios e 
						investigaciones sobre aspectos e implicaciones culturales asociados con la 
						arquitectura e ingeniería.
					  </p>
					</div>
					<div class="fea-img pull-left">
					  <i class="fa fa-book"></i>
					</div>
				  </div>
				</div>
			<div class="row">
			

        </div>
        </div>
      </div>
    </section>
    <!--/ Home-->
        <!--patrocinadores-->
	<!--patrocinadores
    <section id="patrocinadores" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Empresas amigas</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
            <hr class="bottom-line">
          </div>


          <div class="col-lg-4 col-md-2 col-sm-2">
            <div class="pm-staff-profile-container" >
              <div class="pm-staff-profile-image-wrapper text-center">
                <div class="pm-staff-profile-image">
                  <img src="img/condusal.jpg" alt="" class="img-thumbnail img-circle" />
                </div>   
              </div>                                
              <div class="pm-staff-profile-details text-center">  
                <p class="pm-staff-profile-name">Condusal</p>
       
              </div>     
            </div>
          </div>


          <div class="col-lg-4 col-md-2 col-sm-2" >
            <div class="pm-staff-profile-container" >
              <div class="pm-staff-profile-image-wrapper text-center">
                <div class="pm-staff-profile-image">
                  <img src="img/cassa.jpg" alt="" class="img-thumbnail img-circle" />
                </div>   
              </div>                                
              <div class="pm-staff-profile-details text-center">  
                <p class="pm-staff-profile-name">Cassa</p>

              </div>     
            </div>
          </div>
          <div class="col-lg-4 col-md-2 col-sm-2">
            <div class="pm-staff-profile-container" >
              <div class="pm-staff-profile-image-wrapper text-center">
                <div class="pm-staff-profile-image">
                    <img src="img/siemens.png" alt="" class="img-thumbnail img-circle" />
                </div>   
              </div>                                
              <div class="pm-staff-profile-details text-center">  
                <p class="pm-staff-profile-name">Siemens</p>

              </div>     
            </div>
          </div>

          <div class="col-lg-2 col-md-2 col-sm-2">
            <div class="pm-staff-profile-container" >
              <div class="pm-staff-profile-image-wrapper text-center">
 
              </div>                                
     
            </div>
          </div>

		  <div class="col-lg-4 col-md-2 col-sm-2">
            <div class="pm-staff-profile-container" >
              <div class="pm-staff-profile-image-wrapper text-center">
                <div class="pm-staff-profile-image">
                  <img src="img/produccionydesarrollo.jpg" alt="" class="img-thumbnail img-circle" />
                </div>   
              </div>                                
              <div class="pm-staff-profile-details text-center">  
                <p class="pm-staff-profile-name">Produccion y<br>desarrollo</p>

              </div>     
            </div>
          </div>
          <div class="col-lg-4 col-md-2 col-sm-2">
            <div class="pm-staff-profile-container" >
              <div class="pm-staff-profile-image-wrapper text-center">
                <div class="pm-staff-profile-image">
                  <img src="img/calvo.jpg" alt="" class="img-thumbnail img-circle" />
                </div>   
              </div>                                
              <div class="pm-staff-profile-details text-center">  
                <p class="pm-staff-profile-name">Calvo</p>

              </div>     
            </div>
          </div>
   

        </div>
      </div>
    </section>
	-->
    <!--/ patrocinadores-->

    <!--work-shop-->
	<!--
    <section id="work-shop" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Upcoming Workshop</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
            <hr class="bottom-line">
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="service-box text-center">
              <div class="icon-box">
                <i class="fa fa-html5 color-green"></i>
              </div>
              <div class="icon-text">
                <h4 class="ser-text">Mentor HTML5 Workshop</h4>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="service-box text-center">
              <div class="icon-box">
                <i class="fa fa-css3 color-green"></i>
              </div>
              <div class="icon-text">
                <h4 class="ser-text">Mentor CSS3 Workshop</h4>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="service-box text-center">
              <div class="icon-box">
                <i class="fa fa-joomla color-green"></i>
              </div>
              <div class="icon-text">
                <h4 class="ser-text">Mentor Joomla Workshop</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
	work-shop-->
    <!--/ work-shop-->
    <!--Conferencistas-->
	<!--
    <section id="Conferencistas" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Conferencistas invitados</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
            <hr class="bottom-line">
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="pm-staff-profile-container" >
              <div class="pm-staff-profile-image-wrapper text-center">
                <div class="pm-staff-profile-image">
                  <img src="img/mentor.jpg" alt="" class="img-thumbnail img-circle" />
                </div>   
              </div>                                
              <div class="pm-staff-profile-details text-center">  
                <p class="pm-staff-profile-name">Bryan Johnson</p>
                <p class="pm-staff-profile-title">Lead Software Engineer</p>
                
                <p class="pm-staff-profile-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem ullamcorper tincidunt. </p>
              </div>     
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="pm-staff-profile-container" >
              <div class="pm-staff-profile-image-wrapper text-center">
                <div class="pm-staff-profile-image">
                  <img src="img/mentor.jpg" alt="" class="img-thumbnail img-circle" />
                </div>   
              </div>                                
              <div class="pm-staff-profile-details text-center">  
                <p class="pm-staff-profile-name">Bryan Johnson</p>
                <p class="pm-staff-profile-title">Lead Software Engineer</p>
                
                <p class="pm-staff-profile-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem ullamcorper tincidunt. </p>
              </div>     
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="pm-staff-profile-container" >
              <div class="pm-staff-profile-image-wrapper text-center">
                <div class="pm-staff-profile-image">
                    <img src="img/mentor.jpg" alt="" class="img-thumbnail img-circle" />
                </div>   
              </div>                                
              <div class="pm-staff-profile-details text-center">  
                <p class="pm-staff-profile-name">Bryan Johnson</p>
                <p class="pm-staff-profile-title">Lead Software Engineer</p>
                
                <p class="pm-staff-profile-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem ullamcorper tincidunt. </p>
              </div>     
            </div>
          </div>
        </div>
      </div>
    </section>
	Conferencistas-->
    <!--/ Conferencistas-->

    <!--Courses-->
    <section id ="courses" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Congresos precedentes</h2>
            <hr class="bottom-line">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
              <img src="img/course01.jpg" class="img-responsive">
              <figcaption>
                  <h3>CONIA 2014</h3>
                  <p>Innovando para el desarrollo sostenible</p>
              </figcaption>
              <a target="_blank" href="http://dei.uca.edu.sv/conia2014/"></a>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
              <img src="img/course02.jpg" class="img-responsive">
              <figcaption>
                  <h3>CONIA 2015</h3>
                  <p>Cincuenta años de tecnología al servicio de la sociedad</p>
              </figcaption>
              <a target="_blank" href="http://dei.uca.edu.sv/conia2015/"></a>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
              <img src="img/course03.jpg" class="img-responsive">
              <figcaption>
                  <h3>CONIA 2016</h3>
                  <p>Soluciones tecnologícas sostenibles</p>
              </figcaption>
              <a target="_blank" href="http://cef.uca.edu.sv/conia2016/"></a>
            </figure>
          </div>
		  <!-- 
          <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
              <img src="img/course04.jpg" class="img-responsive">
              <figcaption>
                  <h3>Course Name</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
              </figcaption>
              <a href="#"></a>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
              <img src="img/course05.jpg" class="img-responsive">
              <figcaption>
                  <h3>Course Name</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
              </figcaption>
              <a href="#"></a>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
              <img src="img/course06.jpg" class="img-responsive">
              <figcaption>
                  <h3>Course Name</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
              </figcaption>
              <a href="#"></a>
            </figure>
          </div>
		  -->
        </div>
      </div>
    </section>
    <!--/ Courses-->

    <!--Footer-->
    <?php
      include 'footer.php';
    ?>
    <!--/ Footer-->
    
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
    
  </body>
</html>