<?php

$file=$_POST['file'];

if(copy("file:///C:/Users/user/Pictures/vlcsnap-2015-10-28-14h45m08s40.png", "../images/hh.jpg")){
    
}

echo json_encode(array("file"=>"../images/slide2.jpg"));

?>
