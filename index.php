<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>notes</title>
	<style>
	article,
	aside,
	details,
	figcaption,
	figure,
	footer,
	header,
	hgroup,
	nav,
	section,
	summary {
	  display: block;
	}
	audio,
	canvas,
	video {
	  display: inline-block;
	}
	audio:not([controls]) {
	  display: none;
	  height: 0;
	}
	[hidden] {
	  display: none;
	}
	html {
	  font-family: "microsoft yahei", sans-serif;
	  letter-spacing: 1px;
	  -webkit-text-size-adjust: 100%;
	  -ms-text-size-adjust: 100%;
	}
	body {
	  margin: 0;
	}
	a:focus {
	  outline: thin dotted;
	}
	a:active,
	a:hover {
	  outline: 0;
	}
	h1 {
	  font-size: 2em;
	}
	abbr[title] {
	  border-bottom: 1px dotted;
	}
	b,
	strong {
	  font-weight: bold;
	}
	dfn {
	  font-style: italic;
	}
	mark {
	  background: #ff0;
	  color: #000;
	}
	code,
	kbd,
	pre,
	samp {
	  font-family: monospace, serif;
	  font-size: 1em;
	}
	pre {
	  white-space: pre-wrap;
	  word-wrap: break-word;
	}
	q {
	  quotes: "\201C" "\201D" "\2018" "\2019";
	}
	small {
	  font-size: 80%;
	}
	sub,
	sup {
	  font-size: 75%;
	  line-height: 0;
	  position: relative;
	  vertical-align: baseline;
	}
	sup {
	  top: -0.5em;
	}
	sub {
	  bottom: -0.25em;
	}
	img {
	  border: 0;
	}
	svg:not(:root) {
	  overflow: hidden;
	}
	figure {
	  margin: 0;
	}
	fieldset {
	  border: 1px solid #c0c0c0;
	  margin: 0 2px;
	  padding: 0.35em 0.625em 0.75em;
	}
	legend {
	  border: 0;
	  padding: 0;
	}
	button,
	input,
	select,
	textarea {
	  font-family: inherit;
	  font-size: 100%;
	  margin: 0;
	}
	button,
	input {
	  line-height: normal;
	}
	button,
	html input[type="button"],
	input[type="reset"],
	input[type="submit"] {
	  -webkit-appearance: button;
	  cursor: pointer;
	}
	button[disabled],
	input[disabled] {
	  cursor: default;
	}
	input[type="checkbox"],
	input[type="radio"] {
	  box-sizing: border-box;
	  padding: 0;
	}
	input[type="search"] {
	  -webkit-appearance: textfield;
	  -moz-box-sizing: content-box;
	  -webkit-box-sizing: content-box;
	  box-sizing: content-box;
	}
	input[type="search"]::-webkit-search-cancel-button,
	input[type="search"]::-webkit-search-decoration {
	  -webkit-appearance: none;
	}
	button::-moz-focus-inner,
	input::-moz-focus-inner {
	  border: 0;
	  padding: 0;
	}
	textarea {
	  overflow: auto;
	  vertical-align: top;
	}
	table {
	  border-collapse: collapse;
	  border-spacing: 0;
	}
	html {
	  font-family: 'microsoft yahei', sans-serif;
	}
	pre,
	code {
	  font-family: 'monaco', 'microsoft yahei', sans-serif;
	}
	h1,
	h2,
	h3,
	h4,
	h5,
	h6 {
	  font-family: 'microsoft yahei', sans-serif;
	  font-weight: 700;
	}
	html {
	  background-color: #002b36;
	  color: #839496;
	  margin: 1em;
	}
	code {
	  background-color: #073642;
	  padding: 2px;
	}
	a {
	  color: #b58900;
	}
	a:visited {
	  color: #cb4b16;
	}
	a:hover {
	  color: #cb4b16;
	}
	h1 {
	  color: #d33682;
	}
	h2,
	h3,
	h4,
	h5,
	h6 {
	  color: #859900;
	}
	pre {
	  background-color: #002b36;
	  color: #839496;
	  border: 1pt solid #586e75;
	  padding: 1em;
	  box-shadow: 5pt 5pt 8pt #073642;
	}
	pre code {
	  background-color: #002b36;
	}
	h1 {
	  font-size: 2.8em;
	}
	h2 {
	  font-size: 2.4em;
	}
	h3 {
	  font-size: 1.8em;
	}
	h4 {
	  font-size: 1.4em;
	}
	h5 {
	  font-size: 1.3em;
	}
	h6 {
	  font-size: 1.15em;
	}
	.tag {
	  background-color: #073642;
	  color: #d33682;
	  padding: 0 0.2em;
	}
	.todo,
	.next,
	.done {
	  color: #002b36;
	  background-color: #dc322f;
	  padding: 0 0.2em;
	}
	.tag {
	  -webkit-border-radius: 0.35em;
	  -moz-border-radius: 0.35em;
	  border-radius: 0.35em;
	}
	.TODO {
	  -webkit-border-radius: 0.2em;
	  -moz-border-radius: 0.2em;
	  border-radius: 0.2em;
	  background-color: #2aa198;
	}
	.NEXT {
	  -webkit-border-radius: 0.2em;
	  -moz-border-radius: 0.2em;
	  border-radius: 0.2em;
	  background-color: #268bd2;
	}
	.ACTIVE {
	  -webkit-border-radius: 0.2em;
	  -moz-border-radius: 0.2em;
	  border-radius: 0.2em;
	  background-color: #268bd2;
	}
	.DONE {
	  -webkit-border-radius: 0.2em;
	  -moz-border-radius: 0.2em;
	  border-radius: 0.2em;
	  background-color: #859900;
	}
	.WAITING {
	  -webkit-border-radius: 0.2em;
	  -moz-border-radius: 0.2em;
	  border-radius: 0.2em;
	  foreground-color: #cb4b16;
	}
	.HOLD {
	  -webkit-border-radius: 0.2em;
	  -moz-border-radius: 0.2em;
	  border-radius: 0.2em;
	  foreground-color: #d33682;
	}
	.NOTE {
	  -webkit-border-radius: 0.2em;
	  -moz-border-radius: 0.2em;
	  border-radius: 0.2em;
	  foreground-color: #d33682;
	}
	.CANCELLED {
	  -webkit-border-radius: 0.2em;
	  -moz-border-radius: 0.2em;
	  border-radius: 0.2em;
	  foreground-color: #859900;
	}
	</style>
</head>
<body>
<?php
$htmls_all = glob("html/*");
foreach ($htmls_all as $html) {
	$html_file = basename($html);
	echo "<li><a href=\"" . $_SERVER["PHP_SELF"] . "?file=$html_file\">$html_file</a>";
	echo "&nbsp;<a href=\"html/$html_file\">&dagger;</a></li>";
}
if (!empty($_GET['file'])) {
	$file = $_GET["file"];
}
if (!empty($file)) {
	$file_full = "html/" . $file;
	if (file_exists($file_full)) {
		include ($file_full);
	} else {
		echo "file not found";
	}
}
?>
</body>
</html>