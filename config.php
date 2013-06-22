<?php

$sql = mysql_connect( "localhost:8888" , "root" , "root" )or die( mysql_error() );


$select_db = mysql_select_db("appsearch" , $sql);
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $apps = mysql_real_escape_string($_POST['apps']);
    
    
    if(empty($apps))
    {
        echo'Please Enter Application name';
    }
    else 
    {
     $query= mysql_query("SELECT * FROM application WHERE apps='$apps'");
     $rows=  mysql_num_rows($query);
     
     
     
     
     if($rows>0)
     {
         die('Application name already exist');
     }
     else
     {
         
         mysql_query("INSERT INTO application (apps) VALUES ('$apps')");
         
         
     }
     
    }
}



?>
