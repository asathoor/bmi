<?php /* connection */

$mysqli = new mysqli(
        "localhost",
        "root",
        "mojndo",
        "wordpress" );
                                
if(mysqli_connect_errno()){
   printf("Connection failed: " . mysqli_connect_errno() );
   } else {
        printf("Connection ok.");
     }
                                                
          
