<html>
    <head>
        <title>Group chat</title>
        
        <link href="../Resources/css/main.css" rel="stylesheet" type="text/css"> 
        <link href="../Vendors/grid.css" rel="stylesheet" type="text/css">
        <link href="../Vendors/normalize.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <nav>
            <div class="naman">

            <img src="../Resources/images/paperplane.png" class="logo">
                <h1>CHAT BOX</h1>
                <ul class="right">
                    <li><a href="./setting.php"><img src="../Resources/images/setting.png"></a></li>
                    <li><a href="./Index.php"><img src="../Resources/images/logout%202.0.png"></a></li>                   
                </ul>
            </div>            
        </nav>
        <div>
            <div class="col span-1-of-7 online">
                online
                            </div>
            <div class="col span-6-of-7 text-area" id="msgBody">
            
            <div class="recived" id='ok'>
                <div class="recivemsgArea">
                </div> 
                <div>
                    <p></p>
                    <p></p>
                </div>
                
            </div>
            <div class="sent" id="sent">
           
                
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
            
            <input type="text" id="msg" name="message" autocomplete="off" placeholder="Type a message">    
         
               
                <ul class="attach">
                    
                    <li  onclick="sendmsg()"><button type="button" name="submit"><img src="../Resources/images/send.png"></button></li>
                    <li><a href="#" ><img src="../Resources/images/attachments.png"></a></li>
                </ul>
               
            </div>
        </footer>
        <script src="../js/main.js"> </script>
    </body>
</html>
