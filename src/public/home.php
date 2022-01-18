<?php
if (isset($_COOKIE['userName'])) {
    echo 'Добро пожаловать! ' . $_COOKIE['userName'];
}
