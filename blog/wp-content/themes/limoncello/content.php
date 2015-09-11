	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_size' );
		$url = $thumb['0']; ?>
	<?php if ( is_single() ) : ?>
		<article id="post-<?php the_ID(); ?>" class="entrada" style="">
		<style type="text/css">
			#header-noticia-interior{display: block!important;}
			.blog-content{  margin-top: -35px;position: relative; background-color: #fff;}
			.entry-content{padding: 0 15px;}
			.entry-content p{font-family: 'Cuprum', sans-serif;font-style: italic; font-size: 14px;}
		</style>
	<?php else : ?>
		<article id="post-<?php the_ID(); ?>" class="entrada hovers" style="background-image:url(<?php echo $url; ?>); min-height: 400px; background-size: 100% 100%;">
	<?php endif; // is_single() ?>
	
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<div class="featured-post">
			<?php _e( 'Featured post', 'twentytwelve' ); ?>
		</div>
		<?php endif; ?>
		
		<header class="entry-header" >
			<?php if ( is_single() ) : ?>
				<div class="entry-title col-sm-12 text-left">
                    <h1 class="entry-title arvo bold italic font-size-25 black-color"><?php the_title(); ?></h1>
                    <hr class="interior-hr">
				</div>

			<?php else : ?>
                            <div class="title-post-<?php the_ID(); ?> show-post-opacity entry-title col-sm-12 titulo-hover text-left ">
                                <a href="<?php the_permalink(); ?>" class=""  rel="bookmark"><h1 class="cuprum italic font-size-12 bold white-color"><?php the_title(); ?> <span class="plus-noticias">+</span></h1></a>
                            </div>
                            <!--<div class="col-sm-12 image-thumbnail"></div>-->

                           
                            
			<?php endif; // is_single() ?>


			<?php if ( comments_open() ) : ?>
<!--				<div class="comments-link">
					<?php comments_popup_link( '<span class="leave-reply btn btn-mini btn-inverse">' . __( 'Leave a reply', 'twentytwelve' ) . '</span>', __( '1 Reply', 'twentytwelve' ), __( '% Replies', 'twentytwelve' ) ); ?>
				</div> .comments-link -->
			<?php endif; // comments_open() ?>
		</header><!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
                    <div class="entry-summary">
                            <?php the_excerpt(); ?>

                    </div><!-- .entry-summary -->
                    
		<?php else : ?>
		<div class="entry-content justificado clearfix">
			<?php if ( is_single() ) : ?>	
					<?php the_content( __( '+', 'twentytwelve' ) ); ?>
			<?php else : ?>
			<?php endif; // is_single() ?>

			
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
						
		</div><!-- .entry-content -->
		<?php endif; ?>

	<div id="" class="entrada post-opacity hover-post-<?php the_ID(); ?>" style="">
		<div class="interior-post-opacity">
		 	<a href="<?php the_permalink(); ?>" class=""  rel="bookmark">
		 		<h1 class="arvo italic font-size-20 bold white-color text-center uppercase">
		 			<?php the_title(); ?>
		 		</h1>
				<?php the_content( __( '+', 'twentytwelve' ) ); ?>

		 	</a>
		</div>
	</div>
	</article><!-- #post -->
	

 
