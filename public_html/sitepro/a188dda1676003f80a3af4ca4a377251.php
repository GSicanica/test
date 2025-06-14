<!DOCTYPE html>
<html lang="en-us">
<head>
	<script type="text/javascript">
			</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Services"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? generateCanonicalUrl($sitemapUrls) : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Services"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "Services"); ?>" />
		
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Services"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Services"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : "{{base_url}}gallery_gen/0883f058a4c32b14fb9c315fb144d011_fit.jpg"); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="{{curr_url}}" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="NameSilo Website Builder" />
			<script src="js/common-bundle.js?ts=20250614194415" type="text/javascript"></script>
	<script src="js/a188dda1676003f80a3af4ca4a377251-bundle.js?ts=20250614194415" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20250614194415" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Nunito:400&amp;subset=latin" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="css/a188dda1676003f80a3af4ca4a377251-bundle.css?ts=20250614194415" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
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


<body class="site site-lang-en<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a188dda1676003f80a3af4ca4a377251" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda148e7383403d3f16ae48ab001" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976858d3b8005e39bbc6558afe8c9a" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h4 class="wb-stl-custom4"><span style="color:#inherit;">Team Bavaria Hausmeisterservice</span></h4>
</div><div id="a188dda148e73982e690500af38491f3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dda148e73ae8fa438e0c8f5c9beb" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="{{base_url}}"><img loading="lazy" alt="" src="gallery_gen/7f86f44fb2e58a49bfd7cdc63b4c98e3_264x264_fit.png?ts=1749919455"></a></div></div></div></div></div><div id="a18b5c0479dc00fb4bd23cebc7ac4c6e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda148e73cd443e4f11ea6e33459" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu" dir="ltr"><li class=""><a href="{{base_url}}">Home</a></li><li class=""><a href="About-us/">über uns</a></li><li class="wb_this_page_menu_item"><a href="novitettagmoj/">dienstleistungen</a></li><li class=""><a href="Contacts/">Kontakt</a></li><li class=""><a href="test/">test</a></li></ul><div class="clearfix"></div></div></div></div></div></div></div></div><div id="wb_main_a188dda1676003f80a3af4ca4a377251" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda148e6025ae473045b93f2a111" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dda148e603c664af8a42d4de9c96" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda148e604d641789f23a6edd0a0" class="wb_element wb_text_element wb-anim-entry wb-anim wb-anim-fade-in-none" data-plugin="TextArea" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0" style=" line-height: normal;"><h1 class="wb-stl-heading1" style="text-align: center;"><strong><span style="color:rgba(255,255,255,1);">Services</span></strong></h1>
</div></div></div></div></div><div id="a188dda148e605caedf232975bf1d128" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a188dda148e60624f7d7abc71e5ca3f2" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;"><strong>We offer</strong></h2>
</div><div id="a188dda148e6077049cbc865ac91b01c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dda148e608b565ed5872c39d4abc" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda148e6096489bf977c4ecbe738" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a188dda148e60a9488d0a81c458d9ea7" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3"><strong>Window cleaning</strong></h3>
</div><div id="a188dda148e60b432b5f61ddb13ff924" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal">You will find the latest information about our company here. You will find the latest information about our company...</p>
</div></div></div><div id="a188dda148e60c39ec5bd74e7e1eef6f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda148e60d976c44eb2c548d1043" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a188dda148e60e4a0a95d4526c5e18df" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3"><strong>Glass facades cleaning</strong></h3>
</div><div id="a188dda148e60fea286fb11d07101b4f" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal">You will find the latest information about our company here. You will find the latest information about our company...</p>
</div></div></div><div id="a188dda148e610193831dd67b261f155" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda148e611117717c5401bc75419" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a188dda148e612e54ebe71ecf4c245da" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3"><strong>House cleaning</strong></h3>
</div><div id="a188dda148e6131685984e48e0c277fb" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal">You will find the latest information about our company here. You will find the latest information about our company...</p>
</div></div></div></div></div></div></div><div id="a188dda148e6148eca4c1936b2bebf45" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda148e615db8584ca017aaa91fc" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a188dda148e616dc4cf0609d408b0bef" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;"><strong><span style="color:rgba(255,255,255,1);">Our customers say about us</span></strong></h2>
</div><div id="a188dda148e61761e6f7242fdbf02e73" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dda148e618d1c134a75f475cb355" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda148e6194564b43202c0295297" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/4b83bd67e609ec31c2457639853f3945_639x639_0x0_640x960_crop.jpg?ts=1749919455"></div></div></div><div id="a188dda148e61a9aeacd8713f613eb59" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: center;"><span style="color:#ffffff;">You will find the latest information about our company here. You will find the latest information about our company...</span></p>
</div></div></div><div id="a188dda148e61b4d42d03c701079c3cb" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda148e61c67c6b1de4942921397" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/282a1930bee8368004f7b0cca5184447_640x640_0x83_640x960_crop.jpg?ts=1749919455"></div></div></div><div id="a188dda148e61d32cf295f6b80624e49" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: center;"><span style="color:#ffffff;">You will find the latest information about our company here. You will find the latest information about our company...</span></p>
</div></div></div><div id="a188dda148e61eb544dbe199d7306111" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda148e61fec61b1cb5a91ca0816" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/4bce02927f8dff89c4459d64471856a6_639x639_0x61_640x960_crop.jpg?ts=1749919455"></div></div></div><div id="a188dda148e6204668947c471126f530" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: center;"><span style="color:#ffffff;">You will find the latest information about our company here. You will find the latest information about our company...</span></p>
</div></div></div></div></div></div></div></div></div></div></div><div id="wb_footer_a188dda1676003f80a3af4ca4a377251" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dda148e748511ce746122eed1567" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-absolute"><div id="a188dda148e749e8bf4b89de03522b25" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dda148e74ae845946ff0eb29e074" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="{{base_url}}"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#ffffff"><text x="385.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div><div id="a188dda148e74bded7aceae7acc72043" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h4 class="wb-stl-pagetitle"><span style="color:#ffffff;">Cleaning service</span></h4>
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
