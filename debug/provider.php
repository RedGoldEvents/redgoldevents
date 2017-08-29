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
        
       if(isset($_POST['addprovider'])){
           include_once "../back/Provider.php";
           $p=new Provider();
           if($p->addProvider(gt('cat'), gt('typ'), gt('name'), gt('logo'), gt('desc'),gt('num'),gt('mail'))){
               echo "Successfully added Provider Account";
           }else{
               echo  "Failed to add Provider Account";
           }
       }
        ?>
        <div>
            Add Provider
            <div>
                <form method="post">
                    Category
                    <select name="cat">
                        <option>General</option>
                        <option>Food</option>
                    </select><br>
                    Type<select name="typ">
                        <option>General</option>
                        <option>Cakes</option>
                        <option>Tea and Beers</option>
                        <option>Confectionary</option>
                        <option>Nigerian Delecacies</option>
                    </select><br>
                    <input type="file" name="logo" placeholder="Provider Logo" /><br>
                    <input type="text" name="name" placeholder="Provider Name" /><br>
                    <input type="text" name="mail" placeholder="Provider Mail" /><br>
                    <input type="text" name="num" placeholder="Provider Contact Number" /><br>
                    <textarea name="desc" placeholder="Description"></textarea><br>
                    <input type="submit" name="addprovider" value="ADD" />
                </form>
            </div>
        </div>
    </body>
</html>
