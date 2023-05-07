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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="container">

        <h1 class=" pt-4 pb-4">Pets Shop</h1>

        <div class="row">

            <?php
            foreach ($products as $singleProduct) {
            ?>

                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= $singleProduct->getCategory()->getName() ?>
                                <small><i class="fa-solid <?= $singleProduct->getCategory()->getIcon() ?>"></i></small>
                            </h5>
                            <div>
                                <span><strong>Articolo: </strong></span> <?= $singleProduct->getName() ?>
                            </div>


                            <?php
                            switch (get_class($singleProduct)) {
                                case 'Food':
                                    echo "<strong>Quantità: </strong>" . $singleProduct->getWeight() . "grammi";
                                    break;

                                case 'Toy':
                                    echo "<strong>Materiale: </strong>" . $singleProduct->getMaterial();

                                default:
                                    echo "<br>";
                                    break;
                            }
                            ?>

                            <div>
                                <?php
                                switch (get_class($singleProduct)) {
                                    case 'Food':

                                        echo "<strong>Valutazione: </strong>" . $singleProduct->getRate();
                                        break;

                                    default:
                                        echo "<br>";
                                        break;
                                }
                                try {
                                    $crocchette->setRate(8);
                                } catch (Exception $e) {
                                    echo $e->getMessage();
                                } ?>

                            </div>


                            <div>
                                <span><strong>Prezzo: </strong></span><?= $singleProduct->getPrice() ?>€
                            </div>

                            <a href="#" class="btn btn-warning mt-3">Dettagli</a>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>

        </div>



    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>