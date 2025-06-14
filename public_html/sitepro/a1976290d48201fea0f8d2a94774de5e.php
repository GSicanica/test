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
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "admin | München Reinigung und Hausmeisterservice"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? generateCanonicalUrl($sitemapUrls) : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "admin | München Reinigung und Hausmeisterservice"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "admin,München Reinigung und Hausmeisterservice"); ?>" />
		
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "admin | München Reinigung und Hausmeisterservice"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "admin | München Reinigung und Hausmeisterservice"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="{{curr_url}}" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="NameSilo Website Builder" />
			<script src="js/common-bundle.js?ts=20250612081559" type="text/javascript"></script>
	<script src="js/a1976290d48201fea0f8d2a94774de5e-bundle.js?ts=20250612081559" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20250612081559" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="css/a1976290d48201fea0f8d2a94774de5e-bundle.css?ts=20250612081559" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
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


<body class="site site-lang-de<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a1976290d48201fea0f8d2a94774de5e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div><div id="wb_main_a1976290d48201fea0f8d2a94774de5e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef98852ef77aa4f1dc05819" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef98a2f8f6c5fcefcf5f5ba" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef98b26ebc753a582a038af" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa00d530b18146cc86325e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befa02f4540a50bba23547af" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befa03b13b4489284b91d042" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom1" data-auto-wrapper="true">Rufen Sie uns an: </p></div><div id="a1976290befa0439f089ed83720d0d00" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom2" data-auto-wrapper="true"><a href="https://www.la-reinigung.de/author/dmitrecic/t">089 726 491 63</a></p></div></div></div></div></div><div id="a1976290befa01bf7fdf78c0425c2e61" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befa05598d71e8b0e6719ac0" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befa06bbf85b792eefb1e7bf" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa07dbdcabdb9b51f4445d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befa081bdf25d25c78c9f8c5" class="wb_element" data-plugin="Button"><a class="wb_button" href="https://www.facebook.com/lagebaeudereinigung/"><span><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="display: inline-block; vertical-align: middle; position: relative; top: -1px; height: 1em; width: 1em; overflow: visible; direction: ltr;"><text x="385.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg>&nbsp;</span></a></div><div id="a1976290befa09820d7ea6d0106eeaab" class="wb_element" data-plugin="Button"><a class="wb_button" href="https://www.instagram.com/la_gebaeudereinigung/"><span><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="display: inline-block; vertical-align: middle; position: relative; top: -1px; height: 1em; width: 1em; overflow: visible; direction: ltr;"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg>&nbsp;</span></a></div></div></div></div></div></div></div></div></div></div></div><div id="a1976290befa0afa1e8eef2758f40091" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa0ba47272a70043ec40a6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befa0cd68b2ad7d58046df31" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befa0d94e2245e5f3b66fa19" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befa0ea590e597650c034e20" class="wb_element wb_element_picture" data-plugin="Picture" title="München Reinigung und Hausmeisterservice"><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="{{base_url}}"><img loading="lazy" alt="München Reinigung und Hausmeisterservice" src="gallery_gen/d49db991adb490bca18882c0943368ae_260x122_fit.png?ts=1749705361"></a></div></div></div></div></div><div id="a1976290befa0f2f6f86811a9ed618c6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befa10ae28d258580b8f3c48" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom3" data-dnid="120362"><a href="">München Reinigung und Hausmeisterservice</a></h1><p class="wb-stl-custom4" data-auto-wrapper="true"><a href="">
									</a></p><p class="wb-stl-custom5" data-dnid="120364"><a href="">Reinigung und Hausmeisterservice in München</a></p></div></div></div></div></div><div id="a1976290befa11e54d1b102ef198054b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa1297a08fdfdb0b94f21b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa134d2c612ea5f9afdc12" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu" dir="ltr"><li class=""><a href="{{base_url}}">Home</a></li><li class=""><a href="hausmeisterservice">Hausmeisterservice</a></li><li class=""><a href="gebaudereinigung">Gebäudereinigung</a></li><li class=""><a href="winterdienst-munchen">Winterdienst</a></li><li class=""><a href="la-gebaudereinigung-haus-service">Was wir tun</a></li><li class=""><a href="gallery/">Fotogallerie</a></li><li class=""><a href="kontakt">Kontakt</a></li></ul><div class="clearfix"></div></div></div></div></div></div></div></div></div></div><div id="a1976290befa14f67bf5c364cc7d4908" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befa15f2bd6d49dd70de1c71" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa16e4abaa711992bb7d3a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa1789ba95fb62ec8eb85f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa18085e551692f053cfbc" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a1976290befa19ecd1da794b113ee361" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom19" data-auto-wrapper="true">Autor: admin</p></div><div id="a1976290befa1a2cd3ea84d02029287d" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div><div id="a1976290befa1b7f0fa4b81bc525924d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa1c2fa731b20bda115987" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa1d1ce6ccb6d2bf21a280" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom28" data-dnid="120555"><a href="gallery/">Gallery</a></h1><p class="wb-stl-custom20" data-dnid="120557">Posted on <a href="gallery/">April 23, 2021</a></p></div></div></div><div id="a1976290befa1edf4eabdbb66fd6ea3e" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom21" data-dnid="120390">Posted in <a href="https://www.la-reinigung.de/category/uncategorized/">Uncategorized</a></p></div></div></div><div id="a1976290befa1f909f22e854cb4841be" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa205b4e31ea6b03851081" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befa21208c9dd9067eef47d8" class="wb_element wb_element_picture" data-plugin="Picture" title="Winterdienst in München"><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="winterdienst-munchen"><img loading="lazy" alt="Winterdienst in München" src="gallery/wp-content-uploads-2021-04-WinterdienstMunchen-640x585.jpeg?ts=1749705361"></a></div></div></div></div></div><div id="a1976290befa2266272eeb0b5e7dc44f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa2388be38ea6a054c7d98" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom28" data-dnid="120568"><a href="winterdienst-munchen">Winterdienst München</a></h1><p class="wb-stl-custom20" data-dnid="120570">Posted on <a href="winterdienst-munchen">April 15, 2021</a></p></div></div></div><div id="a1976290befa24f88abd5366dc77cab6" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom29" data-dnid="120399">Ob Garten, Einfahrt oder Gehweg, wir befreien Sie von dem Schnee nach den kommunalen städtischen Richtlinien. Den Winterdienst bieten wir selbstverständlich auch den Privat Haushältern an.</p><p class="wb-stl-custom21" data-dnid="120402">Posted in <a href="https://www.la-reinigung.de/category/uncategorized/">Uncategorized</a></p></div></div></div><div id="a1976290befa258cabba28f49590ab7d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa26dd75f6ee6b06898351" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befa278316419ab070249e81" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="la-gebaudereinigung-haus-service"><img loading="lazy" alt="" src="gallery_gen/d49db991adb490bca18882c0943368ae_fit.png?ts=1749705361"></a></div></div></div></div></div><div id="a1976290befa28ac86607094299d97f4" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa2910d40a605b29a3acec" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom28" data-dnid="120581"><a href="la-gebaudereinigung-haus-service">LA Gebäudereinigung &amp; Haus Service</a></h1><p class="wb-stl-custom20" data-dnid="120583">Posted on <a href="la-gebaudereinigung-haus-service">April 14, 2021</a></p></div></div></div><div id="a1976290befa2ab6392fa84b793b2b2e" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom29" data-dnid="120411">Ihre Profis für die Gebäudereinigung in München. Sie hätte gern eine sauberere Immobilie und wollen sich dabei von einer zuverlässigen Gebäudereinigungs-Firma unterstützen lassen? Dann ist unser Unternehmen aus München genau die richtige Wahl für Sie! Ganz gleich, ob Praxis-, Kanzlei-, T...</p><p class="wb-stl-custom21" data-dnid="120414">Posted in <a href="category/about-company">About Company</a></p></div></div></div><div id="a1976290befa2b25968f08bbc2792ed6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa2c3d12232db335ce1fbd" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befa2dd109efc941b55bb6e1" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="https://www.la-reinigung.de/hausmeisterservice-2/"><img loading="lazy" alt="" src="gallery/eab8e3613bfd5bf08f14afea5d68f491_inigung-in-munchen-640x585.jpeg?ts=1749705361"></a></div></div></div></div></div><div id="a1976290befa2e6af51689bf941b4f82" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa2fd4f27872063a63226a" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom28" data-dnid="120594"><a href="https://www.la-reinigung.de/hausmeisterservice-2/">Hausmeisterservice</a></h1><p class="wb-stl-custom20" data-dnid="120596">Posted on <a href="https://www.la-reinigung.de/hausmeisterservice-2/">April 13, 2021</a></p></div></div></div><div id="a1976290befa3096c118aa9b5f2b2d2a" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom29" data-dnid="120423">Heckenschnitt Winterdienst Entrümpelung Mähen und Pflegen der Rasenfläche Reinigung und Pflege der Gehwege Laub Entfernen und Entsorgen Unkräut Reinigen Wechsel von Leuchtmitteln Hof, Zufahrten, Parkplätze und Fußwege kehren Pflege Mülltonnenstellplatz Hochdruckreinigung</p><p class="wb-stl-custom21" data-dnid="120426">Posted in <a href="https://www.la-reinigung.de/category/main-slider/">Main Slider</a></p></div></div></div><div id="a1976290befa31332ffcc9f2232a8d38" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa32a43aa97e743898ec84" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befa33cbe271047bf4172743" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="https://www.la-reinigung.de/gebaudereinigung-2/"><img loading="lazy" alt="" src="gallery/035d3e4f7d8f33f74b2939f6e8ebc95c_-reinigung-munchen-640x585.jpeg?ts=1749705361"></a></div></div></div></div></div><div id="a1976290befa344ddb069f7a2e7c25ae" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa3580dc9e0a0fbd2b2f59" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom28" data-dnid="120607"><a href="https://www.la-reinigung.de/gebaudereinigung-2/">Gebäudereinigung</a></h1><p class="wb-stl-custom20" data-dnid="120609">Posted on <a href="https://www.la-reinigung.de/gebaudereinigung-2/">April 13, 2021</a></p></div></div></div><div id="a1976290befa36788ea2da335d6a2264" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom29" data-dnid="120435">Unterhaltsreinigung Reinigung von Fenstern innen und außen Büroreinigung Praxisreinigung Treppenhausreinigung,Geländer, Briefkästen, Lampen und Fensterbretter feucht wischen, Kellerräume, Wasch- und Trockenräume und Gemeinschaftsräume Baureinigung Tiefgaragenreinigung Terrassenreinigung So...</p><p class="wb-stl-custom21" data-dnid="120438">Posted in <a href="https://www.la-reinigung.de/category/main-slider/">Main Slider</a></p></div></div></div><div id="a1976290befa37df53ec45eac1f97b2e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa383d5d1101129ff1567b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befa39a86dc427ae2c5a57a6" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="mahen-und-pflegen-der-rasenflache"><img loading="lazy" alt="" src="gallery/wp-content-uploads-2021-06-image4.jpeg?ts=1749705361"></a></div></div></div></div></div><div id="a1976290befa3a6966cfb378daaa8fd7" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa3be516d1419c6e30d9e8" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom28" data-dnid="120620"><a href="mahen-und-pflegen-der-rasenflache">Mähen und Heckenschnitt</a></h1><p class="wb-stl-custom20" data-dnid="120622">Posted on <a href="mahen-und-pflegen-der-rasenflache">April 13, 2021</a></p></div></div></div><div id="a1976290befa3c1da7cba6e539f897a6" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom29" data-dnid="120447">Mähen und Heckenschnitt im München. Unser erfahrenes Personal hat das nötige Wissen sowie die passenden Maschinen, um auch den dicksten Ästen zu Leibe zu rücken. Die abgeschnittenen Äste, werden von uns entsorgt damit ein sauberer Garten hinterlassen werden kann.Wir jäten Unkraut, hacken u...</p><p class="wb-stl-custom21" data-dnid="120450">Posted in <a href="category/leistungen">Leistungen</a></p></div></div></div><div id="a1976290befa3de2191a43d2d2daf841" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa3e73404d7031b31a9806" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befa3f2640ba645a654d4e7d" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="hausmeisterservice"><img loading="lazy" alt="" src="gallery/wp-content-uploads-2021-04-image1-1-1.jpeg?ts=1749705361"></a></div></div></div></div></div><div id="a1976290befa40a557ce8611e85406c2" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa414ef1a1e7d4dc15fbef" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom28" data-dnid="120633"><a href="hausmeisterservice">Hausmeisterservice</a></h1><p class="wb-stl-custom20" data-dnid="120635">Posted on <a href="hausmeisterservice">April 13, 2021</a></p></div></div></div><div id="a1976290befa42d5dd7e0126f6529558" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom29" data-dnid="120459">Heckenschnitt Winterdienst Entrümpelung Mähen und Pflegen der Rasenfläche Reinigung und Pflege der Gehwege Laub Entfernen und Entsorgen Unkräut Reinigen Wechsel von Leuchtmitteln Hof, Zufahrten, Parkplätze und Fußwege kehren Pflege Mülltonnenstellplatz Hochdruckreinigung</p><p class="wb-stl-custom21" data-dnid="120462">Posted in <a href="category/leistungen">Leistungen</a></p></div></div></div><div id="a1976290befa43159567bd06c08c38f6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa44b473943db041a3a779" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befa4581c23e743e0217ee1d" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="fenstern-reinigung-munchen"><img loading="lazy" alt="" src="gallery/wp-content-uploads-2021-04-image3-1.jpeg?ts=1749705361"></a></div></div></div></div></div><div id="a1976290befa46b171182163b7f32096" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa477121470f12d26626b6" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom28" data-dnid="120646"><a href="fenstern-reinigung-munchen">Fenstern Reinigung München</a></h1><p class="wb-stl-custom20" data-dnid="120648">Posted on <a href="fenstern-reinigung-munchen">April 13, 2021</a></p></div></div></div><div id="a1976290befa485d23468540b9bcf8bd" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom29" data-dnid="120471">Glasklare Aussichten sind das Fenster zum Erfolg. Wir kümmern uns um einen sauberen Ein- und Ausblick. Zum Begriff „Glasreinigung“ zählt auch die Reinigung der Fenster sowie Fensterrahmen.Glas- und Fensterfronten sind durch Regen, Schnee, Laub und Staub ganz besonders belastet und bedürfen ein...</p><p class="wb-stl-custom21" data-dnid="120474">Posted in <a href="category/leistungen">Leistungen</a></p></div></div></div><div id="a1976290befa4996940735c06a3e1fa2" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa4a44cf0a0b0102aa742a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befa4b26185c960fd88543b4" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="buroreinigung-munchen"><img loading="lazy" alt="" src="gallery/wp-content-uploads-2021-04-buroreinigung-640x525.jpeg?ts=1749705361"></a></div></div></div></div></div><div id="a1976290befa4cb5e7e0ec0265c936fa" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa4d18e3b5bc9a512530c0" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom28" data-dnid="120659"><a href="buroreinigung-munchen">Büroreinigung München</a></h1><p class="wb-stl-custom20" data-dnid="120661">Posted on <a href="buroreinigung-munchen">April 13, 2021</a></p></div></div></div><div id="a1976290befa4eeedb0ec3d69c8f8bc2" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom29" data-dnid="120483">Ganz egal, ob Einmalaufträge oder regelmäßige Betreuung, wir reinigen alle möglichen Objekte. Abgesehen von der Büroreinigung, nehmen wir ebenfalls Aufträge von Praxen sowie Wohnungen auf. Saubere Räume und Arbeitsplätze sorgen für einen guten ersten Eindruck bei Ihren Kunden. Auch Ihre ...</p><p class="wb-stl-custom21" data-dnid="120486">Posted in <a href="category/leistungen">Leistungen</a></p></div></div></div><div id="a1976290befa4fdaba29902a245f148d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa5072bda1b5ef115363a2" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befa51c593df4bf1b2336491" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="gebaudereinigung"><img loading="lazy" alt="" src="gallery/wp-content-uploads-2021-04-image5-2.jpeg?ts=1749705361"></a></div></div></div></div></div><div id="a1976290befa52574ea706794718985c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa5340e43d72c9e3105406" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom28" data-dnid="120672"><a href="gebaudereinigung">Gebäudereinigung</a></h1><p class="wb-stl-custom20" data-dnid="120674">Posted on <a href="gebaudereinigung">April 13, 2021</a></p></div></div></div><div id="a1976290befa543d1bdb562b47b7881b" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom29" data-dnid="120495">Unterhaltsreinigung Reinigung von Fenstern innen und außen Büroreinigung Praxisreinigung Treppenhausreinigung,Geländer, Briefkästen, Lampen und Fensterbretter feucht wischen, Kellerräume, Wasch- und Trockenräume und Gemeinschaftsräume Baureinigung Tiefgaragenreinigung Terrassenreinigung So...</p><p class="wb-stl-custom21" data-dnid="120498">Posted in <a href="category/leistungen">Leistungen</a></p></div></div></div><div id="a1976290befa558a81c16e79182cbb05" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa56812591f57864f4e4a5" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befa576afdf9cccbb0e28468" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befa58601650ff3dbe68438b" class="wb_element" data-plugin="Button"><a class="wb_button" href="https://www.la-reinigung.de/author/dmitrecic/page/2/"><span>Ältere Beiträge&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="display: inline-block; vertical-align: middle; position: relative; top: -1px; height: 1em; width: 1em; overflow: visible; direction: ltr;"><text x="577.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></span></a></div></div></div></div></div></div></div></div></div></div></div></div></div><div id="a1976290befa5918653018f7f18c09a0" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa5a9bb663bdaf54adbde7" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befa5bc1c84fb54da1706bce" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa5c780b6892acb1e0f4ca" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befa5d66a0296ceaf10cbc4e" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom15" data-auto-wrapper="true">Kontaktieren Sie uns</p></div></div></div><div id="a1976290befa5e98e3f26fb8b0f9e8f9" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa5f13e59772399c7ead40" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="vmenu" dir="ltr"><li class=""><a href="kontakt">Kontakt Formular</a></li><li class=""><a href="tel:///+498972649163">Tel: 089 726 49163</a></li></ul><div class="clearfix"></div></div><div id="a1976290befa601d4473a3d1f1f00d2d" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom16" data-dnid="120686"> </p><p class="wb-stl-custom17" data-dnid="120688">LA Gebäudereinigung &amp; Haus Service, Hansastr.95, 81373 München</p></div></div></div></div></div><div id="a1976290befa61a7d421412ee9f72249" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa627ee3d2dfa8e3ac8ccb" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befa6382c0707eb3b132d823" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom15" data-auto-wrapper="true">Information</p></div></div></div><div id="a1976290befa648b22c0473fbefa299a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa65ec67cc5f96f53c1d2c" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="vmenu" dir="ltr"><li class=""><a href="gebaudereinigung">Gebäudereinigung in München</a></li><li class=""><a href="hausmeisterservice">Hausmeisterservice in München</a></li><li class=""><a href="winterdienst-munchen">Winterdienst in München</a></li><li class=""><a href="gallery/">Fotogallerie</a></li></ul><div class="clearfix"></div></div></div></div></div></div><div id="a1976290befa66b3f8173c4dcc476c82" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa672227ae66059b3d529e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befa686f46a6f8ab1bd041a0" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom15" data-auto-wrapper="true">Folgen Sie uns auf</p></div></div></div><div id="a1976290befa699a5b277c562a93ea52" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa6ae18689773dd58e50cc" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="vmenu" dir="ltr"><li class=""><a href="https://www.facebook.com/lagebaeudereinigung/">Facebook</a></li><li class=""><a href="https://www.instagram.com/la_gebaeudereinigung/">Intagram</a></li></ul><div class="clearfix"></div></div></div></div></div></div><div id="a1976290befa6b5264e907a839276c60" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa6cf02508f5b4927cdc62" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befa6d57e4fcdeb35494ec29" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom15" data-auto-wrapper="true">Impressum</p></div></div></div><div id="a1976290befa6ea1e549aff2647eb6a4" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa6f6a062c3918a417028e" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="vmenu" dir="ltr"><li class=""><a href="datenschutzerklarung">Datenschutzerklärung</a></li><li class=""><a href="impressum">Impressum</a></li></ul><div class="clearfix"></div></div></div></div></div></div></div></div><div id="a1976290befa703e8039ed285243b302" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa71f0422b1fdcde70d716" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befa7277c60f2167c5c7164b" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom18" data-dnid="120338">WordPress Theme : <a href="https://demo.8degreethemes.com/eightmedi-lite/">EightMedi Lite</a>
					by 8Degree Themes</p></div><div id="a1976290befa736ecf4732efce58c509" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befa749d56f3368b913b95cb" class="wb_element" data-plugin="Button"><a class="wb_button" href="https://www.facebook.com/lagebaeudereinigung/"><span><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="display: inline-block; vertical-align: middle; position: relative; top: -1px; height: 1em; width: 1em; overflow: visible; direction: ltr;"><text x="385.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg>&nbsp;</span></a></div><div id="a1976290befa75dd32c6b5ab75c27e6c" class="wb_element" data-plugin="Button"><a class="wb_button" href="https://www.instagram.com/la_gebaeudereinigung/"><span><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="display: inline-block; vertical-align: middle; position: relative; top: -1px; height: 1em; width: 1em; overflow: visible; direction: ltr;"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg>&nbsp;</span></a></div></div></div></div></div></div></div></div></div></div></div></div></div><div id="a1976290bef9892247200571b353e75d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befa77f2771a9a6118e1ce96" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#87E8FF"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div></div></div><div id="a1976290befa767d60dc21ffecab9e1b" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#404040"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div></div></div><div id="wb_footer_a1976290d48201fea0f8d2a94774de5e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="wb_footer_c" class="wb_element" data-plugin="WB_Footer" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
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
