<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Manage Service</title>
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
                Manage Services
            </div>
            <div>
               <center> <?php if(isset($d)){echo $d;}?></center>
            </div>
            <div class="list_event_form">
                
                <?php
                include_once "../../back/Services.php";
                $s=new Service();
                $srcs=$s->getServices();
                while($sss=  mysql_fetch_array($srcs)){
                    $sid=$sss['sId'];
                    $providerId=1;
                    if($sss['sProviderId']==$providerId){
                    echo '
                        <div class="item">
                    <span><img src=" s" alt="Service Logo" /></span>
                    <span>Name</span>
                    <span class="right">
                        <a href="" >Edit</a>
                        <a href="" >Deactivate</a>
                    </span>
                </div>
                        ';
                    }
                }
                ?>
            
                
                
                
            </div>
            
            
        </div>
        
    </body>
</html>
