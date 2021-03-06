{HEAD}

<section class="section bkg-grey--light" id="typeset">

	<div class="container typeset vertical-rhythme">

		<div class="row">

			<div class="gr-12">

				<h3>Typeset</h3>

				<p class="lead">
					The sugar typeset component gives you access to all the typography styling that you need. It's like the bootstrap or foundation one but with nice vertical rhythme support
				</p>

<pre><code class="language-scss">// print out the typeset css
@include s-typeset-titles();
@include s-typeset-paragraphs();
@include s-typeset-lists();
@include s-typeset-decorators();
@include s-typeset-blocks();
@include s-typeset-tables();
</code></pre>

				<p>
					<a class="btn" href="http://sugarcss.io/documentation#typeset">
						Full typeset documentation
					</a>
				</p>

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

{FOOTER}
