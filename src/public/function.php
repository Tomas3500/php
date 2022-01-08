<?php
require './form.php';
if (isset($_POST['action'])) {
    $action = trim($_POST['action']);
    switch ($action) {
        case 2:
        {
            showCity();
            break;
        }
        default:
            echo 'NO';
    }
};
