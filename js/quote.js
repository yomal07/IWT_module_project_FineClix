function enableSbmt(){
    if(document.getElementById('qchkbox').checked){
        document.getElementById('qsbmt').disabled = false;
    }

    else{
        document.getElementById('qsbmt').disabled = true;
    }
}