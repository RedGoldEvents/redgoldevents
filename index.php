<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Event</title>
        <link href="css/style.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div>
            
        </div>
        
        <div class="account_hover">
            <span >REGISTER</span> <span style="font-style: italic;">|</span> <span>LOGIN</span>
        </div>
        <div class="top">
            <span class="logo">
                RedGold Events
            </span>
            
        </div>
        <div>
            <div class="">
<!--                <center><h1>Join millions on RedGold Events</h1></center>-->
            </div>
            <div class="events_container">
<!--                <div class="search">
                    <form>
                        <input type="text" name="" placeholder="find event..." />
                        <input type="submit" name="" value="SEARCH"/>
                        <label>Filters</label>
                    </form>
                </div>-->
                <div class="nav">
                    <ul>
                        <li>New Events</li>
                        <li>Events in My Region</li>
                        <li>New Events</li>
                        <li>Events in My Region</li>
                        <li>New Events</li>
                        <li>Events in My Region</li>
                        <li>New Events</li>
                        <li>Events in My Region</li>
                    </ul>
                </div>
                
                <div class="events">
                    
                    <?php
                            include_once 'back/Event.php';
                            $e=new Event();
                            $eve=$e->getAllEventsInfo();
                            while($ev=mysql_fetch_array($eve)){
                                echo '
                                    <div class="event">
                                    <div class="title">
                                    <span>Opera Max Data Launch</span>
                                    </div>
                        <div>
                            <img src="uploads/ev1.png" />
                        </div>   
                        <div class="detail">
                            
                            <span>VENUE : Lagos Eko Hotel Plaza</span>
                            <span>DATE : 12-4-17 </span>
                            <span>FEE : 1000 NGN </span>
                            <span><a href="event.php?id=399484905000"> MORE </a></span>
                        </div>
                    </div>
                                    ';
                            }
                    ?>
                    
                </div>
                
            </div>
        </div>
        <footer>
            <center style="color: white;font-size: 70%;">
                Terms and conditions | Privacy Policy | Developed by <a href="http://4handheld.com">4handheld</a>
            </center>
        </footer>
    </body>
</html>
