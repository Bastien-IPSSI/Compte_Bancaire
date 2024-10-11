<?php

session_start();

//MODELS\\

include "model/AbstractModel.php";
include "model/UserModel.php";
include "model/AccountModel.php";

//CONTROLLERS\\
include "controller/AbstractController.php";
include "controller/UserController.php";
include "controller/AccountController.php";




$userController = new UserController();
$accountController = new AccountController();

if(isset($_GET["user"])){
    $userController->userAction($_GET["user"]);
}elseif(isset($_GET["account"])) {
    $accountController->accountAction($_GET["account"]);
}else{
    include "vue/template.php";
}