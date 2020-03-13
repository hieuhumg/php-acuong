<?php

function get_header() {
    $path_header = "inc/header.php";
    if(isset($path_header)) {
        require_once $path_header;
    } else {
        echo "không tồn tại đường dẫn {$path_header}";
    }
}

function get_footer() {
    $path_header = "inc/footer.php";
    if(isset($path_header)) {
        require_once $path_header;
    } else {
        echo "không tồn tại đường dẫn {$path_header}";
    }
}

function get_sidebar() {
    $path_header = "inc/sidebar.php";
    if(isset($path_header)) {
        require_once $path_header;
    } else {
        echo "không tồn tại đường dẫn {$path_header}";
    }
}