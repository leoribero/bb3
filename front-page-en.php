<?php 
/* Template Name: Front-page-english */
	
	get_header(); ?>

<?php get_template_part('header/header','frontpagen'); ?>
	
	<!-- slider -->
	
	<div class="revslider"><?php putRevSlider( 'r_hero_b' ); ?></div>
	<!-- wrapper -->
	<div id="contenedor-0-content">
		<div id="contenedor-main-content">	
			<div class="proyector_vimeo_page1">			
	
				<h1 class="titulo"><?php the_title(); ?></h1>
	
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
					<div class="contenido"><?php the_content(); ?></div>
	
					<br class="clear">
	
					<div class="editar_post"><?php edit_post_link(); ?></div>
						
				</article>
				<!-- /article -->
	
			<?php endwhile; ?>
	
			<?php else: ?>
	
				<!-- article -->
				<article>
	
					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	
				</article>
				<!-- /article -->
	
			<?php endif; ?>
	
			</div>
			
			<div id="footer-flotante" class="contenedor-inferior">
				<div class="grid1-3">
					<span class="area_barcelona">
					<h2 class="ciudad">BCN</h2><br>
					<p class="datos">+34 93 310 60 10<br>
					C/ Ribera 14, entresuelo 08003<br>
					<a href="mailto:hola@puenteaereofilms.com">hola@puenteaereofilms.com</a></p></span><!--area_barcelona-->
				</div>	
				<div class="grid1-6 area-logo-apcp"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/Apcp-logo.png" alt="Logo" class="logo-apcp"></a>
		</div><!--area-logo-apcp-->
				<div class="grid1-6 area-logo-social">
					<div class="logo_vim"><a href="https://vimeo.com/puenteaereo" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/Vimeo-icon.svg" alt="Logo" class="logo-social-home"></a>
					</div><!--logo_vim-->
					<div class="logo_facebook"><a href="https://www.facebook.com/PuenteAereoFilms/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/Facebook-icon.svg" alt="Logo" class="logo-social-home"></a>
					</div><!--logo_facebook-->
				</div><!--area-logo-social-->
				<div class="grid1-3">
					<span class="area_madrid">
					<h2 class="ciudad">MAD</h2><br>
					<p class="datos">+34 91 383 25 05<br> C/ Fuencarral 68, ático B. 28004<br><a href="mailto:hola@puenteaereofilms.com">hola@puenteaereofilms.com</a></p></span>
				</div><!--grid1-3-->
			</div><!--footer-flotante"-->
						<div id="footer-flotante" class="contenedor-inferior-textoslegales" style="color: #fff;"><?php echo comicpress_copyright(); ?>  Puenteaereofilms   |   <a href="http://puenteaereofilms.com/wp-content/uploads/2017/09/AVISO_LEGAL_2017.pdf" target="_blank">Legal disclaimer</a>   |   <a href="http://puenteaereofilms.com/wp-content/uploads/2017/09/Politica_de_Privacidad.pdf" target="_blank">Privacy policy</a>   <!--|   Powered by <a href="http://creativebot.es/" target="_blank"> @creativebot</a> --> </div>
		</div><!--contenedor-main-content-->
		<div id="contenedor-derecho"></div>
	</div><!-- contenedor-0-content -->			

	<?php get_footer(); ?>			