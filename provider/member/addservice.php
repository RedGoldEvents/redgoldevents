<?php
if(isset($_POST['add_sercive'])){
    include_once '../../back/Services.php';
    $szer=new Service();
    if($szer->addService(1, "cat", "type", "title", "desc", "maxprice", "minprice", 0)){
        $e=mysql_insert_id();
        $d="Service Added. <a href='manageService.php?id=$e'>View Service</a>";
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
        <title>Provider : Add Service</title>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php
        // put your code here
        ?>
    
        <div class="page_bar">
            
        </div>
        
        <div>
                <ul>
                    <li><a href="addservice.php">Add Service</a></li>
                    <li><a href="manageService.php">Manage My Services</a></li>
                </ul>
        </div>
        <div class="container">
            <div class="active">
                Add New Service
            </div>
            <div>
               <center> <?php if(isset($d)){echo $d;}?></center>
            </div>
            <div class="create_event_form">
            <form method="post">
                
                <label>Name</label>
                <input class="input" type="" name="" />
                
                <label>Logo</label>
                <input class="input" type="" name="" />
                
                <label>Description (150 characters max)</label>
                <textarea class="input" ></textarea>
                
                <label>Category</label>
                <select class="input" >
                    <option>
                        Racing
                    </option>
                    <option>
                        Dance
                    </option>
                    <option>
                        Assist
                    </option>
                    <option>
                        Soccer
                    </option>
                    <option>
                        Book Launch
                    </option>
                    <option>
                        Rally
                    </option>
                    <option>
                        Clubs
                    </option>
                    <option>
                        General Audience
                    </option>
                </select>
                
                <label>Price Range</label>
                <input class="input" type="" name="" />
                
                
                <input class="final_button" type="submit" name="add_sercive" value="ADD NEW SERVICE"/>
                
            </form>
            </div>
        </div>
        
    </body>
</html>
