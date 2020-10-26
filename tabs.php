<?php
/**
 * Template Name: Tab Page
 */

get_header(); 
?>
<?php
$childpages = new WP_Query( array(
    'post_type'         =>  'page',
    'posts_per_page'    =>  -1,
    'post_parent'       =>  $post->ID,
    // 'no_found_rows'     =>  true
) );
$newNum = 1;
?>


<div class="main-outer container">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
        <div class="tabs-parent-title"><h2><?php the_title(); ?></h2></div>
        <div class= "tabs-parent-content"><?php the_content(); ?></div>

            <div class="darkTab">
                <div id="minimalTabs" class="minimalTabs">
                    <ul>

    <?php while($childpages->have_posts()) : $childpages->the_post(); ?>

                        <li><a href="#tabs-<?php echo $newNum ?>"><?php the_title() ?></a></li>
                
    <?php $newNum++; endwhile; wp_reset_postdata(); ?>

                    </ul>

                    <div class="contents">
    <?php $newNum = 1 ?>
    <?php while($childpages->have_posts()) : $childpages->the_post(); ?>
                    
                        <div id="tabs-<?php echo $newNum ?>"> 
                            <p><?php the_content() ?></p>        
                        </div>
                    

    <?php $newNum ++; endwhile; wp_reset_postdata(); ?>
                    </div> <!-- contents -->
                    
                
                </div> <!-- id="tabs -->
            </div><!-- darkTab -->



         <!--      Accordion Start          -->   
    <?php $newNum = 1 ?>
            <div id="accordion" class= "minimalAccordion responsive">
                
    <?php while($childpages->have_posts()) : $childpages->the_post(); ?>

                    <div class="accordion-title">
                        <div class="title-text"><?php the_title() ?>
                            <div class="accordion-arrow">
                            <i class= "fa fa-angle-down"></i>
                            </div>
                        </div>
                    </div>

      
                    <div class="content">
            
                        <p><?php the_content() ?></p>
            
                    </div>
                   
    <?php $newNum ++; endwhile; wp_reset_postdata(); ?>
                
            </div> <!-- accordion -->


        </main>
    </div> <!-- Primary Content Area -->
    <?php
     get_sidebar(); 
     ?>
</div> <!--container -->


<?php get_footer(); ?>