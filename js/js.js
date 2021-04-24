function onlyOne(checkbox) {
    var checkboxes = document.getElementsByName('check')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
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

if(male == male.checked){
    img.src = 'images/avatarm.png'
}