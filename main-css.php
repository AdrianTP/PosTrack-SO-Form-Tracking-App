<?php
header("Content-Type: text/css");

require ('../php/browser.php');

/* Variable Definitions */

$background_height_ie = '99.5%';
$background_height = '100%';

$body_font_size_safari = '.9em';
$body_font_size = '.75em';

$container_height_safari = '94%';
$container_height = '95%';

$header_height_safari = '11%';
$header_height = '15%';

$navigation_height_ie = '6%';
$navigation_height = '5%';

$content_height_ie = '70%';
$content_height_safari = '71.5%';
$content_height = '70%';

$footer_height_safari = '3.8%';
$footer_height = '3.2%';

$tab_width_ie_7 = '96%';
$tab_width = '98%';

$tab_spacer_width_safari = '454%';
$tab_spacer_width = '450%';

/* Browser-Detect Statements */

$browser = new Browser();

if ($browser->getBrowser() == Browser::BROWSER_IE)
{
	$background_height = $background_height_ie;
}

if ($browser->getBrowser() == Browser::BROWSER_SAFARI)
{
	$body_font_size = $body_font_size_safari;
}

if ($browser->getBrowser() == Browser::BROWSER_SAFARI)
{
	$container_height = $container_height_safari;
}

if ($browser->getBrowser() == Browser::BROWSER_SAFARI)
{
	$header_height = $header_height_safari;
}

if ($browser->getBrowser() == Browser::BROWSER_IE)
{
	$navigation_height = $navigation_height_ie;
}

if ($browser->getBrowser() == Browser::BROWSER_SAFARI)
{
	$body_font_size = $body_font_size_safari;
}

if ($browser->getBrowser() == Browser::BROWSER_SAFARI)
{
	$content_height = $content_height_safari;
}
else if ($browser->getBrowser() == Browser::BROWSER_IE)
{
	$content_height = $content_height_ie;
}

if ($browser->getBrowser() == Browser::BROWSER_SAFARI)
{
	$footer_height = $footer_height_safari;
}

if ($browser->getBrowser() == Browser::BROWSER_IE && $browser->getVersion() < 8)
{
	$tab_width = $tab_width_ie_7;
}

if ($browser->getBrowser() == Browser::BROWSER_SAFARI)
{
	$tab_spacer_width = $tab_spacer_width_safari;
}

/* CSS Echo */

echo <<<CSS

/* CSS Document */

#background
{
	width: 100%;
	height: $background_height;
	position: absolute;
	left: 0px;
	top: 0px;
	z-index: -10;
}

.stretch
{
	width:100%;
	height:100%;
}

body
{
	font-family: Arial, Arial, sans-serif;
	font-size: $body_font_size;
	margin: 0px;
	padding: 0px;
	color: #BBB;
}

h1
{
	font-size: 2.5em;
}

#container
{
	position: absolute;
	top: 2%;
	left: 2.5%;
	width: 95%;
	height: $container_height;
	z-index: 1;
	border: 1px solid #000;
}

#header
{
	position: relative;
	top: 0;
	left: -1px;
	height: $header_height;
	border: 1px solid #DDD;
	border-bottom: none;
	z-index: 2;
	padding: 1% 2% 1% 2%;
}

#navigation
{
	position: relative;
	top: 0;
	left: -1px;
	height: $navigation_height;
	border: 1px solid #DDD;
	border-top: none;
	border-bottom: none;
	z-index: 2;
}

#content
{
	position: relative;
	top: 0;
	left: -1px;
	height: $content_height;
	border: 1px solid #DDD;
	border-top: none;
	border-bottom: 1px dotted #DDD;
	z-index: 1;
	padding: 1% 2% 1% 2%;
	overflow: auto;
}

#footer
{
	position: relative;
	top: 0;
	left: -1px;
	height: $footer_height;
	border: 1px solid #DDD;
	border-top: none;
	z-index: 2;
	padding: 1% 2% 0 2%;
	/*text-align: center;*/
}

.tab
{
	position: relative;
	top: 34%;
	margin-left: -1px;
	width: 10%;
	height: 100%;
	z-index: 2;
	
	margin-top: 100px;
	padding: 11px 25px 11px;
	list-style: none;
	display: inline;
	-moz-border-radius-topleft: 25px;
	-webkit-border-top-left-radius: 25px;
	border-top-left-radius: 25px;
	-moz-border-radius-topright: 25px;
	-webkit-border-top-right-radius: 25px;
	border-top-right-radius: 25px;
}

#tabmenu
{
	margin: 0;
	padding: 0;
	display: inline;
}

#tabmenu ul
{
	margin: 0;
	margin-bottom: 0;
	padding-left: 0;
	float: left;
	font-weight: bold;
	width: 8%;
	height: 70%;
}

* html #tabmenu ul
{ /*IE only rule. Delete extra margin-bottom*/
	margin-bottom: 0;
}

#tabmenu ul li
{
	display: inline;
}

#tabmenu ul li a
{
	display: inline;
	list-style: none;
	float: left;
	color: #BBB;
	text-decoration: none;
	text-align: center;
	margin-left: -1px;
	width: $tab_width;
	height: 100%;
	z-index: 2;
	
	padding: 10% 1% 0;

	-moz-border-radius-topleft: 25px;
	-webkit-border-top-left-radius: 25px;
	border-top-left-radius: 25px;
	-moz-border-radius-topright: 25px;
	-webkit-border-top-right-radius: 25px;
	border-top-right-radius: 25px;
	border: 1px solid #BBB;
	background-color: rgba(0, 0, 0, 0.3);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#30000000',endColorstr='#30000000'); /* IE6,IE7 */
	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#30000000',endColorstr='#30000000')"; /* IE8 */
}

#tabmenu ul li a:hover
{
	border: 1px solid #FFF;
	color: #FFF;
	background-color: rgba(0, 0, 0, 0.0);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000',endColorstr='#00000000'); /* IE6,IE7 */
	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000',endColorstr='#00000000')"; /* IE8 */
}

#tabmenu ul li a.spacer
{
	margin-top: 1px;
	width: $tab_spacer_width;
	border-top: none;
	border-left: none;
	border-right: none;
	background-color: rgba(0, 0, 0, 0.0);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000',endColorstr='#00000000'); /* IE6,IE7 */
	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000',endColorstr='#00000000')"; /* IE8 */
}

.inactive
{
	border: 1px solid #BBB;
	list-style: none;
	display: inline;
	background-color: rgba(0, 0, 0, 0.3);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#30000000',endColorstr='#30000000'); /* IE6,IE7 */
	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#30000000',endColorstr='#30000000')"; /* IE8 */
}

.inactive:hover
{
	border: 1px solid #FFF;
	color: #FFF;
	background-color: rgba(0, 0, 0, 0.0);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000',endColorstr='#00000000'); /* IE6,IE7 */
	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000',endColorstr='#00000000')"; /* IE8 */"
}

.active
{
	border: 1px solid #BBB;
	border-bottom: none;
	
	list-style: none;
	display: inline;
	background-color: rgba(0, 0, 0, 0.0);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000',endColorstr='#00000000'); /* IE6,IE7 */
	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000',endColorstr='#00000000')"; /* IE8 */"
}

.active:hover
{
	border: 1px solid #FFF;
	border-bottom: none;
	color: #FFF;
	background-color: rgba(0, 0, 0, 0.0);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000',endColorstr='#00000000'); /* IE6,IE7 */
	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000',endColorstr='#00000000')"; /* IE8 */"
}

#navdiv
{
	position: relative;
	float: left;
	height: 70%;
	width: 100%;
	padding: 0;
	padding-top: 11px;
	margin: 0;
	margin-left: 0;
}

#navFiller
{
	position: relative;
	float: right;
	margin-left: -2%;
	margin-right: 0;
	height: 102%;
	width: 40.9%;
	border-bottom: 1px solid #BBB;
}

#link a
{
	width: 100px;
}

a.navButton:link,a.navButton:visited
{
	color: #BBB;
	text-align: center;
	text-decoration: none;
}

a.navButton:hover
{
	color:#FFF;
}

a.navButton:active
{
	color:#FFF;
}
CSS;
?>
