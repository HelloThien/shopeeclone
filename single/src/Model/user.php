
<?php  
        
 ?>

<?php
   
    class User{ 

        private $db;
        private $user;
        function __construct(){
            $this->db  = new Database();
        }
            
        public function checkUser($userName,$pass){
            $userName = mysqli_real_escape_string($this->db->conn,$userName);
            $pass = mysqli_real_escape_string($this->db->conn,$pass);
            $sql = "SELECT * FROM customer where username= '$userName' and password = '$pass' LIMIT 1";
            $result = $this->db->query($sql); 
            $value= $result->fetch_assoc(); 
             
            if($value)
            {    
                $this->user = $value;
                session::setKey('username',$value['username']);
                session::setKey('pass',$value['password']);

                return true;
            }
           
            return false;
            
        }   
        public function fetch(){
            $userName = session::getKey('username');
            $pass = session::getKey('pass');
            $userName = mysqli_real_escape_string($this->db->conn,$userName);
            $pass = mysqli_real_escape_string($this->db->conn,$pass);
            $sql = "SELECT * FROM customer where username= '$userName' and password = '$pass' LIMIT 1";
            $result = $this->db->query($sql); 
             
             
            if($result!= false)
            {    
                $value= $result->fetch_assoc(); 
                $this->user = $value; 
                return $this->user;
            }
           
            return false;
            
        }
        public function getShop($cusID){
             
             
            $sql = "SELECT * FROM shop where  cusID= $cusID";
            $result = $this->db->query($sql); 
             
             
            if($result!= false)
            {    
                $value= $result->fetch_assoc(); 
                $this->user = $value; 
                return $this->user;
            }
           
            return false;
            
        }
        public function register($userName,$pass){
            $userName = mysqli_real_escape_string($this->db->conn,$userName);
            $pass = mysqli_real_escape_string($this->db->conn,$pass);
             

            $sql  = "INSERT INTO `customer` (`cusID`, `cusName`, `address`, `phone`, `typeOfCustomer`, `username`, `password`) VALUES (NULL, '', '', '', '0', '$userName', '$pass');";
             
            $result = $this->db->query($sql);
             
            if($result){
                
                return true;
            }
            else {
                return false;
            }

        }
        public function findOne(){
            $userName = session::getKey('username');
            $pass = session::getKey('pass');
            $userName = mysqli_real_escape_string($this->db->conn,$userName);
            $pass = mysqli_real_escape_string($this->db->conn,$pass);
            $sql = "SELECT * FROM customer inner join shop on shop.cusID = customer.cusID where username= '$userName' and password = '$pass' LIMIT 1";
            $result = $this->db->query($sql); 
             
             
            if($result!= false)
            {    
                $value= $result->fetch_assoc(); 
                $this->user = $value; 
                return $this->user;
            }
           
            return false;
            
        }
        public function setUser($user){
            
            $pass = $user['password'];
            $address = $user['address'];
            $img = $user['img'];
            $sex = $user['sex'];
            $email = $user['email'];
            $birth = $user['birth'];
            $phone = $user['phone'];
            $cusName = $user['cusName'];
            $cusID = $user['cusID'];
            $sql =  "UPDATE `customer` SET `cusName` = '$cusName', `address` = '$address', `phone` = '$phone' , `password` = '$pass', `img` = '$img', `birth` = '$birth', `email` = '$email', `sex` = '$sex' WHERE `customer`.`cusID` = $cusID";

            $result = $this->db->query($sql); 
             
             
            if($result!= false)
            {    
                 
                return true;
            }
           
            return false;
            
        }
        
    }
?>