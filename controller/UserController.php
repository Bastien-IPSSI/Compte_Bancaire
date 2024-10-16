<?php

class UserController extends AbstractController{

    private $modelUser;

    public function __construct()
    {
        $this->modelUser = new UserModel();
    }

    public function userAction(){
        if(!empty($_GET["user"])){
            switch ($_GET["user"]) {
                case 'login':
                    if(!empty($_POST["email"])){
                        $user = $this->modelUser->connexion([
                            "email" => $_POST["email"],
                            "pass" => $_POST["pass"],
                        ]);

                        if($user){
                            $_SESSION["user"] = serialize($user);
                            header("Location: ./");
                            exit;
                        }
                    }
                    $this->pureRender("login");
                    break;
                case 'logout':
                    session_destroy();
                    header("Location: ./");
                    break;
                case 'inscription':
                    if(!empty($_POST["email"])){
                        $this->modelUser->newAccount([
                            "firstName" => $_POST["firstName"],
                            "lastName" => $_POST["lastName"],
                            "phone" => $_POST["phone"],
                            "email" => $_POST["email"],
                            "pass" => $_POST["pass"],
                            "amount" => $_POST["solde"],
                            "accountType" => $_POST["accountType"],
                        ]);

                        $user = $this->modelUser->connexion([
                            "email" => $_POST["email"],
                            "pass" => $_POST["pass"],
                        ]);

                        $_SESSION["user"] = serialize($user);
                        header("Location: ./");
                        exit;
                    }
                    $this->pureRender("inscription");
                    break;
                default:
                    header("Location: ./");
                    break;
            }
        }
    }
}