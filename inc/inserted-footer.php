<?php

function imc_footer(){?>
<footer id="colophon" class="site-footer" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">

    <div class="footer-container container">
        <div class="logo-container">
                <a class="logo-img-footer"href="<?php echo esc_url(home_url()); ?>"><img src= <?php echo esc_url(get_stylesheet_directory_uri()) . '/img/logoBW-100x100.png'; ?> alt="LOGO">
                <div class="overlay"></div></a>
            <div class="social">
                <a href="https://www.facebook.com/IrishMountaineeringClub">
                    <i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                <a href="http://www.twitter.com/irishmountclub">
                    <i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="https://vimeo.com/user48207507">
                <i class="fa fa-vimeo-square" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="darkButton">
            <input type="checkbox" id="dark-mode-toggle" class="darkMode"/>
            <label for="dark-mode-toggle" class="switch"></label>
            <h3 id=darkButton><i class='fa fa-moon-o' aria-hidden='true'></i> Dark</h3>
        </div>
        <div class="footer-first">
            <h2>PUBLICATIONS</h2>
            <div class="footer-list">
            <?php
                if (get_theme_mod('list1_content1')) {
                    echo 
                    '<a href="'.esc_url(get_theme_mod( "list1_link1" )).'">                
                    <i class="'.esc_attr(get_theme_mod( "list1_img1", "fa fa-book")).'" aria-hidden="true"></i>'
                    .esc_html__(get_theme_mod( "list1_content1", "Books" )).
                    '</a>';
                }

                if (get_theme_mod('list1_content2')) {
                    echo 
                    '<a href="'.esc_url(get_theme_mod( "list1_link2" )).'">                
                    <i class="'.esc_attr(get_theme_mod( "list1_img2", "fa fa-envelope-o")).'" aria-hidden="true"></i>'
                    .esc_html__(get_theme_mod( "list1_content2", "Newsletters" )).
                    '</a>';
                }
                if (get_theme_mod('list1_content3')) { 
                    echo 
                    '<a href="'.esc_url(get_theme_mod( "list1_link3" )).'">                
                    <i class="'.esc_attr(get_theme_mod( "list1_img3", "")).'" aria-hidden="true"></i>'
                    .esc_html__(get_theme_mod( "list1_content3", "" )).
                    '</a>';
                }
                if (get_theme_mod('list1_content4')) { 
                    echo 
                    '<a href="'.esc_url(get_theme_mod( "list1_link4" )).'">                
                    <i class="'.esc_attr(get_theme_mod( "list1_img4", "")).'" aria-hidden="true"></i>'
                    .esc_html__(get_theme_mod( "list1_content4", "" )).
                    '</a>';
                }
                if (get_theme_mod('list1_content5')) { 
                    echo 
                    '<a href="'.esc_url(get_theme_mod( "list1_link5" )).'">                
                    <i class="'.esc_attr(get_theme_mod( "list1_img5", "")).'" aria-hidden="true"></i>'
                    .esc_html__(get_theme_mod( "list1_content5", "" )).
                    '</a>';
                }
                ?>                    
            </div>
        </div>
        <div class="footer-middle">
            <h2>hut</h2>
            <div class="footer-list">
                <?php 
                if (get_theme_mod('list2_content1')) { 
                    echo 
                    '<a href="'.esc_url(get_theme_mod( "list2_link1" )).'">                
                    <i class="'.esc_attr(get_theme_mod( "list2_img1", "fa fa-home")).'" aria-hidden="true"></i>'
                    .esc_html__(get_theme_mod( "list2_content1", "Hut Facilities" )).
                    '</a>';
                }
                if (get_theme_mod('list2_content2')) { 
                    echo 
                    '<a href="'.esc_url(get_theme_mod( "list2_link2" )).'">                
                    <i class="'.esc_attr(get_theme_mod( "list2_img2", "fa fa-bed")).'" aria-hidden="true"></i>'
                    .esc_html__(get_theme_mod( "list2_content2", "Hut Booking" )).
                    '</a>';
                }
                if (get_theme_mod('list2_content3')) { 
                    echo 
                    '<a href="'.esc_url(get_theme_mod( "list2_link3" )).'">                
                    <i class="'.esc_attr(get_theme_mod( "list2_img3", "fa fa-thumbs-up")).'" aria-hidden="true"></i>'
                    .esc_html__(get_theme_mod( "list2_content3", "Kindred Clubs" )).
                    '</a>';
                }
                if (get_theme_mod('list2_content4')) { 
                    echo 
                    '<a href="'.esc_url(get_theme_mod( "list2_link4" )).'">                
                    <i class="'.esc_attr(get_theme_mod( "list2_img4", "")).'" aria-hidden="true"></i>'
                    .esc_html__(get_theme_mod( "list2_content4", "" )).
                    '</a>';
                }
                if (get_theme_mod('list2_content5')) { 
                    echo 
                    '<a href="'.esc_url(get_theme_mod( "list2_link5" )).'">                
                    <i class="'.esc_attr(get_theme_mod( "list2_img5", "")).'" aria-hidden="true"></i>'
                    .esc_html__(get_theme_mod( "list2_content5", "" )).
                    '</a>';
                }
                ?>
            </div>
        </div>
        <div class="footer-end">
            <h2>info</h2>
            <div class="footer-list">
                <?php 
                if (get_theme_mod('list3_content1')) { 
                    echo 
                    '<a href="'.esc_url(get_theme_mod( "list3_link1" )).'">                
                    <i class="'.esc_attr(get_theme_mod( "list3_img1", "fa fa-user-secret")).'" aria-hidden="true"></i>'
                    .esc_html__(get_theme_mod( "list3_content1", "Data Privacy" )).
                    '</a>';
                }
                if (get_theme_mod('list3_content2')) { 
                    echo 
                    '<a href="'.esc_url(get_theme_mod( "list3_link2" )).'">                
                    <i class="'.esc_attr(get_theme_mod( "list3_img2", "fa fa-eur")).'" aria-hidden="true"></i>'
                    .esc_html__(get_theme_mod( "list3_content2", "Expedition Grant" )).
                    '</a>';
                }
                if (get_theme_mod('list3_content3')) { 
                    echo 
                    '<a href="'.esc_url(get_theme_mod( "list3_link3" )).'">                
                    <i class="'.esc_attr(get_theme_mod( "list3_img3", "fa fa-graduation-cap")).'" aria-hidden="true"></i>'
                    .esc_html__(get_theme_mod( "list3_content3", "Constitution" )).
                    '</a>';
                }
                if (get_theme_mod('list3_content4')) { 
                    echo 
                    '<a href="'.esc_url(get_theme_mod( "list3_link4" )).'">                
                    <i class="'.esc_attr(get_theme_mod( "list3_img4", "fa fa-eur")).'" aria-hidden="true"></i>'
                    .esc_html__(get_theme_mod( "list3_content4", "Renew Membership" )).
                    '</a>';
                }
                if (get_theme_mod('list3_content5')) { 
                    echo 
                    '<a href="'.esc_url(get_theme_mod( "list3_link5" )).'">                
                    <i class="'.esc_attr(get_theme_mod( "list3_img5", "fa fa-users")).'" aria-hidden="true"></i>'
                    .esc_html__(get_theme_mod( "list3_content5", "Members Area" )).
                    '</a>';
                }
                ?>
            </div>
        </div>

               
                
    </div> <!-- footer-container -->
</div> <!-- footer .site-footer -->
  
<?php } ?>