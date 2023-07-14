function user(){
    no=window.event.keyCode;
    if((no>=65 && no<=90) || (no>=97 && no<=122)){

    }else{
        alert("Ingrese un username valido");
        window.event.keyCode= 0;
    }
}

function pass(){
    no=window.event.keyCode;
    if((no>=65 && no<=90) || (no>=97 && no<=122)){

    }else{
        alert("Ingrese un password valido");
        window.event.keyCode= 0;
    }
}

function todo() {
    // Redireccionar a otra página
    window.location.href = "pag1.html";
  }