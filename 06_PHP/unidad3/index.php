<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocumentPHP - Unidad 2</title>

</head>
<body>
    
    <?php 

        /* CONSIGNA
        Crear una clase que tenga 5 atributos y 3 métodos
        A partir de la clase creada en el punto anterior crear 2 objetos
        Crear una clase que herede de la clase principal
         */
        require_once("vehiculo.php");
        require_once("camion.php");

        $auto1 = new vehiculo("Gol", 2021, "FRJ202", 2);

        $auto2 = new vehiculo("Fiesta", 2005, "ABC123", 2);

        echo "Probando métodos del primer objeto:<br>";
        $auto1->arrancar();
        $auto1->detener();
        $auto1->cambiarPatente("123KNGHDID");


        echo "Probando métodos del segundo objeto:<br>";
        $auto2->arrancar();
        $auto2->detener();
        $auto2->cambiarPatente("123KNGHDID");

        echo "<p>Creando un objeto de la clase 'Camión':<br></p>";
        $camion1 = new camion("Scania", 2019, "SKJ101AV", 4, 10000);
        echo "<p>Consultando cuánto carga:<br></p>";
        $camion1->cuantoCarga();
        
        
    ?>
</body>
</html>