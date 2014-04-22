<?php

if (!isset($TEMPLATE)) {
	$TITLE = 'Test Webpage';
	$NAVIGATION = true;
	$HEAD = '
		<link rel="stylesheet" href="/css/figcaption.css"/>
		<link rel="stylesheet" href="/css/references.css"/>
		<link rel="stylesheet" href="/css/jumplist.css"/>
	';
	$FOOT = '<script src="/js/index.js"></script>';
	

	include('template.inc.php');
}
?>


<p>Jumplist:</p>

<div id='jumpnav'>
  <a href="#aheader">A Header</a>
| <a href="#another">Another</a>
</div>

<h2>An H2 Header</h2>

<figure class="right">
  <img src="images/st-tropez.jpg" alt="St Tropez"/>
  <figcaption>The caption is here.</figcaption>
</figure>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<h3>An H3 Header</h3>
content
content
content
content
content
content
content
content
content
content
content
content
content
content
content
content
content
content
content
content
content
content
content
content
content
content
content
content
content

<a name="aheader"></a>

<h4>An H4 Header</h4>

<figure>
  <img src="images/st-tropez.jpg" alt="St Tropez"/>
  <figcaption>The caption is here.</figcaption>
</figure>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<a name="another"></a>

<h2>Another H2 Header</h2>

<div class="row">
    <div class="column one-of-two"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<table class="tabular">
	<tr>
		<td>first row, first column</td>
		<td>first row, second column</td>
	</tr>
	<tr>
		<td>second row, first column</td>
		<td>second row, second column</td>
	</tr>
	</tr>
</table>

	</div>
    <div class="column one-of-two"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
</div>

<h2>References</h2>
<ul class='referencelist'>
  <li>Reference 1 - showing that the format is in bibliography style where the second line is indented. Wald et al., Some really long paper title about a very obscure topic in seismology, some scientific journal, series number, date.</li>
  <li>Reference 2</li>
</ul>


