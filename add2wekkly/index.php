<?php
    include('jsmin.php');
    
    function writeJS(){
        echo 'href="javascript: '.preg_replace('/"/', '&quot;', JSMin::minify(file_get_contents('bookmarklet.js'))).'"';
    }
    
?><!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <title>Add Too BrazilJS Weekly</title>
  <style type="text/css">
  </style>
</head>
<body>
    <p>Arraste a imagem abaixo para a sua barra de favoritos, ou use o menu do botão direito e a opção "adicionar aos favoritos":<br/>
    <a title="[BrJS]Sugestão Weekly" alt="[BrJS]Sugestão Weekly" <?php writeJS(); ?>><img src="http://braziljs.org/services/logo-braziljs.png" title="[BrJS]Sugestão Weekly" alt="[BrJS]Sugestão Weekly" style="border: solid 1px blue; "/></a>
    <p>Uma vez em seus favoritos, quanto você encontrar uma página, notícia ou demo que gostaria de ver na weekly do BrazilJS, basta clicar no link em seus favoritos!
</body>
</html>
