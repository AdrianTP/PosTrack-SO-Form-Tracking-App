<?php
header("Content-Type: text/css");

require ('../php/browser.php');

/* Variable Definitions */

$body_font_size_safari = '.9em';
$body_font_size = '.75em';

/* Browser-Detect Statements */

$browser = new Browser();

if ($browser->getBrowser() == Browser::BROWSER_SAFARI)
{
	$body_font_size = $body_font_size_safari;
}

/* CSS Echo */

echo <<<CSS

/* CSS Document */

body
{
	font-family: "Lucida Console", Monaco, monospace;
	font-size: $body_font_size;
	margin: 0px;
	padding: 0px;
	color: #BBB;
}

a:link, a:visited
{
	text-decoration: none;
	color: #BBB;
	border-bottom: 1px dotted #BBB;
	padding-bottom: 0;
}

a:hover, a:active
{
	color: #FFF;
	border-color: #FFF;
}

h2
{
	font-size: 1.5em;
	color: #BBB;
}

h3
{
	font-size: 1.2em;
	color: #BBB;
}

h4
{
	font-size:2em;
	color: #BBB;
}

h5
{
	font-size:2em;
	color: #BBB;
}

.nobullets
{
	list-style: none;
}

.nobullets ul li
{
	list-style: none;
}

li
{
	padding-bottom: .5em;
}
CSS;
?>
