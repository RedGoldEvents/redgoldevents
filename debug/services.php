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
        
        function gt($d){
            return $_POST[$d];
        }
        
        if(isset($_POST['addservice'])){
            include_once "../back/Services.php";
            $s=new Service();
            if($s->addService(1, gt('cat'), gt('typ'), gt('titl'), gt('desc'), gt('max'), gt('min'), 0)){
                echo "Service Added Successfully";
            }else{
                echo "Failed to add Service";
            }
        }
        ?>
        <div>
            Add Service
            <form method="post">
                Select Category<select name="cat">
                    <option>Transport</option>
                    <option>Catering</option>
                    <option>Location</option>
                </select><br>
                Select Type<select name="typ">
                    <option>Transport</option>
                    <option>Catering</option>
                    <option>Location</option>
                </select><br>
                <input type="text" name="titl" placeholder="Service Name"/><br>
                <textarea name="desc" placeholder="About the Service"></textarea><br>
                <input type="text" name="min" placeholder="Minimum Price Range"/><br>
                <input type="text" name="max" placeholder="Maximum Price Range"/><br>
                <input type="submit" name="addservice" placeholder="Srvice Name"/><br>
            </form>
        </div>
    </body>
</html>
