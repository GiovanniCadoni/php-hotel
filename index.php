<?php
     
     $hotels = [
        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4,
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2,
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1,
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5,
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50,
        ],
    ];

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
</head>
<body>
    
    <h1>Lista degli Hotel disponibili:</h1>
    <?php for($i = 0; $i < count($hotels); $i++) {
    $cur_hotel = $hotels[$i]; ?>
        <div>
            <ul>
                <li>
                    <h3><?php echo $cur_hotel['name'] ?></h3>
                    <p>
                        Info: <?php echo $cur_hotel['description'] ?></p>
                    <p>
                        Parcheggio:
                        <?php if ($cur_hotel['parking']) { ?>
                            <span>presente</span>
                        <?php } else { ?>
                            <span>non presente</span>
                        <?php } ?>    
                    </p>
                    <p>
                        Valutazione: <?php echo $cur_hotel['vote'] ?>
                        <?php if ($cur_hotel['vote'] === 1) { ?>
                            <span>stella</span>
                        <?php } else { ?>
                            <span>stelle</span>
                        <?php } ?>
                    </p>
                    <p>
                        Distanza dal centro: <?php echo $cur_hotel['distance_to_center'] ?> km
                    </p>
                </li>
            </ul>
        </div>
    <?php } ?>
</body>
</html>