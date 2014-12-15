<?php
ob_start();

include 'index.php';

$html = ob_get_contents();

ob_clean();

$file = fopen('build/index.html', 'w');

fwrite($file, $html);

fclose($file);

echo "site built successfully <a href='build/index.html'>building file</a>";