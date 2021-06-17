<?php
/**
 * The template part for displaying header image
 *
 * @package WordPress
 * @subpackage SketchThemes
 * @since Lovebond Lite 1.0.0
 */
?>
<?php if( get_header_image() ) { ?>

 <!--/LOADING/-->

 <?php
 /*

 <div class="loading opening">
	<div class="loading_inner">
		<div class="loading_logo">
			<div><span class="opa"></span><span></span></div>
			
	
			<img src="<?php echo get_template_directory_uri(); ?>/images/loading.png" />
		</div>
	</div>
</div>
*/
?>


<div id="loader-bg">
  <div id="loader">
	<div class="loading_logo_item">
		<div><span class="opa"></span><span></span></div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/loading.png" />
	</div>
  </div>
</div>
<div id="wrap">
  <!-- ロード後に表示させたい内容 -->
</div>

		
		
<section id="slider-wrapper" class="wrap wrap_on">


	<!-- </div> -->


	 <!--/MAIN/-->
	<div id="home">
		<div class="contents_main fix_h">
			<div class="contents_main_inner">
				<div class="contents_main_right">
					<div class="main_slide">
						<div class="main_slide_img main_slide_img0 opa">
							<div></div>
						</div>
						<div class="main_slide_img main_slide_img1 opa">
							<div></div>
						</div>
						<div class="main_slide_img main_slide_img2 opa">
							<div></div>
						</div>
						<div class="main_slide_img main_slide_img3 opa">
							<div></div>
						</div>
					</div>
					<a href="#" class="main_logo sp_disp link"></a>

				
				</div>


				<div class="contents_main_left">
					
					<a href="<?php echo esc_url(home_url('/')); ?>" class="logo-img main_logo link"><img id="lovebond-logo-img" src="<?php echo esc_url( get_theme_mod('lovebond_lite_logo_img') ); ?>" alt"<?php bloginfo('name'); ?>"></a>
				
					<div class="main_copy">
						<div>
							<p class="kerning ja0">明和エンジニアリング株式会社</p><span class="first-year">SINCE 1991｜平成3年創業</span></div>
						<div>
							<p class="kerning ja0 opa"><span>明和エンジニアリング株式会社</span></p>
						</div>
						<p class="kerning ja0 opa">明和エンジニアリング株式会社</p>
					</div>
				</div>

				<!-- <div class="contents_main_scroll contents_scroll">
					<div><span class="opa"></span></div>
				</div> -->

			</div>
		</div>
	</div>

			

				
</section>
<!-- <div class="sktwed-breadcrumbs"></div> -->
<?php } ?>