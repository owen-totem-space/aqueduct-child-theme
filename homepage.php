<?php

/*
Template Name: Homepage
*/
get_header(); 
?>


	<style>
		.showcase{
			background-image: url(<?php echo esc_url(get_theme_mod( 'bg_image', esc_url(get_stylesheet_directory_uri()) . '/img/wicklow-homepage-scaled-for-web.jpg' ))?>);
		}
	</style>
<div class="container">

	<?php if( get_theme_mod("show_announcement") ) : ?>
	<div class="emergency-announcement" style= "background-color: rgb(212, 0, 0); text-align: center; border-radius: 10px;">
		<p><?php echo esc_html__(get_theme_mod( 'announcement', '' ));?></p>
	</div>
	<?php endif ?>
	
	<div class="showcase container">
		<div class="overlay gradient container jumbotron bg">
		
				<div class="featured">
					<h1 class="front-header"><?php echo esc_html__(get_theme_mod( 'site_title', 'Irish Mountaineering Club' ));?></h1>
					<p class="established"><?php echo esc_html__(get_theme_mod( 'subtext', 'Established 1942' )); ?></p>
					<div class="para">
						<p class="lead"><?php echo esc_html__(get_theme_mod( 'welcome_content', 'Welcome to the IMC' ));?></p>
						<div class="button-wrapper">

							<?php if( get_theme_mod( 'button1_content' ) ) : ?>
							
							<a class="btn-login" href="<?php echo esc_url(get_theme_mod( 'button1_link', '' ));?>" role="button">
							<button class="homepage-btn"><?php echo esc_html__(get_theme_mod( 'button1_content', 'Log In' ));?>
							</button>
							</a>

							<?php endif; ?>
							
							<?php if( get_theme_mod( 'show_button2') ) : ?>
							
							<a class="btn-login" href="<?php echo esc_url(get_theme_mod( "button2_link", "" ));?>" role="button">
							<button class="homepage-btn"><?php echo esc_html__(get_theme_mod( "button2_content", '' ));?>
							</button>
							</a>
							
							<?php endif; ?>
							
							<?php if(  get_theme_mod( 'show_button3') ) : ?>
							
							<a class="btn-login" href="<?php echo esc_url(get_theme_mod( 'button3_link', '' ));?>" role="button">
							<button class="homepage-btn"><?php echo esc_html__(get_theme_mod( 'button3_content', '' ));?>
							</button>
							</a>
							<?php endif; ?>
						</div>
					</div>
				</div>

		</div>
	</div>
</div>
<?php get_footer(); ?>
