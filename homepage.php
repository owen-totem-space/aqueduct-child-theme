<?php

/*
Template Name: Homepage
*/
get_header(); 
?>


	<style>
		.showcase{
			background-image: url(<?php echo get_theme_mod( 'howl-themes_bgimg' );?>);
		}
	</style>
<div class="container">
	<?php if( get_theme_mod("show_announcement") ) : ?>
	<div class="emergency-announcement" style= "background-color: rgb(212, 0, 0); text-align: center; border-radius: 5px;">
		<p><?php echo $announcement = get_theme_mod( 'announcement', '' );?></p>
	</div>
	<?php endif ?>
	<div class="showcase container">
		<div class="overlay gradient container jumbotron bg">
		
				<div class="featured">
					<h1 class="front-header"><?php echo $homepage_content = get_theme_mod( 'site_title', 'Irish Mountaineering Club' );?></h1>
					<p class="established"><?php echo $subtext = get_theme_mod( 'subtext', 'Established 1942' ) ?></p>
					<div class="para">
						<p class="lead"><?php echo $welcome_content = get_theme_mod( 'welcome_content', 'Welcome to the IMC' )?></p>
						<div class="button-wrapper">
							
							<a class="btn-login" href="<?php echo $button_link = get_theme_mod( 'button_link', '' )?>" role="button">
							<button class="homepage-btn"><?php echo $button_content = get_theme_mod( 'button_content', 'Log In' )?>
							</button>
							</a>
							
							<?php if( get_theme_mod( 'show_button2') ) : ?>
							
							<a class="btn-login" href="<?php echo $button_link2 = get_theme_mod( "button_link2", "" )?>" role="button">
							<button class="homepage-btn"><?php echo $button_content2 = get_theme_mod( "button_content2", '' )?>
							</button>
							</a>
							
							<?php endif; ?>
							
							<?php if(  get_theme_mod( 'show_button3') ) : ?>
							
							<a class="btn-login" href="<?php echo $button_link3 = get_theme_mod( 'button_link3', '' )?>" role="button">
							<button class="homepage-btn"><?php echo $button_content3 = get_theme_mod( 'button_content3', '' )?>
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
