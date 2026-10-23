<?php
$naslov = "Moja prva PHP stranica";
$autor = "Leon Rus";
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $naslov; ?></title>
</head>
<body>

    <?php
    echo "<h1>$naslov</h1>";
    echo "<p>Ovu stranicu izradio/la je $autor.</p>";
    ?>

    <a href="https://www.wikipedia.org/" target="_blank">
        Posjeti Wikipediju
    </a>

</body>
</html>
<!-- Naziv datoteke: vjezba1.php -->
