<?php
/**
 * The template for displaying pages
 * Template Name: 開発事例テンプレート
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage SketchThemes
 * @since Lovebond Lite 1.0.0
 */

get_header(2); ?>

<!-- BEGIN: BLOG -->

<section id="contents-all" class="contents-all">
    <!-- BEGIN: CONTAINER -->
   <div class="container post-wrap rpage_wrap">

   		<!-- BEGIN:block-1  -->

		<section class="block-1 contents_block">
			
				
			<div class="cap">
			いろんな要望に答え<br />
			こんな機械を作ってきました
			</div>	

			
			<div class="block-1_inner scroll_element scroll_off0">

				<div class="content-wrap col-md-6 left-photo">
				
				<img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" />
					<div class="clearfix"></div>
				</div>
			

				<div class="col-md-6">

					<div class="right-txt">
					
					<div class="right-txt-cap">
						<h3>機械の名前</h3>
					</div>

					<div class="right-txt-in">
						<p>
						テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
						</p>
					</div>	

					</div>	
				</div>
			</div>
			<!-- //block-1_inner -->


			<div class="block-1_inner scroll_element scroll_off0">

				<div class="content-wrap col-md-6">

					<div class="left-txt">
						
						<div class="left-txt-cap">
							<h3>機械の名前</h3>
						</div>

						<div class="left-txt-in">
							<p>
							テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
							</p>
						</div>	

					</div>	
				
				</div>

				<div class="col-md-6 right-photo">

					<img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" />
					<div class="clearfix"></div>

				</div>
			</div>
			<!-- //block-1_inner -->


			<div class="block-1_inner scroll_element scroll_off0">

				<div class="content-wrap col-md-6 left-photo">
				
				<img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" />
					<div class="clearfix"></div>
				</div>
			

				<div class="col-md-6">

					<div class="right-txt">
					
					<div class="right-txt-cap">
						<h3>機械の名前</h3>
					</div>

					<div class="right-txt-in">
						<p>
						テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
						</p>
					</div>	

					</div>	
				</div>
			</div>
			<!-- //block-1_inner -->


			<div class="block-1_inner scroll_element scroll_off0">

				<div class="content-wrap col-md-6">

					<div class="left-txt">
						
						<div class="left-txt-cap">
							<h3>機械の名前</h3>
						</div>

						<div class="left-txt-in">
							<p>
							テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
							</p>
						</div>	

					</div>	
				
				</div>

				<div class="col-md-6 right-photo">

					<img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" />
					<div class="clearfix"></div>

				</div>
			</div>
			<!-- //block-1_inner -->

		</section>
		<!-- END:block-1  -->

		<!-- BEGIN:block-2  -->

		<section class="block-2 contents_block">

			<div class="cap">お取引一覧</div>
			
			<!-- <ul>
				<li>いすゞ自動車株式会社</li>        
				<li>ホンダエンジニアリング株式会社</li>
				<li>株式会社 オートテック</li>      
				<li>ボッシュ株式会社</li>
				<li>株式会社 クボタ</li>        
				<li>株式会社 三和部品</li>
				<li>三菱ふそうトラックバス株式会社</li>        
				<li>三洋電機株式会社</li>
				<li>株式会社 旭商工社</li>       
				<li>株式会社 ショーワ</li>
				<li>岡谷鋼機株式会社</li>        
				<li>株式会社 ジャトコ</li>
				<li>株式会社 京二</li>        
				<li>東洋製罐株式会社</li>
				<li>コマツエンジニアリング株式会社</li>        
				<li>日産自動車株式会社</li>
				<li>常盤産業株式会社</li>        
				<li>高周波熱錬株式会社</li>
				<li>株式会社 東芝</li>        
				<li>株式会社 日立製作所</li>
				<li>マルカキカイ株式会社</li>        
				<li>日野自動車工業株式会社</li>
				<li>松下電工株式会社</li>        
				<li>株式会社 不二越</li>
				<li>富士重工株式会社</li>        
				<li>株式会社 TKエンジニアリング</li>
				<li>三井精機工業株式会社</li>        
				<li>日産工機株式会社</li>
				<li>住友重機械株式会社</li> 
					
			</ul> -->
			
			<ul>
			<?php
				$fields = $cfs->get('transaction_loop');
				foreach ($fields as $field) :
				?>
				<li><?php echo $field['transaction_list']; ?></li>
			<?php endforeach; ?>
							
			</ul>	

		</section>

		<!-- BEGIN:block-2  -->

		<!-- BEGIN:block-3  -->

		<section class="block-3 contents_block">

			<div class="cap">保有機械一覧</div>
			
			<div class="dltable_owned">
				<dl class="bk_dl">            
					<dt class="row1">メーカー</dt>
					<dt class="row2">種類</dt>
					
				</dl>

				<!-- <dl>            
					<dd class="row1">三井精機工業製</dd>
					<dd class="row2">治具ボーラー7B</dd>
					<dd class="row3">1台</dd>
				</dl>

				<dl>            
					<dd class="row1">三井精機工業製</dd>
					<dd class="row2">治具ボーラー6B</dd>
					<dd class="row3">1台</dd>
				</dl>
				

				<dl>            
					<dd class="row1">三井精機工業製：VR－3A </dd>
					<dd class="row2">マシニングセンター  </dd>
					<dd class="row3">1台</dd>
				</dl>

				<dl>            
					<dd class="row1">三井精機工業製：VU－654A</dd>
					<dd class="row2">マシニングセンター</dd>
					<dd class="row3">1台</dd>
				</dl> -->

				           
				<?php
				$fields = $cfs->get('machine-add');
				foreach ($fields as $field) :
				?>
				<dl> 
			
					<dd class="row1"><?php echo $field['machine-maker']; ?></dd>
					<dd class="row2"><?php echo $field['machine-type']; ?></dd>
					

				</dl>
				<?php endforeach; ?>
				



			</div>


		</section>

		<!-- BEGIN:block-3  -->

		<!-- BEGIN:block-4  -->

		<section class="block-4 contents_block">

			<div class="cap">納入実績</div>
			
			<div class="dltable_delivery">
				<dl class="bk_dl">            
					<dt class="row1">納入先</dt>
					<dt class="row2">種類</dt>
					
				</dl>

				<?php
				$fields = $cfs->get('delivery-add');
				foreach ($fields as $field) :
				?>
				<dl> 
					<dd class="row1"><?php echo $field['delivery-destination']; ?></dd>
					<dd class="row2"><?php echo $field['delivery-type']; ?></dd>
					
				</dl>
				<?php endforeach; ?>

				<!-- <dl>            
					<dd class="row1">日産自動車(株)</dd>
					<dd class="row2">混流コンベアー</dd>
				</dl>	

				<dl> 
					<dd class="row1">井関農機(株)</dd>
					<dd class="row2">パレット</dd>
				</dl>	 -->



			</div>


		</section>

		<!-- BEGIN:block-4  -->

	</div>
</section>
<!-- END: BLOG -->

<?php get_footer(); ?>