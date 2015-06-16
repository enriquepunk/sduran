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
        <link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        
        <script src="../_/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../_/css/style.css">
        <link href="../_/css/bootstrap.css" rel="stylesheet">
        <link href="../_/css/bootstrap-responsive.min.css" rel="stylesheet">
        
        <link rel="shortcut icon" href="../img/favicon.png" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
    <body>
            <div class="container-fluid bg2" id="wrapper">
            <header id="header" class="row-fluid">
                <div class="span12">
                    <div class="span4 offset1">
                        <div id="logo" class="span8">
                            <a href="../index.php"><img src="../_/images/logo.png"></a>
                        </div>
                        <div id="redes-sociales" class="span2">
                            <ul>
                                <li><img src="../_/images/fb-icon.png"></li>
                                <li><img src="../_/images/twitter-icon.png"></li>
                                <li><img src="../_/images/trip_adviser.jpg"></li>
                            </ul>
                        </div>
                    </div>
                    <div id="main-menu" class="span6">
                        <div class="span12 hidden-phone"></div>
                        <div class="span12 hidden-phone"></div>
                        <div class="span12 hidden-phone" style="margin-bottom: 12px;"></div>
                        <div class="navbar">
                            <div class="navbar-inner menu">
                              <div class="container">
                                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                </a>
                                <a class="brand visible-phone" href="#">Menú principal</a>
                                <div class="nav-collapse">
                                  <ul class="nav">
                                    <li class="active"><a class="boright" href="../">Inicio</a></li>
                                    <li><a class="boright" href="../quienesomos">¿Quiénes somos?</a></li>
                                    <li><a class="boright" href="../sabiasque">Sabías que</a></li>
                                    <li><a class="boright" href="../menu">Menú</a></li>
                                    <li><a class="boright" href="../grupos">Grupos</a></li>
                                    <li><a class="boright" href="../noticias">Noticias</a></li>
                                    <li><a href="../contacto">Contacto</a></li>
                                  </ul><!-- /.nav -->
                                </div><!--/.nav-collapse -->
                              </div><!-- /.container -->
                            </div><!-- /.navbar-inner -->
                          </div><!-- /.navbar -->
                    </div>
                    
                </div>
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
                        
                    
                    
                
            
            