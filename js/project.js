function loadInfo(info){
    if(info == btn){
        document.getElementById('imgpara').src="images/qwert.png"
        document.getElementById('paraimg').innerHTML="Welcome to FinecliX, led by Yomal Bandara. We believe Wedding Photography is an art, an art for which we are ever enthusiastic in making sure that the magical memories of the most important day of your life, are not forgotten. Our professional photographers are dedicated to imprinting the beautiful moments of your wedding day in your own wedding album, which will always remind you of the beginning of many beautiful stories ahead. Let’s capture CANDID, ARTISTIC & JOYFUL memories with FinecliX on your special day"
    }

    if(info == btn1){
        document.getElementById('imgpara').src="images/preshoot1.png";
        document.getElementById('paraimg').innerHTML="A challenging yet such a scintillating experience for both the couple and a photographer during which his or her artistry is put to the test. A pre shoot is always a golden opportunity for us to push the boundaries of creativity to produce a unique collection of photographs of a couple. Minus the exciting and perhaps, the tense notion of the wedding and the crowd, the pre shoot allows the couple to pose more freely in different locations. It gives them the opportunity to momentarily dive in to the fantasy worlds in their favourite roles and characters, creating some kick-ass shots.";
    }

    if(info == btn2){
        document.getElementById('imgpara').src="images/birthday1.png";
        document.getElementById('paraimg').innerHTML="It's a milestone in one's life and is always a moment of great pleasure and laughter. People always tend to find innovative ways to celebrate birthdays. As much as the one who blows the candles, people nowadays take great pleasure in planning birthdays. To see the laughter and surprise in his or her eyes and show how much they care is always something to be captured. It has no age limit. Nothing can get more funny, loving, friendly, cozy and crazy like a well planned birthday.";
    }

    if(info == btn3){

        document.getElementById('imgpara').src="images/sliit.png";
        document.getElementById('paraimg').innerHTML="We offer services for many occasions such as Convocations, Prize Givings and many more other services. We are flexible to adapt to any event type that our customers expect from us. Join hands with us for an exquisite and splendid experience ";
    }   
}


function validatePassword(){
    if(document.getElementById('pwd').value != document.getElementById('cpwd').value){
        alert('Your Password entered is not matching');
        return true;
    }

    else {
        alert("You have entered your password correctly!!");
        return false;
    }
}

function enableSubmit(){
    if(document.getElementById('chkbox').checked){
        document.getElementById('sbmt').disabled = false;
    }
    else
        document.getElementById('sbmt').disabled = true;
}