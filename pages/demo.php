{HEAD}

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

<section class="section">

	<div class="container">
		
		<div class="row typeset vertical-rhythme show-rhythme">

			<div class="gr-12">
				<div class="loader-1"></div>
				<p class="lead">
					Sugar is build around it's core features which are described bellow. It allows you to manage efficiently your colors, fonts, transitions, filters as well as giving you access to a lot of very useful mixins and function that will dramatically speed up your development process.
				</p>
				<p>
					This page is just a quick overview of the sugar features. This is not a replacement for the official documentation that you can find <a href="http://sugarcss.io" target="_blank">here</a>
				</p>
			</div>
		
		</div>

	</div>

</section>

<section id="syntax" class="section bkg-grey--light">

	<div class="container">
		
		<div class="row typeset vertical-rhythme" data-toggle-rhythme-class>

			<div class="gr-12">
				
				<h3>Syntax</h3>

				<p>
					Sugar use a special but very powerful syntax for mixins and functions. Don't be afraid, it's something that you use every single day already!
				</p>

<pre><code class="language-scss">// write this
h1 {
@include s-font(22px helvetica uppercase underline);
}
// instead of this
h1 {
font-size: 22px;
font-family: helvetica;
text-transform: uppercase;
text-decoration: underline;
}
</code></pre>

			<p>
				<a class="btn" href="http://sugarcss.io/documentation#syntax">
					Full syntax documentation
				</a>
			</p>

			</div>

		</div>

	</div>

</section>

<section id="colors" class="section">

	<div class="container">
		
		<div class="row typeset vertical-rhythme" data-toggle-rhythme-class>

			<div class="gr-12">
				
				<h3>Colors management</h3>

				<p>
					In a large project, it became hard to manage your colors efficiently. Sugar gives you a nice structure and functions to handle that.
				</p>

<pre><code class="language-scss">// setup your colors
@include s-setup((
colors : (
primary : (
	color : #ff0000,
	modifiers : (
		light : -lighten 20%,
		dark : -darken 10%
	)
),
// etc...
)
));

// then use your colors
h1 {
color : s-color(primary);

// specify a modifier to use
color : s-color(primary, light);

// custom modifier
color : s-color(primary, -saturate 10% -opacity .2);
}
</code></pre>

				<p>
					Sugar comes with some default colors names that you can use if you want. It follow the bootstrap and foundation conventions in order to make easier the integration with these frameworks and to reduce confusion between projects. If you use these names, you will always know between projects which color name you want.
				</p>

<pre><code class="language-scss">// default colors names to use
colors : (
default		: ..., // the global default color
primary		: ..., // the primary color that describe your identity
secondary	: ..., // a secondary color that describe your identity if needed
text 		: default, // the color used for your texts
link 		: primary, // the color used for your links
success 		: ..., // a color for the success items
warning 		: ..., // a color for the warning items
error 		: ..., // a color for the error items
info 		: ..., // a color for the info items
// some others colors you need
)
</code></pre>

				<p>
					<a class="btn" href="http://sugarcss.io/documentation#syntax">
						Full colors documentation
					</a>
				</p>

			</div>

		</div>

	</div>

</section>

<section id="others" class="section">

	<div class="container">
		
		<div class="row typeset vertical-rhythme" data-toggle-rhythme-class>

			<div class="gr-12">
				
				<h3>Transition & filters</h3>
				
				<p>
					As for the colors, you will have some nice utilitises to manage your transitions and filters
				</p>

<pre><code class="language-scss">// setup your transitions and filters
@include s-setup((
transitions : (
duration : .2s,
transitions : (
	fast : all .2s ease-in-out,
	slow : all 1s ease-out
)
),
filters : (
shadow : -box-shadow rgba(0,0,0,.3) 0 0 10px,
// etc...
)
));

// then use your filters and colors
.my-cool-element {
@include s-filter(shadow);

// custom filter
@include s-filter(-contrast 20%);

// transition
@include s-transition(fast);

// custom transition
@include s-transition(all); // will take default duration and easing in settings
}
</code></pre>
				
				<p>
					<a class="btn" href="http://sugarcss.io/documentation#transitions">
						Full transitions documentation
					</a>
					<a class="btn" href="http://sugarcss.io/documentation#filters">
						Full filters documentation
					</a>
				</p>

			</div>

		</div>

	</div>

</section>

<section id="sizes" class="section">

	<div class="container">
		
		<div class="row typeset vertical-rhythme" data-toggle-rhythme-class>

			<div class="gr-12">
				
				<h3>Sizes</h3>

				<p>
					Like the colors management, the differents margins, paddings, button sizes, and all the others spaces that you use in your integration are very painfull to handle and to maintain. Sugar comes with a nice way to manage this. That's called "sizes".
				</p>

<pre><code class="language-scss">// setting up your sizes
@include s-setup((
sizes : (
smaller 			: 1/4,
small 			: 1/2,
default 			: 1,
medium 			: 1.5,
big 			: 2,
bigger 			: 2.5
)
));
// note that the sizes are ratios
// small will be 1/2 of the default
</code></pre>

				<p>
					These sizes ratios tells how to scale your differents values. Some of the internal Sugar functions and mixins are using these ratios but you can also use them through the s-ratio function like this
				</p>

<pre><code class="language-scss">// pass my value through the ratio bigger
$my-var : s-size(10, bigger); // 25
</code></pre>
				
				<p>
					<a class="btn" href="http://sugarcss.io/documentation#sizes">
						Full sizes documentation
					</a>
				</p>

			</div>

		</div>

	</div>

</section>

<section id="look-and-feel" class="section">

	<div class="container">
		
		<div class="row typeset vertical-rhythme" data-toggle-rhythme-class>

			<div class="gr-12">
				
				<h3>Look and feel</h3>

				<p>
					The look and feel module has for goal to describe the basic display properties for your elements (buttons, inputs, etc...). By setting these properties and using them across your integration, you will be able to change them later and keep a coherent display in your website.
				</p>

<pre><code class="language-scss">// setting up your look and feel
@include s-setup((
look-and-feel : (
default 	: ( // for the default size
	border-radius 		: 3px,
	padding-vertical 	: 0.5rem,
	padding-horizontal 	: 0.7rem
)
)
));
</code></pre>

				<p>
					You can then use these settings through your code like this
				</p>

<pre><code class="language-scss">// creating buttons
@each $size in sugar('settings.sizes') {
.button-#{$size} {
padding : s-look-and-feel(padding-vertical, $size) s-look-and-feel(padding-horizontal, $size);
border-radius: s-look-and-feel(border-radius, $size);
// etc...
}
}
// creating inputs
// ...
</code></pre>		

				<p>
					<a class="btn" href="http://sugarcss.io/documentation#look-and-feel">
						Full look and feel documentation
					</a>
				</p>

			</div>

		</div>

	</div>

</section>

<section id="spaces" class="section">

	<div class="container">
		
		<div class="row typeset vertical-rhythme" data-toggle-rhythme-class>

			<div class="gr-12">
				
				<h3>Spaces</h3>
					
				<p>
					The spaces in Sugar let you store some spaces values that you will use as paddings, margins, or whatever you want in your layout.
				</p>
				<p>
					The difference between spaces and your look and feel settings is that the look and feel take place for your items like inputs, buttons, etc, and your spaces for the layout parts as your section paddings, etc...
				</p>

<pre><code class="language-scss">// setting up your spaces
@include s-setup((
spaces : (
default : 2rem, // this one is required
bigger : 10rem // specify a special one for the bigger size
// the others will be interpolated with your sizes from the default one...
)
));
</code></pre>

				<p>
					<a class="btn" href="http://sugarcss.io/documentation#spaces">
						Full spaces documentation
					</a>
				</p>

			</div>

		</div>

	</div>

</section>

<section class="section" id="mixins">

	<div class="container typeset vertical-rhythme">

		<div class="row">

			<div class="gr-12">

				<h3>Mixins</h3>

				<p class="lead">
					Sugar comes with a lot of very cool mixins that allows to <strong>write less and do more</strong>. All of that based on the css properties you already knows and love.
				</p>

			</div>

			<div class="gr-6">

				<h4>s-font</h4>

				<p>
					Sugar gives you a nice mixin to set your font-family, text-transform, and all the font corresponding css properties.
				</p>

<pre><code class="language-scss">h1 {
@include s-font(22px helvetica uppercase underline);
}
p {
@include s-font(16px capitalize nowrap keep-all);
}
</code></pre>

			</div>

			<div class="gr-6">

				<h4>s-media</h4>

				<p>
					The s-media is a helpful mixin to handle media queries
				</p>

<pre><code class="language-scss">.my-cool-element {
background: red;

@include s-media(chrome retina, webkit mobile) {
background: yellow;
}
}
</code></pre>

			</div>

			<div class="gr-12">

				<h3>And many more</h3>

				<p>
					Sugar gives you access to <strong>more than 25 mixins and a lot of cool functions</strong> to make your development process easier and a lot more fun!
				</p>

				<p>
					<a href="http://sugarcss.io/documentation#mixins-s-animation" target="_blank" class="btn">Full mixins documentation</a>
				</p>

			</div>

		</div>

	</div>

</section>

<section id="classes" class="section">

	<div class="container">
		
		<div class="row typeset vertical-rhythme" data-toggle-rhythme-class>

			<div class="gr-12">
				
				<h3>Classes</h3>
				
				<p>
					Sugar gives you access to some useful classes that depend on your settings like ratios, spaces, transitions, etc... All these classes are totally optional. If you don't want them it's ok. As Sugar has been built, it's just a little sugar in your coffee if you'd like...
				</p>

<pre><code class="language-scss">// generate the classes where you want
@include s-classes();
</code></pre>

				<div class="row">
					
					<div class="gr-4">
						
						<h4>Margins</h4>

<pre><code class="language-scss">// margin classes
.m-t-{space}
.m-r-{space}
.m-b-{space}
.m-l-{space}
.m-s-{space}
</code></pre>

					</div>

					<div class="gr-4">

						<h4>Paddings</h4>

<pre><code class="language-scss">// padding classes
.p-t-{space}
.p-r-{space}
.p-b-{space}
.p-l-{space}
.p-s-{space}
</code></pre>

					</div>

					<div class="gr-4">
						
						<h4>Texts</h4>

<pre><code class="language-scss">// texts classes
.text-uppercase
.text-lowercase
.text-justify
.text-left
// etc...
</code></pre>

					</div>

				</div>

				<p>
					And many more classes for transitions, animations, filters, etc...
				</p>

				<p>
					<a class="btn" href="http://sugarcss.io/documentation#classes">
						Full classes documentation
					</a>
				</p>

			</div>

		</div>

	</div>

</section>

<div data-toggle-baseline-class>

	<section id="vertical-rhythme" class="section bkg-grey--light show-rhythme">
	
		<div class="container">
			
			<div class="row typeset vertical-rhythme" data-toggle-rhythme-class>

				<div class="gr-12">
					<a data-toggle-rhythme class="pull-right active">
						<i class="fa-check"></i> Toggle rhythme
					</a>
					<a data-toggle-baseline class="pull-right">
						<i class="fa-bars"></i> Toggle baseline
					</a>

					<h3>Vertical rhythme</h3>

					<p class="lead">
						We all know as front-end developers that the vertical rhythme concept is nice, but sometimes it became hard to understand and implement. Sugar is here for you guys!
					</p>

				</div>

				<div class="gr-6">

					<h4>Title</h4>

					<figure>
						<img src="http://sugarcss.io/assets/img/highlight-bkg.jpg" />
					</figure>

					<p>
						In hac habitasse platea dictumst. Sed venenatis non massa ut vehicula. Vivamus gravida a nunc nec facilisis. Mauris tristique tellus dolor, vel interdum tortor congue laoreet. Mauris lobortis, tellus sit amet dictum fermentum, felis erat iaculis ex, sed luctus augue odio ut orci. Duis commodo.
					</p>

				</div>

				<div class="gr-6">

					<h4>Title</h4>

					<figure>
						<img src="http://sugarcss.io/assets/img/highlight-bkg.jpg" />
					</figure>

					<p>
						In hac habitasse platea dictumst. Sed venenatis non massa ut vehicula. Vivamus gravida a nunc nec facilisis. Mauris tristique tellus dolor, vel interdum tortor congue laoreet. Mauris lobortis, tellus sit amet dictum fermentum, felis erat iaculis ex, sed luctus augue odio ut orci. Duis commodo.
					</p>

				</div>

				<div class="gr-4">

					<h4>Title</h4>

					<figure>
						<img src="http://sugarcss.io/assets/img/highlight-bkg.jpg" />
					</figure>

					<p>
						In hac habitasse platea dictumst. Sed venenatis non massa ut vehicula. Vivamus gravida a nunc nec facilisis. Mauris tristique tellus dolor, vel interdum tortor congue laoreet. Mauris lobortis, tellus sit amet dictum fermentum, felis erat iaculis ex, sed luctus augue odio ut orci. Duis commodo.
					</p>

				</div>

				<div class="gr-4">

					<h4>Title</h4>

					<figure>
						<img src="http://sugarcss.io/assets/img/highlight-bkg.jpg" />
					</figure>

					<p>
						In hac habitasse platea dictumst. Sed venenatis non massa ut vehicula. Vivamus gravida a nunc nec facilisis. Mauris tristique tellus dolor, vel interdum tortor congue laoreet. Mauris lobortis, tellus sit amet dictum fermentum, felis erat iaculis ex, sed luctus augue odio ut orci. Duis commodo.
					</p>

				</div>

				<div class="gr-4">

					<h4>Title</h4>

					<figure>
						<img src="http://sugarcss.io/assets/img/highlight-bkg.jpg" />
					</figure>

					<p>
						In hac habitasse platea dictumst. Sed venenatis non massa ut vehicula. Vivamus gravida a nunc nec facilisis. Mauris tristique tellus dolor, vel interdum tortor congue laoreet. Mauris lobortis, tellus sit amet dictum fermentum, felis erat iaculis ex, sed luctus augue odio ut orci. Duis commodo.
					</p>

				</div>

			</div>

		</div>

	</section>

</div>

<section class="section bkg-grey--light" data-bypass-appear id="font-awesome">

	<div class="container typeset vertical-rhythme">

		<div class="row">

			<div class="gr-12">

				<h3>Fu%&!* bubbles made more than easy</h3>

				<p class="lead">
					Here's an exemple of one of the cool mixins that you can find in Sugar. The animate.css animation is also applied on each fuckin bubble hover state.
				</p>

				<div class="row">

					<div class="gr-3">
						<div class="bubble bubble-left-top">
							left top
						</div>
						<div class="bubble bubble-left-center">
							left center
						</div>
						<div class="bubble bubble-left-bottom">
							left bottom
						</div>
					</div>

					<div class="gr-3">
						<div class="bubble bubble-top-left">
							top left
						</div>
						<div class="bubble bubble-top-center">
							top center
						</div>
						<div class="bubble bubble-top-right">
							top right
						</div>
					</div>

					<div class="gr-3">
						<div class="bubble bubble-bottom-left">
							bottom left
						</div>
						<div class="bubble bubble-bottom-center">
							bottom center
						</div>
						<div class="bubble bubble-bottom-right">
							bottom right
						</div>
					</div>

					<div class="gr-3">
						<div class="bubble bubble-right-top">
							right top
						</div>
						<div class="bubble bubble-right-center">
							right center
						</div>
						<div class="bubble bubble-right-bottom">
							right bottom
						</div>
					</div>


				</div>

<pre><code class="language-scss">
.bubble {
@include s-bubble(s-color(orange) 10px, s-color(orange, -darken 15%) 2px) {

&.bubble-top-left {
@include s-bubble(top left);
}
&.bubble-top-right {
@include s-bubble(top right);
}
// etc...
}
</code></pre>

			</div>

		</div>

	</div>

</section>

<section class="section" id="font-awesome">

	<div class="container typeset vertical-rhythme">

		<div class="row">

			<div class="gr-12">

				<h3>Single element loaders with ease!</h3>

				<p class="lead">
					Sugar has some very cool mixins to create fully customizable <strong>single element</strong> loaders. Here's some exemple
				</p>

				<div class="row read-more" style="max-height:450px;" id="loaders">
					
					<div class="gr-3">
						<div class="loader-container loader-container--white">
							<div class="loader">
								<div class="loader--rotate">
									<div class="loader-flip-ball-1"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container loader-container--white">
							<div class="loader">
								<div class="loader-bars-8"></div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container loader-container--white">
							<div class="loader">
								<div class="loader-couch-potato-1"></div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container loader-container--white">
							<div class="loader">
								<div class="loader-flip-ball-3"></div>
							</div>
						</div>
					</div>

					<div class="gr-3">
						<div class="loader-container">
							<div class="loader">
								<div class="loader-spinner-1"></div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container">
							<div class="loader">
								<div class="loader-spinner-2"></div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container">
							<div class="loader">
								<div class="loader-spinner-3"></div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container">
							<div class="loader">
								<div class="loader-spinner-4"></div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container">
							<div class="loader">
								<div class="loader-spinner-5"></div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container">
							<div class="loader">
								<div class="loader-spinner-6"></div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container">
							<div class="loader">
								<div class="loader-bars-1"></div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container">
							<div class="loader">
								<div class="loader-bars-2"></div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container">
							<div class="loader">
								<div class="loader-bars-3"></div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container">
							<div class="loader">
								<div class="loader-bars-4"></div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container">
							<div class="loader">
								<div class="loader-bars-5"></div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container">
							<div class="loader">
								<div class="loader-bars-6"></div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container">
							<div class="loader">
								<div class="loader-bars-7"></div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container loader-container--white">
							<div class="loader">
								<div class="loader-bars-8"></div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container">
							<div class="loader">
								<div class="loader-radial-1"></div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container">
							<div class="loader">
								<div class="loader-radial-2"></div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container">
							<div class="loader">
								<div class="loader-radial-3"></div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container loader-container--white">
							<div class="loader">
								<div class="loader-radial-4"></div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container">
							<div class="loader">
								<div class="loader-radial-5"></div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container">
							<div class="loader">
								<div class="loader-grid-1"></div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container">
							<div class="loader">
								<div class="loader-grid-2"></div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container">
							<div class="loader">
								<div class="loader-grid-3"></div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container">
							<div class="loader">
								<div class="loader-grid-4"></div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container">
							<div class="loader">
								<div class="loader-grid-5"></div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container loader-container--white">
							<div class="loader">
								<div class="loader-grid-7"></div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container loader-container--white">
							<div class="loader loader--shadow">
								<div class="loader-grid-8"></div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container">
							<div class="loader">
								<div class="loader-circle-1"></div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container">
							<div class="loader">
								<div class="loader-circle-2"></div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container">
							<div class="loader">
								<div class="loader-circle-3"></div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container">
							<div class="loader">
								<div class="loader-circle-4"></div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container">
							<div class="loader loader-blob">
								<div class="loader-circle-5"></div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container">
							<div class="loader">
								<div class="loader-circle-6"></div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container">
							<div class="loader">
								<div class="loader-circle-7"></div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container">
							<div class="loader">
								<div class="loader-couch-potato"></div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container loader-container--white">
							<div class="loader">
								<div class="loader-flip-ball"></div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container loader-container--white">
							<div class="loader">
								<div class="loader--rotate">
									<div class="loader-flip-ball-1"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container loader-container--white">
							<div class="loader">
								<div class="loader--rotate">
									<div class="loader-flip-ball-2"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container loader-container--white">
							<div class="loader">
								<div class="loader--rotate">
									<div class="loader-flip-ball"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="gr-3">
						<div class="loader-container loader-container--white">
							<div class="loader">
								<div class="loader-flip-ball-3"></div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="gr-12">
						<p class="text-center m-t-default">
							<a href="#loaders" class="btn hey">Show more samples...</a>
						</p>
					</div>
				</div>

			</div>

		</div>

	</div>

</section>

<section class="section bkg-grey--light" id="filters">

	<div class="container typeset vertical-rhythme">

		<div class="row">

			<div class="gr-12">

				<h3>Filters</h3>

				<p class="lead">
					Sugar has some very cool mixins to create fully customizable <strong>single element</strong> loaders. Here's some exemple
				</p>

			</div>

			<div class="gr-12">

				<h4 id="motion-blur">Motion blur</h4>

				<p style="padding:20px; border:1px solid white; border-radius:10px;" data-s-gradient data-s-gradient-colors="['blue','red']">
					Vivamus condimentum nulla magna, at semper nulla placerat et. Vivamus lorem augue, gravida non purus vitae, euismod accumsan felis. Nam hendrerit, purus id maximus interdum, sem ligula facilisis nibh, tempor.
					<br />
					<br />
					<button class="btn btn--outline btn--bigger">hello</button>
					<button class="btn btn--outline btn--bigger">hello</button>
					<button class="btn btn--outline btn--bigger">hello</button>
					<button class="btn btn--outline btn--bigger">hello</button>
					<button class="btn btn--outline btn--bigger">hello</button>
					<button class="btn btn--outline btn--bigger">hello</button>
					<button class="btn btn--outline btn--bigger">hello</button>
					<button class="btn btn--outline btn--bigger">hello</button>
				</p>
				
				<div class="row">

					<div class="gr-6">

						<h5>With motion blur</h5>
						<div data-s-motionblur="1" class="motion-box"></div>

					</div>

					<div class="gr-6">
			
						<h5>Without</h5>
						<div class="motion-box"></div>

					</div>

				</div>
				
<pre class="m-t-small"><code class="language-markup">&lt;div class="my-cool-moving-item" data-motion-blur&gt;
&lt;!-- anything you want here... --&gt;
&lt;/div&gt;
</code></pre>

			</div>
			
			<div class="gr-12">

				<h4>Slider motion blur</h4>

				<p>Vivamus condimentum nulla magna, at semper nulla placerat et. Vivamus lorem augue, gravida non purus vitae, euismod accumsan felis. Nam hendrerit, purus id maximus interdum, sem ligula facilisis nibh, tempor.</p>

				<h5>With motion blur <small class="c-orange">click to pass through slides</small></h5>
				
				<div class="m-b-default clearfix" data-slidizle>
					<ul data-slidizle-content data-motion-blur class="no-typeset no-vertical-rhythme">
						<li data-slidizle-item>
							<img src="http://i.telegraph.co.uk/multimedia/archive/01914/enchanted-abbey_1914053i.jpg" />
						</li>
						<li data-slidizle-item>
							<img src="http://m.c.lnkd.licdn.com/mpr/mpr/AAEAAQAAAAAAAAOWAAAAJDMyYzVlMDI1LTM2Y2MtNGQ3Mi1iNzBiLTE3NmYwMzZmMzNlZg.jpg" />
						</li>
						<li data-slidizle-item>
							<img src="http://soocurious.com/fr/wp-content/uploads/2012/07/landscape-photography-20.jpg?7bfc0a" />
						</li>
						<li data-slidizle-item>
							<img src="http://www.evasion.cc/assets/images/articles/717/53_708__cover.jpeg" />
						</li>
					</ul>
				</div>
			
				<h5>Without <small class="c-orange">click to pass through slides</small></h5>

				<div class="m-b-default clearfix" data-slidizle>
					<ul data-slidizle-content class="no-typeset">
						<li data-slidizle-item>
							<img src="http://i.telegraph.co.uk/multimedia/archive/01914/enchanted-abbey_1914053i.jpg" />
						</li>
						<li data-slidizle-item>
							<img src="http://m.c.lnkd.licdn.com/mpr/mpr/AAEAAQAAAAAAAAOWAAAAJDMyYzVlMDI1LTM2Y2MtNGQ3Mi1iNzBiLTE3NmYwMzZmMzNlZg.jpg" />
						</li>
						<li data-slidizle-item>
							<img src="http://soocurious.com/fr/wp-content/uploads/2012/07/landscape-photography-20.jpg?7bfc0a" />
						</li>
						<li data-slidizle-item>
							<img src="http://www.evasion.cc/assets/images/articles/717/53_708__cover.jpeg" />
						</li>
					</ul>
				</div>
				
<pre class="m-t-small"><code class="language-markup">&lt;div class="my-cool-moving-item" data-motion-blur&gt;
&lt;!-- anything you want here... --&gt;
&lt;/div&gt;
</code></pre>

			</div>

			<div class="gr-12">

				<h4 id="gooey">Gooey</h4>

				<p>Vivamus condimentum nulla magna, at semper nulla placerat et. Vivamus lorem augue, gravida non purus vitae, euismod accumsan felis. Nam hendrerit, purus id maximus interdum, sem ligula facilisis nibh, tempor.</p>

				<div class="row">

					<div class="gr-6">
						<div class="gooey-demo" data-s-gooey="10">
							<div class="gooey-animated-round"></div>
							<div class="gooey-round"></div>
							<div class="gooey-round"></div>
							<div class="gooey-round"></div>
							<div class="gooey-round"></div>
							<div class="gooey-round"></div>
						</div>

						<h5>With <br /><small class="c-orange">hover mouse to see the effect</small></h5>

					</div>
				
					<div class="gr-6">
						
						<div class="gooey-demo">
							<div class="gooey-animated-round"></div>
							<div class="gooey-round"></div>
							<div class="gooey-round"></div>
							<div class="gooey-round"></div>
							<div class="gooey-round"></div>
							<div class="gooey-round"></div>
						</div>

						<h5>Without gooey <br /><small class="c-orange">hover the mouse to see the effect</small></h5>

					</div>

				</div>

<pre><code class="language-markup">&lt;div class="my-cool-menu" data-s-gooey&gt;
&lt;!-- anything you want here... --&gt;
&lt;/div&gt;
</code></pre>
		
			</div>

		</div>

	</div>

</section>

<section class="section show-rhythme" id="typography" data-toggle-baseline-class>

	<div class="container typeset vertical-rhythme" data-toggle-rhythme-class>

		<div class="row">

			<div class="gr-12">
				
				<a data-toggle-rhythme class="pull-right active">
					<i class="fa-check"></i> Toggle rhythme
				</a>
				<a data-toggle-baseline class="pull-right">
					<i class="fa-bars"></i> Toggle baseline
				</a>

				<h3>Typeset</h3>

				<p class="lead">
					Sugar has some very cool mixins to create fully customizable <strong>single element</strong> loaders. Here's some exemple
				</p>

			</div>

			<div class="gr-12">

				<h4>Titles</h4>

				<h1>Nulla a diam id ante. <small class="c-grey">Etiam mollis tortor hendrerit.</small></h1> 
				<h2>Nulla a diam id ante. <small class="c-grey">Etiam mollis tortor hendrerit.</small></h2> 
				<h3>Nulla a diam id ante. <small class="c-grey">Etiam mollis tortor hendrerit.</small></h3> 
				<h4>Nulla a diam id ante. <small class="c-grey">Etiam mollis tortor hendrerit.</small></h4> 
				<h5>Nulla a diam id ante. <small class="c-grey">Etiam mollis tortor hendrerit.</small></h5> 
				<h6>Nulla a diam id ante. <small class="c-grey">Etiam mollis tortor hendrerit.</small></h6> 

				<!-- <hr> -->

				<h4>Paragraphs</h4>

				<p class="lead">
					Ut sit amet nibh eget sem feugiat facilisis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris non nisl lorem. Praesent tincidunt arcu non sapien elementum tempus eget ut metus. Aenean velit quam, cursus quis posuere a, euismod sit amet lacus. Curabitur lacinia tristique enim, et commodo sapien luctus sit amet. Cras non ligula quis mauris semper ultrices. Aliquam erat volutpat. Nam at fringilla orci. Nullam mauris orci, aliquet eu nulla in, finibus ornare neque. Aliquam sit amet dictum erat, at facilisis risus.
				</p>
				<p>
					Ut sit amet nibh eget sem feugiat facilisis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris non nisl lorem. Praesent tincidunt arcu non sapien elementum tempus eget ut metus. Aenean velit quam, cursus quis posuere a, euismod sit amet lacus. Curabitur lacinia tristique enim, et commodo sapien luctus sit amet. Cras non ligula quis mauris semper ultrices. Aliquam erat volutpat. Nam at fringilla orci. Nullam mauris orci, aliquet eu nulla in, finibus ornare neque. Aliquam sit amet dictum erat, at facilisis risus.
				</p>

				<!-- <hr> -->
				
				<h4>Decorators</h4>

				<p>
					<strong>Fusce molestie ante</strong> vel eros dapibus cursus. Morbi eu purus eu nibh aliquam ultricies. Ut quis <i>tincidunt ex, eu rutrum enim</i>. Praesent vestibulum neque vitae nulla tristique pellentesque. Ut malesuada tincidunt felis. <del>Pellentesque feugiat vehicula urna</del>, non pellentesque risus sagittis non. Etiam eget velit at <mark>velit iaculis sollicitudin</mark>. Aliquam dapibus commodo elit sed consectetur. <u>Integer ut dolor non nunc</u> porttitor gravida ac in libero. Maecenas eros tellus, porta ut nibh vitae, blandit mattis <abbr title="hello world">mauris. Nunc nec maximus dolor</abbr>, tincidunt volutpat mi. Mauris auctor mollis augue, eget mollis arcu ornare vel. <kbd>Quisque consectetur mauris</kbd> erat, non pharetra est pulvinar sed. Nullam pharetra erat in eleifend sagittis. <code>Aliquam congue nisi eros</code>, vel congue lectus <samp>accumsan eu. Suspendisse hendrerit</samp> felis et mattis lacinia.
				</p>
				
				<h4>Blocks</h4>

				<blockquote>
					<p>
						Praesent fermentum a felis a venenatis. Curabitur lectus libero, cursus ac laoreet id, vestibulum vitae ipsum. Nulla bibendum, neque quis.
					</p>
					<footer>
						Someone famous in <cite>Source Title</cite>
					</footer>
				</blockquote>

				<pre>&lt;p&gt;Sample text here...&lt;/p&gt;</pre>
				
				<div class="row">

					<div class="gr-6">

						<address>
							<i class="fa-twitter"></i>
							<strong>Twitter, Inc.</strong><br>
							1355 Market Street, Suite 900<br>
							San Francisco, CA 94103<br>
							<abbr title="Phone">P:</abbr> (123) 456-7890
						</address>

					</div>

					<div class="gr-6">

						<address>
							<i class="fa-linkedin"></i>
							<strong>Twitter, Inc.</strong><br>
							1355 Market Street, Suite 900<br>
							San Francisco, CA 94103<br>
							<abbr title="Phone">P:</abbr> (123) 456-7890
						</address>

					</div>

				</div>

				<h4>Tables</h4>

				<div class="row">

					<div class="gr-6">

						<table class="table">
							<caption>
								Default table
							</caption>
							<thead>
								<tr>
									<th class="adapt">#</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Username</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Larry</td>
									<td>the Bird</td>
									<td>@twitter</td>
								</tr>
							</tbody>
						</table>

					</div>

					<div class="gr-6">

						<table class="table table-striped">
							<caption>
								Striped table
							</caption>
							<thead>
								<tr>
									<th class="adapt">#</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Username</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Larry</td>
									<td>the Bird</td>
									<td>@twitter</td>
								</tr>
							</tbody>
						</table>

					</div>

					<div class="gr-6">

						<table class="table table-bordered table-shadowed">
							<caption>
								Bordered & shadowed table
							</caption>
							<thead>
								<tr>
									<th class="adapt">#</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Username</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Larry</td>
									<td>the Bird</td>
									<td>@twitter</td>
								</tr>
							</tbody>
						</table>

					</div>

					<div class="gr-6">

						<table class="table table-hover">
							<caption>
								Hover table
							</caption>
							<thead>
								<tr>
									<th class="adapt">#</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Username</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Larry</td>
									<td>the Bird</td>
									<td>@twitter</td>
								</tr>
							</tbody>
						</table>

					</div>

					<div class="gr-6 clear">

						<div class="table-responsive">

							<table class="table table-hover">
								<caption>
									Responsive table
								</caption>
								<thead>
									<tr>
										<th class="adapt">#</th>
										<th class="nowrap">First Name</th>
										<th class="nowrap">Last Name</th>
										<th>Username</th>
										<th>Username</th>
										<th>Username</th>
										<th>Username</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Mark</td>
										<td>Otto</td>
										<td>@mdo</td>
										<td>@mdo</td>
										<td>@mdo</td>
										<td>@mdo</td>
									</tr>
									<tr>
										<td>2</td>
										<td>Jacob</td>
										<td>Thornton</td>
										<td>@fat</td>
										<td>@fat</td>
										<td>@fat</td>
										<td>@fat</td>
									</tr>
									<tr>
										<td>3</td>
										<td>Larry</td>
										<td>the Bird</td>
										<td>@twitter</td>
										<td>@twitter</td>
										<td>@twitter</td>
										<td>@twitter</td>
									</tr>
								</tbody>
							</table>

						</div>

					</div>

				</div>

				<h4>Lists</h4>
				
				<div class="row">

					<div class="gr-4">

						<ul>
							<li>List item #1</li>
							<li>List item #2</li>
							<li>List item #3</li>
							<li>Nested list
								<ul>
									<li>List item #1</li>
									<li>List item #2</li>
									<li>List item #3</li>
									<li>Nested list
										<ol>
											<li>List item #1</li>
											<li>List item #2</li>
											<li>List item #3</li>
										</ol>
									</li>
								</ul>
							</li>
						</ul>

						<ol>
							<li>List item #1</li>
							<li>List item #2</li>
							<li>List item #3</li>
						</ol>

						<p>
							Nullam fringilla lorem bibendum elementum feugiat. Sed a mauris urna. Nunc sit amet tincidunt massa. Suspendisse potenti. Fusce at tincidunt sem. Nam luctus purus eu nisl congue, a bibendum nunc.
						</p>

					</div>

					<div class="gr-4">

						<ol>
							<li>List item #1</li>
							<li>List item #2</li>
							<li>List item #3</li>
							<li>Nested list
								<ol>
									<li>List item #1</li>
									<li>List item #2</li>
									<li>List item #3</li>
									<li>Nested list
										<ul>
											<li>List item #1</li>
											<li>List item #2</li>
											<li>List item #3</li>
										</ul>
									</li>
								</ol>
							</li>
						</ol>

						<ol>
							<li>List item #1</li>
							<li>List item #2</li>
							<li>List item #3</li>
						</ol>

						<p>
							Nullam fringilla lorem bibendum elementum feugiat. Sed a mauris urna. Nunc sit amet tincidunt massa. Suspendisse potenti. Fusce at tincidunt sem. Nam luctus purus eu nisl congue, a bibendum nunc.
						</p>

					</div>

					<div class="gr-4">

						<dl>
							<dt>List item title</dt>
							<dd>Fusce commodo est neque, ac dapibus neque elementum sed. Ut sed justo eget lorem porttitor ullamcorper. Aliquam erat volutpat. Phasellus.</dd>
							<dt>List item title</dt>
							<dd>Fusce commodo est neque, ac dapibus neque elementum sed. Ut sed justo eget lorem porttitor ullamcorper. Aliquam erat volutpat. Phasellus.</dd>
							<dt>List item title</dt>
							<dd>Fusce commodo est neque, ac dapibus neque elementum sed. Ut sed justo eget lorem porttitor ullamcorper. Aliquam erat volutpat. Fusce commodo est neque, ac dapibus neque elementum sed. Ut sed justo eget lorem porttitor porttitor ullamcorper.</dd>
						</dl>

						<p>
							Nullam fringilla lorem bibendum elementum feugiat. Sed a mauris urna. Nunc sit amet tincidunt massa. Suspendisse potenti. Fusce at tincidunt sem. Nam luctus purus eu nisl congue, a bibendum nunc.
						</p>

					</div>

				</div>

			</div>

		</div>

	</div>

</section>

<section class="section" id="font-awesome">

	<div class="container typeset vertical-rhythme">

		<div class="row">

			<div class="gr-12">

				<a href="http://sugarcss.io/documentation#packages-sassdash-080" target="_blank" class="btn pull-right">Discover all the packages</a>

				<h3>Cool packages out of the box</h3>

				<p class="lead">
					Sugar comes with some nice packages like font-awesome, animate.css, etc... out of the box. These packages are optimized to generate only the css you need!
				</p>

				<h4>Font Awesome</h4>

				<p>
					<a href="https://fortawesome.github.io/Font-Awesome/" target="_blank">Font awesome</a> is... <strong>AWESOME</strong>! The only issue with this library is that you css will contains a lot of unused icons and this is pretty bad!
					<br />
					Sugar helps you to handle that issue. This mean that if I need only the 5 icons bellow in my website, you will have only the 5 icons in your css.
				</p>

				<p class="c-orange--dark icons-presenter">
					<i class="fa-bars"></i>
					<i class="fa-gg-circle"></i>
					<i class="fa-coffee"></i>
					<i class="fa-camera-retro"></i>
					<i class="fa-cloud"></i>
				</p>

				<h4>CSS Gram</h4>

				<p>
					CSS Gram is a nice little library to add instagram like filters on your pictures.<br />
					Sugar embrace that library and let you use it with ease!
				</p>

				<div class="row">

					<div class="gr-6">
						<figure class="f-toaster">
							<img src="http://gridle.org/assets/img/highlight-bkg-04.jpg?1445699860" />
						</figure>
					</div>
					<div class="gr-6">
						<figure class="f-1977">
							<img src="http://gridle.org/assets/img/highlight-bkg-04.jpg?1445699860" />
						</figure>
					</div>
					<div class="gr-6">
						<figure class="f-walden">
							<img src="http://gridle.org/assets/img/highlight-bkg-04.jpg?1445699860" />
						</figure>
					</div>
					<div class="gr-6">
						<figure class="f-moon">
							<img src="http://gridle.org/assets/img/highlight-bkg-04.jpg?1445699860" />
						</figure>
					</div>
				</div>

				<h4>And many more</h4>

				<p>
					Sugar does not stop here. There's some others packages that you can use like modular-scale, animate.css and Sassdash. This list can be updated in the future depending on your feedbacks.
				</p>

				<p>
					<a href="http://sugarcss.io/documentation#packages-sassdash-080" target="_blank" class="btn">Discover all the packages</a>
				</p>

				<blockquote>
					You can choose or not to use the embeded packages. Nothing stop you to install them by yourself and use the versions you want...
				</blockquote>

			</div>

		</div>

	</div>

</section>

<section class="section bkg-grey--light" id="more">

	<div class="container typeset vertical-rhythme">

		<div class="row">

			<div class="gr-12 text-center">

				<h3>Many more to discover on the official website</h3>

				<iframe width="560" height="315" src="https://www.youtube.com/embed/xJjCnWm5cvE?start=83&end=95" frameborder="0" allowfullscreen></iframe>

				<br />
				<br />
				<br />
				

				<a href="http://sugarcss.io" target="_blank" class="btn hey">Check out sugarcss.io</a>

			</div>

		</div>

	</div>

</section>

{FOOTER}