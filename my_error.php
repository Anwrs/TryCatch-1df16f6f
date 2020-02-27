<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>

    <body>
        <h1>Skateboard <small>(#1)</small></h1>
        <h1>Basketbal <small>(#2)</small></h1>
        <h1>Skeelers <small>(#3)</small></h1>

        <!-- maak hier de opdracht -->
        <form action="my_error.php" method="get" style="display: flex; height: 30px; align-items: center">
        <h2>Keuze:</h2>
        <input type="number" name="number" id="">
        <button type="submit">Submit</button>

        </form>

    </body>
</html>

<?php
session_start();

try {
    if (($_GET["number"] > 0) && ($_GET["number"] < 4)) {
            $_SESSION["keuze"] = $_GET["number"];
            echo "Gekozen item: " . $_SESSION["keuze"];                                                         
        } else {
            throw new Exception("ongeldig getal");
    }
}


catch (Exception $e) {
    echo 'Foutmeldig gevonden: ',  $e->getMessage(), "\n";
}
?>