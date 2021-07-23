function validarMail() {
  let mail = document.getElementById("email").value;

  // indexOf = busca una cadena y devuelve la posicion en la que se encuentra, si no la encuentra devuelve -1
  if (mail == "" || mail.indexOf("@") == -1) {
    document.getElementById("mensajes").innerHTML = "El mail es inválido";
    document.getElementById("mensajes").style.backgroundColor = "red";
  } else {
    document.getElementById("mensajes").innerHTML = "El mail es válido";
    document.getElementById("mensajes").style.backgroundColor = "lightgreen";
  }
}
