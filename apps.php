<?php

require_once 'config.php';

session_start();



?>


<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="style1.css" rel="stylesheet" type="text/css"/> 
        
        <title></title>
    </head>
    <body>
      <div class="container"> 
        <div class="header" >
                 
            <div class="top_header_box">
               
                <font size="20"> Application Search</font></a> <br /><br />
                <div class="top_box_navigation">
					<div class="menu">
						<ul>
							<li>
								<a href="index.php">Home</a>					
							</li>
                                                        
				    		</ul>
                                            
                        
			  		</div> <!-- end menu -->
                                        <div class="search" align="right" style="height: auto"> <!-- Search div --> 
                                            <form id="searchap" method="get" action="apps.php" onsubmit="return emptySearch()">
                                                <input id="SearchName" type="text"  placeholder=" Search your application here" value="<?=$SearchName?>"  name="SearchName">
                                                
                                              
                                                   
                                            </form>
                                        </div> <!-- end Search div -->
           
                                         
                 </div> <!-- end top_box_navigation -->
                     
            </div><!-- end of top_header_box -->
            <div class="bottom_header_box">
            
            <div class="newapp">
            <form id="addappl" method="post" action="apps.php" onsubmit="return emptySearch()">
                <label>Add a new app name here : </label>
            <input id="apps" placeholder="Add a new app" type="text" value="" name="apps">
                                      
                                     
            </form> <br /><br />
            
            </div><!-- end of newapp -->
            Name of Searched App : <br/><br/>
            
            
             <?php
             
           
             
                                  if(isset($_GET['SearchName']))
                                  {
                                      $search = $_GET['SearchName'];
                                      
                                     
                                      $quer = mysql_query("SELECT apps FROM application WHERE apps LIKE '$search%' ORDER BY apps ");
                                      
                                     
                                   
                                      while($row1=  mysql_fetch_array($quer))
                                      {
                                          echo $row1['apps']."<br>";
                                      }
                                      
                                          
                                  }
                                                
					
            
            ?>
            
            </div> <!-- end of bottom_header_box-->
        </div><!-- end of header --> 
       
        </div><!-- end of container -->
    </body>
</html>




