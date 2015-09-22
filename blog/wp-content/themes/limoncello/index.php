<?php get_header(); ?>

    <div class="row">
        <div class="index col-sm-12" id="main-content">

           <div class="titulo_blog blanco sancreek-font size36 text-center"></div>
              
           <?php 
                $numpost=0;
                if ( have_posts() ) {
                        while ( have_posts() ) {
                                the_post(); 
                                $numpost++;
                                if ( ($numpost % 3 == 0) || ($numpost == 1)){echo '<div class="row" >';}
                                echo '<div class="item shadow post col-sm-4 noticias-skew" style="position:relative; margin:20px 0;">';
                                    get_template_part( 'content', get_post_format() );
                                echo '</div>';
                                if ( $numpost % 3 == 0) {echo '</div>';}
                        } // end while
                } // end if

            ?>

        </div>
        <!--<div class="col-sm-3"  id="sidebar-outer" >
           
           <?php get_sidebar(); ?>


        </div>-->
    </div>
    
    
<?php get_footer(); ?>