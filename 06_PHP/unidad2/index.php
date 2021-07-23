<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Unidad 2</title>
</head>
<body>
    <h1>PHP Unidad 2 - Actividad Práctica Obligatoria</h1>

    <?php 
    /*Crear un programa en PHP en el cual muestre en la página 
    nombre, 
    apellido, 
    edad, 
    hobbie, 
    editor de código preferido, 
    sistema operativo que utiliza.
    */

    $usuario1 = [
        "nombre" => "juan",
        "apellido" => "perez",
        "edad" => 32,
        "hobbie" => "ciclismo",
        "editorPref" => "VS Code",
        "OS" => "Ubuntu",
    ];

    $usuario2 = [
        "nombre" => "pedro",
        "apellido" => "ramirez",
        "edad" => 20,
        "hobbie" => "peliculas",
        "editorPref" => "Sublime",
        "OS" => "Windows",
    ];

    $usuarios = array($usuario1, $usuario2);

    foreach($usuarios as $usuarioActual){
        echo "<h2>Usuario:</h2>";
        echo "Nombre: ".$usuarioActual["nombre"]."<br>";
        echo "Apellido: ".$usuarioActual["apellido"]."<br>";
        echo "Edad: ".$usuarioActual["edad"]."<br>";
        echo "Hobbie: ".$usuarioActual["hobbie"]."<br>";
        echo "Editor de texto preferido: ".$usuarioActual["editorPref"]."<br>";
        echo "Sistema operativo: ".$usuarioActual["OS"]."<br>";
        echo "<br><br>";
    }


    ?>
</body>
</html>