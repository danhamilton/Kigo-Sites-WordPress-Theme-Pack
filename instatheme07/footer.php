<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;
/*
File: footer.php
This is the footer code.
*/
?>
</div>
<!-- End main section -->
</div>
<!-- End page section -->
</section>
<!-- End pushdown section -->
<!-- Start Insta Footer Widget Area -->
<footer id="insta-footer">
  <div class="container-fluid">
    <div class="row-fluid maintainer site-info">
      <div class="span12">
        <?php if ( is_active_sidebar( 'insta-footer-logo' ) ) : ?>
        <div class="row-fluid maintainer logo-footer">
          <?php dynamic_sidebar( 'insta-footer-logo' ); ?>
        </div>
        <?php endif; ?>
        <?php if ( is_active_sidebar( 'insta-footer-content' ) ) : ?>
        <div class="row-fluid maintainer nav-footer">
          <?php dynamic_sidebar( 'insta-footer-content' ); ?>
        </div>
        <?php endif; ?>
        <?php if ( is_active_sidebar( 'insta-footer' ) ) : ?>
        <?php dynamic_sidebar( 'insta-footer' ); ?>
        <?php endif; ?>
        <?php
					if ( !is_active_widget( false, false, 'bapi_footer', true ) ) {
						echo '<div class="widget widget_bapi_footer brandinglink"><div class="footer"><div class="footer-links"><span class="poweredby"><a rel="nofollow" target="_blank" href="http://www.InstaManager.com">Vacation Rental Software by InstaManager</a></span></div><div class="clear"></div></div></div>';
					}
				?>
      </div>
    </div>
  </div>
</footer>

<!-- End Insta Footer Widget Area --> 

<!-- Start Insta Bottom Fixed Widget Area -->
<?php if ( is_active_sidebar( 'insta-bottom-fixed' ) ) : ?>
<div id="insta-bottom-fixed" class="navbar-fixed-bottom">
  <div class="container-fluid">
    <div class="row-fluid maintainer">
      <div class="span12">
        <?php dynamic_sidebar( 'insta-bottom-fixed' ); ?>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>
<!-- End Insta Bottom Fixed Widget Area -->
</article>
<!-- End Main Content Wrapper -->
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php echo wp_make_link_relative(get_template_directory_uri()); ?>/insta-common/bootstrap/js/insta-common.js"></script> 
<script type="text/javascript">
$(window).load(function () {
			
		var dotheFix = setInterval(function(){		  
			doAtInit();
			if ($(".qsFixed").length > 0) {
				clearInterval(dotheFix);
			}
		}, 500);
	
	$(window).resize(function() {
	  doAtInit();
	});
});
function doAtInit() {
	try {
	updateTopAndBottom();
	positionQuickSearch();
	
	/* desktop */
	if (window.matchMedia("(min-width: 980px)").matches) {	  
	  addHouseIcon();
	} 
	} catch(err){}
}
function addHouseIcon () {	
        $('#insta-top-fixed ul.nav li.menu-item-depth-0 > a').each(function () {
            if ($(this).html() === 'Home') {
                $(this).html('<span class="glyphicons home"><i></i></span>');
                $(this).addClass('home');
            }
        });    
}
function updateTopAndBottom () {	
/* calculate the height of the footer and apply value to pushdown */
        $('.pushdown').css('padding-bottom', $('#insta-footer').height());
/* calculate the height of the top fixed widget area and apply value to the top ehader home block so it doens overlaps */
        $('.top-header-home').css('margin-top', $('#insta-top-fixed').height());	
}
function positionQuickSearch() {	
        var slideshowWidth, slideshowHeight, qsWidth, qsHeight, positionLeft, positionTop;
        slideshowWidth = $('.home-slideshow').width();
        slideshowHeight = $('.home-slideshow').height();
        qsWidth = $('.home-qsearch').width();
        qsHeight = $('.home-qsearch').height();
        positionLeft = (slideshowWidth - qsWidth) / 2;
        positionTop = (slideshowHeight - qsHeight) / 2;
		
		if(positionTop > 0){
	        $('.home-qsearch').css('top', positionTop);
		}
		if(positionLeft > 0){
    	    $('.home-qsearch').css('left', positionLeft);
		}
		$('.home-qsearch').addClass('qsFixed');	 
}
</script>
</body></html>