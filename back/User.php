<?php
include_once 'Database.php';
class USER{
    
    private $db;
    function __construct(){
        $this->db=new Database();
    }
    
    function addUser($mail,$key){
       return $this->db->insert("insert into Useers values (0,md5(".$mail.$key."),'$mail','$key',curtime(),curdate())");
    }
    
    function userExists($mail,$key){
      $q=$this->db->select("select * from Useers where uMail='$mail' and UKey='$key'");
      return (mysql_num_rows($q)>0);
    }
    
    function getIdentification($mail,$key){
      $q=$this->db->select("select uid from Useers where uMail='$mail' and UKey='$key'");
      $dat=mysql_fetch_array($q);
      return $dat[0];
    }
    
    function getMail($mail,$key){
      $q=$this->db->select("select uMail from Useers where uMail='$mail' and UKey='$key'");
      $dat=mysql_fetch_array($q);
      return $dat[0];
    }    
    
}
?>
