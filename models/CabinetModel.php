<?php

class CabinetModel extends Model{

    public function getProductsCount(){
        $sql = "SELECT COUNT(*) FROM products";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $res = $stmt->fetchColumn();
        return $res;
    }

    public function getProducts(){
        $sql = "SELECT * FROM products";
        $result = array();
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){
            $result[$row['id']] = $row;
        }
        return $result;
    }

}