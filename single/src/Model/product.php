<?php


class Product
{
    private $db;

    public $product;

    public function __construct()
    {
        $db = new Database();
        $this->db = $db;
    }
    public function getFull()
    {
        $sql = 'SELECT * FROM `productinfo` INNER JOIN shop ON productinfo.shopID = shop.shopId ORDER BY RAND() LIMIT 50 ';
        $result =  $this->db->query($sql);
        $emparray = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $emparray[] = $row;
        }
        return $emparray;
    }
    public function getOne($id)
    {
        $sql = "SELECT * FROM `productinfo` INNER JOIN shop ON productinfo.shopID = shop.shopId INNER JOIN product ON productinfo.productCode = product.proCode INNER JOIN producttype ON producttype.productTypeCodeName = product.proTypeName WHERE productinfo.productID ='$id'";
        $result =  $this->db->query($sql);
        $value = $result->fetch_assoc();

        return $value;
    }
    public function getList($type)
    {  
        $sql = "SELECT * FROM `productinfo` INNER JOIN shop ON productinfo.shopID = shop.shopId INNER JOIN product ON productinfo.productCode = product.proCode INNER JOIN producttype ON producttype.productTypeCodeName = product.proTypeName WHERE producttype.productTypeCodeName ='$type' LIMIT 50";
        $result =  $this->db->query($sql);
        $emparray = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $emparray[] = $row;
        }
        return $emparray;
    }
    public function getType()
    {
        $sql = 'SELECT * FROM `producttype` ';
        $result =  $this->db->query($sql);
        $emparray = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $emparray[] = $row;
        }
        return $emparray;
    }
    public function getSubType()
    {
        $sql = 'SELECT * FROM `product` ';
        $result =  $this->db->query($sql);
        $emparray = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $emparray[] = $row;
        }
        return $emparray;
    }
    public function getByUser($cusID)
    {
        $sql = "SELECT productinfo.productDiscount, productinfo.productID,productinfo.productCode,productinfo.price,productinfo.sold,productinfo.productRating,productinfo.productImage,productinfo.productDiscount,productinfo.describlePro FROM `productinfo`   INNER JOIN shop ON shop.shopID= productinfo.shopID INNER JOIN customer ON customer.cusID= shop.cusID WHERE customer.cusID = $cusID ";
        $result =  $this->db->query($sql);
        $emparray = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $emparray[] = $row;
        }
        return $emparray;
    }
    public function insertItem($item)
    {    
        $productCode= $item['proCode'];
        $shopID = $item['shopID'];
        $price = $item['price'];
        $sold = 0;
        
        $describlePro = $item['describlePro'];
        $productImage = $item['productImage'];
        $productDiscount = $item['productDiscount'];
        $sql = "INSERT INTO `productinfo` (`productID`, `productCode`, `shopID`, `price`, `sold`, `productRating`, `describlePro`, `productImage`, `productDiscount`) VALUES (null, '$productCode', '$shopID', '$price', '$sold', null, '$describlePro',  '$productImage',  '$productDiscount ');";
        
        $result =  $this->db->query($sql);
         if($result) return $result;
         else return false;
    }      
    public function removeProById($id)
    {
         
        $sql = "DELETE FROM `productinfo` WHERE `productinfo`.`productID` = $id"  ;
          
        $result =  $this->db->query($sql);
          
        if($result!= false) return  true;

        return false;
    }                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
}
 
 