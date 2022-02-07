<?php
include '../classes/RegistrationInterface.php';
include '../classes/ValidatorUserForm.php';
include '../classes/Registration.php';

$obj = new Registration($_POST['login'], $_POST['email'], $_POST['password']);
$obj->registUser();