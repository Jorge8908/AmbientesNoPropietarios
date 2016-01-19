<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Las 3 etiquetas meta por encima de debe ser lo primero en la cabeza ; cualquier otro contenido
    de cabeza debe venir * después * las siguientes etiquetas -->
    <title>Homepage</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">


      <!--  HTML5 y Respond.js apoyo IE8 de elementos HTML5 y consultas de medios de comunicación ->
      <! - ADVERTENCIA : Respond.js no funciona si ve la página a través de file: // ->
      <! - [if lt IE 9 ]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="container">
  		<div class="row" id="menu">
  			<div class="col-md-12">
        <nav class="row navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="col-md-offset-1 col-md-3 navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                  <img src="img/nav/logo.png" alt="Logo"></a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li><a href="#">Home <span class="sr-only">(actual)</span></a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Portfolio<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Fotografias</a></li>
                      <li><a href="#">Videos</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="#">Wordpress</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="#">Javascript</a></li>
                    </ul>
                  </li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
                <a href="#"><button  type="button" class = "btnBlog">Blog</button></a>
                <a href="#"><button class="btnBuscar">Search
                <img src="img/nav/search.png" width="35" height="35" alt=""></button></a>
            </div><!-- /.container-fluid -->
          </nav>	
      </div>
  		</div>
      <div class="row" id="carrusel">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              <li data-target="#carousel-example-generic" data-slide-to="3" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox"> 
              
              <div class="item">
                <img src="img/carrusel/foto2.jpg" alt="...">
                <div class="carousel-caption">
                    <h1>GOOD DESIGN IS GOOD BUSINESS</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultricies leo et quam ultricies dapibus.
                        Curabitur vestibulum sollicitudin efficitur. Duis eu bibendum nibh.
                        Aenean auctor semper efficitur. In quis massa condimentum, venenatis lacus in, lacinia urna.</p>
                    <a href="#"><button type="button" class="btnVerMas">LEARN MORE</button></a>
                </div>
              </div>
              <div class="item">
                <img src="img/carrusel/foto3.jpg" alt="...">
                <div class="carousel-caption">
                  <h1>GOOD DESIGN IS GOOD BUSINESS</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultricies leo et quam ultricies dapibus. 
                  Curabitur vestibulum sollicitudin efficitur. Duis eu bibendum nibh. 
                  Aenean auctor semper efficitur. In quis massa condimentum, venenatis lacus in, lacinia urna.</p>
                  <a href="#"><button type="button" class="btnVerMas">LEARN MORE</button></a>
                </div>
              </div>

              <div class="item active">
                <img src="img/carrusel/edificios.png" alt="..." class: "tales">
                <div class="carousel-caption">
                  <h1>GOOD DESIGN IS GOOD BUSINESS</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultricies leo et quam ultricies dapibus. 
                  Curabitur vestibulum sollicitudin efficitur. Duis eu bibendum nibh. 
                  Aenean auctor semper efficitur. In quis massa condimentum, venenatis lacus in, lacinia urna.</p>
                  <a href="#"><button type="button" class="btnVerMas">LEARN MORE</button></a>
                </div>
              </div>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
      </div>
      <div class="row" id="our_services">
      <span class="label label-primary">OUR SERVICES</span>
      <br><br><br>
        <div class="col-md-12">
          <div class="row">
                  <div class="col-md-10 col-md-offset-1">
                    <div class="col-md-3">
	                    <img src="img/our_services/1.png" alt="Imagen1" class="img-circle">
	                    <h5>Web Design</h5>
	                    <p class="par">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultricies leo et quam ultricies dapibus.
	                    <a href="#">Details</a>
	                    </p>
                    </div>
                    <div class="col-md-3">
	                    <img src="img/our_services/2.png" alt="Imagen2" class="img-circle">
	                    <h5>Search Optimization</h5>
	                    <p class="par">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultricies leo et quam ultricies dapibus.
	                    <a href="#">Details</a>
	                    </p>
                    </div>
                    <div class="col-md-3">
	                    <img src="img/our_services/3.png" alt="Imagen3" class="img-circle">
	                    <h5>Online Shop</h5>
	                    <p class="par">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultricies leo et quam ultricies dapibus.
	                    <a href="#">Details..</a>
	                    </p>
                    </div>
                    <div class="col-md-3">
	                    <img src="img/our_services/4.png" alt="Imagen4" class="img-circle">
	                    <h5>Social Media</h5>
	                    <p class="par">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultricies leo et quam ultricies dapibus.
	                    <a href="#">Details..</a>
	                    </p>
                    </div>
                  </div>
          </div>
        </div>
      </div>
      <div class="row" id="our_portfolio">
        <div class="col-md-12">
          <div class="row">
          <br>
                  <div class="col-md-10 col-md-offset-1">
                    <div class="col-md-10">
                    <h3>Our Portfolio Awesome</h3>
                    </div>
                    <div class="col-md-2">
                    <a href="#"><button type="button" class="btnTrabajos">More Work</button></a>
                    </div>
                  </div>
                  <div class="col-md-10 col-md-offset-1">
                  <br><br>
                    <div class="col-md-4">
                                  <div class="hovereffect">
                                      <img class="img-responsive" src="img/our_portfolio/image1.png" alt="Imagen3">
                                          <div class="overlay">
                                              <h2>Imagen1</h2>
                                                <p> 
                                                  <a href="img/our_portfolio/image1.png">VER</a>
                                                </p> 
                                          </div>
                                  </div>
                    <h4>Lorem ipsum dolor sit amet</h4>
                    <p class="parrOurPort">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    </p>
                    </div>
                    <div class="col-md-4">
                                  <div class="hovereffect">
                                      <img class="img-responsive" src="img/our_portfolio/image2.png" alt="Imagen3">
                                          <div class="overlay">
                                              <h2>Imagen2</h2>
                                                <p> 
                                                  <a href="img/our_portfolio/image2.png">VER</a>
                                                </p> 
                                          </div>
                                  </div>
                    <h4>Lorem ipsum</h4>
                    <p class="parrOurPort">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultricies leo et quam ultricies dapibus.
                    </p>
                    </div>
                    <div class="col-md-4">
                                  <div class="hovereffect">
                                      <img class="img-responsive" src="img/our_portfolio/image3.png" alt="Imagen3" >
                                          <div class="overlay">
                                              <h2>Details</h2>
                                                <p> 
                                                  <a href="img/our_portfolio/image3.png">VER</a>
                                                </p> 
                                          </div>
                                  </div>
                    <h4>Lorem ipsum dolor Sit</h4>
                    <p class="parrOurPort">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultricies.
                    </p>
                    </div>
                  </div>
          </div>
        </div>
      </div>
      <div class="row" id="what_we_offer">
          <div class="col-md-12">
              <div class="col-md-8 col-md-offset-2" id="cabWhatWeOffer">
                <h3 id="h3WhatWeOffer">WHAT WE OFFER</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et urna quis mi sodales viverra. Donec velit nibh, 
                tincidunt a sem a, suscipit volutpat augue. Morbi in felis id odio dapibus auctor sed ac enim.</p>
              </div>
              <div class="col-md-10 col-md-offset-1">
              <br><br>
                    <div class="col-md-3">
	                    <h5 id="h5WhatWeOffer">Web Design</h5>
	                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultricies leo et quam ultricies dapibus.
	                    </p>
	                    <a href="#"><button type="button" class="btnWhatWeOffer">Details</button></a>
                    </div>
                    <div class="col-md-3">
	                    <h5 id="h5WhatWeOffer">Optimización Búsqueda</h5>
	                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultricies leo et quam ultricies dapibus.
	                    </p>
                    </div>
                    <div class="col-md-3">
	                    <h5 id="h5WhatWeOffer">Online Shop</h5>
	                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultricies leo et quam ultricies dapibus.
	                    </p>
                    <a href="#"><button type="button" class="btnWhatWeOffer">Details</button></a>
                    </div>
                    <div class="col-md-3">
	                    <h5 id="h5WhatWeOffer">Social Media</h5>
	                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultricies leo et quam ultricies dapibus.
	                    </p>
                    </div>
              </div>
              <div class="col-md-8 col-md-offset-2" id="cabWhatWeOffer">
              <hr width=100% align="center">
                <h3 id="h3WhatWeOffer">TESTIMONIALS</h3>
                <h3 id="h3parrafo">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et urna quis mi sodales viverra. Donec velit nibh, 
                tincidunt a sem a, suscipit volutpat augue."</h3>
              </div>
              <div class="col-md-12 centered" id="cabWhatWeOffer">
                <h6 class="JonDoe">Jon Doe / CEO of LoremIpsum</h6>
                <a href="#"><img src="img/testimonials/usuario1.jpeg" alt="Imagen1" class="img-circle"></a>
                <a href="#"><img src="img/testimonials/usuario2.jpeg" alt="Imagen2" class="img-circle"></a>
                <a href="#"><img src="img/testimonials/usuario3.jpeg" alt="Imagen3" class="img-circle"></a>
              </div>
          </div>
      </div>
      <div class="row" id="footer">
        <div class="col-md-12">
        <br>
            <div class="row">
                      <div class="col-md-10 col-md-offset-1">
                        <div class="col-md-3">
                        <h4>TWITTER FEEDS</h4>
                        <p id="parrafoPie">Check Out this great theme item
                        <a href="#">http://tadjalskfj.com</a>
                        <p id="parrafoPie2">2 weeks ago</p>
                        </p>
                        <hr width=100% align="center">
                        <p id="parrafoPie">Check Out this great theme item
                        <a href="#">http://tadjalskfj.com</a>
                        <p id="parrafoPie2">2 weeks ago</p>
                        </p>
                        <hr width=100% align="center">
                        <p id="parrafoPie">Check Out this great theme item
                        <a href="#">http://tadjalskfj.com</a>
                        <p id="parrafoPie2">2 weeks ago</p>
                        </p>
                        </div>
                        <div class="col-md-3">
                        <h4>NEWSLETTER</h4>
                        <p id="parrafoPie3">Lorem ipsum dolor sit amet,consectetur adipiscing elit.Mauris nec ipsum at lacus.
                        <hr width=100% align="center">
                        <form role="form">
                          <div class="form-group">
                            <label for="email">Your Email address:</label>
                            <input type="email" class="form-control" id="email">
                          </div>





                            <button type="submit" class="boton" >Sign up</button>


                        </form>
                        </p>
                        </div>
                        <div class="col-md-3">
                        <h4>RECENT PROYECTS</h4>
                        <table>
                          <tr>
                          <td><img src="img/footer/recent.jpeg"/></td>
                          <td><p class="par">Sketchy Business Card</p>
                           <p><a class="par" href="">http://tadjalskfj.com</a></p>
                          <p class="par">2 weeks ago</p></td>
                            </tr>
                        </table>
                        <hr width=100% align="center">
                        <table>
                          <tr>
                          <td><img src="img/footer/recent.jpeg"/></td>
                          <td><p class="par">Sketchy Business Card</p>
                           <p class="par"><a href="">http://tadjalskfj.com</a></p>
                          <p class="par">2 weeks ago</p></td>
                            </tr>
                        </table>
                        <hr width=100% align="center">
                        <table>
                          <tr>
                          <td><img src="img/footer/recent.jpeg"/></td>
                          <td><p class="par">Sketchy Business Card</p>
                           <p class="par"><a href="">http://tadjalskfj.com</a></p>
                          <p class="par">2 weeks ago</p></td>
                            </tr>
                        </table> 
                        </p>
                        </div>
                        <div class="col-md-3">
                        <h4>CONTACT</h4>
                        <table>
                          <tr>
                          <td><img src="img/footer/phone.png"/></td>
                          <td><p>1-000-000-0000</p>
                              <p>1-000-000-0000</p></td>
                            </tr>
                        </table>
                        <hr width=100% align="center">
                        <table>
                          <tr>
                          <td><img src="img/footer/tablet.png"/></td>
                          <td><p>1-000-000-0000</p>
                              <p>1-000-000-0000</p></td>
                            </tr>
                        </table>
                        <hr width=100% align="center">
                        <table>
                          <tr>
                          <td><img src="img/footer/carta.png"/></td>
                          <td><p><a href="">abcdefg@hijs.dfh</a></p>
                              <p><a href="">fjashfaf@jkfs.ckd</a></p></td>
                            </tr>
                        </table>
                        </p>
                        </div>
                      </div>
              </div>
        </div>

      </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>