<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Neebles!</title>
    <!-- Styles -->
    <link href="css/app.css" rel="stylesheet">
  </head>
  <body>
    <div class="flex-header">
    <div class="flex-nav links">
      <img src="images/neebles.png" alt="Logo of a cute monster" height="100px">
    </div>
      <div class="flex-nav title">
        <h2>Mark</h2>
      </div>
      <div class="flex-nav links">
        <a href="/about" aria-label="Read more all about me!">About</a>
      </div>
      <div class="flex-nav links">
        <a href="/gallery" aria-label="Did I mention I enjoy photography?">Gallery</a>
      </div>
      <div class="flex-nav links">
        <a href="/portfolio" aria-label="Read more about some of my work, not just look at it">Portfolio</a>
      </div>
      <div class="flex-nav links">
        <a href="/blog" aria-label="Read more about my general ramblings">Blog</a>
      </div>
      <div class="flex-nav links">
        <a href="/contact"aria-label="Get in touch with me">Contact</a>
      </div>
      <div class="flex-nav links">
        <a href="https://github.com/auntynigel" target="_blank" aria-label="Go to my github repo">GitHub</a>
      </div>
    </div>
  </body>
</html>
