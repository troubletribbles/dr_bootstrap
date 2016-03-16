<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Digital River Online Style Guide</title>
<link rel="shortcut icon" href="../../favicon.png">
<link rel='stylesheet' id='fonts-css' href='../../fonts/font.css?ver=1' type='text/css' media='all' />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../bs-docs.min.css">
<link rel='stylesheet' id='bootstrap-css-css' href='../docs.css' type='text/css' media='all' />
<link rel='stylesheet' id='dr-docs-css' href='../../bootstrap/assets/stylesheets/_bootstrap.css?ver=3.0.1' type='text/css' media='all' />
</head>
<body>

<?php include("../header.php"); ?>

<div class="container dr-docs-container">
	<div class="row">
		<div class="col-md-9">

		<!-- NEW SECTION -->

		    <div class="dr-docs-section">
		        <h1 id="overview" class="page-header">Overview</h1>
		        <p class="lead">Get the lowdown on the key pieces of Bootstrap's infrastructure, including our approach to better, faster, stronger web development.</p>
		        <h2 id="overview-doctype">HTML5 doctype</h2>
		        <p>Bootstrap makes use of certain HTML elements and CSS properties that require the use of the HTML5 doctype. Include it at the beginning of all your projects.</p>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="cp">&lt;!DOCTYPE html&gt;</span>
<span class="nt">&lt;html</span> <span class="na">lang=</span><span class="s">"en"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/html&gt;</span></code></pre></figure>

		        <h2 id="overview-mobile">Mobile first</h2>
		        <p>With Bootstrap 2, we added optional mobile friendly styles for key aspects of the framework. With Bootstrap 3, we've rewritten the project to be mobile friendly from the start. Instead of adding on optional mobile styles, they're baked right into the core. In fact, <strong>Bootstrap is mobile first</strong>. Mobile first styles can be found throughout the entire library instead of in separate files.</p>
		        <p>To ensure proper rendering and touch zooming, <strong>add the viewport meta tag</strong> to your <code>&lt;head&gt;</code>.</p>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;meta</span> <span class="na">name=</span><span class="s">"viewport"</span> <span class="na">content=</span><span class="s">"width=device-width, initial-scale=1"</span><span class="nt">&gt;</span></code></pre></figure>

		        <p>You can disable zooming capabilities on mobile devices by adding <code>user-scalable=no</code> to the viewport meta tag. This disables zooming, meaning users are only able to scroll, and results in your site feeling a bit more like a native application. Overall, we don't recommend this on every site, so use caution!</p>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;meta</span> <span class="na">name=</span><span class="s">"viewport"</span> <span class="na">content=</span><span class="s">"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"</span><span class="nt">&gt;</span></code></pre></figure>

		        <h2 id="overview-type-links">Typography and links</h2>
		        <p>Bootstrap sets basic global display, typography, and link styles. Specifically, we:</p>
		        <ul>
		            <li>Set <code>background-color: #fff;</code> on the <code>body</code></li>
		            <li>Use the <code>@font-family-base</code>, <code>@font-size-base</code>, and <code>@line-height-base</code> attributes as our typographic base</li>
		            <li>Set the global link color via <code>@link-color</code> and apply link underlines only on <code>:hover</code></li>
		        </ul>
		        <p>These styles can be found within <code>scaffolding.less</code>.</p>
		        <h2 id="overview-normalize">Normalize.css</h2>
		        <p>For improved cross-browser rendering, we use <a href="http://necolas.github.io/normalize.css/" target="_blank">Normalize.css</a>, a project by <a href="https://twitter.com/necolas" target="_blank">Nicolas Gallagher</a> and <a href="https://twitter.com/jon_neal" target="_blank">Jonathan Neal</a>.</p>
		        <h2 id="overview-container">Containers</h2>
		        <p>Bootstrap requires a containing element to wrap site contents and house our grid system. You may choose one of two containers to use in your projects. Note that, due to <code>padding</code> and more, neither container is nestable.</p>
		        <p>Use <code>.container</code> for a responsive fixed width container.</p>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

		        <p>Use <code>.container-fluid</code> for a full width container, spanning the entire width of your viewport.</p>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container-fluid"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

		    </div>


		    <!-- NEW SECTION -->


		    <div class="dr-docs-section">
		        <h1 id="grid" class="page-header">Grid system</h1>
		        <p class="lead">Bootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. It includes <a href="#grid-example-basic">predefined classes</a> for easy layout options, as well as powerful <a href="#grid-less">mixins for generating more semantic layouts</a>.</p>
		        <h2 id="grid-intro">Introduction</h2>
		        <p>Grid systems are used for creating page layouts through a series of rows and columns that house your content. Here's how the Bootstrap grid system works:</p>
		        <ul>
		            <li>Rows must be placed within a <code>.container</code> (fixed-width) or <code>.container-fluid</code> (full-width) for proper alignment and padding.</li>
		            <li>Use rows to create horizontal groups of columns.</li>
		            <li>Content should be placed within columns, and only columns may be immediate children of rows.</li>
		            <li>Predefined grid classes like <code>.row</code> and <code>.col-xs-4</code> are available for quickly making grid layouts. Less mixins can also be used for more semantic layouts.</li>
		            <li>Columns create gutters (gaps between column content) via <code>padding</code>. That padding is offset in rows for the first and last column via negative margin on <code>.row</code>s.</li>
		            <li>The negative margin is why the examples below are outdented. It's so that content within grid columns is lined up with non-grid content.</li>
		            <li>Grid columns are created by specifying the number of twelve available columns you wish to span. For example, three equal columns would use three <code>.col-xs-4</code>.</li>
		            <li>If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.</li>
		            <li>Grid classes apply to devices with screen widths greater than or equal to the breakpoint sizes, and override grid classes targeted at smaller devices. Therefore, e.g. applying any <code>.col-md-*</code> class to an element will not only affect its styling on medium devices but also on large devices if a <code>.col-lg-*</code> class is not present.</li>
		        </ul>
		        <p>Look to the examples for applying these principles to your code.</p>
		        <h2 id="grid-media-queries"><a class="anchorjs-link " href="#grid-media-queries" aria-label="Anchor link for: grid media queries" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Media queries</h2>
		        <p>We use the following media queries in our Less files to create the key breakpoints in our grid system.</p>
		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="cm">/* Extra small devices (phones, less than 768px) */</span>
<span class="cm">/* No media query since this is the default in Bootstrap */</span>

<span class="cm">/* Small devices (tablets, 768px and up) */</span>
<span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-sm-min</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

<span class="cm">/* Medium devices (desktops, 992px and up) */</span>
<span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-md-min</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

<span class="cm">/* Large devices (large desktops, 1200px and up) */</span>
<span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-lg-min</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span></code></pre></figure>

		        <p>We occasionally expand on these media queries to include a <code>max-width</code> to limit CSS to a narrower set of devices.</p>
		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="k">@media</span> <span class="p">(</span><span class="n">max-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-xs-max</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-sm-min</span><span class="p">)</span> <span class="nf">and</span> <span class="p">(</span><span class="n">max-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-sm-max</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-md-min</span><span class="p">)</span> <span class="nf">and</span> <span class="p">(</span><span class="n">max-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-md-max</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-lg-min</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span></code></pre></figure>

		        <h2 id="grid-options"><a class="anchorjs-link " href="#grid-options" aria-label="Anchor link for: grid options" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Grid options</h2>
		        <p>See how aspects of the Bootstrap grid system work across multiple devices with a handy table.</p>
		        <div class="table-responsive">
		            <table class="table table-bordered table-striped">
		                <thead>
		                    <tr>
		                        <th></th>
		                        <th> Extra small devices <small>Phones (&lt;768px)</small> </th>
		                        <th> Small devices <small>Tablets (≥768px)</small> </th>
		                        <th> Medium devices <small>Desktops (≥992px)</small> </th>
		                        <th> Large devices <small>Desktops (≥1200px)</small> </th>
		                    </tr>
		                </thead>
		                <tbody>
		                    <tr>
		                        <th class="text-nowrap" scope="row">Grid behavior</th>
		                        <td>Horizontal at all times</td>
		                        <td colspan="3">Collapsed to start, horizontal above breakpoints</td>
		                    </tr>
		                    <tr>
		                        <th class="text-nowrap" scope="row">Container width</th>
		                        <td>None (auto)</td>
		                        <td>750px</td>
		                        <td>970px</td>
		                        <td>1170px</td>
		                    </tr>
		                    <tr>
		                        <th class="text-nowrap" scope="row">Class prefix</th>
		                        <td><code>.col-xs-</code></td>
		                        <td><code>.col-sm-</code></td>
		                        <td><code>.col-md-</code></td>
		                        <td><code>.col-lg-</code></td>
		                    </tr>
		                    <tr>
		                        <th class="text-nowrap" scope="row"># of columns</th>
		                        <td colspan="4">12</td>
		                    </tr>
		                    <tr>
		                        <th class="text-nowrap" scope="row">Column width</th>
		                        <td class="text-muted">Auto</td>
		                        <td>~62px</td>
		                        <td>~81px</td>
		                        <td>~97px</td>
		                    </tr>
		                    <tr>
		                        <th class="text-nowrap" scope="row">Gutter width</th>
		                        <td colspan="4">30px (15px on each side of a column)</td>
		                    </tr>
		                    <tr>
		                        <th class="text-nowrap" scope="row">Nestable</th>
		                        <td colspan="4">Yes</td>
		                    </tr>
		                    <tr>
		                        <th class="text-nowrap" scope="row">Offsets</th>
		                        <td colspan="4">Yes</td>
		                    </tr>
		                    <tr>
		                        <th class="text-nowrap" scope="row">Column ordering</th>
		                        <td colspan="4">Yes</td>
		                    </tr>
		                </tbody>
		            </table>
		        </div>
		        <h2 id="grid-example-basic"><a class="anchorjs-link " href="#grid-example-basic" aria-label="Anchor link for: grid example basic" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Example: Stacked-to-horizontal</h2>
		        <p>Using a single set of <code>.col-md-*</code> grid classes, you can create a basic grid system that starts out stacked on mobile devices and tablet devices (the extra small to small range) before becoming horizontal on desktop (medium) devices. Place grid columns in any <code>.row</code>.</p>
		        <div class="row show-grid">
		            <div class="col-md-1">.col-md-1</div>
		            <div class="col-md-1">.col-md-1</div>
		            <div class="col-md-1">.col-md-1</div>
		            <div class="col-md-1">.col-md-1</div>
		            <div class="col-md-1">.col-md-1</div>
		            <div class="col-md-1">.col-md-1</div>
		            <div class="col-md-1">.col-md-1</div>
		            <div class="col-md-1">.col-md-1</div>
		            <div class="col-md-1">.col-md-1</div>
		            <div class="col-md-1">.col-md-1</div>
		            <div class="col-md-1">.col-md-1</div>
		            <div class="col-md-1">.col-md-1</div>
		        </div>
		        <div class="row show-grid">
		            <div class="col-md-8">.col-md-8</div>
		            <div class="col-md-4">.col-md-4</div>
		        </div>
		        <div class="row show-grid">
		            <div class="col-md-4">.col-md-4</div>
		            <div class="col-md-4">.col-md-4</div>
		            <div class="col-md-4">.col-md-4</div>
		        </div>
		        <div class="row show-grid">
		            <div class="col-md-6">.col-md-6</div>
		            <div class="col-md-6">.col-md-6</div>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-8"</span><span class="nt">&gt;</span>.col-md-8<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span class="nt">&gt;</span>.col-md-4<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span class="nt">&gt;</span>.col-md-4<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span class="nt">&gt;</span>.col-md-4<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span class="nt">&gt;</span>.col-md-4<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-6"</span><span class="nt">&gt;</span>.col-md-6<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-6"</span><span class="nt">&gt;</span>.col-md-6<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

		        <h2 id="grid-example-fluid"><a class="anchorjs-link " href="#grid-example-fluid" aria-label="Anchor link for: grid example fluid" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Example: Fluid container</h2>
		        <p>Turn any fixed-width grid layout into a full-width layout by changing your outermost <code>.container</code> to <code>.container-fluid</code>.</p>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container-fluid"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
    ...
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

		        <h2 id="grid-example-mixed"><a class="anchorjs-link " href="#grid-example-mixed" aria-label="Anchor link for: grid example mixed" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Example: Mobile and desktop</h2>
		        <p>Don't want your columns to simply stack in smaller devices? Use the extra small and medium device grid classes by adding <code>.col-xs-*</code> <code>.col-md-*</code> to your columns. See the example below for a better idea of how it all works.</p>
		        <div class="row show-grid">
		            <div class="col-xs-12 col-md-8">.col-xs-12 .col-md-8</div>
		            <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
		        </div>
		        <div class="row show-grid">
		            <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
		            <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
		            <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
		        </div>
		        <div class="row show-grid">
		            <div class="col-xs-6">.col-xs-6</div>
		            <div class="col-xs-6">.col-xs-6</div>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Stack the columns on mobile by making one full-width and the other half-width --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-12 col-md-8"</span><span class="nt">&gt;</span>.col-xs-12 .col-md-8<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-md-4<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="c">&lt;!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-md-4<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-md-4<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-md-4<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="c">&lt;!-- Columns are always 50% wide, on mobile and desktop --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6"</span><span class="nt">&gt;</span>.col-xs-6<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6"</span><span class="nt">&gt;</span>.col-xs-6<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

		        <h2 id="grid-example-mixed-complete"><a class="anchorjs-link " href="#grid-example-mixed-complete" aria-label="Anchor link for: grid example mixed complete" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Example: Mobile, tablet, desktop</h2>
		        <p>Build on the previous example by creating even more dynamic and powerful layouts with tablet <code>.col-sm-*</code> classes.</p>
		        <div class="row show-grid">
		            <div class="col-xs-12 col-sm-6 col-md-8">.col-xs-12 .col-sm-6 .col-md-8</div>
		            <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
		        </div>
		        <div class="row show-grid">
		            <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
		            <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
		            <div class="clearfix visible-xs-block"></div>
		            <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-12 col-sm-6 col-md-8"</span><span class="nt">&gt;</span>.col-xs-12 .col-sm-6 .col-md-8<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-md-4<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-sm-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-4<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-sm-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-4<span class="nt">&lt;/div&gt;</span>
  <span class="c">&lt;!-- Optional: clear the XS cols if their content doesn't match in height --&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"clearfix visible-xs-block"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-sm-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-4<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

		        <h2 id="grid-example-wrapping"><a class="anchorjs-link " href="#grid-example-wrapping" aria-label="Anchor link for: grid example wrapping" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Example: Column wrapping</h2>
		        <p>If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.</p>
		        <div class="row show-grid">
		            <div class="col-xs-9">.col-xs-9</div>
		            <div class="col-xs-4">.col-xs-4
		                <br>Since 9 + 4 = 13 &gt; 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.</div>
		            <div class="col-xs-6">.col-xs-6
		                <br>Subsequent columns continue along the new line.</div>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-9"</span><span class="nt">&gt;</span>.col-xs-9<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-4"</span><span class="nt">&gt;</span>.col-xs-4<span class="nt">&lt;br&gt;</span>Since 9 + 4 = 13 <span class="ni">&amp;gt;</span> 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6"</span><span class="nt">&gt;</span>.col-xs-6<span class="nt">&lt;br&gt;</span>Subsequent columns continue along the new line.<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

		        <h2 id="grid-responsive-resets"><a class="anchorjs-link " href="#grid-responsive-resets" aria-label="Anchor link for: grid responsive resets" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Responsive column resets</h2>
		        <p>With the four tiers of grids available you're bound to run into issues where, at certain breakpoints, your columns don't clear quite right as one is taller than the other. To fix that, use a combination of a <code>.clearfix</code> and our <a href="#responsive-utilities">responsive utility classes</a>.</p>
		        <div class="row show-grid">
		            <div class="col-xs-6 col-sm-3"> .col-xs-6 .col-sm-3
		                <br> Resize your viewport or check it out on your phone for an example. </div>
		            <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
		            <div class="clearfix visible-xs-block"></div>
		            <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
		            <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-sm-3"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-3<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-sm-3"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-3<span class="nt">&lt;/div&gt;</span>

  <span class="c">&lt;!-- Add the extra clearfix for only the required viewport --&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"clearfix visible-xs-block"</span><span class="nt">&gt;&lt;/div&gt;</span>

  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-sm-3"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-3<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-sm-3"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-3<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

		        <p>In addition to column clearing at responsive breakpoints, you may need to <strong>reset offsets, pushes, or pulls</strong>. See this in action in <a href="../examples/grid/">the grid example</a>.</p>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-5 col-md-6"</span><span class="nt">&gt;</span>.col-sm-5 .col-md-6<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0"</span><span class="nt">&gt;</span>.col-sm-5 .col-sm-offset-2 .col-md-6 .col-md-offset-0<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-6 col-md-5 col-lg-6"</span><span class="nt">&gt;</span>.col-sm-6 .col-md-5 .col-lg-6<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-6 col-md-5 col-md-offset-2 col-lg-6 col-lg-offset-0"</span><span class="nt">&gt;</span>.col-sm-6 .col-md-5 .col-md-offset-2 .col-lg-6 .col-lg-offset-0<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

		        <h2 id="grid-offsetting"><a class="anchorjs-link " href="#grid-offsetting" aria-label="Anchor link for: grid offsetting" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Offsetting columns</h2>
		        <p>Move columns to the right using <code>.col-md-offset-*</code> classes. These classes increase the left margin of a column by <code>*</code> columns. For example, <code>.col-md-offset-4</code> moves <code>.col-md-4</code> over four columns.</p>
		        <div class="row show-grid">
		            <div class="col-md-4">.col-md-4</div>
		            <div class="col-md-4 col-md-offset-4">.col-md-4 .col-md-offset-4</div>
		        </div>
		        <div class="row show-grid">
		            <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
		            <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
		        </div>
		        <div class="row show-grid">
		            <div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span class="nt">&gt;</span>.col-md-4<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4 col-md-offset-4"</span><span class="nt">&gt;</span>.col-md-4 .col-md-offset-4<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-3 col-md-offset-3"</span><span class="nt">&gt;</span>.col-md-3 .col-md-offset-3<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-3 col-md-offset-3"</span><span class="nt">&gt;</span>.col-md-3 .col-md-offset-3<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-6 col-md-offset-3"</span><span class="nt">&gt;</span>.col-md-6 .col-md-offset-3<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

		        <p>You can also override offsets from lower grid tiers with <code>.col-*-offset-0</code> classes.</p>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-sm-4"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-sm-4"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-0"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

		        <h2 id="grid-nesting"><a class="anchorjs-link " href="#grid-nesting" aria-label="Anchor link for: grid nesting" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Nesting columns</h2>
		        <p>To nest your content with the default grid, add a new <code>.row</code> and set of <code>.col-sm-*</code> columns within an existing <code>.col-sm-*</code> column. Nested rows should include a set of columns that add up to 12 or fewer (it is not required that you use all 12 available columns).</p>
		        <div class="row show-grid">
		            <div class="col-sm-9"> Level 1: .col-sm-9
		                <div class="row show-grid">
		                    <div class="col-xs-8 col-sm-6"> Level 2: .col-xs-8 .col-sm-6 </div>
		                    <div class="col-xs-4 col-sm-6"> Level 2: .col-xs-4 .col-sm-6 </div>
		                </div>
		            </div>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-9"</span><span class="nt">&gt;</span>
    Level 1: .col-sm-9
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-8 col-sm-6"</span><span class="nt">&gt;</span>
        Level 2: .col-xs-8 .col-sm-6
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-4 col-sm-6"</span><span class="nt">&gt;</span>
        Level 2: .col-xs-4 .col-sm-6
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

		        <h2 id="grid-column-ordering"><a class="anchorjs-link " href="#grid-column-ordering" aria-label="Anchor link for: grid column ordering" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Column ordering</h2>
		        <p>Easily change the order of our built-in grid columns with <code>.col-md-push-*</code> and <code>.col-md-pull-*</code> modifier classes.</p>
		        <div class="row show-grid">
		            <div class="col-md-9 col-md-push-3">.col-md-9 .col-md-push-3</div>
		            <div class="col-md-3 col-md-pull-9">.col-md-3 .col-md-pull-9</div>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-9 col-md-push-3"</span><span class="nt">&gt;</span>.col-md-9 .col-md-push-3<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-3 col-md-pull-9"</span><span class="nt">&gt;</span>.col-md-3 .col-md-pull-9<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

		        <h2 id="grid-less"><a class="anchorjs-link " href="#grid-less" aria-label="Anchor link for: grid less" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Less mixins and variables</h2>
		        <p>In addition to <a href="#grid-example-basic">prebuilt grid classes</a> for fast layouts, Bootstrap includes Less variables and mixins for quickly generating your own simple, semantic layouts.</p>
		        <h3 id="variables"><a class="anchorjs-link " href="#variables" aria-label="Anchor link for: variables" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Variables</h3>
		        <p>Variables determine the number of columns, the gutter width, and the media query point at which to begin floating columns. We use these to generate the predefined grid classes documented above, as well as for the custom mixins listed below.</p>
		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="k">@grid-columns</span><span class="nd">:</span>              <span class="nt">12</span><span class="p">;</span>
<span class="k">@grid-gutter-width</span><span class="nd">:</span>         <span class="nt">30px</span><span class="p">;</span>
<span class="k">@grid-float-breakpoint</span><span class="nd">:</span>     <span class="nt">768px</span><span class="p">;</span></code></pre></figure>

		        <h3 id="mixins"><a class="anchorjs-link " href="#mixins" aria-label="Anchor link for: mixins" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Mixins</h3>
		        <p>Mixins are used in conjunction with the grid variables to generate semantic CSS for individual grid columns.</p>
		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Creates a wrapper for a series of columns
</span><span class="err">.</span><span class="na">make-row</span><span class="err">(@</span><span class="na">gutter</span><span class="p">:</span> <span class="o">@</span><span class="n">grid-gutter-width</span><span class="p">)</span> <span class="p">{</span>
  <span class="c1">// Then clear the floated columns
</span>  <span class="nc">.clearfix</span><span class="o">()</span><span class="p">;</span>

  <span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-sm-min</span><span class="p">)</span> <span class="p">{</span>
    <span class="nl">margin-left</span><span class="p">:</span>  <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">-2</span><span class="p">);</span>
    <span class="nl">margin-right</span><span class="p">:</span> <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">-2</span><span class="p">);</span>
  <span class="p">}</span>

  <span class="c1">// Negative margin nested rows out to align the content of columns
</span>  <span class="nc">.row</span> <span class="p">{</span>
    <span class="nl">margin-left</span><span class="p">:</span>  <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">-2</span><span class="p">);</span>
    <span class="nl">margin-right</span><span class="p">:</span> <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">-2</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="c1">// Generate the extra small columns
</span><span class="nc">.make-xs-column</span><span class="o">(@</span><span class="nt">columns</span><span class="p">;</span> <span class="k">@gutter</span><span class="nd">:</span> <span class="o">@</span><span class="nt">grid-gutter-width</span><span class="o">)</span> <span class="p">{</span>
  <span class="nl">position</span><span class="p">:</span> <span class="nb">relative</span><span class="p">;</span>
  <span class="c1">// Prevent columns from collapsing when empty
</span>  <span class="nl">min-height</span><span class="p">:</span> <span class="m">1px</span><span class="p">;</span>
  <span class="c1">// Inner gutter via padding
</span>  <span class="nl">padding-left</span><span class="p">:</span>  <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">2</span><span class="p">);</span>
  <span class="nl">padding-right</span><span class="p">:</span> <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">2</span><span class="p">);</span>

  <span class="c1">// Calculate width based on number of columns available
</span>  <span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">grid-float-breakpoint</span><span class="p">)</span> <span class="p">{</span>
    <span class="nl">float</span><span class="p">:</span> <span class="nb">left</span><span class="p">;</span>
    <span class="nl">width</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="c1">// Generate the small columns
</span><span class="nc">.make-sm-column</span><span class="o">(@</span><span class="nt">columns</span><span class="p">;</span> <span class="k">@gutter</span><span class="nd">:</span> <span class="o">@</span><span class="nt">grid-gutter-width</span><span class="o">)</span> <span class="p">{</span>
  <span class="nl">position</span><span class="p">:</span> <span class="nb">relative</span><span class="p">;</span>
  <span class="c1">// Prevent columns from collapsing when empty
</span>  <span class="nl">min-height</span><span class="p">:</span> <span class="m">1px</span><span class="p">;</span>
  <span class="c1">// Inner gutter via padding
</span>  <span class="nl">padding-left</span><span class="p">:</span>  <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">2</span><span class="p">);</span>
  <span class="nl">padding-right</span><span class="p">:</span> <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">2</span><span class="p">);</span>

  <span class="c1">// Calculate width based on number of columns available
</span>  <span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-sm-min</span><span class="p">)</span> <span class="p">{</span>
    <span class="nl">float</span><span class="p">:</span> <span class="nb">left</span><span class="p">;</span>
    <span class="nl">width</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="c1">// Generate the small column offsets
</span><span class="nc">.make-sm-column-offset</span><span class="o">(@</span><span class="nt">columns</span><span class="o">)</span> <span class="p">{</span>
  <span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-sm-min</span><span class="p">)</span> <span class="p">{</span>
    <span class="nl">margin-left</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span>
<span class="nc">.make-sm-column-push</span><span class="o">(@</span><span class="nt">columns</span><span class="o">)</span> <span class="p">{</span>
  <span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-sm-min</span><span class="p">)</span> <span class="p">{</span>
    <span class="nl">left</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span>
<span class="nc">.make-sm-column-pull</span><span class="o">(@</span><span class="nt">columns</span><span class="o">)</span> <span class="p">{</span>
  <span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-sm-min</span><span class="p">)</span> <span class="p">{</span>
    <span class="nl">right</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="c1">// Generate the medium columns
</span><span class="nc">.make-md-column</span><span class="o">(@</span><span class="nt">columns</span><span class="p">;</span> <span class="k">@gutter</span><span class="nd">:</span> <span class="o">@</span><span class="nt">grid-gutter-width</span><span class="o">)</span> <span class="p">{</span>
  <span class="nl">position</span><span class="p">:</span> <span class="nb">relative</span><span class="p">;</span>
  <span class="c1">// Prevent columns from collapsing when empty
</span>  <span class="nl">min-height</span><span class="p">:</span> <span class="m">1px</span><span class="p">;</span>
  <span class="c1">// Inner gutter via padding
</span>  <span class="nl">padding-left</span><span class="p">:</span>  <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">2</span><span class="p">);</span>
  <span class="nl">padding-right</span><span class="p">:</span> <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">2</span><span class="p">);</span>

  <span class="c1">// Calculate width based on number of columns available
</span>  <span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-md-min</span><span class="p">)</span> <span class="p">{</span>
    <span class="nl">float</span><span class="p">:</span> <span class="nb">left</span><span class="p">;</span>
    <span class="nl">width</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="c1">// Generate the medium column offsets
</span><span class="nc">.make-md-column-offset</span><span class="o">(@</span><span class="nt">columns</span><span class="o">)</span> <span class="p">{</span>
  <span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-md-min</span><span class="p">)</span> <span class="p">{</span>
    <span class="nl">margin-left</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span>
<span class="nc">.make-md-column-push</span><span class="o">(@</span><span class="nt">columns</span><span class="o">)</span> <span class="p">{</span>
  <span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-md-min</span><span class="p">)</span> <span class="p">{</span>
    <span class="nl">left</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span>
<span class="nc">.make-md-column-pull</span><span class="o">(@</span><span class="nt">columns</span><span class="o">)</span> <span class="p">{</span>
  <span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-md-min</span><span class="p">)</span> <span class="p">{</span>
    <span class="nl">right</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="c1">// Generate the large columns
</span><span class="nc">.make-lg-column</span><span class="o">(@</span><span class="nt">columns</span><span class="p">;</span> <span class="k">@gutter</span><span class="nd">:</span> <span class="o">@</span><span class="nt">grid-gutter-width</span><span class="o">)</span> <span class="p">{</span>
  <span class="nl">position</span><span class="p">:</span> <span class="nb">relative</span><span class="p">;</span>
  <span class="c1">// Prevent columns from collapsing when empty
</span>  <span class="nl">min-height</span><span class="p">:</span> <span class="m">1px</span><span class="p">;</span>
  <span class="c1">// Inner gutter via padding
</span>  <span class="nl">padding-left</span><span class="p">:</span>  <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">2</span><span class="p">);</span>
  <span class="nl">padding-right</span><span class="p">:</span> <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">2</span><span class="p">);</span>

  <span class="c1">// Calculate width based on number of columns available
</span>  <span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-lg-min</span><span class="p">)</span> <span class="p">{</span>
    <span class="nl">float</span><span class="p">:</span> <span class="nb">left</span><span class="p">;</span>
    <span class="nl">width</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="c1">// Generate the large column offsets
</span><span class="nc">.make-lg-column-offset</span><span class="o">(@</span><span class="nt">columns</span><span class="o">)</span> <span class="p">{</span>
  <span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-lg-min</span><span class="p">)</span> <span class="p">{</span>
    <span class="nl">margin-left</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span>
<span class="nc">.make-lg-column-push</span><span class="o">(@</span><span class="nt">columns</span><span class="o">)</span> <span class="p">{</span>
  <span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-lg-min</span><span class="p">)</span> <span class="p">{</span>
    <span class="nl">left</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span>
<span class="nc">.make-lg-column-pull</span><span class="o">(@</span><span class="nt">columns</span><span class="o">)</span> <span class="p">{</span>
  <span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-lg-min</span><span class="p">)</span> <span class="p">{</span>
    <span class="nl">right</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span></code></pre></figure>

		        <h3 id="example-usage"><a class="anchorjs-link " href="#example-usage" aria-label="Anchor link for: example usage" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Example usage</h3>
		        <p>You can modify the variables to your own custom values, or just use the mixins with their default values. Here's an example of using the default settings to create a two-column layout with a gap between.</p>
		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nc">.wrapper</span> <span class="p">{</span>
  <span class="nc">.make-row</span><span class="o">()</span><span class="p">;</span>
<span class="p">}</span>
<span class="nc">.content-main</span> <span class="p">{</span>
  <span class="nc">.make-lg-column</span><span class="o">(</span><span class="nt">8</span><span class="o">)</span><span class="p">;</span>
<span class="p">}</span>
<span class="nc">.content-secondary</span> <span class="p">{</span>
  <span class="nc">.make-lg-column</span><span class="o">(</span><span class="nt">3</span><span class="o">)</span><span class="p">;</span>
  <span class="nc">.make-lg-column-offset</span><span class="o">(</span><span class="nt">1</span><span class="o">)</span><span class="p">;</span>
<span class="p">}</span></code></pre></figure>

		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"wrapper"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content-main"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content-secondary"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

		    </div>


		    <!-- NEW SECTION -->


		    <div class="dr-docs-section">
		        <h1 id="type" class="page-header"><a class="anchorjs-link " href="#type" aria-label="Anchor link for: type" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Typography</h1>
		        <h2 id="type-headings"><a class="anchorjs-link " href="#type-headings" aria-label="Anchor link for: type headings" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Headings</h2>
		        <p>All HTML headings, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code>, are available. <code>.h1</code> through <code>.h6</code> classes are also available, for when you want to match the font styling of a heading but still want your text to be displayed inline.</p>
		        <div class="dr-example dr-example-type" data-example-id="simple-headings">
		            <table class="table">
		                <tbody>
		                    <tr>
		                        <td>
		                            <h1>h1. Bootstrap heading</h1></td>
		                        <td class="type-info">Semibold 36px</td>
		                    </tr>
		                    <tr>
		                        <td>
		                            <h2>h2. Bootstrap heading</h2></td>
		                        <td class="type-info">Semibold 30px</td>
		                    </tr>
		                    <tr>
		                        <td>
		                            <h3>h3. Bootstrap heading</h3></td>
		                        <td class="type-info">Semibold 24px</td>
		                    </tr>
		                    <tr>
		                        <td>
		                            <h4>h4. Bootstrap heading</h4></td>
		                        <td class="type-info">Semibold 18px</td>
		                    </tr>
		                    <tr>
		                        <td>
		                            <h5>h5. Bootstrap heading</h5></td>
		                        <td class="type-info">Semibold 14px</td>
		                    </tr>
		                    <tr>
		                        <td>
		                            <h6>h6. Bootstrap heading</h6></td>
		                        <td class="type-info">Semibold 12px</td>
		                    </tr>
		                </tbody>
		            </table>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;h1&gt;</span>h1. Bootstrap heading<span class="nt">&lt;/h1&gt;</span>
<span class="nt">&lt;h2&gt;</span>h2. Bootstrap heading<span class="nt">&lt;/h2&gt;</span>
<span class="nt">&lt;h3&gt;</span>h3. Bootstrap heading<span class="nt">&lt;/h3&gt;</span>
<span class="nt">&lt;h4&gt;</span>h4. Bootstrap heading<span class="nt">&lt;/h4&gt;</span>
<span class="nt">&lt;h5&gt;</span>h5. Bootstrap heading<span class="nt">&lt;/h5&gt;</span>
<span class="nt">&lt;h6&gt;</span>h6. Bootstrap heading<span class="nt">&lt;/h6&gt;</span></code></pre></figure>

		        <p>Create lighter, secondary text in any heading with a generic <code>&lt;small&gt;</code> tag or the <code>.small</code> class.</p>
		        <div class="dr-example dr-example-type" data-example-id="small-headings">
		            <table class="table">
		                <tbody>
		                    <tr>
		                        <td>
		                            <h1>h1. Bootstrap heading <small>Secondary text</small></h1></td>
		                    </tr>
		                    <tr>
		                        <td>
		                            <h2>h2. Bootstrap heading <small>Secondary text</small></h2></td>
		                    </tr>
		                    <tr>
		                        <td>
		                            <h3>h3. Bootstrap heading <small>Secondary text</small></h3></td>
		                    </tr>
		                    <tr>
		                        <td>
		                            <h4>h4. Bootstrap heading <small>Secondary text</small></h4></td>
		                    </tr>
		                    <tr>
		                        <td>
		                            <h5>h5. Bootstrap heading <small>Secondary text</small></h5></td>
		                    </tr>
		                    <tr>
		                        <td>
		                            <h6>h6. Bootstrap heading <small>Secondary text</small></h6></td>
		                    </tr>
		                </tbody>
		            </table>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;h1&gt;</span>h1. Bootstrap heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h1&gt;</span>
<span class="nt">&lt;h2&gt;</span>h2. Bootstrap heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h2&gt;</span>
<span class="nt">&lt;h3&gt;</span>h3. Bootstrap heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h3&gt;</span>
<span class="nt">&lt;h4&gt;</span>h4. Bootstrap heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h4&gt;</span>
<span class="nt">&lt;h5&gt;</span>h5. Bootstrap heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h5&gt;</span>
<span class="nt">&lt;h6&gt;</span>h6. Bootstrap heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h6&gt;</span></code></pre></figure>

		        <h2 id="type-body-copy"><a class="anchorjs-link " href="#type-body-copy" aria-label="Anchor link for: type body copy" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Body copy</h2>
		        <p>Bootstrap's global default <code>font-size</code> is <strong>14px</strong>, with a <code>line-height</code> of <strong>1.428</strong>. This is applied to the <code>&lt;body&gt;</code> and all paragraphs. In addition, <code>&lt;p&gt;</code> (paragraphs) receive a bottom margin of half their computed line-height (10px by default).</p>
		        <div class="dr-example" data-example-id="body-copy">
		            <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
		            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.</p>
		            <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span></code></pre></figure>

		        <h3 id="lead-body-copy"><a class="anchorjs-link " href="#lead-body-copy" aria-label="Anchor link for: lead body copy" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Lead body copy</h3>
		        <p>Make a paragraph stand out by adding <code>.lead</code>.</p>
		        <div class="dr-example" data-example-id="lead-copy">
		            <p class="lead">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.</p>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"lead"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span></code></pre></figure>

		        <h3 id="built-with-less"><a class="anchorjs-link " href="#built-with-less" aria-label="Anchor link for: built with less" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Built with Less</h3>
		        <p>The typographic scale is based on two Less variables in <strong>variables.less</strong>: <code>@font-size-base</code> and <code>@line-height-base</code>. The first is the base font-size used throughout and the second is the base line-height. We use those variables and some simple math to create the margins, paddings, and line-heights of all our type and more. Customize them and Bootstrap adapts.</p>
		        <h2 id="type-inline-text"><a class="anchorjs-link " href="#type-inline-text" aria-label="Anchor link for: type inline text" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Inline text elements</h2>
		        <h3 id="marked-text"><a class="anchorjs-link " href="#marked-text" aria-label="Anchor link for: marked text" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Marked text</h3>
		        <p>For highlighting a run of text due to its relevance in another context, use the <code>&lt;mark&gt;</code> tag.</p>
		        <div class="dr-example" data-example-id="simple-mark">
		            <p>You can use the mark tag to
		                <mark>highlight</mark> text.</p>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html">You can use the mark tag to <span class="nt">&lt;mark&gt;</span>highlight<span class="nt">&lt;/mark&gt;</span> text.</code></pre></figure>

		        <h3 id="deleted-text"><a class="anchorjs-link " href="#deleted-text" aria-label="Anchor link for: deleted text" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Deleted text</h3>
		        <p>For indicating blocks of text that have been deleted use the <code>&lt;del&gt;</code> tag.</p>
		        <div class="dr-example" data-example-id="simple-del">
		            <p><del>This line of text is meant to be treated as deleted text.</del></p>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;del&gt;</span>This line of text is meant to be treated as deleted text.<span class="nt">&lt;/del&gt;</span></code></pre></figure>

		        <h3 id="strikethrough-text"><a class="anchorjs-link " href="#strikethrough-text" aria-label="Anchor link for: strikethrough text" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Strikethrough text</h3>
		        <p>For indicating blocks of text that are no longer relevant use the <code>&lt;s&gt;</code> tag.</p>
		        <div class="dr-example" data-example-id="simple-s">
		            <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;s&gt;</span>This line of text is meant to be treated as no longer accurate.<span class="nt">&lt;/s&gt;</span></code></pre></figure>

		        <h3 id="inserted-text"><a class="anchorjs-link " href="#inserted-text" aria-label="Anchor link for: inserted text" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Inserted text</h3>
		        <p>For indicating additions to the document use the <code>&lt;ins&gt;</code> tag.</p>
		        <div class="dr-example" data-example-id="simple-ins">
		            <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ins&gt;</span>This line of text is meant to be treated as an addition to the document.<span class="nt">&lt;/ins&gt;</span></code></pre></figure>

		        <h3 id="underlined-text"><a class="anchorjs-link " href="#underlined-text" aria-label="Anchor link for: underlined text" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Underlined text</h3>
		        <p>To underline text use the <code>&lt;u&gt;</code> tag.</p>
		        <div class="dr-example" data-example-id="simple-u">
		            <p><u>This line of text will render as underlined</u></p>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;u&gt;</span>This line of text will render as underlined<span class="nt">&lt;/u&gt;</span></code></pre></figure>

		        <p>Make use of HTML's default emphasis tags with lightweight styles.</p>
		        <h3 id="small-text"><a class="anchorjs-link " href="#small-text" aria-label="Anchor link for: small text" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Small text</h3>
		        <p>For de-emphasizing inline or blocks of text, use the <code>&lt;small&gt;</code> tag to set text at 85% the size of the parent. Heading elements receive their own <code>font-size</code> for nested <code>&lt;small&gt;</code> elements.</p>
		        <p>You may alternatively use an inline element with <code>.small</code> in place of any <code>&lt;small&gt;</code>.</p>
		        <div class="dr-example" data-example-id="simple-small">
		            <p><small>This line of text is meant to be treated as fine print.</small></p>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;small&gt;</span>This line of text is meant to be treated as fine print.<span class="nt">&lt;/small&gt;</span></code></pre></figure>

		        <h3 id="bold"><a class="anchorjs-link " href="#bold" aria-label="Anchor link for: bold" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Bold</h3>
		        <p>For emphasizing a snippet of text with a heavier font-weight.</p>
		        <div class="dr-example" data-example-id="simple-strong">
		            <p>The following snippet of text is <strong>rendered as bold text</strong>.</p>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;strong&gt;</span>rendered as bold text<span class="nt">&lt;/strong&gt;</span></code></pre></figure>

		        <h3 id="italics"><a class="anchorjs-link " href="#italics" aria-label="Anchor link for: italics" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Italics</h3>
		        <p>For emphasizing a snippet of text with italics.</p>
		        <div class="dr-example" data-example-id="simple-em">
		            <p>The following snippet of text is <em>rendered as italicized text</em>.</p>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;em&gt;</span>rendered as italicized text<span class="nt">&lt;/em&gt;</span></code></pre></figure>

		        <div class="dr-callout dr-callout-info" id="callout-type-b-i-elems">
		            <h4>Alternate elements</h4>
		            <p>Feel free to use <code>&lt;b&gt;</code> and <code>&lt;i&gt;</code> in HTML5. <code>&lt;b&gt;</code> is meant to highlight words or phrases without conveying additional importance while <code>&lt;i&gt;</code> is mostly for voice, technical terms, etc.</p>
		        </div>
		        <h2 id="type-alignment"><a class="anchorjs-link " href="#type-alignment" aria-label="Anchor link for: type alignment" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Alignment classes</h2>
		        <p>Easily realign text to components with text alignment classes.</p>
		        <div class="dr-example" data-example-id="text-alignment">
		            <p class="text-left">Left aligned text.</p>
		            <p class="text-center">Center aligned text.</p>
		            <p class="text-right">Right aligned text.</p>
		            <p class="text-justify">Justified text.</p>
		            <p class="text-nowrap">No wrap text.</p>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-left"</span><span class="nt">&gt;</span>Left aligned text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-center"</span><span class="nt">&gt;</span>Center aligned text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-right"</span><span class="nt">&gt;</span>Right aligned text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-justify"</span><span class="nt">&gt;</span>Justified text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-nowrap"</span><span class="nt">&gt;</span>No wrap text.<span class="nt">&lt;/p&gt;</span></code></pre></figure>

		        <h2 id="type-transformation"><a class="anchorjs-link " href="#type-transformation" aria-label="Anchor link for: type transformation" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Transformation classes</h2>
		        <p>Transform text in components with text capitalization classes.</p>
		        <div class="dr-example" data-example-id="text-capitalization">
		            <p class="text-lowercase">Lowercased text.</p>
		            <p class="text-uppercase">Uppercased text.</p>
		            <p class="text-capitalize">Capitalized text.</p>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-lowercase"</span><span class="nt">&gt;</span>Lowercased text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-uppercase"</span><span class="nt">&gt;</span>Uppercased text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-capitalize"</span><span class="nt">&gt;</span>Capitalized text.<span class="nt">&lt;/p&gt;</span></code></pre></figure>

		        <h2 id="type-abbreviations"><a class="anchorjs-link " href="#type-abbreviations" aria-label="Anchor link for: type abbreviations" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Abbreviations</h2>
		        <p>Stylized implementation of HTML's <code>&lt;abbr&gt;</code> element for abbreviations and acronyms to show the expanded version on hover. Abbreviations with a <code>title</code> attribute have a light dotted bottom border and a help cursor on hover, providing additional context on hover and to users of assistive technologies.</p>
		        <h3 id="basic-abbreviation"><a class="anchorjs-link " href="#basic-abbreviation" aria-label="Anchor link for: basic abbreviation" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Basic abbreviation</h3>
		        <div class="dr-example" data-example-id="simple-abbr">
		            <p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;abbr</span> <span class="na">title=</span><span class="s">"attribute"</span><span class="nt">&gt;</span>attr<span class="nt">&lt;/abbr&gt;</span></code></pre></figure>

		        <h3 id="initialism"><a class="anchorjs-link " href="#initialism" aria-label="Anchor link for: initialism" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Initialism</h3>
		        <p>Add <code>.initialism</code> to an abbreviation for a slightly smaller font-size.</p>
		        <div class="dr-example" data-example-id="simple-initialism">
		            <p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr> is the best thing since sliced bread.</p>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;abbr</span> <span class="na">title=</span><span class="s">"HyperText Markup Language"</span> <span class="na">class=</span><span class="s">"initialism"</span><span class="nt">&gt;</span>HTML<span class="nt">&lt;/abbr&gt;</span></code></pre></figure>

		        <h2 id="type-addresses"><a class="anchorjs-link " href="#type-addresses" aria-label="Anchor link for: type addresses" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Addresses</h2>
		        <p>Present contact information for the nearest ancestor or the entire body of work. Preserve formatting by ending all lines with <code>&lt;br&gt;</code>.</p>
		        <div class="dr-example" data-example-id="simple-address"> <address> <strong>Twitter, Inc.</strong><br> 1355 Market Street, Suite 900<br> San Francisco, CA 94103<br> <abbr title="Phone">P:</abbr> (123) 456-7890 </address> <address> <strong>Full Name</strong><br> <a href="mailto:#">first.last@example.com</a> </address> </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;address&gt;</span>
  <span class="nt">&lt;strong&gt;</span>Twitter, Inc.<span class="nt">&lt;/strong&gt;&lt;br&gt;</span>
  1355 Market Street, Suite 900<span class="nt">&lt;br&gt;</span>
  San Francisco, CA 94103<span class="nt">&lt;br&gt;</span>
  <span class="nt">&lt;abbr</span> <span class="na">title=</span><span class="s">"Phone"</span><span class="nt">&gt;</span>P:<span class="nt">&lt;/abbr&gt;</span> (123) 456-7890
<span class="nt">&lt;/address&gt;</span>

<span class="nt">&lt;address&gt;</span>
  <span class="nt">&lt;strong&gt;</span>Full Name<span class="nt">&lt;/strong&gt;&lt;br&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"mailto:#"</span><span class="nt">&gt;</span>first.last@example.com<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/address&gt;</span></code></pre></figure>

		        <h2 id="type-blockquotes"><a class="anchorjs-link " href="#type-blockquotes" aria-label="Anchor link for: type blockquotes" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Blockquotes</h2>
		        <p>For quoting blocks of content from another source within your document.</p>
		        <h3 id="default-blockquote"><a class="anchorjs-link " href="#default-blockquote" aria-label="Anchor link for: default blockquote" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Default blockquote</h3>
		        <p>Wrap <code>&lt;blockquote&gt;</code> around any <abbr title="HyperText Markup Language">HTML</abbr> as the quote. For straight quotes, we recommend a <code>&lt;p&gt;</code>.</p>
		        <div class="dr-example" data-example-id="simple-blockquote">
		            <blockquote>
		                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
		            </blockquote>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;blockquote&gt;</span>
  <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;/blockquote&gt;</span></code></pre></figure>

		        <h3 id="blockquote-options"><a class="anchorjs-link " href="#blockquote-options" aria-label="Anchor link for: blockquote options" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Blockquote options</h3>
		        <p>Style and content changes for simple variations on a standard <code>&lt;blockquote&gt;</code>.</p>
		        <h4 id="naming-a-source"><a class="anchorjs-link " href="#naming-a-source" aria-label="Anchor link for: naming a source" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Naming a source</h4>
		        <p>Add a <code>&lt;footer&gt;</code> for identifying the source. Wrap the name of the source work in <code>&lt;cite&gt;</code>.</p>
		        <div class="dr-example" data-example-id="blockquote-cite">
		            <blockquote>
		                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
		                <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
		            </blockquote>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;blockquote&gt;</span>
  <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;footer&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/footer&gt;</span>
<span class="nt">&lt;/blockquote&gt;</span></code></pre></figure>

		        <h4 id="alternate-displays"><a class="anchorjs-link " href="#alternate-displays" aria-label="Anchor link for: alternate displays" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Alternate displays</h4>
		        <p>Add <code>.blockquote-reverse</code> for a blockquote with right-aligned content.</p>
		        <div class="dr-example" style="overflow:hidden" data-example-id="blockquote-reverse">
		            <blockquote class="blockquote-reverse">
		                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
		                <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
		            </blockquote>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"blockquote-reverse"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/blockquote&gt;</span></code></pre></figure>

		        <h2 id="type-lists"><a class="anchorjs-link " href="#type-lists" aria-label="Anchor link for: type lists" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Lists</h2>
		        <h3 id="unordered"><a class="anchorjs-link " href="#unordered" aria-label="Anchor link for: unordered" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Unordered</h3>
		        <p>A list of items in which the order does <em>not</em> explicitly matter.</p>
		        <div class="dr-example" data-example-id="simple-ul">
		            <ul>
		                <li>Lorem ipsum dolor sit amet</li>
		                <li>Consectetur adipiscing elit</li>
		                <li>Integer molestie lorem at massa</li>
		                <li>Facilisis in pretium nisl aliquet</li>
		                <li>Nulla volutpat aliquam velit
		                    <ul>
		                        <li>Phasellus iaculis neque</li>
		                        <li>Purus sodales ultricies</li>
		                        <li>Vestibulum laoreet porttitor sem</li>
		                        <li>Ac tristique libero volutpat at</li>
		                    </ul>
		                </li>
		                <li>Faucibus porta lacus fringilla vel</li>
		                <li>Aenean sit amet erat nunc</li>
		                <li>Eget porttitor lorem</li>
		            </ul>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul&gt;</span>
  <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></figure>

		        <h3 id="ordered"><a class="anchorjs-link " href="#ordered" aria-label="Anchor link for: ordered" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Ordered</h3>
		        <p>A list of items in which the order <em>does</em> explicitly matter.</p>
		        <div class="dr-example" data-example-id="simple-ol">
		            <ol>
		                <li>Lorem ipsum dolor sit amet</li>
		                <li>Consectetur adipiscing elit</li>
		                <li>Integer molestie lorem at massa</li>
		                <li>Facilisis in pretium nisl aliquet</li>
		                <li>Nulla volutpat aliquam velit</li>
		                <li>Faucibus porta lacus fringilla vel</li>
		                <li>Aenean sit amet erat nunc</li>
		                <li>Eget porttitor lorem</li>
		            </ol>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ol&gt;</span>
  <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ol&gt;</span></code></pre></figure>

		        <h3 id="unstyled"><a class="anchorjs-link " href="#unstyled" aria-label="Anchor link for: unstyled" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Unstyled</h3>
		        <p>Remove the default <code>list-style</code> and left margin on list items (immediate children only). <strong>This only applies to immediate children list items</strong>, meaning you will need to add the class for any nested lists as well.</p>
		        <div class="dr-example" data-example-id="unstyled-list">
		            <ul class="list-unstyled">
		                <li>Lorem ipsum dolor sit amet</li>
		                <li>Consectetur adipiscing elit</li>
		                <li>Integer molestie lorem at massa</li>
		                <li>Facilisis in pretium nisl aliquet</li>
		                <li>Nulla volutpat aliquam velit
		                    <ul>
		                        <li>Phasellus iaculis neque</li>
		                        <li>Purus sodales ultricies</li>
		                        <li>Vestibulum laoreet porttitor sem</li>
		                        <li>Ac tristique libero volutpat at</li>
		                    </ul>
		                </li>
		                <li>Faucibus porta lacus fringilla vel</li>
		                <li>Aenean sit amet erat nunc</li>
		                <li>Eget porttitor lorem</li>
		            </ul>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-unstyled"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></figure>

		        <h3 id="inline"><a class="anchorjs-link " href="#inline" aria-label="Anchor link for: inline" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Inline</h3>
		        <p>Place all list items on a single line with <code>display: inline-block;</code> and some light padding.</p>
		        <div class="dr-example" data-example-id="list-inline">
		            <ul class="list-inline">
		                <li>Lorem ipsum</li>
		                <li>Phasellus iaculis</li>
		                <li>Nulla volutpat</li>
		            </ul>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></figure>

		        <h3 id="description"><a class="anchorjs-link " href="#description" aria-label="Anchor link for: description" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Description</h3>
		        <p>A list of terms with their associated descriptions.</p>
		        <div class="dr-example" data-example-id="simple-dl">
		            <dl> <dt>Description lists</dt>
		                <dd>A description list is perfect for defining terms.</dd> <dt>Euismod</dt>
		                <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
		                <dd>Donec id elit non mi porta gravida at eget metus.</dd> <dt>Malesuada porta</dt>
		                <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
		            </dl>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;dl&gt;</span>
  <span class="nt">&lt;dt&gt;</span>...<span class="nt">&lt;/dt&gt;</span>
  <span class="nt">&lt;dd&gt;</span>...<span class="nt">&lt;/dd&gt;</span>
<span class="nt">&lt;/dl&gt;</span></code></pre></figure>

		        <h4 id="horizontal-description"><a class="anchorjs-link " href="#horizontal-description" aria-label="Anchor link for: horizontal description" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Horizontal description</h4>
		        <p>Make terms and descriptions in <code>&lt;dl&gt;</code> line up side-by-side. Starts off stacked like default <code>&lt;dl&gt;</code>s, but when the navbar expands, so do these.</p>
		        <div class="dr-example" data-example-id="horizontal-dl">
		            <dl class="dl-horizontal"> <dt>Description lists</dt>
		                <dd>A description list is perfect for defining terms.</dd> <dt>Euismod</dt>
		                <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
		                <dd>Donec id elit non mi porta gravida at eget metus.</dd> <dt>Malesuada porta</dt>
		                <dd>Etiam porta sem malesuada magna mollis euismod.</dd> <dt>Felis euismod semper eget lacinia</dt>
		                <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
		            </dl>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;dl</span> <span class="na">class=</span><span class="s">"dl-horizontal"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;dt&gt;</span>...<span class="nt">&lt;/dt&gt;</span>
  <span class="nt">&lt;dd&gt;</span>...<span class="nt">&lt;/dd&gt;</span>
<span class="nt">&lt;/dl&gt;</span></code></pre></figure>

		        <div class="dr-callout dr-callout-info" id="callout-type-dl-truncate">
		            <h4>Auto-truncating</h4>
		            <p>Horizontal description lists will truncate terms that are too long to fit in the left column with <code>text-overflow</code>. In narrower viewports, they will change to the default stacked layout.</p>
		        </div>
		    </div>


		    <!-- NEW SECTION -->


		    <div class="dr-docs-section">
		        <h1 id="code" class="page-header"><a class="anchorjs-link " href="#code" aria-label="Anchor link for: code" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Code</h1>
		        <h2 id="code-inline"><a class="anchorjs-link " href="#code-inline" aria-label="Anchor link for: code inline" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Inline</h2>
		        <p>Wrap inline snippets of code with <code>&lt;code&gt;</code>.</p>
		        <div class="dr-example" data-example-id="inline-code"> For example, <code>&lt;section&gt;</code> should be wrapped as inline. </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html">For example, <span class="nt">&lt;code&gt;</span><span class="ni">&amp;lt;</span>section<span class="ni">&amp;gt;</span><span class="nt">&lt;/code&gt;</span> should be wrapped as inline.</code></pre></figure>

		        <h2 id="code-user-input"><a class="anchorjs-link " href="#code-user-input" aria-label="Anchor link for: code user input" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>User input</h2>
		        <p>Use the <code>&lt;kbd&gt;</code> to indicate input that is typically entered via keyboard.</p>
		        <div class="dr-example" data-example-id="simple-kbd"> To switch directories, type <kbd>cd</kbd> followed by the name of the directory.
		            <br> To edit settings, press <kbd><kbd>ctrl</kbd> + <kbd>,</kbd></kbd>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html">To switch directories, type <span class="nt">&lt;kbd&gt;</span>cd<span class="nt">&lt;/kbd&gt;</span> followed by the name of the directory.<span class="nt">&lt;br&gt;</span>
To edit settings, press <span class="nt">&lt;kbd&gt;&lt;kbd&gt;</span>ctrl<span class="nt">&lt;/kbd&gt;</span> + <span class="nt">&lt;kbd&gt;</span>,<span class="nt">&lt;/kbd&gt;&lt;/kbd&gt;</span></code></pre></figure>

		        <h2 id="code-block"><a class="anchorjs-link " href="#code-block" aria-label="Anchor link for: code block" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Basic block</h2>
		        <p>Use <code>&lt;pre&gt;</code> for multiple lines of code. Be sure to escape any angle brackets in the code for proper rendering.</p>
		        <div class="dr-example" data-example-id="simple-pre"> <pre>&lt;p&gt;Sample text here...&lt;/p&gt;</pre> </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;pre&gt;</span><span class="ni">&amp;lt;</span>p<span class="ni">&amp;gt;</span>Sample text here...<span class="ni">&amp;lt;</span>/p<span class="ni">&amp;gt;</span><span class="nt">&lt;/pre&gt;</span></code></pre></figure>

		        <p>You may optionally add the <code>.pre-scrollable</code> class, which will set a max-height of 350px and provide a y-axis scrollbar.</p>
		        <h2 id="code-variables"><a class="anchorjs-link " href="#code-variables" aria-label="Anchor link for: code variables" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Variables</h2>
		        <p>For indicating variables use the <code>&lt;var&gt;</code> tag.</p>
		        <div class="dr-example" data-example-id="simple-var">
		            <p><var>y</var> = <var>m</var><var>x</var> + <var>b</var></p>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;var&gt;</span>y<span class="nt">&lt;/var&gt;</span> = <span class="nt">&lt;var&gt;</span>m<span class="nt">&lt;/var&gt;&lt;var&gt;</span>x<span class="nt">&lt;/var&gt;</span> + <span class="nt">&lt;var&gt;</span>b<span class="nt">&lt;/var&gt;</span></code></pre></figure>

		        <h2 id="code-sample-output"><a class="anchorjs-link " href="#code-sample-output" aria-label="Anchor link for: code sample output" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Sample output</h2>
		        <p>For indicating blocks sample output from a program use the <code>&lt;samp&gt;</code> tag.</p>
		        <div class="dr-example" data-example-id="simple-samp">
		            <p><samp>This text is meant to be treated as sample output from a computer program.</samp></p>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;samp&gt;</span>This text is meant to be treated as sample output from a computer program.<span class="nt">&lt;/samp&gt;</span></code></pre></figure>

		    </div>


		    <!-- NEW SECTION -->


		    <div class="dr-docs-section">
		        <h1 id="tables" class="page-header"><a class="anchorjs-link " href="#tables" aria-label="Anchor link for: tables" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Tables</h1>
		        <h2 id="tables-example"><a class="anchorjs-link " href="#tables-example" aria-label="Anchor link for: tables example" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Basic example</h2>
		        <p>For basic styling—light padding and only horizontal dividers—add the base class <code>.table</code> to any <code>&lt;table&gt;</code>. It may seem super redundant, but given the widespread use of tables for other plugins like calendars and date pickers, we've opted to isolate our custom table styles.</p>
		        <div class="dr-example" data-example-id="simple-table">
		            <table class="table">
		                <caption>Optional table caption.</caption>
		                <thead>
		                    <tr>
		                        <th>#</th>
		                        <th>First Name</th>
		                        <th>Last Name</th>
		                        <th>Username</th>
		                    </tr>
		                </thead>
		                <tbody>
		                    <tr>
		                        <th scope="row">1</th>
		                        <td>Mark</td>
		                        <td>Otto</td>
		                        <td>@mdo</td>
		                    </tr>
		                    <tr>
		                        <th scope="row">2</th>
		                        <td>Jacob</td>
		                        <td>Thornton</td>
		                        <td>@fat</td>
		                    </tr>
		                    <tr>
		                        <th scope="row">3</th>
		                        <td>Larry</td>
		                        <td>the Bird</td>
		                        <td>@twitter</td>
		                    </tr>
		                </tbody>
		            </table>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/table&gt;</span></code></pre></figure>

		        <h2 id="tables-striped"><a class="anchorjs-link " href="#tables-striped" aria-label="Anchor link for: tables striped" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Striped rows</h2>
		        <p>Use <code>.table-striped</code> to add zebra-striping to any table row within the <code>&lt;tbody&gt;</code>.</p>
		        <div class="dr-callout dr-callout-danger" id="callout-tables-striped-ie8">
		            <h4>Cross-browser compatibility</h4>
		            <p>Striped tables are styled via the <code>:nth-child</code> CSS selector, which is not available in Internet Explorer 8.</p>
		        </div>
		        <div class="dr-example" data-example-id="striped-table">
		            <table class="table table-striped">
		                <thead>
		                    <tr>
		                        <th>#</th>
		                        <th>First Name</th>
		                        <th>Last Name</th>
		                        <th>Username</th>
		                    </tr>
		                </thead>
		                <tbody>
		                    <tr>
		                        <th scope="row">1</th>
		                        <td>Mark</td>
		                        <td>Otto</td>
		                        <td>@mdo</td>
		                    </tr>
		                    <tr>
		                        <th scope="row">2</th>
		                        <td>Jacob</td>
		                        <td>Thornton</td>
		                        <td>@fat</td>
		                    </tr>
		                    <tr>
		                        <th scope="row">3</th>
		                        <td>Larry</td>
		                        <td>the Bird</td>
		                        <td>@twitter</td>
		                    </tr>
		                </tbody>
		            </table>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-striped"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/table&gt;</span></code></pre></figure>

		        <h2 id="tables-bordered"><a class="anchorjs-link " href="#tables-bordered" aria-label="Anchor link for: tables bordered" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Bordered table</h2>
		        <p>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</p>
		        <div class="dr-example" data-example-id="bordered-table">
		            <table class="table table-bordered">
		                <thead>
		                    <tr>
		                        <th>#</th>
		                        <th>First Name</th>
		                        <th>Last Name</th>
		                        <th>Username</th>
		                    </tr>
		                </thead>
		                <tbody>
		                    <tr>
		                        <th scope="row">1</th>
		                        <td>Mark</td>
		                        <td>Otto</td>
		                        <td>@mdo</td>
		                    </tr>
		                    <tr>
		                        <th scope="row">2</th>
		                        <td>Jacob</td>
		                        <td>Thornton</td>
		                        <td>@fat</td>
		                    </tr>
		                    <tr>
		                        <th scope="row">3</th>
		                        <td>Larry</td>
		                        <td>the Bird</td>
		                        <td>@twitter</td>
		                    </tr>
		                </tbody>
		            </table>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-bordered"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/table&gt;</span></code></pre></figure>

		        <h2 id="tables-hover-rows"><a class="anchorjs-link " href="#tables-hover-rows" aria-label="Anchor link for: tables hover rows" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Hover rows</h2>
		        <p>Add <code>.table-hover</code> to enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.</p>
		        <div class="dr-example" data-example-id="hoverable-table">
		            <table class="table table-hover">
		                <thead>
		                    <tr>
		                        <th>#</th>
		                        <th>First Name</th>
		                        <th>Last Name</th>
		                        <th>Username</th>
		                    </tr>
		                </thead>
		                <tbody>
		                    <tr>
		                        <th scope="row">1</th>
		                        <td>Mark</td>
		                        <td>Otto</td>
		                        <td>@mdo</td>
		                    </tr>
		                    <tr>
		                        <th scope="row">2</th>
		                        <td>Jacob</td>
		                        <td>Thornton</td>
		                        <td>@fat</td>
		                    </tr>
		                    <tr>
		                        <th scope="row">3</th>
		                        <td>Larry</td>
		                        <td>the Bird</td>
		                        <td>@twitter</td>
		                    </tr>
		                </tbody>
		            </table>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-hover"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/table&gt;</span></code></pre></figure>

		        <h2 id="tables-condensed"><a class="anchorjs-link " href="#tables-condensed" aria-label="Anchor link for: tables condensed" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Condensed table</h2>
		        <p>Add <code>.table-condensed</code> to make tables more compact by cutting cell padding in half.</p>
		        <div class="dr-example" data-example-id="condensed-table">
		            <table class="table table-condensed">
		                <thead>
		                    <tr>
		                        <th>#</th>
		                        <th>First Name</th>
		                        <th>Last Name</th>
		                        <th>Username</th>
		                    </tr>
		                </thead>
		                <tbody>
		                    <tr>
		                        <th scope="row">1</th>
		                        <td>Mark</td>
		                        <td>Otto</td>
		                        <td>@mdo</td>
		                    </tr>
		                    <tr>
		                        <th scope="row">2</th>
		                        <td>Jacob</td>
		                        <td>Thornton</td>
		                        <td>@fat</td>
		                    </tr>
		                    <tr>
		                        <th scope="row">3</th>
		                        <td colspan="2">Larry the Bird</td>
		                        <td>@twitter</td>
		                    </tr>
		                </tbody>
		            </table>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-condensed"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/table&gt;</span></code></pre></figure>

		        <h2 id="tables-contextual-classes"><a class="anchorjs-link " href="#tables-contextual-classes" aria-label="Anchor link for: tables contextual classes" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Contextual classes</h2>
		        <p>Use contextual classes to color table rows or individual cells.</p>
		        <div class="table-responsive">
		            <table class="table table-bordered table-striped">
		                <colgroup>
		                    <col class="col-xs-1">
		                        <col class="col-xs-7">
		                </colgroup>
		                <thead>
		                    <tr>
		                        <th>Class</th>
		                        <th>Description</th>
		                    </tr>
		                </thead>
		                <tbody>
		                    <tr>
		                        <th scope="row"> <code>.active</code> </th>
		                        <td>Applies the hover color to a particular row or cell</td>
		                    </tr>
		                    <tr>
		                        <th scope="row"> <code>.success</code> </th>
		                        <td>Indicates a successful or positive action</td>
		                    </tr>
		                    <tr>
		                        <th scope="row"> <code>.info</code> </th>
		                        <td>Indicates a neutral informative change or action</td>
		                    </tr>
		                    <tr>
		                        <th scope="row"> <code>.warning</code> </th>
		                        <td>Indicates a warning that might need attention</td>
		                    </tr>
		                    <tr>
		                        <th scope="row"> <code>.danger</code> </th>
		                        <td>Indicates a dangerous or potentially negative action</td>
		                    </tr>
		                </tbody>
		            </table>
		        </div>
		        <div class="dr-example" data-example-id="contextual-table">
		            <table class="table">
		                <thead>
		                    <tr>
		                        <th>#</th>
		                        <th>Column heading</th>
		                        <th>Column heading</th>
		                        <th>Column heading</th>
		                    </tr>
		                </thead>
		                <tbody>
		                    <tr class="active">
		                        <th scope="row">1</th>
		                        <td>Column content</td>
		                        <td>Column content</td>
		                        <td>Column content</td>
		                    </tr>
		                    <tr>
		                        <th scope="row">2</th>
		                        <td>Column content</td>
		                        <td>Column content</td>
		                        <td>Column content</td>
		                    </tr>
		                    <tr class="success">
		                        <th scope="row">3</th>
		                        <td>Column content</td>
		                        <td>Column content</td>
		                        <td>Column content</td>
		                    </tr>
		                    <tr>
		                        <th scope="row">4</th>
		                        <td>Column content</td>
		                        <td>Column content</td>
		                        <td>Column content</td>
		                    </tr>
		                    <tr class="info">
		                        <th scope="row">5</th>
		                        <td>Column content</td>
		                        <td>Column content</td>
		                        <td>Column content</td>
		                    </tr>
		                    <tr>
		                        <th scope="row">6</th>
		                        <td>Column content</td>
		                        <td>Column content</td>
		                        <td>Column content</td>
		                    </tr>
		                    <tr class="warning">
		                        <th scope="row">7</th>
		                        <td>Column content</td>
		                        <td>Column content</td>
		                        <td>Column content</td>
		                    </tr>
		                    <tr>
		                        <th scope="row">8</th>
		                        <td>Column content</td>
		                        <td>Column content</td>
		                        <td>Column content</td>
		                    </tr>
		                    <tr class="danger">
		                        <th scope="row">9</th>
		                        <td>Column content</td>
		                        <td>Column content</td>
		                        <td>Column content</td>
		                    </tr>
		                </tbody>
		            </table>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- On rows --&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>

<span class="c">&lt;!-- On cells (`td` or `th`) --&gt;</span>
<span class="nt">&lt;tr&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
<span class="nt">&lt;/tr&gt;</span></code></pre></figure>

		        <div class="dr-callout dr-callout-warning" id="callout-tables-context-accessibility">
		            <h4>Conveying meaning to assistive technologies</h4>
		            <p>Using color to add meaning to a table row or individual cell only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (the visible text in the relevant table row/cell), or is included through alternative means, such as additional text hidden with the <code>.sr-only</code> class.</p>
		        </div>
		        <h2 id="tables-responsive"><a class="anchorjs-link " href="#tables-responsive" aria-label="Anchor link for: tables responsive" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Responsive tables</h2>
		        <p>Create responsive tables by wrapping any <code>.table</code> in <code>.table-responsive</code> to make them scroll horizontally on small devices (under 768px). When viewing on anything larger than 768px wide, you will not see any difference in these tables.</p>
		        <div class="dr-callout dr-callout-warning" id="callout-tables-responsive-overflow">
		            <h4>Vertical clipping/truncation</h4>
		            <p>Responsive tables make use of <code>overflow-y: hidden</code>, which clips off any content that goes beyond the bottom or top edges of the table. In particular, this can clip off dropdown menus and other third-party widgets.</p>
		        </div>
		        <div class="dr-callout dr-callout-warning" id="callout-tables-responsive-ff-fieldset">
		            <h4>Firefox and fieldsets</h4>
		            <p>Firefox has some awkward fieldset styling involving <code>width</code> that interferes with the responsive table. This cannot be overriden without a Firefox-specific hack that we <strong>don't</strong> provide in Bootstrap:</p>
		            
<figure class="highlight"><pre><code class="language-css" data-lang="css"><span class="k">@-moz-document</span> <span class="n">url-prefix</span><span class="p">()</span> <span class="p">{</span>
  <span class="nt">fieldset</span> <span class="p">{</span> <span class="nl">display</span><span class="p">:</span> <span class="nb">table-cell</span><span class="p">;</span> <span class="p">}</span>
<span class="p">}</span></code></pre></figure>

		            <p>For more information, read <a href="https://stackoverflow.com/questions/17408815/fieldset-resizes-wrong-appears-to-have-unremovable-min-width-min-content/17863685#17863685">this Stack Overflow answer</a>.</p>
		        </div>
		        <div class="dr-example" data-example-id="simple-responsive-table">
		            <div class="table-responsive">
		                <table class="table">
		                    <thead>
		                        <tr>
		                            <th>#</th>
		                            <th>Table heading</th>
		                            <th>Table heading</th>
		                            <th>Table heading</th>
		                            <th>Table heading</th>
		                            <th>Table heading</th>
		                            <th>Table heading</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                        <tr>
		                            <th scope="row">1</th>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                        </tr>
		                        <tr>
		                            <th scope="row">2</th>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                        </tr>
		                        <tr>
		                            <th scope="row">3</th>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                        </tr>
		                    </tbody>
		                </table>
		            </div>
		            <div class="table-responsive">
		                <table class="table table-bordered">
		                    <thead>
		                        <tr>
		                            <th>#</th>
		                            <th>Table heading</th>
		                            <th>Table heading</th>
		                            <th>Table heading</th>
		                            <th>Table heading</th>
		                            <th>Table heading</th>
		                            <th>Table heading</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                        <tr>
		                            <th scope="row">1</th>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                        </tr>
		                        <tr>
		                            <th scope="row">2</th>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                        </tr>
		                        <tr>
		                            <th scope="row">3</th>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                        </tr>
		                    </tbody>
		                </table>
		            </div>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"table-responsive"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
    ...
  <span class="nt">&lt;/table&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

		    </div>


		    <!-- NEW SECTION -->


		    <div class="dr-docs-section">
		        <h1 id="forms" class="page-header"><a class="anchorjs-link " href="#forms" aria-label="Anchor link for: forms" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Forms</h1>
		        <h2 id="forms-example"><a class="anchorjs-link " href="#forms-example" aria-label="Anchor link for: forms example" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Basic example</h2>
		        <p>Individual form controls automatically receive some global styling. All textual <code>&lt;input&gt;</code>, <code>&lt;textarea&gt;</code>, and <code>&lt;select&gt;</code> elements with <code>.form-control</code> are set to <code>width: 100%;</code> by default. Wrap labels and controls in <code>.form-group</code> for optimum spacing.</p>
		        <div class="dr-example" data-example-id="basic-forms">
		            <form lpformnum="1">
		                <div class="form-group">
		                    <label for="exampleInputEmail1">Email address</label>
		                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" autocomplete="off" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAALZJREFUOBFjYKAANDQ0rGWiQD9IqzgL0BQ3IKMXiB8AcSKQ/waIrYDsKUD8Fir2pKmpSf/fv3+zgPxfzMzMSbW1tbeBbAaQC+b+//9fB4h9gOwikCAQTAPyDYHYBciuBQkANfcB+WZAbPP37992kBgIUOoFBiZGRsYkIL4ExJvZ2NhAXmFgYmLKBPLPAfFuFhaWJpAYEBQC+SeA+BDQC5UQIQpJYFgdodQLLyh0w6j20RCgUggAAEREPpKMfaEsAAAAAElFTkSuQmCC&quot;); background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; background-repeat: no-repeat;"> </div>
		                <div class="form-group">
		                    <label for="exampleInputPassword1">Password</label>
		                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" autocomplete="off" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAALZJREFUOBFjYKAANDQ0rGWiQD9IqzgL0BQ3IKMXiB8AcSKQ/waIrYDsKUD8Fir2pKmpSf/fv3+zgPxfzMzMSbW1tbeBbAaQC+b+//9fB4h9gOwikCAQTAPyDYHYBciuBQkANfcB+WZAbPP37992kBgIUOoFBiZGRsYkIL4ExJvZ2NhAXmFgYmLKBPLPAfFuFhaWJpAYEBQC+SeA+BDQC5UQIQpJYFgdodQLLyh0w6j20RCgUggAAEREPpKMfaEsAAAAAElFTkSuQmCC&quot;); background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; background-repeat: no-repeat;"> </div>
		                <div class="form-group">
		                    <label for="exampleInputFile">File input</label>
		                    <input type="file" id="exampleInputFile">
		                    <p class="help-block">Example block-level help text here.</p>
		                </div>
		                <div class="checkbox">
		                    <label>
		                        <input type="checkbox"> Check me out </label>
		                </div>
		                <button type="submit" class="btn btn-default">Submit</button>
		            </form>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleInputEmail1"</span><span class="nt">&gt;</span>Email address<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputEmail1"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleInputPassword1"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputPassword1"</span> <span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleInputFile"</span><span class="nt">&gt;</span>File input<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"file"</span> <span class="na">id=</span><span class="s">"exampleInputFile"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"help-block"</span><span class="nt">&gt;</span>Example block-level help text here.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span> Check me out
    <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Submit<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></figure>

		        <div class="dr-callout dr-callout-warning" id="callout-formgroup-inputgroup">
		            <h4>Don't mix form groups with input groups</h4>
		            <p>Do not mix form groups directly with <a href="/components/#input-groups">input groups</a>. Instead, nest the input group inside of the form group.</p>
		        </div>
		        <h2 id="forms-inline"><a class="anchorjs-link " href="#forms-inline" aria-label="Anchor link for: forms inline" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Inline form</h2>
		        <p>Add <code>.form-inline</code> to your form (which doesn't have to be a <code>&lt;form&gt;</code>) for left-aligned and inline-block controls. <strong>This only applies to forms within viewports that are at least 768px wide.</strong></p>
		        <div class="dr-callout dr-callout-danger" id="callout-inline-form-width">
		            <h4>May require custom widths</h4>
		            <p>Inputs and selects have <code>width: 100%;</code> applied by default in Bootstrap. Within inline forms, we reset that to <code>width: auto;</code> so multiple controls can reside on the same line. Depending on your layout, additional custom widths may be required.</p>
		        </div>
		        <div class="dr-callout dr-callout-warning" id="callout-inline-form-labels">
		            <h4>Always add labels</h4>
		            <p>Screen readers will have trouble with your forms if you don't include a label for every input. For these inline forms, you can hide the labels using the <code>.sr-only</code> class. There are further alternative methods of providing a label for assistive technologies, such as the <code>aria-label</code>, <code>aria-labelledby</code> or <code>title</code> attribute. If none of these is present, screen readers may resort to using the <code>placeholder</code> attribute, if present, but note that use of <code>placeholder</code> as a replacement for other labelling methods is not advised.</p>
		        </div>
		        <div class="dr-example" data-example-id="simple-form-inline">
		            <form class="form-inline">
		                <div class="form-group">
		                    <label for="exampleInputName2">Name</label>
		                    <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe"> </div>
		                <div class="form-group">
		                    <label for="exampleInputEmail2">Email</label>
		                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com"> </div>
		                <button type="submit" class="btn btn-default">Send invitation</button>
		            </form>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleInputName2"</span><span class="nt">&gt;</span>Name<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputName2"</span> <span class="na">placeholder=</span><span class="s">"Jane Doe"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleInputEmail2"</span><span class="nt">&gt;</span>Email<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputEmail2"</span> <span class="na">placeholder=</span><span class="s">"jane.doe@example.com"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Send invitation<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></figure>

		        <div class="dr-example" data-example-id="simple-form-inline">
		            <form class="form-inline">
		                <div class="form-group">
		                    <label class="sr-only" for="exampleInputEmail3">Email address</label>
		                    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email"> </div>
		                <div class="form-group">
		                    <label class="sr-only" for="exampleInputPassword3">Password</label>
		                    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password"> </div>
		                <div class="checkbox">
		                    <label>
		                        <input type="checkbox"> Remember me </label>
		                </div>
		                <button type="submit" class="btn btn-default">Sign in</button>
		            </form>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"sr-only"</span> <span class="na">for=</span><span class="s">"exampleInputEmail3"</span><span class="nt">&gt;</span>Email address<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputEmail3"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"sr-only"</span> <span class="na">for=</span><span class="s">"exampleInputPassword3"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputPassword3"</span> <span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span> Remember me
    <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Sign in<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></figure>

		        <div class="dr-example" data-example-id="form-inline-with-input-group">
		            <form class="form-inline">
		                <div class="form-group">
		                    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
		                    <div class="input-group">
		                        <div class="input-group-addon">$</div>
		                        <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
		                        <div class="input-group-addon">.00</div>
		                    </div>
		                </div>
		                <button type="submit" class="btn btn-primary">Transfer cash</button>
		            </form>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"sr-only"</span> <span class="na">for=</span><span class="s">"exampleInputAmount"</span><span class="nt">&gt;</span>Amount (in dollars)<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>$<span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputAmount"</span> <span class="na">placeholder=</span><span class="s">"Amount"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>.00<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Transfer cash<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></figure>

		        <h2 id="forms-horizontal"><a class="anchorjs-link " href="#forms-horizontal" aria-label="Anchor link for: forms horizontal" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Horizontal form</h2>
		        <p>Use Bootstrap's predefined grid classes to align labels and groups of form controls in a horizontal layout by adding <code>.form-horizontal</code> to the form (which doesn't have to be a <code>&lt;form&gt;</code>). Doing so changes <code>.form-group</code>s to behave as grid rows, so no need for <code>.row</code>.</p>
		        <div class="dr-example" data-example-id="simple-horizontal-form">
		            <form class="form-horizontal">
		                <div class="form-group">
		                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
		                    <div class="col-sm-10">
		                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email" autocomplete="off" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAALZJREFUOBFjYKAANDQ0rGWiQD9IqzgL0BQ3IKMXiB8AcSKQ/waIrYDsKUD8Fir2pKmpSf/fv3+zgPxfzMzMSbW1tbeBbAaQC+b+//9fB4h9gOwikCAQTAPyDYHYBciuBQkANfcB+WZAbPP37992kBgIUOoFBiZGRsYkIL4ExJvZ2NhAXmFgYmLKBPLPAfFuFhaWJpAYEBQC+SeA+BDQC5UQIQpJYFgdodQLLyh0w6j20RCgUggAAEREPpKMfaEsAAAAAElFTkSuQmCC&quot;); background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; background-repeat: no-repeat;"> </div>
		                </div>
		                <div class="form-group">
		                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
		                    <div class="col-sm-10">
		                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password" autocomplete="off" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAALZJREFUOBFjYKAANDQ0rGWiQD9IqzgL0BQ3IKMXiB8AcSKQ/waIrYDsKUD8Fir2pKmpSf/fv3+zgPxfzMzMSbW1tbeBbAaQC+b+//9fB4h9gOwikCAQTAPyDYHYBciuBQkANfcB+WZAbPP37992kBgIUOoFBiZGRsYkIL4ExJvZ2NhAXmFgYmLKBPLPAfFuFhaWJpAYEBQC+SeA+BDQC5UQIQpJYFgdodQLLyh0w6j20RCgUggAAEREPpKMfaEsAAAAAElFTkSuQmCC&quot;); background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; background-repeat: no-repeat;"> </div>
		                </div>
		                <div class="form-group">
		                    <div class="col-sm-offset-2 col-sm-10">
		                        <div class="checkbox">
		                            <label>
		                                <input type="checkbox"> Remember me </label>
		                        </div>
		                    </div>
		                </div>
		                <div class="form-group">
		                    <div class="col-sm-offset-2 col-sm-10">
		                        <button type="submit" class="btn btn-default">Sign in</button>
		                    </div>
		                </div>
		            </form>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-horizontal"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputEmail3"</span> <span class="na">class=</span><span class="s">"col-sm-2 control-label"</span><span class="nt">&gt;</span>Email<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputEmail3"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputPassword3"</span> <span class="na">class=</span><span class="s">"col-sm-2 control-label"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputPassword3"</span> <span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-offset-2 col-sm-10"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label&gt;</span>
          <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span> Remember me
        <span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-offset-2 col-sm-10"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Sign in<span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></figure>

		        <h2 id="forms-controls"><a class="anchorjs-link " href="#forms-controls" aria-label="Anchor link for: forms controls" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Supported controls</h2>
		        <p>Examples of standard form controls supported in an example form layout.</p>
		        <h3 id="inputs"><a class="anchorjs-link " href="#inputs" aria-label="Anchor link for: inputs" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Inputs</h3>
		        <p>Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.</p>
		        <div class="dr-callout dr-callout-danger" id="callout-input-needs-type">
		            <h4>Type declaration required</h4>
		            <p>Inputs will only be fully styled if their <code>type</code> is properly declared.</p>
		        </div>
		        <div class="dr-example" data-example-id="text-form-control">
		            <form lpformnum="2">
		                <input type="text" class="form-control" placeholder="Text input"> </form>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Text input"</span><span class="nt">&gt;</span></code></pre></figure>

		        <div class="dr-callout dr-callout-info" id="callout-xref-input-group">
		            <h4>Input groups</h4>
		            <p>To add integrated text or buttons before and/or after any text-based <code>&lt;input&gt;</code>, <a href="../components/#input-groups">check out the input group component</a>.</p>
		        </div>
		        <h3 id="textarea"><a class="anchorjs-link " href="#textarea" aria-label="Anchor link for: textarea" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Textarea</h3>
		        <p>Form control which supports multiple lines of text. Change <code>rows</code> attribute as necessary.</p>
		        <div class="dr-example" data-example-id="textarea-form-control">
		            <form lpformnum="3">
		                <textarea class="form-control" rows="3" placeholder="Textarea"></textarea>
		            </form>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;textarea</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">rows=</span><span class="s">"3"</span><span class="nt">&gt;&lt;/textarea&gt;</span></code></pre></figure>

		        <h3 id="checkboxes-and-radios"><a class="anchorjs-link " href="#checkboxes-and-radios" aria-label="Anchor link for: checkboxes and radios" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Checkboxes and radios</h3>
		        <p>Checkboxes are for selecting one or several options in a list, while radios are for selecting one option from many.</p>
		        <p>Disabled checkboxes and radios are supported, but to provide a "not-allowed" cursor on hover of the parent <code>&lt;label&gt;</code>, you'll need to add the <code>.disabled</code> class to the parent <code>.radio</code>, <code>.radio-inline</code>, <code>.checkbox</code>, or <code>.checkbox-inline</code>.</p>
		        <h4 id="default-stacked"><a class="anchorjs-link " href="#default-stacked" aria-label="Anchor link for: default stacked" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Default (stacked)</h4>
		        <div class="dr-example" data-example-id="block-checkboxes-radios">
		            <form lpformnum="4">
		                <div class="checkbox">
		                    <label>
		                        <input type="checkbox" value=""> Option one is this and that—be sure to include why it's great </label>
		                </div>
		                <div class="checkbox disabled">
		                    <label>
		                        <input type="checkbox" value="" disabled="disabled"> Option two is disabled </label>
		                </div>
		                <br>
		                <div class="radio">
		                    <label>
		                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="checked"> Option one is this and that—be sure to include why it's great </label>
		                </div>
		                <div class="radio">
		                    <label>
		                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Option two can be something else and selecting it will deselect option one </label>
		                </div>
		                <div class="radio disabled">
		                    <label>
		                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled="disabled"> Option three is disabled </label>
		                </div>
		            </form>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">""</span><span class="nt">&gt;</span>
    Option one is this and that<span class="ni">&amp;mdash;</span>be sure to include why it's great
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox disabled"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">""</span> <span class="na">disabled</span><span class="nt">&gt;</span>
    Option two is disabled
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"radio"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"optionsRadios"</span> <span class="na">id=</span><span class="s">"optionsRadios1"</span> <span class="na">value=</span><span class="s">"option1"</span> <span class="na">checked</span><span class="nt">&gt;</span>
    Option one is this and that<span class="ni">&amp;mdash;</span>be sure to include why it's great
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"radio"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"optionsRadios"</span> <span class="na">id=</span><span class="s">"optionsRadios2"</span> <span class="na">value=</span><span class="s">"option2"</span><span class="nt">&gt;</span>
    Option two can be something else and selecting it will deselect option one
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"radio disabled"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"optionsRadios"</span> <span class="na">id=</span><span class="s">"optionsRadios3"</span> <span class="na">value=</span><span class="s">"option3"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
    Option three is disabled
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

		        <h4 id="inline-checkboxes-and-radios"><a class="anchorjs-link " href="#inline-checkboxes-and-radios" aria-label="Anchor link for: inline checkboxes and radios" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Inline checkboxes and radios</h4>
		        <p>Use the <code>.checkbox-inline</code> or <code>.radio-inline</code> classes on a series of checkboxes or radios for controls that appear on the same line.</p>
		        <div class="dr-example" data-example-id="inline-checkboxes-radios">
		            <form lpformnum="5">
		                <label class="checkbox-inline">
		                    <input type="checkbox" id="inlineCheckbox1" value="option1"> 1 </label>
		                <label class="checkbox-inline">
		                    <input type="checkbox" id="inlineCheckbox2" value="option2"> 2 </label>
		                <label class="checkbox-inline">
		                    <input type="checkbox" id="inlineCheckbox3" value="option3"> 3 </label>
		            </form>
		            <br>
		            <form lpformnum="6">
		                <label class="radio-inline">
		                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1 </label>
		                <label class="radio-inline">
		                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2 </label>
		                <label class="radio-inline">
		                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 3 </label>
		            </form>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"checkbox-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"inlineCheckbox1"</span> <span class="na">value=</span><span class="s">"option1"</span><span class="nt">&gt;</span> 1
<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"checkbox-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"inlineCheckbox2"</span> <span class="na">value=</span><span class="s">"option2"</span><span class="nt">&gt;</span> 2
<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"checkbox-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"inlineCheckbox3"</span> <span class="na">value=</span><span class="s">"option3"</span><span class="nt">&gt;</span> 3
<span class="nt">&lt;/label&gt;</span>

<span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"radio-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"inlineRadioOptions"</span> <span class="na">id=</span><span class="s">"inlineRadio1"</span> <span class="na">value=</span><span class="s">"option1"</span><span class="nt">&gt;</span> 1
<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"radio-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"inlineRadioOptions"</span> <span class="na">id=</span><span class="s">"inlineRadio2"</span> <span class="na">value=</span><span class="s">"option2"</span><span class="nt">&gt;</span> 2
<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"radio-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"inlineRadioOptions"</span> <span class="na">id=</span><span class="s">"inlineRadio3"</span> <span class="na">value=</span><span class="s">"option3"</span><span class="nt">&gt;</span> 3
<span class="nt">&lt;/label&gt;</span></code></pre></figure>

		        <h4 id="checkboxes-and-radios-without-la"><a class="anchorjs-link " href="#checkboxes-and-radios-without-la" aria-label="Anchor link for: checkboxes and radios without la" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Checkboxes and radios without label text</h4>
		        <p>Should you have no text within the <code>&lt;label&gt;</code>, the input is positioned as you'd expect. <strong>Currently only works on non-inline checkboxes and radios.</strong> Remember to still provide some form of label for assistive technologies (for instance, using <code>aria-label</code>).</p>
		        <div class="dr-example" data-example-id="checkboxes-radios-without-labels">
		            <form lpformnum="7">
		                <div class="checkbox">
		                    <label>
		                        <input type="checkbox" id="blankCheckbox" value="option1" aria-label="Checkbox without label text"> </label>
		                </div>
		                <div class="radio">
		                    <label>
		                        <input type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="Radio button without label text"> </label>
		                </div>
		            </form>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"blankCheckbox"</span> <span class="na">value=</span><span class="s">"option1"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"radio"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"blankRadio"</span> <span class="na">id=</span><span class="s">"blankRadio1"</span> <span class="na">value=</span><span class="s">"option1"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

		        <h3 id="selects"><a class="anchorjs-link " href="#selects" aria-label="Anchor link for: selects" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Selects</h3>
		        <p>Note that many native select menus—namely in Safari and Chrome—have rounded corners that cannot be modified via <code>border-radius</code> properties.</p>
		        <div class="dr-example" data-example-ids="select-form-control">
		            <form lpformnum="8">
		                <select class="form-control">
		                    <option>1</option>
		                    <option>2</option>
		                    <option>3</option>
		                    <option>4</option>
		                    <option>5</option>
		                </select>
		            </form>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;option&gt;</span>1<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>2<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>3<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>4<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>5<span class="nt">&lt;/option&gt;</span>
<span class="nt">&lt;/select&gt;</span></code></pre></figure>

		        <p>For <code>&lt;select&gt;</code> controls with the <code>multiple</code> attribute, multiple options are shown by default.</p>
		        <div class="dr-example" data-example-ids="select-multiple-form-control">
		            <form>
		                <select multiple="multiple" class="form-control">
		                    <option>1</option>
		                    <option>2</option>
		                    <option>3</option>
		                    <option>4</option>
		                    <option>5</option>
		                </select>
		            </form>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;select</span> <span class="na">multiple</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;option&gt;</span>1<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>2<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>3<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>4<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>5<span class="nt">&lt;/option&gt;</span>
<span class="nt">&lt;/select&gt;</span></code></pre></figure>

		        <h2 id="forms-controls-static"><a class="anchorjs-link " href="#forms-controls-static" aria-label="Anchor link for: forms controls static" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Static control</h2>
		        <p>When you need to place plain text next to a form label within a form, use the <code>.form-control-static</code> class on a <code>&lt;p&gt;</code>.</p>
		        <div class="dr-example" data-example-id="horizontal-static-form-control">
		            <form class="form-horizontal">
		                <div class="form-group">
		                    <label class="col-sm-2 control-label">Email</label>
		                    <div class="col-sm-10">
		                        <p class="form-control-static">email@example.com</p>
		                    </div>
		                </div>
		                <div class="form-group">
		                    <label for="inputPassword" class="col-sm-2 control-label">Password</label>
		                    <div class="col-sm-10">
		                        <input type="password" class="form-control" id="inputPassword" placeholder="Password" autocomplete="off" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAALZJREFUOBFjYKAANDQ0rGWiQD9IqzgL0BQ3IKMXiB8AcSKQ/waIrYDsKUD8Fir2pKmpSf/fv3+zgPxfzMzMSbW1tbeBbAaQC+b+//9fB4h9gOwikCAQTAPyDYHYBciuBQkANfcB+WZAbPP37992kBgIUOoFBiZGRsYkIL4ExJvZ2NhAXmFgYmLKBPLPAfFuFhaWJpAYEBQC+SeA+BDQC5UQIQpJYFgdodQLLyh0w6j20RCgUggAAEREPpKMfaEsAAAAAElFTkSuQmCC&quot;); background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; background-repeat: no-repeat;"> </div>
		                </div>
		            </form>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-horizontal"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"col-sm-2 control-label"</span><span class="nt">&gt;</span>Email<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"form-control-static"</span><span class="nt">&gt;</span>email@example.com<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputPassword"</span> <span class="na">class=</span><span class="s">"col-sm-2 control-label"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputPassword"</span> <span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></figure>

		        <div class="dr-example" data-example-id="inline-static-form-control">
		            <form class="form-inline">
		                <div class="form-group">
		                    <label class="sr-only">Email</label>
		                    <p class="form-control-static">email@example.com</p>
		                </div>
		                <div class="form-group">
		                    <label for="inputPassword2" class="sr-only">Password</label>
		                    <input type="password" class="form-control" id="inputPassword2" placeholder="Password"> </div>
		                <button type="submit" class="btn btn-default">Confirm identity</button>
		            </form>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Email<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"form-control-static"</span><span class="nt">&gt;</span>email@example.com<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputPassword2"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputPassword2"</span> <span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Confirm identity<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></figure>

		        <h2 id="forms-control-focus"><a class="anchorjs-link " href="#forms-control-focus" aria-label="Anchor link for: forms control focus" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Focus state</h2>
		        <p>We remove the default <code>outline</code> styles on some form controls and apply a <code>box-shadow</code> in its place for <code>:focus</code>.</p>
		        <div class="dr-example">
		            <form lpformnum="9">
		                <input class="form-control" id="focusedInput" type="text" value="Demonstrative focus state"> </form>
		        </div>
		        <div class="dr-callout dr-callout-info" id="callout-focus-demo">
		            <h4>Demo <code>:focus</code> state</h4>
		            <p>The above example input uses custom styles in our documentation to demonstrate the <code>:focus</code> state on a <code>.form-control</code>.</p>
		        </div>
		        <h2 id="forms-control-disabled"><a class="anchorjs-link " href="#forms-control-disabled" aria-label="Anchor link for: forms control disabled" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Disabled state</h2>
		        <p>Add the <code>disabled</code> boolean attribute on an input to prevent user interactions. Disabled inputs appear lighter and add a <code>not-allowed</code> cursor.</p>
		        <div class="dr-example" data-example-id="text-form-control-disabled">
		            <form lpformnum="10">
		                <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="disabled"> </form>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"disabledInput"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Disabled input here..."</span> <span class="na">disabled</span><span class="nt">&gt;</span></code></pre></figure>

		        <h3 id="forms-disabled-fieldsets"><a class="anchorjs-link " href="#forms-disabled-fieldsets" aria-label="Anchor link for: forms disabled fieldsets" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Disabled fieldsets</h3>
		        <p>Add the <code>disabled</code> attribute to a <code>&lt;fieldset&gt;</code> to disable all the controls within the <code>&lt;fieldset&gt;</code> at once.</p>
		        <div class="dr-callout dr-callout-warning" id="callout-fieldset-disabled-pointer-events">
		            <h4>Caveat about link functionality of <code>&lt;a&gt;</code></h4>
		            <p>By default, browsers will treat all native form controls (<code>&lt;input&gt;</code>, <code>&lt;select&gt;</code> and <code>&lt;button&gt;</code> elements) inside a <code>&lt;fieldset disabled&gt;</code> as disabled, preventing both keyboard and mouse interactions on them. However, if your form also includes <code>&lt;a ... class="btn btn-*"&gt;</code> elements, these will only be given a style of <code>pointer-events: none</code>. As noted in the section about <a href="#buttons-disabled">disabled state for buttons</a> (and specifically in the sub-section for anchor elements), this CSS property is not yet standardized and isn't fully supported in Opera 18 and below, or in Internet Explorer 11, and won't prevent keyboard users from being able to focus or activate these links. So to be safe, use custom JavaScript to disable such links.</p>
		        </div>
		        <div class="dr-callout dr-callout-danger" id="callout-fieldset-disabled-ie">
		            <h4>Cross-browser compatibility</h4>
		            <p>While Bootstrap will apply these styles in all browsers, Internet Explorer 11 and below don't fully support the <code>disabled</code> attribute on a <code>&lt;fieldset&gt;</code>. Use custom JavaScript to disable the fieldset in these browsers.</p>
		        </div>
		        <div class="dr-example" data-example-id="disabled-fieldset">
		            <form lpformnum="11">
		                <fieldset disabled="disabled">
		                    <div class="form-group">
		                        <label for="disabledTextInput">Disabled input</label>
		                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input"> </div>
		                    <div class="form-group">
		                        <label for="disabledSelect">Disabled select menu</label>
		                        <select id="disabledSelect" class="form-control">
		                            <option>Disabled select</option>
		                        </select>
		                    </div>
		                    <div class="checkbox">
		                        <label>
		                            <input type="checkbox"> Can't check this </label>
		                    </div>
		                    <button type="submit" class="btn btn-primary">Submit</button>
		                </fieldset>
		            </form>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form&gt;</span>
  <span class="nt">&lt;fieldset</span> <span class="na">disabled</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"disabledTextInput"</span><span class="nt">&gt;</span>Disabled input<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">id=</span><span class="s">"disabledTextInput"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Disabled input"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"disabledSelect"</span><span class="nt">&gt;</span>Disabled select menu<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;select</span> <span class="na">id=</span><span class="s">"disabledSelect"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;option&gt;</span>Disabled select<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;/select&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span> Can't check this
      <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Submit<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;/fieldset&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></figure>

		        <h2 id="forms-control-readonly"><a class="anchorjs-link " href="#forms-control-readonly" aria-label="Anchor link for: forms control readonly" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Readonly state</h2>
		        <p>Add the <code>readonly</code> boolean attribute on an input to prevent modification of the input's value. Read-only inputs appear lighter (just like disabled inputs), but retain the standard cursor.</p>
		        <div class="dr-example" data-example-id="readonly-text-form-control">
		            <form lpformnum="12">
		                <input class="form-control" type="text" placeholder="Readonly input here…" readonly="readonly"> </form>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Readonly input here…"</span> <span class="na">readonly</span><span class="nt">&gt;</span></code></pre></figure>

		        <h2 id="forms-help-text"><a class="anchorjs-link " href="#forms-help-text" aria-label="Anchor link for: forms help text" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Help text</h2>
		        <p>Block level help text for form controls.</p>
		        <div class="dr-callout dr-callout-info" id="callout-help-text-accessibility">
		            <h4>Associating help text with form controls</h4>
		            <p>Help text should be explicitly associated with the form control it relates to using the <code>aria-describedby</code> attribute. This will ensure that assistive technologies – such as screen readers – will announce this help text when the user focuses or enters the control.</p>
		        </div>
		        <div class="dr-example" data-example-id="simple-help-text">
		            <form lpformnum="13">
		                <div class="form-group">
		                    <label for="inputHelpBlock">Input with help text</label>
		                    <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock"> </div> <span id="helpBlock" class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span> </form>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"sr-only"</span> <span class="na">for=</span><span class="s">"inputHelpBlock"</span><span class="nt">&gt;</span>Input with help text<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">id=</span><span class="s">"inputHelpBlock"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">aria-describedby=</span><span class="s">"helpBlock"</span><span class="nt">&gt;</span>
...
<span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"helpBlock"</span> <span class="na">class=</span><span class="s">"help-block"</span><span class="nt">&gt;</span>A block of help text that breaks onto a new line and may extend beyond one line.<span class="nt">&lt;/span&gt;</span></code></pre></figure>

		    </div>
		    <h2 id="forms-control-validation">Validation states</h2>
		    <p>Bootstrap includes validation styles for error, warning, and success states on form controls. To use, add <code>.has-warning</code>, <code>.has-error</code>, or <code>.has-success</code> to the parent element. Any <code>.control-label</code>, <code>.form-control</code>, and <code>.help-block</code> within that element will receive the validation styles.</p>
		    <div class="dr-callout dr-callout-warning" id="callout-form-validation-state-accessibility">
		        <h4>Conveying validation state to assistive technologies and colorblind users</h4>
		        <p>Using these validation styles to denote the state of a form control only provides a visual, color-based indication, which will not be conveyed to users of assistive technologies - such as screen readers - or to colorblind users.</p>
		        <p>Ensure that an alternative indication of state is also provided. For instance, you can include a hint about state in the form control's <code>&lt;label&gt;</code> text itself (as is the case in the following code example), include a <a href="../components/#glyphicons">Glyphicon</a> (with appropriate alternative text using the <code>.sr-only</code> class - see the <a href="../components/#glyphicons-examples">Glyphicon examples</a>), or by providing an additional <a href="#forms-help-text">help text</a> block. Specifically for assistive technologies, invalid form controls can also be assigned an <code>aria-invalid="true"</code> attribute.</p>
		    </div>
		    <div class="dr-example" data-example-id="form-validation-states">
		        <form lpformnum="14">
		            <div class="form-group has-success">
		                <label class="control-label" for="inputSuccess1">Input with success</label>
		                <input type="text" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; background-repeat: no-repeat;"> <span id="helpBlock2" class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span> </div>
		            <div class="form-group has-warning">
		                <label class="control-label" for="inputWarning1">Input with warning</label>
		                <input type="text" class="form-control" id="inputWarning1"> </div>
		            <div class="form-group has-error">
		                <label class="control-label" for="inputError1">Input with error</label>
		                <input type="text" class="form-control" id="inputError1"> </div>
		            <div class="has-success">
		                <div class="checkbox">
		                    <label>
		                        <input type="checkbox" id="checkboxSuccess" value="option1"> Checkbox with success </label>
		                </div>
		            </div>
		            <div class="has-warning">
		                <div class="checkbox">
		                    <label>
		                        <input type="checkbox" id="checkboxWarning" value="option1"> Checkbox with warning </label>
		                </div>
		            </div>
		            <div class="has-error">
		                <div class="checkbox">
		                    <label>
		                        <input type="checkbox" id="checkboxError" value="option1"> Checkbox with error </label>
		                </div>
		            </div>
		        </form>
		    </div>
		    
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-success"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label"</span> <span class="na">for=</span><span class="s">"inputSuccess1"</span><span class="nt">&gt;</span>Input with success<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputSuccess1"</span> <span class="na">aria-describedby=</span><span class="s">"helpBlock2"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"helpBlock2"</span> <span class="na">class=</span><span class="s">"help-block"</span><span class="nt">&gt;</span>A block of help text that breaks onto a new line and may extend beyond one line.<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-warning"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label"</span> <span class="na">for=</span><span class="s">"inputWarning1"</span><span class="nt">&gt;</span>Input with warning<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputWarning1"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-error"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label"</span> <span class="na">for=</span><span class="s">"inputError1"</span><span class="nt">&gt;</span>Input with error<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputError1"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"has-success"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"checkboxSuccess"</span> <span class="na">value=</span><span class="s">"option1"</span><span class="nt">&gt;</span>
      Checkbox with success
    <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"has-warning"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"checkboxWarning"</span> <span class="na">value=</span><span class="s">"option1"</span><span class="nt">&gt;</span>
      Checkbox with warning
    <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"has-error"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"checkboxError"</span> <span class="na">value=</span><span class="s">"option1"</span><span class="nt">&gt;</span>
      Checkbox with error
    <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

		    <h3>With optional icons</h3>
		    <p>You can also add optional feedback icons with the addition of <code>.has-feedback</code> and the right icon.</p>
		    <p><strong class="text-danger">Feedback icons only work with textual <code>&lt;input class="form-control"&gt;</code> elements.</strong></p>
		    <div class="dr-callout dr-callout-warning" id="callout-has-feedback-icon-positioning">
		        <h4>Icons, labels, and input groups</h4>
		        <p>Manual positioning of feedback icons is required for inputs without a label and for <a href="../components#input-groups">input groups</a> with an add-on on the right. You are strongly encouraged to provide labels for all inputs for accessibility reasons. If you wish to prevent labels from being displayed, hide them with the <code>.sr-only</code> class. If you must do without labels, adjust the <code>top</code> value of the feedback icon. For input groups, adjust the <code>right</code> value to an appropriate pixel value depending on the width of your addon.</p>
		    </div>
		    <div class="dr-callout dr-callout-warning" id="callout-has-feedback-icon-accessibility">
		        <h4>Conveying the icon's meaning to assistive technologies</h4>
		        <p>To ensure that assistive technologies – such as screen readers – correctly convey the meaning of an icon, additional hidden text should be included with the <code>.sr-only</code> class and explicitly associated with the form control it relates to using <code>aria-describedby</code>. Alternatively, ensure that the meaning (for instance, the fact that there is a warning for a particular text entry field) is conveyed in some other form, such as changing the text of the actual <code>&lt;label&gt;</code> associated with the form control.</p>
		        <p>Although the following examples already mention the validation state of their respective form controls in the <code>&lt;label&gt;</code> text itself, the above technique (using <code>.sr-only</code> text and <code>aria-describedby</code>) has been included for illustrative purposes.</p>
		    </div>
		    <div class="dr-example" data-example-id="form-validation-states-with-icons">
		        <form lpformnum="15">
		            <div class="form-group has-success has-feedback">
		                <label class="control-label" for="inputSuccess2">Input with success</label>
		                <input type="text" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; background-repeat: no-repeat;"> <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span> <span id="inputSuccess2Status" class="sr-only">(success)</span> </div>
		            <div class="form-group has-warning has-feedback">
		                <label class="control-label" for="inputWarning2">Input with warning</label>
		                <input type="text" class="form-control" id="inputWarning2" aria-describedby="inputWarning2Status"> <span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span> <span id="inputWarning2Status" class="sr-only">(warning)</span> </div>
		            <div class="form-group has-error has-feedback">
		                <label class="control-label" for="inputError2">Input with error</label>
		                <input type="text" class="form-control" id="inputError2" aria-describedby="inputError2Status"> <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span> <span id="inputError2Status" class="sr-only">(error)</span> </div>
		            <div class="form-group has-success has-feedback">
		                <label class="control-label" for="inputGroupSuccess1">Input group with success</label>
		                <div class="input-group"> <span class="input-group-addon">@</span>
		                    <input type="text" class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status"> </div> <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span> <span id="inputGroupSuccess1Status" class="sr-only">(success)</span> </div>
		        </form>
		    </div>
		    
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-success has-feedback"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label"</span> <span class="na">for=</span><span class="s">"inputSuccess2"</span><span class="nt">&gt;</span>Input with success<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputSuccess2"</span> <span class="na">aria-describedby=</span><span class="s">"inputSuccess2Status"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-ok form-control-feedback"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"inputSuccess2Status"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(success)<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-warning has-feedback"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label"</span> <span class="na">for=</span><span class="s">"inputWarning2"</span><span class="nt">&gt;</span>Input with warning<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputWarning2"</span> <span class="na">aria-describedby=</span><span class="s">"inputWarning2Status"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-warning-sign form-control-feedback"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"inputWarning2Status"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(warning)<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-error has-feedback"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label"</span> <span class="na">for=</span><span class="s">"inputError2"</span><span class="nt">&gt;</span>Input with error<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputError2"</span> <span class="na">aria-describedby=</span><span class="s">"inputError2Status"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-remove form-control-feedback"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"inputError2Status"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(error)<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-success has-feedback"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label"</span> <span class="na">for=</span><span class="s">"inputGroupSuccess1"</span><span class="nt">&gt;</span>Input group with success<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>@<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputGroupSuccess1"</span> <span class="na">aria-describedby=</span><span class="s">"inputGroupSuccess1Status"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-ok form-control-feedback"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"inputGroupSuccess1Status"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(success)<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

		    <h4>Optional icons in horizontal and inline forms</h4>
		    <div class="dr-example" data-example-id="horizontal-form-validation-state-with-icon">
		        <form class="form-horizontal">
		            <div class="form-group has-success has-feedback">
		                <label class="control-label col-sm-3" for="inputSuccess3">Input with success</label>
		                <div class="col-sm-9">
		                    <input type="text" class="form-control" id="inputSuccess3" aria-describedby="inputSuccess3Status" autocomplete="off" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAALZJREFUOBFjYKAANDQ0rGWiQD9IqzgL0BQ3IKMXiB8AcSKQ/waIrYDsKUD8Fir2pKmpSf/fv3+zgPxfzMzMSbW1tbeBbAaQC+b+//9fB4h9gOwikCAQTAPyDYHYBciuBQkANfcB+WZAbPP37992kBgIUOoFBiZGRsYkIL4ExJvZ2NhAXmFgYmLKBPLPAfFuFhaWJpAYEBQC+SeA+BDQC5UQIQpJYFgdodQLLyh0w6j20RCgUggAAEREPpKMfaEsAAAAAElFTkSuQmCC&quot;); background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; background-repeat: no-repeat;"> <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span> <span id="inputSuccess3Status" class="sr-only">(success)</span> </div>
		            </div>
		            <div class="form-group has-success has-feedback">
		                <label class="control-label col-sm-3" for="inputGroupSuccess2">Input group with success</label>
		                <div class="col-sm-9">
		                    <div class="input-group"> <span class="input-group-addon">@</span>
		                        <input type="text" class="form-control" id="inputGroupSuccess2" aria-describedby="inputGroupSuccess2Status" autocomplete="off" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAALZJREFUOBFjYKAANDQ0rGWiQD9IqzgL0BQ3IKMXiB8AcSKQ/waIrYDsKUD8Fir2pKmpSf/fv3+zgPxfzMzMSbW1tbeBbAaQC+b+//9fB4h9gOwikCAQTAPyDYHYBciuBQkANfcB+WZAbPP37992kBgIUOoFBiZGRsYkIL4ExJvZ2NhAXmFgYmLKBPLPAfFuFhaWJpAYEBQC+SeA+BDQC5UQIQpJYFgdodQLLyh0w6j20RCgUggAAEREPpKMfaEsAAAAAElFTkSuQmCC&quot;); background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; background-repeat: no-repeat;"> </div> <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span> <span id="inputGroupSuccess2Status" class="sr-only">(success)</span> </div>
		            </div>
		        </form>
		    </div>
		    
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-horizontal"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-success has-feedback"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label col-sm-3"</span> <span class="na">for=</span><span class="s">"inputSuccess3"</span><span class="nt">&gt;</span>Input with success<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-9"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputSuccess3"</span> <span class="na">aria-describedby=</span><span class="s">"inputSuccess3Status"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-ok form-control-feedback"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"inputSuccess3Status"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(success)<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-success has-feedback"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label col-sm-3"</span> <span class="na">for=</span><span class="s">"inputGroupSuccess2"</span><span class="nt">&gt;</span>Input group with success<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-9"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>@<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputGroupSuccess2"</span> <span class="na">aria-describedby=</span><span class="s">"inputGroupSuccess2Status"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-ok form-control-feedback"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"inputGroupSuccess2Status"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(success)<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></figure>

		    <div class="dr-example" data-example-id="inline-form-validation-state-with-icon">
		        <form class="form-inline">
		            <div class="form-group has-success has-feedback">
		                <label class="control-label" for="inputSuccess4">Input with success</label>
		                <input type="text" class="form-control" id="inputSuccess4" aria-describedby="inputSuccess4Status"> <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span> <span id="inputSuccess4Status" class="sr-only">(success)</span> </div>
		        </form>
		        <br>
		        <form class="form-inline">
		            <div class="form-group has-success has-feedback">
		                <label class="control-label" for="inputGroupSuccess3">Input group with success</label>
		                <div class="input-group"> <span class="input-group-addon">@</span>
		                    <input type="text" class="form-control" id="inputGroupSuccess3" aria-describedby="inputGroupSuccess3Status"> </div> <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span> <span id="inputGroupSuccess3Status" class="sr-only">(success)</span> </div>
		        </form>
		    </div>
		    
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-success has-feedback"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label"</span> <span class="na">for=</span><span class="s">"inputSuccess4"</span><span class="nt">&gt;</span>Input with success<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputSuccess4"</span> <span class="na">aria-describedby=</span><span class="s">"inputSuccess4Status"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-ok form-control-feedback"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"inputSuccess4Status"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(success)<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span>
<span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-success has-feedback"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label"</span> <span class="na">for=</span><span class="s">"inputGroupSuccess3"</span><span class="nt">&gt;</span>Input group with success<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>@<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputGroupSuccess3"</span> <span class="na">aria-describedby=</span><span class="s">"inputGroupSuccess3Status"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-ok form-control-feedback"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"inputGroupSuccess3Status"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(success)<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></figure>

		    <h4>Optional icons with hidden <code>.sr-only</code> labels</h4>
		    <p>If you use the <code>.sr-only</code> class to hide a form control's <code>&lt;label&gt;</code> (rather than using other labelling options, such as the <code>aria-label</code> attribute), Bootstrap will automatically adjust the position of the icon once it's been added.</p>
		    <div class="dr-example" data-example-id="form-validation-state-with-icon-without-label">
		        <div class="form-group has-success has-feedback">
		            <label class="control-label sr-only" for="inputSuccess5">Hidden label</label>
		            <input type="text" class="form-control" id="inputSuccess5" aria-describedby="inputSuccess5Status"> <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span> <span id="inputSuccess5Status" class="sr-only">(success)</span> </div>
		        <div class="form-group has-success has-feedback">
		            <label class="control-label sr-only" for="inputGroupSuccess4">Input group with success</label>
		            <div class="input-group"> <span class="input-group-addon">@</span>
		                <input type="text" class="form-control" id="inputGroupSuccess4" aria-describedby="inputGroupSuccess4Status"> </div> <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span> <span id="inputGroupSuccess4Status" class="sr-only">(success)</span> </div>
		    </div>
		    
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-success has-feedback"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label sr-only"</span> <span class="na">for=</span><span class="s">"inputSuccess5"</span><span class="nt">&gt;</span>Hidden label<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputSuccess5"</span> <span class="na">aria-describedby=</span><span class="s">"inputSuccess5Status"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-ok form-control-feedback"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"inputSuccess5Status"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(success)<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-success has-feedback"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label sr-only"</span> <span class="na">for=</span><span class="s">"inputGroupSuccess4"</span><span class="nt">&gt;</span>Input group with success<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>@<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputGroupSuccess4"</span> <span class="na">aria-describedby=</span><span class="s">"inputGroupSuccess4Status"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-ok form-control-feedback"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"inputGroupSuccess4Status"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(success)<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

		    <h2 id="forms-control-sizes">Control sizing</h2>
		    <p>Set heights using classes like <code>.input-lg</code>, and set widths using grid column classes like <code>.col-lg-*</code>.</p>
		    <h3>Height sizing</h3>
		    <p>Create taller or shorter form controls that match button sizes.</p>
		    <div class="dr-example dr-example-control-sizing" data-example-id="form-control-height-sizes">
		        <form lpformnum="16">
		            <div class="controls">
		                <input class="form-control input-lg" type="text" placeholder=".input-lg" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; background-repeat: no-repeat;">
		                <input type="text" class="form-control" placeholder="Default input">
		                <input class="form-control input-sm" type="text" placeholder=".input-sm">
		                <select class="form-control input-lg">
		                    <option value="">.input-lg</option>
		                </select>
		                <select class="form-control">
		                    <option value="">Default select</option>
		                </select>
		                <select class="form-control input-sm">
		                    <option value="">.input-sm</option>
		                </select>
		            </div>
		        </form>
		    </div>
		    
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control input-lg"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">".input-lg"</span><span class="nt">&gt;</span>
<span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Default input"</span><span class="nt">&gt;</span>
<span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control input-sm"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">".input-sm"</span><span class="nt">&gt;</span>

<span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"form-control input-lg"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/select&gt;</span>
<span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/select&gt;</span>
<span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"form-control input-sm"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/select&gt;</span></code></pre></figure>

		    <h3>Horizontal form group sizes</h3>
		    <p>Quickly size labels and form controls within <code>.form-horizontal</code> by adding <code>.form-group-lg</code> or <code>.form-group-sm</code>.</p>
		    <div class="dr-example" data-example-id="form-group-height-sizes">
		        <form class="form-horizontal">
		            <div class="form-group form-group-lg">
		                <label class="col-sm-2 control-label" for="formGroupInputLarge">Large label</label>
		                <div class="col-sm-10">
		                    <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Large input" autocomplete="off" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAALZJREFUOBFjYKAANDQ0rGWiQD9IqzgL0BQ3IKMXiB8AcSKQ/waIrYDsKUD8Fir2pKmpSf/fv3+zgPxfzMzMSbW1tbeBbAaQC+b+//9fB4h9gOwikCAQTAPyDYHYBciuBQkANfcB+WZAbPP37992kBgIUOoFBiZGRsYkIL4ExJvZ2NhAXmFgYmLKBPLPAfFuFhaWJpAYEBQC+SeA+BDQC5UQIQpJYFgdodQLLyh0w6j20RCgUggAAEREPpKMfaEsAAAAAElFTkSuQmCC&quot;); background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; background-repeat: no-repeat;"> </div>
		            </div>
		            <div class="form-group form-group-sm">
		                <label class="col-sm-2 control-label" for="formGroupInputSmall">Small label</label>
		                <div class="col-sm-10">
		                    <input class="form-control" type="text" id="formGroupInputSmall" placeholder="Small input" autocomplete="off" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAALZJREFUOBFjYKAANDQ0rGWiQD9IqzgL0BQ3IKMXiB8AcSKQ/waIrYDsKUD8Fir2pKmpSf/fv3+zgPxfzMzMSbW1tbeBbAaQC+b+//9fB4h9gOwikCAQTAPyDYHYBciuBQkANfcB+WZAbPP37992kBgIUOoFBiZGRsYkIL4ExJvZ2NhAXmFgYmLKBPLPAfFuFhaWJpAYEBQC+SeA+BDQC5UQIQpJYFgdodQLLyh0w6j20RCgUggAAEREPpKMfaEsAAAAAElFTkSuQmCC&quot;); background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; background-repeat: no-repeat;"> </div>
		            </div>
		        </form>
		    </div>
		    
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-horizontal"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group form-group-lg"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"col-sm-2 control-label"</span> <span class="na">for=</span><span class="s">"formGroupInputLarge"</span><span class="nt">&gt;</span>Large label<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">id=</span><span class="s">"formGroupInputLarge"</span> <span class="na">placeholder=</span><span class="s">"Large input"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group form-group-sm"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"col-sm-2 control-label"</span> <span class="na">for=</span><span class="s">"formGroupInputSmall"</span><span class="nt">&gt;</span>Small label<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">id=</span><span class="s">"formGroupInputSmall"</span> <span class="na">placeholder=</span><span class="s">"Small input"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></figure>

		    <h3>Column sizing</h3>
		    <p>Wrap inputs in grid columns, or any custom parent element, to easily enforce desired widths.</p>
		    <div class="dr-example" data-example-id="form-control-column-sizing">
		        <form lpformnum="17">
		            <div class="row">
		                <div class="col-xs-2">
		                    <input type="text" class="form-control" placeholder=".col-xs-2" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; background-repeat: no-repeat;"> </div>
		                <div class="col-xs-3">
		                    <input type="text" class="form-control" placeholder=".col-xs-3"> </div>
		                <div class="col-xs-4">
		                    <input type="text" class="form-control" placeholder=".col-xs-4"> </div>
		            </div>
		        </form>
		    </div>
		    
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-2"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">".col-xs-2"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-3"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">".col-xs-3"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-4"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">".col-xs-4"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>


			<!-- NEW SECTION-->


		    <div class="dr-docs-section">
		        <h1 id="buttons" class="page-header"><a class="anchorjs-link " href="#buttons" aria-label="Anchor link for: buttons" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Buttons</h1>
		        <h2 id="buttons-tags"><a class="anchorjs-link " href="#buttons-tags" aria-label="Anchor link for: buttons tags" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Button tags</h2>
		        <p>Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.</p>
		        <form class="dr-example" data-example-id="btn-tags"> <a class="btn btn-default" href="#" role="button">Link</a>
		            <button class="btn btn-default" type="submit">Button</button>
		            <input class="btn btn-default" type="button" value="Input">
		            <input class="btn btn-default" type="submit" value="Submit"> </form>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"btn btn-default"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">role=</span><span class="s">"button"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-default"</span> <span class="na">type=</span><span class="s">"submit"</span><span class="nt">&gt;</span>Button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"btn btn-default"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">value=</span><span class="s">"Input"</span><span class="nt">&gt;</span>
<span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"btn btn-default"</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">value=</span><span class="s">"Submit"</span><span class="nt">&gt;</span></code></pre></figure>

		        <div class="dr-callout dr-callout-warning" id="callout-buttons-context-usage">
		            <h4>Context-specific usage</h4>
		            <p>While button classes can be used on <code>&lt;a&gt;</code> and <code>&lt;button&gt;</code> elements, only <code>&lt;button&gt;</code> elements are supported within our nav and navbar components.</p>
		        </div>
		        <div class="dr-callout dr-callout-warning" id="callout-buttons-anchor-accessibility">
		            <h4>Links acting as buttons</h4>
		            <p>If the <code>&lt;a&gt;</code> elements are used to act as buttons – triggering in-page functionality, rather than navigating to another document or section within the current page – they should also be given an appropriate <code>role="button"</code>.</p>
		        </div>
		        <div class="dr-callout dr-callout-warning" id="callout-buttons-ff-height">
		            <h4>Cross-browser rendering</h4>
		            <p>As a best practice, <strong>we highly recommend using the <code>&lt;button&gt;</code> element whenever possible</strong> to ensure matching cross-browser rendering.</p>
		            <p>Among other things, there's <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=697451">a bug in Firefox &lt;30</a> that prevents us from setting the <code>line-height</code> of <code>&lt;input&gt;</code>-based buttons, causing them to not exactly match the height of other buttons on Firefox.</p>
		        </div>
		        <h2 id="buttons-options"><a class="anchorjs-link " href="#buttons-options" aria-label="Anchor link for: buttons options" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Options</h2>
		        <p>Use any of the available button classes to quickly create a styled button.</p>
		        <div class="dr-example" data-example-id="btn-variants">
		            <button type="button" class="btn btn-default">Default</button>
		            <button type="button" class="btn btn-primary">Primary</button>
		            <button type="button" class="btn btn-success">Success</button>
		            <button type="button" class="btn btn-info">Info</button>
		            <button type="button" class="btn btn-warning">Warning</button>
		            <button type="button" class="btn btn-danger">Danger</button>
		            <button type="button" class="btn btn-link">Link</button>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Standard button --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Provides extra visual weight and identifies the primary action in a set of buttons --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Indicates a successful or positive action --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Contextual button for informational alert messages --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Indicates caution should be taken with this action --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Indicates a dangerous or potentially negative action --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Deemphasize a button by making it look like a link while maintaining button behavior --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-link"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/button&gt;</span></code></pre></figure>

		        <div class="dr-callout dr-callout-warning" id="callout-buttons-color-accessibility">
		            <h4>Conveying meaning to assistive technologies</h4>
		            <p>Using color to add meaning to a button only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (the visible text of the button), or is included through alternative means, such as additional text hidden with the <code>.sr-only</code> class.</p>
		        </div>
		        <h2 id="buttons-sizes"><a class="anchorjs-link " href="#buttons-sizes" aria-label="Anchor link for: buttons sizes" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Sizes</h2>
		        <p>Fancy larger or smaller buttons? Add <code>.btn-lg</code>, <code>.btn-sm</code>, or <code>.btn-xs</code> for additional sizes.</p>
		        <div class="dr-example" data-example-id="btn-sizes">
		            <p>
		                <button type="button" class="btn btn-primary btn-lg">Large button</button>
		                <button type="button" class="btn btn-default btn-lg">Large button</button>
		            </p>
		            <p>
		                <button type="button" class="btn btn-primary">Default button</button>
		                <button type="button" class="btn btn-default">Default button</button>
		            </p>
		            <p>
		                <button type="button" class="btn btn-primary btn-sm">Small button</button>
		                <button type="button" class="btn btn-default btn-sm">Small button</button>
		            </p>
		            <p>
		                <button type="button" class="btn btn-primary btn-xs">Extra small button</button>
		                <button type="button" class="btn btn-default btn-xs">Extra small button</button>
		            </p>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg"</span><span class="nt">&gt;</span>Large button<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default btn-lg"</span><span class="nt">&gt;</span>Large button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Default button<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Default button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-sm"</span><span class="nt">&gt;</span>Small button<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default btn-sm"</span><span class="nt">&gt;</span>Small button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-xs"</span><span class="nt">&gt;</span>Extra small button<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default btn-xs"</span><span class="nt">&gt;</span>Extra small button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/p&gt;</span></code></pre></figure>

		        <p>Create block level buttons—those that span the full width of a parent— by adding <code>.btn-block</code>.</p>
		        <div class="dr-example" data-example-id="block-btns">
		            <div class="well center-block" style="max-width:400px">
		                <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
		                <button type="button" class="btn btn-default btn-lg btn-block">Block level button</button>
		            </div>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg btn-block"</span><span class="nt">&gt;</span>Block level button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default btn-lg btn-block"</span><span class="nt">&gt;</span>Block level button<span class="nt">&lt;/button&gt;</span></code></pre></figure>

		        <h2 id="buttons-active"><a class="anchorjs-link " href="#buttons-active" aria-label="Anchor link for: buttons active" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Active state</h2>
		        <p>Buttons will appear pressed (with a darker background, darker border, and inset shadow) when active. For <code>&lt;button&gt;</code> elements, this is done via <code>:active</code>. For <code>&lt;a&gt;</code> elements, it's done with <code>.active</code>. However, you may use <code>.active</code> on <code>&lt;button&gt;</code>s (and include the <code>aria-pressed="true"</code> attribute) should you need to replicate the active state programmatically.</p>
		        <h3 id="button-element"><a class="anchorjs-link " href="#button-element" aria-label="Anchor link for: button element" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Button element</h3>
		        <p>No need to add <code>:active</code> as it's a pseudo-class, but if you need to force the same appearance, go ahead and add <code>.active</code>.</p>
		        <p class="dr-example" data-example-id="active-button-btns">
		            <button type="button" class="btn btn-primary btn-lg active">Primary button</button>
		            <button type="button" class="btn btn-default btn-lg active">Button</button>
		        </p>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg active"</span><span class="nt">&gt;</span>Primary button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default btn-lg active"</span><span class="nt">&gt;</span>Button<span class="nt">&lt;/button&gt;</span></code></pre></figure>

		        <h3 id="anchor-element"><a class="anchorjs-link " href="#anchor-element" aria-label="Anchor link for: anchor element" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Anchor element</h3>
		        <p>Add the <code>.active</code> class to <code>&lt;a&gt;</code> buttons.</p>
		        <p class="dr-example" data-example-id="active-anchor-btns"> <a href="#" class="btn btn-primary btn-lg active" role="button">Primary link</a> <a href="#" class="btn btn-default btn-lg active" role="button">Link</a> </p>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg active"</span> <span class="na">role=</span><span class="s">"button"</span><span class="nt">&gt;</span>Primary link<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-default btn-lg active"</span> <span class="na">role=</span><span class="s">"button"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span></code></pre></figure>

		        <h2 id="buttons-disabled"><a class="anchorjs-link " href="#buttons-disabled" aria-label="Anchor link for: buttons disabled" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Disabled state</h2>
		        <p>Make buttons look unclickable by fading them back with <code>opacity</code>.</p>
		        <h3 id="button-element-1"><a class="anchorjs-link " href="#button-element-1" aria-label="Anchor link for: button element 1" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Button element</h3>
		        <p>Add the <code>disabled</code> attribute to <code>&lt;button&gt;</code> buttons.</p>
		        <p class="dr-example" data-example-id="disabled-button-btns">
		            <button type="button" class="btn btn-primary btn-lg" disabled="disabled">Primary button</button>
		            <button type="button" class="btn btn-default btn-lg" disabled="disabled">Button</button>
		        </p>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-lg btn-primary"</span> <span class="na">disabled=</span><span class="s">"disabled"</span><span class="nt">&gt;</span>Primary button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default btn-lg"</span> <span class="na">disabled=</span><span class="s">"disabled"</span><span class="nt">&gt;</span>Button<span class="nt">&lt;/button&gt;</span></code></pre></figure>

		        <div class="dr-callout dr-callout-danger" id="callout-buttons-ie-disabled">
		            <h4>Cross-browser compatibility</h4>
		            <p>If you add the <code>disabled</code> attribute to a <code>&lt;button&gt;</code>, Internet Explorer 9 and below will render text gray with a nasty text-shadow that we cannot fix.</p>
		        </div>
		        <h3 id="anchor-element-1"><a class="anchorjs-link " href="#anchor-element-1" aria-label="Anchor link for: anchor element 1" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Anchor element</h3>
		        <p>Add the <code>.disabled</code> class to <code>&lt;a&gt;</code> buttons.</p>
		        <p class="dr-example" data-example-id="disabled-anchor-btns"> <a href="#" class="btn btn-primary btn-lg disabled" role="button">Primary link</a> <a href="#" class="btn btn-default btn-lg disabled" role="button">Link</a> </p>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg disabled"</span> <span class="na">role=</span><span class="s">"button"</span><span class="nt">&gt;</span>Primary link<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-default btn-lg disabled"</span> <span class="na">role=</span><span class="s">"button"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span></code></pre></figure>

		        <p> We use <code>.disabled</code> as a utility class here, similar to the common <code>.active</code> class, so no prefix is required. </p>
		        <div class="dr-callout dr-callout-warning" id="callout-buttons-disabled-anchor">
		            <h4>Link functionality caveat</h4>
		            <p>This class uses <code>pointer-events: none</code> to try to disable the link functionality of <code>&lt;a&gt;</code>s, but that CSS property is not yet standardized and isn't fully supported in Opera 18 and below, or in Internet Explorer 11. In addition, even in browsers that do support <code>pointer-events: none</code>, keyboard navigation remains unaffected, meaning that sighted keyboard users and users of assistive technologies will still be able to activate these links. So to be safe, use custom JavaScript to disable such links.</p>
		        </div>
		    </div>


		    <!-- NEW SECTION -->


		    <div class="dr-docs-section">
		        <h1 id="images" class="page-header"><a class="anchorjs-link " href="#images" aria-label="Anchor link for: images" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Images</h1>
		        <h2 id="images-responsive"><a class="anchorjs-link " href="#images-responsive" aria-label="Anchor link for: images responsive" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Responsive images</h2>
		        <p>Images in Bootstrap 3 can be made responsive-friendly via the addition of the <code>.img-responsive</code> class. This applies <code>max-width: 100%;</code>, <code>height: auto;</code> and <code>display: block;</code> to the image so that it scales nicely to the parent element.</p>
		        <p>To center images which use the <code>.img-responsive</code> class, use <code>.center-block</code> instead of <code>.text-center</code>. <a href="../css/#helper-classes-center">See the helper classes section</a> for more details about <code>.center-block</code> usage.</p>
		        <div class="dr-callout dr-callout-warning" id="callout-images-ie-svg">
		            <h4>SVG images and IE 8-10</h4>
		            <p>In Internet Explorer 8-10, SVG images with <code>.img-responsive</code> are disproportionately sized. To fix this, add <code>width: 100% \9;</code> where necessary. Bootstrap doesn't apply this automatically as it causes complications to other image formats.</p>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">class=</span><span class="s">"img-responsive"</span> <span class="na">alt=</span><span class="s">"Responsive image"</span><span class="nt">&gt;</span></code></pre></figure>

		        <h2 id="images-shapes"><a class="anchorjs-link " href="#images-shapes" aria-label="Anchor link for: images shapes" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Image shapes</h2>
		        <p>Add classes to an <code>&lt;img&gt;</code> element to easily style images in any project.</p>
		        <div class="dr-callout dr-callout-danger" id="callout-images-ie-rounded-corners">
		            <h4>Cross-browser compatibility</h4>
		            <p>Keep in mind that Internet Explorer 8 lacks support for rounded corners.</p>
		        </div>
		        <div class="dr-example dr-example-images" data-example-id="image-shapes"> <img data-src="holder.js/140x140" class="img-rounded" alt="140x140" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzE0MHgxNDAKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTM1MmJlYTNkMCB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1MzUyYmVhM2QwIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQ1LjUiIHk9Ijc0LjUiPjE0MHgxNDA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true" style="width: 140px; height: 140px;"> <img data-src="holder.js/140x140" class="img-circle" alt="140x140" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzE0MHgxNDAKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTM1MmJlZWIwYSB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1MzUyYmVlYjBhIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQ1LjUiIHk9Ijc0LjUiPjE0MHgxNDA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true" style="width: 140px; height: 140px;"> <img data-src="holder.js/140x140" class="img-thumbnail" alt="140x140" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzE0MHgxNDAKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTM1MmJlYzc0MyB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1MzUyYmVjNzQzIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQ1LjUiIHk9Ijc0LjUiPjE0MHgxNDA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true" style="width: 140px; height: 140px;"> </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"..."</span> <span class="na">class=</span><span class="s">"img-rounded"</span><span class="nt">&gt;</span>
<span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"..."</span> <span class="na">class=</span><span class="s">"img-circle"</span><span class="nt">&gt;</span>
<span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"..."</span> <span class="na">class=</span><span class="s">"img-thumbnail"</span><span class="nt">&gt;</span></code></pre></figure>

		    </div>


		    <!-- NEW SECTION -->


		    <div class="dr-docs-section">
		        <h1 id="helper-classes" class="page-header"><a class="anchorjs-link " href="#helper-classes" aria-label="Anchor link for: helper classes" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Helper classes</h1>
		        <h3 id="helper-classes-colors"><a class="anchorjs-link " href="#helper-classes-colors" aria-label="Anchor link for: helper classes colors" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Contextual colors</h3>
		        <p>Convey meaning through color with a handful of emphasis utility classes. These may also be applied to links and will darken on hover just like our default link styles.</p>
		        <div class="dr-example" data-example-id="contextual-colors-helpers">
		            <p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
		            <p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		            <p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
		            <p class="text-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
		            <p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
		            <p class="text-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-primary"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span></code></pre></figure>

		        <div class="dr-callout dr-callout-info" id="callout-helper-context-color-specificity">
		            <h4>Dealing with specificity</h4>
		            <p>Sometimes emphasis classes cannot be applied due to the specificity of another selector. In most cases, a sufficient workaround is to wrap your text in a <code>&lt;span&gt;</code> with the class.</p>
		        </div>
		        <div class="dr-callout dr-callout-warning" id="callout-helper-context-color-accessibility">
		            <h4>Conveying meaning to assistive technologies</h4>
		            <p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (the contextual colors are only used to reinforce meaning that is already present in the text/markup), or is included through alternative means, such as additional text hidden with the <code>.sr-only</code> class.</p>
		        </div>
		        <h3 id="helper-classes-backgrounds"><a class="anchorjs-link " href="#helper-classes-backgrounds" aria-label="Anchor link for: helper classes backgrounds" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Contextual backgrounds</h3>
		        <p>Similar to the contextual text color classes, easily set the background of an element to any contextual class. Anchor components will darken on hover, just like the text classes.</p>
		        <div class="dr-example dr-example-bg-classes" data-example-id="contextual-backgrounds-helpers">
		            <p class="bg-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		            <p class="bg-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
		            <p class="bg-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
		            <p class="bg-warning">Etiam porta sem malesuada magna mollis euismod.</p>
		            <p class="bg-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"bg-primary"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"bg-success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"bg-info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"bg-warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"bg-danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span></code></pre></figure>

		        <div class="dr-callout dr-callout-info" id="callout-helper-bg-specificity">
		            <h4>Dealing with specificity</h4>
		            <p>Sometimes contextual background classes cannot be applied due to the specificity of another selector. In some cases, a sufficient workaround is to wrap your element's content in a <code>&lt;div&gt;</code> with the class.</p>
		        </div>
		        <div class="dr-callout dr-callout-warning" id="callout-helper-bg-accessibility">
		            <h4>Conveying meaning to assistive technologies</h4>
		            <p>As with <a href="#helper-classes-colors">contextual colors</a>, ensure that any meaning conveyed through color is also conveyed in a format that is not purely presentational.</p>
		        </div>
		        <h3 id="helper-classes-close"><a class="anchorjs-link " href="#helper-classes-close" aria-label="Anchor link for: helper classes close" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Close icon</h3>
		        <p>Use the generic close icon for dismissing content like modals and alerts.</p>
		        <div class="dr-example" data-example-id="close-icon">
		            <p>
		                <button type="button" class="close" aria-label="Close"><span aria-hidden="true">×</span></button>
		            </p>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">aria-label=</span><span class="s">"Close"</span><span class="nt">&gt;&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/span&gt;&lt;/button&gt;</span></code></pre></figure>

		        <h3 id="helper-classes-carets"><a class="anchorjs-link " href="#helper-classes-carets" aria-label="Anchor link for: helper classes carets" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Carets</h3>
		        <p>Use carets to indicate dropdown functionality and direction. Note that the default caret will reverse automatically in <a href="../components/#btn-dropdowns-dropup">dropup menus</a>.</p>
		        <div class="dr-example" data-example-id="caret"> <span class="caret"></span> </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span></code></pre></figure>

		        <h3 id="helper-classes-floats"><a class="anchorjs-link " href="#helper-classes-floats" aria-label="Anchor link for: helper classes floats" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Quick floats</h3>
		        <p>Float an element to the left or right with a class. <code>!important</code> is included to avoid specificity issues. Classes can also be used as mixins.</p>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"pull-left"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"pull-right"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre></figure>

		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Classes</span>
<span class="nc">.pull-left</span> <span class="p">{</span>
  <span class="nl">float</span><span class="p">:</span> <span class="nb">left</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span>
<span class="p">}</span>
<span class="nc">.pull-right</span> <span class="p">{</span>
  <span class="nl">float</span><span class="p">:</span> <span class="nb">right</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span>
<span class="p">}</span>

<span class="c1">// Usage as mixins</span>
<span class="nc">.element</span> <span class="p">{</span>
  <span class="nc">.pull-left</span><span class="o">()</span><span class="p">;</span>
<span class="p">}</span>
<span class="nc">.another-element</span> <span class="p">{</span>
  <span class="nc">.pull-right</span><span class="o">()</span><span class="p">;</span>
<span class="p">}</span></code></pre></figure>

		        <div class="dr-callout dr-callout-warning" id="callout-helper-pull-navbar">
		            <h4>Not for use in navbars</h4>
		            <p>To align components in navbars with utility classes, use <code>.navbar-left</code> or <code>.navbar-right</code> instead. <a href="../components/#navbar-component-alignment">See the navbar docs</a> for details.</p>
		        </div>
		        <h3 id="helper-classes-center"><a class="anchorjs-link " href="#helper-classes-center" aria-label="Anchor link for: helper classes center" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Center content blocks</h3>
		        <p>Set an element to <code>display: block</code> and center via <code>margin</code>. Available as a mixin and class.</p>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"center-block"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre></figure>

		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Class</span>
<span class="nc">.center-block</span> <span class="p">{</span>
  <span class="nl">display</span><span class="p">:</span> <span class="nb">block</span><span class="p">;</span>
  <span class="nl">margin-left</span><span class="p">:</span> <span class="nb">auto</span><span class="p">;</span>
  <span class="nl">margin-right</span><span class="p">:</span> <span class="nb">auto</span><span class="p">;</span>
<span class="p">}</span>

<span class="c1">// Usage as a mixin</span>
<span class="nc">.element</span> <span class="p">{</span>
  <span class="nc">.center-block</span><span class="o">()</span><span class="p">;</span>
<span class="p">}</span></code></pre></figure>

		        <h3 id="helper-classes-clearfix"><a class="anchorjs-link " href="#helper-classes-clearfix" aria-label="Anchor link for: helper classes clearfix" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Clearfix</h3>
		        <p>Easily clear <code>float</code>s by adding <code>.clearfix</code> <strong>to the parent element</strong>. Utilizes <a href="http://nicolasgallagher.com/micro-clearfix-hack/">the micro clearfix</a> as popularized by Nicolas Gallagher. Can also be used as a mixin.</p>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Usage as a class --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"clearfix"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre></figure>

		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Mixin itself</span>
<span class="nc">.clearfix</span><span class="o">()</span> <span class="p">{</span>
  <span class="k">&amp;</span><span class="nd">:before</span><span class="o">,</span>
  <span class="k">&amp;</span><span class="nd">:after</span> <span class="p">{</span>
    <span class="nl">content</span><span class="p">:</span> <span class="s2">" "</span><span class="p">;</span>
    <span class="nl">display</span><span class="p">:</span> <span class="n">table</span><span class="p">;</span>
  <span class="p">}</span>
  <span class="k">&amp;</span><span class="nd">:after</span> <span class="p">{</span>
    <span class="nl">clear</span><span class="p">:</span> <span class="nb">both</span><span class="p">;</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="c1">// Usage as a mixin
		</span><span class="nc">.element</span> <span class="p">{</span>
  <span class="nc">.clearfix</span><span class="o">()</span><span class="p">;</span>
<span class="p">}</span></code></pre></figure>

		        <h3 id="helper-classes-show-hide"><a class="anchorjs-link " href="#helper-classes-show-hide" aria-label="Anchor link for: helper classes show hide" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Showing and hiding content</h3>
		        <p>Force an element to be shown or hidden (<strong>including for screen readers</strong>) with the use of <code>.show</code> and <code>.hidden</code> classes. These classes use <code>!important</code> to avoid specificity conflicts, just like the <a href="#helper-classes-floats">quick floats</a>. They are only available for block level toggling. They can also be used as mixins.</p>
		        <p><code>.hide</code> is available, but it does not always affect screen readers and is <strong>deprecated</strong> as of v3.0.1. Use <code>.hidden</code> or <code>.sr-only</code> instead.</p>
		        <p>Furthermore, <code>.invisible</code> can be used to toggle only the visibility of an element, meaning its <code>display</code> is not modified and the element can still affect the flow of the document.</p>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"show"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"hidden"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre></figure>

		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Classes</span>
<span class="nc">.show</span> <span class="p">{</span>
  <span class="nl">display</span><span class="p">:</span> <span class="nb">block</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span>
<span class="p">}</span>
<span class="nc">.hidden</span> <span class="p">{</span>
  <span class="nl">display</span><span class="p">:</span> <span class="nb">none</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span>
<span class="p">}</span>
<span class="nc">.invisible</span> <span class="p">{</span>
  <span class="nl">visibility</span><span class="p">:</span> <span class="nb">hidden</span><span class="p">;</span>
<span class="p">}</span>

<span class="c1">// Usage as mixins</span>
<span class="nc">.element</span> <span class="p">{</span>
  <span class="nc">.show</span><span class="o">()</span><span class="p">;</span>
<span class="p">}</span>
<span class="nc">.another-element</span> <span class="p">{</span>
  <span class="nc">.hidden</span><span class="o">()</span><span class="p">;</span>
<span class="p">}</span></code></pre></figure>

		        <h3 id="helper-classes-screen-readers"><a class="anchorjs-link " href="#helper-classes-screen-readers" aria-label="Anchor link for: helper classes screen readers" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Screen reader and keyboard navigation content</h3>
		        <p>Hide an element to all devices <strong>except screen readers</strong> with <code>.sr-only</code>. Combine <code>.sr-only</code> with <code>.sr-only-focusable</code> to show the element again when it's focused (e.g. by a keyboard-only user). Necessary for following <a href="../getting-started/#accessibility">accessibility best practices</a>. Can also be used as mixins.</p>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"sr-only sr-only-focusable"</span> <span class="na">href=</span><span class="s">"#content"</span><span class="nt">&gt;</span>Skip to main content<span class="nt">&lt;/a&gt;</span></code></pre></figure>

		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Usage as a mixin</span>
<span class="nc">.skip-navigation</span> <span class="p">{</span>
  <span class="nc">.sr-only</span><span class="o">()</span><span class="p">;</span>
  <span class="nc">.sr-only-focusable</span><span class="o">()</span><span class="p">;</span>
<span class="p">}</span></code></pre></figure>

		        <h3 id="helper-classes-image-replacement"><a class="anchorjs-link " href="#helper-classes-image-replacement" aria-label="Anchor link for: helper classes image replacement" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Image replacement</h3>
		        <p>Utilize the <code>.text-hide</code> class or mixin to help replace an element's text content with a background image.</p>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"text-hide"</span><span class="nt">&gt;</span>Custom heading<span class="nt">&lt;/h1&gt;</span></code></pre></figure>

		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Usage as a mixin</span>
<span class="nc">.heading</span> <span class="p">{</span>
  <span class="nc">.text-hide</span><span class="o">()</span><span class="p">;</span>
<span class="p">}</span></code></pre></figure>

		    </div>


		    <!-- NEW SECTION -->


		    <div class="dr-docs-section">
		        <h1 id="responsive-utilities" class="page-header"><a class="anchorjs-link " href="#responsive-utilities" aria-label="Anchor link for: responsive utilities" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Responsive utilities</h1>
		        <p class="lead">For faster mobile-friendly development, use these utility classes for showing and hiding content by device via media query. Also included are utility classes for toggling content when printed.</p>
		        <p>Try to use these on a limited basis and avoid creating entirely different versions of the same site. Instead, use them to complement each device's presentation.</p>
		        <h2 id="responsive-utilities-classes"><a class="anchorjs-link " href="#responsive-utilities-classes" aria-label="Anchor link for: responsive utilities classes" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Available classes</h2>
		        <p>Use a single or combination of the available classes for toggling content across viewport breakpoints.</p>
		        <div class="table-responsive">
		            <table class="table table-bordered table-striped responsive-utilities">
		                <thead>
		                    <tr>
		                        <th></th>
		                        <th> Extra small devices <small>Phones (&lt;768px)</small> </th>
		                        <th> Small devices <small>Tablets (≥768px)</small> </th>
		                        <th> Medium devices <small>Desktops (≥992px)</small> </th>
		                        <th> Large devices <small>Desktops (≥1200px)</small> </th>
		                    </tr>
		                </thead>
		                <tbody>
		                    <tr>
		                        <th scope="row"><code>.visible-xs-*</code></th>
		                        <td class="is-visible">Visible</td>
		                        <td class="is-hidden">Hidden</td>
		                        <td class="is-hidden">Hidden</td>
		                        <td class="is-hidden">Hidden</td>
		                    </tr>
		                    <tr>
		                        <th scope="row"><code>.visible-sm-*</code></th>
		                        <td class="is-hidden">Hidden</td>
		                        <td class="is-visible">Visible</td>
		                        <td class="is-hidden">Hidden</td>
		                        <td class="is-hidden">Hidden</td>
		                    </tr>
		                    <tr>
		                        <th scope="row"><code>.visible-md-*</code></th>
		                        <td class="is-hidden">Hidden</td>
		                        <td class="is-hidden">Hidden</td>
		                        <td class="is-visible">Visible</td>
		                        <td class="is-hidden">Hidden</td>
		                    </tr>
		                    <tr>
		                        <th scope="row"><code>.visible-lg-*</code></th>
		                        <td class="is-hidden">Hidden</td>
		                        <td class="is-hidden">Hidden</td>
		                        <td class="is-hidden">Hidden</td>
		                        <td class="is-visible">Visible</td>
		                    </tr>
		                </tbody>
		                <tbody>
		                    <tr>
		                        <th scope="row"><code>.hidden-xs</code></th>
		                        <td class="is-hidden">Hidden</td>
		                        <td class="is-visible">Visible</td>
		                        <td class="is-visible">Visible</td>
		                        <td class="is-visible">Visible</td>
		                    </tr>
		                    <tr>
		                        <th scope="row"><code>.hidden-sm</code></th>
		                        <td class="is-visible">Visible</td>
		                        <td class="is-hidden">Hidden</td>
		                        <td class="is-visible">Visible</td>
		                        <td class="is-visible">Visible</td>
		                    </tr>
		                    <tr>
		                        <th scope="row"><code>.hidden-md</code></th>
		                        <td class="is-visible">Visible</td>
		                        <td class="is-visible">Visible</td>
		                        <td class="is-hidden">Hidden</td>
		                        <td class="is-visible">Visible</td>
		                    </tr>
		                    <tr>
		                        <th scope="row"><code>.hidden-lg</code></th>
		                        <td class="is-visible">Visible</td>
		                        <td class="is-visible">Visible</td>
		                        <td class="is-visible">Visible</td>
		                        <td class="is-hidden">Hidden</td>
		                    </tr>
		                </tbody>
		            </table>
		        </div>
		        <p>As of v3.2.0, the <code>.visible-*-*</code> classes for each breakpoint come in three variations, one for each CSS <code>display</code> property value listed below.</p>
		        <div class="table-responsive">
		            <table class="table table-bordered table-striped">
		                <thead>
		                    <tr>
		                        <th>Group of classes</th>
		                        <th>CSS <code>display</code></th>
		                    </tr>
		                </thead>
		                <tbody>
		                    <tr>
		                        <th scope="row"><code>.visible-*-block</code></th>
		                        <td><code>display: block;</code></td>
		                    </tr>
		                    <tr>
		                        <th scope="row"><code>.visible-*-inline</code></th>
		                        <td><code>display: inline;</code></td>
		                    </tr>
		                    <tr>
		                        <th scope="row"><code>.visible-*-inline-block</code></th>
		                        <td><code>display: inline-block;</code></td>
		                    </tr>
		                </tbody>
		            </table>
		        </div>
		        <p>So, for extra small (<code>xs</code>) screens for example, the available <code>.visible-*-*</code> classes are: <code>.visible-xs-block</code>, <code>.visible-xs-inline</code>, and <code>.visible-xs-inline-block</code>.</p>
		        <p>The classes <code>.visible-xs</code>, <code>.visible-sm</code>, <code>.visible-md</code>, and <code>.visible-lg</code> also exist, but are <strong>deprecated as of v3.2.0</strong>. They are approximately equivalent to <code>.visible-*-block</code>, except with additional special cases for toggling <code>&lt;table&gt;</code>-related elements.</p>
		        <h2 id="responsive-utilities-print"><a class="anchorjs-link " href="#responsive-utilities-print" aria-label="Anchor link for: responsive utilities print" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Print classes</h2>
		        <p>Similar to the regular responsive classes, use these for toggling content for print.</p>
		        <div class="table-responsive">
		            <table class="table table-bordered table-striped responsive-utilities">
		                <thead>
		                    <tr>
		                        <th>Classes</th>
		                        <th>Browser</th>
		                        <th>Print</th>
		                    </tr>
		                </thead>
		                <tbody>
		                    <tr>
		                        <th scope="row"> <code>.visible-print-block</code>
		                            <br> <code>.visible-print-inline</code>
		                            <br> <code>.visible-print-inline-block</code> </th>
		                        <td class="is-hidden">Hidden</td>
		                        <td class="is-visible">Visible</td>
		                    </tr>
		                    <tr>
		                        <th scope="row"><code>.hidden-print</code></th>
		                        <td class="is-visible">Visible</td>
		                        <td class="is-hidden">Hidden</td>
		                    </tr>
		                </tbody>
		            </table>
		        </div>
		        <p>The class <code>.visible-print</code> also exists but is <strong>deprecated</strong> as of v3.2.0. It is approximately equivalent to <code>.visible-print-block</code>, except with additional special cases for <code>&lt;table&gt;</code>-related elements.</p>
		        <h2 id="responsive-utilities-tests"><a class="anchorjs-link " href="#responsive-utilities-tests" aria-label="Anchor link for: responsive utilities tests" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Test cases</h2>
		        <p>Resize your browser or load on different devices to test the responsive utility classes.</p>
		        <h3 id="visible-on"><a class="anchorjs-link " href="#visible-on" aria-label="Anchor link for: visible on" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Visible on...</h3>
		        <p>Green checkmarks indicate the element <strong>is visible</strong> in your current viewport.</p>
		        <div class="row responsive-utilities-test visible-on">
		            <div class="col-xs-6 col-sm-3"> <span class="hidden-xs">Extra small</span> <span class="visible-xs-block">✔ Visible on x-small</span> </div>
		            <div class="col-xs-6 col-sm-3"> <span class="hidden-sm">Small</span> <span class="visible-sm-block">✔ Visible on small</span> </div>
		            <div class="clearfix visible-xs-block"></div>
		            <div class="col-xs-6 col-sm-3"> <span class="hidden-md">Medium</span> <span class="visible-md-block">✔ Visible on medium</span> </div>
		            <div class="col-xs-6 col-sm-3"> <span class="hidden-lg">Large</span> <span class="visible-lg-block">✔ Visible on large</span> </div>
		        </div>
		        <div class="row responsive-utilities-test visible-on">
		            <div class="col-xs-6"> <span class="hidden-xs hidden-sm">Extra small and small</span> <span class="visible-xs-block visible-sm-block">✔ Visible on x-small and small</span> </div>
		            <div class="col-xs-6"> <span class="hidden-md hidden-lg">Medium and large</span> <span class="visible-md-block visible-lg-block">✔ Visible on medium and large</span> </div>
		            <div class="clearfix visible-xs-block"></div>
		            <div class="col-xs-6"> <span class="hidden-xs hidden-md">Extra small and medium</span> <span class="visible-xs-block visible-md-block">✔ Visible on x-small and medium</span> </div>
		            <div class="col-xs-6"> <span class="hidden-sm hidden-lg">Small and large</span> <span class="visible-sm-block visible-lg-block">✔ Visible on small and large</span> </div>
		            <div class="clearfix visible-xs-block"></div>
		            <div class="col-xs-6"> <span class="hidden-xs hidden-lg">Extra small and large</span> <span class="visible-xs-block visible-lg-block">✔ Visible on x-small and large</span> </div>
		            <div class="col-xs-6"> <span class="hidden-sm hidden-md">Small and medium</span> <span class="visible-sm-block visible-md-block">✔ Visible on small and medium</span> </div>
		        </div>
		        <h3 id="hidden-on"><a class="anchorjs-link " href="#hidden-on" aria-label="Anchor link for: hidden on" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Hidden on...</h3>
		        <p>Here, green checkmarks also indicate the element <strong>is hidden</strong> in your current viewport.</p>
		        <div class="row responsive-utilities-test hidden-on">
		            <div class="col-xs-6 col-sm-3"> <span class="hidden-xs">Extra small</span> <span class="visible-xs-block">✔ Hidden on x-small</span> </div>
		            <div class="col-xs-6 col-sm-3"> <span class="hidden-sm">Small</span> <span class="visible-sm-block">✔ Hidden on small</span> </div>
		            <div class="clearfix visible-xs-block"></div>
		            <div class="col-xs-6 col-sm-3"> <span class="hidden-md">Medium</span> <span class="visible-md-block">✔ Hidden on medium</span> </div>
		            <div class="col-xs-6 col-sm-3"> <span class="hidden-lg">Large</span> <span class="visible-lg-block">✔ Hidden on large</span> </div>
		        </div>
		        <div class="row responsive-utilities-test hidden-on">
		            <div class="col-xs-6"> <span class="hidden-xs hidden-sm">Extra small and small</span> <span class="visible-xs-block visible-sm-block">✔ Hidden on x-small and small</span> </div>
		            <div class="col-xs-6"> <span class="hidden-md hidden-lg">Medium and large</span> <span class="visible-md-block visible-lg-block">✔ Hidden on medium and large</span> </div>
		            <div class="clearfix visible-xs-block"></div>
		            <div class="col-xs-6"> <span class="hidden-xs hidden-md">Extra small and medium</span> <span class="visible-xs-block visible-md-block">✔ Hidden on x-small and medium</span> </div>
		            <div class="col-xs-6"> <span class="hidden-sm hidden-lg">Small and large</span> <span class="visible-sm-block visible-lg-block">✔ Hidden on small and large</span> </div>
		            <div class="clearfix visible-xs-block"></div>
		            <div class="col-xs-6"> <span class="hidden-xs hidden-lg">Extra small and large</span> <span class="visible-xs-block visible-lg-block">✔ Hidden on x-small and large</span> </div>
		            <div class="col-xs-6"> <span class="hidden-sm hidden-md">Small and medium</span> <span class="visible-sm-block visible-md-block">✔ Hidden on small and medium</span> </div>
		        </div>
		    </div>


		    <!-- NEW SECTION -->


		    <div class="dr-docs-section">
		        <h1 id="less" class="page-header"><a class="anchorjs-link " href="#less" aria-label="Anchor link for: less" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Using Less</h1>
		        <p class="lead">Bootstrap's CSS is built on Less, a preprocessor with additional functionality like variables, mixins, and functions for compiling CSS. Those looking to use the source Less files instead of our compiled CSS files can make use of the numerous variables and mixins we use throughout the framework.</p>
		        <p>Grid variables and mixins are covered <a href="#grid-less">within the Grid system section</a>.</p>
		        <h2 id="less-bootstrap"><a class="anchorjs-link " href="#less-bootstrap" aria-label="Anchor link for: less bootstrap" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Compiling Bootstrap</h2>
		        <p>Bootstrap can be used in at least two ways: with the compiled CSS or with the source Less files. To compile the Less files, <a href="../getting-started/#grunt">consult the Getting Started section</a> for how to setup your development environment to run the necessary commands.</p>
		        <p>Third party compilation tools may work with Bootstrap, but they are not supported by our core team.</p>
		        <h2 id="less-variables"><a class="anchorjs-link " href="#less-variables" aria-label="Anchor link for: less variables" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Variables</h2>
		        <p>Variables are used throughout the entire project as a way to centralize and share commonly used values like colors, spacing, or font stacks. For a complete breakdown, please see <a href="../customize/#less-variables-section">the Customizer</a>.</p>
		        <h3 id="less-variables-colors"><a class="anchorjs-link " href="#less-variables-colors" aria-label="Anchor link for: less variables colors" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Colors</h3>
		        <p>Easily make use of two color schemes: grayscale and semantic. Grayscale colors provide quick access to commonly used shades of black while semantic include various colors assigned to meaningful contextual values.</p>
		        <div class="dr-example">
		            <div class="color-swatches">
		                <div class="color-swatch gray-darker"></div>
		                <div class="color-swatch gray-dark"></div>
		                <div class="color-swatch gray"></div>
		                <div class="color-swatch gray-light"></div>
		                <div class="color-swatch gray-lighter"></div>
		            </div>
		        </div>
		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="k">@gray-darker</span><span class="nd">:</span>  <span class="nt">lighten</span><span class="o">(</span><span class="nn">#000</span><span class="o">,</span> <span class="nt">13</span><span class="nc">.5</span><span class="nv">%</span><span class="o">)</span><span class="p">;</span> <span class="c1">// #222</span>
<span class="k">@gray-dark</span><span class="nd">:</span>    <span class="nt">lighten</span><span class="o">(</span><span class="nn">#000</span><span class="o">,</span> <span class="nt">20</span><span class="nv">%</span><span class="o">)</span><span class="p">;</span>   <span class="c1">// #333
</span><span class="k">@gray</span><span class="nd">:</span>         <span class="nt">lighten</span><span class="o">(</span><span class="nn">#000</span><span class="o">,</span> <span class="nt">33</span><span class="nc">.5</span><span class="nv">%</span><span class="o">)</span><span class="p">;</span> <span class="c1">// #555
</span><span class="k">@gray-light</span><span class="nd">:</span>   <span class="nt">lighten</span><span class="o">(</span><span class="nn">#000</span><span class="o">,</span> <span class="nt">46</span><span class="nc">.7</span><span class="nv">%</span><span class="o">)</span><span class="p">;</span> <span class="c1">// #777
</span><span class="k">@gray-lighter</span><span class="nd">:</span> <span class="nt">lighten</span><span class="o">(</span><span class="nn">#000</span><span class="o">,</span> <span class="nt">93</span><span class="nc">.5</span><span class="nv">%</span><span class="o">)</span><span class="p">;</span> <span class="o">//</span> <span class="nn">#eee</span></code></pre></figure>

		        <div class="dr-example">
		            <div class="color-swatches">
		                <div class="color-swatch brand-primary"></div>
		                <div class="color-swatch brand-success"></div>
		                <div class="color-swatch brand-info"></div>
		                <div class="color-swatch brand-warning"></div>
		                <div class="color-swatch brand-danger"></div>
		            </div>
		        </div>
		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="k">@brand-primary</span><span class="nd">:</span> <span class="nt">darken</span><span class="o">(</span><span class="nn">#428bca</span><span class="o">,</span> <span class="nt">6</span><span class="nc">.5</span><span class="nv">%</span><span class="o">)</span><span class="p">;</span> <span class="c1">// #337ab7</span>
<span class="k">@brand-success</span><span class="nd">:</span> <span class="nn">#5cb85c</span><span class="p">;</span>
<span class="k">@brand-info</span><span class="nd">:</span>    <span class="nn">#5bc0de</span><span class="p">;</span>
<span class="k">@brand-warning</span><span class="nd">:</span> <span class="nn">#f0ad4e</span><span class="p">;</span>
<span class="k">@brand-danger</span><span class="nd">:</span>  <span class="nn">#d9534f</span><span class="p">;</span></code></pre></figure>

		        <p>Use any of these color variables as they are or reassign them to more meaningful variables for your project.</p>
		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Use as-is</span>
<span class="nc">.masthead</span> <span class="p">{</span>
  <span class="nl">background-color</span><span class="p">:</span> <span class="o">@</span><span class="n">brand-primary</span><span class="p">;</span>
<span class="p">}</span>

<span class="c1">// Reassigned variables in Less</span>
<span class="k">@alert-message-background</span><span class="nd">:</span> <span class="o">@</span><span class="nt">brand-info</span><span class="p">;</span>
<span class="nc">.alert</span> <span class="p">{</span>
  <span class="nl">background-color</span><span class="p">:</span> <span class="o">@</span><span class="n">alert-message-background</span><span class="p">;</span>
<span class="p">}</span></code></pre></figure>

		        <h3 id="less-variables-scaffolding"><a class="anchorjs-link " href="#less-variables-scaffolding" aria-label="Anchor link for: less variables scaffolding" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Scaffolding</h3>
		        <p>A handful of variables for quickly customizing key elements of your site's skeleton.</p>
		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Scaffolding</span>
<span class="k">@body-bg</span><span class="nd">:</span>    <span class="nn">#fff</span><span class="p">;</span>
<span class="k">@text-color</span><span class="nd">:</span> <span class="o">@</span><span class="nt">black-50</span><span class="p">;</span></code></pre></figure>

		        <h3 id="less-variables-links"><a class="anchorjs-link " href="#less-variables-links" aria-label="Anchor link for: less variables links" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Links</h3>
		        <p>Easily style your links with the right color with only one value.</p>
		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Variables</span>
<span class="k">@link-color</span><span class="nd">:</span>       <span class="o">@</span><span class="nt">brand-primary</span><span class="p">;</span>
<span class="k">@link-hover-color</span><span class="nd">:</span> <span class="nt">darken</span><span class="o">(@</span><span class="nt">link-color</span><span class="o">,</span> <span class="nt">15</span><span class="nv">%</span><span class="o">)</span><span class="p">;</span>

<span class="c1">// Usage</span>
<span class="nt">a</span> <span class="p">{</span>
  <span class="nl">color</span><span class="p">:</span> <span class="o">@</span><span class="n">link-color</span><span class="p">;</span>
  <span class="nl">text-decoration</span><span class="p">:</span> <span class="nb">none</span><span class="p">;</span>

  <span class="k">&amp;</span><span class="nd">:hover</span> <span class="p">{</span>
    <span class="nl">color</span><span class="p">:</span> <span class="o">@</span><span class="n">link-hover-color</span><span class="p">;</span>
    <span class="nl">text-decoration</span><span class="p">:</span> <span class="nb">underline</span><span class="p">;</span>
  <span class="p">}</span>
<span class="p">}</span></code></pre></figure>

		        <p>Note that the <code>@link-hover-color</code> uses a function, another awesome tool from Less, to automagically create the right hover color. You can use <code>darken</code>, <code>lighten</code>, <code>saturate</code>, and <code>desaturate</code>.</p>
		        <h3 id="less-variables-typography"><a class="anchorjs-link " href="#less-variables-typography" aria-label="Anchor link for: less variables typography" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Typography</h3>
		        <p>Easily set your typeface, text size, leading, and more with a few quick variables. Bootstrap makes use of these as well to provide easy typographic mixins.</p>
		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="k">@font-family-sans-serif</span><span class="nd">:</span>  <span class="s2">"Helvetica Neue"</span><span class="o">,</span> <span class="nt">Helvetica</span><span class="o">,</span> <span class="nt">Arial</span><span class="o">,</span> <span class="nt">sans-serif</span><span class="p">;</span>
<span class="k">@font-family-serif</span><span class="nd">:</span>       <span class="nt">Georgia</span><span class="o">,</span> <span class="s2">"Times New Roman"</span><span class="o">,</span> <span class="nt">Times</span><span class="o">,</span> <span class="nt">serif</span><span class="p">;</span>
<span class="k">@font-family-monospace</span><span class="nd">:</span>   <span class="nt">Menlo</span><span class="o">,</span> <span class="nt">Monaco</span><span class="o">,</span> <span class="nt">Consolas</span><span class="o">,</span> <span class="s2">"Courier New"</span><span class="o">,</span> <span class="nt">monospace</span><span class="p">;</span>
<span class="k">@font-family-base</span><span class="nd">:</span>        <span class="o">@</span><span class="nt">font-family-sans-serif</span><span class="p">;</span>

<span class="k">@font-size-base</span><span class="nd">:</span>          <span class="nt">14px</span><span class="p">;</span>
<span class="k">@font-size-large</span><span class="nd">:</span>         <span class="nt">ceil</span><span class="o">((@</span><span class="nt">font-size-base</span> <span class="o">*</span> <span class="nt">1</span><span class="nc">.25</span><span class="o">))</span><span class="p">;</span> <span class="c1">// ~18px</span>
<span class="k">@font-size-small</span><span class="nd">:</span>         <span class="nt">ceil</span><span class="o">((@</span><span class="nt">font-size-base</span> <span class="o">*</span> <span class="nt">0</span><span class="nc">.85</span><span class="o">))</span><span class="p">;</span> <span class="c1">// ~12px</span>
<span class="k">@font-size-h1</span><span class="nd">:</span>            <span class="nt">floor</span><span class="o">((@</span><span class="nt">font-size-base</span> <span class="o">*</span> <span class="nt">2</span><span class="nc">.6</span><span class="o">))</span><span class="p">;</span> <span class="c1">// ~36px</span>
<span class="k">@font-size-h2</span><span class="nd">:</span>            <span class="nt">floor</span><span class="o">((@</span><span class="nt">font-size-base</span> <span class="o">*</span> <span class="nt">2</span><span class="nc">.15</span><span class="o">))</span><span class="p">;</span> <span class="c1">// ~30px</span>
<span class="k">@font-size-h3</span><span class="nd">:</span>            <span class="nt">ceil</span><span class="o">((@</span><span class="nt">font-size-base</span> <span class="o">*</span> <span class="nt">1</span><span class="nc">.7</span><span class="o">))</span><span class="p">;</span> <span class="c1">// ~24px</span>
<span class="k">@font-size-h4</span><span class="nd">:</span>            <span class="nt">ceil</span><span class="o">((@</span><span class="nt">font-size-base</span> <span class="o">*</span> <span class="nt">1</span><span class="nc">.25</span><span class="o">))</span><span class="p">;</span> <span class="c1">// ~18px</span>
<span class="k">@font-size-h5</span><span class="nd">:</span>            <span class="o">@</span><span class="nt">font-size-base</span><span class="p">;</span>
<span class="k">@font-size-h6</span><span class="nd">:</span>            <span class="nt">ceil</span><span class="o">((@</span><span class="nt">font-size-base</span> <span class="o">*</span> <span class="nt">0</span><span class="nc">.85</span><span class="o">))</span><span class="p">;</span> <span class="c1">// ~12px</span>
<span class="k">@line-height-base</span><span class="nd">:</span>        <span class="nt">1</span><span class="nc">.428571429</span><span class="p">;</span> <span class="c1">// 20/14</span>
<span class="k">@line-height-computed</span><span class="nd">:</span>    <span class="nt">floor</span><span class="o">((@</span><span class="nt">font-size-base</span> <span class="o">*</span> <span class="o">@</span><span class="nt">line-height-base</span><span class="o">))</span><span class="p">;</span> <span class="c1">// ~20px
		</span>
<span class="k">@headings-font-family</span><span class="nd">:</span>    <span class="nt">inherit</span><span class="p">;</span>
<span class="k">@headings-font-weight</span><span class="nd">:</span>    <span class="nt">500</span><span class="p">;</span>
<span class="k">@headings-line-height</span><span class="nd">:</span>    <span class="nt">1</span><span class="nc">.1</span><span class="p">;</span>
<span class="k">@headings-color</span><span class="nd">:</span>          <span class="nt">inherit</span><span class="p">;</span></code></pre></figure>

		        <h3 id="less-variables-icons"><a class="anchorjs-link " href="#less-variables-icons" aria-label="Anchor link for: less variables icons" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Icons</h3>
		        <p>Two quick variables for customizing the location and filename of your icons.</p>
		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="k">@icon-font-path</span><span class="nd">:</span>          <span class="s2">"../fonts/"</span><span class="p">;</span>
<span class="k">@icon-font-name</span><span class="nd">:</span>          <span class="s2">"glyphicons-halflings-regular"</span><span class="p">;</span></code></pre></figure>

		        <h3 id="less-variables-components"><a class="anchorjs-link " href="#less-variables-components" aria-label="Anchor link for: less variables components" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Components</h3>
		        <p>Components throughout Bootstrap make use of some default variables for setting common values. Here are the most commonly used.</p>
		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="k">@padding-base-vertical</span><span class="nd">:</span>          <span class="nt">6px</span><span class="p">;</span>
<span class="k">@padding-base-horizontal</span><span class="nd">:</span>        <span class="nt">12px</span><span class="p">;</span>

<span class="k">@padding-large-vertical</span><span class="nd">:</span>         <span class="nt">10px</span><span class="p">;</span>
<span class="k">@padding-large-horizontal</span><span class="nd">:</span>       <span class="nt">16px</span><span class="p">;</span>

<span class="k">@padding-small-vertical</span><span class="nd">:</span>         <span class="nt">5px</span><span class="p">;</span>
<span class="k">@padding-small-horizontal</span><span class="nd">:</span>       <span class="nt">10px</span><span class="p">;</span>

<span class="k">@padding-xs-vertical</span><span class="nd">:</span>            <span class="nt">1px</span><span class="p">;</span>
<span class="k">@padding-xs-horizontal</span><span class="nd">:</span>          <span class="nt">5px</span><span class="p">;</span>

<span class="k">@line-height-large</span><span class="nd">:</span>              <span class="nt">1</span><span class="nc">.33</span><span class="p">;</span>
<span class="k">@line-height-small</span><span class="nd">:</span>              <span class="nt">1</span><span class="nc">.5</span><span class="p">;</span>

<span class="k">@border-radius-base</span><span class="nd">:</span>             <span class="nt">4px</span><span class="p">;</span>
<span class="k">@border-radius-large</span><span class="nd">:</span>            <span class="nt">6px</span><span class="p">;</span>
<span class="k">@border-radius-small</span><span class="nd">:</span>            <span class="nt">3px</span><span class="p">;</span>

<span class="k">@component-active-color</span><span class="nd">:</span>         <span class="nn">#fff</span><span class="p">;</span>
<span class="k">@component-active-bg</span><span class="nd">:</span>            <span class="o">@</span><span class="nt">brand-primary</span><span class="p">;</span>

<span class="k">@caret-width-base</span><span class="nd">:</span>               <span class="nt">4px</span><span class="p">;</span>
<span class="k">@caret-width-large</span><span class="nd">:</span>              <span class="nt">5px</span><span class="p">;</span></code></pre></figure>

		        <h2 id="less-mixins-vendor"><a class="anchorjs-link " href="#less-mixins-vendor" aria-label="Anchor link for: less mixins vendor" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Vendor mixins</h2>
		        <p>Vendor mixins are mixins to help support multiple browsers by including all relevant vendor prefixes in your compiled CSS.</p>
		        <h3 id="less-mixins-box-sizing"><a class="anchorjs-link " href="#less-mixins-box-sizing" aria-label="Anchor link for: less mixins box sizing" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Box-sizing</h3>
		        <p>Reset your components' box model with a single mixin. For context, see this <a href="https://developer.mozilla.org/en-US/docs/CSS/box-sizing" target="_blank">helpful article from Mozilla</a>.</p>
		        <p>The mixin is <strong>deprecated</strong> as of v3.2.0, with the introduction of Autoprefixer. To preserve backwards-compatibility, Bootstrap will continue to use the mixin internally until Bootstrap v4.</p>
		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nc">.box-sizing</span><span class="o">(@</span><span class="nt">box-model</span><span class="o">)</span> <span class="p">{</span>
  <span class="na">-webkit-box-sizing</span><span class="p">:</span> <span class="o">@</span><span class="n">box-model</span><span class="p">;</span> <span class="c1">// Safari &lt;= 5</span>
     <span class="na">-moz-box-sizing</span><span class="p">:</span> <span class="o">@</span><span class="n">box-model</span><span class="p">;</span> <span class="c1">// Firefox &lt;= 19</span>
          <span class="nl">box-sizing</span><span class="p">:</span> <span class="o">@</span><span class="n">box-model</span><span class="p">;</span>
<span class="p">}</span></code></pre></figure>

		        <h3 id="less-mixins-rounded-corners"><a class="anchorjs-link " href="#less-mixins-rounded-corners" aria-label="Anchor link for: less mixins rounded corners" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Rounded corners</h3>
		        <p>Today all modern browsers support the non-prefixed <code>border-radius</code> property. As such, there is no <code>.border-radius()</code> mixin, but Bootstrap does include shortcuts for quickly rounding two corners on a particular side of an object.</p>
		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nc">.border-top-radius</span><span class="o">(@</span><span class="nt">radius</span><span class="o">)</span> <span class="p">{</span>
  <span class="nl">border-top-right-radius</span><span class="p">:</span> <span class="o">@</span><span class="n">radius</span><span class="p">;</span>
   <span class="nl">border-top-left-radius</span><span class="p">:</span> <span class="o">@</span><span class="n">radius</span><span class="p">;</span>
<span class="p">}</span>
<span class="nc">.border-right-radius</span><span class="o">(@</span><span class="nt">radius</span><span class="o">)</span> <span class="p">{</span>
  <span class="nl">border-bottom-right-radius</span><span class="p">:</span> <span class="o">@</span><span class="n">radius</span><span class="p">;</span>
     <span class="nl">border-top-right-radius</span><span class="p">:</span> <span class="o">@</span><span class="n">radius</span><span class="p">;</span>
<span class="p">}</span>
<span class="nc">.border-bottom-radius</span><span class="o">(@</span><span class="nt">radius</span><span class="o">)</span> <span class="p">{</span>
  <span class="nl">border-bottom-right-radius</span><span class="p">:</span> <span class="o">@</span><span class="n">radius</span><span class="p">;</span>
   <span class="nl">border-bottom-left-radius</span><span class="p">:</span> <span class="o">@</span><span class="n">radius</span><span class="p">;</span>
<span class="p">}</span>
<span class="nc">.border-left-radius</span><span class="o">(@</span><span class="nt">radius</span><span class="o">)</span> <span class="p">{</span>
  <span class="nl">border-bottom-left-radius</span><span class="p">:</span> <span class="o">@</span><span class="n">radius</span><span class="p">;</span>
     <span class="nl">border-top-left-radius</span><span class="p">:</span> <span class="o">@</span><span class="n">radius</span><span class="p">;</span>
<span class="p">}</span></code></pre></figure>

		        <h3 id="less-mixins-box-shadow"><a class="anchorjs-link " href="#less-mixins-box-shadow" aria-label="Anchor link for: less mixins box shadow" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Box (Drop) shadows</h3>
		        <p>If your target audience is using the latest and greatest browsers and devices, be sure to just use the <code>box-shadow</code> property on its own. If you need support for older Android (pre-v4) and iOS devices (pre-iOS 5), use the <strong>deprecated</strong> mixin to pick up the required <code>-webkit</code> prefix.</p>
		        <p>The mixin is <strong>deprecated</strong> as of v3.1.0, since Bootstrap doesn't officially support the outdated platforms that don't support the standard property. To preserve backwards-compatibility, Bootstrap will continue to use the mixin internally until Bootstrap v4.</p>
		        <p>Be sure to use <code>rgba()</code> colors in your box shadows so they blend as seamlessly as possible with backgrounds.</p>
		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="err">.</span><span class="nl">box-shadow</span><span class="err">(@</span><span class="na">shadow</span><span class="p">:</span> <span class="m">0</span> <span class="m">1px</span> <span class="m">3px</span> <span class="nf">rgba</span><span class="p">(</span><span class="m">0</span><span class="o">,</span><span class="m">0</span><span class="o">,</span><span class="m">0</span><span class="o">,.</span><span class="m">25</span><span class="p">))</span> <span class="p">{</span>
  <span class="na">-webkit-box-shadow</span><span class="p">:</span> <span class="o">@</span><span class="n">shadow</span><span class="p">;</span> <span class="c1">// iOS &lt;4.3 &amp; Android &lt;4.1</span>
          <span class="nl">box-shadow</span><span class="p">:</span> <span class="o">@</span><span class="n">shadow</span><span class="p">;</span>
<span class="p">}</span></code></pre></figure>

		        <h3 id="less-mixins-transitions"><a class="anchorjs-link " href="#less-mixins-transitions" aria-label="Anchor link for: less mixins transitions" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Transitions</h3>
		        <p>Multiple mixins for flexibility. Set all transition information with one, or specify a separate delay and duration as needed.</p>
		        <p>The mixins are <strong>deprecated</strong> as of v3.2.0, with the introduction of Autoprefixer. To preserve backwards-compatibility, Bootstrap will continue to use the mixins internally until Bootstrap v4.</p>
		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nc">.transition</span><span class="o">(@</span><span class="nt">transition</span><span class="o">)</span> <span class="p">{</span>
  <span class="na">-webkit-transition</span><span class="p">:</span> <span class="o">@</span><span class="n">transition</span><span class="p">;</span>
          <span class="nl">transition</span><span class="p">:</span> <span class="o">@</span><span class="n">transition</span><span class="p">;</span>
<span class="p">}</span>
<span class="nc">.transition-property</span><span class="o">(@</span><span class="nt">transition-property</span><span class="o">)</span> <span class="p">{</span>
  <span class="na">-webkit-transition-property</span><span class="p">:</span> <span class="o">@</span><span class="n">transition-property</span><span class="p">;</span>
          <span class="nl">transition-property</span><span class="p">:</span> <span class="o">@</span><span class="n">transition-property</span><span class="p">;</span>
<span class="p">}</span>
<span class="nc">.transition-delay</span><span class="o">(@</span><span class="nt">transition-delay</span><span class="o">)</span> <span class="p">{</span>
  <span class="na">-webkit-transition-delay</span><span class="p">:</span> <span class="o">@</span><span class="n">transition-delay</span><span class="p">;</span>
          <span class="nl">transition-delay</span><span class="p">:</span> <span class="o">@</span><span class="n">transition-delay</span><span class="p">;</span>
<span class="p">}</span>
<span class="nc">.transition-duration</span><span class="o">(@</span><span class="nt">transition-duration</span><span class="o">)</span> <span class="p">{</span>
  <span class="na">-webkit-transition-duration</span><span class="p">:</span> <span class="o">@</span><span class="n">transition-duration</span><span class="p">;</span>
          <span class="nl">transition-duration</span><span class="p">:</span> <span class="o">@</span><span class="n">transition-duration</span><span class="p">;</span>
<span class="p">}</span>
<span class="nc">.transition-timing-function</span><span class="o">(@</span><span class="nt">timing-function</span><span class="o">)</span> <span class="p">{</span>
  <span class="na">-webkit-transition-timing-function</span><span class="p">:</span> <span class="o">@</span><span class="n">timing-function</span><span class="p">;</span>
          <span class="nl">transition-timing-function</span><span class="p">:</span> <span class="o">@</span><span class="n">timing-function</span><span class="p">;</span>
<span class="p">}</span>
<span class="nc">.transition-transform</span><span class="o">(@</span><span class="nt">transition</span><span class="o">)</span> <span class="p">{</span>
  <span class="na">-webkit-transition</span><span class="p">:</span> <span class="o">-</span><span class="n">webkit-transform</span> <span class="o">@</span><span class="n">transition</span><span class="p">;</span>
     <span class="na">-moz-transition</span><span class="p">:</span> <span class="o">-</span><span class="n">moz-transform</span> <span class="o">@</span><span class="n">transition</span><span class="p">;</span>
       <span class="na">-o-transition</span><span class="p">:</span> <span class="o">-</span><span class="n">o-transform</span> <span class="o">@</span><span class="n">transition</span><span class="p">;</span>
          <span class="nl">transition</span><span class="p">:</span> <span class="n">transform</span> <span class="o">@</span><span class="n">transition</span><span class="p">;</span>
<span class="p">}</span></code></pre></figure>

		        <h3 id="less-mixins-transformations"><a class="anchorjs-link " href="#less-mixins-transformations" aria-label="Anchor link for: less mixins transformations" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Transformations</h3>
		        <p>Rotate, scale, translate (move), or skew any object.</p>
		        <p>The mixins are <strong>deprecated</strong> as of v3.2.0, with the introduction of Autoprefixer. To preserve backwards-compatibility, Bootstrap will continue to use the mixins internally until Bootstrap v4.</p>
		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nc">.rotate</span><span class="o">(@</span><span class="nt">degrees</span><span class="o">)</span> <span class="p">{</span>
  <span class="na">-webkit-transform</span><span class="p">:</span> <span class="nf">rotate</span><span class="p">(</span><span class="o">@</span><span class="n">degrees</span><span class="p">);</span>
      <span class="na">-ms-transform</span><span class="p">:</span> <span class="nf">rotate</span><span class="p">(</span><span class="o">@</span><span class="n">degrees</span><span class="p">);</span> <span class="c1">// IE9 only</span>
          <span class="nl">transform</span><span class="p">:</span> <span class="nf">rotate</span><span class="p">(</span><span class="o">@</span><span class="n">degrees</span><span class="p">);</span>
<span class="p">}</span>
<span class="nc">.scale</span><span class="o">(@</span><span class="nt">ratio</span><span class="p">;</span> <span class="k">@ratio-y</span><span class="nc">...</span><span class="o">)</span> <span class="p">{</span>
  <span class="na">-webkit-transform</span><span class="p">:</span> <span class="nf">scale</span><span class="p">(</span><span class="o">@</span><span class="n">ratio</span><span class="o">,</span> <span class="o">@</span><span class="n">ratio-y</span><span class="p">);</span>
      <span class="na">-ms-transform</span><span class="p">:</span> <span class="nf">scale</span><span class="p">(</span><span class="o">@</span><span class="n">ratio</span><span class="o">,</span> <span class="o">@</span><span class="n">ratio-y</span><span class="p">);</span> <span class="c1">// IE9 only</span>
          <span class="nl">transform</span><span class="p">:</span> <span class="nf">scale</span><span class="p">(</span><span class="o">@</span><span class="n">ratio</span><span class="o">,</span> <span class="o">@</span><span class="n">ratio-y</span><span class="p">);</span>
<span class="p">}</span>
<span class="nc">.translate</span><span class="o">(@</span><span class="nt">x</span><span class="p">;</span> <span class="k">@y</span><span class="o">)</span> <span class="p">{</span>
  <span class="na">-webkit-transform</span><span class="p">:</span> <span class="nf">translate</span><span class="p">(</span><span class="o">@</span><span class="n">x</span><span class="o">,</span> <span class="o">@</span><span class="n">y</span><span class="p">);</span>
      <span class="na">-ms-transform</span><span class="p">:</span> <span class="nf">translate</span><span class="p">(</span><span class="o">@</span><span class="n">x</span><span class="o">,</span> <span class="o">@</span><span class="n">y</span><span class="p">);</span> <span class="c1">// IE9 only</span>
          <span class="nl">transform</span><span class="p">:</span> <span class="nf">translate</span><span class="p">(</span><span class="o">@</span><span class="n">x</span><span class="o">,</span> <span class="o">@</span><span class="n">y</span><span class="p">);</span>
<span class="p">}</span>
<span class="nc">.skew</span><span class="o">(@</span><span class="nt">x</span><span class="p">;</span> <span class="k">@y</span><span class="o">)</span> <span class="p">{</span>
  <span class="na">-webkit-transform</span><span class="p">:</span> <span class="nf">skew</span><span class="p">(</span><span class="o">@</span><span class="n">x</span><span class="o">,</span> <span class="o">@</span><span class="n">y</span><span class="p">);</span>
      <span class="na">-ms-transform</span><span class="p">:</span> <span class="nf">skewX</span><span class="p">(</span><span class="o">@</span><span class="n">x</span><span class="p">)</span> <span class="nf">skewY</span><span class="p">(</span><span class="o">@</span><span class="n">y</span><span class="p">);</span> <span class="c1">// See https://github.com/twbs/bootstrap/issues/4885; IE9+</span>
          <span class="nl">transform</span><span class="p">:</span> <span class="nf">skew</span><span class="p">(</span><span class="o">@</span><span class="n">x</span><span class="o">,</span> <span class="o">@</span><span class="n">y</span><span class="p">);</span>
<span class="p">}</span>
<span class="nc">.translate3d</span><span class="o">(@</span><span class="nt">x</span><span class="p">;</span> <span class="k">@y</span><span class="p">;</span> <span class="k">@z</span><span class="o">)</span> <span class="p">{</span>
  <span class="na">-webkit-transform</span><span class="p">:</span> <span class="nf">translate3d</span><span class="p">(</span><span class="o">@</span><span class="n">x</span><span class="o">,</span> <span class="o">@</span><span class="n">y</span><span class="o">,</span> <span class="o">@</span><span class="n">z</span><span class="p">);</span>
		          <span class="nl">transform</span><span class="p">:</span> <span class="nf">translate3d</span><span class="p">(</span><span class="o">@</span><span class="n">x</span><span class="o">,</span> <span class="o">@</span><span class="n">y</span><span class="o">,</span> <span class="o">@</span><span class="n">z</span><span class="p">);</span>
<span class="p">}</span>

<span class="nc">.rotateX</span><span class="o">(@</span><span class="nt">degrees</span><span class="o">)</span> <span class="p">{</span>
  <span class="na">-webkit-transform</span><span class="p">:</span> <span class="nf">rotateX</span><span class="p">(</span><span class="o">@</span><span class="n">degrees</span><span class="p">);</span>
      <span class="na">-ms-transform</span><span class="p">:</span> <span class="nf">rotateX</span><span class="p">(</span><span class="o">@</span><span class="n">degrees</span><span class="p">);</span> <span class="c1">// IE9 only</span>
          <span class="nl">transform</span><span class="p">:</span> <span class="nf">rotateX</span><span class="p">(</span><span class="o">@</span><span class="n">degrees</span><span class="p">);</span>
<span class="p">}</span>
<span class="nc">.rotateY</span><span class="o">(@</span><span class="nt">degrees</span><span class="o">)</span> <span class="p">{</span>
  <span class="na">-webkit-transform</span><span class="p">:</span> <span class="nf">rotateY</span><span class="p">(</span><span class="o">@</span><span class="n">degrees</span><span class="p">);</span>
      <span class="na">-ms-transform</span><span class="p">:</span> <span class="nf">rotateY</span><span class="p">(</span><span class="o">@</span><span class="n">degrees</span><span class="p">);</span> <span class="c1">// IE9 only</span>
          <span class="nl">transform</span><span class="p">:</span> <span class="nf">rotateY</span><span class="p">(</span><span class="o">@</span><span class="n">degrees</span><span class="p">);</span>
<span class="p">}</span>
<span class="nc">.perspective</span><span class="o">(@</span><span class="nt">perspective</span><span class="o">)</span> <span class="p">{</span>
  <span class="na">-webkit-perspective</span><span class="p">:</span> <span class="o">@</span><span class="n">perspective</span><span class="p">;</span>
     <span class="na">-moz-perspective</span><span class="p">:</span> <span class="o">@</span><span class="n">perspective</span><span class="p">;</span>
          <span class="nl">perspective</span><span class="p">:</span> <span class="o">@</span><span class="n">perspective</span><span class="p">;</span>
<span class="p">}</span>
<span class="nc">.perspective-origin</span><span class="o">(@</span><span class="nt">perspective</span><span class="o">)</span> <span class="p">{</span>
  <span class="na">-webkit-perspective-origin</span><span class="p">:</span> <span class="o">@</span><span class="n">perspective</span><span class="p">;</span>
     <span class="na">-moz-perspective-origin</span><span class="p">:</span> <span class="o">@</span><span class="n">perspective</span><span class="p">;</span>
          <span class="nl">perspective-origin</span><span class="p">:</span> <span class="o">@</span><span class="n">perspective</span><span class="p">;</span>
<span class="p">}</span>
<span class="nc">.transform-origin</span><span class="o">(@</span><span class="nt">origin</span><span class="o">)</span> <span class="p">{</span>
  <span class="na">-webkit-transform-origin</span><span class="p">:</span> <span class="o">@</span><span class="n">origin</span><span class="p">;</span>
     <span class="na">-moz-transform-origin</span><span class="p">:</span> <span class="o">@</span><span class="n">origin</span><span class="p">;</span>
      <span class="na">-ms-transform-origin</span><span class="p">:</span> <span class="o">@</span><span class="n">origin</span><span class="p">;</span> <span class="c1">// IE9 only</span>
          <span class="nl">transform-origin</span><span class="p">:</span> <span class="o">@</span><span class="n">origin</span><span class="p">;</span>
<span class="p">}</span></code></pre></figure>

		        <h3 id="less-mixins-animations"><a class="anchorjs-link " href="#less-mixins-animations" aria-label="Anchor link for: less mixins animations" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Animations</h3>
		        <p>A single mixin for using all of CSS3's animation properties in one declaration and other mixins for individual properties.</p>
		        <p>The mixins are <strong>deprecated</strong> as of v3.2.0, with the introduction of Autoprefixer. To preserve backwards-compatibility, Bootstrap will continue to use the mixins internally until Bootstrap v4.</p>
		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nc">.animation</span><span class="o">(@</span><span class="nt">animation</span><span class="o">)</span> <span class="p">{</span>
  <span class="na">-webkit-animation</span><span class="p">:</span> <span class="o">@</span><span class="n">animation</span><span class="p">;</span>
          <span class="nl">animation</span><span class="p">:</span> <span class="o">@</span><span class="n">animation</span><span class="p">;</span>
<span class="p">}</span>
<span class="nc">.animation-name</span><span class="o">(@</span><span class="nt">name</span><span class="o">)</span> <span class="p">{</span>
  <span class="na">-webkit-animation-name</span><span class="p">:</span> <span class="o">@</span><span class="n">name</span><span class="p">;</span>
          <span class="nl">animation-name</span><span class="p">:</span> <span class="o">@</span><span class="n">name</span><span class="p">;</span>
<span class="p">}</span>
<span class="nc">.animation-duration</span><span class="o">(@</span><span class="nt">duration</span><span class="o">)</span> <span class="p">{</span>
  <span class="na">-webkit-animation-duration</span><span class="p">:</span> <span class="o">@</span><span class="n">duration</span><span class="p">;</span>
          <span class="nl">animation-duration</span><span class="p">:</span> <span class="o">@</span><span class="n">duration</span><span class="p">;</span>
<span class="p">}</span>
<span class="nc">.animation-timing-function</span><span class="o">(@</span><span class="nt">timing-function</span><span class="o">)</span> <span class="p">{</span>
  <span class="na">-webkit-animation-timing-function</span><span class="p">:</span> <span class="o">@</span><span class="n">timing-function</span><span class="p">;</span>
          <span class="nl">animation-timing-function</span><span class="p">:</span> <span class="o">@</span><span class="n">timing-function</span><span class="p">;</span>
<span class="p">}</span>
<span class="nc">.animation-delay</span><span class="o">(@</span><span class="nt">delay</span><span class="o">)</span> <span class="p">{</span>
  <span class="na">-webkit-animation-delay</span><span class="p">:</span> <span class="o">@</span><span class="n">delay</span><span class="p">;</span>
          <span class="nl">animation-delay</span><span class="p">:</span> <span class="o">@</span><span class="n">delay</span><span class="p">;</span>
<span class="p">}</span>
<span class="nc">.animation-iteration-count</span><span class="o">(@</span><span class="nt">iteration-count</span><span class="o">)</span> <span class="p">{</span>
  <span class="na">-webkit-animation-iteration-count</span><span class="p">:</span> <span class="o">@</span><span class="n">iteration-count</span><span class="p">;</span>
          <span class="nl">animation-iteration-count</span><span class="p">:</span> <span class="o">@</span><span class="n">iteration-count</span><span class="p">;</span>
<span class="p">}</span>
<span class="nc">.animation-direction</span><span class="o">(@</span><span class="nt">direction</span><span class="o">)</span> <span class="p">{</span>
  <span class="na">-webkit-animation-direction</span><span class="p">:</span> <span class="o">@</span><span class="n">direction</span><span class="p">;</span>
          <span class="nl">animation-direction</span><span class="p">:</span> <span class="o">@</span><span class="n">direction</span><span class="p">;</span>
<span class="p">}</span></code></pre></figure>

		        <h3 id="less-mixins-opacity"><a class="anchorjs-link " href="#less-mixins-opacity" aria-label="Anchor link for: less mixins opacity" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Opacity</h3>
		        <p>Set the opacity for all browsers and provide a <code>filter</code> fallback for IE8.</p>
		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nc">.opacity</span><span class="o">(@</span><span class="nt">opacity</span><span class="o">)</span> <span class="p">{</span>
  <span class="nl">opacity</span><span class="p">:</span> <span class="o">@</span><span class="n">opacity</span><span class="p">;</span>
  <span class="c1">// IE8 filter</span>
  <span class="k">@opacity-ie</span><span class="nd">:</span> <span class="o">(@</span><span class="nt">opacity</span> <span class="o">*</span> <span class="nt">100</span><span class="o">)</span><span class="p">;</span>
  <span class="nl">filter</span><span class="p">:</span> <span class="o">~</span><span class="s2">"alpha(opacity=@{opacity-ie})"</span><span class="p">;</span>
<span class="p">}</span></code></pre></figure>

		        <h3 id="less-mixins-placeholder"><a class="anchorjs-link " href="#less-mixins-placeholder" aria-label="Anchor link for: less mixins placeholder" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Placeholder text</h3>
		        <p>Provide context for form controls within each field.</p>
		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="err">.</span><span class="na">placeholder</span><span class="err">(@</span><span class="nl">color</span><span class="p">:</span> <span class="o">@</span><span class="n">input-color-placeholder</span><span class="p">)</span> <span class="p">{</span>
  <span class="err">&amp;</span><span class="p">:</span><span class="o">:-</span><span class="n">moz-placeholder</span>           <span class="p">{</span> <span class="nl">color</span><span class="p">:</span> <span class="o">@</span><span class="n">color</span><span class="p">;</span> <span class="p">}</span> <span class="c1">// Firefox</span>
  <span class="err">&amp;</span><span class="p">:</span><span class="o">-</span><span class="n">ms-input-placeholder</span>       <span class="p">{</span> <span class="nl">color</span><span class="p">:</span> <span class="o">@</span><span class="n">color</span><span class="p">;</span> <span class="p">}</span> <span class="c1">// Internet Explorer 10+</span>
  <span class="err">&amp;</span><span class="p">:</span><span class="o">:-</span><span class="n">webkit-input-placeholder</span>  <span class="p">{</span> <span class="nl">color</span><span class="p">:</span> <span class="o">@</span><span class="n">color</span><span class="p">;</span> <span class="p">}</span> <span class="c1">// Safari and Chrome</span>
<span class="p">}</span></code></pre></figure>

		        <h3 id="less-mixins-columns"><a class="anchorjs-link " href="#less-mixins-columns" aria-label="Anchor link for: less mixins columns" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Columns</h3>
		        <p>Generate columns via CSS within a single element.</p>
		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nc">.content-columns</span><span class="o">(@</span><span class="nt">width</span><span class="p">;</span> <span class="k">@count</span><span class="p">;</span> <span class="k">@gap</span><span class="o">)</span> <span class="p">{</span>
  <span class="na">-webkit-column-width</span><span class="p">:</span> <span class="o">@</span><span class="n">width</span><span class="p">;</span>
     <span class="na">-moz-column-width</span><span class="p">:</span> <span class="o">@</span><span class="n">width</span><span class="p">;</span>
          <span class="nl">column-width</span><span class="p">:</span> <span class="o">@</span><span class="n">width</span><span class="p">;</span>
  <span class="na">-webkit-column-count</span><span class="p">:</span> <span class="o">@</span><span class="n">count</span><span class="p">;</span>
     <span class="na">-moz-column-count</span><span class="p">:</span> <span class="o">@</span><span class="n">count</span><span class="p">;</span>
          <span class="nl">column-count</span><span class="p">:</span> <span class="o">@</span><span class="n">count</span><span class="p">;</span>
  <span class="na">-webkit-column-gap</span><span class="p">:</span> <span class="o">@</span><span class="n">gap</span><span class="p">;</span>
     <span class="na">-moz-column-gap</span><span class="p">:</span> <span class="o">@</span><span class="n">gap</span><span class="p">;</span>
          <span class="nl">column-gap</span><span class="p">:</span> <span class="o">@</span><span class="n">gap</span><span class="p">;</span>
<span class="p">}</span></code></pre></figure>

		        <h3 id="less-mixins-gradients"><a class="anchorjs-link " href="#less-mixins-gradients" aria-label="Anchor link for: less mixins gradients" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Gradients</h3>
		        <p>Easily turn any two colors into a background gradient. Get more advanced and set a direction, use three colors, or use a radial gradient. With a single mixin you get all the prefixed syntaxes you'll need.</p>
		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nn">#gradient</span> <span class="o">&gt;</span> <span class="nc">.vertical</span><span class="o">(</span><span class="nn">#333</span><span class="p">;</span> <span class="nn">#000</span><span class="o">)</span><span class="p">;</span>
<span class="nn">#gradient</span> <span class="o">&gt;</span> <span class="nc">.horizontal</span><span class="o">(</span><span class="nn">#333</span><span class="p">;</span> <span class="nn">#000</span><span class="o">)</span><span class="p">;</span>
<span class="nn">#gradient</span> <span class="o">&gt;</span> <span class="nc">.radial</span><span class="o">(</span><span class="nn">#333</span><span class="p">;</span> <span class="nn">#000</span><span class="o">)</span><span class="p">;</span></code></pre></figure>

		        <p>You can also specify the angle of a standard two-color, linear gradient:</p>
		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nn">#gradient</span> <span class="o">&gt;</span> <span class="nc">.directional</span><span class="o">(</span><span class="nn">#333</span><span class="p">;</span> <span class="nn">#000</span><span class="p">;</span> <span class="nt">45deg</span><span class="o">)</span><span class="p">;</span></code></pre></figure>

		        <p>If you need a barber-stripe style gradient, that's easy, too. Just specify a single color and we'll overlay a translucent white stripe.</p>
		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nn">#gradient</span> <span class="o">&gt;</span> <span class="nc">.striped</span><span class="o">(</span><span class="nn">#333</span><span class="p">;</span> <span class="nt">45deg</span><span class="o">)</span><span class="p">;</span></code></pre></figure>

		        <p>Up the ante and use three colors instead. Set the first color, the second color, the second color's color stop (a percentage value like 25%), and the third color with these mixins:</p>
		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nn">#gradient</span> <span class="o">&gt;</span> <span class="nc">.vertical-three-colors</span><span class="o">(</span><span class="nn">#777</span><span class="p">;</span> <span class="nn">#333</span><span class="p">;</span> <span class="nt">25</span><span class="nv">%</span><span class="p">;</span> <span class="nn">#000</span><span class="o">)</span><span class="p">;</span>
<span class="nn">#gradient</span> <span class="o">&gt;</span> <span class="nc">.horizontal-three-colors</span><span class="o">(</span><span class="nn">#777</span><span class="p">;</span> <span class="nn">#333</span><span class="p">;</span> <span class="nt">25</span><span class="nv">%</span><span class="p">;</span> <span class="nn">#000</span><span class="o">)</span><span class="p">;</span></code></pre></figure>

		        <p><strong>Heads up!</strong> Should you ever need to remove a gradient, be sure to remove any IE-specific <code>filter</code> you may have added. You can do that by using the <code>.reset-filter()</code> mixin alongside <code>background-image: none;</code>.</p>
		        <h2 id="less-mixins-utility"><a class="anchorjs-link " href="#less-mixins-utility" aria-label="Anchor link for: less mixins utility" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Utility mixins</h2>
		        <p>Utility mixins are mixins that combine otherwise unrelated CSS properties to achieve a specific goal or task.</p>
		        <h3 id="less-mixins-clearfix"><a class="anchorjs-link " href="#less-mixins-clearfix" aria-label="Anchor link for: less mixins clearfix" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Clearfix</h3>
		        <p>Forget adding <code>class="clearfix"</code> to any element and instead add the <code>.clearfix()</code> mixin where appropriate. Uses the <a href="http://nicolasgallagher.com/micro-clearfix-hack/" target="_blank">micro clearfix</a> from <a href="https://twitter.com/necolas" target="_blank">Nicolas Gallagher</a>.</p>
		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Mixin</span>
<span class="nc">.clearfix</span><span class="o">()</span> <span class="p">{</span>
  <span class="k">&amp;</span><span class="nd">:before</span><span class="o">,</span>
  <span class="k">&amp;</span><span class="nd">:after</span> <span class="p">{</span>
    <span class="nl">content</span><span class="p">:</span> <span class="s2">" "</span><span class="p">;</span>
    <span class="nl">display</span><span class="p">:</span> <span class="n">table</span><span class="p">;</span>
  <span class="p">}</span>
  <span class="k">&amp;</span><span class="nd">:after</span> <span class="p">{</span>
    <span class="nl">clear</span><span class="p">:</span> <span class="nb">both</span><span class="p">;</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="c1">// Usage</span>
<span class="nc">.container</span> <span class="p">{</span>
  <span class="nc">.clearfix</span><span class="o">()</span><span class="p">;</span>
<span class="p">}</span></code></pre></figure>

		        <h3 id="less-mixins-centering"><a class="anchorjs-link " href="#less-mixins-centering" aria-label="Anchor link for: less mixins centering" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Horizontal centering</h3>
		        <p>Quickly center any element within its parent. <strong>Requires <code>width</code> or <code>max-width</code> to be set.</strong></p>
		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Mixin</span>
<span class="nc">.center-block</span><span class="o">()</span> <span class="p">{</span>
  <span class="nl">display</span><span class="p">:</span> <span class="nb">block</span><span class="p">;</span>
  <span class="nl">margin-left</span><span class="p">:</span> <span class="nb">auto</span><span class="p">;</span>
  <span class="nl">margin-right</span><span class="p">:</span> <span class="nb">auto</span><span class="p">;</span>
<span class="p">}</span>

<span class="c1">// Usage</span>
<span class="nc">.container</span> <span class="p">{</span>
  <span class="nl">width</span><span class="p">:</span> <span class="m">940px</span><span class="p">;</span>
  <span class="nc">.center-block</span><span class="o">()</span><span class="p">;</span>
<span class="p">}</span></code></pre></figure>

		        <h3 id="less-mixins-sizing"><a class="anchorjs-link " href="#less-mixins-sizing" aria-label="Anchor link for: less mixins sizing" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Sizing helpers</h3>
		        <p>Specify the dimensions of an object more easily.</p>
		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Mixins</span>
<span class="nc">.size</span><span class="o">(@</span><span class="nt">width</span><span class="p">;</span> <span class="k">@height</span><span class="o">)</span> <span class="p">{</span>
  <span class="nl">width</span><span class="p">:</span> <span class="o">@</span><span class="n">width</span><span class="p">;</span>
  <span class="nl">height</span><span class="p">:</span> <span class="o">@</span><span class="n">height</span><span class="p">;</span>
<span class="p">}</span>
<span class="nc">.square</span><span class="o">(@</span><span class="nt">size</span><span class="o">)</span> <span class="p">{</span>
  <span class="nc">.size</span><span class="o">(@</span><span class="nt">size</span><span class="p">;</span> <span class="k">@size</span><span class="o">)</span><span class="p">;</span>
<span class="p">}</span>

<span class="c1">// Usage</span>
<span class="nc">.image</span> <span class="p">{</span> <span class="nc">.size</span><span class="o">(</span><span class="nt">400px</span><span class="p">;</span> <span class="nt">300px</span><span class="o">)</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.avatar</span> <span class="p">{</span> <span class="nc">.square</span><span class="o">(</span><span class="nt">48px</span><span class="o">)</span><span class="p">;</span> <span class="p">}</span></code></pre></figure>

		        <h3 id="less-mixins-resizable"><a class="anchorjs-link " href="#less-mixins-resizable" aria-label="Anchor link for: less mixins resizable" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Resizable textareas</h3>
		        <p>Easily configure the resize options for any textarea, or any other element. Defaults to normal browser behavior (<code>both</code>).</p>
		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="err">.</span><span class="na">resizable</span><span class="err">(@</span><span class="nl">direction</span><span class="p">:</span> <span class="nb">both</span><span class="p">)</span> <span class="p">{</span>
  <span class="c1">// Options: horizontal, vertical, both</span>
  <span class="nl">resize</span><span class="p">:</span> <span class="o">@</span><span class="n">direction</span><span class="p">;</span>
  <span class="c1">// Safari fix</span>
  <span class="nl">overflow</span><span class="p">:</span> <span class="nb">auto</span><span class="p">;</span>
<span class="p">}</span></code></pre></figure>

		        <h3 id="less-mixins-truncating"><a class="anchorjs-link " href="#less-mixins-truncating" aria-label="Anchor link for: less mixins truncating" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Truncating text</h3>
		        <p>Easily truncate text with an ellipsis with a single mixin. <strong>Requires element to be <code>block</code> or <code>inline-block</code> level.</strong></p>
		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Mixin</span>
<span class="nc">.text-overflow</span><span class="o">()</span> <span class="p">{</span>
  <span class="nl">overflow</span><span class="p">:</span> <span class="nb">hidden</span><span class="p">;</span>
  <span class="nl">text-overflow</span><span class="p">:</span> <span class="n">ellipsis</span><span class="p">;</span>
  <span class="nl">white-space</span><span class="p">:</span> <span class="nb">nowrap</span><span class="p">;</span>
<span class="p">}</span>

<span class="c1">// Usage</span>
<span class="nc">.branch-name</span> <span class="p">{</span>
  <span class="nl">display</span><span class="p">:</span> <span class="n">inline-block</span><span class="p">;</span>
  <span class="nl">max-width</span><span class="p">:</span> <span class="m">200px</span><span class="p">;</span>
  <span class="nc">.text-overflow</span><span class="o">()</span><span class="p">;</span>
<span class="p">}</span></code></pre></figure>

		        <h3 id="less-mixins-retina-images"><a class="anchorjs-link " href="#less-mixins-retina-images" aria-label="Anchor link for: less mixins retina images" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Retina images</h3>
		        <p>Specify two image paths and the @1x image dimensions, and Bootstrap will provide an @2x media query. <strong>If you have many images to serve, consider writing your retina image CSS manually in a single media query.</strong></p>
		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nc">.img-retina</span><span class="o">(@</span><span class="nt">file-1x</span><span class="p">;</span> <span class="k">@file-2x</span><span class="p">;</span> <span class="k">@width-1x</span><span class="p">;</span> <span class="k">@height-1x</span><span class="o">)</span> <span class="p">{</span>
  <span class="nl">background-image</span><span class="p">:</span> <span class="sx">url("@{file-1x}")</span><span class="p">;</span>

  <span class="k">@media</span>
  <span class="n">only</span> <span class="n">screen</span> <span class="nf">and</span> <span class="p">(</span><span class="o">-</span><span class="n">webkit-min-device-pixel-ratio</span><span class="o">:</span> <span class="m">2</span><span class="p">)</span><span class="o">,</span>
  <span class="n">only</span> <span class="n">screen</span> <span class="nf">and</span> <span class="p">(</span>   <span class="n">min--moz-device-pixel-ratio</span><span class="o">:</span> <span class="m">2</span><span class="p">)</span><span class="o">,</span>
  <span class="n">only</span> <span class="n">screen</span> <span class="nf">and</span> <span class="p">(</span>     <span class="o">-</span><span class="n">o-min-device-pixel-ratio</span><span class="o">:</span> <span class="m">2</span><span class="o">/</span><span class="m">1</span><span class="p">)</span><span class="o">,</span>
  <span class="n">only</span> <span class="n">screen</span> <span class="nf">and</span> <span class="p">(</span>        <span class="n">min-device-pixel-ratio</span><span class="o">:</span> <span class="m">2</span><span class="p">)</span><span class="o">,</span>
  <span class="n">only</span> <span class="n">screen</span> <span class="nf">and</span> <span class="p">(</span>                <span class="n">min-resolution</span><span class="o">:</span> <span class="m">192dpi</span><span class="p">)</span><span class="o">,</span>
  <span class="n">only</span> <span class="n">screen</span> <span class="nf">and</span> <span class="p">(</span>                <span class="n">min-resolution</span><span class="o">:</span> <span class="m">2dppx</span><span class="p">)</span> <span class="p">{</span>
    <span class="nl">background-image</span><span class="p">:</span> <span class="sx">url("@{file-2x}")</span><span class="p">;</span>
    <span class="nl">background-size</span><span class="p">:</span> <span class="o">@</span><span class="n">width-1x</span> <span class="o">@</span><span class="n">height-1x</span><span class="p">;</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="c1">// Usage</span>
<span class="nc">.jumbotron</span> <span class="p">{</span>
  <span class="nc">.img-retina</span><span class="o">(</span><span class="s2">"/img/bg-1x.png"</span><span class="o">,</span> <span class="s2">"/img/bg-2x.png"</span><span class="o">,</span> <span class="nt">100px</span><span class="o">,</span> <span class="nt">100px</span><span class="o">)</span><span class="p">;</span>
<span class="p">}</span></code></pre></figure>

		    </div>


		    <!-- NEW SECTION -->


		    <div class="dr-docs-section">
		        <h1 id="sass" class="page-header"><a class="anchorjs-link " href="#sass" aria-label="Anchor link for: sass" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Using Sass</h1>
		        <p class="lead">While Bootstrap is built on Less, it also has an <a href="https://github.com/twbs/bootstrap-sass">official Sass port</a>. We maintain it in a separate GitHub repository and handle updates with a conversion script.</p>
		        <h2 id="sass-contents"><a class="anchorjs-link " href="#sass-contents" aria-label="Anchor link for: sass contents" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>What's included</h2>
		        <p>Since the Sass port has a separate repo and serves a slightly different audience, the contents of the project differ greatly from the main Bootstrap project. This ensures the Sass port is as compatible with as many Sass-based systems as possible.</p>
		        <div class="table-responsive">
		            <table class="table table-bordered table-striped">
		                <thead>
		                    <tr>
		                        <th>Path</th>
		                        <th>Description</th>
		                    </tr>
		                </thead>
		                <tbody>
		                    <tr>
		                        <th scope="row"><code>lib/</code></th>
		                        <td>Ruby gem code (Sass configuration, Rails and Compass integrations)</td>
		                    </tr>
		                    <tr>
		                        <th scope="row"><code>tasks/</code></th>
		                        <td>Converter scripts (turning upstream Less to Sass)</td>
		                    </tr>
		                    <tr>
		                        <th scope="row"><code>test/</code></th>
		                        <td>Compilation tests</td>
		                    </tr>
		                    <tr>
		                        <th scope="row"><code>templates/</code></th>
		                        <td>Compass package manifest</td>
		                    </tr>
		                    <tr>
		                        <th scope="row"><code>vendor/assets/</code></th>
		                        <td>Sass, JavaScript, and font files</td>
		                    </tr>
		                    <tr>
		                        <th scope="row"><code>Rakefile</code></th>
		                        <td>Internal tasks, such as rake and convert</td>
		                    </tr>
		                </tbody>
		            </table>
		        </div>
		        <p>Visit the <a href="https://github.com/twbs/bootstrap-sass">Sass port's GitHub repository</a> to see these files in action.</p>
		        <h2 id="sass-installation"><a class="anchorjs-link " href="#sass-installation" aria-label="Anchor link for: sass installation" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Installation</h2>
		        <p>For information on how to install and use Bootstrap for Sass, consult the <a href="https://github.com/twbs/bootstrap-sass">GitHub repository readme</a>. It's the most up to date source and includes information for use with Rails, Compass, and standard Sass projects.</p>
		    </div>
		</div>

		<div class="col-md-3">
			<?php include("sidenav.php"); ?>
		</div>
	</div>
</div>

			
<?php include("../footer.php"); ?>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc2/js/bootstrap.min.js"></script>
<script src="../docs.js"></script>
</body>
</html>