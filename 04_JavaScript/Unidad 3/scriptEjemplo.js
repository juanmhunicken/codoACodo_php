// funcion con parametros

function sumar(a, b){
    console.log(`la suma de ${a} + ${b} es ${a+b}` )
}

// funcion con parametros y devolucion de resultados

function restar(a,b){
    return a-b;
}

let result = restar(4,3);
console.log(result);


// funcion flecha

function dividir(a,b){
    return a/b;
}

let dividirFlecha = (a,b) => {return a/b};

console.log(dividirFlecha(10,2));