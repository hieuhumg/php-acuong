<?php
    #dữ liệu
    require_once  "data/pages.php";
    require_once  "data/product.php";
    require_once "lib/data.php";
require_once "lib/template.php";
get_header();
?>

<?php
    $mod = !empty($_GET['mod']) ? $_GET['mod'] : 'home';
    $act = !empty($_GET['act']) ? $_GET['act'] : 'main';

    $path = "modules/{$mod}/{$act}.php";

    if(file_exists($path)) {
        require $path;
    }else {
        require "inc/404.php";
    }
?>

<?php
get_footer();
?>
