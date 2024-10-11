<?php

class AccountModel extends AbstractModel{

    public function getAccountByIdClient(int $id){
        $query = "SELECT * FROM comptebancaire WHERE clientId = :clientId";
        $res = $this->executeRequest($query, [
            "clientId" => $id,
        ]);

        return $res->fetch();
    }
}