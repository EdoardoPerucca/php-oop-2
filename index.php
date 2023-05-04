<?php
require_once './db.php';
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets Shop</title>
    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>
    <div class="main-container">
        <h1>Pets Shop</h1>
        <h2>Cani</h2>

        <table class="table">
            <tr>
                <th>Prodotto</th>
                <th>Dimensione</th>
                <th>Colore</th>
                <th>immagine</th>
                <th>Prezzo</th>

            </tr>

            <?php
            foreach ($products as $product) {
            ?>

                <tr>
                    <td><?= $product->name ?></td>
                    <td><?= $product->size ?></td>
                    <td><?= $product->color ?></td>
                    <td><?= $product->image ?></td>
                    <td><?= $product->price ?></td>
                </tr>

            <?php
            }
            ?>

        </table>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>