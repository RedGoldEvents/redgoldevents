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
        if(isset($_POST['create'])){
            include_once '../back/Manager.php';
            $m=new Manager();
            $mail=$_POST['mail'];
            $key=$_POST['key'];
            if($m->addUser($mail, $key)){
                echo "User Added Successfully ( User Id: ".$m->getID($mail, $key).")";
            }else{
                echo "Failed to add User";
            }
        }
        
        if(isset($_POST['login'])){
            include_once '../back/Manager.php';
            $m=new Manager();
            $mail=$_POST['mail'];
            $key=$_POST['key'];
            if($m->UserExists($mail, $key)){
                echo "User Found Successfully ( User Id: ".$m->getID($mail, $key).")";
            }else{
                echo "Failed to Find User";
            }
        }
        
        
        ?>
        <div>
            Create
        <form method="post">
            <input name="mail" type="text" placeholder="Email"/>
            <input name="key" type="password" placeholder="Password"/>
            <input type="submit" name="create" value="CREATE"/>
        </form>
        </div>
        <hr>
        <div>
        <form method="post">
            Login
            <input name="mail" type="text" placeholder="Email"/>
            <input name="key" type="password" placeholder="Password"/>
            <input type="submit" name="login" value="LOGIN"/>
        </form>
        </div>
    </body>
</html>
