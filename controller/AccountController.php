<?php

class AccountController extends AbstractController{

    private $modelAccount;

    public function __construct()
    {
        $this->modelAccount = new AccountModel();
    }

    public function accountAction(){
        $formMessage = [true, ""];
        if(!empty($_GET["account"])){
            $client = unserialize($_SESSION["user"]);
            $accountInfo = $this->modelAccount->getAccountByIdClient($client["clientId"]);
            switch ($_GET["account"]) {
                case 'consult':
                    $this->render("accountInfo", ["accountInfo" => $accountInfo]);
                    exit;
                case 'withdrawOrDeposit':
                    if(isset($_POST["amount"])){
                        if($_POST["action"] == "withdraw" && $accountInfo["solde"] < $_POST["amount"]){
                            $formMessage = [false, "Solde insuffisant"];
                        }else{
                            $formMessage = [true, "Transaction effectuée"];
                            $this->modelAccount->withdrawOrDeposit($_POST["action"], $_POST["amount"], $accountInfo["compteId"]);
                        }
                    }
                    $this->render("withdrawOrDeposit", ["formMessage" => $formMessage]);
                    exit;
                default:
                    header("Location: ./");
                    break;
            }
        }
    }
}