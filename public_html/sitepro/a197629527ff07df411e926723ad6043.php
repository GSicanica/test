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
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Reinigung von Sportanlagen und Schwimmbädern – Mimaris Hausservice"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? generateCanonicalUrl($sitemapUrls) : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Reinigung von Sportanlagen und Schwimmbädern"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "Reinigung von Sportanlagen und Schwimmbädern"); ?>" />
		
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Reinigung von Sportanlagen und Schwimmbädern – Mimaris Hausservice"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Reinigung von Sportanlagen und Schwimmbädern"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="{{curr_url}}" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="NameSilo Website Builder" />
			<script src="js/common-bundle.js?ts=20250612082217" type="text/javascript"></script>
	<script src="js/a197629527ff07df411e926723ad6043-bundle.js?ts=20250612082217" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20250612082217" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Poppins:700,700i,400,400i,500&amp;subset=devanagari,latin-ext,latin" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Rubik:700,700i,400,400i,500&amp;subset=cyrillic,hebrew,latin-ext,latin" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="css/a197629527ff07df411e926723ad6043-bundle.css?ts=20250612082217" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
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


<body class="site site-lang-de<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a197629527ff07df411e926723ad6043" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b3132c8a5ad5072bbb62847" class="wb_element wb-sticky wb-layout-element" data-plugin="LayoutElement" data-h-align="center" data-v-align="top"><div class="wb_content wb-layout-vertical"><div id="a19762950b31332d0a0c24395485e9c1" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b2811157aa3132b78b971b8" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/data-647395e5010ef0bd02fcb71f06eed0e7.svg?ts=1749705739"></div></div></div></div></div><div id="a19762950b313418429cf4a9de680c22" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b313580bb465ca10550c579" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b3136c10d3df36dc8d3a62a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b313857d21311f1ad6123e3" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h4 class="wb-stl-custom36" data-dnid="160346">Privacy Overview</h4><p class="wb-stl-custom37" data-dnid="160347">This website uses cookies to improve your experience while you navigate through the website. Out of these, the cookies that are categorized as necessary are stored on your browser as they are essential for the working of basic functionalities of the ...</p></div></div></div><div id="a19762950b31375ef903a587b3201975" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"></div></div></div></div><div id="a19762950b313983356dd3a0baa680c5" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b313aede72506b18581983a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b313b4578f9d9eca3b0ed9a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b281afbd17b8f8b8b8dceef" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b281b28861d84f32c339538" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom38" data-auto-wrapper="true">Necessary</p></div></div></div><div id="a19762950b313cc4510f0e7287612a43" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom39" data-dnid="160407">Always Enabled</p></div></div></div><div id="a19762950b313d00fe875112076598a3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b281ef0c55a999c819853b0" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b281f887f320896ba1c46a0" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b2820a13c90466f85025f1f" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom38" data-auto-wrapper="true">Functional</p></div></div></div><div id="a19762950b282105a63d02e8200ec149" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a19762950b2822564f35e2b0dcb4b9d3" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div><div id="a19762950b313e2015da0dab7696871a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2824e1d90e51cd9516056c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b282564c1aeba28deeabd21" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b2826123ee7ef58041939bc" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom38" data-auto-wrapper="true">Performance</p></div></div></div><div id="a19762950b2827e99a886f5e929d2394" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a19762950b28284a55395a5d4e13c068" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div><div id="a19762950b313fdb3b5e1e46db47ee7d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b282ae88e73f95e8c68d483" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b282bba0b78d2334a32bcd1" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b282c9fecdb66ba4c0b7a8d" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom38" data-auto-wrapper="true">Analytics</p></div></div></div><div id="a19762950b282dd29c7bd059bff9db91" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a19762950b282ef34fa3482da8b4fd08" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div><div id="a19762950b31407ac7fd9ff2146eb038" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2830d485e46a60364f2bc2" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b2831642083354e60c73caa" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b2832958628937e96dd9fb4" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom38" data-auto-wrapper="true">Advertisement</p></div></div></div><div id="a19762950b28338839799b2b014db387" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a19762950b2834f6bc1cf6629c7eeccc" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div><div id="a19762950b3141a67e2608b7adffcbce" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b28363a4cc02110714ab5b1" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b2837836bac1e816c87a694" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b28387d3088eb09821ab0af" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom38" data-auto-wrapper="true">Others</p></div></div></div><div id="a19762950b28397c9771571ab3565b02" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a19762950b283af145334ed71a5cd009" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div></div></div></div></div><div id="a19762950b31426a18136b5229de407e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b283cb47a640b78622e04df" class="wb_element" data-plugin="Button"><a class="wb_button"><span>SAVE &amp; ACCEPT</span></a></div></div></div></div></div><div id="a19762950b312759836418ab3e377b1e" class="wb_element wb-sticky wb-layout-element" data-plugin="LayoutElement" data-h-align="right" data-v-align="center"><div class="wb_content wb-layout-absolute"><div id="a19762950b3128d6bd6f1ab69d4c5e8d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b2802fed8f6bd32a936af93" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div><div id="a19762950b312977959762e128d2b019" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b312a222ca63ab55982fcb6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b280508167da9365381deed" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom34" data-auto-wrapper="true">Shopping Cart (0)</p></div></div></div><div id="a19762950b312bf79855c9f8b8ee6a41" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b312c69c94eae1dd2bb9bc5" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b312d1f3e85f237c5e256bd" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b312e5a9eb4bec66747220a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b280c55f3b1964b182da4e9" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div><div id="a19762950b312fb2c7bf8aa6c3173beb" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b313140e60a797358cff057" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom35" data-dnid="160287">Your cart is empty</p></div></div></div><div id="a19762950b3130d9b86602120fa1d18f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b280e3875915912ee45d042" class="wb_element" data-plugin="Button"><a class="wb_button"><span>Browse Shop</span></a></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div><div id="wb_main_a197629527ff07df411e926723ad6043" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b307c17a69c8af505ee401b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b307ded658e4bf89f52a5c8" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b307edace328a17a51dd68d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b307f553d0bf3282bf00063" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b30801e5c5cf5568456af17" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b3081d1fd17da356c2a6f1f" class="wb_element wb_element_picture" data-plugin="Picture" title="Mimaris Hausservice"><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="{{base_url}}" title="Mimaris Hausservice"><img loading="lazy" alt="Mimaris Hausservice" src="gallery_gen/dc494198f3a0b9a0b55fa70dfc48ea8f_fit.png?ts=1749705739"></a></div></div></div></div></div><div id="a19762950b3082e61d17ab3dfde546d0" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom1" data-dnid="160322"><a href="mailto:info@mimaris-hausservice.de"></a></p><p class="wb-stl-custom2" data-dnid="160370"><a href="mailto:info@mimaris-hausservice.de">info@mimaris-hausservice.de</a></p><p class="wb-stl-custom3" data-dnid="160372"><a href="mailto:info@mimaris-hausservice.de">Mail an uns</a></p><p class="wb-stl-custom4" data-dnid="160326"><a href="tel:01575 1326630"></a></p><p class="wb-stl-custom5" data-dnid="160375"><a href="tel:01575 1326630">Telefonnummer:</a></p><p class="wb-stl-custom3" data-dnid="160377"><a href="tel:01575 1326630">01575 1326630</a></p><p class="wb-stl-custom6" data-dnid="160330"></p><p class="wb-stl-custom7" data-dnid="160380">Montag - Sonntag:</p><p class="wb-stl-custom8" data-dnid="160382">9am - 8pm</p><p class="wb-stl-custom9" data-dnid="160332"><a href="reinigung-von-sportanlagen-und-schwimmbadern"></a></p><p class="wb-stl-custom10" data-dnid="160385"><a href="reinigung-von-sportanlagen-und-schwimmbadern">Lindenstraße 29</a></p><p class="wb-stl-custom3" data-dnid="160387"><a href="reinigung-von-sportanlagen-und-schwimmbadern">85737 Ismaning</a></p></div></div></div></div></div><div id="a19762950b30830569addc89b9346fa3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b3084f2801c6abe5e063c1a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b308585df1c3197afcdbf2b" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu" dir="ltr"><li class=""><a href="{{base_url}}">Start</a></li><li class=""><a href="#uberuns">Über uns</a><ul><li class=""><a href="uber-mimaris">Über Mimaris</a></li><li class=""><a href="personel">Personel</a></li><li class=""><a href="technik">Technik</a></li></ul></li><li class=""><a href="#Dienstleistung">Dienstleistung</a><ul><li class=""><a href="hausmeisterservice">Hausmeisterservice</a></li><li class=""><a href="gartenpflege">Gartenpflege</a></li><li class=""><a href="winterdienst">Winterdienst</a></li><li class=""><a href="privathaushalte">Privathaushalte</a></li><li class=""><a href="fine-vip-reinigung">Fine VIP reinigung</a></li><li class=""><a href="buroreinigung">Büroreinigung</a></li><li class=""><a href="reinigungsereignisse">Reinigungsereignisse</a></li><li class=""><a href="fensterreinigung">Fensterreinigung</a></li><li class=""><a href="reinigungsanlagen">Keller und Garagenreinigung</a></li><li class=""><a href="reinigungsgeschafte">Reinigungsgeschäfte</a></li><li class=""><a href="ausenraumreinigung">Außenraumreinigung</a></li><li class="wb_this_page_menu_item"><a href="reinigung-von-sportanlagen-und-schwimmbadern">Reinigung von Sportanlagen und Schwimmbädern</a></li></ul></li><li class=""><a href="category/jobs">Jobs</a></li><li class=""><a href="contact-3">Kontakt</a></li><li class=""><a href="impressum">Impressum</a></li></ul><div class="clearfix"></div></div></div></div><div id="a19762950b3086f99c564fad443d71f4" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b3087cd8671143ed2d37ff8" class="wb_element wb-layout-element wb-layout-has-link" data-plugin="LayoutElement"><a class="wb-layout-link" href="reinigung-von-sportanlagen-und-schwimmbadern#a"></a><div class="wb_content wb-layout-horizontal"><div id="a19762950b31006ecf79743fb312abc3" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div><div id="a19762950b3101017b90a939aaa1e175" class="wb_element wb-layout-element wb-layout-has-link" data-plugin="LayoutElement"><a class="wb-layout-link" href="http:///"></a><div class="wb_content wb-layout-horizontal"><div id="a19762950b3102b012e38a0341101ea9" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div><div id="a19762950b31039f7c7aa26119b5955e" class="wb_element wb-layout-element wb-layout-has-link" data-plugin="LayoutElement"><a class="wb-layout-link" href="reinigung-von-sportanlagen-und-schwimmbadern#a"></a><div class="wb_content wb-layout-horizontal"><div id="a19762950b310453dc8cbb787745d051" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div></div></div></div></div><div id="a19762950b310566810855d0147bca63" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb-layout-bg-element"><div id="a19762950b31065fadb12e6ef7732bc0" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div><div class="wb_content wb-layout-absolute"><div id="a19762950b31073139ef0b9b32582570" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b31083dcf07f1abe2782a83" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a19762950b31090a071c7aaa753e621d" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b310acf3003ea511291415a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b310be7df06632e16333d22" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom40" data-dnid="160256">Reinigung von Sportanlagen und Schwimmbädern</h1></div></div></div></div></div></div></div></div></div><div id="a19762950b310cc0ea3eb93d0518703a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b310d96736bcce75bbff034" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b310eebe7789f3c998b91f1" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b310f2a15a787f282a24de0" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom41" data-dnid="160394">Sportanlagen, Umkleideraum sowie die Umgebung Ihrer Schwimmbad liegen von nun an in unserer Verantwortung und wir kümmern uns gerne darum, dass sie bei jedem Training oder vor jeder Nutzung des Schwimmbad sauber sind. Ein Team von Fachleuten mit geeigneter Ausrüstung und Reinigungsmitteln für solche speziellen Einrichtungen steht Ihnen zur Verfügung. Fordern Sie ein Angebot für Ihre Sportanlage oder Ihren Schwimmbad an.</p></div><div id="a19762950b311076822bb09e16bfa99f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b3111f4eff4939407d30b69" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b3112d50b1cff18d22817a2" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/wp-content-uploads-2021-03-landscape-2016308_1280-1024x731.jpg?ts=1749705739"></div></div></div></div></div></div></div><div id="a19762950b31137ba74023566d7a8a9f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b31148af3275ce046e5f973" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b3115a25aee5ff4c3e45951" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/wp-content-uploads-2021-03-sports-hall-1948912_1280-1024x769.jpg?ts=1749705739"></div></div></div></div></div></div></div></div></div></div></div></div></div><div id="a19762950b31161a7a6fa263ec09b9fb" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b31177113b1c4db8efca011" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b31182cc1dfd46d7e9571b2" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b3119dffe469b548bb7fde4" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b311a68e8791db7de5ee106" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b311b01be431af358c2017d" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/wp-content-uploads-2020-08-logocircle.png?ts=1749705739"></div></div></div></div></div></div></div><div id="a19762950b311c831ecf5298b2e583e5" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b311dd43efa452ca1774333" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b311ede00e36f86e892743b" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b311f386fd0a8ee05a853fc" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b3120641e6b27aa51887b86" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div></div></div><div id="a19762950b3121e4086c01a92908a5f3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b312245cd44c0a220274b52" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b31239f1b305c1140479dcf" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b31245272ae5b52bcb106df" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b31259e0c3bc9c67c9bc14e" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom33" data-dnid="160676">2025 © All rights reserved | <a href="https://mimaris-hausservice.de/datenschutz/">Datenschutz</a></p></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div><div id="a19762950b312607888e34b93290c940" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div></div></div><div id="wb_footer_a197629527ff07df411e926723ad6043" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="wb_footer_c" class="wb_element" data-plugin="WB_Footer" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
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
