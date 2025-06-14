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
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Büroreinigung München | München Reinigung und Hausmeisterservice"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? generateCanonicalUrl($sitemapUrls) : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Ganz egal, ob Einmalaufträge oder regelmäßige Betreuung, wir reinigen alle möglichen Objekte. Abgesehen von der Büroreinigung, nehmen wir ebenfalls Aufträge von Praxen sowie Wohnungen auf. Saubere Räume und Arbeitsplätze sorgen für einen guten ersten Eindruck bei Ihren Kunden. Auch Ihre Mitarbeiter fühlen sich in einem sauberen Umfeld wohler und erledigen…"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "Büroreinigung München,München Reinigung und Hausmeisterservice"); ?>" />
		
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Büroreinigung München | München Reinigung und Hausmeisterservice"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Ganz egal, ob Einmalaufträge oder regelmäßige Betreuung, wir reinigen alle möglichen Objekte. Abgesehen von der Büroreinigung, nehmen wir ebenfalls Aufträge von Praxen sowie Wohnungen auf. Saubere Räume und Arbeitsplätze sorgen für einen guten ersten Eindruck bei Ihren Kunden. Auch Ihre Mitarbeiter fühlen sich in einem sauberen Umfeld wohler und erledigen…"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="{{curr_url}}" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="NameSilo Website Builder" />
			<script src="js/common-bundle.js?ts=20250612081559" type="text/javascript"></script>
	<script src="js/a1976290d4820472f0bf9283b6242650-bundle.js?ts=20250612081559" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20250612081559" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="css/a1976290d4820472f0bf9283b6242650-bundle.css?ts=20250612081559" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
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


<body class="site site-lang-de<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a1976290d4820472f0bf9283b6242650" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div><div id="wb_main_a1976290d4820472f0bf9283b6242650" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befc0e0f85e6fe9d9d6c6eba" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befc105f640f9eb84b74e5de" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befc11aaf9d0b5729501ce6e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befc1203a1299910b818ae1c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befc14aa3cfd5ea43defb2e7" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befc155692e9a23bd900625d" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom1" data-auto-wrapper="true">Rufen Sie uns an: </p></div><div id="a1976290befc164e9cc9212274af9bba" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom2" data-auto-wrapper="true"><a href="https://www.la-reinigung.de/buroreinigung-munchen/t">089 726 491 63</a></p></div></div></div></div></div><div id="a1976290befc135935f6b03bbc56a20b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befc17e5afe8dc52ffa4ab2c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befc18ec2b20dbb220b534a3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befc193f763cc74f75792ded" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befc1ae32f6a0b2b7a3c742d" class="wb_element" data-plugin="Button"><a class="wb_button" href="https://www.facebook.com/lagebaeudereinigung/"><span><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="display: inline-block; vertical-align: middle; position: relative; top: -1px; height: 1em; width: 1em; overflow: visible; direction: ltr;"><text x="385.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg>&nbsp;</span></a></div><div id="a1976290befc1beca97c342d8509b8bb" class="wb_element" data-plugin="Button"><a class="wb_button" href="https://www.instagram.com/la_gebaeudereinigung/"><span><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="display: inline-block; vertical-align: middle; position: relative; top: -1px; height: 1em; width: 1em; overflow: visible; direction: ltr;"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg>&nbsp;</span></a></div></div></div></div></div></div></div></div></div></div></div><div id="a1976290befc1cc3fbd43f3b68665b92" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befc1d7aa0ece30fe04d5dce" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befc1e26fa3abede5d0b8292" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befc1f318c9af08d638ccd2a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befc2031d99f90a9610ea96f" class="wb_element wb_element_picture" data-plugin="Picture" title="München Reinigung und Hausmeisterservice"><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="{{base_url}}"><img loading="lazy" alt="München Reinigung und Hausmeisterservice" src="gallery_gen/d49db991adb490bca18882c0943368ae_260x122_fit.png?ts=1749705361"></a></div></div></div></div></div><div id="a1976290befc21b27faa7ea961bfdef9" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befc225f7b867119f059985d" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom3" data-dnid="150358"><a href="">München Reinigung und Hausmeisterservice</a></h1><p class="wb-stl-custom4" data-auto-wrapper="true"><a href="">
									</a></p><p class="wb-stl-custom5" data-dnid="150360"><a href="">Reinigung und Hausmeisterservice in München</a></p></div></div></div></div></div><div id="a1976290befc230640b46e22131f9317" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befc24e49e92de736432c07b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befc2544c1ffa6cd3c8354b3" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu" dir="ltr"><li class=""><a href="{{base_url}}">Home</a></li><li class=""><a href="hausmeisterservice">Hausmeisterservice</a></li><li class=""><a href="gebaudereinigung">Gebäudereinigung</a></li><li class=""><a href="winterdienst-munchen">Winterdienst</a></li><li class=""><a href="la-gebaudereinigung-haus-service">Was wir tun</a></li><li class=""><a href="gallery/">Fotogallerie</a></li><li class=""><a href="kontakt">Kontakt</a></li></ul><div class="clearfix"></div></div></div></div></div></div></div></div></div></div><div id="a1976290befc2649a7bad9fe382a867c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befc27ced08cd6f307e51443" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befc283eb4e06826e93b81f2" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befc2943a455b8d7587bda51" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befc2a6d9cec3a4f20fcd8f7" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a1976290befc2bd545758fc983988c8b" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom19" data-auto-wrapper="true">Büroreinigung München</p></div><div id="a1976290befc2ce89b768bd342dafc1e" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div><div id="a1976290befc2d3f140db58e9db3b1b7" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom20" data-dnid="150440">Posted on <a href="buroreinigung-munchen">April 13, 2021</a> by <a href="author/dmitrecic">admin</a></p></div></div></div><div id="a1976290befc2ea18baa6f8dedadd17c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befc2f9801e115f239682467" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befc31bfb37ac732c151d2b6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befc32ecfac856f55cec9b8c" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/wp-content-uploads-2021-04-buroreinigung.jpeg?ts=1749705361"></div></div></div></div></div></div></div><div id="a1976290befc304645c008ba4f2a2a59" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befc3344698f1c0bb3b2d548" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befc34b28354de5a7cccf3cc" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befc36b8a05025eea9996453" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom14" data-auto-wrapper="true">Ganz egal, ob Einmalaufträge oder regelmäßige Betreuung, wir reinigen alle möglichen Objekte. Abgesehen von der Büroreinigung, nehmen wir ebenfalls Aufträge von Praxen sowie Wohnungen auf.
</p></div></div></div><div id="a1976290befc35a8004a4caa9d4f4f99" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befc3791b1ae3afcc28a0c8a" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom22" data-dnid="150516">Saubere Räume und Arbeitsplätze sorgen für einen guten ersten Eindruck bei Ihren Kunden. Auch Ihre Mitarbeiter fühlen sich in einem sauberen Umfeld wohler und erledigen ihre Arbeit motivierter und damit effizienter. Der Werterhalt Ihrer Immobilien und Einrichtungen durch unsere kontinuierliche Pflege in der Gebäudereinigung macht sich zusätzlich bezahlt.</p><p class="wb-stl-custom22" data-dnid="150518">Büro- und Praxisräume werden intensiv genutzt. Aktenschränke, Schreibtische, Mülleimer und Böden – hier nehmen Ihre Mitarbeiter Veränderungen detailliert wahr.</p></div></div></div></div></div></div></div></div></div><div id="a1976290befc38891e4f376cd7ee6640" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom21" data-dnid="150383">Posted in <a href="category/leistungen">Leistungen</a></p></div></div></div><div id="a1976290befc398ae96896819e9332c4" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befc3a16903ad550526d5384" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befc3b8cd232f47ea689dbf9" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befc3c3444846bf3a8eec775" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befc3ec5a9baf34fe6d6398c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befc3f849973bbf171b275e8" class="wb_element" data-plugin="Button"><a class="wb_button" href="gebaudereinigung"><span>Gebäudereinigung&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="display: inline-block; vertical-align: middle; position: relative; top: -1px; height: 1em; width: 1em; overflow: visible; direction: ltr;"><text x="577.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></span></a></div></div></div></div></div><div id="a1976290befc3da6b3afe4c9e3db81ed" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befc408751a2712e2cbe8712" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befc4119d1926a9801ab5541" class="wb_element" data-plugin="Button"><a class="wb_button" href="fenstern-reinigung-munchen"><span>Fenstern Reinigung München&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="display: inline-block; vertical-align: middle; position: relative; top: -1px; height: 1em; width: 1em; overflow: visible; direction: ltr;"><text x="577.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></span></a></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div><div id="a1976290befc42bdd8f025f1e2ee80a6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befc4325ddb30cd6e2aca4ce" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befc4412ac436bd25dfe40a2" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befc457ae01cec4cfd0b0bb5" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befc46281ac1bc4da8826525" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom15" data-auto-wrapper="true">Kontaktieren Sie uns</p></div></div></div><div id="a1976290befc47284222575405557757" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befc48416205c5bca8db2689" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="vmenu" dir="ltr"><li class=""><a href="kontakt">Kontakt Formular</a></li><li class=""><a href="tel:///+498972649163">Tel: 089 726 49163</a></li></ul><div class="clearfix"></div></div><div id="a1976290befc4930a61895ebb140a5c7" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom16" data-dnid="150457"> </p><p class="wb-stl-custom17" data-dnid="150459">LA Gebäudereinigung &amp; Haus Service, Hansastr.95, 81373 München</p></div></div></div></div></div><div id="a1976290befc4acf8c80334fab40e0bb" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befc4bf280b7970691621128" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befc4cb62af40324eaa17135" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom15" data-auto-wrapper="true">Information</p></div></div></div><div id="a1976290befc4d2b49022d7a0aca54f5" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befc4e12926aa4ac11b0d649" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="vmenu" dir="ltr"><li class=""><a href="gebaudereinigung">Gebäudereinigung in München</a></li><li class=""><a href="hausmeisterservice">Hausmeisterservice in München</a></li><li class=""><a href="winterdienst-munchen">Winterdienst in München</a></li><li class=""><a href="gallery/">Fotogallerie</a></li></ul><div class="clearfix"></div></div></div></div></div></div><div id="a1976290befc4f9f987f864e8af7f940" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befc50ff520992b06160d6f1" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befc51bdf1bd778105eb8bb9" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom15" data-auto-wrapper="true">Folgen Sie uns auf</p></div></div></div><div id="a1976290befc5208e1ed7a7f00f45c2e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befc53297d60084e73223655" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="vmenu" dir="ltr"><li class=""><a href="https://www.facebook.com/lagebaeudereinigung/">Facebook</a></li><li class=""><a href="https://www.instagram.com/la_gebaeudereinigung/">Intagram</a></li></ul><div class="clearfix"></div></div></div></div></div></div><div id="a1976290befc549ce87bde68fdb692d2" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befc558ba45a1b2b732631cb" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befc5629c0c72ebf6d2ac849" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom15" data-auto-wrapper="true">Impressum</p></div></div></div><div id="a1976290befc578774af3160ce3db5fb" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befc585a5004ba31ecb973af" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="vmenu" dir="ltr"><li class=""><a href="datenschutzerklarung">Datenschutzerklärung</a></li><li class=""><a href="impressum">Impressum</a></li></ul><div class="clearfix"></div></div></div></div></div></div></div></div><div id="a1976290befc59fb1aee9587da1d2774" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befc5ab4929765aa2bd4531e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290befc5b9040bc7cf9e893db89" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom18" data-dnid="150334">WordPress Theme : <a href="https://demo.8degreethemes.com/eightmedi-lite/">EightMedi Lite</a>
					by 8Degree Themes</p></div><div id="a1976290befc5cf0eb7798172dfd8a52" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befc5d08592c2bba1a3da3f1" class="wb_element" data-plugin="Button"><a class="wb_button" href="https://www.facebook.com/lagebaeudereinigung/"><span><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="display: inline-block; vertical-align: middle; position: relative; top: -1px; height: 1em; width: 1em; overflow: visible; direction: ltr;"><text x="385.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg>&nbsp;</span></a></div><div id="a1976290befc5e633049bbc6b6d67ee3" class="wb_element" data-plugin="Button"><a class="wb_button" href="https://www.instagram.com/la_gebaeudereinigung/"><span><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="display: inline-block; vertical-align: middle; position: relative; top: -1px; height: 1em; width: 1em; overflow: visible; direction: ltr;"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg>&nbsp;</span></a></div></div></div></div></div></div></div></div></div></div></div></div></div><div id="a1976290befc0fdc1b8512e4317884e2" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290befc600b7ba169a4563f4810" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#87E8FF"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div></div></div><div id="a1976290befc5f916a24e37a199031cf" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#404040"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div></div></div><div id="wb_footer_a1976290d4820472f0bf9283b6242650" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="wb_footer_c" class="wb_element" data-plugin="WB_Footer" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
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
