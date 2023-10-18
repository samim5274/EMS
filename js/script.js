
var modal = document.getElementById('Signup');

window.onclick = function(event){
    if(event.target == modal)
    {
        modal.style.display = "none";
    }
}

function btnClose(){
    document.getElementById('Signup').style.display = 'none';
}

function btnOpenBox(){
    document.getElementById('Signup').style.display = 'block';
}