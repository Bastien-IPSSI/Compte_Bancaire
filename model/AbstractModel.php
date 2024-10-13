<?php

class AbstractModel{
    protected $pdo;

    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=127.0.0.1;dbname=compte_bancaire", "root", "", [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function executeRequest($query, array $data = []){
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($data);

        return $stmt;
    }

    public function newAccount(array $data){

        $query = "INSERT INTO client VALUES (NULL, :firstName, :lastName, :phone, :email, :pass, :creationDate)";
        $this->executeRequest($query, [
            "firstName" => $data["firstName"],
            "lastName" => $data["lastName"],
            "phone" => $data["phone"],
            "email" => $data["email"],
            "pass" => $data["pass"],
            "creationDate" => date('Y-m-d H:i:s'),
        ]);

        $userId = $this->pdo->lastInsertId();

        $query = "INSERT INTO comptebancaire VALUES (NULL, :accountNumber, :amount, :accountType, :openingDate, :clientId)";
        $this->executeRequest($query, [
            "accountNumber" => "FR" . strval(rand(10000000000000000, 99999999999999999)),
            "amount" => $data["amount"],
            "accountType" => $data["accountType"],
            "openingDate" => date('Y-m-d H:i:s'),
            "clientId" => $userId,
        ]);

    }
}