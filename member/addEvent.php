<?php

if(isset($_GET['id'])){
   $id=$_GET['id'];
}else{
    $id=-1;
}
include_once '../back/Event.php';
 $e=new Event();
if(isset($_POST['next'])){
    
    function fget($data){
        return $_POST[$data];
    }
    
    
    if(isset($_GET['id'])){
        //update event with ID
        if(true){
            $r=$_GET['id'];
          header("location:addEvent_1.php?id=$r");  
        }
        
    }else{
        //else Create
      if($e->addEventInfo($creatorId=1,$title=fget('title'), $venue=fget('venue'), $starttime=fget('start_time'), $startDate=fget('start_date'),
            $endtime=fget('end_time'), $endDate=fget('end_date'), $desc=fget("desc"), $host=fget("host"), $hostInfo=fget("hostinfo"),$bannerImage)){
        $r=mysql_insert_id();
    header("location:addEvent_1.php?id=$r");
            }else{
                echo "Unable to create Event";
            }  
    }
    
}

?><!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Add Event</title>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div class="top_nav">
            <center>
               RedGold Event
            </center>
        </div>
        
        <div class="back_hover">
            <img src="img/back.png"></img>
                <ul>
                 <li><a style="color: green;text-decoration: none" href="index.php">Home</a></li>
                </ul>
        </div>
        
        <div class="nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="addEvent.php">Add an Event</a></li>
                <li><a href="manage_Event.php">Manage My Events</a></li>
                </ul>
        </div>
       
        
        <div class="container">
            
            <div class="create_event_flow">
                <ul>
                    <li class="active">
                        Create Event Information
                    </li>
                    <li>
                        Create Ticket and Registration Form
                    </li>
                    <li>
                        Manage Publicity
                    </li>
                    <li>
                        Payment
                    </li>
                </ul>
            </div>
            
            <div class="create_event_form">
                <form method="post" enctype="multipart/form-data">
                    <label>Banner Image</label>
                    <div>
                        <img id="imgfile" src="../images/slide.jpg" style="max-width: 40%;;min-width: 40%;">
                    </div>
                    <input id="img" class="input" type="file" onchange="checkFile()"/>
                    
                    <label>Event Description</label>
                    <input name="title" class="input" type="text" placeholder="Event Title" value="<?php echo $e->getTitle($id)?>"/>
                    <textarea name="desc" class="input"><?php echo $e->getDescription($id)?></textarea>
                    
                    <label>Location</label>
                    <input name="venue" class="input" type="" placeholder="Select Venue from Services" value="<?php echo $e->getVenue($id)?>" />
                    <label>Duration</label>
                    <input name="start_date" class="input_half" type="" placeholder="Start Date YYYY-MM-DD" value="<?php echo $e->getStartDate($id)?>" />
                    <input name="start_time" class="input_half" type="" placeholder="Start Time YYYY-MM-DD" value="<?php echo $e->getStartTime($id)?>" />
                    <input name="end_date" class="input_half" type="" placeholder="End Date HH:MM:SS" value="<?php echo $e->getEndDate($id)?>" />
                    <input name="end_time" class="input_half" type="" placeholder="End Time HH:MM:SS" value="<?php echo $e->getEndTime($id)?>" />
                    
                    <label>Host Contact</label>
                    <input name="host" class="input" type="" placeholder="Host Name" value="<?php echo $e->getHost($id)?>">
                    <input name="hostinfo" class="input" type="" placeholder="Host Info eg Mail , Mobile Number" value="<?php echo $e->getHostInfo($id)?>">
                    
                    <input class="next_button" type="submit" name="next" value="NEXT" />
                </form>
            </div>
        </div>
        
        <script src="../js/jquery-2.1.1.js">
        </script>
        <script>
       
            function checkFile(){
                img=document.getElementById("img").value
                    console.log(document.getElementById("img"));
                        $.post("http://localhost/eventmanager/back/jqueryFileUpload.php", 
                        {
                            "file":img
                        }
                        , function(data,status){
                          document.getElementById("imgfile").src=data.file;  
                        }, "json");
            }
        </script>
    </body>
</html>
