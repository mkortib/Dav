<?php
/*
Plugin Name: Pinterest Lightbox
Plugin URI: http://www.travishoglund.com
Description: Add Pinterest in a Lightbox to the NextGEN Gallery plugin.
Version: 1.4.6
Author: Travis Hoglund
Author URI: http://www.travishoglund.com
*/

//Check that the NEXTGen Plugin is installed - this class only exists in 2.0 or greater
if(class_exists('C_NextGEN_Bootstrap')) {
	function pinterest_lightbox_inline_js_css() {
		echo 
		'
		<style>
			#fancybox-title, .fancybox-title {
				margin-left: 10px;
				margin-right: 10px;	
				min-height: 20px;
				z-index: 100000 !important;
				position: relative;
				margin-bottom: 20px;
			}
			#TB_secondLine {
				padding-left: 60px !important;
			}
			.pinterest-lightbox-pin-it-button {
				float: left !important; margin-right: 10px !important; margin-bottom: 8px !important;
				width: 43px !important; height: 21px !important; display: block !important;
				z-index: 100000 !important; position: relative !important;
			}
			.pinterest-lightbox-pin-it-button a {
				margin: 0 !important;
			}
		</style>
		<script type="text/javascript">
			function pinterest_lightbox_show_button(remove) {
				if (remove == true) jQuery(\'.pinterest-lightbox-pin-it-button\').remove();';
				$lightbox_thumbnail_selector = apply_filters('th_pl_lightbox_thumbnail_selector', '');
				$lightbox_image_selector = apply_filters('th_pl_lightbox_image_selector', '');
				$lightbox_pin_selector = apply_filters('th_pl_lightbox_pin_selector', '');
				$lightbox_append_or_prepend = apply_filters('th_pl_lightbox_prepend_or_append', 'prepend');
				if($lightbox_thumbnail_selector && $lightbox_image_selector && $lightbox_pin_selector && $lightbox_append_or_prepend) {
					echo '
						//Custom Lightox Hooking
						var anchor = jQuery(\'a'.$lightbox_thumbnail_selector.'[href="\'+jQuery("'.$lightbox_image_selector.'").attr("src")+\'"]\');
						if(!jQuery(".pinterest-lightbox-pin-it-button").length) {
							jQuery("'.$lightbox_pin_selector.'").'.($lightbox_append_or_prepend == 'append' || $lightbox_append_or_prepend == 'prepend' ? $lightbox_append_or_prepend : 'prepend').'(\'<span class="pinterest-lightbox-pin-it-button"><a href="http://pinterest.com/pin/create/button/?url=\'+document.URL+\'&media=\'+anchor.attr("href")+\'&description=\'+anchor.attr("title")+\'" count-layout="horizontal" target="_blank"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a></span><span style="clear: both;"></style>\');
						}
					';
				}
				else 
		echo
		'		
				//Fancybox
				var anchor = jQuery(\'a.ngg-fancybox[href="\'+jQuery("#fancybox-img").attr("src")+\'"]\');
				if(!anchor.length) anchor = jQuery(\'a.fancybox-buttons[href="\'+jQuery(".fancybox-image").attr("src")+\'"]\');
				if(!jQuery(".fancybox-title-inside").length && anchor.length) jQuery("#fancybox-title, .fancybox-title").css("display", "block").addClass("fancybox-title-inside");
				if(!jQuery(".pinterest-lightbox-pin-it-button").length) {
					jQuery(".fancybox-title-inside").prepend(\'<span class="pinterest-lightbox-pin-it-button"><a href="http://pinterest.com/pin/create/button/?url=\'+document.URL+\'&media=\'+anchor.attr("href")+\'&description=\'+anchor.attr("title")+\'" count-layout="horizontal" target="_blank"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a></span>\');
					jQuery(".fancybox-title-inside").append(\'<span style="clear: both;"></style>\');
				}
				//HighSlide
				anchor = jQuery(\'a.highslide[href="\'+jQuery(".highslide-wrapper .highslide-image").attr("src")+\'"]\');
				if(!jQuery(".pinterest-lightbox-pin-it-button").length && anchor.length) {
					jQuery(".highslide-number").append(\'<span class="pinterest-lightbox-pin-it-button" style="float: right !important; margin-left: 20px !important; margin-right: 0 !important;"><a href="http://pinterest.com/pin/create/button/?url=\'+document.URL+\'&media=\'+anchor.attr("href")+\'&description=\'+anchor.attr("title")+\'" count-layout="horizontal" target="_blank"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a></span><span style="clear: both;"></style>\');
				}
				//Regular Lightbox
				anchor = jQuery(\'a.ngg_lightbox[href="\'+jQuery("#lightbox-image").attr("src")+\'"]\');
				if(!jQuery(".pinterest-lightbox-pin-it-button").length && anchor.length) {
					jQuery("#lightbox-image-details").append(\'<span class="pinterest-lightbox-pin-it-button"><a href="http://pinterest.com/pin/create/button/?url=\'+document.URL+\'&media=\'+anchor.attr("href")+\'&description=\'+anchor.attr("title")+\'" count-layout="horizontal" target="_blank"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a></span><span style="clear: both;"></style>\');
				}
				//Shutter & Shutter 2
				anchor = jQuery(\'a[class*="shutterset"][href="\'+jQuery("#shWrap img").attr("src")+\'"]\');
				if(!jQuery(".pinterest-lightbox-pin-it-button").length && anchor.length) {
					jQuery("#shTitle").append(\'<span class="pinterest-lightbox-pin-it-button" style="margin: 8px auto 0px auto !important; float: none !important;"><a href="http://pinterest.com/pin/create/button/?url=\'+document.URL+\'&media=\'+anchor.attr("href")+\'&description=\'+anchor.attr("title")+\'" count-layout="horizontal" target="_blank"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a></span><span style="clear: both;"></style>\');
				}
				//Thickbox
				anchor = jQuery(\'a.thickbox[href="\'+jQuery("#TB_Image").attr("src")+\'"]\');
				if(!jQuery(".pinterest-lightbox-pin-it-button").length && anchor.length) {
					jQuery("#TB_caption").prepend(\'<span class="pinterest-lightbox-pin-it-button"><a href="http://pinterest.com/pin/create/button/?url=\'+document.URL+\'&media=\'+anchor.attr("href")+\'&description=\'+anchor.attr("title")+\'" count-layout="horizontal" target="_blank"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a></span>\');
					jQuery("#TB_caption").append(\'<span style="clear: both;"></style>\');
				}
				//WP Lightbox 2 Plugin
				anchor = jQuery(\'a[rel*="lightbox"][href="\'+jQuery("#lightboxImage").attr("src")+\'"]\');
				if(!jQuery(".pinterest-lightbox-pin-it-button").length && anchor.length) {
					jQuery("#imageDetails").prepend(\'<span class="pinterest-lightbox-pin-it-button"><a href="http://pinterest.com/pin/create/button/?url=\'+document.URL+\'&media=\'+anchor.attr("href")+\'&description=\'+anchor.attr("title")+\'" count-layout="horizontal" target="_blank"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a></span>\');
					jQuery("#imageDetails").append(\'<span style="clear: both;"></style>\');
				}';
		echo 
		'
			}
			jQuery( document ).ready(function() {
				jQuery(document).bind( "mouseup", function() {
					console.log("click event");
					setTimeout(function() { pinterest_lightbox_show_button(true); }, 100);
					for (i = 2; i < 30; i++) { 
						setTimeout(function() { pinterest_lightbox_show_button(false); }, (i*100));
					}
				});
			});
		</script>';	
	}
	add_action('wp_head', 'pinterest_lightbox_inline_js_css');
}
else {
	//Display a notification to install or update to NextGen 2.0 or greater
	function pinterest_lightbox_needs_nextgen2(){
		echo '<div class="error"><p>Pinterest Lightbox requires that NextGen 2.0 or greater is installed and activated.  Please update or install.</p></div>';
	}
	add_action('admin_notices', 'pinterest_lightbox_needs_nextgen2');	
}

?>