<?php
function showData ($data) {
    if(isset($data)) {
        echo "<pre>";
        print_r($data);
    }
}