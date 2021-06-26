function chequearEdad(){
    let edad1 = parseInt(document.getElementById("edad1").value);

    if(edad1 >= 18){
        alert("El usuario es mayor de edad");
    } else {
        alert("El usuario NO es mayor de edad");
    }
}

function devolverMayor(){
    let edad1 = parseInt(document.getElementById("edad1").value);
    let edad2 = parseInt(document.getElementById("edad2").value);
    let edad3 = parseInt(document.getElementById("edad3").value);

    if(edad1 >= edad2){
        if(edad2 >= edad3 || edad3 <= edad1){
            alert("El Usuario 1 es el mayor");
        } else {
            alert("El Usuario 3 es el mayor");
        }
    } else if(edad2 >= edad3){
        alert("El Usuario 2 es el mayor");
        } else {
            alert("El usuario 3 es el mayor");
        }
}