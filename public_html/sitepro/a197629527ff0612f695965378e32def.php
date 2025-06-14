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
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Außenraumreinigung – Mimaris Hausservice"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? generateCanonicalUrl($sitemapUrls) : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Außenraumreinigung"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "Außenraumreinigung"); ?>" />
		
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Außenraumreinigung – Mimaris Hausservice"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Außenraumreinigung"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="{{curr_url}}" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="NameSilo Website Builder" />
			<script src="js/common-bundle.js?ts=20250612082217" type="text/javascript"></script>
	<script src="js/a197629527ff0612f695965378e32def-bundle.js?ts=20250612082217" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20250612082217" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Poppins:700,700i,400,400i,500&amp;subset=devanagari,latin-ext,latin" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Rubik:700,700i,400,400i,500&amp;subset=cyrillic,hebrew,latin-ext,latin" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="css/a197629527ff0612f695965378e32def-bundle.css?ts=20250612082217" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
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


<body class="site site-lang-de<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a197629527ff0612f695965378e32def" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b3068cbfba69b38e9053427" class="wb_element wb-sticky wb-layout-element" data-plugin="LayoutElement" data-h-align="center" data-v-align="top"><div class="wb_content wb-layout-vertical"><div id="a19762950b3069ae2a034911adc335bf" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b2811157aa3132b78b971b8" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/data-647395e5010ef0bd02fcb71f06eed0e7.svg?ts=1749705739"></div></div></div></div></div><div id="a19762950b306a3821af76c7bfdf090c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b306b392f8b9124e32c3ef2" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b306c6deb79a850e93c4010" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b306ee71a3426e70cb218c0" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h4 class="wb-stl-custom36" data-dnid="150346">Privacy Overview</h4><p class="wb-stl-custom37" data-dnid="150347">This website uses cookies to improve your experience while you navigate through the website. Out of these, the cookies that are categorized as necessary are stored on your browser as they are essential for the working of basic functionalities of the ...</p></div></div></div><div id="a19762950b306d0ed5d8c0d80717c1b5" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"></div></div></div></div><div id="a19762950b306ff0d7345960ee4d82a6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b3070958d868e14c6c98391" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b307141e85b806b9033772e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b281afbd17b8f8b8b8dceef" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b281b28861d84f32c339538" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom38" data-auto-wrapper="true">Necessary</p></div></div></div><div id="a19762950b30726d21654294cf8a55d8" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom39" data-dnid="150409">Always Enabled</p></div></div></div><div id="a19762950b307330511d868cae7c7b40" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b281ef0c55a999c819853b0" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b281f887f320896ba1c46a0" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b2820a13c90466f85025f1f" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom38" data-auto-wrapper="true">Functional</p></div></div></div><div id="a19762950b282105a63d02e8200ec149" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a19762950b2822564f35e2b0dcb4b9d3" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div><div id="a19762950b30742f48fe9c57903730ac" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2824e1d90e51cd9516056c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b282564c1aeba28deeabd21" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b2826123ee7ef58041939bc" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom38" data-auto-wrapper="true">Performance</p></div></div></div><div id="a19762950b2827e99a886f5e929d2394" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a19762950b28284a55395a5d4e13c068" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div><div id="a19762950b3075046cfb8ee40cbb0015" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b282ae88e73f95e8c68d483" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b282bba0b78d2334a32bcd1" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b282c9fecdb66ba4c0b7a8d" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom38" data-auto-wrapper="true">Analytics</p></div></div></div><div id="a19762950b282dd29c7bd059bff9db91" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a19762950b282ef34fa3482da8b4fd08" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div><div id="a19762950b30762e40506353c3fc2ea4" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2830d485e46a60364f2bc2" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b2831642083354e60c73caa" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b2832958628937e96dd9fb4" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom38" data-auto-wrapper="true">Advertisement</p></div></div></div><div id="a19762950b28338839799b2b014db387" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a19762950b2834f6bc1cf6629c7eeccc" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div><div id="a19762950b307768e3c2e35f3381809a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b28363a4cc02110714ab5b1" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b2837836bac1e816c87a694" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b28387d3088eb09821ab0af" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom38" data-auto-wrapper="true">Others</p></div></div></div><div id="a19762950b28397c9771571ab3565b02" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a19762950b283af145334ed71a5cd009" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div></div></div></div></div><div id="a19762950b307826e131c040b64af963" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b283cb47a640b78622e04df" class="wb_element" data-plugin="Button"><a class="wb_button"><span>SAVE &amp; ACCEPT</span></a></div></div></div></div></div><div id="a19762950b305d7527c4bf124b81bd59" class="wb_element wb-sticky wb-layout-element" data-plugin="LayoutElement" data-h-align="right" data-v-align="center"><div class="wb_content wb-layout-absolute"><div id="a19762950b305e08131e202620592edd" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b2802fed8f6bd32a936af93" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div><div id="a19762950b305feb9ecc24d2ba736531" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b30605428e2154581712621" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b280508167da9365381deed" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom34" data-auto-wrapper="true">Shopping Cart (0)</p></div></div></div><div id="a19762950b3061cb09f3f7bf1ea20f46" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b30628c7a788a9f7a2b7040" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b30632a8e8cd291849f8498" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b30648d20126612e285526a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b280c55f3b1964b182da4e9" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div><div id="a19762950b3065eb9973c845009b6ce0" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b306712e8cb5888d31af91c" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom35" data-dnid="150287">Your cart is empty</p></div></div></div><div id="a19762950b30661bbf5cb2f46d814a97" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b280e3875915912ee45d042" class="wb_element" data-plugin="Button"><a class="wb_button"><span>Browse Shop</span></a></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div><div id="wb_main_a197629527ff0612f695965378e32def" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b3027d57e15d707657893f4" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b3028c7ca2cc474f61f455b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b3029746465b35eba8c32c9" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b302adb9b143541412134da" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b302bb3c8e50c9f7f7b43e6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b302c11131074abbbf391b9" class="wb_element wb_element_picture" data-plugin="Picture" title="Mimaris Hausservice"><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="{{base_url}}" title="Mimaris Hausservice"><img loading="lazy" alt="Mimaris Hausservice" src="gallery_gen/dc494198f3a0b9a0b55fa70dfc48ea8f_fit.png?ts=1749705739"></a></div></div></div></div></div><div id="a19762950b302db7c28f37ccb1e41721" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom1" data-dnid="150322"><a href="mailto:info@mimaris-hausservice.de"></a></p><p class="wb-stl-custom2" data-dnid="150370"><a href="mailto:info@mimaris-hausservice.de">info@mimaris-hausservice.de</a></p><p class="wb-stl-custom3" data-dnid="150372"><a href="mailto:info@mimaris-hausservice.de">Mail an uns</a></p><p class="wb-stl-custom4" data-dnid="150326"><a href="tel:01575 1326630"></a></p><p class="wb-stl-custom5" data-dnid="150375"><a href="tel:01575 1326630">Telefonnummer:</a></p><p class="wb-stl-custom3" data-dnid="150377"><a href="tel:01575 1326630">01575 1326630</a></p><p class="wb-stl-custom6" data-dnid="150330"></p><p class="wb-stl-custom7" data-dnid="150380">Montag - Sonntag:</p><p class="wb-stl-custom8" data-dnid="150382">9am - 8pm</p><p class="wb-stl-custom9" data-dnid="150332"><a href="ausenraumreinigung"></a></p><p class="wb-stl-custom10" data-dnid="150385"><a href="ausenraumreinigung">Lindenstraße 29</a></p><p class="wb-stl-custom3" data-dnid="150387"><a href="ausenraumreinigung">85737 Ismaning</a></p></div></div></div></div></div><div id="a19762950b302ea59521832be145478e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b302f8f0f2e0d6cda2e039c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b303085bfca09d9f1184bf1" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu" dir="ltr"><li class=""><a href="{{base_url}}">Start</a></li><li class=""><a href="#uberuns">Über uns</a><ul><li class=""><a href="uber-mimaris">Über Mimaris</a></li><li class=""><a href="personel">Personel</a></li><li class=""><a href="technik">Technik</a></li></ul></li><li class=""><a href="#Dienstleistung">Dienstleistung</a><ul><li class=""><a href="hausmeisterservice">Hausmeisterservice</a></li><li class=""><a href="gartenpflege">Gartenpflege</a></li><li class=""><a href="winterdienst">Winterdienst</a></li><li class=""><a href="privathaushalte">Privathaushalte</a></li><li class=""><a href="fine-vip-reinigung">Fine VIP reinigung</a></li><li class=""><a href="buroreinigung">Büroreinigung</a></li><li class=""><a href="reinigungsereignisse">Reinigungsereignisse</a></li><li class=""><a href="fensterreinigung">Fensterreinigung</a></li><li class=""><a href="reinigungsanlagen">Keller und Garagenreinigung</a></li><li class=""><a href="reinigungsgeschafte">Reinigungsgeschäfte</a></li><li class="wb_this_page_menu_item"><a href="ausenraumreinigung">Außenraumreinigung</a></li><li class=""><a href="reinigung-von-sportanlagen-und-schwimmbadern">Reinigung von Sportanlagen und Schwimmbädern</a></li></ul></li><li class=""><a href="category/jobs">Jobs</a></li><li class=""><a href="contact-3">Kontakt</a></li><li class=""><a href="impressum">Impressum</a></li></ul><div class="clearfix"></div></div></div></div><div id="a19762950b3031f36a189b948bc2a587" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b303293a055b23d37d4172a" class="wb_element wb-layout-element wb-layout-has-link" data-plugin="LayoutElement"><a class="wb-layout-link" href="ausenraumreinigung#a"></a><div class="wb_content wb-layout-horizontal"><div id="a19762950b30331e19e2323cd09ec810" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div><div id="a19762950b3034035839535bf0da696a" class="wb_element wb-layout-element wb-layout-has-link" data-plugin="LayoutElement"><a class="wb-layout-link" href="http:///"></a><div class="wb_content wb-layout-horizontal"><div id="a19762950b3035cfe805e3095836f902" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div><div id="a19762950b3036c20afc03e133fa66fc" class="wb_element wb-layout-element wb-layout-has-link" data-plugin="LayoutElement"><a class="wb-layout-link" href="ausenraumreinigung#a"></a><div class="wb_content wb-layout-horizontal"><div id="a19762950b303774afc48a5456664659" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div></div></div></div></div><div id="a19762950b303813f68b2e25388e167b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb-layout-bg-element"><div id="a19762950b3039d5471ffee9d2774d92" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div><div class="wb_content wb-layout-absolute"><div id="a19762950b303aa3c4179088ba3f02e5" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b303b5e5d7b1c3f840a3034" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a19762950b303c9a2da3ca2c4decac04" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b303d8237299b170936abff" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b303ec3f12a981b2594688b" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom40" data-dnid="150256">Außenraumreinigung</h1></div></div></div></div></div></div></div></div></div><div id="a19762950b303f073128f983e9f0ca4c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b3040426f8f9cb59f045609" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b3041f514ed8c8fb45a4aee" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b304207a3f29f862aca1bf4" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom41" data-dnid="150394">Die Umgebung sollte immer für Sie und Ihre Kinder bereit sein. Wir verfügen über professionelle Dienstleistungen und ein Team, das sich in privaten und öffentlichen Bereichen um Ihre Umgebung kümmert.</p><p class="wb-stl-custom41" data-dnid="150395">Wir reinigen Ihre Promenaden, Parks und öffentlichen Bereiche, die Sie täglich nutzen.</p><p class="wb-stl-custom41" data-dnid="150396">Unser Team kümmert sich um Sie und pflegt gerne die Freiflächen, wenn Sie uns darum bitten.</p></div><div id="a19762950b304326a0353b91a29ac108" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b3044181164f7a69d706ff5" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b3045c617ac8823d36f2495" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/9b95173415544e1bee2e062ea548e38b_67dd-427a-b846-30a079f914ae.jpg?ts=1749705739"></div></div></div></div></div></div></div><div id="a19762950b3046897d52f43c420da575" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b3047bf72a3c277514364b9" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b3048cb632e708fb991be68" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/wp-content-uploads-2021-03-1_0030_image1-7.jpg?ts=1749705739"></div></div></div></div></div></div></div><div id="a19762950b304987a6211c56ab37059d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b304a6bb038de35f5ac0b83" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b304b98542210343c82e1db" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/1cf13f22894f9f5637b0a5efcad92dc9_3c54-4a79-8ce4-904c9b3e5fb7.jpg?ts=1749705739"></div></div></div></div></div></div></div></div></div></div></div></div></div><div id="a19762950b304c114b122b313790e324" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b304d180c7710ad7c8261d9" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b304ea9ba26f47f16914d50" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b304f5fda4bf6353749555b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b305069373693d580115802" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b3051ef4519bbe5c4a8552d" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/wp-content-uploads-2020-08-logocircle.png?ts=1749705739"></div></div></div></div></div></div></div><div id="a19762950b3052e921e8ee90abebc99d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b3053fa06207c315b8eb2df" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b3054c40d39f1eb4c098e93" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b305550f8534f1e07a326fb" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b3056ecb1fbdc219783779a" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div></div></div><div id="a19762950b3057cc31af1859f79355a7" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b3058cb254097cea32bef65" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b30593fb8c1e39910c163f9" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b305a301c0751ce706fc6e0" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b305b3d5ce3f7b9f40f14ca" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom33" data-dnid="150684">2025 © All rights reserved | <a href="https://mimaris-hausservice.de/datenschutz/">Datenschutz</a></p></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div><div id="a19762950b305c8d239cd64e87d8b2ec" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div></div></div><div id="wb_footer_a197629527ff0612f695965378e32def" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="wb_footer_c" class="wb_element" data-plugin="WB_Footer" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
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
