<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title>
            <?php 
            global $page, $paged;
            wp_title( '|', true, 'right' );
            // Add the blog name.
            bloginfo( 'name' );
            ?>
        </title>
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
        <link href='http://fonts.googleapis.com/css?family=Oswald:300|Noto+Sans|Cedarville+Cursive' rel='stylesheet' type='text/css'>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link rel="shortcut icon" href="../img/favicon.png" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
    <body>
            <div class="container-fluid bg2" id="wrapper">
                <header id=header class="row-fluid">
                    <div id=logo  class="span3 text-center">
                        <a href="http://www.punk-emkt.com" data-placement="bottom" title="Punk e-Marketing & Consulting"><img src="<?php bloginfo( 'url' );?>/../img/logo.png" alt="Punk e-Marketing & Consulting"></a>
                        <hr class="visible-phone">
                    </div>
                    <div id=top-navs class="span9">
                       <div class="row-fluid" id="social-top-outer">
                           <div class="span10 offset1 row-fluid">
                               <div id=social-top class="span3 offset8 navbar">
                                    <ul class="nav row-fluid">
                                        <li id=facebook title="Facebook"><a href="http://www.facebook.com/punkemkt" target="_blank"></a></li>
                                        <li id=twitter   title="Twitter"><a href="https://twitter.com/punkemkt" target="_blank"></a></li>
                                        <li id=pinterest title="Pinterest"><a href="http://pinterest.com/punkemkt/" target="_blank"></a></li>
                                        <li id=instagram title="Instagram"><a href="http://instagram.com/punkemkt" target="_blank"></a></li>
                                        <li id=foursquare title="Forsquare"><a href="https://foursquare.com/punkemkt" target="_blank"></a></li>
                                    </ul>
                                </div>
                           </div>
                            
                        </div>
                        <div class="row-fluid" id="main-menu-outer">
                            <div class="span10 offset1">
                                    <div id="main-menu" class="navbar">
                                        <div class="container">
                                            <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                                            <a id="menu-button" class="btn btn-navbar magento visible-phone" data-toggle="collapse" data-target=".nav-collapse">
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                            </a>
                                            <!-- Be sure to leave the brand out there if you want it shown -->

                                            <!-- Everything you want hidden at 940px or less, place within here -->
                                            <nav class="nav-collapse collapse">
                                                <ul class="nav" style="">
                                                    <li id="home-link"><a href="http://www.punk-emkt.com">Inicio</a></li>
                                                    <li id="services-link"><a href="http://www.punk-emkt.com/servicios">Servicios</a></li>
                                                    <li id="portafolio-link"><a href="http://www.punk-emkt.com/portafolio">Portafolio</a></li>
                                                    <li id="agency-link"><a href="http://www.punk-emkt.com/la-agencia">La agencia</a></li>
                                                    <li id="blog-link"><a href="<?php  bloginfo('url')?>" >Blog</a></li>
                                                    <li id="contact-link"><a href="#">Contacto</a></li>
                                                    <li id="workshops-link"><a href="http://www.punk-emkt.com/workshops" target="_blank">#PunkWorkShops</a></li>
                                                    <li id="merida-link"><a href="http://www.punk-emkt.com/punk-merida">Punk Mérida</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        
                        
                    </div>
                    <hr class="styled hidden-phone" style="margin-top: 108px">
                </header>
               <div id="loadcontact" class="">
                    <div id="contacto" class="row-fluid">
                        <div id="mapa" class="hidden-phone">
                        </div>
                        <div class="container">
                            <div id="formulario" class="shadow">
                                
                                <div class="text-right"><a id="close-contact" style="">x</a></div>
                                <h4 class="magento text-center">Llámanos, escríbenos o toca nuestra puerta.</h4>
                                <hr>
                                <div class="row-fluid">
                                    <div class="hidden-phone"><a href="tel:2514012" ><i class="icon-phone icons"></i><small>2 51 40 12</small></a></div>
                                    <div class="hidden-phone"><a href="mailto:info@punkmkt.com" title=""><i class="icon-envelope icons"></i><small>info@punkmkt.com</small></a></div>

                                    <div class="visible-phone btn-group">
                                        <a href="tel:2514012" class="btn btn-small">
                                            <i class="icon-phone icons"></i><br>
                                            2 51 40 12
                                        </a>
                                        <a class="btn btn-small" href="mailto:info@punkmkt.com" title="">
                                            <i class="icon-envelope icons"></i><br>
                                            info@punkmkt.com
                                        </a>
                                        <a class="btn btn-small" href="#" title="">
                                            <i class="icon-map-marker icons"></i><br>
                                            Ubicación
                                        </a>
                                    </div>

                                    <div class="hidden-phone"><i class="icon-map-marker icons"></i><small>Calle Antilope N° 68, SM 20 Cancún México 77500</small></div>

                                </div>
                                <hr>
                                <form id="contact-form">
                                    <div class="row-fluid">
                                        <label class="control-group"><small class="span4">Nombre<span class="text-error">*</span></small><input class="span7" type=text data-required="true" name="nombre"></label>
                                    </div>
                                    <div class="row-fluid">
                                        <label class="control-group"><small class="span4">Correo<span class="text-error">*</span></small><input class="span7" type=email data-required="true" name="correo"></label>
                                    </div>
                                    <div class="row-fluid">
                                        <label class="control-group"><small class="span4">Mensaje<span class="text-error">*</span></small><textarea class="span7" data-required="true" name="comentario"></textarea></label>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span7"></div><button class="btn span4" id="">Enviar</button>
                                    </div>
                                    <div class="row-fluid result">
                                    </div>
                                </form>
                            </div>
                        </div>    
                        
                </div>
                </div>
                <div  class="container" id="content-outer">
                    
                    <div class="row-fluid">
                        
                    
                    
                
            
            