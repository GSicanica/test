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
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Gebäudereinigung | München Reinigung und Hausmeisterservice"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? generateCanonicalUrl($sitemapUrls) : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Unterhaltsreinigung Reinigung von Fenstern innen und außen Büroreinigung Praxisreinigung Treppenhausreinigung,Geländer, Briefkästen, Lampen und Fensterbretter feucht wischen, Kellerräume, Wasch- und Trockenräume und Gemeinschaftsräume Baureinigung Tiefgaragenreinigung Terrassenreinigung Sonderreinigung Reinigung von Teppichböden für Hotels, Gastronomie, Messe u.a. Shop Reinigung-Friseur Reinigen-Glasdächer (z.B. Sheddach, Sattel Glasdach, Glaskuppeln, Flachdach, Dachreiter)"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "Gebäudereinigung"); ?>" />
		
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Gebäudereinigung | München Reinigung und Hausmeisterservice"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Unterhaltsreinigung Reinigung von Fenstern innen und außen Büroreinigung Praxisreinigung Treppenhausreinigung,Geländer, Briefkästen, Lampen und Fensterbretter feucht wischen, Kellerräume, Wasch- und Trockenräume und Gemeinschaftsräume Baureinigung Tiefgaragenreinigung Terrassenreinigung Sonderreinigung Reinigung von Teppichböden für Hotels, Gastronomie, Messe u.a. Shop Reinigung-Friseur Reinigen-Glasdächer (z.B. Sheddach, Sattel Glasdach, Glaskuppeln, Flachdach, Dachreiter)"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="{{curr_url}}" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="NameSilo Website Builder" />
			<script src="js/common-bundle.js?ts=20250612081559" type="text/javascript"></script>
	<script src="js/a1976290d482095b473bb87eeb785cb1-bundle.js?ts=20250612081559" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20250612081559" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="css/a1976290d482095b473bb87eeb785cb1-bundle.css?ts=20250612081559" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
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


<body class="site site-lang-de<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a1976290d482095b473bb87eeb785cb1" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div><div id="wb_main_a1976290d482095b473bb87eeb785cb1" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef45ba0e9c974b048e22674" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef45d8ce7ca4d8604f249bb" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef45e40b7c8f572de10d71d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef45f72279e19ef7f81fa7a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef46126faf4b546995c5f88" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef46240e3fe337b4bbfce17" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom1" data-auto-wrapper="true">Rufen Sie uns an: </p></div><div id="a1976290bef463eabd62cd607eea21fa" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom2" data-auto-wrapper="true"><a data-type="page" href="">089 726 491 63</a></p></div></div></div></div></div><div id="a1976290bef4603747c897897507bcb9" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef464935e3e05cb21e42d50" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef4651e500e629f49719260" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef466bb1c5f83a1a9ccc19a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef46724c7658effd9312d0f" class="wb_element" data-plugin="Button"><a class="wb_button" href="https://www.facebook.com/lagebaeudereinigung/"><span><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="display: inline-block; vertical-align: middle; position: relative; top: -1px; height: 1em; width: 1em; overflow: visible; direction: ltr;"><text x="385.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg>&nbsp;</span></a></div><div id="a1976290bef4683921e9fe562a2ca429" class="wb_element" data-plugin="Button"><a class="wb_button" href="https://www.instagram.com/la_gebaeudereinigung/"><span><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="display: inline-block; vertical-align: middle; position: relative; top: -1px; height: 1em; width: 1em; overflow: visible; direction: ltr;"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg>&nbsp;</span></a></div></div></div></div></div></div></div></div></div></div></div><div id="a1976290bef469a240afaad6420f128a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef46a6462900f297f051af6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef46b4e5ea9f5acdabedc23" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef46c36666c345fa53b223f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef46d89c9a97a8cdee0497f" class="wb_element wb_element_picture" data-plugin="Picture" title="München Reinigung und Hausmeisterservice"><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="{{base_url}}"><img loading="lazy" alt="München Reinigung und Hausmeisterservice" src="gallery_gen/d49db991adb490bca18882c0943368ae_260x122_fit.png?ts=1749705360"></a></div></div></div></div></div><div id="a1976290bef46efac20d63aa9f7acbee" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef46fdb13d9175a6cf183d9" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom3" data-dnid="30358"><a href="">München Reinigung und Hausmeisterservice</a></h1><p class="wb-stl-custom4" data-auto-wrapper="true"><a href="">
									</a></p><p class="wb-stl-custom5" data-dnid="30360"><a href="">Reinigung und Hausmeisterservice in München</a></p></div></div></div></div></div><div id="a1976290bef470fbedb3ea0f8649656c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef4713f0c824e250695af16" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef5008ab759fbac7e0cf48c" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu" dir="ltr"><li class=""><a href="{{base_url}}">Home</a></li><li class=""><a href="hausmeisterservice">Hausmeisterservice</a></li><li class="wb_this_page_menu_item"><a href="gebaudereinigung">Gebäudereinigung</a></li><li class=""><a href="winterdienst-munchen">Winterdienst</a></li><li class=""><a href="la-gebaudereinigung-haus-service">Was wir tun</a></li><li class=""><a href="gallery/">Fotogallerie</a></li><li class=""><a href="kontakt">Kontakt</a></li></ul><div class="clearfix"></div></div></div></div></div></div></div></div></div></div><div id="a1976290bef501c60cba1e9b2f13564d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef502334928bb1567e8e42c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef5033653cba947bb4d6d89" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef5044e216b815b66d8499b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef505bd05ce0c0b6b41c273" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-absolute"><div id="a1976290bef506b9d8eeeb868ae00c14" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom19" data-auto-wrapper="true">Gebäudereinigung</p></div><div id="a1976290bef50737739e7e4e03c2e8bd" class="wb_element wb_element_shape" data-plugin="Shape"><div class="wb_shp"></div></div></div></div><div id="a1976290bef50840d3314daf1b71af66" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom20" data-dnid="30440">Posted on <a href="gebaudereinigung">April 13, 2021</a> by <a href="author/dmitrecic">admin</a></p></div></div></div><div id="a1976290bef50997f699a0e3e9c4a8d8" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef50abf2c5b7807f10a13ae" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef50b4e7e4ec6e9772e115d" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/wp-content-uploads-2021-04-image5-2.jpeg?ts=1749705360"></div></div></div></div></div><div id="a1976290bef50cd39e4ff7ce342d8176" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><ul class="wb-stl-list2" data-dnid="30446"><li data-dnid="30514">Unterhaltsreinigung</li><li data-dnid="30516">Reinigung von Fenstern innen und außen</li><li data-dnid="30518">Büroreinigung</li><li data-dnid="30520">Praxisreinigung</li><li data-dnid="30522">Treppenhausreinigung,Geländer, Briefkästen, Lampen und Fensterbretter feucht wischen,</li><li data-dnid="30524">Kellerräume, Wasch- und Trockenräume und Gemeinschaftsräume</li><li data-dnid="30526">Baureinigung</li><li data-dnid="30528">Tiefgaragenreinigung</li><li data-dnid="30530">Terrassenreinigung</li><li data-dnid="30532">Sonderreinigung</li><li data-dnid="30534">Reinigung von Teppichböden für Hotels, Gastronomie, Messe u.a.</li><li data-dnid="30536">Shop Reinigung-Friseur Reinigen-Glasdächer (z.B. Sheddach, Sattel Glasdach, Glaskuppeln, Flachdach, Dachreiter)</li></ul></div></div></div><div id="a1976290bef50d303e60af9e9d20b6e2" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom21" data-dnid="30383">Posted in <a href="category/leistungen">Leistungen</a></p></div></div></div><div id="a1976290bef50e42813104477ae5ee41" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef50f3ad2c830590ee5641b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef5106e62c27b9fbb1e18c9" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef5113d5afb4e92aa1bc4f6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef513794bf3d33731310860" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef514ca873f5f39f8bc33e6" class="wb_element" data-plugin="Button"><a class="wb_button" href="winterdienst"><span>Winterdienst&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="display: inline-block; vertical-align: middle; position: relative; top: -1px; height: 1em; width: 1em; overflow: visible; direction: ltr;"><text x="577.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></span></a></div></div></div></div></div><div id="a1976290bef51234665cfde4f2299cc9" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef515df93d50151afb2ee20" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef516a32f33c9ac17fafff0" class="wb_element" data-plugin="Button"><a class="wb_button" href="buroreinigung-munchen"><span>Büroreinigung München&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="display: inline-block; vertical-align: middle; position: relative; top: -1px; height: 1em; width: 1em; overflow: visible; direction: ltr;"><text x="577.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></span></a></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div><div id="a1976290bef5172f9715cdea94edeb20" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef51857f3f29cc137d6a7b0" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef51980d09948f16e5ca097" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef51a09bc1fe665c51bab92" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef51bd236fcd3af354d50bb" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef51ccc50aa4b2fb3c72961" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom15" data-auto-wrapper="true">Kontaktieren Sie uns</p></div></div></div><div id="a1976290bef51d29a52dde109d38050b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef51e5e7370e8553d07f18a" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="vmenu" dir="ltr"><li class=""><a href="kontakt">Kontakt Formular</a></li><li class=""><a href="tel:///+498972649163">Tel: 089 726 49163</a></li></ul><div class="clearfix"></div></div><div id="a1976290bef51f121f35877f5a277ce4" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom16" data-dnid="30457"> </p><p class="wb-stl-custom17" data-dnid="30459">LA Gebäudereinigung &amp; Haus Service, Hansastr.95, 81373 München</p></div></div></div></div></div><div id="a1976290bef5205468d11a8b87a2b2d8" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef5219c0ceb14a64ff2c45a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef522699fd77b094dd07ad4" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom15" data-auto-wrapper="true">Information</p></div></div></div><div id="a1976290bef523f16f196b798a321509" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef524d92977c79eb71d1921" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="vmenu" dir="ltr"><li class="wb_this_page_menu_item"><a href="gebaudereinigung">Gebäudereinigung in München</a></li><li class=""><a href="hausmeisterservice">Hausmeisterservice in München</a></li><li class=""><a href="winterdienst-munchen">Winterdienst in München</a></li><li class=""><a href="gallery/">Fotogallerie</a></li></ul><div class="clearfix"></div></div></div></div></div></div><div id="a1976290bef5250fc3f4d5239b1e0f02" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef526b7949d9f360ef93af5" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef527120279f5205b00e648" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom15" data-auto-wrapper="true">Folgen Sie uns auf</p></div></div></div><div id="a1976290bef52852c0541e26221eb754" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef52977cebfa2273b1bcddf" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="vmenu" dir="ltr"><li class=""><a href="https://www.facebook.com/lagebaeudereinigung/">Facebook</a></li><li class=""><a href="https://www.instagram.com/la_gebaeudereinigung/">Intagram</a></li></ul><div class="clearfix"></div></div></div></div></div></div><div id="a1976290bef52a341285b44d7eaae9d9" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef52b20c0241be5954c731e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef52c183b1ac8a1a3009dab" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom15" data-auto-wrapper="true">Impressum</p></div></div></div><div id="a1976290bef52d4a17fdd19748a893ce" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef52e395e62c9faa9ec6ab0" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="vmenu" dir="ltr"><li class=""><a href="datenschutzerklarung">Datenschutzerklärung</a></li><li class=""><a href="impressum">Impressum</a></li></ul><div class="clearfix"></div></div></div></div></div></div></div></div><div id="a1976290bef52f88a861fac405a05caa" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef5305aa7c6898c141f031b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976290bef531d5998c2f0cb9c2beac" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom18" data-dnid="30334">WordPress Theme : <a href="https://demo.8degreethemes.com/eightmedi-lite/">EightMedi Lite</a>
					by 8Degree Themes</p></div><div id="a1976290bef5321b0cf144eb735bd837" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef533e101158c95e9e0f621" class="wb_element" data-plugin="Button"><a class="wb_button" href="https://www.facebook.com/lagebaeudereinigung/"><span><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="display: inline-block; vertical-align: middle; position: relative; top: -1px; height: 1em; width: 1em; overflow: visible; direction: ltr;"><text x="385.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg>&nbsp;</span></a></div><div id="a1976290bef534bdd08491820a5547b4" class="wb_element" data-plugin="Button"><a class="wb_button" href="https://www.instagram.com/la_gebaeudereinigung/"><span><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="display: inline-block; vertical-align: middle; position: relative; top: -1px; height: 1em; width: 1em; overflow: visible; direction: ltr;"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg>&nbsp;</span></a></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div><div id="a1976290bef45c49e626e38f52434f24" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976290bef536e7c76fdbb086c14eb5" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#87E8FF"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div></div></div><div id="a1976290bef535944dd3d0153945757c" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#404040"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div></div></div><div id="wb_footer_a1976290d482095b473bb87eeb785cb1" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="wb_footer_c" class="wb_element" data-plugin="WB_Footer" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
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
