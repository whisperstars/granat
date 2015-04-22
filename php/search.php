<?php

function prepare_search_content() {
    $search_string = $_GET["search"];
    $files = get_needs_files($search_string);
    $files_count = count($files);

    $content = '';

    for ($i=0; $i<$files_count; $i++) {
        $content .= '<li><a href="' . $files[$i] .'">' . files_title_map($files[$i])['title'] .'</a></li>';
    }

    return $content;
}

function used_files() {
    return array(
        "1C_BI.php",
        "company.php",
        "contact.php",
        "discounts.php",
        "faq.php",
        "index.php",
        "presentations.php"
    );
}

function files_title_map($file) {
    $files_map = array(
        "1C_BI.php" => array(
                "title" => "1C:бизнесс-анализ"
            ),
        "company.php" => array(
                "title" => "О компании"
            ),
        "contact.php" => array(
                "title" => "Контакты"
            ),
        "discounts.php" => array(
                "title" => "Акции"
            ),
        "faq.php" => array(
                "title" => "Вопросы-ответы"
            ),
        "index.php" => array(
                "title" => "Главная"
            ),
        "presentations.php" => array(
                "title" => "Презинтации"
            )
    );
	
	return $files_map[$file];
}

function is_in_file($file_name, $search_string) {
    if (file_exists($file_name)) {
        $text = strip_tags(file_get_contents($file_name));

        return strpos($text, $search_string) == true;
    }
}

function get_needs_files($search_string) {
    $files = used_files();
    $file_counts = count($files);
    $needs_files = array();

    for ($i=0; $i<$file_counts; $i++) {
        if (is_in_file($files[$i], $search_string)) {
            $needs_files[] = $files[$i];
        }
    }

    return $needs_files;
}

?>