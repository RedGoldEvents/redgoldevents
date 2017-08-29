
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
            
            <div >
              <span>
                    <div class="events_page" style="background-color: white">
                       <label class="title" style="background-image: url('images/slide1.jpg');"> Opera Max Data Launch</label>
                       
                        <span style="">
                            <img src="uploads/ev1.png" />
                        </span>
                        <span >
                            <label>VENUE : Lagos Eko Hotel Plaza</label>
                            <label>DATE : 12-4-17 </label>
                            <label>TICKET : 1000 NGN </label>
                        <form>
                            <input type="hidden" name="event_id" value="" />
                            <input type="submit" name="interested" value="Reserve" />
                            <input type="submit" name="join" value="Book" />
                        </form>
                            
                        </span>
                       <div class="extra">
                           <div>
                               
                           </div>
                           <div class="half">
                           <label> Organizers</label>
                           <div >
                               <label>Name: Game Dev Industries</label>
                               <label>Address: 3 Ikoyi Estate, Lagos</label>
                               <label>Phone: +2346576767</label>
                               <label>Mail: 555@gmail.com</label>
                               <label>
                                   <center><a href="">Other events by this Organizer</a></center>
                               </label>
                           </div>
                           </div>
                           <div class="half">
                           <label> Ticket</label>
                           <div >
                               <label>Image</label>
                               <label>Price: 1000 NGN</label>
                           </div>
                           </div>
                       </div>
                    </div>
                </span>
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
