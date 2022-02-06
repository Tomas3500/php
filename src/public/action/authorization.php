<?php
include '../classes/Authorization.php';
//include '../classes/ValidatorUserForm.php';
include '../classes/AuthorizationInterface.php';
$author = new Authorization($_POST['loginIn'],$_POST['passwordIn'],$_POST['check']);
$author->authorUser();