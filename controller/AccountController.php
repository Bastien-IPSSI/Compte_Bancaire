<?php

class AccountController extends AbstractController{

    private $modelAccount;

    public function __construct()
    {
        $this->modelAccount = new AccountModel();
    }

    public function accountAction(){
        if(!empty($_GET["account"])){
            switch ($_GET["account"]) {
                case 'consult':
                    $client = unserialize($_SESSION["user"]);
                    $accountInfo = $this->modelAccount->getAccountByIdClient($client["clientId"]);
                    $this->render("accountInfo", ["accountInfo" => $accountInfo]);
                    exit;
                default:
                    header("Location: ./");
                    break;
            }
        }
    }
}