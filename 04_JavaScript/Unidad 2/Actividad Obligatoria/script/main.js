document.write("");

let nombre = prompt("Ingrese el nombre del alumno");

let suma = 0;
let cantidadNotas = 0;

for(let i = 0; i<3; i++){
    let nota = 0;
    do {
        notaStr = prompt("Ingrese una nota (solo numeros de 1 a 10):");
        nota = parseFloat(notaStr);

        if(nota<0 || nota > 10){
            alert("La nota no es válida, ingrese un nro del 0 al 10");
        }
        } while (nota < 0 || nota > 10)
    
    suma +=nota;
    cantidadNotas++;
    }

let promedio = (suma/cantidadNotas).toFixed(2);

document.write("<h3>El promedio del alumno ", nombre, " es: ", promedio,"</h3>");