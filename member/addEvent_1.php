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
    
    if($e->addEventTicket($r=$_GET['id'], $bannerImage="", $price=fget("price"))){
        header("location:addEvent_2.php?id=$r");
            }else{
                echo "Unable to Add Event Ticket";
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
                    <li class="active">
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
                <form method="post">
                    <label>Ticket Image</label>
                    <input class="input" type=""/>
                    
                    <label>Ticket Price</label>
                    <input name="price" class="input" type="" placeholder="Ticket Price [Any Amount,Fixed,Free]" value="<?php echo $e->getTicketPrice($id)?>"/>
                    
                    <label>Registration Form</label>
                    <input class="input" type="submit" name="" value="Add Parameter" />
                    
                    
                    <input class="next_button" type="submit" name="next" value="NEXT" />
                </form>
            </div>
        </div>
        
      
    </body>
</html>
