<?php

if(isset($_POST['next'])){
     include_once '../back/Event.php';
    $e=new Event();
  header("location:addEvent_4.php?id=$r");
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
                        <a href="addEvent_1.php?id=<?php echo $_GET['id']?>">Create Ticket and Registration Form</a>
                    </li>
                    <li>
                        <a href="addEvent_2.php?id=<?php echo $_GET['id']?>">Manage Publicity</a>
                    </li>
                    <li class="active">
                        Payment
                    </li>
                </ul>
                
                <div class="create_event_form">
                <form method="post">
                    <label>Total Bill</label>
                    <div class="input">
                        <center>
                        <div style="margin: 3%;">
                            Event Hall : 20,000 NGN  <button> Remove</button>
                        </div>
                        <div style="margin: 3%;">
                            Publicity Fee : 500 NGN  <button> Remove</button>
                        </div>
                        <div style="margin: 3%;">
                            Transport : 25,000 NGN <button> Remove</button>
                        </div>
                            <hr style="width: 40%;">
                        <div>
                            Total : 50,000 NGN <button> Pay</button>
                        </div>
                        </center>
                    </div>
                    
                    
                    <input class="final_button" type="submit" name="next" value="PUBLISH" />
                    <input class="next_button" type="submit" name="next" value="SAVE FOR LATER" />
                </form>
            </div>
            </div>
            
            
        </div>
        
        
    </body>
</html>
