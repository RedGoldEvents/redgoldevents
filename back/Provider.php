<?php 
include_once 'Database.php';
class Provider{
    private $db;
    function __construct() {
        $this->db=new Database();
    }
    
    function addProvider($category,$type,$title,$logo,$desc,$number,$mail){
        return $this->db->insert("insert into Provider values (0,'$category','$type','$title','$logo','$desc','$number','$mail')");
    }
    
    function updateProvider($id,$category,$type,$title,$logo,$desc,$number,$mail){
        return $this->db->update("update Provider set pCategory='$category',pType='$type',
            pProviderTitle='$title',pProviderLogo='$logo',pProviderDescription='$desc',
            pProviderNumber='$number',pProviderMail='$mail' where pId=$id");
    }
    
    function getItem($id,$item){
        $d=$this->db->select("select $item from Provider where pId=$id");
        $e=mysql_fetch_array($d);
        return $e[0];
    }
    
    function getCategory($id){
        return $this->getItem($id, 'pCategory');
    }

    function getType($id){
        return $this->getItem($id, 'pType');
    }
    
    function getProviderTitle($id){
        return $this->getItem($id, 'pProviderTitle');
    }
    
    function getProviderLogo($id){
        return $this->getItem($id, 'pProviderLogo');
    }
    
    function getProviderDescription($id){
        return $this->getItem($id, 'pProviderDescription');
    }
    
    function getProviderNumber($id){
        return $this->getItem($id, 'pProviderNumber');
    }
    
    function getProviderMail($id){
        return $this->getItem($id, 'pProviderMail');
    }
}

?>