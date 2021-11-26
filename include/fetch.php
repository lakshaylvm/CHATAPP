
<?php

  include_once('../include/dbcon.php');
    $sql = "SELECT * FROM messages";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
  // output data of each row
          $messages="";
          $user= $_GET['user'];
          while($row = $result->fetch_assoc()) {
                 $data= $row["message"];
                 $time= $row["time"];
                 if($row['from']!=$user){
                     $messages = $messages.'<div class="recived clear">
                                <div class="recivemsgArea">
                                       <p>'.$data.'<p>
                                  </div> 
                                <div class="datediv">  
                                    <p class="date"><span>'.$time.'</span></p>
                               </div>
     
                              </div>';
                            }
                  else{
                     $messages = $messages.'<div class="sent clear">
                                                  <div class="sentmsgArea">
                                                    <p>'.$data.'</p>  
                                                  </div> 
                                                  <div class="datediv">
                                                    <p class="date"><span>'.$time.'</span></p>
                                                  </div>
                                             </div>' ; 
  }
  
  }
 echo $messages;
 
}

?>