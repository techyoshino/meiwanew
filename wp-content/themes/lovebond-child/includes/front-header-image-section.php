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
 <div class="loading opening">
	<div class="loading_inner">
		<div class="loading_logo">
			<div><span class="opa"></span><span></span></div>
			<img src="img/mg3.svg" alt="SINCE 1900｜昭和00年創業">
		</div>
	</div>
</div>
		
		
<section id="slider-wrapper" class="wrap wrap_on">

	<!-- <div class="contents_main_left">

		<a href="<?php echo esc_url(home_url('/')); ?>" class="logo-img"><img id="lovebond-logo-img" src="<?php echo esc_url( get_theme_mod('lovebond_lite_logo_img') ); ?>" alt"<?php bloginfo('name'); ?>"></a>
			
		
		<div class="main_txt">
				<div class="main_txt_title">
					<h1>明和エンジニアリング株式会社</h1>
				</div>
				<div class="main_txt_title_cap">
					<p>SINCE 1900｜昭和00年創業</p>
				</div>
			</div>
		</div> -->


	<!-- header image -->


		<?php
			/*
		<div class="home-slider-wrapper">
					
			https://okuden-labo.com/background-slideshowx

			<img alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="ad-slider-image"  src="<?php header_image(); ?>" />
			

			
			<div class="box">
		
			</div>
			

		</div>
		*/
		?>
	
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
					<a href="https://higashinetd.jp/" class="main_logo sp_disp link"></a>

					<div class="main_loader">

						<div class="main_loader_line">
							<div class="main_loader_line_shadow"><svg x="0px" y="0px" width="250px" height="250px" viewBox="0 0 250 250" enable-background="new 0 0 250 250" xml:space="preserve"><path fill="none" stroke="#00a500" stroke-width="50" stroke-miterlimit="10" d="M0,125c0,69.035,55.963,125,125,125 c69.037,0,125-55.965,125-125C250,55.964,194.037,0,125,0"></path></svg></div>
							<div class="main_loader_line_form opa slide_off"><svg x="0px" y="0px" width="250px" height="250px" viewBox="0 0 250 250" enable-background="new 0 0 250 250" xml:space="preserve"><path fill="none" stroke="#009f41" stroke-width="50" stroke-miterlimit="10" d="M0,125c0,69.035,55.963,125,125,125 c69.037,0,125-55.965,125-125C250,55.964,194.037,0,125,0"></path></svg></div>
						</div>
					
						<div class="main_loader_text">
							<a href="https://higashinetd.jp/service.php" class="link opa main_loader_text0 slide_on">
								<p class="kerning ja0">業務内容</p>
							</a>
							<a href="https://higashinetd.jp/flow.php" class="link opa main_loader_text1">
								<p class="kerning ja0">施工の流れ</p>
							</a>
							<a href="https://higashinetd.jp/company.php" class="link opa main_loader_text2">
								<p class="kerning ja0">企業情報</p>
							</a>
							<a href="https://higashinetd.jp/contact.php" class="link opa main_loader_text3">
								<p class="kerning ja0">お問い合わせ</p>
							</a>
						</div>
					</div>
				</div>


				<div class="contents_main_left">
					
					<a href="<?php echo esc_url(home_url('/')); ?>" class="logo-img main_logo link"><img id="lovebond-logo-img" src="<?php echo esc_url( get_theme_mod('lovebond_lite_logo_img') ); ?>" alt"<?php bloginfo('name'); ?>"></a>
				
					<div class="main_copy">
						<div>
							<p class="kerning ja0">明和エンジニアリング株式会社</p>SINCE 1900｜昭和00年創業</div>
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