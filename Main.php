<?php
session_start();
?>
<html>
    <head>
        <title>Group chat</title>
        
        <link href="./Resources/css/main.css" rel="stylesheet" type="text/css"> 
        <link href="./vendors/grid.css" rel="stylesheet" type="text/css">
        <link href="./vendors/normalize.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <nav>
            <div class="naman">
                <img src="./Resources/paper-plane.png" class="logo">
                <h1>CHAT Bx</h1>
                <ul class="right">
                    <li><a href="/setting.html"><img src="./Resources/images/setting.png"></a></li>
                    <li><a href="/Index.html"><img src="./Resources/images/logout%202.0.png"></a></li>                   
                </ul>
            </div>            
        </nav>
        <div>
            <div class="col span-1-of-7 online">
                online
                            </div>
            <div class="col span-6-of-7 text-area">
            <?php    
            include_once "./include/dbcon.php";
           
                 if(isset($_POST['submit']))
                    {  
                        date_default_timezone_set("Asia/Calcutta");
                        $message=$_POST['message'];
                        $date = date("Y/m/d");
                        $time = date("H:i:s");
                       
                        $query="INSERT INTO `messages` (`from`, `message`, `date`, `time`,`id`)VALUE('pinki','$message', '$date', '$time', '')";
                        if ($con){
                           $run= $con->query($query);                          
                           $query="";
                           if ($run){
                            include "./include/fetch.php";
                           }

                          
                        }
                       
                     }
                    else{
                        include "./include/fetch.php"; 
                    }
                ?>
            <div class="recived" id='ok'>
                <div class="recivemsgArea">
                </div> 
                <div>
                    <p></p>
                    <p></p>
                </div>
                
            </div>
            <div class="sent">
           
                
                <div class="totalMsgbody">
                    <div class="sentmsgArea">
                        
                    </div> 
                    
                    </div>
                </div>
                
            </div>        
        </div>
        <footer>
            <div class="col span-1-of-7"></div>
            <div class="col span-6-of-7 send">
            <form action="./Main.php" method='post'>
            <input type="text" id="msg" name="message" placeholder="Type a message">    
         
               
                <ul class="attach">
                    
                    <li  onclick="sendmsg()"><button type="submit" name="submit"><img src="./Resources/images/send.png"></button></li>
                    <li><a href="#" ><img src="./Resources/images/attachments.png"></a></li>
                </ul>
                </form>
            </div>
        </footer>
        <!--<script src="./js/main.js"> </script>-->
    </body>
</html>
