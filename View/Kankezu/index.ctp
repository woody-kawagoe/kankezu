<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Normalize CSS: UI tests</title>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<link rel="stylesheet" href="normalize.css">
<style>
  /*! suit-test v0.1.0 | MIT License | github.com/suitcss */

  .Test {
    background: #fff;
    counter-reset: test-describe;
  }

  .Test-describe:before {
    content: counter(test-describe);
    counter-increment: test-describe;
  }

  .Test-describe {
    counter-reset: test-it;
  }

  .Test-it:before {
    content: counter(test-describe) "." counter(test-it);
    counter-increment: test-it;
  }

  .Test-title {
    font-size: 2em;
    font-family: sans-serif;
    padding: 20px;
    margin: 20px 0;
    background: #eee;
    color: #999;
  }

  .Test-describe,
  .Test-it {
    background: #eee;
    border-left: 5px solid #666;
    color: #666;
    font-family: sans-serif;
    font-weight: bold;
    margin: 20px 0;
    padding: 0.75em 20px;
  }

  .Test-describe {
    font-size: 1.5em;
    margin: 60px 0 20px;
  }

  .Test-describe:before,
  .Test-it:before {
    color: #999;
    display: inline-block;
    margin-right: 10px;
    min-width: 30px;
    text-transform: uppercase;
  }

  /* Custom helpers */

  /**
   * Test whether the body's margin has been removed
   */

  body {
    background: white;
  }

  /**
   * Highlight the bounds of direct children of a test block
   */

  .Test-run--highlightEl > * {
    outline: 1px solid #ADD8E6;
  }
</style>

<div class="Test">
<h1 class="Test-title">つぶやき関係図</h1>
<p>This is test page</p>


</div>
