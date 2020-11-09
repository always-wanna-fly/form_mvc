<?php
//require_once ('Classes/Form/ValidForm.php');
class RegisterModel extends Model{

public function addNewUser($userFullName, $userLogin, $userEmail, $userPassword){
    $sql = "INSERT INTO users (login, fullName, email, password) VALUES (:login, :fullName, :email, :password)";
    $stmt = $this->db->prepare($sql);
    $stmt ->bindValue(":login", $userLogin, PDO::PARAM_STR);
    $stmt ->bindValue(":fullName", $userFullName, PDO::PARAM_STR);
    $stmt ->bindValue(":email", $userEmail, PDO::PARAM_STR);
    $stmt ->bindValue(":password", $userPassword, PDO::PARAM_STR);
    $stmt->execute();
    return true;
}
}