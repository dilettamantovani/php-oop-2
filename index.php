<?php
require __DIR__ . '/metods/data.php';
$generictoy1 = new Giochi_Generici("", "Giocattolo Rimbalzante", "P.L.U.", "3,50$");
$generictoy2 = new Giochi_Generici("", "Topolino di pezza", "Giocattolo di Tessuto", "Cotone 100%", "2,50$");
$generictoy3 = new Giochi_Generici("", "Pupazzo che scappa", "Giocattolo con carica a molla", "80% tessuto, plastica 20%", "4$");

$dogtoy1 = new Giochi_Per_Cani("", "Corda Dura", "Corda da tirare", "100% tessuto grezzo", "3,50$", "Adatto a tutti i tipi di Cane");
$dogtoy2 = new Giochi_Per_Cani("", "Frisbee", "Oggetto circolare da lancio", "100% P.E.T.", "4,50$", "Adatto a tutti i tipi di Cane");

$cattoy1 = new Giochi_Per_Gatti("", "laser felino", "Laser ricreativo per gatti", "100% autentico fascio di elettroni", "10,90$", "Adatto per Tutti i tipi di Gatto");
$cattoy2 = new Giochi_Per_Gatti("", "Tiragraffi jungle", "Tiragraffi scalabile per gatti", "80% legno di banano, 20% liane delle amazzoni", "25,99$", "Adatto per Tutti i tipi di Gatto");

$GenFood1 = new Cibo_Per_Animali("", "Semi di Girasole", "semi commestibili per animali da compagnia", "semi di girasole ed altre piante assortite", "1,90$");
$GenFood2 = new Cibo_Per_Animali("", "Croccantini", "Croccantini generici per animali da compagnia", "35%Manzo, 35% Pollo, 30%Frumento", "2,90$");
$GenFood3 = new Cibo_Per_Animali("", "Gamberetti", "Mangime vario per animali acquatici", "Gamberetti, fauna microscopica marina assortita", "2$");

$dogf1 = new Cibo_Per_Cani("", "Polpettine di carne", "Petfood", "60% Manzo, 40% Pollo", "2,50$", "Adatto ai cani di taglia Media/Grande");
$dogf2 = new Cibo_Per_Cani("", "Bocconcini di pollo", "Friskas", "100% Pollo", "4,99$", "Adatto ai cani di taglia Media/Grande");
$dogf3 = new Cibo_Per_Cani("", "Croccantini Junior", "Petxyness", "30% frumento/30% Salmone/40% Manzo", "6,50$", "Adatto ai cuccioli da 3 a 12 mesi");

$catf1 = new Cibo_Per_Gatti("Patè di carne", "Petfood", "60% Manzo, 40% Pollo", "3,99$", "Adatto a gatti adulti (1 anno in su)");
$catf2 = new Cibo_Per_Gatti("Croccantini Junior", "Friskas", "30% frumento/30% Salmone/40% Manzo", "5$", "Adatto ai cuccioli da 3 a 11 mesi");
$catf3 = new Cibo_Per_Gatti("erba gatta", "Petxyness", "100% Erba gatta", "7,50$", "Adatta per tutti i tipi di gatti");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop</title>
</head>

<body>
    <h2>Giochi per Animali</h2>
    <div class="container">

        <?php
        $GenToy = [$GenToy1, $GenToy2, $GenToy3, $DogToy1, $DogToy2, $CatToy1, $CatToy2];

        foreach ($GenToy as $toy) {
            echo '<div id="card">';
            echo $toy->getgentoy();
            echo '</div>';
        }
        ?>
    </div>

    <h2>Cibo per Animali</h2>
    <div class="container">


        <?php
        $GenFood = [$GenFood1, $GenFood2, $GenFood3, $dogf1, $dogf2, $dogf3, $catf1, $catf2, $catf3];

        foreach ($GenFood as $food) {
            echo '<div id="card">';
            echo $food->getfood();
            echo '</div>';
        }
        ?>
    </div>

</body>

</html>