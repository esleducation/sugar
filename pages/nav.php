{HEAD}

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

<section class="section typeset vertical-rhythme" id="typography" data-toggle-baseline-class data-toggle-rhythme-class>

	<div class="container">

		<div class="row">

			<div class="gr-12">
				
				<h3>Tabs</h3>

				<ul class="nav nav--tabs no-typeset no-vertical-rhythme">
					<li>Nav item #1</li>
					<li class="active">Nav item #2</li>
					<li>Nav item #3</li>
					<li>Nav item #4</li>
					<li class="disabled">Disabled item</li>
				</ul>

				<h4>Small tabs</h4>
	
				<ul class="nav nav--tabs nav--small nav--success no-typeset no-vertical-rhythme">
					<li>Nav item #1</li>
					<li class="active">Nav item #2</li>
					<li>Nav item #3</li>
					<li>Nav item #4</li>
					<li class="disabled">Disabled item</li>
				</ul>

				<h4>Default tabs</h4>
	
				<ul class="nav nav--tabs nav--warning no-typeset no-vertical-rhythme">
					<li>Nav item #1</li>
					<li class="active">Nav item #2</li>
					<li>Nav item #3</li>
					<li>Nav item #4</li>
					<li class="disabled">Disabled item</li>
				</ul>

				<h4>Medium tabs</h4>
	
				<ul class="nav nav--tabs nav--medium nav--secondary no-typeset no-vertical-rhythme">
					<li>Nav item #1</li>
					<li class="active">Nav item #2</li>
					<li>Nav item #3</li>
					<li>Nav item #4</li>
					<li class="disabled">Disabled item</li>
				</ul>

				<h4>Big tabs</h4>
	
				<ul class="nav nav--tabs nav--big nav--info no-typeset no-vertical-rhythme">
					<li>Nav item #1</li>
					<li class="active">Nav item #2</li>
					<li>Nav item #3</li>
					<li>Nav item #4</li>
					<li class="disabled">Disabled item</li>
				</ul>

				<h4>Bigger tabs</h4>
	
				<ul class="nav nav--tabs nav--primary nav--bigger no-typeset no-vertical-rhythme">
					<li>Nav item #1</li>
					<li class="active">Nav item #2</li>
					<li>Nav item #3</li>
					<li>Nav item #4</li>
					<li class="disabled">Disabled item</li>
				</ul>

				<!-- <hr> -->

				<h4>Working tabs</h4>
	
				<style>
					.nav-content {
						position: absolute;
						left:-3000px;
						visibility: hidden;
					}
					.nav-content.active {
						visibility: visible;
						position: static;
						left: 0;
					}
				</style>
				<ul class="nav nav--tabs nav--primary no-typeset no-vertical-rhythme">
					<li data-s-activate="nav-1" data-s-activate-trigger="mouseenter" data-s-activate-unactivate-trigger="mouseleave">Nav item #1</li>
					<li data-s-activate="nav-2" data-s-activate-toggle="true" data-s-activate-history="false">Nav item #2</li>
					<li data-s-activate="nav-3">Nav item #3</li>
					<li data-s-activate="nav-4">Nav item #4</li>
					<li class="disabled">Disabled item</li>
				</ul>
				<div class="nav-content" id="nav-1">
					<h4>Tab content #1</h4>
					<p>In eu neque nec nunc laoreet mattis. Donec ex nisi, laoreet in augue at, malesuada feugiat purus. Praesent sit amet odio bibendum, sagittis turpis ut, condimentum nunc. Phasellus quis aliquam.</p>
				</div>
				<div class="nav-content" id="nav-2">
					<h4>Tab content #2</h4>
					<p>In eu neque nec nunc laoreet mattis. Donec ex nisi, laoreet in augue at, malesuada feugiat purus. Praesent sit amet odio bibendum, sagittis turpis ut, condimentum nunc. Phasellus quis aliquam.</p>
				</div>
				<div class="nav-content" id="nav-3">
					<h4>Tab content #3</h4>
					<p>In eu neque nec nunc laoreet mattis. Donec ex nisi, laoreet in augue at, malesuada feugiat purus. Praesent sit amet odio bibendum, sagittis turpis ut, condimentum nunc. Phasellus quis aliquam.</p>

					<ul class="nav nav--tabs nav--secondary no-typeset no-vertical-rhythme">
						<li data-s-activate="nested-nav-1">Nested nav item #1</li>
						<li data-s-activate="nested-nav-2">Nested nav item #2</li>
						<li data-s-activate="nested-nav-3">Nested nav item #3</li>
						<li data-s-activate="nested-nav-4" data-s-activate-history="false">Nested nav item #4</li>
						<li class="disabled">Disabled item</li>
					</ul>

					<div class="nav-content" id="nested-nav-1">
						<h4>Nested tab content #1</h4>
						<p>In eu neque nec nunc laoreet mattis. Donec ex nisi, laoreet in augue at, malesuada feugiat purus. Praesent sit amet odio bibendum, sagittis turpis ut, condimentum nunc. Phasellus quis aliquam.</p>
					</div>
					<div class="nav-content" id="nested-nav-2">
						<h4>Nested tab content #2</h4>
						<p>In eu neque nec nunc laoreet mattis. Donec ex nisi, laoreet in augue at, malesuada feugiat purus. Praesent sit amet odio bibendum, sagittis turpis ut, condimentum nunc. Phasellus quis aliquam.</p>
					</div>
					<div class="nav-content" id="nested-nav-3">
						<h4>Nested tab content #3</h4>
						<p>In eu neque nec nunc laoreet mattis. Donec ex nisi, laoreet in augue at, malesuada feugiat purus. Praesent sit amet odio bibendum, sagittis turpis ut, condimentum nunc. Phasellus quis aliquam.</p>
					</div>
					<div class="nav-content" id="nested-nav-4">
						<h4>Nested tab content #4</h4>
						<p>In eu neque nec nunc laoreet mattis. Donec ex nisi, laoreet in augue at, malesuada feugiat purus. Praesent sit amet odio bibendum, sagittis turpis ut, condimentum nunc. Phasellus quis aliquam.</p>
					</div>

				</div>
				<div class="nav-content" id="nav-4">
					<h4>Tab content #4</h4>
					<p>In eu neque nec nunc laoreet mattis. Donec ex nisi, laoreet in augue at, malesuada feugiat purus. Praesent sit amet odio bibendum, sagittis turpis ut, condimentum nunc. Phasellus quis aliquam.</p>
				</div>
				
				<script>
					setTimeout(function() {
						// sugar.activate.activate('nested-nav-1');
					},2000);
				</script>

			</div>

		</div>

	</div>

</section>

<script>
setTimeout(function() {
	var el = document.createElement('li');
	el.setAttribute('data-s-activate','nested-nav-3');
	el.innerHTML = 'coco';
	document.body.appendChild(el);
	document.body.appendChild(el.cloneNode());
	document.body.appendChild(el.cloneNode());
}, 2000);
</script>

{FOOTER}