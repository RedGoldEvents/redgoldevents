<?php
include_once 'Database.php';

class Event{
    
    private $db;
    
    function __construct() {
        $this->db=new Database();
    }
    
   
    
    function addEventInfo($creatorId,$title,$venue,$starttime,$startDate,$endtime,$endDate,$desc,$host,$hostInfo,$bannerImage){
       return  $this->db->insert("insert into EventsInfo values (0,$creatorId,'$title','$venue','$starttime','$startDate',
                '$endtime','$endDate','$desc','$host','$hostInfo','$bannerImage',curtime(),curdate())");
    }
    
    function addEventTicket($eid,$bannerImage,$Price){
       return  $this->db->insert("insert into EventsTicket values (0,$eid,'$Price','$bannerImage')");
    }
    
    function addEventPublicity($eid,$audience,$eventCategory,$invite,$fb,$twt,$ig,$Ln,$tmbl,$rddt){
       return  $this->db->insert("insert into EventsPublicity values (0,$eid,$audience,$eventCategory,$invite,$fb,$twt,$ig,$Ln,$tmbl,$rddt)");
    }
    
    function addEventBill($eid,$bill){
       return  $this->db->insert("insert into EventBill values (0,$eid,$bill,0)");
    }
    
    
    function addEventForm($eid,$text,$hint){
       return  $this->db->insert("insert into EventsForm values (0,'$text','$hint')");  
    }
    
    function getUserEvents($uid){
       return $this->db->select("select * from Events");
    }
    
    function getAllEventsInfo(){
        return $this->db->select("select * from EventsInfo ");
    }
    
    function getEventsWhere($where_clause){
        return $this->db->select("select * from Events ".isset($where_clause)?$where_clause:"");
        
    }
    
    function UpdateEvent($eid,$title,$venue,$starttime,$startDate,$endtime,$endDate,$desc,$host,$hostInfo,
                      $ticketType,$ticketPrice,$exclusive,$bannerImage,$eventtype,$eventcategory){
        
     return  $this->db->update("update Events set eTitle='$title',eVenue='$venue',eStartTime='$starttime',eStartDate='$startDate',
                eEndTime='$endtime',eEndDate='$endDate',eDescription='$desc',eHost='$host',
             eHostInfo='$hostInfo',eTicketType=$ticketType,eTicketPrice='$ticketPrice',
             eExclusive=$exclusive,eBannerImage='$bannerImage',eEventType='$eventtype',
             eEventCategory='$eventcategory',eTime=curtime(),eDate=curdate() where eId=$eid");
        
    }
    
    function CancelEvent(){
        
    }
    
    function DeleteEvent($id){
         return $this->db->delete("delete from Events where eId=$id");
    }
    
    function getEventInfoItem($id,$item){
        $d=$this->db->select("select $item from EventsInfo where eId=$id");
        $e=mysql_fetch_array($d);
        return $e[0];
    }
    
    function getEventTicketItem($id,$item){
        $d=$this->db->select("select $item from EventsTicket where eventID=$id");
        $e=mysql_fetch_array($d);
        return $e[0];
    }
    
    function getTitle($id){
      return  $this->getEventInfoItem($id, "eTitle");
    }
    
    function getVenue($id){
      return  $this->getEventInfoItem($id, "eVenue");
    }
    
    function getStartTime($id){
      return  $this->getEventInfoItem($id, "eStartTime");
    }
    
    function getStartDate($id){
      return  $this->getEventInfoItem($id, "eStartDate");
    }
    
    function getEndTime($id){
      return  $this->getEventInfoItem($id, "eEndTime");
    }
    
    function getEndDate($id){
      return  $this->getEventInfoItem($id, "eEndDate");
    }
    
    function getDescription($id){
      return  $this->getEventInfoItem($id, "eDescription");
    }
    
    function getHost($id){
      return  $this->getEventInfoItem($id, "eHost");
    }
    
    function getHostInfo($id){
      return  $this->getEventInfoItem($id, "eHostInfo");
    }
    
    function getTicketType($id){
      return  $this->getItem($id, "eTicketType");
    }
    
    function getTicketPrice($id){
      return  $this->getEventTicketItem($id, "eTicketPrice");
    }
    
    function getExclusive($id){
      return  $this->getItem($id, "eExclusive");
    }
    
    function getBannerImage($id){
      return  $this->getItem($id, "eBannerImage");
    }
    
    function getEventType($id){
      return  $this->getItem($id, "eEventType");
    }
    
    function getEventCategory($id){
      return  $this->getItem($id, "eEventCategory");
    }
    
    function getTime($id){
      return  $this->getItem($id, "eTime");
    }
    
    function getDate($id){
      return  $this->getItem($id, "eDate");
    }
    
    function listEventsInfo(){
        return $this->db->select("select * from EventsInfo");
    }
    
    function listEventTicket(){
        return $this->db->select("select * from EventsInfo");
    }
    
    function listEventPublicity(){
        return $this->db->select("select * from EventsInfo");
    }
    
    function listEventBill(){
        return $this->db->select("select * from EventsInfo");
    }
    
    function listEventForm(){
        return $this->db->select("select * from EventsInfo");
    }
    
    
     
}
?>
