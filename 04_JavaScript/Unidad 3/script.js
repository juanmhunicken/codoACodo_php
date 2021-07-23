function validarMail(){
    let mail = document.getElementById("email").value;

    if(mail === "" || mail.indexOf("")===-1 || mail.indexOf("@cursoPHP.com.ar")===-1){
        document.getElementById("mensajes").innerHTML = "ESTA MAL";
    } else {
        document.getElementById("mensajes").innerHTML = "ESTA BIEN";
    }
}


function validar8Char(){
    document.getElementById("mensajes").innerHTML = "";

    let ocho = document.getElementById("8Char").value;
    if (ocho.length >= 8) {
        document.getElementById("mensajes").innerHTML = "La cadena está ok"
    } else {
        document.getElementById("mensajes").innerHTML = "La cadena no está ok"
    }

}