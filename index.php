<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    ?>

<body>

    <div class="container">
        <h1 class=" text-center p-3">Hotel list</h1>

    <form action="./filtered_hotels.php" method="GET" class=" form my-5">
        <label for="parking" class=" form-label">Con parcheggio:</label>
        <input type="checkbox" name="parking" class=" form-check d-inline-block align-middle">
        <label for="reviews" class=" form-label mt-3 d-block">Voto minimo:</label>
        <select name="reviews" class=" form-select">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <button class="btn btn-primary mt-3" >Filter results</button>
    </form>

    <table class="table">
        <tr>
            <th class='text-center'>Name</th>
            <th class='text-center'>Description</th>
            <th class='text-center'>Parking</th>
            <th class='text-center'>Vote</th>
            <th class='text-center'>Distance from center</th>
        </tr>
        <?php
        foreach ($hotels as $hotel) {
            echo "<tr>";
            foreach ($hotel as $key => $value) {
                if ($key == "parking") {
                    if ($value == 1){
                        $value = "Yes";
                    } else {
                        $value = "No";
                    }
                } else if ($key == "distance_to_center"){
                    $value .= " km";
                }
                echo "<td class='text-center'>$value </td>";
            };
            echo "</tr>";
        }
        ?>

    </table>

    </div>
</body>

</html>