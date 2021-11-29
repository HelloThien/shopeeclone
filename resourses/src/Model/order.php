<?php


class Order
{
    private $db;

    public $order;

    public function __construct()
    {
        $db = new Database();
        $this->db = $db;
    } 
    public function initCart($cusId)
    {
        $id = range('a', 'z');
        $id = array_merge($id, range('A', 'Z'));
        $id = array_merge($id, range('0', '9'));
        $idstring = implode("", $id);
        $idstring = str_shuffle($idstring);
        $idstring = substr($idstring, 0, 8);
        $currentdate = date("Y-m-d H:i:s");
        $sql = 'INSERT INTO orderdeal(orderDealId,orderDealIdBuy ,orderDealDate, status)
        values ("'.$idstring.'","'.$cusId.'" , "'.$currentdate.'" , 0)';
        $result =  $this->db->query($sql);
         
        if($result) return true;

        return false;
    }

    public function changeStatus($cusId)
    {
         
        $sql = 'UPDATE orderdeal SET status = 1 where orderDealIdBuy = "'.$cusId.'"  AND status = 0';
        $result =  $this->db->query($sql); 
        if($result) return true;
        
        return false;
    }
    public function getIdCart($cusId)
    {
         
        $sql = 'SELECT orderDealId FROM `orderdeal`  WHERE status=0 AND orderDealIdBuy= "'.$cusId.'"
        ';
        $result =  $this->db->query($sql); 
        $value= $result->fetch_assoc();  
         return  $value['orderDealId'];
    }
    public function getCart($cusId)
    {
         
        $sql = "   SELECT ordersingle.id, productinfo.productID, productinfo.describlePro,product.proName,productinfo.price,ordersingle.quantity,productinfo.productImage,productinfo.productDiscount  FROM `ordersingle`  INNER JOIN orderdeal ON orderdeal.orderDealId = ordersingle.productOrderDealId  INNER JOIN productinfo ON productinfo.productID = ordersingle.productId INNER JOIN product ON product.proCode = productinfo.productCode  WHERE orderdeal.orderDealIdBuy = $cusId AND orderdeal.status = 0";
        $result =  $this->db->query($sql); 
        $emparray = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $emparray[] = $row;
        }
        return $emparray;
    }
    public function addCart($idOrder,$idProduct,$quantity)
    {
        $idOrder=  mysqli_real_escape_string($this->db->conn,$idOrder);
        $sql = " INSERT INTO `ordersingle`  (`id`, `productId`, `quantity`, `productOrderDealId`) VALUES (NULL, $idProduct, $quantity,'$idOrder')"  ;
          
        $result =  $this->db->query($sql);
          
        if($result!= false) return  true;

        return false;
    }
    public function removeItemCart($idProductCart)
    {
        $idProductCart=  mysqli_real_escape_string($this->db->conn,$idProductCart);
        $sql = "DELETE FROM `ordersingle` WHERE `ordersingle`.`id` = $idProductCart "  ;
          
        $result =  $this->db->query($sql);
          
        if($result!= false) return  true;

        return false;
    }
    public function increament($idProductCart)
    {
        $idProductCart=  mysqli_real_escape_string($this->db->conn,$idProductCart);
        $sql = "Update ordersingle
        Set quantity = quantity + 1
        Where id = $idProductCart"  ;
          
        $result =  $this->db->query($sql);
          
        if($result!= false) return  true;

        return false;
    }
    public function decreament($idProductCart)
    {
        $idProductCart=  mysqli_real_escape_string($this->db->conn,$idProductCart);
        $sql = "Update ordersingle
        Set quantity = quantity - 1
        Where id = $idProductCart "  ;
          
        $result =  $this->db->query($sql);
          
        if($result!= false) return  true;

        return false;
    }
    public function getHistory($cusId)
    {
         
        $sql = " SELECT productinfo.productID,productinfo.productImage,productinfo.describlePro,product.proName, productinfo.price,ordersingle.quantity,shop.shopName,shop.shopId, orderdeal.status,ordersingle.status as stutus  FROM `ordersingle`  INNER JOIN  productinfo ON productinfo.productID = ordersingle.productId INNER JOIN product ON product.proCode = productinfo.productCode INNER JOIN shop ON shop.shopId = productinfo.shopID INNER JOIN orderdeal ON ordersingle.productOrderDealId = orderdeal.orderDealId where orderdeal.orderDealIdBuy = $cusId";
        $result =  $this->db->query($sql); 
        $emparray = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $emparray[] = $row;
        }
        return $emparray;
    }
    public function orderOfSeller($shopId)
    {
         
        $sql = "SELECT productinfo.productImage,productinfo.describlePro,productinfo.price,ordersingle.quantity,ordersingle.status,ordersingle.id  FROM `ordersingle` INNER JOIN orderdeal ON ordersingle.productOrderDealId= orderdeal.orderDealId INNER JOIN productinfo ON productinfo.productID = ordersingle.productId WHERE orderdeal.status=1 AND productinfo.shopID =$shopId";
         
        $result =  $this->db->query($sql); 
        $emparray = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $emparray[] = $row;
        }
        return $emparray;
    }
    public function changeStatusSeller($id)
    {
        
        $sql = "UPDATE `ordersingle` SET `status` =  status +1 WHERE `ordersingle`.`id` = $id "  ;
          
        $result =  $this->db->query($sql);
          
        if($result!= false) return  true;

        return false;
    }
}
 
 