function sendmsg(){
  var  msg=document.getElementById('msg')
      msg =msg.value
  var date=document.getElementById('date')
  var  sendMsg=document.getElementsByClassName('sent')

    createMsg(msg,"time")
    
    
    
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