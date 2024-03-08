<?php
$perangkat = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4b</title>
</head>

<body>
    <h3>Macam-macam perangkat keras komputer</h3>
    <ol>
        <?php foreach ($perangkat as $p) : ?>
            <li><?php echo $p; ?></li>
        <?php endforeach ?>
    </ol>

    <h3>Macam-macam perangkat keras komputer baru</h3>
    <ol>
        <?php array_push($perangkat, "Card Reader", "Modem");
        sort($perangkat) ?>
        <?php foreach ($perangkat as $p) : ?>
            <li><?php echo $p; ?></li>
        <?php endforeach ?>
    </ol>
</body>

</html>