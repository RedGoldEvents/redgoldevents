<?php

class Database{
    
    
    function __construct(){
        mysql_connect("localhost", "root", "");
        mysql_select_db("event");
    }
    
    function insert($query){
        //echo $query;
        return mysql_query($query);
    }
    
    function select($query){
        return mysql_query($query);
    }
    
    function update($query){
        return mysql_query($query);
    }
    
    function delete($query){
        return mysql_query($query);
    }
    
     
}
?>
