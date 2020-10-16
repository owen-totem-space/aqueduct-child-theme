<?php

function imc_footer(){?>
<footer id="colophon" class="site-footer" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">

    <div class="footer-container container">
        <div class="logo-container">
                <a class="logo-img-footer"href="https://www.irishmountaineeringclub.org/"><img src= <?php echo get_stylesheet_directory_uri() . '/img/logoBW-100x100.png' ?> alt="LOGO">
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
                <a href='<?php echo $list1_link1 = get_theme_mod( "list1_link1", 'https://www.irishmountaineeringclub.org/publications/books/' )?>'>
                <i class='<?php echo $list1_img1 = get_theme_mod( "list1_img1", 'fa fa-book')?>' aria-hidden="true"></i><?php echo $list1_content1 = get_theme_mod( "list1_content1", 'Books' )?></a>
                <a href='<?php echo $list1_link2 = get_theme_mod( "list1_link2", '' )?>'>
                <i class='<?php echo $list1_img2 = get_theme_mod( "list1_img2", 'fa fa-envelope-o' )?>' aria-hidden="true"></i><?php echo $list1_content2 = get_theme_mod( "list1_content2", 'Newsletters' )?></a>
                <a href='<?php echo $list1_link3 = get_theme_mod( "list1_link3", '' )?>'>
                <i class='<?php echo $list1_img3 = get_theme_mod( "list1_img3", '' )?>' aria-hidden="true"></i><?php echo $list1_content3 = get_theme_mod( "list1_content3", '' )?></a>
                <a href='<?php echo $list1_link4 = get_theme_mod( "list1_link4", '' )?>'>
                <i class='<?php echo $list1_img4 = get_theme_mod( "list1_img4", '' )?>' aria-hidden="true"></i><?php echo $list1_content4 = get_theme_mod( "list1_content4", '' )?></a>
                <a href='<?php echo $list1_link5 = get_theme_mod( "list1_link5", '' )?>'>
                <i class='<?php echo $list1_img5 = get_theme_mod( "list1_img5", '' )?>' aria-hidden="true"></i><?php echo $list1_content5 = get_theme_mod( "list1_content5", '' )?></a>
            </div>
        </div>
        <div class="footer-middle">
                <h2>HUT</h2>
            <div class="footer-list">   
                <a href="<?php echo $list2_link1 = get_theme_mod( "list2_link1", 'https://www.irishmountaineeringclub.org/hut/' )?>">
                <i class='<?php echo $list2_img1 = get_theme_mod( "list2_img1", 'fa fa-home' )?>' aria-hidden="true"></i><?php echo $list2_content1 = get_theme_mod( "list2_content1", 'Hut Facilities' )?></a>
                <a href='<?php echo $list2_link2 = get_theme_mod( "list2_link2", 'https://www.irishmountaineeringclub.org/accommodations/' )?>'>
                <i class='<?php echo $list2_img2 = get_theme_mod( "list2_img2", 'fa fa-bed' )?>' aria-hidden="true"></i><?php echo $list2_content2 = get_theme_mod( "list2_content2", 'Hut Booking' )?></a>
                <a href='<?php echo $list2_link3 = get_theme_mod( "list2_link3", 'https://www.irishmountaineeringclub.org/about/kindred/' )?>'>
                <i class='<?php echo $list2_img3 = get_theme_mod( "list2_img3", 'fa fa-thumbs-up' )?>' aria-hidden="true"></i><?php echo $list2_content3 = get_theme_mod( "list2_content3", 'Kindred Clubs' )?></a>
                <a href='<?php echo $list2_link4 = get_theme_mod( "list2_link4", '' )?>'>
                <i class='<?php echo $list2_img4 = get_theme_mod( "list2_img4", '' )?>' aria-hidden="true"></i><?php echo $list2_content4 = get_theme_mod( "list2_content4", '' )?></a>
                <a href='<?php echo $list2_link5 = get_theme_mod( "list2_link5", '' )?>'>
                <i class='<?php echo $list2_img5 = get_theme_mod( "list2_img5", '' )?>' aria-hidden="true"></i><?php echo $list2_content5 = get_theme_mod( "list2_content5", '' )?></a>
            </div>     
        </div>
        <div class="footer-end">
            <h2>INFO</h2>
            <div class="footer-list">
                <a href="<?php echo $list3_link1 = get_theme_mod( "list3_link1", 'https://www.irishmountaineeringclub.org/about/documents/data-privacy-policy/' )?>">
                <i class='<?php echo $list3_img1 = get_theme_mod( "list3_img1", 'fa fa-user-secret' )?>' aria-hidden="true"></i><?php echo $list3_content1 = get_theme_mod( "list3_content1", 'Data Privacy' )?></a>
                <a href='<?php echo $list3_link2 = get_theme_mod( "list3_link2", 'https://www.irishmountaineeringclub.org/about/documents/expedition-grant-policy/' )?>'>
                <i class='<?php echo $list3_img2 = get_theme_mod( "list3_img2", 'fa fa-eur' )?>' aria-hidden="true"></i><?php echo $list3_content2 = get_theme_mod( "list3_content2", 'Expedition Grant' )?></a>
                <a href='<?php echo $list3_link3 = get_theme_mod( "list3_link3", 'https://www.irishmountaineeringclub.org/about/documents/constitution/' )?>'>
                <i class='<?php echo $list3_img3 = get_theme_mod( "list3_img3", 'fa fa-graduation-cap' )?>' aria-hidden="true"></i><?php echo $list3_content3 = get_theme_mod( "list3_content3", 'Constitution' )?></a>
                <a href="<?php echo $list3_link4 = get_theme_mod( "list3_link4", 'https://www.irishmountaineeringclub.org/membership/renew/' )?>">
                <i class='<?php echo $list3_img4 = get_theme_mod( "list3_img4", 'fa fa-eur' )?>' aria-hidden="true"></i><?php echo $list3_content4 = get_theme_mod( "list3_content4", 'Renew Membership' )?></a>
                <a href='<?php echo $list3_link5 = get_theme_mod( "list3_link5", '' )?>'>
                <i class='<?php echo $list3_img5 = get_theme_mod( "list3_img5", '' )?>' aria-hidden="true"></i><?php echo $list3_content5 = get_theme_mod( "list3_content5", '' )?></a>
                
            </div>
        </div>
        
    </div> <!-- footer-container -->
</div> <!-- footer .site-footer -->
  
<?php } ?>