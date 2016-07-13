<!doctype html>
<html lang="en">
<head>

	<?php
	$colors = ['default','primary','secondary','warning','error','success','info'];
	$sizes = ['small','default','medium','big'];
	function rand_color() {
		global $colors;
		return $colors[rand(0,count($colors)-1)];
	}
	?>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

	<link href="assets/css/loaders.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/components.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/style.css" s-domready-dependency rel="stylesheet" type="text/css" />
	<link href="assets/css/grid.css" rel="stylesheet" type="text/css" />

	<script src="assets/js/angular-demo.js"></script>

	<title>Sugar - Demo</title>

</head>
<body>

	<label id="author-toggle" for="author">
		<i class="fa-user"></i>
	</label>

	<label id="menu-toggle" for="menu">
		<i class="fa-bars"></i>
	</label>

	<label id="author-toggle" for="author">
	<i class="fa-user"></i>
</label>

<label id="menu-toggle" for="menu">
	<i class="fa-bars"></i>
</label>

<div data-s-drawer="menu" active-class="coco" class="typeset vertical-rhythme">

	<h3>
		<strong>SUGAR</strong><span class="c-orange--dark">{.SCSS}</span>
	</h3>
	<ul class="list--menu">
		<li class="list__item">
			<a href="#vertical-rhythme">Vertical Rhythme</a>
		</li>
		<li class="list__item">
			<a href="#mixins">Mixins</a>
		</li>
		<li class="list__item">
			<a href="#bubbles">Fu%&!* bubbles</a>
		</li>
		<li class="list__item">
			<a href="#loaders">Loaders</a>
		</li>
		<li class="list__item">
			<a href="#motion-blur">Motion blur</a>
		</li>
		<li class="list__item">
			<a href="#gooey">Gooey</a>
		</li>
		<li class="list__item">
			<a href="#packages">Cool packages</a>
		</li>
		<li class="list__item">
			<a href="http://sugarcss.io" target="_blank">Many more!</a>
		</li>
	</ul>

</div>

<div data-s-drawer="author" class="typeset vertical-rhythme">
	
	<div class="avatar m-b-small" style="width:100px; height:100px"></div>

	<h2 class="h2">
		Olivier Bossel
	</h2>
	<p>
		Passionate interactive web designer from Switzerland. <br />
		To be always in research of new design trends, technologies and user interaction is my primary motivation. <br />
		The web community is moving so fast and being up to date is a daily job. THIS is where my passion for this domain come from. I'm an eternal dissatisfied and this is what makes me push each project at the limit and never give up on challenges.
	</p>

	<a class="btn btn--block btn--orange--dark" href="http://olivierbossel.com" target="_blank">
		<i class="fa-home"></i> &nbsp;&nbsp;Website
	</a>
	<a class="btn btn--block btn--orange--dark" href="https://ch.linkedin.com/in/olivierbossel" target="_blank">
		<i class="fa-linkedin"></i> &nbsp;&nbsp;Find me on linkedIn
	</a>
	<a class="btn btn--block btn--orange--dark" href="https://github.com/olivierbossel/sugar" target="_blank">
		<i class="fa-github"></i> &nbsp;&nbsp;Find me on github
	</a>
	<a class="btn btn--block btn--orange--dark" href="http://twitter.com/olivierbossel" target="_blank">
		<i class="fa-twitter"></i> &nbsp;&nbsp;Follow me on twitter
	</a>
	<a class="btn btn--block btn--orange--dark" href="http://sugarcss.io/#help" target="_blank">
		<i class="fa-beer"></i> &nbsp;&nbsp;Offer me a beer!
	</a>


</div>

	<div data-s-drawer-content>

		<section id="top-bar">
	
	<div class="container">
		
		<div class="row">
			<div class="gr-12">
				<ul class="list list--top-bar pull-left">
					<li class="list__item">
						<a href="./">
							<span class="bold">SUGAR</span>{.SCSS}
						</a>
					</li>
					<li class="list__item">
						<div class="dropdown">
							<div class="dropdown__label">
								Core
							</div>
							<ul class="dropdown__menu">
								<li class="dropdown__item">
									<a href="./core.html#syntax">
										Syntax
									</a>
								</li>
								<li class="dropdown__item">
									<a href="./core.html#colors">
										Colors management
									</a>
								</li>
								<li class="dropdown__item">
									<a href="./core.html#transitions-filters">
										Transitions & filters
									</a>
								</li>
								<li class="dropdown__item">
									<a href="./core.html#classes">
										Classes
									</a>
								</li>
								<li class="dropdown__item">
									<a href="./core.html#mixins">
										Mixins
									</a>
								</li>
								<li class="dropdown__item">
									<a href="./core.html#functions">
										Functions
									</a>
								</li>
								
							</ul>
						</div>
					</li>

					<li class="list__item">
						<div class="dropdown dropdown--medium">
							<div class="dropdown__label">
								Typo
							</div>
							<ul class="dropdown__menu">
								<li class="dropdown__item">
									<a href="./typo.html#base">
										Base
									</a>
								</li>
								<li class="dropdown__item">
									<a href="./typo.html#fonts">
										Fonts
									</a>
								</li>
								<li class="dropdown__item">
									<a href="./typo.html#vertical-rhythme">
										Vertical rhythme
									</a>
								</li>
							</ul>
						</div>
					</li>
					
					<li class="list__item">
						<div class="dropdown dropdown--big">
							<div class="dropdown__label">
								Layout
							</div>
							<ul class="dropdown__menu">
								<li class="dropdown__item">
									<a href="./layout.html#sizes">
										Sizes
									</a>
								</li>
								<li class="dropdown__item">
									<a href="./layout.html#spaces">
										Spaces
									</a>
								</li>
								<li class="dropdown__item">
									<a href="./layout.html#look-and-feel">
										Look and feel
									</a>
								</li>
							</ul>
						</div>
					</li>

								

					<li class="list__item">
						<div class="dropdown dropdown--bigger">
							<div class="dropdown__label">
								Components
							</div>
							<ul class="dropdown__menu">
								<li class="dropdown__item">
									<a href="#">
										Drawer
									</a>
								</li>
								<li class="dropdown__item">
									<a href="#">
										Dropdown
									</a>
								</li>
								<li class="dropdown__item">
									<a href="./typeset.html">
										Typeset
									</a>
								</li>
								<li class="dropdown__item">
									<a href="#">
										Bootstrap
									</a>
								</li>
								<li class="dropdown__item">
									<a href="#">
										Foundation
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="list__item">
						<div class="dropdown dropdown--bigger">
							<div class="dropdown__label">
								Effects
							</div>
							<ul class="dropdown__menu">
								<li class="dropdown__item">
									<a href="#">
										Motion blur
									</a>
								</li>
								<li class="dropdown__item">
									<a href="#">
										Gooey
									</a>
								</li>
							</ul>
						</div>
					</li>
				</ul>
				<ul class="list list--top-bar pull-right">
					<li class="list__item">
						<a href="http://sugarcss.io" title="Sugar - Full documentation" target="_blank">
							Full documentation
						</a>
					</li>
				</ul>
			</div>

		</div>

	</div>

</section>

		<section id="header">

			<div class="container">

				<div class="row">

					<div class="gr-12">
						<h1 class="h1"><strong>Sugar</strong><span class="c-orange">{.scss}</span></h1>
						<h2 class="h2">Writing SCSS has <span class="c-orange">never tasted better!</span></h2>
					</div>

				</div>

			</div>

		</section>


<section class="section bkg-grey--light" id="typeset">

	<div class="container typeset vertical-rhythme">

		<div class="row">

			<div class="gr-12">
				
				<h3>Typeset</h3>

				<p class="lead">
					The sugar button component allows you to access a full stack a buttons that depends on your settings.
				</p>

<pre><code class="language-scss">// print out the buttons css
@include s-button();
</code></pre>

				<p>
					<a class="btn" href="http://sugarcss.io/documentation#button">
						Full button documentation
					</a>
				</p>

			</div>

		</div>

	</div>

</section>

<section class="section typeset vertical-rhythme show-rhythme" id="typography" data-toggle-baseline-class data-toggle-rhythme-class>

	<div class="container">

		<div class="row">

			<div class="gr-12">
				
				<a data-toggle-rhythme class="pull-right active">
					<i class="fa-check"></i> Toggle rhythme
				</a>
				<a data-toggle-baseline class="pull-right">
					<i class="fa-bars"></i> Toggle baseline
				</a>
				
				<h4>Dropdown buttons</h4>				

				<div class="dropdown">
					<button class="btn">My cool button  
						<i class="fa-caret-down"></i>
					</button>
					<ul class="dropdown__menu no-typeset no-vertical-rhythme">
						<li class="dropdown__item">
							<a href="./core.html#syntax">
								Syntax
							</a>
						</li>
						<li class="dropdown__item">
							<a href="./core.html#colors">
								Colors management
							</a>
						</li>
						<li class="dropdown__item">
							<a href="./core.html#transitions-filters">
								Transitions & filters
							</a>
						</li>
						<li class="dropdown__item">
							<a href="./core.html#classes">
								Classes
							</a>
						</li>
						<li class="dropdown__item">
							<a href="./core.html#mixins">
								Mixins
							</a>
						</li>
						<li class="dropdown__item">
							<a href="./core.html#functions">
								Functions
							</a>
						</li>
						
					</ul>
				</div>

				<h4>Buttons</h4>

				<button class="btn"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--primary"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--secondary"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--success"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--warning"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--error"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--info"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--link"><i class="fa-user"></i> My cool button</button>

				<h4>Outline</h4>
				
				<button class="btn btn--outline"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--primary btn--outline"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--secondary btn--outline"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--success btn--outline"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--warning btn--outline"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--error btn--outline"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--info btn--outline"><i class="fa-user"></i> My cool button</button>

				<h4>Small</h4>
				
				<button class="btn btn--small"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--primary btn--small"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--secondary btn--small"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--success btn--small"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--warning btn--small"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--error btn--small"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--info btn--small"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--link btn--small"><i class="fa-user"></i> My cool button</button>

				<h4>Default</h4>
				
				<button class="btn"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--primary"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--secondary"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--success"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--warning"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--error"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--info"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--link"><i class="fa-user"></i> My cool button</button>

				<h4>Medium</h4>
				
				<button class="btn btn--medium"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--primary btn--medium"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--secondary btn--medium"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--success btn--medium"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--warning btn--medium"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--error btn--medium"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--info btn--medium"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--link btn--medium"><i class="fa-user"></i> My cool button</button>

				<h4>Big</h4>
				
				<button class="btn btn--big"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--primary btn--big"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--secondary btn--big"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--success btn--big"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--warning btn--big"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--error btn--big"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--info btn--big"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--link btn--big"><i class="fa-user"></i> My cool button</button>

				<h4>Bigger</h4>
				
				<button class="btn btn--bigger"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--primary btn--bigger"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--secondary btn--bigger"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--success btn--bigger"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--warning btn--bigger"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--error btn--bigger"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--info btn--bigger"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--link btn--bigger"><i class="fa-user"></i> My cool button</button>

				<h4>Disabled</h4>
				
				<button class="btn" disabled><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--primary" disabled><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--secondary" disabled><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--success" disabled><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--warning" disabled><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--error" disabled><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--info" disabled><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--link" disabled><i class="fa-user"></i> My cool button</button>

				<h4>Block</h4>
				
				<button class="btn btn--block"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--primary btn--block"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--secondary btn--block"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--success btn--block"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--warning btn--block"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--error btn--block"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--info btn--block"><i class="fa-user"></i> My cool button</button>
				<button class="btn btn--link btn--block"><i class="fa-user"></i> My cool button</button>

				<h4>Button group</h4>

				<div class="btn-group">
					<button class="btn btn--medium">Button 01</button>
					<button class="btn btn--medium">Button 02</button>
					<button class="btn btn--medium">Button 03</button>
					<button class="btn btn--medium">Button 04</button>
				</div>

				<h4>Radio buttons</h4>
				<div class="btn-group">
					<input type="radio" name="btn-radio" id="btn-radio-1">
					<label for="btn-radio-1" class="btn btn--medium btn--primary">Button 01</label>
					<input type="radio" name="btn-radio" id="btn-radio-2">
					<label for="btn-radio-2" class="btn btn--medium btn--primary">Button 02</label>
					<input type="radio" name="btn-radio" id="btn-radio-3">
					<label for="btn-radio-3" class="btn btn--medium btn--primary">Button 03</label>
					<input type="radio" name="btn-radio" id="btn-radio-4">
					<label for="btn-radio-4" class="btn btn--medium btn--primary">Button 04</label>	
				</div>

				<h4>Checkbox buttons</h4>
				<div class="btn-group">
					<input type="checkbox" name="btn-checkbox" id="btn-checkbox-1">
					<label for="btn-checkbox-1" class="btn btn--medium">Button 01</label>
					<input type="checkbox" name="btn-checkbox" id="btn-checkbox-2">
					<label for="btn-checkbox-2" class="btn btn--medium">Button 02</label>
					<input type="checkbox" name="btn-checkbox" id="btn-checkbox-3">
					<label for="btn-checkbox-3" class="btn btn--medium">Button 03</label>
					<input type="checkbox" name="btn-checkbox" id="btn-checkbox-4">
					<label for="btn-checkbox-4" class="btn btn--medium">Button 04</label>	
				</div>

				<!-- <hr> -->

			</div>

		</div>

	</div>

</section>

	</div>

	<div style="width:100px;height:3000px;background:red;">

	</div>

	<a id="coco" href="#" class="btn">
		Coco
	</a>

	<a href="#" class="top">
		<i class="fa-arrow-up"></i>
	</a>

	<script>
	sugar.SActivateComponent.setup('nested', {
		history : false
	});

	sugar.sLocalStorageFonts.init({
		json_path : './assets/fonts/fonts.json#2.2',
		debug : true
	});
	// if (/^((?!chrome|android).)*safari/i.test(navigator.userAgent)) {
	// 	sugar.motionblur.enabled = false;
	// 	sugar.gooey.enabled = false;
	// }
	</script>

	<script src="http://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script>

	<script type="text/javascript">

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-70303780-1']);
		_gaq.push(['_trackPageview']);

		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

	</script>

</body>
</html>
