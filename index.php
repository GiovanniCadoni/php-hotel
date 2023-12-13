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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container py-4">
        <h1 class="text-success fw-bolder pb-5">Lista degli Hotel disponibili:</h1>
        <table class="table table-success table-bordered border-dark">
            <thead>
                <tr>
                    <th class="text-primary text-center" scope="col">N°</th>
                    <th class="text-primary text-center" scope="col">Name</th>
                    <th class="text-primary text-center" scope="col">Description</th>
                    <th class="text-primary text-center" scope="col">Parking</th>
                    <th class="text-primary text-center" scope="col">Vote</th>
                    <th class="text-primary text-center" scope="col">Distance to Center</th>
                </tr>
            </thead>
            <tbody>

                <?php for ($i = 0; $i < count($hotels); $i++) {
                    $cur_hotel = $hotels[$i]; ?>
                    <tr>
                        <th class="text-danger text-center" scope="row"><?php echo $i+1 ?></th>
                        <td class="fw-bolder text-center"><?php echo $cur_hotel['name'] ?></td>
                        <td class="text-center">
                            <?php echo $cur_hotel['description'] ?>
                        </td>
                        <td class="text-center">
                            <?php if ($cur_hotel['parking']) { ?>
                                <span>Presente</span>
                            <?php } else { ?>
                                <span>Non presente</span>
                            <?php } ?>
                        </td>
                        <td class="text-center">
                            <?php echo $cur_hotel['vote'] ?>
                            <?php if ($cur_hotel['vote'] === 1) { ?>
                                <span>stella</span>
                            <?php } else { ?>
                                <span>stelle</span>
                            <?php } ?>
                        </td>
                        <td class="text-center">
                            <?php echo $cur_hotel['distance_to_center'] ?> km
                        </td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
</body>

</html>