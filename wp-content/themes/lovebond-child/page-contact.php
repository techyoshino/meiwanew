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

get_header(2); ?>

<!-- BEGIN: BLOG -->

<section id="contents-all" class="contents-all">
    <!-- BEGIN: CONTAINER -->
   <div class="container post-wrap rpage_wrap">

   		<!-- BEGIN:block-1  -->

		<section class="block-1 contents_block">
			
				
			<div class="cap">
			どんな小さなお悩みでも、お気軽にご相談ください
			</div>	

			
			<div class="block-1_inner scroll_element scroll_off0">


				<?php the_content(); ?>

					
			</div>
			<!-- //block-1_inner -->
		

		</section>
		<!-- END:block-1  -->


		<!-- BEGIN:block-2  -->

		<section class="block-2 contents_block">
			
				
		<div class="cap">
		よくあるご質問
		</div>	

			
			<div class="block-2_inner scroll_element scroll_off0">
			 <?php echo do_shortcode('[faq]'); ?>


				
					
			</div>
			<!-- //block-2_inner -->
		

		</section>
		<!-- END:block-2 -->

		

	</div>
</section>
<!-- END: BLOG -->

<?php get_footer(); ?>