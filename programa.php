<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>


    
    <h2>Vieno Skaicio skaiciuokle</h2>
    <p>
        <?php 

        include 'C:\xampp\htdocs\New folder\funckija.php';
        $sk = 5;
        echo "Skaicius: $sk<br>";
        VienasSkaicius($sk);
        ?>
    </p>

    <h2>Intervalo skaicio skaiciuokle</h2>
    <p>
        <?php
        $intervalas = [5, 10, 15];
        echo "Skaiciai: " . implode(', ', $intervalas) . "<br>";
        IntervaloSkaicius($intervalas); 
        ?>
    </p>

</body>
</html>