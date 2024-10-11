<?php

class AccountModel extends AbstractModel{

    public function getAccountByIdClient(int $id){
        $query = "SELECT * FROM comptebancaire WHERE clientId = :clientId";
        $res = $this->executeRequest($query, [
            "clientId" => $id,
        ]);

        return $res->fetch();
    }

    public function withdrawOrDeposit(string $action, int $amount, int $accountId){
        if($action == "withdraw"){
            $amount = -$amount;
        }

        $query="UPDATE comptebancaire SET solde = solde + :amount WHERE compteId = :accountId";
        $this->executeRequest($query, [
            "amount" => $amount,
            "accountId" => $accountId,
        ]);
    }
}