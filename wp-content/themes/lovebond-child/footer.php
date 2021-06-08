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

            <section class="recruit">
                
                    
                <!-- <div class="cap">
                オーダーメイドで機械を作る<br />
                マザーマシンのセットアップメーカー
                </div>	 -->

                <div class="recruit-inner scroll_element scroll_off0">

                    <div class="row">

                        <a href="https://www.yahoo.co.jp/">

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
                    </div>
                        

                </div>

            </section>
            <!-- END:RECRUIT -->

            <!-- BEGIN:FOOTER CONTACT  -->

            <section class="footer-contact">

                <div class="footer-contact-inner scroll_element scroll_off0">

                    <div class="row">


                        <div class="col-md-6 footer-contact-inner-left">

                        <i class="fa fa-phone" aria-hidden="true"></i><a href="tel:0455805730">045-580-5730</a>
                        
                        <p>8:00～17:30（第2・4土曜、日曜、祝日定休）</p>
                
                        </div>
                    

                        
                        <div class="col-md-6 footer-contact-inner-right">

                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
<a href="#">お問い合わせ</a>
                            
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
                    <img src="<?php echo get_template_directory_uri(); ?>/images/meiwa-footer-logo.svg" />
                    </div> <!-- //footer-about-in-cap-img -->
                    
                    <ul>
                        <li><a href="">TOP</a></li>
                        <li><a href="">会社概要</a></li>
                        <li><a href="">作業工程のご紹介</a></li>
                        <li><a href="">組み立て事例</a></li>

                    </ul>

                </div>    
            
            </sction>

            <!-- END:FOOTER FOOTER ABOUT -->



    	</div>
    	<!-- END: CONTAINER -->

    </section>
    <!-- END: FOOTER -->

    <footer>
    <p class="copyright">&copy; 2017-<?php echo date('Y') ?> Meiwa Engineering Co., Ltd.</p>
    </footer>

    <!-- BEGAIN: SCROLL -->
    <div class='scrolltop'>
    	<div class='scroll icon'><i class="fa fa-4x fa-angle-up"></i></div>

	</div>
	<!-- END: SCROLL -->

    <!-- <div class="tild-section"></div> -->
</div>
<?php wp_footer(); ?>


<?php
/*
<script>
jQuery(function($) {
    $('.box').bgSwitcher({
      images: ['/meiwa-engineering/wp-content/themes/lovebond-lite/images/1.jpg', '/meiwa-engineering/wp-content/themes/lovebond-lite/images/2.jpg', '/meiwa-engineering/wp-content/themes/lovebond-lite/images/3.jpg', '/meiwa-engineering/wp-content/themes/lovebond-lite/images/4.jpg'], // 切り替える背景画像
      Interval: 5000, //切り替えの間隔 1000=1秒
      start: true, //$.fn.bgswitcher(config)をコールした時に切り替えを開始
      loop: true, //切り替えをループする
      shuffle: false, //背景画像の順番をシャッフルする
      effect: "fade", //エフェクトの種類 (fade / blind / clip / slide / drop / hide)
      duration: 1000, //エフェクトの時間 1000=1秒
      easing: "swing", //エフェクトのイージング 
    });
  });
</script>	
*/
?>

<script>

function uaSetting() {
    var e = navigator.userAgent,
        s = navigator.platform,
        a = window.navigator.userAgent.toLowerCase();
    e.indexOf("iPhone") > 0 || e.indexOf("iPod") > 0 || e.indexOf("Android") > 0 && e.indexOf("Mobile") > 0 ? ($("body").addClass("sp"), dH = 50) : e.indexOf("iPad") > 0 || e.indexOf("Android") > 0 ? ($("body").addClass("tb"), dH = 75) : ($("body").addClass("pc"), dH = 150), -1 != s.indexOf("Win") ? $("body").addClass("win") : $("body").addClass("mac"), e.indexOf("Android") > 0 && $("body").addClass("android"), -1 != a.indexOf("msie") || -1 != a.indexOf("trident") ? $("body").addClass("ie") : -1 != a.indexOf("edge") ? $("body").addClass("edge") : -1 != a.indexOf("chrome") ? $("body").addClass("chrome") : -1 != a.indexOf("safari") ? $("body").addClass("safari") : -1 != a.indexOf("firefox") && $("body").addClass("firefox")
}

function commonSetting() { wW = $(window).width(), wH = $(window).height(), 0 == $(".wrap_on").length && ($(".sp").length || $(".tb").length) && (wH = window.innerHeight), $(".fix_w").css({ width: wW + "px" }), $(".fix_h").css({ height: wH + "px" }), lH = $("#home .contents_main_left .main_logo").height(), cH = $(".main_copy").height(), $("#home .contents_main_left .main_logo").css({ top: (wH - lH - cH) / 3 + 15 + "px" }), $(".main_copy").css({ bottom: (wH - lH - cH) / 3 + "px" }), $(".main_loader").css({ bottom: (wH - lH - cH) / 3 + "px", right: (wH - lH - cH) / 3 + "px" }) }

function pageSetting() { 1 == slideFlg0 && (slideFlg0 = !1, stopSlide0()), 1 == slideFlg1 && (slideFlg1 = !1, stopSlide1()), nowUrl = location.href, nowUrl.match(/service/) ? (setSlide1(), startSlide1()) : nowUrl.match(/flow/) || nowUrl.match(/company/) || (nowUrl.match(/contact/) ? (contactLoad(), contactClear()) : (1 == openingFlg && (setSlide0(), startSlide0(), newsSetting(snsData)), nowUrl.match(/sendcompletely/) && thanksAnimation())) }

function preload() { preloadCount = 0, preloadMax = arguments.length, openingAnimation(); for (var e = 0; preloadMax > e; e++) $("<img>").attr("src", arguments[e]), preloadCount++ }

function loadingAnimation() {
    setTimeout(function() {
        if (nowHash) {
            var e = $("#" + nowHash);
            if (e = e.length && e, e.length) {
                var s = e.offset().top - 0;
                $("html,body").animate({ scrollTop: s }, 1e3, "easeInOutQuad")
            }
        }
    }, 750), $(".wrap").removeClass("wrap_off"), $(".wrap").addClass("wrap_on"), scrollAnimation(), $(".loading").delay(750).queue(function() { $(this).addClass("none").dequeue() })
}

function openingAnimation() {
    $(".loading").addClass("opening"), nowPosition = 0, setTimeout(function() {
        var e = setInterval(function() {
            if (nowPosition > 99.9) clearInterval(e), $(".loading_logo div span").stop().animate({ left: "100%" }, 500, "easeInOutQuad"), openingFlg = !0, $("#home").length && (setSlide0(), startSlide0()), $(".wrap").addClass("wrap_on"), $(".loading").delay(750).queue(function() { $(this).addClass("default"), $(this).addClass("none").dequeue() });
            else {
                var s = preloadCount / preloadMax * 100;
                nowPosition += .02 * (s - nowPosition), $(".loading_logo div > span:nth-child(2)").stop().animate({ width: nowPosition + "%" }, 50)
            }
        }, 5)
    }, 500)
}

function newsSetting(e) { $(".instagram_block").append(e) }

function faqAnimation() { $(this).next(".faq_a").stop().slideToggle(500, "easeInOutQuad"), $(this).parent(".faq_list").hasClass("faq_on") ? ($(this).parent(".faq_list").removeClass("faq_on"), $(this).parent(".faq_list").addClass("faq_off")) : ($(this).parent(".faq_list").removeClass("faq_off"), $(this).parent(".faq_list").addClass("faq_on")) }

function popupAnimation(e) {
    if (e.preventDefault(), 0 == popupFlg) {
        popupFlg = !0;
        var s = $(this).attr("href");
        s ? $(s).removeClass("none") : $("#thanks").removeClass("none"), $(".popup").removeClass("popup_off"), $(".popup").addClass("popup_on"), $(".popup").removeClass("none"), 0 == $("body").hasClass("safari") && $(".pc #policy").getNiceScroll().resize(), $("#policy").scrollTop(0)
    } else popupFlg = !1, $(".popup").removeClass("popup_on"), $(".popup").addClass("popup_off"), $(".popup").delay(500).queue(function() { $(".movie_frame iframe").remove(), $(".popup_block").addClass("none"), $(this).addClass("none").dequeue() })
}

function thanksAnimation() { popupFlg = !0, $("#thanks").removeClass("none"), $(".popup").removeClass("popup_off"), $(".popup").addClass("popup_on"), $(".popup").removeClass("none") }

// function contactLoad() {
//     var e = document.createElement("script");
//     e.type = "text/javascript", e.id = "mfpjs", e.charset = "UTF-8";
//     var s = new Date,
//         a = s.getHours(),
//         i = s.getMinutes(),
//         n = s.getSeconds(),
//         o = a.toString() + i.toString() + n.toString();
//     e.src = "https://higashinetd.jp/mailformpro/mailformpro.cgi?" + o, $("form").after(e), setupDes()
// }

function contactClear() { $(".formarea").each(function() { $(this).val("") }) }

function setupDes() { var e = document.getElementsByTagName("textarea"); for (i = 0; i < e.length; i++) e[i].className.search("nodes") < 0 && (e[i].value == e[i].defaultValue && (e[i].className += " ondes"), e[i].onfocus = function() { offDes(this) }, e[i].onblur = function() { onDes(this) }) }

function offDes(e) { return e.className.search("ondes") < 0 ? 0 : (e.className = e.className.replace(/ondes/, ""), e.value = "", 1) }

function onDes(e) { return "" != e.value ? 0 : (e.className += " ondes", e.value = e.defaultValue, 1) }

function slideAnimation0() { slideNum0++, $(".contents_main").removeClass("slide_first"), $(".main_slide_img").removeClass("slide_on"), $(".main_slide_img").removeClass("slide_off"), $(".main_loader_text a").removeClass("slide_on"), $(".main_loader_text a").removeClass("slide_off"), $(".main_loader_number div div").removeClass("slide_on"), $(".main_loader_number div div").removeClass("slide_off"), $(".main_copy").removeClass("main_copy_on"), slideNum0 > slideMax0 && (slideNum0 = 0), 3 == slideNum0 && $(".main_copy").addClass("main_copy_on"), $(".main_slide_img" + slideNum0).addClass("slide_on"), $(".main_loader_text" + slideNum0).addClass("slide_on"), $(".main_loader_number_first" + slideNum0).addClass("slide_on"), $(".main_loader_number_second" + slideNum0).addClass("slide_on"), 0 > slideNum0 - 1 ? ($(".main_slide_img" + slideMax0).addClass("slide_off"), $(".main_loader_text" + slideMax0).addClass("slide_off"), $(".main_loader_number_first" + slideMax0).addClass("slide_off"), $(".main_loader_number_second" + slideMax0).addClass("slide_off")) : ($(".main_slide_img" + (slideNum0 - 1)).addClass("slide_off"), $(".main_loader_text" + (slideNum0 - 1)).addClass("slide_off"), $(".main_loader_number_first" + (slideNum0 - 1)).addClass("slide_off"), $(".main_loader_number_second" + (slideNum0 - 1)).addClass("slide_off")), $(".main_loader_line_form").removeClass("slide_on"), $(".main_loader_line_form").addClass("slide_off"), $(".main_loader_line_form").delay(1e3).queue(function() { $(this).removeClass("slide_off"), $(this).addClass("slide_on").dequeue() }) }

function slideAnimation1() { slideNum1++, $(".detail_slide_img").removeClass("slide_on"), $(".detail_slide_img").removeClass("slide_off"), slideNum1 > slideMax1 && (slideNum1 = 0), $(".detail_slide_img" + slideNum1).addClass("slide_on"), 0 > slideNum1 - 1 ? $(".detail_slide_img" + slideMax1).addClass("slide_off") : $(".detail_slide_img" + (slideNum1 - 1)).addClass("slide_off") }

function setSlide0() { $(".main_slide_img0").addClass("slide_on"), $(".main_slide_img" + slideMax0).addClass("slide_off"), $(".main_loader_text0").addClass("slide_on"), $(".main_loader_text" + slideMax0).addClass("slide_off"), $(".main_loader_number_first0").addClass("slide_on"), $(".main_loader_number_first" + slideMax0).addClass("slide_off"), $(".main_loader_number_second0").addClass("slide_on"), $(".main_loader_number_second" + slideMax0).addClass("slide_off"), $(".main_loader_line_form").addClass("slide_off"), $(".main_loader_line_form").delay(1e3).queue(function() { $(this).removeClass("slide_off"), $(this).addClass("slide_on").dequeue() }) }

function setSlide1() { $(".detail_slide_img0").addClass("slide_on"), $(".detail_slide_img" + slideMax0).addClass("slide_off") }

function startSlide0() { slideFlg0 = !0, slideNum0 = 0, slideTimer0 = setInterval(slideAnimation0, 7500) }

function startSlide1() { slideFlg1 = !0, slideNum1 = 0, slideTimer1 = setInterval(slideAnimation1, 5e3) }

function stopSlide0() { clearInterval(slideTimer0) }

function stopSlide1() { clearInterval(slideTimer1) }

function menuAnimation() { 0 == menuFlg ? (menuFlg = !0, $(".header").removeClass("header_off"), $(".header").addClass("header_on"), $(".menu").removeClass("none"), $(".menu").removeClass("menu_off"), $(".menu").addClass("menu_on")) : (menuFlg = !1, $(".header").removeClass("header_on"), $(".header").addClass("header_off"), $(".menu").removeClass("menu_on"), $(".menu").addClass("menu_off"), $(".menu").delay(500).queue(function() { $(this).addClass("none").dequeue() })) }

function scrollAnimation() {
    var e = $(window).scrollTop();
    $(".scroll_element").each(function() {
        var e = $(this).offset().top,
            s = $(this).height(),
            a = $(window).scrollTop();
        if (a > e - wH + dH && e + s > a) {
            if ($(this).hasClass("scroll_off0")) var i = 0;
            else if ($(this).hasClass("scroll_off1")) var i = 1;
            else if ($(this).hasClass("scroll_off2")) var i = 2;
            else if ($(this).hasClass("scroll_off3")) var i = 3;
            $(this).attr("class").match(/scroll_off/) && ($(this).removeClass("scroll_off" + i), $(this).addClass("scroll_on" + i))
        } else if (e - wH + dH > a && e + dH > a) {
            if ($(this).hasClass("scroll_on0")) var i = 0;
            else if ($(this).hasClass("scroll_on1")) var i = 1;
            else if ($(this).hasClass("scroll_on2")) var i = 2;
            else if ($(this).hasClass("scroll_on3")) var i = 3;
            $(this).attr("class").match(/scroll_on/) && ($(this).removeClass("scroll_on" + i), $(this).addClass("scroll_off" + i))
        }
    }), e >= wH ? 0 == $(".header").hasClass("header_fix") && ($(".header").removeClass("header_nofix"), $(".header").addClass("header_fix")) : 0 == e ? ($(".header").removeClass("header_fix"), $(".header").removeClass("header_nofix")) : $(".header").hasClass("header_fix") && ($(".header").removeClass("header_fix"), $(".header").addClass("header_nofix")), 1 == menuFlg && menuAnimation()
}

var nowUrl, nowHash, wW, wH, dH, lH, cH, snsData, preloadCount, preloadMax, popupFlg = !1,
    openingFlg = !1,
    menuFlg = !1,
    slideFlg0 = !1,
    slideFlg1 = !1,
    slideNum0, slideNum1, slideMax0 = 3,
    slideMax1 = 1,
    slideTimer0;
$(document).on("click", ".target", function(e) { e.preventDefault(); var s = $(this).attr("href"); if (s.match(/#/i)) { var a = $(this.hash); if (a = a.length && a, a.length) { var i = a.offset().top - 0; return $("html,body").animate({ scrollTop: i }, 1e3, "easeInOutExpo"), !1 } } }), $(document).on("click", ".link", function(e) {
        e.preventDefault();
        var s = $(this).attr("href");
        if (s.match(/#/i)) {
            var a = s.split("#");
            nowHash = a[1], s = a[0]
        } else nowHash = "";
        $(".loading").removeClass("none"), $(".wrap").removeClass("wrap_on"), $(".wrap").addClass("wrap_off"), setTimeout(function() { 1 == menuFlg && ($(".menu").addClass("none"), menuAnimation()), $.pjax({ url: s, container: ".contents", fragment: ".contents", scrollTo: 0, timeout: 3e4 }) }, 750)
    }), $(document).on("pjax:timeout", function() { console.log("timeout") }), $(document).on("pjax:end", function() {
        commonSetting(), pageSetting(), loadingAnimation();
        var e = window.location.pathname + window.location.search;
        ga("send", "pageview", e)
    }),
    $(document).ready(function() {
        uaSetting(), commonSetting(), pageSetting(), 0 == $("body")
            .hasClass("safari") && $(".pc #policy")
            .niceScroll({ cursorcolor: "#ffffff", cursorwidth: "0", cursorborder: "none", scrollspeed: 50, mousescrollstep: 30, hwacceleration: !0 }),
            // $.ajax({
            //     type: "GET",
            //     url: "https://higashinetd.jp/ig_process.php",
            //     dataType: "html",
            //     success: function(e) { snsData = $(e), newsSetting(snsData) }
            // }),
            wW > 640 ? preload("")

        : preload("")
    }),
    $(window).on("load", function() { $("html,body").animate({ scrollTop: 0 }, 1) }), $(window).on("resize", commonSetting), $(window).on("resize scroll", scrollAnimation), $(document).on("click", ".header_button_inner", menuAnimation), $(document).on("click", ".faq_q", faqAnimation), $(document).on("click", ".popup_button", popupAnimation), $(document).on("mouseenter", ".pc .menu_block_list", function() { 0 == $(this).hasClass("menu_block_list_on") && ($(this).removeClass("menu_block_list_off"), $(this).addClass("menu_block_list_on")) }), $(document).on("mouseleave", ".pc .menu_block_list", function() { $(this).hasClass("menu_block_list_on") && ($(this).removeClass("menu_block_list_on"), $(this).addClass("menu_block_list_off")) }), $(document).on("mouseenter", ".pc .line_button", function() { 0 == $(this).hasClass("line_button_on") && ($(this).removeClass("line_button_off"), $(this).addClass("line_button_on")) }), $(document).on("mouseleave", ".pc .line_button", function() { $(this).hasClass("line_button_on") && ($(this).removeClass("line_button_on"), $(this).addClass("line_button_off")) });
</script>	


</body>
</html>