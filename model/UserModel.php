<?php

class UserModel extends AbstractModel{
    
    public function connexion(array $data){
        $query = "SELECT * FROM client WHERE email = :email";
        $res = $this->executeRequest($query, [
            "email" => $data["email"],
        ]);
        $client = $res->fetch();

        if($client){
            if($client["mdp"] == $data["pass"]){
                return $client;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
}