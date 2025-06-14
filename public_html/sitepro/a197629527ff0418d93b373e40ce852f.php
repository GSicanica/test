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

				document.cookie = '__cookie_law__=' + cookieLaw + '; path=/; expires=Sun, 07 Jun 2026 08:22:18 GMT';

				var items = ciCollectedCookies;
				ciCollectedCookies = [];
				items.forEach(function (item) {
					d.cookie = item;
				})
			}
		})(document);
			</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Keller und Garagenreinigung – Mimaris Hausservice"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? generateCanonicalUrl($sitemapUrls) : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Keller und Garagenreinigung"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "Keller und Garagenreinigung"); ?>" />
		
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Keller und Garagenreinigung – Mimaris Hausservice"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Keller und Garagenreinigung"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="{{curr_url}}" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="NameSilo Website Builder" />
			<script src="js/common-bundle.js?ts=20250612082217" type="text/javascript"></script>
	<script src="js/a197629527ff0418d93b373e40ce852f-bundle.js?ts=20250612082217" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20250612082217" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Poppins:700,700i,400,400i,500&amp;subset=devanagari,latin-ext,latin" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Rubik:700,700i,400,400i,500&amp;subset=cyrillic,hebrew,latin-ext,latin" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="css/a197629527ff0418d93b373e40ce852f-bundle.css?ts=20250612082217" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
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
						.html("<p data-dnid=\"10200\">Wir verwenden Cookies auf unserer Website, um Ihnen die relevanteste Erfahrung zu bieten, indem wir uns an Ihre Vorlieben erinnern und Besuche wiederholen. Durch Klicken auf &quot;Akzeptieren&quot; stimmen Sie der Verwendung ALLER Cookies zu.<\/p>")
						.css({
							color: "#333333",
							fontFamily: "Rubik,sans-serif",
							fontSize: 15						});
				var btnWrapper = $('<div class="policy-button">');

									policyMessage.appendTo(block);
					btnWrapper.appendTo(block);
				
				
								$('<button>')
						.attr({type: 'button'})
						.css({
							backgroundColor: "#cccccc",
							color: "#FFFFFF",
							fontFamily: "Rubik,sans-serif",
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
							fontFamily: "Rubik,sans-serif",
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


<body class="site site-lang-de<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a197629527ff0418d93b373e40ce852f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2f479976850eddc12bbb3a" class="wb_element wb-sticky wb-layout-element" data-plugin="LayoutElement" data-h-align="center" data-v-align="top"><div class="wb_content wb-layout-vertical"><div id="a19762950b2f485eda17cc4cbfb2e333" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b2811157aa3132b78b971b8" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/data-647395e5010ef0bd02fcb71f06eed0e7.svg?ts=1749705738"></div></div></div></div></div><div id="a19762950b2f49f48455cb209547711f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2f4aaed0c868634e0e5e5d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2f4b62e0a78bf53305a715" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2f4dfe6ae230d4bc500fdc" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h4 class="wb-stl-custom36" data-dnid="130346">Privacy Overview</h4><p class="wb-stl-custom37" data-dnid="130347">This website uses cookies to improve your experience while you navigate through the website. Out of these, the cookies that are categorized as necessary are stored on your browser as they are essential for the working of basic functionalities of the ...</p></div></div></div><div id="a19762950b2f4c9d0377105fa2b09195" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"></div></div></div></div><div id="a19762950b2f4e7cdd6ec43745e195b0" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2f4fb9e6e16f39874d8222" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2f508a22bdb903d3aef143" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b281afbd17b8f8b8b8dceef" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b281b28861d84f32c339538" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom38" data-auto-wrapper="true">Necessary</p></div></div></div><div id="a19762950b2f517eed54c13e73f7b395" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom39" data-dnid="130407">Always Enabled</p></div></div></div><div id="a19762950b2f52d4255e2ce12f8d203a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b281ef0c55a999c819853b0" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b281f887f320896ba1c46a0" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b2820a13c90466f85025f1f" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom38" data-auto-wrapper="true">Functional</p></div></div></div><div id="a19762950b282105a63d02e8200ec149" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a19762950b2822564f35e2b0dcb4b9d3" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div><div id="a19762950b2f5327af3f85680ba9148e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2824e1d90e51cd9516056c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b282564c1aeba28deeabd21" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b2826123ee7ef58041939bc" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom38" data-auto-wrapper="true">Performance</p></div></div></div><div id="a19762950b2827e99a886f5e929d2394" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a19762950b28284a55395a5d4e13c068" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div><div id="a19762950b2f542667057caf6475f55d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b282ae88e73f95e8c68d483" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b282bba0b78d2334a32bcd1" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b282c9fecdb66ba4c0b7a8d" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom38" data-auto-wrapper="true">Analytics</p></div></div></div><div id="a19762950b282dd29c7bd059bff9db91" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a19762950b282ef34fa3482da8b4fd08" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div><div id="a19762950b2f552feb12c3d1b0d13a86" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2830d485e46a60364f2bc2" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b2831642083354e60c73caa" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b2832958628937e96dd9fb4" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom38" data-auto-wrapper="true">Advertisement</p></div></div></div><div id="a19762950b28338839799b2b014db387" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a19762950b2834f6bc1cf6629c7eeccc" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div><div id="a19762950b2f5632b380d268b337c477" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b28363a4cc02110714ab5b1" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b2837836bac1e816c87a694" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b28387d3088eb09821ab0af" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom38" data-auto-wrapper="true">Others</p></div></div></div><div id="a19762950b28397c9771571ab3565b02" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a19762950b283af145334ed71a5cd009" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div></div></div></div></div><div id="a19762950b2f573f8930eb7161eced76" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b283cb47a640b78622e04df" class="wb_element" data-plugin="Button"><a class="wb_button"><span>SAVE &amp; ACCEPT</span></a></div></div></div></div></div><div id="a19762950b2f3c12871f7a1d66436413" class="wb_element wb-sticky wb-layout-element" data-plugin="LayoutElement" data-h-align="right" data-v-align="center"><div class="wb_content wb-layout-absolute"><div id="a19762950b2f3d086832e519a9191848" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b2802fed8f6bd32a936af93" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div><div id="a19762950b2f3e7d43600ee2082e62de" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2f3fee764274498470c2ca" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b280508167da9365381deed" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom34" data-auto-wrapper="true">Shopping Cart (0)</p></div></div></div><div id="a19762950b2f40ee51d2ccceb18d975c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2f4199613a5439fe625483" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2f4206aa9bdabd86912265" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2f435a73de949a7fcfd90b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b280c55f3b1964b182da4e9" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div><div id="a19762950b2f441ceebba0275b4e5755" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2f46779bc57f2bd6d9016e" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom35" data-dnid="130287">Your cart is empty</p></div></div></div><div id="a19762950b2f45997729d14eaa64f1d5" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b280e3875915912ee45d042" class="wb_element" data-plugin="Button"><a class="wb_button"><span>Browse Shop</span></a></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div><div id="wb_main_a197629527ff0418d93b373e40ce852f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2f09c4e113d03f69fbad06" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2f0afdd84a7e462a532b2a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2f0b10134aba1e7e314ed4" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2f0ce7cc578091b92249c6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b2f0de47c89e39894d781c5" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b2f0ef0c8ddb2b0b32c1648" class="wb_element wb_element_picture" data-plugin="Picture" title="Mimaris Hausservice"><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="{{base_url}}" title="Mimaris Hausservice"><img loading="lazy" alt="Mimaris Hausservice" src="gallery_gen/dc494198f3a0b9a0b55fa70dfc48ea8f_fit.png?ts=1749705738"></a></div></div></div></div></div><div id="a19762950b2f0ffad66c7e17f97eb859" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom1" data-dnid="130322"><a href="mailto:info@mimaris-hausservice.de"></a></p><p class="wb-stl-custom2" data-dnid="130370"><a href="mailto:info@mimaris-hausservice.de">info@mimaris-hausservice.de</a></p><p class="wb-stl-custom3" data-dnid="130372"><a href="mailto:info@mimaris-hausservice.de">Mail an uns</a></p><p class="wb-stl-custom4" data-dnid="130326"><a href="tel:01575 1326630"></a></p><p class="wb-stl-custom5" data-dnid="130375"><a href="tel:01575 1326630">Telefonnummer:</a></p><p class="wb-stl-custom3" data-dnid="130377"><a href="tel:01575 1326630">01575 1326630</a></p><p class="wb-stl-custom6" data-dnid="130330"></p><p class="wb-stl-custom7" data-dnid="130380">Montag - Sonntag:</p><p class="wb-stl-custom8" data-dnid="130382">9am - 8pm</p><p class="wb-stl-custom9" data-dnid="130332"><a href="reinigungsanlagen"></a></p><p class="wb-stl-custom10" data-dnid="130385"><a href="reinigungsanlagen">Lindenstraße 29</a></p><p class="wb-stl-custom3" data-dnid="130387"><a href="reinigungsanlagen">85737 Ismaning</a></p></div></div></div></div></div><div id="a19762950b2f10be9cc8fb2db7df369a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b2f11509f856a3c5331cc97" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2f12fdfad4ca830f9cdc18" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu" dir="ltr"><li class=""><a href="{{base_url}}">Start</a></li><li class=""><a href="#uberuns">Über uns</a><ul><li class=""><a href="uber-mimaris">Über Mimaris</a></li><li class=""><a href="personel">Personel</a></li><li class=""><a href="technik">Technik</a></li></ul></li><li class=""><a href="#Dienstleistung">Dienstleistung</a><ul><li class=""><a href="hausmeisterservice">Hausmeisterservice</a></li><li class=""><a href="gartenpflege">Gartenpflege</a></li><li class=""><a href="winterdienst">Winterdienst</a></li><li class=""><a href="privathaushalte">Privathaushalte</a></li><li class=""><a href="fine-vip-reinigung">Fine VIP reinigung</a></li><li class=""><a href="buroreinigung">Büroreinigung</a></li><li class=""><a href="reinigungsereignisse">Reinigungsereignisse</a></li><li class=""><a href="fensterreinigung">Fensterreinigung</a></li><li class="wb_this_page_menu_item"><a href="reinigungsanlagen">Keller und Garagenreinigung</a></li><li class=""><a href="reinigungsgeschafte">Reinigungsgeschäfte</a></li><li class=""><a href="ausenraumreinigung">Außenraumreinigung</a></li><li class=""><a href="reinigung-von-sportanlagen-und-schwimmbadern">Reinigung von Sportanlagen und Schwimmbädern</a></li></ul></li><li class=""><a href="category/jobs">Jobs</a></li><li class=""><a href="contact-3">Kontakt</a></li><li class=""><a href="impressum">Impressum</a></li></ul><div class="clearfix"></div></div></div></div><div id="a19762950b2f137beed0dd4b4f4df813" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b2f148007c0f8456e61bb2f" class="wb_element wb-layout-element wb-layout-has-link" data-plugin="LayoutElement"><a class="wb-layout-link" href="reinigungsanlagen#a"></a><div class="wb_content wb-layout-horizontal"><div id="a19762950b2f1567ed8e80b92c659d29" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div><div id="a19762950b2f168986709d7a03f4edd1" class="wb_element wb-layout-element wb-layout-has-link" data-plugin="LayoutElement"><a class="wb-layout-link" href="http:///"></a><div class="wb_content wb-layout-horizontal"><div id="a19762950b2f17b3bd0b2097c5dfddf4" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div><div id="a19762950b2f1819a125280d77caa13a" class="wb_element wb-layout-element wb-layout-has-link" data-plugin="LayoutElement"><a class="wb-layout-link" href="reinigungsanlagen#a"></a><div class="wb_content wb-layout-horizontal"><div id="a19762950b2f19e22fd8413948cf7b04" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div></div></div></div></div><div id="a19762950b2f1ad308f8b60f9b24ef3d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb-layout-bg-element"><div id="a19762950b2f1b96c2e8a0f19b6660ce" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div><div class="wb_content wb-layout-absolute"><div id="a19762950b2f1c3c7335b03c60f2c823" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2f1ddb0c1053c226b95b36" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a19762950b2f1ef6723c185a2e7902ba" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b2f1f5644d7f905adaf48e7" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2f20aba62363621e09c41b" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom40" data-dnid="130256">Keller und Garagenreinigung</h1></div></div></div></div></div></div></div></div></div><div id="a19762950b2f2183fdc4eec114cfdf6b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2f225bde4d011e06c1550e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2f231e12fec1039726c7b3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2f24cd31fb85e115bed50d" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom41" data-dnid="130394">Unser professionelles Team wird Ihre persönlichen Gegenstände bewegen, fegen und entweder abspritzen oder Ihren Garagenboden mit Strom waschen. Wir verwenden ein Entfettungsmittel an öligen Stellen, die besondere Aufmerksamkeit erfordern, und ersetzen Ihre Sachen nach Fertigstellung. Auf Wunsch können wir auch Ihren Garagenboden streichen oder versiegeln</p><p class="wb-stl-custom41" data-dnid="130395">Kellerböden sind in etwa das gleiche Herrenhaus gemacht. Wir würden alle persönlichen Gegenstände in den Keller bringen, fegen und entweder nass wischen oder den Boden mit einer handelsüblichen Bodenmaschine schrubben. Wir stellen eine Reinigungslösung auf: Schrubben Sie den Boden und saugen Sie überschüssiges Wasser nass auf. Wir spülen den Boden nach Fertigstellung ab, bewegen die persönlichen Gegenstände und wiederholen den Vorgang.</p></div><div id="a19762950b2f257af0e96c7d3a639af5" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b2f2623e85b20bed62d4629" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b2f27736f294ba76d152e83" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/wp-content-uploads-2021-03-1_0060_IMG_4357.jpg?ts=1749705738"></div></div></div></div></div></div></div><div id="a19762950b2f28a25a55c286055d75c3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b2f29e77a1cdb9da32d97c5" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b2f2a9e39c0efc7114a035f" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/wp-content-uploads-2021-03-1_0009_image3-6.jpg?ts=1749705738"></div></div></div></div></div></div></div></div></div></div></div></div></div><div id="a19762950b2f2be4edcf5a7f9fb7b00a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2f2caffefba69f037eaceb" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2f2dbd045c3969b1629d15" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2f2eeea934e42d0e5e959c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2f2f728a64309d08fa5f8f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b2f301ae3ebc5c0a95b1473" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/wp-content-uploads-2020-08-logocircle.png?ts=1749705738"></div></div></div></div></div></div></div><div id="a19762950b2f31e5fd146bf37354c27d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2f3262025a57e54349b83d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b2f337449d8aa52dfd3b7eb" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b2f349201fda01340abdd13" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b2f35293a8f33299eec6c0d" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div></div></div><div id="a19762950b2f3655d6c191297f8211a0" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2f372762f5c09252e46663" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b2f3885e47ae3ce9caf68b5" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2f39a7da0ea6433527b581" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2f3a1de509606df276b82e" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom33" data-dnid="130677">2025 © All rights reserved | <a href="https://mimaris-hausservice.de/datenschutz/">Datenschutz</a></p></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div><div id="a19762950b2f3b8f682d299c5070e55c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div></div></div><div id="wb_footer_a197629527ff0418d93b373e40ce852f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="wb_footer_c" class="wb_element" data-plugin="WB_Footer" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
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
