<?php

$pages = array(
    'index',
    'company',
    'contact',
    'presentations',
    '1C_BI',
);

function build($script_name) {
    ob_start();
    
    include $script_name . '.php';
    $html = ob_get_contents();
    ob_clean();

    $html = str_replace('.php', '.html', $html);
    $html = str_replace('\'/' . basename(__DIR__) . '/\'', '\'/' . basename(__DIR__) . '/build/\'', $html);

    $file = fopen('build/' . $script_name . '.html', 'w');
    
    fwrite($file, $html);
    fclose($file);

    ob_end_clean();
}

$page_count = count($pages);

$successfully_build_message = 'Site build successfully!<br />There are ' . $page_count . ' pages:<br />';

for ($i = 0; $i < $page_count; $i++) {
    build($pages[$i]);
    $successfully_build_message .= '<a href="build/' . $pages[$i] .'.html">' . $pages[$i] . '.html</a><br />';
}

echo $successfully_build_message;