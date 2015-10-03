<!DOCTYPE html>
<html lang="en">
<head>
<meta charset=utf-8 />
<title>{$title}</title>

<!-- this link will be substituted with the right path : href="THEMES/acid/style.css" -->
<link href="style.css" type="text/css" rel="stylesheet" >
</head>
<body>
	<!-- this img  will be substituted with the right path : src="THEMES/acid/images.gif" -->
	<div id="logo"><a href="http://www.raintpl.com"><img src="img/logo.gif"></a></div>


	<!-- content -->
	<div id="content">

		<h2>Variable example</h2>
		<div class="layout">

			<h3>Variable example</h3>
			<!-- all code between noparse tags is not compiled -->
			<tt>variable <b>{$variable}</b></tt>

			<br/><br/>
			<h3>Variable assignment</h3>
			<tt>assignment {$number=10} and print {$number}</tt>

			<br/><br/>
			<h3>Variable Modifiers</h3>
			<tt>
				{$variable|strlen}<br/>
				{$variable|substr:0,7}<br/>
			</tt>

			<br/><br/>
			<h3>Global variables</h3>
			<tt>The variable is declared as global into the PHP {$GLOBALS.global_variable}</tt>
			<br/><br/>

			<h3>Show all declared variables</h3>
			To show all declared variable use.<br/><br/>
			<tt>
				{$this->var|print_r}
			</tt>
			<br/><br/>

		</div>

		<h2>Constants</h2>
		<div class="layout">
			<h3>Constant</h3>
			<tt>Constant: {#true#}</tt>

			<br/><br/>
			<h3>Modier on constant as follow</h3>
			<tt>{#PHP_VERSION|strlen|round|count}</tt>
		</div>

		<h2>Loop example</h2>
		<div class="layout">
			<h3>Simple loop example</h3>
			<tt>
			<ul>
			{loop="$week"}
				<li>{$key} = {$value}</li>
			{/loop}
			</ul>
			</tt>

			<br/><br/>

			<h3>Loop example with associative array</h3>
			<tt>
			<ul>
				<li>ID _ Name _ Color</li>
				{loop="$user"}
					<li class="color{$counter%2+1}">{$key}) - {$value.name|strtoupper} - {$value.color}</li>
				{/loop}
			</ul>
			</tt>

			<br/><br/>

			<h3>Loop an empty array</h3>
			<tt>
			<ul>
				{loop="$empty_array"}
					<li class="color{$counter%2+1}">{$key}) - {$value.name} - {$value.color}</li>
				{else}
					<b>The array is empty</b>
				{/loop}
			</ul>
			</tt>

		</div>

		<h2>If Example</h2>
		<div class="layout">

			<h3>simple if example</h3>
			<tt>
			{if="$number==10"}OK!
			{else}NO!{/if}
			</tt>

			<br/><br/>

			<h3>example of if, elseif, else example</h3>
			<tt>
			{if="substr($variable,0,1)=='A'"}First character is A
			{elseif="substr($variable,0,1)=='B'"}First character is B
			{else}First character of variable is not A neither B
			{/if}
			</tt>

		</div>

		<h2>Custom function</h2>
			<div class="layout">
				<tt>{@message@}</tt>
			</div>
		</h2>

		<h2>Path Replace (WYSIWYG)</h2>
		<div class="layout">

			<h3>WYSIWYG</h3>

			RainTPL replaces relative paths of images, css and links automatically with the correct server paths.
			<br/><br/>

			<h3>Path replace on relative path of image</h3>
			into the template the image is wrote as:
			<code>&lt;img src="img/logo.gif" alt="logo"/&gt;</code>
			in the compiled template the path is replaced with the correct path <b>tpl/img/logo.gif</b>:<br/>
			<img src="img/logo.gif" alt="logo"/>
			<br/><br/><br/>
			<b>Absolute paths and path ending with # are not replaced</b>
			<br/><br/>For more info read the documentation:
			<tt><a href="http://www.raintpl.com/Documentation/Documentation-for-web-designers/WYSIWYG/">http://www.raintpl.com/Documentation/Documentation-for-web-designers/WYSIWYG/</a></tt>


		</div>

	</div>

	<div id="footer">{$copyright}</div>

</body>
</html>