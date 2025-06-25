    <div class="footerContainer">
        <footer class="footer">
			
        <?php
            wp_nav_menu( array(
                'theme_location'  => 'footer-menu',
                'container'       => 'nav',
                'container_class' => 'nav fNav',
                'items_wrap' => '<ul>%3$s</ul>',
            ) );
        ?>
            
            <p class="copyright">&copy; EAST Co., Ltd.</p>
        </footer>
    </div>
</div><!--wrapper-->
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.matchHeight-min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.sliderPro.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); echo '/assets/js/cart-controller.js?' . filemtime( get_stylesheet_directory() . '/assets/js/cart-controller.js'); ?>"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/fixed_midashi.js"></script>
<script src="<?php echo get_template_directory_uri(); echo '/assets/js/cartview.js?' . filemtime( get_stylesheet_directory() . '/assets/js/cartview.js'); ?>"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/lightbox.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery-modal-video.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/perfect-scrollbar.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/modernizr-custom.js"></script>
<?php if (is_page(array(24618,24615,12,6654))) : ?>
<script src="<?php echo get_template_directory_uri(); echo '/assets/js/dongri_academic.js?' . filemtime( get_stylesheet_directory() . '/assets/js/dongri_academic.js'); ?>"></script>
<?php endif; ?>
<?php if (is_post_type_archive('customers')): ?>
<script src="<?php echo get_template_directory_uri(); echo '/assets/js/base-archive.js?' . filemtime( get_stylesheet_directory() . '/assets/js/base-archive.js'); ?>"></script>
<?php else: ?>
<script src="<?php echo get_template_directory_uri(); echo '/assets/js/base.js?' . filemtime( get_stylesheet_directory() . '/assets/js/base.js'); ?>"></script>
<?php endif; ?>
<?php if ( is_page(24615) || is_page_template('parts/part-dqworks.php') ) : /*エリアマップ*/?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/image-map-resizer/1.0.10/js/imageMapResizer.min.js"></script>
<script>
  imageMapResize();
</script>
<?php endif; ?>
<?php if (is_page(array(23446,23448))) : //DONGRIのお知らせ、Qulmeeのお知らせ?>
<script src="<?php echo get_template_directory_uri();?>/assets/js/jPages.min.js"></script>
<script>
	$(function(){
		$("div.pagination").jPages({
		containerID : "JPages",//リストのid名
		perPage : 10, //1ページに表示する個数
		});
	});
</script>
<?php endif; ?>
<script type="text/javascript" src="//typesquare.com/3/tsst/script/ja/typesquare.js?66f393da6f844a50b8446d1bac1e02e5" charset="utf-8"></script>
<script>(function(){
var w=window,d=document;
var s="https://app.chatplus.jp/cp.js";
d["__cp_d"]="https://app.chatplus.jp";
d["__cp_c"]="ec748ed2_1";
var a=d.createElement("script"), m=d.getElementsByTagName("script")[0];
a.async=true,a.src=s,m.parentNode.insertBefore(a,m);})();</script>
<?php wp_footer();?>
</body>
</html>