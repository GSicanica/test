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

				document.cookie = '__cookie_law__=' + cookieLaw + '; path=/; expires=Sun, 07 Jun 2026 08:22:17 GMT';

				var items = ciCollectedCookies;
				ciCollectedCookies = [];
				items.forEach(function (item) {
					d.cookie = item;
				})
			}
		})(document);
			</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Personel – Mimaris Hausservice"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? generateCanonicalUrl($sitemapUrls) : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Personel"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "Personel"); ?>" />
		
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Personel – Mimaris Hausservice"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Personel"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="{{curr_url}}" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="NameSilo Website Builder" />
			<script src="js/common-bundle.js?ts=20250612082217" type="text/javascript"></script>
	<script src="js/a197629527ff0d0bbf9f5cb07f5aa672-bundle.js?ts=20250612082217" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20250612082217" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Poppins:700,700i,400,400i,500&amp;subset=devanagari,latin-ext,latin" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Rubik:700,700i,400,400i,500&amp;subset=cyrillic,hebrew,latin-ext,latin" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="css/a197629527ff0d0bbf9f5cb07f5aa672-bundle.css?ts=20250612082217" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
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


<body class="site site-lang-de<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a197629527ff0d0bbf9f5cb07f5aa672" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b293f1add61982fccb837ac" class="wb_element wb-sticky wb-layout-element" data-plugin="LayoutElement" data-h-align="center" data-v-align="top"><div class="wb_content wb-layout-vertical"><div id="a19762950b29404564e50854f3d541b0" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b2811157aa3132b78b971b8" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/data-647395e5010ef0bd02fcb71f06eed0e7.svg?ts=1749705737"></div></div></div></div></div><div id="a19762950b294147bb4fe4d391cc5ba0" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2942429c09ccaf3ae8518d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b294348663f4011c23f7a5c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b29453091de2cc6327c0b0b" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h4 class="wb-stl-custom36" data-dnid="30348">Privacy Overview</h4><p class="wb-stl-custom37" data-dnid="30349">This website uses cookies to improve your experience while you navigate through the website. Out of these, the cookies that are categorized as necessary are stored on your browser as they are essential for the working of basic functionalities of the ...</p></div></div></div><div id="a19762950b29449982f06a3ac2edc642" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"></div></div></div></div><div id="a19762950b2946e314da256ec79f8889" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2947268e68714872627121" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b294832c0eebfc3ae83f014" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b281afbd17b8f8b8b8dceef" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b281b28861d84f32c339538" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom38" data-auto-wrapper="true">Necessary</p></div></div></div><div id="a19762950b294932192e0524d39d5071" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom39" data-dnid="30412">Always Enabled</p></div></div></div><div id="a19762950b294aa543a78c4ae1da111e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b281ef0c55a999c819853b0" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b281f887f320896ba1c46a0" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b2820a13c90466f85025f1f" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom38" data-auto-wrapper="true">Functional</p></div></div></div><div id="a19762950b282105a63d02e8200ec149" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a19762950b2822564f35e2b0dcb4b9d3" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div><div id="a19762950b294b4b2e68484e76bed1bb" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2824e1d90e51cd9516056c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b282564c1aeba28deeabd21" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b2826123ee7ef58041939bc" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom38" data-auto-wrapper="true">Performance</p></div></div></div><div id="a19762950b2827e99a886f5e929d2394" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a19762950b28284a55395a5d4e13c068" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div><div id="a19762950b294c7117af19c4cd1bc5d7" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b282ae88e73f95e8c68d483" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b282bba0b78d2334a32bcd1" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b282c9fecdb66ba4c0b7a8d" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom38" data-auto-wrapper="true">Analytics</p></div></div></div><div id="a19762950b282dd29c7bd059bff9db91" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a19762950b282ef34fa3482da8b4fd08" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div><div id="a19762950b294d02ab395d7fe17ec934" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2830d485e46a60364f2bc2" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b2831642083354e60c73caa" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b2832958628937e96dd9fb4" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom38" data-auto-wrapper="true">Advertisement</p></div></div></div><div id="a19762950b28338839799b2b014db387" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a19762950b2834f6bc1cf6629c7eeccc" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div><div id="a19762950b294e3d904f4905836247ac" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b28363a4cc02110714ab5b1" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b2837836bac1e816c87a694" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b28387d3088eb09821ab0af" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom38" data-auto-wrapper="true">Others</p></div></div></div><div id="a19762950b28397c9771571ab3565b02" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a19762950b283af145334ed71a5cd009" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div></div></div></div></div><div id="a19762950b294f5d88c2f164aa7a0e4b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b283cb47a640b78622e04df" class="wb_element" data-plugin="Button"><a class="wb_button"><span>SAVE &amp; ACCEPT</span></a></div></div></div></div></div><div id="a19762950b2934706ddd3c27ed4df58e" class="wb_element wb-sticky wb-layout-element" data-plugin="LayoutElement" data-h-align="right" data-v-align="center"><div class="wb_content wb-layout-absolute"><div id="a19762950b2935152867d81e8e1549b5" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b2802fed8f6bd32a936af93" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div><div id="a19762950b293668f9ce3da52d26ca62" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2937fd1e8e2de94783482c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b280508167da9365381deed" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom34" data-auto-wrapper="true">Shopping Cart (0)</p></div></div></div><div id="a19762950b2938bbb55cafffea5965b8" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2939d812997ffbf42f398f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b293ac0482b99c3d2698423" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b293bdb2223be930846fb64" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b280c55f3b1964b182da4e9" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div><div id="a19762950b293c1ee50b246482afcd3d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b293e9d48138e30ded8a39a" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom35" data-dnid="30289">Your cart is empty</p></div></div></div><div id="a19762950b293d4074eec64856045935" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b280e3875915912ee45d042" class="wb_element" data-plugin="Button"><a class="wb_button"><span>Browse Shop</span></a></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div><div id="wb_main_a197629527ff0d0bbf9f5cb07f5aa672" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2907491804247c3354bba9" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2908e7c173f42b6cd455d6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2909068813b7732f5f4210" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b290a1c7c09bbf75b53c585" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b290bf5988efed1912457f4" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b290c5bde5cc7e74533d623" class="wb_element wb_element_picture" data-plugin="Picture" title="Mimaris Hausservice"><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="{{base_url}}" title="Mimaris Hausservice"><img loading="lazy" alt="Mimaris Hausservice" src="gallery_gen/dc494198f3a0b9a0b55fa70dfc48ea8f_fit.png?ts=1749705737"></a></div></div></div></div></div><div id="a19762950b290db1ecf5447eefab6352" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom1" data-dnid="30324"><a href="mailto:info@mimaris-hausservice.de"></a></p><p class="wb-stl-custom2" data-dnid="30372"><a href="mailto:info@mimaris-hausservice.de">info@mimaris-hausservice.de</a></p><p class="wb-stl-custom3" data-dnid="30374"><a href="mailto:info@mimaris-hausservice.de">Mail an uns</a></p><p class="wb-stl-custom4" data-dnid="30328"><a href="tel:01575 1326630"></a></p><p class="wb-stl-custom5" data-dnid="30377"><a href="tel:01575 1326630">Telefonnummer:</a></p><p class="wb-stl-custom3" data-dnid="30379"><a href="tel:01575 1326630">01575 1326630</a></p><p class="wb-stl-custom6" data-dnid="30332"></p><p class="wb-stl-custom7" data-dnid="30382">Montag - Sonntag:</p><p class="wb-stl-custom8" data-dnid="30384">9am - 8pm</p><p class="wb-stl-custom9" data-dnid="30334"><a href="personel"></a></p><p class="wb-stl-custom10" data-dnid="30387"><a href="personel">Lindenstraße 29</a></p><p class="wb-stl-custom3" data-dnid="30389"><a href="personel">85737 Ismaning</a></p></div></div></div></div></div><div id="a19762950b290e974faafc5a7ca8149d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b290fdb107c91e4c3b30cc5" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b291010e0ea761dd1fdc8a1" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu" dir="ltr"><li class=""><a href="{{base_url}}">Start</a></li><li class=""><a href="#uberuns">Über uns</a><ul><li class=""><a href="uber-mimaris">Über Mimaris</a></li><li class="wb_this_page_menu_item"><a href="personel">Personel</a></li><li class=""><a href="technik">Technik</a></li></ul></li><li class=""><a href="#Dienstleistung">Dienstleistung</a><ul><li class=""><a href="hausmeisterservice">Hausmeisterservice</a></li><li class=""><a href="gartenpflege">Gartenpflege</a></li><li class=""><a href="winterdienst">Winterdienst</a></li><li class=""><a href="privathaushalte">Privathaushalte</a></li><li class=""><a href="fine-vip-reinigung">Fine VIP reinigung</a></li><li class=""><a href="buroreinigung">Büroreinigung</a></li><li class=""><a href="reinigungsereignisse">Reinigungsereignisse</a></li><li class=""><a href="fensterreinigung">Fensterreinigung</a></li><li class=""><a href="reinigungsanlagen">Keller und Garagenreinigung</a></li><li class=""><a href="reinigungsgeschafte">Reinigungsgeschäfte</a></li><li class=""><a href="ausenraumreinigung">Außenraumreinigung</a></li><li class=""><a href="reinigung-von-sportanlagen-und-schwimmbadern">Reinigung von Sportanlagen und Schwimmbädern</a></li></ul></li><li class=""><a href="category/jobs">Jobs</a></li><li class=""><a href="contact-3">Kontakt</a></li><li class=""><a href="impressum">Impressum</a></li></ul><div class="clearfix"></div></div></div></div><div id="a19762950b29119cbc3e07655a22e51b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b291222552365ce9fba9b24" class="wb_element wb-layout-element wb-layout-has-link" data-plugin="LayoutElement"><a class="wb-layout-link" href="personel#a"></a><div class="wb_content wb-layout-horizontal"><div id="a19762950b2913847343d1390820376a" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div><div id="a19762950b291405b85a8963647d2cbd" class="wb_element wb-layout-element wb-layout-has-link" data-plugin="LayoutElement"><a class="wb-layout-link" href="http:///"></a><div class="wb_content wb-layout-horizontal"><div id="a19762950b29152d390fe90adb1de2ad" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div><div id="a19762950b291648287bd22686db403f" class="wb_element wb-layout-element wb-layout-has-link" data-plugin="LayoutElement"><a class="wb-layout-link" href="personel#a"></a><div class="wb_content wb-layout-horizontal"><div id="a19762950b29179dbbb65907dad81ba5" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div></div></div></div></div><div id="a19762950b2918ae21a877f42a3a988f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb-layout-bg-element"><div id="a19762950b291952d93a14d461ab1830" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div><div class="wb_content wb-layout-absolute"><div id="a19762950b291ac296ce57ccf88c9dd6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b291b2871e44341b6c58815" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a19762950b291c30819cd711390cd5ee" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b291d3b365f90776427d18a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b291e9edd23fcc56fdffe90" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom40" data-dnid="30258">Personel</h1></div></div></div></div></div></div></div></div></div><div id="a19762950b291f268a4f5b975927aced" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2920641600757b1e91254e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b29212506a8eb479a18872b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b292224178ffd06e701890a" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom41" data-dnid="30396">Unsere Mitarbeiter sind eine Basis von Fachleuten auf ihrem Gebiet. Wir bieten verschiedene Dienstleistungen für unterschiedliche Bedürfnisse an.</p><p class="wb-stl-custom41" data-dnid="30398">Unser Team verfügt über mehr als 50 Mitarbeiter und einige von ihnen haben mehr als 15 Jahre Berufserfahrung.</p><p class="wb-stl-custom41" data-dnid="30400">Wir bieten auch Schulungen für neue Mitarbeiter (Anfänger) in dem Bereich an, in dem sie zu uns kommen. Die Ausbildung besteht aus einem mehrwöchigen Praktikum im Dienst sowie der Erstaufsicht und Unterstützung durch einen Vorgesetzten bei der Arbeit in den ersten Monaten.</p><p class="wb-stl-custom43" data-dnid="30402">Profis aus der Praxis arbeiten in den Mimaris</p><ul class="wb-stl-list1" data-dnid="30403"><li data-dnid="30459">Schichtleiter</li><li data-dnid="30460">Manager für Unternehmen</li><li data-dnid="30461">Kundenservice</li><li data-dnid="30462">Hausmeister</li><li data-dnid="30463">Elektriker</li><li data-dnid="30464">Installateur</li><li data-dnid="30465">Gärtner</li><li data-dnid="30466">Reiniger</li><li data-dnid="30467">Autofahrer</li></ul></div></div></div></div></div></div></div><div id="a19762950b2923e10975ce16824f5295" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b29249e0cc68a571e52ead0" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2925b8f47d16edb809da9c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2926f4c7e0e8112c8b98b7" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b292766b1c599b3d90a44d2" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b29280cfe8ddf7b804d6e94" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/wp-content-uploads-2020-08-logocircle.png?ts=1749705737"></div></div></div></div></div></div></div><div id="a19762950b2929b334b8a2c626e10ddb" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b292a9abeea817af64e2bc6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b292bec86ddb769d1f6de5d" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b292ce4c014c18e95cdf122" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div><div id="a19762950b292d6ec3c0738cd0259d0b" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div></div></div></div></div><div id="a19762950b292e654665b437892d10a3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b292f810960edf4dbb60239" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19762950b29304c2b4a39601039aa12" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b29318c5157972d715d1fc0" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19762950b2932efe50879c0b2f362ee" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom33" data-dnid="30695">2025 © All rights reserved | <a href="https://mimaris-hausservice.de/datenschutz/">Datenschutz</a></p></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div><div id="a19762950b2933beb8fad2e50654b774" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div></div></div><div id="wb_footer_a197629527ff0d0bbf9f5cb07f5aa672" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="wb_footer_c" class="wb_element" data-plugin="WB_Footer" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
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
