<?php
include_once 'User.php';
include_once 'Event.php';
class Manager{
    private $user;
    private $event;
    public $EVENT_ID="eId";
    public $EVENT_TITLE="eTitle";
    public $EVENT_VENUE="eVenue";
    public $EVENT_TICKET_TYPE="eTicketType";
    public $EVENT_TICKET_PRICE="eTicketPrice";
    
   
    function __construct(){
        $this->user=new USER();
        $this->event=new Event();
    }

    function addUser($mail,$key){
        return $this->user->addUser($mail, $key);
    }
    
    function getID($mail,$key){
        return $this->user->getIdentification($mail, $key);
    }
    
    function UserExists($mail,$key){
        return $this->user->userExists($mail, $key);
    }
    
    function addEvent($title,$venue,$starttime,$startDate,$endtime,$endDate,$desc,$host,$hostInfo,
                      $ticketType,$ticketPrice,$exclusive,$bannerImage,$eventtype,$eventcategory){
     return   $this->event->addEvent($title, $venue, $starttime, $startDate, $endtime, $endDate, $desc, $host, 
                $hostInfo, $ticketType, $ticketPrice, $exclusive, $bannerImage, $eventtype, $eventcategory);
    }
    
    function updateEvent($eid,$title,$venue,$starttime,$startDate,$endtime,$endDate,$desc,$host,$hostInfo,
                      $ticketType,$ticketPrice,$exclusive,$bannerImage,$eventtype,$eventcategory){
     return   $this->event->UpdateEvent($eid,$title, $venue, $starttime, $startDate, $endtime, $endDate, $desc, $host, 
                $hostInfo, $ticketType, $ticketPrice, $exclusive, $bannerImage, $eventtype, $eventcategory);
    }
    
    function getAllEvents(){
        return $this->event->getAllEvents();
    }
    
    function getUserEvents($id){
         return $this->event->getUserEvents($id);
    }
    
    function deleteEvent($id){
        return $this->event->DeleteEvent($id);
    }
    
    function getEventTitle($id){
        return $this->event->getTitle($id);
    }
    
    function getEventVenue($id){
      return  $this->event->getVenue($id);
    }
    
    function getEventStartTime($id){
      return  $this->event->getStartTime($id);
    }
    
    function getEventStartDate($id){
      return  $this->event->getStartDate($id);
    }
    
    function getEventEndTime($id){
      return  $this->event->getEndTime($id);
    }
    
    function getEventEndDate($id){
      return  $this->event->getEndDate($id);
    }
    
    function getEventDescription($id){
      return  $this->event->getDescription($id);
    }
    
    function getEventHost($id){
      return  $this->event->getHost($id);
    }
    
    function getEventHostInfo($id){
      return  $this->event->getHostInfo($id);
    }
    
    function getEventTicketType($id){
      return  $this->event->getTicketType($id);
    }
    
    function getEventTicketPrice($id){
      return  $this->event->getTicketPrice($id);
    }
    
    function getEventExclusive($id){
      return  $this->event->getExclusive($id);
    }
    
    function getEventBannerImage($id){
      return  $this->event->getBannerImage($id);
    }
    
    function getEventEventType($id){
      return  $this->event->getEventType($id);
    }
    
    function getEventEventCategory($id){
      return  $this->event->getEventCategory($id);
    }
    
    function getEventTime($id){
      return  $this->event->getTime($id);
    }
    
    function getEventDate($id){
      return  $this->event->getDate($id);
    }
    
    
    
}
?>
