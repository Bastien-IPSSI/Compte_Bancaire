<?php

session_start();

//MODELS\\

include "model/AbstractModel.php";
include "model/UserModel.php";

//CONTROLLERS\\
include "controller/AbstractController.php";
include "controller/UserController.php";




$userController = new UserController();

if(isset($_GET["userAction"])){
    $userController->userAction($_GET["userAction"]);
}else{
    include "vue/template.php";
}