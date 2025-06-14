<!DOCTYPE html>
<html lang="de-de">
<head>
	<script type="text/javascript">
				(function(d) {
			var ciCollectedCookies = [];
			var cookieDesc =
				Object.getOwnPropertyDescriptor(Document.prototype, 'cookie') ||
				Object.getOwnPropertyDescriptor(HTMLDocument.prototype, 'cookie');

			var storage = null;
			function checkStorage() {
				if (storage === null) {
					var whitelist = ['__cookie_law__', 'PHPSESSID'];
					var cookies = JSON.parse(localStorage.getItem('allowedCookies') || '[]');
					storage = [].concat.apply(whitelist, cookies);
				}
				return storage;
			}

			if (cookieDesc && cookieDesc.configurable) {
				Object.defineProperty(d, 'cookie', {
					get: function() {
						return cookieDesc.get.call(d);
					},
					set: function(val) {
						if (val.indexOf('__cookie_law__') > -1) {
							cookieDesc.set.call(d, val);
							return;
						}

						var cookie_law = document.cookie.match(/(?:^|;\ *)__cookie_law__=(0|1)/);
						if (cookie_law !== null) {
							cookie_law = cookie_law[1];
						}

						var isCustomCookies = false;

						// Only if cookie accept enabled
						if (cookie_law == 1) {
							var c = val.split('=')[0];
							// cookie marked for removal
							if (val[0] === '!') {
								cookieDesc.set.call(d, val.slice(1));
							} else if ((isCustomCookies && checkStorage().indexOf(c) > -1) || !isCustomCookies) {
								cookieDesc.set.call(d, val);
							}
						}
						else if (cookie_law === null && ciCollectedCookies.indexOf(val) < 0) {
							ciCollectedCookies.push(val);
						}
					}
				});
			}
			d.cookieChangedCategories = function (cookieLaw, allowedCookies = null) {
				if (Array.isArray(allowedCookies)) {
					localStorage.setItem('allowedCookies', JSON.stringify(allowedCookies));
				}

				document.cookie = '__cookie_law__=' + cookieLaw + '; path=/; expires=Sun, 07 Jun 2026 08:16:01 GMT';

				var items = ciCollectedCookies;
				ciCollectedCookies = [];
				items.forEach(function (item) {
					d.cookie = item;
				})
			}
		})(document);
			</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Winterdienst | München Reinigung und Hausmeisterservice"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? generateCanonicalUrl($sitemapUrls) : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Schneeräumen vom Gehweg Schneeräumen vom Einfahrt nach den kommunalen städtischen Richtlinien auch für den Privat Haushältern Schneeräumen vom Garten"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "Winterdienst,München Reinigung und Hausmeisterservice"); ?>" />
		
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Winterdienst | München Reinigung und Hausmeisterservice"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Schneeräumen vom Gehweg Schneeräumen vom Einfahrt nach den kommunalen städtischen Richtlinien auch für den Privat Haushältern Schneeräumen vom Garten"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="{{curr_url}}" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="NameSilo Website Builder" />
			<script src="js/common-bundle.js?ts=20250612081559" type="text/javascript"></script>
	<script src="js/a1976290d482032db8831ff213a86a74-bundle.js?ts=20250612081559" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20250612081559" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="css/a1976290d482032db8831ff213a86a74-bundle.css?ts=20250612081559" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
	<ga-code/>
	<script type="text/javascript">
	window.useTrailingSlashes = false;
	window.disableRightClick = false;
	window.currLang = 'de';
</script>
		
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<![endif]-->

		<script type="text/javascript">
		$(function() {
			
			if (!document.cookie.match(/(?:^|;\ *)__cookie_law__=/)) {
				var block = $('<div>')
					.addClass('wb_cookie_policy')
					.css({
						backgroundColor: "#FFFFFF",
						minHeight: "%"					});
				let policyMessage = $('<div class="policy-message">')
						.html("<p data-dnid=\"10245\">Wir verwenden Cookies auf unserer Website, um Ihnen die relevanteste Erfahrung zu bieten, indem wir uns an Ihre Vorlieben erinnern und Besuche wiederholen. Durch Klicken auf &quot;Akzeptieren&quot; stimmen Sie der Verwendung ALLER Cookies zu.<\/p>")
						.css({
							color: "#333333",
							fontFamily: "'Open Sans',sans-serif",
							fontSize: 15						});
				var btnWrapper = $('<div class="policy-button">');

									policyMessage.appendTo(block);
					btnWrapper.appendTo(block);
				
				
								$('<button>')
						.attr({type: 'button'})
						.css({
							backgroundColor: "#cccccc",
							color: "#FFFFFF",
							fontFamily: "'Open Sans',sans-serif",
							fontSize: 15,
							marginRight: '5px',
							marginLeft: '5px'
						})
						.text("Ablehnen")
						.on('click', function() {
															// Save no cookies
								if (document.cookieChangedCategories) {
									document.cookieChangedCategories(0);
								}
							
							block.remove();
							document.location.reload();
						})
						.appendTo(btnWrapper);
				
				
								$('<button>')
						.attr({type: 'button'})
						.css({
							backgroundColor: "#61A229",
							color: "#FFFFFF",
							fontFamily: "'Open Sans',sans-serif",
							fontSize: 15,
							marginRight: '5px',
							marginLeft: '5px'
						})
						.text("AKZEPTIEREN")
						.on('click', function() {
							if ($('#customCookiesForm').length) {
								$('#customCookiesForm').submit();
								return;
							}

							if (document.cookieChangedCategories) {
								document.cookieChangedCategories(1);
							}

							block.remove();
							document.location.reload();
						})
						.appendTo(btnWrapper);
				
				$(document.body).append(block);

                if (block.height() >= $(window).height() * 0.4) {
                    block.addClass('center');
                }
			}
		});
	</script>
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


<body class="site site-lang-de<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a1976290d482032db8831ff213a86a74" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div><div id="wb_main_a1976290d482032db8831ff213a86a74" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befb51b005aed9cb409170be" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befb530bfb93b5f8ed304167" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befb5434a444b650e03c3e20" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befb553e04b85a7313c81224" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befb576737e1236bcc49265f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befb5813ab3312811e07d6fe" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom1" data-auto-wrapper="true">Rufen Sie uns an: </p></div><div id="a1976290befb59dc977ff96ca9aaf517" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom2" data-auto-wrapper="true"><a href="https://www.la-reinigung.de/winterdienst/t">089 726 491 63</a></p></div></div></div></div></div><div id="a1976290befb565c37e81f03fc0bd08d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befb5a4ff3be5282dc7e0d88" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befb5b02b62e68769aae28f2" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befb5cb38a543a2cee847fa1" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befb5de415b9c22fe5f5b204" class="wb_element" data-plugin="Button"><a class="wb_button" href="https://www.facebook.com/lagebaeudereinigung/"><span><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="display: inline-block; vertical-align: middle; position: relative; top: -1px; height: 1em; width: 1em; overflow: visible; direction: ltr;"><text x="385.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg>&nbsp;</span></a></div><div id="a1976290befb5efd192b68a052f901f2" class="wb_element" data-plugin="Button"><a class="wb_button" href="https://www.instagram.com/la_gebaeudereinigung/"><span><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="display: inline-block; vertical-align: middle; position: relative; top: -1px; height: 1em; width: 1em; overflow: visible; direction: ltr;"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg>&nbsp;</span></a></div></div></div></div></div></div></div></div></div></div></div><div id="a1976290befb5f03e6aba7a10ba72d05" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befb605956feafaa40f86de9" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befb6170ef16cfe877ab4967" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befb62f57384f5587772ce04" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befb637136c80b2c6527952f" class="wb_element wb_element_picture" data-plugin="Picture" title="München Reinigung und Hausmeisterservice"><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="{{base_url}}"><img loading="lazy" alt="München Reinigung und Hausmeisterservice" src="gallery_gen/d49db991adb490bca18882c0943368ae_260x122_fit.png?ts=1749705361"></a></div></div></div></div></div><div id="a1976290befb64937ef7142fc21336a7" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befb653b5c555a8b6a5eb759" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom3" data-dnid="140358"><a href="">München Reinigung und Hausmeisterservice</a></h1><p class="wb-stl-custom4" data-auto-wrapper="true"><a href="">
									</a></p><p class="wb-stl-custom5" data-dnid="140360"><a href="">Reinigung und Hausmeisterservice in München</a></p></div></div></div></div></div><div id="a1976290befb6684c6ebb9d0fc1ad8f8" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befb67c9ba5b6b84f092a5f9" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befb681c659f13f6b6ebde2a" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu" dir="ltr"><li class=""><a href="{{base_url}}">Home</a></li><li class=""><a href="hausmeisterservice">Hausmeisterservice</a></li><li class=""><a href="gebaudereinigung">Gebäudereinigung</a></li><li class=""><a href="winterdienst-munchen">Winterdienst</a></li><li class=""><a href="la-gebaudereinigung-haus-service">Was wir tun</a></li><li class=""><a href="gallery/">Fotogallerie</a></li><li class=""><a href="kontakt">Kontakt</a></li></ul><div class="clearfix"></div></div></div></div></div></div></div></div></div></div><div id="a1976290befb698928c80e0deb7b0c8c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befb6a50489ae1d9a66b3bd3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befb6b6f130984252406271a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befb6c05308a2aa3ffe482a3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befb6d1773ae2f69cd36bded" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a1976290befb6e115f0a81a052d685f4" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom19" data-auto-wrapper="true">Winterdienst</p></div><div id="a1976290befb6f2d578916757d108a61" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div><div id="a1976290befb70cf91a259bf70d643a3" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom20" data-dnid="140440">Posted on <a href="winterdienst">April 2, 2021</a> by <a href="author/dmitrecic">admin</a></p></div></div></div><div id="a1976290befb713c6fa3d173f3877eed" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befb721e6205325a78f20f23" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befb732984bae16107d7207b" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/0f6ed85bed3b5100571e760f2e293377_2400x752_fit.jpeg?ts=1749705361"></div></div></div></div></div><div id="a1976290befb7457d59adb177174646f" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><ul class="wb-stl-list2" data-dnid="140446"><li data-dnid="140513">Schneeräumen vom Gehweg</li><li data-dnid="140515">Schneeräumen vom Einfahrt</li><li data-dnid="140517">nach den kommunalen städtischen Richtlinien</li><li data-dnid="140519">auch für den Privat Haushältern</li><li data-dnid="140521">Schneeräumen vom Garten</li></ul></div></div></div><div id="a1976290befb750be5d974a46761423a" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom21" data-dnid="140383">Posted in <a href="https://www.la-reinigung.de/category/main-slider/">Main Slider</a></p></div></div></div><div id="a1976290befb768bc04129f594918db1" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befb77d7c5caa0d7acfe535f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befb78144f44c7b80e7b3c10" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befb79e7a858a874550c340b" class="wb_element" data-plugin="Button"><a class="wb_button" href="gebaudereinigung"><span>Gebäudereinigung&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="display: inline-block; vertical-align: middle; position: relative; top: -1px; height: 1em; width: 1em; overflow: visible; direction: ltr;"><text x="577.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></span></a></div></div></div></div></div></div></div></div></div></div></div><div id="a1976290befb7a11b7101b3fc81d922b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befb7bcd978f1f20612fae3a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befb7cbb2f0eeb3dccb50a19" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befb7d28512ab6874eaa22a6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befb7e2ab9f674bb19e710d8" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befb7f108224e56e6980f2b3" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom15" data-auto-wrapper="true">Kontaktieren Sie uns</p></div></div></div><div id="a1976290befb8079662df1844780d9bb" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befb81b388b937728d8e754e" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="vmenu" dir="ltr"><li class=""><a href="kontakt">Kontakt Formular</a></li><li class=""><a href="tel:///+498972649163">Tel: 089 726 49163</a></li></ul><div class="clearfix"></div></div><div id="a1976290befb825412bed8a7ff68d7a9" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom16" data-dnid="140456"> </p><p class="wb-stl-custom17" data-dnid="140458">LA Gebäudereinigung &amp; Haus Service, Hansastr.95, 81373 München</p></div></div></div></div></div><div id="a1976290befb83522e9edeaf0368fb51" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befb84e1b732a490ad25aab9" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befb8595c584bcfdb199f4de" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom15" data-auto-wrapper="true">Information</p></div></div></div><div id="a1976290befb868cc4767c8f9a9e087a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befb8727faa4a98bd6e2adf1" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="vmenu" dir="ltr"><li class=""><a href="gebaudereinigung">Gebäudereinigung in München</a></li><li class=""><a href="hausmeisterservice">Hausmeisterservice in München</a></li><li class=""><a href="winterdienst-munchen">Winterdienst in München</a></li><li class=""><a href="gallery/">Fotogallerie</a></li></ul><div class="clearfix"></div></div></div></div></div></div><div id="a1976290befb88c9aaa8d42dd4f94915" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befb893bdbc576a4ed8d4f7c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befb8ae36fe7859d4cc85566" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom15" data-auto-wrapper="true">Folgen Sie uns auf</p></div></div></div><div id="a1976290befb8b6ca820e669ff4cd20b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befb8c1b5481a841e0ca6c48" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="vmenu" dir="ltr"><li class=""><a href="https://www.facebook.com/lagebaeudereinigung/">Facebook</a></li><li class=""><a href="https://www.instagram.com/la_gebaeudereinigung/">Intagram</a></li></ul><div class="clearfix"></div></div></div></div></div></div><div id="a1976290befb8d79062ccdfbc512ea5e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befb8e74d54eef7f1425b72e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befc000d7e017ec9ae77f0a1" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom15" data-auto-wrapper="true">Impressum</p></div></div></div><div id="a1976290befc01f642f46e803e8d9da4" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befc024f3c952c39f4e28f06" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="vmenu" dir="ltr"><li class=""><a href="datenschutzerklarung">Datenschutzerklärung</a></li><li class=""><a href="impressum">Impressum</a></li></ul><div class="clearfix"></div></div></div></div></div></div></div></div><div id="a1976290befc03f2614a901e98623d96" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befc04bafcb566e0fb79aee3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befc056b4cff9efdbd444ccc" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom18" data-dnid="140334">WordPress Theme : <a href="https://demo.8degreethemes.com/eightmedi-lite/">EightMedi Lite</a>
					by 8Degree Themes</p></div><div id="a1976290befc06583b8c548da30d86ad" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befc0752b5521e6cbae2e774" class="wb_element" data-plugin="Button"><a class="wb_button" href="https://www.facebook.com/lagebaeudereinigung/"><span><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="display: inline-block; vertical-align: middle; position: relative; top: -1px; height: 1em; width: 1em; overflow: visible; direction: ltr;"><text x="385.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg>&nbsp;</span></a></div><div id="a1976290befc0832c6ef28e63c384a38" class="wb_element" data-plugin="Button"><a class="wb_button" href="https://www.instagram.com/la_gebaeudereinigung/"><span><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="display: inline-block; vertical-align: middle; position: relative; top: -1px; height: 1em; width: 1em; overflow: visible; direction: ltr;"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg>&nbsp;</span></a></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div><div id="a1976290befb52e35293935da97ee757" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befc0a0115e6740ea2eb684f" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#87E8FF"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div></div></div><div id="a1976290befc09071a42ba2ad093cdbd" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#404040"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div></div></div><div id="wb_footer_a1976290d482032db8831ff213a86a74" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="wb_footer_c" class="wb_element" data-plugin="WB_Footer" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
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
