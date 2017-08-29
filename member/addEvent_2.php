<?php

if(isset($_POST['next'])){
     include_once '../back/Event.php';
    $e=new Event();
    if($e->addEventPublicity($r=$_GET['id'],1,1,1,1,1,1,1,1,1)){
        header("location:addEvent_3.php?id=$r");
            }else{
                echo "Unable to Add Event Publicity";
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
                    <li>
                        <a href="addEvent.php?id=<?php echo $_GET['id']?>">Create Event Information</a>
                    </li>
                    <li>
                       <a href="addEvent_1.php?id=<?php echo $_GET['id']?>"> Create Ticket and Registration Form<a>
                    </li>
                    <li class="active">
                        Manage Publicity
                    </li>
                    <li>
                        Payment
                    </li>
                </ul>
                
                <div class="create_event_form">
                <form method="post">
                    <label>Event Audience</label>
                    <select class="input">
                        <option>General Audience</option>
                        <option>Gamers </option>
                        <option>Artists</option>
                        <option>Entertainers</option>
                        <option>Racers</option>
                    </select>
                    
                    <label>Event Category</label>
                    <select class="input">
                        <option>Dance</option>
                        <option>Movies</option>
                        <option>Music</option>
                    </select>
                    
                    <label>Event Publicity</label>
                    <select class="input">
                        <option>Invite Only</option>
                        <option>Everyone</option>
                    </select>
                    
                    <label>Permit Social Share</label>
                    <div class="input">
                    <input type="checkbox" /> Facebook
                    <input type="checkbox" /> Twitter
                    <input type="checkbox" /> Instagram
                    <input type="checkbox" /> Linkin
                    <input type="checkbox" /> Tumblr
                    <input type="checkbox" /> Reddit
                    </div>
                    
                    
                    <input class="next_button" type="submit" name="next" value="NEXT" />
                </form>
            </div>
            </div>
            
            
        </div>
        
        
    </body>
</html>
