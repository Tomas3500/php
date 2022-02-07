<?php
include '../classes/ValidatorUserForm.php';
include '../classes/AuthorizationInterface.php';
include '../classes/Authorization.php';

$author = new Authorization($_POST['loginIn'], $_POST['passwordIn'], $_POST['check'] ?? null);
$author->authorUser();
