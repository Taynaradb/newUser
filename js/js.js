function onlyOne(checkbox) {
    
    if(male.checked == true){
        img.src = 'images/avatarm.png';
        document. getElementById('btn'). style. backgroundColor = '#ffc200';
    }else if(female.checked == true){
        img.src = 'images/avatarf.png';
        document. getElementById('btn'). style. backgroundColor = '#a9cf54';
    }else{
        img.src = 'images/avatar.png';
        document. getElementById('btn'). style. backgroundColor = '#007f7f';
    }

}


var img = document.getElementById("profile");
var male = document.getElementById("male");
var female = document.getElementById("female");


var eye = document.getElementById("eye");
var tipo = document.getElementById("senha");

function seen(){
    if(tipo.type == "password"){
    tipo.type = "text";
    eye.src = 'images/unseen.svg';
}else{
    tipo.type = "password";
    eye.src = 'images/seen.svg';
}
}
