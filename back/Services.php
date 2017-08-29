<?php
include 'Database.php';
class Service{
    private $db;
    function __construct(){
        $this->db=new Database();
    }
    
    function addService($providerId,$cat,$type,$title,$desc,$pricemax,$pricemin,$active){
        return $this->db->insert("insert into Services values (0,$providerId,'$cat','$type','$title','$desc','$pricemax','$pricemin',$active)");
    }
    
    function update($sid,$cat,$type,$title,$desc,$pricemax,$pricemin,$active){
        return $this->db->update("update Services set sCategory='$cat',sType='$type',sTitle='$title',
            sDescription='$desc',sPriceMaxRange='$pricemax',sPriceMinRange='$pricemin',sAvailable=$active");
    }
    
    function getItem($id,$item){
        $d=$this->db->select("select $item from Provider where pId=$id");
        $e=mysql_fetch_array($d);
        return $e[0];
    }
    
    function getCategory($id){
        return $this->getItem($id, 'sCategory');
    }
    
    function getType($id){
        return $this->getItem($id, 'sType');
    }
    
    function getTitle($id){
        return $this->getItem($id, 'sTitle');
    }
    
    function getDescription($id){
        return $this->getItem($id, 'sDescription');
    }
    
    function getPriceMaxRange($id){
        return $this->getItem($id, 'sPriceMaxRange');
    }
    
    function getPriceMinRange($id){
        return $this->getItem($id, 'sPriceMinRange');
    }
    
    function getAvailable($id){
        return $this->getItem($id, 'sAvailable');
    }
    
    function getServices(){
        return $this->db->select("select * from Services");
    }
    
}
?>
