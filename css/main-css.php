<?php
header("Content-Type: text/css");

require ('../php/browser.php');

/* Variable Definitions */

$body_font_size_safari = '.8em';
$body_font_size = '.95em';

$worktobedone_width_safari = '520px';
$worktobedone_width = '441px';

$fields_margin_top_safari = '2px';
$fields_margin_top = '10px';

$fields_padding_safari = '/*padding: 10px 0px 10px 0px;*/';
$fields_padding = 'padding: 10px 0px 10px 0px;';

$fields_border_safari = 'border: 1px dashed #000;';
$fields_border = '/*border: 1px dashed #000;*/';

$input_font_size = '.8em';

$content_height_ie = '70%';
$content_height_safari = '71.5%';
$content_height = '70%';

/* Browser-Detect Statements */

$browser = new Browser();

if ($browser->getBrowser() == Browser::BROWSER_SAFARI)
{
	$body_font_size = $body_font_size_safari;
}

if ($browser->getBrowser() == Browser::BROWSER_SAFARI)
{
	$worktobedone_width = $worktobedone_width_safari;
}

if ($browser->getBrowser() == Browser::BROWSER_SAFARI)
{
	$fields_margin_top = $fields_margin_top_safari;
}

if ($browser->getBrowser() == Browser::BROWSER_SAFARI)
{
	$fields_border = $fields_border_safari;
}

if ($browser->getBrowser() == Browser::BROWSER_SAFARI)
{
	$fields_padding = $fields_padding_safari;
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

/* CSS Echo */

echo <<<CSS

/* CSS Document */

body
{
	font-family: Arial, Arial, sans-serif;
	font-size: $body_font_size;
	margin: 0px;
	padding: 0px;
	color: #000;
}

h1
{
	font-size: 1.5em;
	text-align: center;
	padding-top: -5px;
	margin-top: -5px;
	margin-bottom: -10px;
}

h2
{
	font-size: 1.2em;
	color: #000;
	padding-top: -5px;
	margin-top: -5px;
	padding-bottom: -5px;
	margin-bottom: -5px;
}

h3
{
	font-size: 1em;
	color: #000;
	padding-top: 2px;
	margin-top: 2px;
	padding-bottom: 2px;
	margin-bottom: 2px;
}

h4
{
	font-size: 2em;
	color: #000;
}

h5
{
	font-size: 2em;
	color: #000;
}

.checkboxes
{
	border-spacing: 0px;
	border-collapse: collapse;
	border: none;
	overflow: nowrap;
	display: block;
	margin-left: auto;
	margin-right: auto;
	width: 75%;
}

.checkboxes td
{
	margin: 0px;
	padding: 0px;
	padding-right: 10px;
	border: none;
	overflow: nowrap;
}

.sotable
{
	border-spacing: 2px;
	/*border-collapse: collapse;*/
	border: 1px solid #000;
	overflow: nowrap;
	margin: 5px;
	background-color: #BBB;
}

.sotable td
{
	margin: 0px;
	padding: 2px;
	padding-right: 4px;
	/*border: 1px dashed #000;*/
	overflow: nowrap;
	background-color: #DDD;
}

.sidebartable
{
	border-spacing: 2px;
	/*border-collapse: collapse;*/
	/*border: 1px solid #000;*/
	overflow: nowrap;
	margin: 5px;
	/*background-color: #BBB;*/
}

.sidebartable td
{
	margin: 0px;
	padding: 2px;
	padding-right: 4px;
	/*border: 1px dashed #000;*/
	overflow: nowrap;
	/*background-color: #DDD;*/
}

.noborder
{
	border: none;
	background-color: #DDD;
}

#worktobedone_width
{
	width: $worktobedone_width;
}

textarea
{
	border: none;
	background-color: #DDD;
	font-family: Lucida Grande, Lucida, sans-serif;
	font-size: $input_font_size;
}

.white
{
	background-color: #FFF;
	margin-top: 10px;
}

input
{
	font-family: Lucida Grande, Lucida, sans-serif;
	font-size: $input_font_size;
}

.button
{
	border: 1px solid #000;
	background-color: #FFF;
	font-family: Lucida Grande, Lucida, sans-serif;
	font-size: $input_font_size;
}

.update
{
	/*background-color: #0F0;*/
}

.delete
{
	/*background-color: #F00;*/
}

.view
{
	/*background-color: #00F;*/
	/*text-decoration: line-through;*/
}

.detail
{
	text-decoration: none;
	color: #000;
	font-family: Lucida Grande, Lucida, sans-serif;
	font-size: .7em;
	padding: 2px 5px 3px 5px;
}

#columnone
{
	position: fixed;
	float: left;
	width: 150px;
	height: 500px;
	border: 3px solid #CCF;
	background-color: #AAF;
	padding: 8px 0px 0px 4px;
	font-family: Lucida Grande, Lucida, sans-serif;
	font-size: $body_font_size;
	z-index: -99;
	margin: 0px;
}

#columntwo
{
	margin: 0px;
	margin-left: 160px; 
	float: left;
	border: 3px solid #CCF;
	border-left: none;
	background-color: #DDF;
	padding: 2px;
	font-family: Lucida Grande, Lucida, sans-serif;
	font-size: $body_font_size;
	z-index: 2;
}

.doublewidth
{
	width: 200px;
}

.halfwidth
{
	width: 50px;
}

.tinywidth
{
	width: 10px;
}

.quarterwidth
{
	width: 25px;
}

.specialwidth
{
	width: 120px;
}

#form
{
	position: absolute;
	top: 0%;
	left: 2.5%;
	width: 95%;
	height: $container_height;
	z-index: 1;
	/*border: 1px solid #000;*/
	font-family: Arial, Arial, sans-serif;
	font-size: .9em;
	margin: 0px;
	padding: 0px;
	color: #000;
}

.fields
{
	display: block;
	margin-left: auto;
	margin-right: auto;
	margin-top: $fields_margin_top;
	width: 75%;
	$fields_border
	$fields_padding
}

#logo
{
	display: block;
	margin-left: auto;
	margin-right: auto;
	margin-top: 10px;
	margin-bottom: 0px;
	width: 225px;
	height: 55px;
}

#border
{
	position: absolute;
	width: 80%;
	height: 96%;
	top: 2%;
	left: 10%;
	display: block;
	border: 1px solid #000;
}

.underline
{
	border: none;
	border-bottom: 1px solid #000;
	width: 200px;
}

.outline
{
	border: 1px solid #000;
}
CSS;
?>
