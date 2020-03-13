<?php
    #dữ liệu
    require_once  "data/pages.php";
    require_once  "data/product.php";
    require_once "lib/data.php";
require_once "lib/template.php";
get_header();
?>

<?php
    showData($list_product);
?>

<?php
get_footer();
?>
