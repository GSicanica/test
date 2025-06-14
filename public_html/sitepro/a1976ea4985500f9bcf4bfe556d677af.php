<!DOCTYPE html>
<html lang="en-us">
<head>
	<script type="text/javascript">
			</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "test"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? generateCanonicalUrl($sitemapUrls) : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "test"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "test"); ?>" />
		
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "test"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "test"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="{{curr_url}}" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="NameSilo Website Builder" />
			<script src="js/common-bundle.js?ts=20250614173952" type="text/javascript"></script>
	<script src="js/a1976ea4985500f9bcf4bfe556d677af-bundle.js?ts=20250614173952" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20250614173952" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Nunito:400&amp;subset=latin" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="css/a1976ea4985500f9bcf4bfe556d677af-bundle.css?ts=20250614173952" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
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


<body class="site site-lang-en<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a1976ea4985500f9bcf4bfe556d677af" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda148e7383403d3f16ae48ab001" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976858d3b8005e39bbc6558afe8c9a" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h4 class="wb-stl-custom4"><span style="color:#inherit;">Team Bavaria Hausmeisterservice</span></h4>
</div><div id="a188dda148e73982e690500af38491f3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dda148e73ae8fa438e0c8f5c9beb" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="{{base_url}}"><img loading="lazy" alt="" src="gallery_gen/7f86f44fb2e58a49bfd7cdc63b4c98e3_264x264_fit.png?ts=1749911992"></a></div></div></div></div></div><div id="a18b5c0479dc00fb4bd23cebc7ac4c6e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda148e73cd443e4f11ea6e33459" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu" dir="ltr"><li class=""><a href="{{base_url}}">Home</a></li><li class=""><a href="About-us/">über uns</a></li><li class=""><a href="novitettagmoj/">dienstleistungen</a></li><li class=""><a href="Contacts/">Kontakt</a></li><li class=""><a href="dash/">test</a></li></ul><div class="clearfix"></div></div></div></div></div></div></div></div><div id="wb_main_a1976ea4985500f9bcf4bfe556d677af" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976ea49d8900644188acb01fd7c16a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976ea49d89016086216dc5164272a1" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a1976ea49d8902232d3d8a3552ce1522" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p style="text-align: center;"><strong><span class="wb-stl-highlight">Treppenhausreinigung</span></strong></p>

<p style="text-align: center;"> </p>

<p style="text-align: center;"><span class="wb-stl-highlight">5 €/Mietpartei<br>
1 x wöchentlich </span></p>

<p style="text-align: center;"><br>
 </p>

<p style="text-align: center;"><span class="wb-stl-highlight">Unsere Treppenhausreinigung beinhaltet:<br>
Treppenhaus fegen </span></p>

<p style="text-align: center;"><span class="wb-stl-highlight">Treppenhaus wischen</span></p>

<p style="text-align: center;"><span class="wb-stl-highlight">Treppengeländer abwischen</span></p>

<p style="text-align: center;"><span class="wb-stl-highlight">Handlauf abwischen</span></p>

<p style="text-align: center;"><span class="wb-stl-highlight">Hauseingangstür reinigen</span></p>

<p style="text-align: center;"><span class="wb-stl-highlight">Spinnengeweben entfernen</span></p>

<p style="text-align: center;"><span class="wb-stl-highlight">Briefkastenanlage reinigen</span></p>

<p style="text-align: center;"><span class="wb-stl-highlight">Treppenhausfenster von innen reinigen</span></p>

<p style="text-align: center;"><span class="wb-stl-highlight">Fußmatten im Eingangsbereich ausschütteln / reinigen</span></p>

<p style="text-align: center;"><span class="wb-stl-highlight">Reinigung der Klingelanlage und Gegensprechanlage</span></p>

<p style="text-align: center;"><span class="wb-stl-highlight">Lichtschalter und Steckdosen abwischen<br>
Aufzug reinigen</span></p>
</div><div id="a1976ea49d890426aa6ed646c47545aa" class="wb_element" data-plugin="Button"><a class="wb_button" href="Contacts/"><span>Bestellen</span></a></div></div></div><div id="a1976ea49d89052b4aa2b5ff8bb53028" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/download.jpg?ts=1749911992"></div></div></div></div></div><div id="a1976ea49d89069640b7ae0fcd2dfdb6" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-horizontal"></div></div></div></div><div id="wb_footer_a1976ea4985500f9bcf4bfe556d677af" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dda148e748511ce746122eed1567" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-absolute"><div id="a188dda148e749e8bf4b89de03522b25" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dda148e74ae845946ff0eb29e074" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="{{base_url}}"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#ffffff"><text x="385.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div><div id="a188dda148e74bded7aceae7acc72043" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h4 class="wb-stl-pagetitle"><span style="color:#ffffff;">Cleaning service</span></h4>
</div></div></div><div id="a188dda148e74cfc3ff9ce3a5cfb80c2" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dda148e74dbd934f5ff41adb586d" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-footer"><strong>Address:</strong></p>

<p class="wb-stl-footer">Empire State Building</p>

<p class="wb-stl-footer">350 5th Ave</p>

<p class="wb-stl-footer">New York</p>

<p class="wb-stl-footer">NY 10118</p>

<p class="wb-stl-footer">USA</p>
</div><div id="a188dda148e74e251560eee8e0baf21b" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-footer"><strong>Phone:</strong></p>

<p class="wb-stl-footer"><a href="tel:+1 212 736 3100"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;">+1 212 736 3100</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></a></p>

<p class="wb-stl-footer"><strong>Email:</strong><br><a data-_="Link" href="mailto:info@example.com">info@example.com</a></p>
</div></div></div><div id="a188dda148e74fbbb71549f46c7830ec" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda148e750e90e497f7c99d32eb7" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dda148e751162d1eddbe064b42bb" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="{{base_url}}"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#ffffff"><text x="385.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div><div id="a188dda148e75205fd1dc56d4fdfce6b" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="{{base_url}}"><svg xmlns="http://www.w3.org/2000/svg" width="1024" height="1024" viewBox="0 0 1024 1024" style="direction: ltr; color:#ffffff"><text x="0" y="960" font-size="1024" fill="currentColor" style='font-family: "builder-ui-icons-plugins"'></text></svg></a></div></div></div><div id="a188dda148e753d3a9f2d23000e75dc2" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="{{base_url}}"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#ffffff"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div><div id="a188dda148e75458975db98ba200d499" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="{{base_url}}"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#ffffff"><text x="1.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div></div></div><div id="a188dda148e755bee237e7bebbd35b8c" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-footer">© 2025 <a href="http://tmbv-hms.de">tmbv-hms.de</a></p></div><div id="a188dda148e756043bc84a02e0fff979" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/c01ddc7e120d6b1979f9eb44f59db4ea.lock.png?ts=1749911992"></div></div></div></div></div><div id="a1976e0d321300036e1814856b323e88" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu" dir="ltr"><li class=""><a href="dash/">.</a></li></ul><div class="clearfix"></div></div></div></div><div id="wb_footer_c" class="wb_element" data-plugin="WB_Footer" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
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
