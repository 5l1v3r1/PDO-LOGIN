<?php 
 try{
            $username = 'root';
            $password = '';
            $db = new pdo("mysql:host=localhost;dbname=basit_uyelik;charset=UTF8", $username, $password);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;

        }   catch(PDOException $e){
            echo 'ERROR', $e->getMessage();
        }
 ?>