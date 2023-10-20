//singup js code

var singup = document.getElementById('Signup');
var singin = document.getElementById('Signin');

window.onclick = function(event){
    if(event.target == singup)
    {
        singup.style.display = "none";
        document.getElementById('usernameOrEmail').value = '';
        document.getElementById('Pass').value = '';
        document.getElementById('RePass').value = '';
        document.getElementById('userName').value = '';
        document.getElementById('Mail').value = '';
    }
    if(event.target == singin){
        singin.style.display = "none";
        document.getElementById('usernameOrEmail').value = '';
        document.getElementById('LPass').value = '';
        
    }
}

function btnOpenSingup(){
    document.getElementById('Signup').style.display = 'block';
}

function btnCloseSingup(){
    document.getElementById('Signup').style.display = 'none';
    document.getElementById('Pass').value = '';
    document.getElementById('RePass').value = '';
    document.getElementById('userName').value = '';
    document.getElementById('Mail').value = '';
}

//singin js code

function btnOpenSingin(){
    document.getElementById('Signin').style.display = 'block';
}

function btnCloseSingin(){
    document.getElementById('Signin').style.display='none';
    document.getElementById('usernameOrEmail').value = '';
    document.getElementById('LPass').value = '';
}

function txtClear(){
    document.getElementById('usernameOrEmail').value = '';
    document.getElementById('LPass').value = '';
    document.getElementById('Pass').value = '';
    document.getElementById('RePass').value = '';
    document.getElementById('userName').value = '';
    document.getElementById('Mail').value = '';
}