<?php require('init.php')?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple PHP Test Editor</title>
  <link rel="stylesheet" href="node_modules/@fontsource/open-sans/400.css">
  <link rel="stylesheet" href="node_modules/@fontsource/open-sans/700.css">
  <link rel="stylesheet" href="node_modules/material-symbols/outlined.css" />
  <link rel="stylesheet" href="node_modules/codemirror/lib/codemirror.css">
  <link rel="stylesheet" href="node_modules/codemirror/theme/material-darker.css">
  <link rel="stylesheet" href="assets/css/app.css">
  <script src="node_modules/codemirror/lib/codemirror.js"></script>
  <script src="node_modules/codemirror/mode/php/php.js"></script>
  <script src="node_modules/codemirror/mode/clike/clike.js"></script>
  <script src="node_modules/codemirror/mode/xml/xml.js"></script>
  <script src="node_modules/codemirror/mode/javascript/javascript.js"></script>
  <script src="node_modules/codemirror/mode/css/css.js"></script>
  <script src="node_modules/codemirror/mode/htmlmixed/htmlmixed.js"></script>
</head>
<body>
<div class="container">
  <div class="pane editor-pane">
    <form method="post" action="">
      <h2>PHP<sup>input <sup class="phpVersion"><?php echo phpversion(); ?></sup></sup></h2>
      <textarea id="code-editor" name="code"><?php echo htmlspecialchars($code); ?></textarea>
      <button type="submit" class="run-button">RUN <span class="material-symbols-outlined">play_arrow</span></button>
    </form>
  </div>
  <div class="pane output-pane">
    <h2>PHP<sup>output</sup></h2>
    <div class="output-area">
      <?php echo nl2br(htmlspecialchars($output)); ?>
    </div>
  </div>
</div>
<script>
  var editor = CodeMirror.fromTextArea(document.getElementById("code-editor"), {
    fontSize: "14px",
    lineNumbers: true,
    mode: "php",
    theme: "material-darker",
    indentUnit: 4,
    lineWrapping: true
  });
</script>
</body>
</html>
