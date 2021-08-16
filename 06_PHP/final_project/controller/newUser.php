<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS stylesheet and Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="../view/css/login_style.css" rel="stylesheet">

    <title>Nuevo usuario</title>
</head>
<body>

<?php
    require_once('../clases/database.php');
    
    $userName = $_POST['inputName'];
    $userEmail = $_POST['inputEmail'];
    $userPass = $_POST['inputPassword'];
    $userPassRepeat = $_POST['repeatPassword'];

    function createNewUser($username, $usermail, $password){
        //TODO: Implement check to see if the email is already on the DB
        $new_conn = new connection();
        $new_conn->connect();
        $query = "insert into users (user, password, fullname) 
                            values ('" . $usermail . "', '" . $password . "', '" . $username . "');";
        $new_conn->execute($query);
        $rowCount = $new_conn->num_lines();
    }

    if ($userPass == $userPassRepeat){
        createNewUser($userName, $userEmail, $userPass);
        echo "<h1>Usuario creado con éxito</h1><br><br>";
        echo "<div class= 'container'>";
        echo "<a href='../view/login.html'><button type='button' class='btn btn-lg btn-primary btn-bloc'>Volver al login</button></a>";
        echo "</div>";
    } else {
        echo "Las contraseñas no coinciden, por favor intente nuevamente";
    };

?>
</body>

</html>

