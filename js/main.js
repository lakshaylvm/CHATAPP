
var msgBody=document.getElementById('msgBody')
var  msgElement=document.getElementById('msg')
msgElement.addEventListener('keypress', function (e) {
    if (e.key === 'Enter') {
      // code for enter
      sendmsg()
    }
});

var user = window.location.search;

function sendmsg(){
 
      msg =msgElement.value
      console.log("messege send "+ msg)

//   var date=document.getElementById('date')
//   var  sendMsg=document.getElementsByClassName('sent')

   // createMsg(msg,"time")
   getMethod(msg)

   msgElement.value=""
        
}
function createMsg(msgshow,time){
    var  sendMsg=document.getElementsByClassName('sent')

    continer = document.createElement('div')
        sentMsg = document.createElement('div')
        sentMsg.className="sentmsgArea"
            msg= document.createElement("p")
            msg.innerHTML = msgshow
            sentMsg.append(msg)
        dateDiv= document.createElement('div')
        dateDiv.className="datediv"
            date = document.createElement('p')
            date.innerHTML=time
        dateDiv.append(date)
    continer.append(sentMsg)
    continer.append(dateDiv)
sendMsg[0].append( continer)


}

function getMethod(message){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
           
            msgBody.innerHTML=this.responseText
            msgBody.scrollTo(0,msgBody.scrollHeight)
       }
    };
    xhttp.open("GET", "./patch.php"+user+"&message="+message, true);
    xhttp.send();
}
function onloadData(user){
    
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
           
            msgBody.innerHTML=this.responseText
            msgBody.scrollTo(0,msgBody.scrollHeight)
       }
    };
    xhttp.open("GET", "../include/fetch.php"+user, true);
    xhttp.send();
}
setInterval(onloadData, 1000,user)
