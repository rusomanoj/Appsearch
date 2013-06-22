<?php


require_once 'config.php';




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
                                                <input id="SearchName" type="text" placeholder=" Search your application here" name="SearchName" value="<?=$SearchName?>" name="SearchName">
                                              
                                                   
                                            </form>
                                        </div> <!-- end Search div -->
           
                                         
                 </div> <!-- end top_box_navigation -->
                     
            </div><!-- end of top_header_box -->
            <div class="bottom_header_box">
            Name of all Recent App : <br /> <br />
            
            <?php
                                                $arrays = $_SESSION['apps'];
                                                $que = mysql_query("SELECT apps FROM application");
                                                while ($row = mysql_fetch_array($que)):
                                                    
                                                    $app = $row['apps'];
                                                
                                                    echo "$app<br>";
                                                    
                                                endwhile;
                                                
					
            
            ?>
            
            
            </div><!-- end of botton_header_box -->
           
        </div><!-- end of header --> 
       
        </div><!-- end of container -->
    </body>
</html>




