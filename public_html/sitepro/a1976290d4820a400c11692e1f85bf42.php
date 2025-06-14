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
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Winterdienst München | München Reinigung und Hausmeisterservice"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? generateCanonicalUrl($sitemapUrls) : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Ob Garten, Einfahrt oder Gehweg, wir befreien Sie von dem Schnee nach den kommunalen städtischen Richtlinien. Den Winterdienst bieten wir selbstverständlich auch den Privat Haushältern an."); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "Winterdienst"); ?>" />
		
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Winterdienst München | München Reinigung und Hausmeisterservice"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Ob Garten, Einfahrt oder Gehweg, wir befreien Sie von dem Schnee nach den kommunalen städtischen Richtlinien. Den Winterdienst bieten wir selbstverständlich auch den Privat Haushältern an."); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="{{curr_url}}" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="NameSilo Website Builder" />
			<script src="js/common-bundle.js?ts=20250612081559" type="text/javascript"></script>
	<script src="js/a1976290d4820a400c11692e1f85bf42-bundle.js?ts=20250612081559" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20250612081559" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="css/a1976290d4820a400c11692e1f85bf42-bundle.css?ts=20250612081559" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
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


<body class="site site-lang-de<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a1976290d4820a400c11692e1f85bf42" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div><div id="wb_main_a1976290d4820a400c11692e1f85bf42" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef53a92843660cd6e771dd4" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef53cf4539ca8c43b7c5691" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef53d0376a47b6350840d5b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef53e5a6397e38b9dfcebd1" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef540d4f7b1f2e95eead504" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef54142861be991562ce0dc" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom1" data-auto-wrapper="true">Rufen Sie uns an: </p></div><div id="a1976290bef542ada2c3859143934d0b" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom2" data-auto-wrapper="true"><a href="https://www.la-reinigung.de/winterdienst-munchen/t">089 726 491 63</a></p></div></div></div></div></div><div id="a1976290bef53f34e45db5848ff4e975" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef54387d897009cb5bc8657" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef544de1b2e6a1d0408d8ae" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef545a1edd7e4aed25f7a33" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef546490ac9662a6159c0e4" class="wb_element" data-plugin="Button"><a class="wb_button" href="https://www.facebook.com/lagebaeudereinigung/"><span><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="display: inline-block; vertical-align: middle; position: relative; top: -1px; height: 1em; width: 1em; overflow: visible; direction: ltr;"><text x="385.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg>&nbsp;</span></a></div><div id="a1976290bef5477b5b187743e7f16eee" class="wb_element" data-plugin="Button"><a class="wb_button" href="https://www.instagram.com/la_gebaeudereinigung/"><span><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="display: inline-block; vertical-align: middle; position: relative; top: -1px; height: 1em; width: 1em; overflow: visible; direction: ltr;"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg>&nbsp;</span></a></div></div></div></div></div></div></div></div></div></div></div><div id="a1976290bef54814f134a5c6fdae665c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef549fae765ac1255762233" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef54a40b2d27ed88b9a7b9e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef54b99695c78369a36d30c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef54c6e860c59fa3d16a2ac" class="wb_element wb_element_picture" data-plugin="Picture" title="München Reinigung und Hausmeisterservice"><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="{{base_url}}"><img loading="lazy" alt="München Reinigung und Hausmeisterservice" src="gallery_gen/d49db991adb490bca18882c0943368ae_260x122_fit.png?ts=1749705360"></a></div></div></div></div></div><div id="a1976290bef54d0d8fff2c0fb38b1f6c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef54e7d6447d66669bb5bad" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom3" data-dnid="40360"><a href="">München Reinigung und Hausmeisterservice</a></h1><p class="wb-stl-custom4" data-auto-wrapper="true"><a href="">
									</a></p><p class="wb-stl-custom5" data-dnid="40362"><a href="">Reinigung und Hausmeisterservice in München</a></p></div></div></div></div></div><div id="a1976290bef54f0f2fe682c0052964ce" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef550eea43c9a18e8f5a5d4" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef551a27be8076886d21258" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu" dir="ltr"><li class=""><a href="{{base_url}}">Home</a></li><li class=""><a href="hausmeisterservice">Hausmeisterservice</a></li><li class=""><a href="gebaudereinigung">Gebäudereinigung</a></li><li class="wb_this_page_menu_item"><a href="winterdienst-munchen">Winterdienst</a></li><li class=""><a href="la-gebaudereinigung-haus-service">Was wir tun</a></li><li class=""><a href="gallery/">Fotogallerie</a></li><li class=""><a href="kontakt">Kontakt</a></li></ul><div class="clearfix"></div></div></div></div></div></div></div></div></div></div><div id="a1976290bef5521a49835a3e94e26d38" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef55347902e4e141019387d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef5542853b5e7aa8333ae32" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef555fbb89a579e25ef1ebb" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef556ed2f58419f8fc73d33" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a1976290bef5576705245f7f936a10cc" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom19" data-auto-wrapper="true">Winterdienst München</p></div><div id="a1976290bef55807164bb111965cda82" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div><div id="a1976290bef5599578c52222bc95b3ba" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom20" data-dnid="40442">Posted on <a href="winterdienst-munchen">April 15, 2021</a> by <a href="author/dmitrecic">admin</a></p></div></div></div><div id="a1976290bef55a7377ffdaf235b77d5c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef55bcd3cfa1086ecfc8a8a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef55c3f61725a6bb49247ca" class="wb_element wb_element_picture" data-plugin="Picture" title="Winterdienst in München"><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="Winterdienst in München" src="gallery_gen/dea354b9b7bc31b55de95e1663cb0135_2400x1514_fit.jpeg?ts=1749705360"></div></div></div></div></div><div id="a1976290bef55dea0852ef39c6e769ee" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom22" data-dnid="40448">Ob Garten, Einfahrt oder Gehweg, wir befreien Sie von dem Schnee nach den kommunalen städtischen Richtlinien.<br>
Den Winterdienst bieten wir selbstverständlich auch den Privat Haushältern an.</p></div></div></div><div id="a1976290bef55ee24453f5b03c25ba4e" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom21" data-dnid="40385">Posted in <a href="https://www.la-reinigung.de/category/uncategorized/">Uncategorized</a></p></div></div></div><div id="a1976290bef55f69c90471d915739aca" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef560e673d30bd06a6ca69a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef561e7cd50a0c3952ff26d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef5628df32512105def4774" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef56453af105ccec251fa73" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef565784a01033f10604502" class="wb_element" data-plugin="Button"><a class="wb_button" href="la-gebaudereinigung-haus-service"><span>LA Gebäudereinigung &amp; Haus Service&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="display: inline-block; vertical-align: middle; position: relative; top: -1px; height: 1em; width: 1em; overflow: visible; direction: ltr;"><text x="577.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></span></a></div></div></div></div></div><div id="a1976290bef56366cec3a303b07c9c18" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef566a71bb4f12717d5666c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef5677470400a210205c0b9" class="wb_element" data-plugin="Button"><a class="wb_button" href="gallery/"><span>Gallery&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="display: inline-block; vertical-align: middle; position: relative; top: -1px; height: 1em; width: 1em; overflow: visible; direction: ltr;"><text x="577.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></span></a></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div><div id="a1976290bef568adac89780157da7cf5" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef5694108ec3e45b4996845" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef56ab7cc91359b306e8606" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef56ba89491fad406f339de" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef56ccc0da9c09a4c631af6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef56de67472abe8aa070ac7" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom15" data-auto-wrapper="true">Kontaktieren Sie uns</p></div></div></div><div id="a1976290bef56e8374abc82675719310" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef56fb3dc747386cb87e62b" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="vmenu" dir="ltr"><li class=""><a href="kontakt">Kontakt Formular</a></li><li class=""><a href="tel:///+498972649163">Tel: 089 726 49163</a></li></ul><div class="clearfix"></div></div><div id="a1976290bef5704aa526e8c246a91d97" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom16" data-dnid="40459"> </p><p class="wb-stl-custom17" data-dnid="40461">LA Gebäudereinigung &amp; Haus Service, Hansastr.95, 81373 München</p></div></div></div></div></div><div id="a1976290bef600faaef7d770d7749d62" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef6014002748ebf503d1f06" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef6021c8a73ec1899c00519" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom15" data-auto-wrapper="true">Information</p></div></div></div><div id="a1976290bef60314c32c2e959189c695" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef604d6bea039d7e2657e53" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="vmenu" dir="ltr"><li class=""><a href="gebaudereinigung">Gebäudereinigung in München</a></li><li class=""><a href="hausmeisterservice">Hausmeisterservice in München</a></li><li class="wb_this_page_menu_item"><a href="winterdienst-munchen">Winterdienst in München</a></li><li class=""><a href="gallery/">Fotogallerie</a></li></ul><div class="clearfix"></div></div></div></div></div></div><div id="a1976290bef605da67f01b8918333df4" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef606539f64c72b2a0390b3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef607f9bac67c4c420fd5d8" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom15" data-auto-wrapper="true">Folgen Sie uns auf</p></div></div></div><div id="a1976290bef608cf5c9f7f13cb418bc2" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef609bbd9e1a92835d157d1" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="vmenu" dir="ltr"><li class=""><a href="https://www.facebook.com/lagebaeudereinigung/">Facebook</a></li><li class=""><a href="https://www.instagram.com/la_gebaeudereinigung/">Intagram</a></li></ul><div class="clearfix"></div></div></div></div></div></div><div id="a1976290bef60a9b735c7e8d24295f88" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef60b3307404b6eb7ad9df1" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef60ca33cc6a6dbec4dd468" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom15" data-auto-wrapper="true">Impressum</p></div></div></div><div id="a1976290bef60df2225d826e6ce66d01" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef60e8a0857197525d330c5" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="vmenu" dir="ltr"><li class=""><a href="datenschutzerklarung">Datenschutzerklärung</a></li><li class=""><a href="impressum">Impressum</a></li></ul><div class="clearfix"></div></div></div></div></div></div></div></div><div id="a1976290bef60f1ba056d01a9f22f105" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef610385f8bb7111985c976" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef611ca6beeee9c83370b6f" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom18" data-dnid="40336">WordPress Theme : <a href="https://demo.8degreethemes.com/eightmedi-lite/">EightMedi Lite</a>
					by 8Degree Themes</p></div><div id="a1976290bef61287b6d96fb09cca5632" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef61366d8d049bcb1b8e30c" class="wb_element" data-plugin="Button"><a class="wb_button" href="https://www.facebook.com/lagebaeudereinigung/"><span><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="display: inline-block; vertical-align: middle; position: relative; top: -1px; height: 1em; width: 1em; overflow: visible; direction: ltr;"><text x="385.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg>&nbsp;</span></a></div><div id="a1976290bef6144e9e0352b2023892e0" class="wb_element" data-plugin="Button"><a class="wb_button" href="https://www.instagram.com/la_gebaeudereinigung/"><span><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="display: inline-block; vertical-align: middle; position: relative; top: -1px; height: 1em; width: 1em; overflow: visible; direction: ltr;"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg>&nbsp;</span></a></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div><div id="a1976290bef53bcd885bc5404de725ce" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef616e604ed35aa49e8e44f" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#87E8FF"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div></div></div><div id="a1976290bef615b71795f3103256e902" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#404040"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div></div></div><div id="wb_footer_a1976290d4820a400c11692e1f85bf42" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="wb_footer_c" class="wb_element" data-plugin="WB_Footer" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
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
