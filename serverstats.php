<?php
// Creo un stream
$opts = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Content-type: text/xsl\r\n" .
              "Cookie: foo=bar\r\n"
  )
);

$context = stream_context_create($opts);

// obtengo el file, no se si el HTTP headers de arriba esta correcto
$file = file_get_contents('http://127.0.0.1/stats', false, $context);
echo "<p>$file</p>\n";
?>
