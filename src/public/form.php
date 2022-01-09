<?php
require './function.php';

if (isset($_POST['action'])) {
    $action = trim($_POST['action']);
    switch ($action) {
        case 1:
        {
            showCity();
            break;
        }
        case 2:
        {
            showAge();
            break;
        }
        case 3:
        {
            showCardProduct();
            break;

        }
        case 4:
        {
            showTestResult();
            break;

        }
        default:
            echo 'NO';
    }
};


