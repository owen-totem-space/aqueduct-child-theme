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
	<div class="emergency-announcement">
		<p><?php echo esc_html__(get_theme_mod( 'announcement', '' ));?></p>
		
		<?php if( get_theme_mod( 'show_announce_button' ) ) : ?>
							
			<a class="link-announce" href="<?php echo esc_url(get_theme_mod( 'announce_link', '' ));?>" role="button">
			<button class="announce-btn"><?php echo esc_html__(get_theme_mod( 'announce_btn_content' ));?>
			</button>
			</a>

		<?php endif; ?>

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

							<div id=login-btn-container>
                                <?php if( ! is_user_logged_in() ) { ?>
                                
                                <a class="btn-login" role="button">
                                <button id="login-modal-btn" class="login-modal-btn">Log In</button>
                                </a>
                                <div id= "modal-container" class="modal-container">
                                    <div id="modal-body" class="modal-body">
									<img src= "<?php echo esc_url(get_stylesheet_directory_uri()) . '/img/logo-96x96.png'; ?>" alt="LOGO" style="height: 48px">
                                        <span id="modal-close" class="modal-close">&times;</span>

                                        <?php pmpro_login_form(); ?>
                                        
                                        <div class = "alt-links">
                                            <a href="<?php echo esc_url(site_url('/login/')); ?>">Lost Password</a>
                                        </div>

                                    </div>
                                </div>
                                <?php } else { ?>
                                    <a class="logout" href="<?php echo esc_url(wp_logout_url());?>">
                                    <button>Log Out</button></a>
                                
                                <?php } ?>
                                
                            </div>
							
							<?php if( get_theme_mod( 'show_button2') ) : ?>
							
							<a class="btn-homepage" href="<?php echo esc_url(get_theme_mod( "button2_link", '' ));?>" role="button">
							<button class="homepage-btn"><?php echo esc_html__(get_theme_mod( "button2_content", '' ));?>
							</button>
							</a>
							
							<?php endif; ?>
							
							<?php if(  get_theme_mod( 'show_button3') ) : ?>
							
							<a class="btn-lhomepage" href="<?php echo esc_url(get_theme_mod( 'button3_link', '' ));?>" role="button">
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
