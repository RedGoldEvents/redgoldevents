<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        function gt($in){
            return $_POST[$in];
        }
        if(isset($_POST['create'])){
            include_once '../back/Manager.php';
            $m=new Manager();
            if($m->addEvent(gt('et'), gt('v'), gt('ts'), gt('ds'), 
                    gt('te'), gt('de'), gt('ate'), gt('hn'), gt('hid'), 
                    gt('tt')*1, gt('tp'), 0, 
                    gt('bi'), 1, 1)){
               echo "Event Created Successfully ";
            }else{
                echo "Failed to create Event";
            }
        }
        
        if(isset($_POST['update'])){
            include_once '../back/Manager.php';
            $m=new Manager();
            $eid=$_POST['eeid'];
            if($m->updateEvent($eid,gt('et'), gt('v'), gt('ts'), gt('ds'), 
                    gt('te'), gt('de'), gt('ate'), gt('hn'), gt('hid'), 
                    gt('tt')*1, gt('tp'), 0, 
                    gt('bi'), 1, 1)){
               echo "Event Updated Successfully ";
            }else{
                echo "Failed to Update Event";
            }
        }
        
        ?>
        <form method="post">
            <?php $eid;$m;  if(isset($_POST['edit'])){$eid=$_POST['e_id'];include_once "../back/Manager.php";$m=new Manager();} ?>
            <?php
            if(isset($eid)){
                echo '<input type="hidden" name="eeid" value="'.$eid.'"  />';
            }
            ?>
            User Id<input type="text" name="uid" placeholder="User Id"  /><br>
            Event Title<input type="text" name="et" placeholder="Event Title" <?php echo isset($_POST['edit'])?" value='".$m->getEventTitle($eid)."' ":"" ?> /><br>
            Venue<input type="text" name="v" placeholder="Venue"  <?php echo isset($_POST['edit'])?" value='".$m->getEventVenue($eid)."' ":"" ?> /><br>
            Start Date<input type="text" name="ds" placeholder="Date start" <?php echo isset($_POST['edit'])?" value='".$m->getEventStartDate($eid)."' ":"" ?> /><br>
            End Date<input type="text" name="de" placeholder="Date end" <?php echo isset($_POST['edit'])?" value='".$m->getEventEndDate($eid)."' ":"" ?> /><br>
            Start Time<input type="text" name="ts" placeholder="Time start" <?php echo isset($_POST['edit'])?" value='".$m->getEventStartTime($eid)."' ":"" ?> /><br>
            End Time<input type="text" name="te" placeholder="Time end" <?php echo isset($_POST['edit'])?" value='".$m->getEventEndTime($eid)."' ":"" ?> /><br>
            Banner Image<input type="File" name="bi" placeholder="Banner Image" <?php echo isset($_POST['edit'])?" value='".$m->getEventBannerImage($eid)."' ":"" ?> /><br>
            Event Description<textarea name="ate" placeholder="About the event" <?php echo isset($_POST['edit'])?" value='".$m->getEventDescription($eid)."' ":"" ?> ></textarea><br>
            Host Name<input type="text" name="hn" placeholder="Host name" <?php echo isset($_POST['edit'])?" value='".$m->getEventHost($eid)."' ":"" ?> /><br>
            Host Info Data<input type="text" name="hid" placeholder="Host info" <?php echo isset($_POST['edit'])?" value='".$m->getEventHostInfo($eid)."' ":"" ?> /><br>
            
            Ticket Type<select name="tt">
                <option <?php echo (isset($_POST['edit']) && $m->getEventTicketType($eid)==2)?"selected":"" ?> >Paid Ticket</option>
                <option <?php echo (isset($_POST['edit']) && $m->getEventTicketType($eid)==0)?"selected":"" ?> >Free Ticket</option>
                <option <?php echo (isset($_POST['edit']) && $m->getEventTicketType($eid)==3)?"selected":"" ?> >Donation Ticket</option>
            </select><br>
            Ticket Price<input type="text" name="tp" placeholder="Ticket Price" <?php echo isset($_POST['edit'])?" value='".$m->getEventTicketPrice($eid)."' ":"" ?> /><br>
            
            Reservation<input name="r" type="checkbox" <?php echo isset($_POST['edit'])?"":"" ?> /><br>
            
            Advertise to everyone<input name="aee" type="checkbox" <?php echo isset($_POST['edit'])?"":"" ?> /><br>
            
            <input type="submit" name="create" value="CREATE" />
            <input type="submit" name="update" value="UPDATE" />
        </form>
        
        <div></div>
        
        <div>
            <?php
            if(isset($_POST['delete'])){
                $eid=$_POST['e_id'];
                include_once "../back/Manager.php";
                $m=new Manager();
                if($m->deleteEvent($eid)){
                    echo "Event deleted Successfully (Event Id: ".$eid." )";
                }else{
                    echo "Failed to delete Event (Event Id: ".$eid." )";
                }
            }
            
            if(isset($_POST['edit'])){
                
            }
            
            ?>
        </div>
        <table>
            <thead><td>Title</td><td>Venue</td><td>Ticket Type</td><td>Ticket Price</td></thead>
            <?php
            if(isset($_POST['uid'])){
            include_once '../back/Manager.php';
            $m=new Manager();
            $d=$m->getUserEvents($_POST['uid']);
                while ($row = mysql_fetch_array($d)) {
                    echo "<tr><td>".$row[$m->EVENT_TITLE]."</td>";
                    echo "<td>".$row[$m->EVENT_VENUE]."</td>";
                    echo "<td>".$row[$m->EVENT_TICKET_TYPE]."</td>";
                    echo "<td>".$row[$m->EVENT_TICKET_PRICE]."</td>";
                    echo "<td><form method='post'><input type='hidden' name='uid' value='".$_POST['uid']."' /><input type='hidden' name='e_id' value='".$row[$m->EVENT_ID]."' /><input type='submit' name='edit' value='EDIT' /></form></td>";
                    echo "<td><form method='post'><input type='hidden' name='uid' value='".$_POST['uid']."' /><input type='hidden' name='e_id' value='".$row[$m->EVENT_ID]."' /><input type='submit' name='delete' value='DELETE' /></form></td>";
                    
                }
            }
            ?>
        </table>
    </body>
</html>
