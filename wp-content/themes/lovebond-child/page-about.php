<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage SketchThemes
 * @since Lovebond Lite 1.0.0
 */

get_header(cont); ?>

<!-- BEGIN: BLOG -->

<section id="contents-all" class="contents-all">
    <!-- BEGIN: CONTAINER -->
   <div class="container post-wrap rpage_wrap">

   <!-- BEGIN:block-1  -->

	<section class="block-1 contents_block">
		
			
		<div class="cap">
		オーダーメイドで機械を作る<br />
		マザーマシンのセットアップメーカー
		</div>	

		<div class="block-1_inner scroll_element scroll_off0">

			<h2>代表挨拶</h2>

			<div class="block-1_inner_col">

				<div class="content-wrap col-md-6">

					<div class="left-txt">
						
						<div class="left-txt-cap">
							
							<h4>「電気のことで地域の人を困らせない。
							それが、私たちの恩返し。」</h4>
						</div>

						<div class="left-txt-in">
							<p>
							東根東北電化という社名の通り、当社は東根に根ざした電気屋として皆さまに支えられてきました。私が常に思うのは「この地域には、この職業が必要なんだ」ということ。地域から、いわゆる“まちの電気屋”が減っているなかで、ずっと支えていただいたことへの恩返しの意味も込めて、電気設備のことでお困りのときには迅速かつマジメな対応でお役に立てればと思っております。
							</p>
						</div>	

						<div class="left-txt-bottom">
							<span>代表取締役</span>
							<p>工藤 敏幸</p>
						</div>	

					</div>	

				</div>

				<div class="col-md-6 right-photo">

					<img src="<?php echo get_template_directory_uri(); ?>/images/about-1.jpg" />
					<div class="clearfix"></div>
				</div>
			
			</div>

			<div class="block-1_inner_img_w_all scroll_element scroll_off0">
				<img src="<?php echo get_template_directory_uri(); ?>/images/about-2.jpg" />
			</div>
		</div>
		
	</section>
	<!-- END:block-1  -->

	<!-- BEGIN:block-2  -->
	<section class="block-2 contents_block scroll_element scroll_off0">

		<div class="cap">
		会社概要
		</div>	

		<div class="centents-about-table scroll_element scroll_off0">


			<table>
				<tr>
					<th>商号</th>

					<td>明和エンジニアリング株式会社</td>
					
				</tr>

				<tr>
					<th>代表取締役</th>

					<td>小林謹治</td>
					
				</tr>

				<tr>
					<th>所在地</th>

					<td>〒230-0071　神奈川県横浜市鶴見区駒岡2-7-3</td>
					
				</tr>

				<tr>
					<th>設立</th>

					<td>平成8年</td>
					
				</tr>

				<tr>
					<th>資本金</th>

					<td>1000万円</td>
					
				</tr>

				<tr>
					<th>事業概要</th>

					<td>金属機械加工製造業</td>
					
				</tr>

				<tr>
					<th>主要取引先</th>

					<td>いすゞ自動車株式会社、ホンダエンジニアリング株式会社、株式会社オートテック、ボッシュ株式会社、株式会社クボタ他</td>
					
				</tr>
			
			</table>
							
		</div>

		<div class="about-map">
			<div class="gmap">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3247.032210549168!2d139.64693831525457!3d35.52820168023024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60185effe86d9f9b%3A0x3f88282719aeffb9!2z44CSMjMwLTAwNzEg56We5aWI5bed55yM5qiq5rWc5biC6ba06KaL5Yy66aeS5bKh77yS5LiB55uu77yX4oiS77yT!5e0!3m2!1sja!2sjp!4v1622620813532!5m2!1sja!2sjp" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			<div><!--gmap-->	
		</div>

	</section>
	<!-- END:block-2  -->

	<section class="block-3 contents_block scroll_element scroll_off0">
	
	<div class="cap">
		沿革
	</div>

	<div class="content-wrap col-md-8">
		
		<div class="history">
					
			<div class="line">
				<span></span>
			</div>	
			
		</div>
			
	</div>			

	<div class="content-wrap col-md-4">
		
	</div>			



	</sction>






	<?php
	/*

   	  	<div class="row">
			<!-- BEGIN: INNER BLOG SECTION -->
            <div class="content-wrap col-md-8">

				<?php if(have_posts()) :

					while(have_posts()) : the_post(); ?>

						<?php the_content(); ?>

						<?php wp_link_pages('<p><strong>'.__('Pages: ','lovebond-lite').'</strong>', '</p>', __('number','lovebond-lite')); ?>

 					<?php endwhile; ?>

				<?php else :  ?>
					
					<h3 class="text-left"><?php _e('Apologies, No page found.','lovebond-lite'); ?></h3>
					            
				<?php endif; ?>
				
				<div class="clearfix"></div>

				<div class="author-comment-wrap">
					<!-- BEGIN: COMMENTS WRAPPER -->
	                <?php comments_template(); ?>
	                <!-- END: COMMENTS WRAPPER -->
				</div>

				<p class="text-left" style="margin-top:15px;"><?php edit_post_link( __('Edit', 'lovebond-lite'), '', ''); ?></p>
			</div>

			<!-- BEGIN: SIDEBAR BLOG -->
            <div class="sktwed-sidebar-wrap col-md-4">
                <?php get_sidebar(); ?>
            </div>
            <!-- END: SIDEBAR BLOG-->
        </div>
    </div>
    <!-- END: CONTAINER -->

	*/
	?>
</section>
<!-- END: BLOG -->

<?php get_footer(); ?>