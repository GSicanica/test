<!DOCTYPE html>
<html lang="en-us">
<head>
	<script type="text/javascript">
			</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "About us"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? generateCanonicalUrl($sitemapUrls) : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "About us"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "About us"); ?>" />
		
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "About us"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "About us"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="{{curr_url}}" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="NameSilo Website Builder" />
			<script src="js/common-bundle.js?ts=20250614194415" type="text/javascript"></script>
	<script src="js/a188dda167600168103ce2ef0ecc5b25-bundle.js?ts=20250614194415" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20250614194415" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Nunito:400&amp;subset=latin" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="css/a188dda167600168103ce2ef0ecc5b25-bundle.css?ts=20250614194415" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
	<ga-code/>
	<script type="text/javascript">
	window.useTrailingSlashes = true;
	window.disableRightClick = false;
	window.currLang = 'en';
</script>
		
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<![endif]-->

		<script type="text/javascript">
		$(function () {
<?php $wb_form_send_success = popSessionOrGlobalVar("wb_form_send_success"); ?>
<?php if (($wb_form_send_state = popSessionOrGlobalVar("wb_form_send_state"))) { ?>
	<?php if (($wb_form_popup_mode = popSessionOrGlobalVar("wb_form_popup_mode")) && (isset($wbPopupMode) && $wbPopupMode)) { ?>
		if (window !== window.parent && window.parent.postMessage) {
			var data = {
				event: "wb_contact_form_sent",
				data: {
					state: "<?php echo str_replace('"', '\"', $wb_form_send_state); ?>",
					type: "<?php echo $wb_form_send_success ? "success" : "danger"; ?>"
				}
			};
			window.parent.postMessage(data, "<?php echo str_replace('"', '\"', popSessionOrGlobalVar("wb_target_origin")); ?>");
		}
	<?php $wb_form_send_success = false; $wb_form_send_state = null; $wb_form_popup_mode = false; ?>
	<?php } else { ?>
		wb_show_alert("<?php echo str_replace(array('"', "\r", "\n"), array('\"', "", "<br/>"), $wb_form_send_state); ?>", "<?php echo $wb_form_send_success ? "success" : "danger"; ?>");
	<?php } ?>
<?php } ?>
});    </script>
</head>


<body class="site site-lang-en<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a188dda167600168103ce2ef0ecc5b25" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda148e7383403d3f16ae48ab001" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976858d3b8005e39bbc6558afe8c9a" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h4 class="wb-stl-custom4"><span style="color:#inherit;">Team Bavaria Hausmeisterservice</span></h4>
</div><div id="a188dda148e73982e690500af38491f3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dda148e73ae8fa438e0c8f5c9beb" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="{{base_url}}"><img loading="lazy" alt="" src="gallery_gen/7f86f44fb2e58a49bfd7cdc63b4c98e3_264x264_fit.png?ts=1749919455"></a></div></div></div></div></div><div id="a18b5c0479dc00fb4bd23cebc7ac4c6e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda148e73cd443e4f11ea6e33459" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu" dir="ltr"><li class=""><a href="{{base_url}}">Home</a></li><li class="wb_this_page_menu_item"><a href="About-us/">über uns</a></li><li class=""><a href="novitettagmoj/">dienstleistungen</a></li><li class=""><a href="Contacts/">Kontakt</a></li><li class=""><a href="test/">test</a></li></ul><div class="clearfix"></div></div></div></div></div></div></div></div><div id="wb_main_a188dda167600168103ce2ef0ecc5b25" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda148e624528f4ed8dde6c1e38d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dda148e6256f734b1592e093a5b7" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda148e6260536981800c3cd9f9a" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-heading1" style="text-align: center;"><strong><span style="color:rgba(255,255,255,1);">About us</span></strong></h1>
</div></div></div></div></div><div id="a188dda148e6275ae03486d8d9597848" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a188dda148e62856f264b824533c2d38" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a188dda148e62924c22d84d61a42096f" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;"><strong>Company</strong></h2>
</div><div id="a188dda148e62ab504f4d3b680a4c366" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p style="text-align: center;"><span class="wb-stl-special"><span style="color:rgba(0,0,0,1);">Add the main advantages of your business that make it unique and the best. Add text why customers have to choose your products or services and what benefits they will get after the product is purchased. Write your own text, style it and press Done.</span></span></p>
</div></div></div><div id="a188dda148e700d188b851f90eb1e4b3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dda148e701c13c77a1bc4ab92621" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-horizontal"><div id="a188dda148e702da666637879f59b587" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2"><span style="color:#ffffff;">Special offer</span></h2>
</div><div id="a188dda148e703d92c923280823546a5" class="wb_element" data-plugin="Button"><a class="wb_button" href="Contacts/"><span>Contacts</span></a></div></div></div></div></div><div id="a188dda148e7041eef772058775a2677" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a188dda148e705eb2806820755ba751e" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;">Professional team</h2>
</div><div id="a188dda148e706e4ac9e202bd52c7180" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dda148e707827162ec2189db3e79" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda148e708d5a3f188b4a74b629e" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/4b83bd67e609ec31c2457639853f3945_640x640_0x0_640x960_crop.jpg?ts=1749919455"></div></div></div><div id="a188dda148e7092af3078c94e0614bf0" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3" style="text-align: center;"><strong>Barbara Santa</strong></h3>
</div><div id="a188dda148e70ade4bb3c2a260fd862d" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: center;">You will find the latest information about our company here. You will find the latest information about our company...</p>
</div></div></div><div id="a188dda148e70bed3108fc7b52384dfa" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda148e70c68cc8d97baf9e6447f" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/4bce02927f8dff89c4459d64471856a6_640x640_0x71_640x960_crop.jpg?ts=1749919455"></div></div></div><div id="a188dda148e70d5548524e0e1774be87" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3" style="text-align: center;"><strong>Dave Willson</strong></h3>
</div><div id="a188dda148e70e698542babf8119a892" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: center;">You will find the latest information about our company here. You will find the latest information about our company...</p>
</div></div></div><div id="a188dda148e70fb727c3d5a81995623e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda148e710bd41666628db5cf904" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/282a1930bee8368004f7b0cca5184447_640x640_0x83_640x960_crop.jpg?ts=1749919455"></div></div></div><div id="a188dda148e711fafb86414d938f4c58" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3" style="text-align: center;"><strong>Alex Dillinger</strong></h3>
</div><div id="a188dda148e71243454ec0a8c7026aba" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: center;">You will find the latest information about our company here. You will find the latest information about our company...</p>
</div></div></div></div></div></div></div></div></div><div id="wb_footer_a188dda167600168103ce2ef0ecc5b25" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dda148e748511ce746122eed1567" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-absolute"><div id="a188dda148e749e8bf4b89de03522b25" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dda148e74ae845946ff0eb29e074" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="{{base_url}}"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#ffffff"><text x="385.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div><div id="a188dda148e74bded7aceae7acc72043" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h4 class="wb-stl-pagetitle"><span style="color:#ffffff;">Cleaning service</span></h4>
</div></div></div><div id="a188dda148e74cfc3ff9ce3a5cfb80c2" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dda148e74dbd934f5ff41adb586d" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-footer"><strong>Address:</strong></p>

<p class="wb-stl-footer">Empire State Building</p>

<p class="wb-stl-footer">350 5th Ave</p>

<p class="wb-stl-footer">New York</p>

<p class="wb-stl-footer">NY 10118</p>

<p class="wb-stl-footer">USA</p>
</div><div id="a188dda148e74e251560eee8e0baf21b" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-footer"><strong>Phone:</strong></p>

<p class="wb-stl-footer"><a href="tel:+1 212 736 3100"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;">+1 212 736 3100</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></a></p>

<p class="wb-stl-footer"><strong>Email:</strong><br><a data-_="Link" href="mailto:info@example.com">info@example.com</a></p>
</div></div></div><div id="a188dda148e74fbbb71549f46c7830ec" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda148e750e90e497f7c99d32eb7" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dda148e751162d1eddbe064b42bb" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="{{base_url}}"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#ffffff"><text x="385.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div><div id="a188dda148e75205fd1dc56d4fdfce6b" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="{{base_url}}"><svg xmlns="http://www.w3.org/2000/svg" width="1024" height="1024" viewBox="0 0 1024 1024" style="direction: ltr; color:#ffffff"><text x="0" y="960" font-size="1024" fill="currentColor" style='font-family: "builder-ui-icons-plugins"'></text></svg></a></div></div></div><div id="a188dda148e753d3a9f2d23000e75dc2" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="{{base_url}}"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#ffffff"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div><div id="a188dda148e75458975db98ba200d499" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="{{base_url}}"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#ffffff"><text x="1.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div></div></div><div id="a188dda148e755bee237e7bebbd35b8c" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-footer">© 2025 <a href="http://tmbv-hms.de">tmbv-hms.de</a></p></div><div id="a188dda148e756043bc84a02e0fff979" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/c01ddc7e120d6b1979f9eb44f59db4ea.lock.png?ts=1749919455"></div></div></div></div></div><div id="a1976e0d321300036e1814856b323e88" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu" dir="ltr"><li class=""><a href="test/">.</a></li></ul><div class="clearfix"></div></div></div></div><div id="wb_footer_c" class="wb_element" data-plugin="WB_Footer" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#footer, #footer .wb_cont_inner");
					footer.css({height: ""});
				}
			});
			</script></div></div></div></div>{{hr_out}}</body>
</html>
