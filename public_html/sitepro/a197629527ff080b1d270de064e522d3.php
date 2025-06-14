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

				document.cookie = '__cookie_law__=' + cookieLaw + '; path=/; expires=Sun, 07 Jun 2026 08:22:19 GMT';

				var items = ciCollectedCookies;
				ciCollectedCookies = [];
				items.forEach(function (item) {
					d.cookie = item;
				})
			}
		})(document);
			</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Jobs – Mimaris Hausservice"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? generateCanonicalUrl($sitemapUrls) : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Jobs"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "Jobs"); ?>" />
		
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Jobs – Mimaris Hausservice"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Jobs"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="{{curr_url}}" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="NameSilo Website Builder" />
			<script src="js/common-bundle.js?ts=20250612082217" type="text/javascript"></script>
	<script src="js/a197629527ff080b1d270de064e522d3-bundle.js?ts=20250612082217" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20250612082217" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Poppins:700,700i,400,400i,500&amp;subset=devanagari,latin-ext,latin" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Rubik:700,700i,400,400i,500&amp;subset=cyrillic,hebrew,latin-ext,latin" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="css/a197629527ff080b1d270de064e522d3-bundle.css?ts=20250612082217" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
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


<body class="site site-lang-de<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a197629527ff080b1d270de064e522d3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b32298361d917997b63a351" class="wb_element wb-sticky wb-layout-element" data-plugin="LayoutElement" data-h-align="center" data-v-align="top"><div class="wb_content wb-layout-vertical"><div id="a19762950b322a7c935406fcf429d883" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b2811157aa3132b78b971b8" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/data-647395e5010ef0bd02fcb71f06eed0e7.svg?ts=1749705739"></div></div></div></div></div><div id="a19762950b322ba8d3a4a9a11e786ff5" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b322cc29877b59e6079697c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b322d32e0fc4beab9068729" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b322f7e9274b932778a7c2f" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h4 class="wb-stl-custom36" data-dnid="170349">Privacy Overview</h4><p class="wb-stl-custom37" data-dnid="170350">This website uses cookies to improve your experience while you navigate through the website. Out of these, the cookies that are categorized as necessary are stored on your browser as they are essential for the working of basic functionalities of the ...</p></div></div></div><div id="a19762950b322ee1bd10b9ab38b98dba" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"></div></div></div></div><div id="a19762950b32303a8f292fa10e718783" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b32312aa0acd9b5500a3703" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b3232a3786fe1b88fe47ef8" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b281afbd17b8f8b8b8dceef" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b281b28861d84f32c339538" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom38" data-auto-wrapper="true">Necessary</p></div></div></div><div id="a19762950b32333be954c6c85edefd67" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom39" data-dnid="170417">Always Enabled</p></div></div></div><div id="a19762950b3234be456d0ebd19f7928c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b281ef0c55a999c819853b0" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b281f887f320896ba1c46a0" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b2820a13c90466f85025f1f" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom38" data-auto-wrapper="true">Functional</p></div></div></div><div id="a19762950b282105a63d02e8200ec149" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a19762950b2822564f35e2b0dcb4b9d3" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div><div id="a19762950b32351c8a23e9ff19cbe7c5" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2824e1d90e51cd9516056c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b282564c1aeba28deeabd21" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b2826123ee7ef58041939bc" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom38" data-auto-wrapper="true">Performance</p></div></div></div><div id="a19762950b2827e99a886f5e929d2394" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a19762950b28284a55395a5d4e13c068" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div><div id="a19762950b32364acfddcddad15c582c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b282ae88e73f95e8c68d483" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b282bba0b78d2334a32bcd1" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b282c9fecdb66ba4c0b7a8d" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom38" data-auto-wrapper="true">Analytics</p></div></div></div><div id="a19762950b282dd29c7bd059bff9db91" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a19762950b282ef34fa3482da8b4fd08" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div><div id="a19762950b3237d95f306a5bf9a9b30b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2830d485e46a60364f2bc2" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b2831642083354e60c73caa" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b2832958628937e96dd9fb4" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom38" data-auto-wrapper="true">Advertisement</p></div></div></div><div id="a19762950b28338839799b2b014db387" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a19762950b2834f6bc1cf6629c7eeccc" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div><div id="a19762950b32389062e8fa0247a0b764" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b28363a4cc02110714ab5b1" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b2837836bac1e816c87a694" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b28387d3088eb09821ab0af" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom38" data-auto-wrapper="true">Others</p></div></div></div><div id="a19762950b28397c9771571ab3565b02" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a19762950b283af145334ed71a5cd009" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div></div></div></div></div><div id="a19762950b3239d82d84f94ebae3f00b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b283cb47a640b78622e04df" class="wb_element" data-plugin="Button"><a class="wb_button"><span>SAVE &amp; ACCEPT</span></a></div></div></div></div></div><div id="a19762950b321e49a3f2ce34ff1272c4" class="wb_element wb-sticky wb-layout-element" data-plugin="LayoutElement" data-h-align="right" data-v-align="center"><div class="wb_content wb-layout-absolute"><div id="a19762950b321fb24d29b3e4bed78c1e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b2802fed8f6bd32a936af93" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div><div id="a19762950b322095ba3ea95289afbb5f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b3221879eafdb96b228f379" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b280508167da9365381deed" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom34" data-auto-wrapper="true">Shopping Cart (0)</p></div></div></div><div id="a19762950b3222b3e67194ed6dfab0f4" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b3223e6ae0c08a95f975737" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b3224ddf88e5ebca3a510de" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b3225be2fa733fd26f09520" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b280c55f3b1964b182da4e9" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div><div id="a19762950b32261532f66508c18f989e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b3228d6e5d0bf6838711694" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom35" data-dnid="170286">Your cart is empty</p></div></div></div><div id="a19762950b32278537c55045831a78e4" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b280e3875915912ee45d042" class="wb_element" data-plugin="Button"><a class="wb_button"><span>Browse Shop</span></a></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div><div id="wb_main_a197629527ff080b1d270de064e522d3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b3146e10354ec4c572fbee6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b31477ac63aa3e9daac1ca3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b31488f993869f66aa2aefe" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b314936254a66f75c7b554b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b314a9393acc1494ccb4245" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b314ba9cfd420abcfcc3c64" class="wb_element wb_element_picture" data-plugin="Picture" title="Mimaris Hausservice"><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="{{base_url}}" title="Mimaris Hausservice"><img loading="lazy" alt="Mimaris Hausservice" src="gallery_gen/dc494198f3a0b9a0b55fa70dfc48ea8f_fit.png?ts=1749705739"></a></div></div></div></div></div><div id="a19762950b314cc32844c665ecce5166" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom1" data-dnid="170323"><a href="mailto:info@mimaris-hausservice.de"></a></p><p class="wb-stl-custom2" data-dnid="170373"><a href="mailto:info@mimaris-hausservice.de">info@mimaris-hausservice.de</a></p><p class="wb-stl-custom3" data-dnid="170375"><a href="mailto:info@mimaris-hausservice.de">Mail an uns</a></p><p class="wb-stl-custom4" data-dnid="170327"><a href="tel:01575 1326630"></a></p><p class="wb-stl-custom5" data-dnid="170378"><a href="tel:01575 1326630">Telefonnummer:</a></p><p class="wb-stl-custom3" data-dnid="170380"><a href="tel:01575 1326630">01575 1326630</a></p><p class="wb-stl-custom6" data-dnid="170331"></p><p class="wb-stl-custom7" data-dnid="170383">Montag - Sonntag:</p><p class="wb-stl-custom8" data-dnid="170385">9am - 8pm</p><p class="wb-stl-custom9" data-dnid="170333"><a href="category/jobs"></a></p><p class="wb-stl-custom10" data-dnid="170388"><a href="category/jobs">Lindenstraße 29</a></p><p class="wb-stl-custom3" data-dnid="170390"><a href="category/jobs">85737 Ismaning</a></p></div></div></div></div></div><div id="a19762950b314d23c342bb3ea74ee87a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b314e9fb1acc134ea496fd4" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b314f035176913280123609" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu" dir="ltr"><li class=""><a href="{{base_url}}">Start</a></li><li class=""><a href="#uberuns">Über uns</a><ul><li class=""><a href="uber-mimaris">Über Mimaris</a></li><li class=""><a href="personel">Personel</a></li><li class=""><a href="technik">Technik</a></li></ul></li><li class=""><a href="#Dienstleistung">Dienstleistung</a><ul><li class=""><a href="hausmeisterservice">Hausmeisterservice</a></li><li class=""><a href="gartenpflege">Gartenpflege</a></li><li class=""><a href="winterdienst">Winterdienst</a></li><li class=""><a href="privathaushalte">Privathaushalte</a></li><li class=""><a href="fine-vip-reinigung">Fine VIP reinigung</a></li><li class=""><a href="buroreinigung">Büroreinigung</a></li><li class=""><a href="reinigungsereignisse">Reinigungsereignisse</a></li><li class=""><a href="fensterreinigung">Fensterreinigung</a></li><li class=""><a href="reinigungsanlagen">Keller und Garagenreinigung</a></li><li class=""><a href="reinigungsgeschafte">Reinigungsgeschäfte</a></li><li class=""><a href="ausenraumreinigung">Außenraumreinigung</a></li><li class=""><a href="reinigung-von-sportanlagen-und-schwimmbadern">Reinigung von Sportanlagen und Schwimmbädern</a></li></ul></li><li class="wb_this_page_menu_item"><a href="category/jobs">Jobs</a></li><li class=""><a href="contact-3">Kontakt</a></li><li class=""><a href="impressum">Impressum</a></li></ul><div class="clearfix"></div></div></div></div><div id="a19762950b31504c916e6f9b00df9289" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b31518e864718265c744e4b" class="wb_element wb-layout-element wb-layout-has-link" data-plugin="LayoutElement"><a class="wb-layout-link" href="category/jobs#a"></a><div class="wb_content wb-layout-horizontal"><div id="a19762950b31521d50dd5a0c51d0d45d" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div><div id="a19762950b3153e34fac5e41e3396cf6" class="wb_element wb-layout-element wb-layout-has-link" data-plugin="LayoutElement"><a class="wb-layout-link" href="http:///"></a><div class="wb_content wb-layout-horizontal"><div id="a19762950b31542578933385ff46797a" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div><div id="a19762950b315572c5f8d07deb6bcb3e" class="wb_element wb-layout-element wb-layout-has-link" data-plugin="LayoutElement"><a class="wb-layout-link" href="category/jobs#a"></a><div class="wb_content wb-layout-horizontal"><div id="a19762950b3156ec73f0a5754286a97f" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div></div></div></div></div><div id="a19762950b3157b729acc8fd36512ae4" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb-layout-bg-element"><div id="a19762950b31585fec0eed0ffa71562e" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div><div class="wb_content wb-layout-absolute"><div id="a19762950b3159de4c8bb016eaceb78e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b315a00aaf51d788219fd54" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a19762950b315b54af44b36019f6d318" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b315c89ec12237a7ab8e455" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b315d8c7d575dbec0e04cf1" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom40" data-dnid="170255">Jobs</h1></div></div></div></div></div></div></div></div></div><div id="a19762950b315e7b439b4f360fee0c30" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b315f219a166fe662ec63f9" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b3160bf8108e9366bac747c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b31615d23664ac09122b4f4" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b3162c51f2e67c0727f6b21" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b31632f4de310afd9535b2d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b316418226a733712c523a1" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div><div id="a19762950b31650156d21fa61eef85f4" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b31663e7aa44d79f63d4006" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom45" data-auto-wrapper="true"><a href="https://mimaris-hausservice.de/2021/06/07/verkauf-und-serviceleiter-m-w-d-vollzeit-teilzeit-minijob/">Verkauf- und Serviceleiter (m/w/d) Vollzeit, teilzeit, minijob</a></p></div></div></div><div id="a19762950b3167b5b6f5d549d5d63a7f" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom46" data-dnid="170399">Sie haben Erfahrung im Verkauf von Dienstleistungen und guter Kommunikation mit Neu- und Bestandskunden? Dann sollten wir uns sprechen! Zur Verstärkung unseres Teams suchen wir daher eine Verkauf- und Serviceleiter (m/w/d) in Vollzeit, Teilzeit, Minijob. Deine Aufgaben Verkauf und Angebot unserer Dienstleistungen Hervorragende und freundliche Kommunikation mit Neukunden Pflege der Beziehungen und Kommunikation mit bestehenden Kunden […]</p></div><div id="a19762950b31684c439e2bb4a3da8bc3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b3169012115e92898e3e8da" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b316a92bbefd8423326e35c" class="wb_element wb-layout-element wb-layout-has-link" data-plugin="LayoutElement"><a class="wb-layout-link" href="https://mimaris-hausservice.de/2021/06/07/verkauf-und-serviceleiter-m-w-d-vollzeit-teilzeit-minijob/"></a><div class="wb_content wb-layout-absolute"><div id="a19762950b316b4698146a3d487a7b13" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom47" data-auto-wrapper="true">Weiterlesen </p></div><div id="a19762950b316c3b14e8a9b85e1c661d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b316d1c913d0865f3fc519f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a19762950b316e0e892b14cbb01eacf1" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b316fbbe501498add1a8cec" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div></div></div></div></div><div id="a19762950b31702a418ee299b259c852" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b31712ee666aeb5a4b95207" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div></div></div></div></div><div id="a19762950b3172842eb1fb769ab02fce" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b3173332a5d344997fe9572" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b3174d67e10b125b7deb8b5" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b31751b7c156599b3b0e0f6" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div><div id="a19762950b317629f7e476944aa03bb5" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b3177a9b28f47a8ae495b9e" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom45" data-auto-wrapper="true"><a href="https://mimaris-hausservice.de/2021/03/27/reinigungskraft-m-w-d-vollzeit-teilzeit-minijob/">Reinigungskraft (m/w/d) Vollzeit, teilzeit, minijob</a></p></div></div></div><div id="a19762950b31784f64c274c17c74b5ab" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom46" data-dnid="170403">Du hast die Lösungen rund um den Bereich Reinigungs und wartest nur auf die passenden Probleme? Dann sollten wir uns sprechen! Zur Verstärkung unseres Teams suchen wir daher eine Reinigungskraft (m/w/d) in Vollzeit, Teilzeit, Minijob.</p></div><div id="a19762950b317975241b40ea74e63f9b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b317a0443e2cbe613ff3d4a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b317bb878904acba2f0c3df" class="wb_element wb-layout-element wb-layout-has-link" data-plugin="LayoutElement"><a class="wb-layout-link" href="https://mimaris-hausservice.de/2021/03/27/reinigungskraft-m-w-d-vollzeit-teilzeit-minijob/"></a><div class="wb_content wb-layout-absolute"><div id="a19762950b317c689c3397d51754f51b" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom47" data-auto-wrapper="true">Weiterlesen </p></div><div id="a19762950b317d8774b81b527f81ae6d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b317e114b0b150a693d71ae" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a19762950b317f64026474a6722b5fb4" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b3180c71ae893ec1107c14e" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div></div></div></div></div><div id="a19762950b3181ace23c24e25eb76b19" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b3182532c1592dc4c5679f7" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div></div></div></div></div><div id="a19762950b31839e7f1a258cdcd4af43" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b31848201d852401d6465b5" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b31855ec24051002c7d0c8e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b3186297f4a1409926af1d1" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div><div id="a19762950b3200594a432cb42b451a93" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b32019dfb407ce6ff86c44a" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom45" data-auto-wrapper="true"><a href="https://mimaris-hausservice.de/2020/04/13/the-secret-of-cleaning-your-house/">Hausmeister (m/w/d) Vollzeit</a></p></div></div></div><div id="a19762950b32020fbf560bfbb2f072eb" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom46" data-dnid="170407">Du hast die Lösungen rund um den Bereich Haustechnik und wartest nur auf die passenden Probleme? Dann sollten wir uns sprechen! Für ein toll Unternehmen aus dem Bereich Hausservice suchen wir im Raum München (Bayern) zu sofort einem: Haustechniker (m/w/d)</p></div><div id="a19762950b3203280b50ea35eb70fe2c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b3204eb1772512561c78fe6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b3205d6615633ef68ef9447" class="wb_element wb-layout-element wb-layout-has-link" data-plugin="LayoutElement"><a class="wb-layout-link" href="https://mimaris-hausservice.de/2020/04/13/the-secret-of-cleaning-your-house/"></a><div class="wb_content wb-layout-absolute"><div id="a19762950b32069c6f91b653b1c91dde" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom47" data-auto-wrapper="true">Weiterlesen </p></div><div id="a19762950b3207286d2d5c9ddc284a19" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b32088a59652c5870318bcb" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a19762950b3209e4304f0ccb984bba8f" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b320aa7e16da3ee7123fb1a" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div></div></div></div></div><div id="a19762950b320b586b3767dc633840ac" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b320c7fe1cac5583ee9bd18" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div><div id="a19762950b320d854ef9e3dc5f0d2730" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b320e5e227de884c431ebd1" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b320fe9adc39d49c12ad35c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b3210e96eaeb892fb9c13b8" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b32115c576faf3b30fe23d3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b321237d8ffaa4d4d855f90" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/wp-content-uploads-2020-08-logocircle.png?ts=1749705739"></div></div></div></div></div></div></div><div id="a19762950b32139916a4b3ee80c6e447" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b321468f1bb36771b9344e3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b321509539159e453c28132" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b321661e0faa6de530e6df3" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b3217fc8902b3e86c82cae7" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div></div></div><div id="a19762950b3218f3b695a2adcaa65411" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b3219cb83f754cc9bff87e8" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b321acca1bbb7ec65c67223" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b321bda80184808bc5ec2e6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b321ca347290afdcd7c6867" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom33" data-dnid="170758">2025 © All rights reserved | <a href="https://mimaris-hausservice.de/datenschutz/">Datenschutz</a></p></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div><div id="a19762950b321db4dfbf78b28669a849" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div></div></div><div id="wb_footer_a197629527ff080b1d270de064e522d3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="wb_footer_c" class="wb_element" data-plugin="WB_Footer" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
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
