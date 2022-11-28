<?php
require_once ('konf.php');
global $yhendus;?>
<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="style.css">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-
    scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Autoveod</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="registration_my_css.css">
</head>
<body>
<div class="container mt-4">
    <h1>Autoveod</h1>
    <nav>
        <a href="index.php">Home page</a>
        <a href="lisatellimus.php">Lisa tellimus</a>
        <a href="https://github.com/VladEm99/">Git HUB</a>
    </nav>




    <table>
        <tr>
            <th>Algus</th>
            <th>Ots</th>
            <th>Aeg</th>
            <th>Autonr</th>
            <th>Juht</th>
            <th>Valmis</th>
        </tr>
        <?php
        // tabeli sisu näitamine
        $kask=$yhendus->prepare('SELECT algus, ots, aeg, autonr, juht, valmis FROM veod');
        $kask->bind_result($algus, $ots, $aeg, $autonr, $juht, $valmis);
        $kask->execute();
        while($kask->fetch()){
            echo "<tr>";
            echo "<td>".htmlspecialchars($algus)."</td>";
            echo "<td>$ots</td>";
            echo "<td>$aeg</td>";
            echo "<td>$autonr</td>";
            echo "<td>$juht</td>";
            echo "<td>$valmis</td>";
        } ?>

</div>

</body>
</html>