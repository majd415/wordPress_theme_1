<?php/* Template Name: Home blogger */  ?>
<?php get_header(); ?>
<body>
<?php 
                            
                    
                            
                            $blooger_logo_text_1=get_field('blooger_logo_text_1');
                            $blooger_logo_text_bot=get_field('blooger_logo_text_bot');
                            $blooger_logo_title_3=get_field('blooger_logo_title_3');
                            $blooger_logo_title_4=get_field('blooger_logo_title_4');
                            $blooger_banner_image_1=get_field('blooger_banner_image_1');
                            $blooger_banner_image_2=get_field('blooger_banner_image_2');
                            $blooger_banner_image_3=get_field('blooger_banner_image_3');
                            $blooger_banner_image_4=get_field('blooger_banner_image_4');
                            $blooger_banner_image_5=get_field('blooger_banner_image_5');
                            $blooger_banner_image_6=get_field('blooger_banner_image_6');
                            $blooger_banner_image_7=get_field('blooger_banner_image_7');





                            // $blooger_banner_text_1=get_field('blooger_banner_text_1');
                            // $blooger_banner_text_2=get_field('blooger_banner_text_2');
                            // $blooger_banner_text_3=get_field('blooger_banner_text_3');
                            // $blooger_banner_text_4=get_field('blooger_banner_text_4');
                            // $blooger_banner_text_5=get_field('blooger_banner_text_5');
                            // $blooger_logo_image_1=get_field('blooger_logo_image_1');

                   
                           
                          
                         
                    
							
?>
    <section class="home" >
        <div class="navbar">
            <h1><?php echo $blooger_logo_text_1; ?></h1>
            <button id="buybtn" ><?php echo $blooger_logo_text_bot; ?></button>
        </div>
        <h2 class="text1">
        <?php echo $blooger_logo_title_3; ?><br> <?php echo $blooger_logo_title_4; ?>
        </h2>
        <div class="imgs">
            <div class="Rectangle" id="ajax" >

                <img class="img-inrect" src="<?php echo $blooger_banner_image_1['url']; ?>" alt="">
            </div>

            <div class="Rectangle" id="react" >

                <img class="img-inrect" src="<?php echo $blooger_banner_image_2['url']; ?>" alt="">
            </div>
            <div class="Rectangle" id="html5"  >

                <img class="img-inrect1" src="<?php echo $blooger_banner_image_3['url']; ?>" alt="">
            </div>
            <div class="Rectangle" id="xml"  >

                <img class="img-inrect" src="<?php echo $blooger_banner_image_4['url']; ?>" alt="">
            </div>
            <div class="Rectangle" id="js"  >

                <img class="img-inrect1" src="<?php echo $blooger_banner_image_5['url']; ?>" alt="">
            </div>
            <div class="Rectangle" id="css"  >

                <img class="img-inrect1" src="<?php echo $blooger_banner_image_6['url']; ?>" alt="">
            </div>
            <div class="Rectangle" id="sass"  >

                <img class="img-inrect1" src="<?php echo $blooger_banner_image_7['url']; ?>" alt="">
            </div>
        </div>
        <div class="imgss">
            <button class="debtn" >Demos</button>
        </div>
        <br>
    </section>
    <section class="blogp">
        <div class="borderdown" ></div>
        <div class="imagssection">
        <?php	$loop =new  WP_Query(array('post_type'=>'blooger_temp','orderby'=>'post_id','order'=>'ASC'));
                
                
                
                
                ?>
                   <?php while($loop->have_posts()) : $loop-> the_post();  ?>
                   <?php $blooger_temp_image=get_field('blooger_temp_image');  ?>

            <div class="card">
                <a href="<?php echo $blooger_temp_image['url']; ?>"><img  src="<?php echo $blooger_temp_image['url']; ?>" alt="">
                </a>
                <h4><?php echo the_field('blooger_temp_text_1'); ?></h4>
            </div>
            <?php endwhile; wp_reset_query();?>
        </div>
        <br><br><br>
        <div class="borderdown" ></div>
        
    </section>

    
</body>


        


    



<?php get_footer(); ?>