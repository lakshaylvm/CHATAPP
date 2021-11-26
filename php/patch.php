<?php    
            include_once "../include/dbcon.php";
           
                     
                        date_default_timezone_set("Asia/Calcutta");
                        $message=$_GET['message'];
                        $date = date("Y/m/d");
                        $time = date("H:i:s");
                        $username =  $_GET['user'];
                        $query="INSERT INTO `messages` (`from`, `message`, `date`, `time`,`id`)VALUE('$username','$message', '$date', '$time', '')";
                        
                        if ($con){
                           $run= $con->query($query);                          
                           $query="";
                           if ($run){
                            include "../include/fetch.php";
                           }

                          
                        }
                
                 
                   
// ?><?php    
// include_once "../include/dbcon.php";

//      if(isset($_POST['submit']))
//         {  
//             date_default_timezone_set("Asia/Calcutta");
//             $message=$_POST['message'];
//             $date = date("Y/m/d");
//             $time = date("H:i:s");
//             $username =  $_SESSION['username'];
//             $query="INSERT INTO `messages` (`from`, `message`, `date`, `time`,`id`)VALUE('$username','$message', '$date', '$time', '')";
            
//             if ($con){
//                $run= $con->query($query);                          
//                $query="";
//                if ($run){
//                 include "../include/fetch.php";
//                }

              
//             }
           
//          }
//         else{
//             include "../include/fetch.php"; 
           
//         }
//     ?>