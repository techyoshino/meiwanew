<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "page" div and all content after.
 *
 * @package WordPress
 * @subpackage SketchThemes
 * @since Lovebond Lite 1.0.0
 */
?>
<?php
$lovebond_lite_fb_url		= get_theme_mod('lovebond_lite_fbook_link', '#');
$lovebond_lite_tw_url		= get_theme_mod('lovebond_lite_twitter_link', '#');
$lovebond_lite_gplus_url	= get_theme_mod('lovebond_lite_gplus_link', '#');
$lovebond_lite_dribbble_url	= get_theme_mod('lovebond_lite_dribbble_link', '#');
$lovebond_lite_pinterest_url	= get_theme_mod('lovebond_lite_pinterest_link', '#');
$lovebond_lite_skype_url	= get_theme_mod('lovebond_lite_skype_link', '#');
$lovebond_lite_instagram_url	= get_theme_mod('lovebond_lite_instagram_link', '#');
$lovebond_lite_vk_url	= get_theme_mod('lovebond_lite_vk_link', '#');
$lovebond_lite_whatsapp_url	= get_theme_mod('lovebond_lite_whatsapp_link', '#');
?>
<!-- BEGIN: FOOTER -->
    <section id="footer-wrapper" class="">

    	<!-- BEGIN: CONTAINER -->
    	<div class="container">

    		<!-- BEGIN: INNER WRAPPER -->

            <?php
            /*
	    	<div class="row footer-inner-wrapper">

            

	    		<div class="social-section-wrap">
	    			<?php if( $lovebond_lite_fb_url != '' ){ ?>
	    				<a href="<?php echo esc_url($lovebond_lite_fb_url); ?>"><i class="fa fa-facebook"></i></a>
					<?php } ?>
					<?php if( $lovebond_lite_tw_url != '' ){ ?>
	    				<a href="<?php echo esc_url($lovebond_lite_tw_url); ?>"><i class="fa fa-twitter"></i></a>
					<?php } ?>
					<?php if( $lovebond_lite_gplus_url != '' ){ ?>
	    				<a href="<?php echo esc_url($lovebond_lite_gplus_url); ?>"><i class="fa fa-google-plus"></i></a>
					<?php } ?>
					<?php if( $lovebond_lite_dribbble_url != '' ){ ?>
	    				<a href="<?php echo esc_url($lovebond_lite_dribbble_url); ?>"><i class="fa fa-dribbble"></i></a>
					<?php } ?>
					<?php if( $lovebond_lite_pinterest_url != '' ){ ?>
	    				<a href="<?php echo esc_url($lovebond_lite_pinterest_url); ?>"><i class="fa fa-pinterest"></i></a>
					<?php } ?>
					<?php if( $lovebond_lite_skype_url != '' ){ ?>
	    				<a href="<?php echo esc_url($lovebond_lite_skype_url); ?>"><i class="fa fa-skype"></i></a>
					<?php } ?>
					<?php if( $lovebond_lite_instagram_url != '' ){ ?>
	    				<a href="<?php echo esc_url($lovebond_lite_instagram_url); ?>"><i class="fa fa-instagram"></i></a>
					<?php } ?>
					<?php if( $lovebond_lite_vk_url != '' ){ ?>
	    				<a href="<?php echo esc_url($lovebond_lite_vk_url); ?>"><i class="fa fa-vk"></i></a>
					<?php } ?>
					<?php if( $lovebond_lite_whatsapp_url != '' ){ ?>
	    				<a href="<?php echo esc_url($lovebond_lite_whatsapp_url); ?>"><i class="fa fa-whatsapp"></i></a>
					<?php } ?>
	    		</div>

	    		<div class="credit-wrap">
	    			<span><?php printf( __( 'Lovebond Theme By %s | %s', 'lovebond-lite' ), '<a href="'.esc_url('https://sketchthemes.com').'"><strong>Sketchthemes</strong></a>', wp_kses_post( get_theme_mod( 'lovebond_lite_copyright', __('Proudly Powered by WordPress', 'lovebond-lite') ) ) ); ?></span>
	    		</div>

	    	</div>
            */
            ?>
	    	<!-- END: INNER WRAPPER -->

            <!-- BEGIN:RECRUIT  -->

            <?php
            /*            

            <section class="recruit">
                    

                <div class="recruit-inner scroll_element scroll_off0">

                    <div class="row">

                    <?php if(is_page( '29' )): ?>
                    
                    <?php else: ?>

                    <a href="<?php echo esc_url( home_url( '/recruitpage' ) ); ?>">

                            <div class="col-md-6 recruit-inner-left">
                            
                            <img src="<?php echo get_template_directory_uri(); ?>/images/Q-17.jpg" />
                                <div class="clearfix"></div>
                            </div>
                        

                            
                            <div class="col-md-6 recruit-inner-right">

                                    
                                <p class="recruit-title">RECRUIT</p>
                            
                                <div class="recruit-inner-right-txt">
                                    <p class="b">私たちと一緒に働きませんか？</p>
                                    <p>
                                    まだ世に無いモノを作り出す喜び<br />
                                    明和エンジニアリングで味わえます
                                    </p>
                                </div>	

                                
                            </div>
                        </a> 
                        <?php endif; ?>     
                    </div>
                        

                </div>

            </section>
            
            */
            ?>

            <!-- END:RECRUIT -->

            <!-- BEGIN:FOOTER CONTACT  -->

            <section class="footer-contact">

                <div class="footer-contact-inner scroll_element scroll_off0">

                    <div class="row">


                        <div class="col-md-6 footer-contact-inner-left">

                        <i class="fa fa-phone" aria-hidden="true"></i><a href="tel:0455805730">045-580-5730</a>
                        
                        <p>8:30～17:30（土曜・日曜・祝日定休）</p>
                
                        </div>
                    

                        
                        <div class="col-md-6 footer-contact-inner-right">

                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">お問い合わせ</a>
                            
                            <p>インターネットで24時間受付</p> 
                            
                        </div>
                    </div>
                    
                </div>

            </section>

            <!-- END:FOOTER CONTACT -->

            <!-- BEGIN:FOOTER FOOTER ABOUT  -->

            <section class="footer-about">

                <div class="footer-about-in">
                
                    <div class="footer-about-in-cap-img">
                        明和エンジニアリング株式会社
                    </div> 
               
                    <!-- //footer-about-in-cap-img -->
                        

                </div>

                

                
                    <?php
                    /*
                    <?php wp_list_pages('title_li'); ?>
                    */
                    ?>
                    <?php
                        wp_nav_menu( array( 
                            'menu' => 'footer' 
                          ) );
                    ?>
                 
            
            </sction>

            <!-- END:FOOTER FOOTER ABOUT -->



    	</div>
    	<!-- END: CONTAINER -->

    </section>
    <!-- END: FOOTER -->

    <footer>
    <p class="copyright">&copy; 1991-<?php echo date('Y') ?> Meiwa Engineering Co., Ltd.</p>
    </footer>

    <!-- BEGAIN: SCROLL -->
    <div class='scrolltop'>
    	<div class='scroll icon'><i class="fa fa-4x fa-angle-up"></i></div>

	</div>
	<!-- END: SCROLL -->

    <!-- <div class="tild-section"></div> -->
</div>
<?php wp_footer(); ?>



</body>
</html>