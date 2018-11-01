<?php
echo '
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/magnific-popup.css">
    <link rel="stylesheet" href="./css/style.css">
    <script defer src="./fonts/svg-with-js/js/fontawesome-all.js"></script>
    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="img/favicon.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Solii">
    <link rel="apple-touch-icon-precomposed" href="img/favicon.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="img/favicon.png">
    <meta name="msapplication-TileColor" content="#0B0B09">
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="mask-icon" href="img/icons/safari-pinned-tab.svg" color="#0B0B09">
    <meta name="theme-color" content="#0B0B09">

';?>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119383343-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-119383343-1');
</script>


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TD6L5HW');</script>
<!-- End Google Tag Manager -->


<!-- elvis try this one -->
<script type="text/javascript">
if (typeof jQuery != 'undefined') {
	jQuery(document).ready(function($) {
		var filetypes = /\.(zip|exe|pdf|doc*|xls*|ppt*|mp3)$/i;
		var baseHref = '';
		if (jQuery('base').attr('href') != undefined)
			baseHref = jQuery('base').attr('href');
		jQuery('a').each(function() {
			var href = jQuery(this).attr('href');
			if (href && (href.match(/^https?\:/i)) && (!href.match(document.domain))) {
				jQuery(this).click(function() {
					var extLink = href.replace(/^https?\:\/\//i, '');
					_gaq.push(['_trackEvent', 'External', 'Click', extLink]);
					if (jQuery(this).attr('target') != undefined && jQuery(this).attr('target').toLowerCase() != '_blank') {
						setTimeout(function() { location.href = href; }, 200);
						return false;
					}
				});
			}
			else if (href && href.match(/^mailto\:/i)) {
				jQuery(this).click(function() {
					var mailLink = href.replace(/^mailto\:/i, '');
					_gaq.push(['_trackEvent', 'Email', 'Click', mailLink]);
				});
			}
			else if (href && href.match(filetypes)) {
				jQuery(this).click(function() {
					var extension = (/[.]/.exec(href)) ? /[^.]+$/.exec(href) : undefined;
					var filePath = href;
					_gaq.push(['_trackEvent', 'Download', 'Click-' + extension, filePath]);
					if (jQuery(this).attr('target') != undefined && jQuery(this).attr('target').toLowerCase() != '_blank') {
						setTimeout(function() { location.href = baseHref + href; }, 200);
						return false;
					}
				});
			}
		});
	});
}
</script>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '2116171145077429'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=2116171145077429&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->

<!-- end elvis -->