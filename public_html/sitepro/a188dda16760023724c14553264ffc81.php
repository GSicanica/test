<!DOCTYPE html>
<html lang="en-us">
<head>
	<script type="text/javascript">
			</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Contacts"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? generateCanonicalUrl($sitemapUrls) : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Contacts"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "Contacts"); ?>" />
		
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Contacts"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Contacts"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="{{curr_url}}" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="NameSilo Website Builder" />
			<script src="js/common-bundle.js?ts=20250614194415" type="text/javascript"></script>
	<script src="js/a188dda16760023724c14553264ffc81-bundle.js?ts=20250614194415" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20250614194415" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Nunito:400&amp;subset=latin" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="css/a188dda16760023724c14553264ffc81-bundle.css?ts=20250614194415" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
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


<body class="site site-lang-en<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a188dda16760023724c14553264ffc81" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda148e7383403d3f16ae48ab001" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976858d3b8005e39bbc6558afe8c9a" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h4 class="wb-stl-custom4"><span style="color:#inherit;">Team Bavaria Hausmeisterservice</span></h4>
</div><div id="a188dda148e73982e690500af38491f3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dda148e73ae8fa438e0c8f5c9beb" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="{{base_url}}"><img loading="lazy" alt="" src="gallery_gen/7f86f44fb2e58a49bfd7cdc63b4c98e3_264x264_fit.png?ts=1749919455"></a></div></div></div></div></div><div id="a18b5c0479dc00fb4bd23cebc7ac4c6e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda148e73cd443e4f11ea6e33459" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu" dir="ltr"><li class=""><a href="{{base_url}}">Home</a></li><li class=""><a href="About-us/">über uns</a></li><li class=""><a href="novitettagmoj/">dienstleistungen</a></li><li class="wb_this_page_menu_item"><a href="Contacts/">Kontakt</a></li><li class=""><a href="test/">test</a></li></ul><div class="clearfix"></div></div></div></div></div></div></div></div><div id="wb_main_a188dda16760023724c14553264ffc81" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda148e73e785012e7b4eaf9f0c3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dda148e73f03e5e2406ff0c62021" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda148e740e469b6f04926ce7264" class="wb_element wb_text_element wb-anim-entry wb-anim wb-anim-fade-in-none" data-plugin="TextArea" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0" style=" line-height: normal;"><h1 class="wb-stl-heading1" style="text-align: center;"><strong><span style="color:rgba(255,255,255,1);">Contacts</span></strong></h1>
</div></div></div></div></div><div id="a188dda148e741a0c7dcb409ee5e5080" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-horizontal"><div id="a188dda148e74218350351c821b0f92f" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal"><strong>Address:</strong></p>

<p class="wb-stl-normal">Empire State Building</p>

<p class="wb-stl-normal">350 5th Ave</p>

<p class="wb-stl-normal">New York</p>

<p class="wb-stl-normal">NY 10118</p>

<p class="wb-stl-normal">USA</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><strong>Phone:</strong></p>

<p class="wb-stl-normal"><a href="tel:+1 212 736 3100"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;">+1 212 736 3100</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></a></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><strong>Email:</strong></p>

<p class="wb-stl-normal"><a data-_="Link" href="mailto:info@example.com">info@example.com</a></p>
</div><div id="a188dda148e743869e8216ccf28a0389" class="wb_element" data-plugin="Form"><form id="a188dda148e743869e8216ccf28a0389_form" class="wb_form wb_mob_form wb_form_ltr wb_form_vertical" method="post" enctype="multipart/form-data" action="__wb_curr_url__"><input type="hidden" name="wb_form_id" value="47975865"><input type="hidden" name="wb_form_uuid" value="d843ef4b"><textarea name="message" rows="3" cols="20" class="hpc" autocomplete="off"></textarea><table><tr><th>Name<span class="text-danger">&nbsp;*</span></th><td><input type="hidden" name="wb_input_0" value="Name"><div><input class="form-control form-field" type="text" value="" placeholder="" maxlength="255" name="wb_input_0" required="required"></div></td></tr><tr><th>Email<span class="text-danger">&nbsp;*</span></th><td><input type="hidden" name="wb_input_1" value="Email"><div><input class="form-control form-field" type="text" value="" placeholder="" maxlength="255" name="wb_input_1" required="required"></div></td></tr><tr class="area-row"><th>Message<span class="text-danger">&nbsp;*</span></th><td><input type="hidden" name="wb_input_2" value="Message"><div><textarea class="form-control form-field form-area-field" rows="4" placeholder="" name="wb_input_2" required="required"></textarea></div></td></tr><tr class="form-footer"><td colspan="2" class="text-right"><button type="submit" class="btn btn-default"><span>Submit</span></button></td></tr></table><?php if (isset($wbPopupMode) && $wbPopupMode): ?><input type="hidden" name="wb_popup_mode" value="1" /><?php endif; ?></form><script type="text/javascript">
			<?php $wb_form_id = sessionOrGlobalVar("wb_form_id"); if ($wb_form_id == "47975865") { ?>
				<?php popSessionOrGlobalVar("wb_form_id"); ?>
				var formValues = <?php echo json_encode(popSessionOrGlobalVar("post")); ?>;
				var formErrors = <?php echo json_encode(popSessionOrGlobalVar("formErrors")); ?>;
				wb_form_validateForm("47975865", formValues, formErrors);
			<?php } ?>
			</script></div></div></div><div id="a188dda148e7446dfb3a9881249de5d8" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda148e745ff3d4f660bfdd9aca5" class="wb_element wb-map wb-prevent-layout-click wb-anim-entry wb-anim wb-anim-fade-in-none" data-plugin="GoogleMaps" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;key=AIzaSyCd97nnFJ20PqZK4hoziCNjYq6g2Y6Wmkc&amp;sensor=false&amp;libraries=places&amp;region=US&amp;language=en_US"></script><div class="wb_google_maps" style="width: 100%;height: 100%"><script type="text/javascript">(function() { var mapLoaded = function() { var ll; var div = document.getElementById("a188dda148e745ff3d4f660bfdd9aca5"); div = div.querySelector("div.wb_google_maps");  var drawMap = function() { var map = new google.maps.Map(div, { zoom: 10, center: ll, mapTypeId: "roadmap", mapTypeControl: true, zoomControl: true, streetViewControl: true, fullscreenControl: true, draggable: true, styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#13803b"},{"visibility":"on"}]},{"featureType":"road","stylers":[{"visibility":"on"}]},{"featureType":"poi","stylers":[{"visibility":"on"}]},{"elementType":"labels","stylers":[{"visibility":"on"}]}] }); var marker = new google.maps.Marker({ position: ll, clickable: false, map: map }); }; var fallback = function() { ll = new google.maps.LatLng(40.689247, -74.044502); drawMap(); }; var geocoder = new google.maps.Geocoder(); if (geocoder) { geocoder.geocode({address: "Zepce"}, function(res, status) { if (status === "OK" && res) { var loc, lat, lng; for (var i=0; i < res.length; i++) { if (res[i] && res[i].geometry && (loc = res[i].geometry.location) && (lat = loc.lat()) && (lng = loc.lng())) { if ((ll = new google.maps.LatLng(lat, lng))) { drawMap(); break; } } } } if (!ll) fallback(); }); } }; var init = function() { if (!window.google) { setTimeout(init, 50); } else { google.maps.event.addDomListener(window, "load", mapLoaded); } }; init(); })();</script></div></div></div></div></div></div><div id="wb_footer_a188dda16760023724c14553264ffc81" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dda148e748511ce746122eed1567" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-absolute"><div id="a188dda148e749e8bf4b89de03522b25" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dda148e74ae845946ff0eb29e074" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="{{base_url}}"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#ffffff"><text x="385.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div><div id="a188dda148e74bded7aceae7acc72043" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h4 class="wb-stl-pagetitle"><span style="color:#ffffff;">Cleaning service</span></h4>
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
