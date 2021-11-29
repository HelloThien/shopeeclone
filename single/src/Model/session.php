<?php
    
    class session{
        public static  function init(){
            session_start();
        }
        
        public static  function setKey($key,$val){
            $_SESSION[$key]= $val;
        }
        public static function getKey($key){
            if(isset($_SESSION[$key]))
            return $_SESSION[$key];
            else false;
        }
        public static function isLogin(){
            if(isset($_SESSION['username'])&&isset($_SESSION['pass'])) return true;
            else return false;
        }
       
    }



?>