<?php
  $gridderFileName = "gridder-1.4.1.css";
  $gridderFilePath = "/gridder/compiled/gridder-1.4.1.css";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document title</title>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="icon" type="image/ico" href="/assets/img/favicon.ico">
</head>
<body>

  <!--Content-->
  <header class="header">
    <div class="container">

      <nav class="navigation">
        <a href="/" class="logo">
          <svg id="gridder-logo" width="40px" height="40px" viewBox="0 0 315 313" xmlns="http://www.w3.org/2000/svg">
            <title>Gridder Logo</title>
            <desc>Gridder Logo</desc>
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <path d="M306.328883,98.5887695 C311.117809,101.337614 315,108.035396 315,113.573366 L315,257.559076 C315,271.370015 305.297934,276.997004 293.318607,270.120866 L126.671117,174.465149 C121.882191,171.716304 118,165.018522 118,159.480552 L118,15.4948421 C118,1.68390288 127.702066,-3.94308625 139.681393,2.93305188 L306.328883,98.5887695 Z" id="rect-2" fill="#f8f8f8"></path>
              <path d="M188.328883,137.588769 C193.117809,140.337614 197,147.035396 197,152.573366 L197,296.559076 C197,310.370015 187.297934,315.997004 175.318607,309.120866 L8.67111664,213.465149 C3.88219116,210.716304 0,204.018522 0,198.480552 L0,54.4948421 C0,40.6839029 9.70206587,35.0569138 21.6813933,41.9330519 L188.328883,137.588769 Z" id="rect-1" fill="#f8f8f8"></path>
            </g>
          </svg>
          <span class="text">Gridder</span>
        </a>
        <div class="navigation-items">
          <a href="#0">Installation guide</a>
          <a href="#0">Examples</a>
          <a href="#0">Docs</a>
        </div>
      </nav>

      <div class="row">
        <div class="tiny-12 small-12 medium-6 large-6">
          <h1 class="headline">Gridder - The simple grid system based on Flexbox.</h1>
          <p class="subline">Gridder's fluid grid and breakpoints enable endless combinations of column sizes, offsets, allignments and viewport widths.</p>
          <a href="<?php echo $gridderFilePath; ?>" download class="button primary">Download Gridder</a>
          <a href="#0" class="button">Visit Github</a>
        </div>
        <div class="tiny-12 small-12 medium-6 medium-offset-0 large-5 large-offset-1">
          <div class="browser">
            <div class="browser-header">
              <div class="browser-buttons">
                <div class="button-red"></div>
                <div class="button-yellow"></div>
                <div class="button-green"></div>
              </div>
              <div class="browser-title">Fluid grid</div>
            </div>
            <div class="browser-body">
              <div class="box one"></div>
              <div class="box two"></div>
              <div class="box three"></div>
              <div class="box four"></div>
              <div class="box five"></div>
              <div class="box six"></div>
              <div class="box seven"></div>
              <div class="box eight"></div>
              <div class="box nine"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="devider"></div>

      <div class="row howto">
        <div class="tiny-12 small-12 medium-6">
          <div class="label">How it works</div>
            <h2>The syntax</h2>
            <p>First, make sure to wrap your columns in a row element. Then specify your columns and stick your content inside.
            Use the following classes to identify your coloumns: <span class="label inline">tiny-*</span> <span class="label inline">small-*</span> <span class="label inline">medium-*</span> <span class="label inline">large-*</span></p>
            <i>* is a number between 1 and 12, where 1 is a single column.</i>
          </p>
        </div>
        <div class="tiny-12 small-12 medium-6">
          <pre><code class="html codeblock">
&#x3C;div class=&#x22;row&#x22;&#x3E;
  &#x3C;div class=&#x22;tiny-12&#x22;&#x3E;
    This spans 12/12 columns on all screensizes
  &#x3C;/div&#x3E;
&#x3C;/div&#x3E;

&#x3C;div class=&#x22;row&#x22;&#x3E;
  &#x3C;div class=&#x22;medium-6&#x22;&#x3E;
    This spans 6/12 columns on screens wider then
    the medium breakpoint, but will span 12/12 on smaller screens
  &#x3C;/div&#x3E;
&#x3C;/div&#x3E;

&#x3C;div class=&#x22;row&#x22;&#x3E;
  &#x3C;div class=&#x22;small-12 medium-6 large-4&#x22;&#x3E;
    This spans 12/12 columns on small screens,
    6/12 on medium screens and 4/4 on large screens
  &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
          </code></pre>
        </div>
      </div>
    </div>
  </header>


  <section id="getting-started">
    <div class="container">
      <div class="row">
        <div class="medium-12">
          <div class="label">Getting started</div>
          <h2>Quick installation guide</h2>
          <p>Simply <a href="<?php echo $gridderFilePath; ?>" download>download</a> gridder and add it to your head, like this:</p>
          <pre><code class="html codeblock">
// index.html
&#x3C;html&#x3E;
  &#x3C;head&#x3E;
    &#x3C;meta name=&#x22;viewport&#x22; content=&#x22;width=device-width, initial-scale=1&#x22;&#x3E;
    &#x3C;link href=&#x22;path/to/gridder.css&#x22; rel=&#x22;stylesheet&#x22;&#x3E;
  &#x3C;/head&#x3E;
  &#x3C;body&#x3E;
    &#x3C;div id=&#x22;app&#x22;&#x3E;&#x3C;/div&#x3E;
  &#x3C;/body&#x3E;
&#x3C;/html&#x3E;
          </code></pre>
          <p>Remember to add <span class="label inline dark">&#x3C;meta name=&#x22;viewport&#x22; content=&#x22;width=device-width, initial-scale=1&#x22;&#x3E;</span> to the head aswell, to make sure the site scales correctly</p>
          <br><p>Gridder is also available through CDNJS:</p>
          <pre><code class="html codeblock http">
https://cdnjs.cloudflare.com/ajax/libs/3Dmol/1.1.0/3Dmol-min.js
          </code></pre>
        </div>
      </div>
    </div>
  </section>


  <section id="faq">
    <div class="container">
      <div class="row">
        <h2>Frequently asked questions</h2>
      </div>
      <div class="row">
        <div class="medium-6">
          <h3>What about browser support ?</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae laudantium velit quae quam adipisci? Eaque ipsum maxime expedita libero magnam architecto recusandae, nihil necessitatibus laborum labore laboriosam, reiciendis cupiditate vitae.</p>
        </div>
        <div class="medium-6">
          <h3>What is in store for Gridder in the future ?</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae laudantium velit quae quam adipisci? Eaque ipsum maxime expedita libero magnam architecto recusandae, nihil necessitatibus laborum labore laboriosam, reiciendis cupiditate vitae.</p>
        </div>
      </div>
      <div class="row">
        <div class="medium-6">
          <h3>Who uses Gridder ?</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium praesentium, quas temporibus doloribus quia dicta facilis eaque, similique, sed earum cumque sit, saepe nisi quaerat reiciendis mollitia delectus asperiores laboriosam.</p>
        </div>
        <div class="medium-6">
          <h3>What about browser support ?</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae laudantium velit quae quam adipisci? Eaque ipsum maxime expedita libero magnam architecto recusandae, nihil necessitatibus laborum labore laboriosam, reiciendis cupiditate vitae.</p>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
       <div class="row">
        <a href="https://www.iotacss.com/">https://www.iotacss.com/</a> ||
        <a href="https://mothereff.in/html-entities">https://mothereff.in/html-entities</a> ||
        <a href="https://www.gridder.io/">https://www.gridder.io/</a>
       </div>
     </div>
  </footer>
  <!--Content End-->


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="/assets/js/highlight.pack.js"></script>
  <script src="/assets/js/functions.js"></script>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', '??????????????', 'auto');
    ga('send', 'pageview');
  </script>

</body>
</html>
