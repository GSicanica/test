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

				document.cookie = '__cookie_law__=' + cookieLaw + '; path=/; expires=Sun, 07 Jun 2026 08:16:00 GMT';

				var items = ciCollectedCookies;
				ciCollectedCookies = [];
				items.forEach(function (item) {
					d.cookie = item;
				})
			}
		})(document);
			</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "München Reinigung und Hausmeisterservice"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? generateCanonicalUrl($sitemapUrls) : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Reinigung und Hausmeisterservice in München"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "Home"); ?>" />
		
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "München Reinigung und Hausmeisterservice"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Reinigung und Hausmeisterservice in München"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="{{curr_url}}" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="NameSilo Website Builder" />
			<script src="js/common-bundle.js?ts=20250612081559" type="text/javascript"></script>
	<script src="js/a1976290d4820010ff2868f368006e2f-bundle.js?ts=20250612081559" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20250612081559" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="css/a1976290d4820010ff2868f368006e2f-bundle.css?ts=20250612081559" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
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


<body class="site site-lang-de<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a1976290d4820010ff2868f368006e2f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div><div id="wb_main_a1976290d4820010ff2868f368006e2f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef203c2362ecdfe7e615a84" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef205168198a48325680b0e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef2069b1fcd6cf4c5aa04ad" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef2074894c5151645c1ac74" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef209f18de153ea6ee186ef" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef3003486192f2510cae031" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom1" data-auto-wrapper="true">Rufen Sie uns an: </p></div><div id="a1976290bef3013808eb52142df0cf04" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom2" data-auto-wrapper="true"><a data-type="page" href="">089 726 491 63</a></p></div></div></div></div></div><div id="a1976290bef2084be505f2ffecbf4449" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef3024eaa3c1c79c4dd21ae" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef30308e584bc13a6201de7" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef30400cd7dc27bf781cf8f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef3057cceca5ec7e8f7f57d" class="wb_element" data-plugin="Button"><a class="wb_button" href="https://www.facebook.com/lagebaeudereinigung/"><span><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="display: inline-block; vertical-align: middle; position: relative; top: -1px; height: 1em; width: 1em; overflow: visible; direction: ltr;"><text x="385.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg>&nbsp;</span></a></div><div id="a1976290bef3060ece6aee9677b1cd00" class="wb_element" data-plugin="Button"><a class="wb_button" href="https://www.instagram.com/la_gebaeudereinigung/"><span><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="display: inline-block; vertical-align: middle; position: relative; top: -1px; height: 1em; width: 1em; overflow: visible; direction: ltr;"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg>&nbsp;</span></a></div></div></div></div></div></div></div></div></div></div></div><div id="a1976290bef3079849ed7a443adad3d9" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef3089957df40536b99a209" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef309909fc02c988cef852c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef30a4f3acb674f1d8598e9" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef30b5f8405d5affdb7a860" class="wb_element wb_element_picture" data-plugin="Picture" title="München Reinigung und Hausmeisterservice"><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="{{base_url}}"><img loading="lazy" alt="München Reinigung und Hausmeisterservice" src="gallery_gen/d49db991adb490bca18882c0943368ae_260x122_fit.png?ts=1749705359"></a></div></div></div></div></div><div id="a1976290bef30c74706cd2c9a3c12888" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef30d723ee6d5ab0c86a636" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom3" data-dnid="10387"><a href="">München Reinigung und Hausmeisterservice</a></h1><p class="wb-stl-custom4" data-auto-wrapper="true"><a href="">
</a></p><p class="wb-stl-custom5" data-dnid="10389"><a href="">Reinigung und Hausmeisterservice in München</a></p></div></div></div></div></div><div id="a1976290bef30e4320e601eacda86fb0" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef30f537f96af217b579360" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef31018d12b5011a23f4b2f" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu" dir="ltr"><li class="wb_this_page_menu_item"><a href="{{base_url}}">Home</a></li><li class=""><a href="hausmeisterservice">Hausmeisterservice</a></li><li class=""><a href="gebaudereinigung">Gebäudereinigung</a></li><li class=""><a href="winterdienst-munchen">Winterdienst</a></li><li class=""><a href="la-gebaudereinigung-haus-service">Was wir tun</a></li><li class=""><a href="gallery/">Fotogallerie</a></li><li class=""><a href="kontakt">Kontakt</a></li></ul><div class="clearfix"></div></div></div></div></div></div></div></div></div></div><div id="a1976290bef312155dd1a57efca63641" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef313e2197eedf28fdd5cbd" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a1976290bef31491212280b7e99f3977" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef315cd03334359ab2f3c7c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef3165b0d654625dc62a83f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a1976290bef317077e6a00f152f76a73" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a1976290bef31874a2183f8bfd641185" class="wb_element wb_element_picture" data-plugin="Picture" title="Hausmeisterservice"><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="Hausmeisterservice" src="gallery_gen/395cca5e2064d9e3aaa13ab1858ec4ef_2400x750_fit.jpeg?ts=1749705359" class="wb-picture-mode-default"></div></div></div><div id="a1976290bef31936e82f558091c3835a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef31a532966f851e59ae28e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef31bd50d2e8d43a0ea7dae" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef31cb27d5465d6b37b6698" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef31d6fcfb640c43a794d5c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef31fd7828a332b11005ddd" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom6" data-auto-wrapper="true">Hausmeisterservice</p></div></div></div><div id="a1976290bef31e51ed62c0cd7bd2a7a8" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef320bbd097266c58e514de" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef321a9937581fe860150d1" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><ul class="wb-stl-list1" data-dnid="10884"><li data-dnid="10916">Heckenschnitt</li><li data-dnid="10918">Winterdienst</li><li data-dnid="10920">Entrümpelung</li><li data-dnid="10922">Mähen und Pflegen der Rasenfläche</li><li data-dnid="10924">Reinigung und Pflege der Gehwege</li><li data-dnid="10926">Laub Entfernen und Entsorgen</li><li data-dnid="10928">Unkräut Reinigen</li><li data-dnid="10930">Wechsel von Leuchtmitteln</li><li data-dnid="10932">Hof, Zufahrten, Parkplätze und Fußwege kehren</li><li data-dnid="10934">Pflege Mülltonnenstellplatz</li><li data-dnid="10936">Hochdruckreinigung</li></ul></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div><div id="a1976290bef3227d82a9d5767a77db8b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a1976290bef3234c55a6d2751d344dcc" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef32488c7ddfb9bb71a29d7" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef32535d0b37ba80c866893" class="wb_element" data-plugin="Button"><a class="wb_button" href="{{base_url}}"><span></span></a></div></div></div><div id="a1976290bef3260dff2ed02182c4dbfc" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef327daa298cdd82b066477" class="wb_element" data-plugin="Button"><a class="wb_button" href="{{base_url}}"><span></span></a></div></div></div><div id="a1976290bef328637dd19575109e80e0" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef32914426a99a0c410691c" class="wb_element" data-plugin="Button"><a class="wb_button" href="{{base_url}}"><span></span></a></div></div></div></div></div><div id="a1976290bef32a2772b313b9d2823427" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a1976290bef32b3ddfea6cd0e9237600" class="wb_element" data-plugin="Button"><a class="wb_button" href="{{base_url}}"><span><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="display: inline-block; vertical-align: middle; position: relative; top: -1px; height: 1em; width: 1em; overflow: visible; direction: ltr;"><text x="577.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg>&nbsp;</span></a></div></div></div></div></div></div></div><div id="a1976290bef32c93d4a52347bb8e5ce7" class="wb_element" data-plugin="Button"><a class="wb_button" href="#featured-content"><span><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="display: inline-block; vertical-align: middle; position: relative; top: -1px; height: 1em; width: 1em; overflow: visible; direction: ltr;"><text x="321.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg>&nbsp;</span></a></div><div id="a1976290bef32d55a74b67011b8d72a0" class="wb_element" data-plugin="Button"><a class="wb_button" href="#munchen-reinigung-kontakt"><span>KONTAKTIEREN SIE UNS</span></a></div></div></div><div id="a1976290bef32ea32430720ad699b41a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><a name="featured-content" class="wb_anchor"></a><div class="wb_content wb-layout-vertical"><div id="a1976290bef32f595e6fc04c3909a2a5" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef330c3b7f3cc10f8133305" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-custom7" data-dnid="10410">Leistungen</h2></div></div></div></div></div><div id="a1976290bef3313cc8762b37fc44fb81" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef3329d4d32c3b0192cea93" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef3336163618ebf805f3c31" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-custom7" data-dnid="10413">LA Gebäudereinigung &amp; Haus Service</h2><p class="wb-stl-custom8" data-dnid="10415">Ihre Profis für die Gebäudereinigung in München
Sie hätte gern eine sauberere Immobilie und wollen sich dabei von einer zuverlässigen Gebäudereinigungs-Firma unterstützen lassen?
Dann ist unser Unternehmen aus München genau die richtige Wahl für Sie!
Ganz gleich, ob Praxis-, Kanzlei-, Treppenhaus- oder Büroreinigung,
unser engagiertes und pünktliches Team hilft Ihnen bei der Pflege Ihrer Räumlichkeiten gern weiter.
Regelmäßig oder je nach Bedarf reinigen unsere Mitarbeiter Ihre Bodenbeläge, Oberflächen, Sanitär- und Küchenanlagen,
damit Sie sich rundum wohl fühlen. Sprechen Sie mit uns über Ihre Bedürfnisse oder Zeitwünsche,
damit wir einen Reinigungsplan für Ihr Anliegen erstellen können.
Blitzblanke Fenster für Ihre Immobilie
Neben der Gebäude- und Büroreinigung stehen wir Ihnen ebenfalls gern für die Fensterreinigung zur Verfügung.
 Diese lästige Arbeit kann viel Zeit und Nerven kosten, doch mit unseren Mitarbeitern machen Sie es sich ganz leicht.
 Wir kümmern uns um die Instandhaltung Ihrer Fenster und säubern sie gründlich und sachkundig.
Vereinbaren Sie einfach einen Termin für Ihre Fensterreinigung mit unserem freundlichen Service-Team!</p></div></div></div></div></div><div id="a1976290bef3341fca68c171cd36c709" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef335d0d93a79b18252f494" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef33622b59bc8eaeed88f49" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef33753cc5f8014ef03746c" class="wb_element wb_element_picture" data-plugin="Picture" title="Büroreinigung"><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="Büroreinigung" src="gallery_gen/7d28e4435d5d44080fa7729833999bc7_840x560_fit.jpeg?ts=1749705360"></div></div></div></div></div><div id="a1976290bef3389aa238e5201116366f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef33993b174030984905566" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-custom9" data-dnid="10494">Büroreinigung</h2><p class="wb-stl-custom10" data-dnid="10496">Ganz egal, ob Einmalaufträge oder regelmäßige Betreuung, wir reinigen alle möglichen Objekte.
Abgesehen von der Büroreinigung, nehmen wir ebenfalls Aufträge von Praxen sowie Wohnungen auf.</p></div><div id="a1976290bef33ad6d8983977a27b4148" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef33becd2a91b2f2d4c27f5" class="wb_element" data-plugin="Button"><a class="wb_button" href="kontakt"><span>Kontaktieren Sie uns</span></a></div></div></div></div></div></div></div></div></div><div id="a1976290bef33c97d3cf8b9c56bbef54" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef33d17e067dc2be5550433" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef33ebc49ea01566ef17e51" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-custom7" data-dnid="10423">Hausmeisterservice München</h2></div><div id="a1976290bef33fdb2ec50256bf30ce0c" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom11" data-dnid="10425">Heckenschnitt, Winterdienst , Entrümpelung, Mähen und Pflegen der Rasenfläche, Reinigung und Pflege der Gehwege, Laub Entfernen und Entsorgen, Unkräut Reinigen, Wechsel von Leuchtmitteln, Hof, Zufahrten, Parkplätze und Fußwege kehren, Pflege Mülltonnenstellplatz, Hochdruckreinigung und viel mehr!</p></div></div></div></div></div><div id="a1976290bef340bf90b55acd004970d9" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef341d5d8a6f35bf3d46903" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a1976290bef3427ab24b77d2e162641a" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a1976290bef343abe50fe1f63789d179" class="wb_element wb_element_picture" data-plugin="Picture" title="Büroreinigung"><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="Büroreinigung" src="gallery_gen/1f193123ca1fe43282353ba3ebc5e603_360x298_fit.jpg?ts=1749705360" class="wb-picture-mode-default"></div></div></div></div></div><div id="a1976290bef34437e7e1c6c39af457b4" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef345e2ab5ca66269947684" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom12" data-auto-wrapper="true">Kontaktieren Sie uns jetzt</p></div><div id="a1976290bef3463360dc7a1654a24c85" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef3470a22ba758bdcc63181" class="wb_element" data-plugin="Button"><a class="wb_button" href="kontakt"><span>Kontakt Formular</span></a></div></div></div></div></div></div></div><div id="a1976290bef34827cc1fc94993f88aa1" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a1976290bef349a7ee6003f6907dc49a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef34ae1f0e3ca91640cc9f2" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef34bc160a72b93e31618b9" class="wb_element" data-plugin="CustomHtml" style=" overflow: hidden;"><div style="width: 100%; height: 100%; overflow-y: auto;"><iframe frameborder="no" src="//www.google.com/maps/embed?pb=%211m18%211m12%211m3%211d2663.3275600755287%212d11.535347165903156%213d48.12320615419264%212m3%211f0%212f0%213f0%213m2%211i1024%212i768%214f13.1%213m3%211m2%211s0x479dd8b6a55470c3%3A0xc7f4909eb621b773%212sHansastra%C3%9Fe+95%2C+81373+M%C3%BCnchen%215e0%213m2%211shr%212sde%214v1618395350436%215m2%211shr%212sde" style="width: 100%; height: 100%; display: block;"></iframe></div></div></div></div></div></div><div id="a1976290bef34c408498a7869832a690" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef34da4151537c7d0f3a42f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef34e2a3d0e16411960f999" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef350e968bbf9b0d40315ab" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-custom13" data-dnid="10512">Contact Us</h3></div></div></div><div id="a1976290bef34f7ed906223bc2c4baea" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef351d50f8572b0cbe74a32" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom14" data-auto-wrapper="true">
LA Gebäudereinigung &amp; Haus Service, Hansastr.95, 81373 München</p></div></div></div></div></div></div></div></div></div></div></div><div id="a1976290bef352f3c563008784d06051" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef353e44e8f12ff944589c8" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef3547982799e263b7e3f78" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef355084f960dfca63d2833" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef3561438093a5b346fd602" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef3573300d5c6574dd131a9" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom15" data-auto-wrapper="true">Kontaktieren Sie uns</p></div></div></div><div id="a1976290bef35815d4bdbec4e58a4913" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef3593604d3459c92b4e0d9" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="vmenu" dir="ltr"><li class=""><a href="kontakt">Kontakt Formular</a></li><li class=""><a href="tel:///+498972649163">Tel: 089 726 49163</a></li></ul><div class="clearfix"></div></div><div id="a1976290bef35ba68a934764b46d08e7" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom16" data-dnid="10517"> </p><p class="wb-stl-custom17" data-dnid="10519">LA Gebäudereinigung &amp; Haus Service, Hansastr.95, 81373 München</p></div></div></div></div></div><div id="a1976290bef35c64b004812671c2ea3d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef35d2a914e9a836f4ccbc0" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef35ea5b8450f14b27b588f" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom15" data-auto-wrapper="true">Information</p></div></div></div><div id="a1976290bef35f5cae69b4d09f86a20a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef3606d8d6c36d4be0f62a1" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="vmenu" dir="ltr"><li class=""><a href="gebaudereinigung">Gebäudereinigung in München</a></li><li class=""><a href="hausmeisterservice">Hausmeisterservice in München</a></li><li class=""><a href="winterdienst-munchen">Winterdienst in München</a></li><li class=""><a href="gallery/">Fotogallerie</a></li></ul><div class="clearfix"></div></div></div></div></div></div><div id="a1976290bef362a70c2263709b805dac" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef3631440a686c2fc647bbf" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef364e894b9756c865a2483" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom15" data-auto-wrapper="true">Folgen Sie uns auf</p></div></div></div><div id="a1976290bef3659b5aa059824484eaad" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef366b6eb7eff9f9ce12c62" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="vmenu" dir="ltr"><li class=""><a href="https://www.facebook.com/lagebaeudereinigung/">Facebook</a></li><li class=""><a href="https://www.instagram.com/la_gebaeudereinigung/">Intagram</a></li></ul><div class="clearfix"></div></div></div></div></div></div><div id="a1976290bef36892e003ee8bcf3e4e93" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef3692d8551a109dc93b649" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef36a3820fdacdb123b7315" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom15" data-auto-wrapper="true">Impressum</p></div></div></div><div id="a1976290bef36b6213f982f6b8218d2a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef36cff952002243987a51b" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="vmenu" dir="ltr"><li class=""><a href="datenschutzerklarung">Datenschutzerklärung</a></li><li class=""><a href="impressum">Impressum</a></li></ul><div class="clearfix"></div></div></div></div></div></div></div></div><div id="a1976290bef36e8d98c31adff5ce472c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef4005e98fffb4dd01b1e6a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef4011fa5e9b6a4cd3f0134" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom18" data-dnid="10363">WordPress Theme : <a href="https://demo.8degreethemes.com/eightmedi-lite/">EightMedi Lite</a>
by 8Degree Themes</p></div><div id="a1976290bef40284a18bcabddfd995d5" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef4034469a3b9d617ac70d1" class="wb_element" data-plugin="Button"><a class="wb_button" href="https://www.facebook.com/lagebaeudereinigung/"><span><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="display: inline-block; vertical-align: middle; position: relative; top: -1px; height: 1em; width: 1em; overflow: visible; direction: ltr;"><text x="385.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg>&nbsp;</span></a></div><div id="a1976290bef404687f9742055a38680d" class="wb_element" data-plugin="Button"><a class="wb_button" href="https://www.instagram.com/la_gebaeudereinigung/"><span><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="display: inline-block; vertical-align: middle; position: relative; top: -1px; height: 1em; width: 1em; overflow: visible; direction: ltr;"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg>&nbsp;</span></a></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div><div id="a1976290bef20492bd495bce8e48c3fe" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef4069c865a0cd9fe23786f" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#87E8FF"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div></div></div><div id="a1976290bef40519a2b7b14958beff69" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#404040"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div></div></div><div id="wb_footer_a1976290d4820010ff2868f368006e2f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="wb_footer_c" class="wb_element" data-plugin="WB_Footer" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
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
