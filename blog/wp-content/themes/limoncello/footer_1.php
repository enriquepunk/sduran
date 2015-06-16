            </div>
            </div><!--End main-content-->
            <footer id=footer>
                <nav id="menu-footer" class="hidden-phone text-center">
                    <ul class="nav nav-tabs inline-block">
                        <li id="home-link"><a href="http://www.punk-emkt.com">Inicio</a></li>
                        <li id="services-link"><a href="http://www.punk-emkt.com/servicios">Servicios</a></li>
                        <li id="portafolio-link"><a href="http://www.punk-emkt.com/portafolio">Portafolio</a></li>
                        <li id="agency-link"><a href="http://www.punk-emkt.com/la-agencia">La agencia</a></li>
                        <li id="blog-link"><a href="http://www.punk-emkt.com/blog">Blog</a></li>
                        <li id="contact-link"><a href="#">Contacto</a></li>
                        <li id="workshops-link"><a href="http://www.punk-emkt.com/workshops/" target="_blank">#PunkWorkShops</a></li>
                    </ul>
                </nav>
                <hr class="styled hidden-phone">
                <div><p id=copyright class="text-center"><small>Todos los derechos reservados. Punk e-Marketing & Consulting 2013</small></p></div>
            </footer> 
            
        </div><!--End wrapper-->
<!--        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
        <script type="text/javascript" src="<?php bloginfo( 'url' );?>/../js/jquery1.9.js"></script>
        <script type="text/javascript" src="<?php bloginfo( 'url' );?>/../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo( 'url' );?>/../js/mansory.js"></script>
        <script type="text/javascript" src="<?php bloginfo( 'url' );?>/../js/jquery-validate.min.js"></script>
        <script>
            $(document).ready(function(){
                $('a,li,.tool-tip').tooltip({
                    'placement': 'bottom'
                })
                $('#blog-link').addClass("active")
                var loaded = false;
                 if( screen.width <= 480 ) {
                     loaded=true;
                 }
                $("#contact-link a").on("click",function (e){
                     e.preventDefault()
                     $("#menu-button").trigger("click")
                     if(!loaded){
                         loaded=true;
                         $("#mapa").load("../mapa")
                     }
                     
                    $("#loadcontact").slideToggle("slow","linear")
                 })
                 
                $("#contact-form").validate({
                    onKeyup : true,
                           eachValidField : function() {
                                    $(this).parent().removeClass('error').addClass('success');
                            },
                            eachInvalidField : function() {
                                    $(this).parent().removeClass('success').addClass('error');
                            },
                            valid: function (){
                                $.ajax({
                                    type: 'POST',
                                    url: "http://www.punk-emkt.com/contacto",
                                    data: $("#contact-form").serialize(),
                                    // Mostramos un mensaje con la respuesta de PHP
                                    success: function(data) {
                                        $("#contact-form .result").html(data)
                                        $("#contact-form").each(function(){
                                            this.reset();
                                        });
                                    }
                                })
                            },
                            sendForm : false
                });
                $("#close-contact").on("click",function(){
                    $("#loadcontact").slideToggle("slow","linear")
                })
            })
        </script>
        <?php wp_footer() ?>
    </body>
</html>