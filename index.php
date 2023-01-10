<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>php-hotel</title>
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
        $park = $_GET['parking'] ?? 'off';
        $voto = $_GET['voto'] ?? '0';
    ?>
</head>
<body>
    <!-- form filtro per parcheggio -->
    <form>
        <input type="checkbox" name="parking">
        <label for="parking">Parking</label>
        <br>
        <label for="voto">Voto</label>
        <input type="text" name='voto'>
        <br>
        <input type="submit" value="SEARCH">
    </form>

    <!-- tabella hotel -->
    <table class="table table-success">
        <thead>
            <tr>
            <th scope="col">name</th>
            <th scope="col">description</th>
            <th scope="col">parking</th>
            <th scope="col">vote</th>
            <th scope="col">distance_to_center</th>
            </tr>
        </thead>
        <tbody>

            <?php
                foreach($hotels as $key => $hotel){
                    $name = $hotel['name']; 
                    $description = $hotel['description']; 
                    $parking = $hotel['parking']; 
                    $vote = $hotel['vote']; 
                    $distance_to_center = $hotel['distance_to_center']; 
                    
                    if($park === 'on' && $parking === true || $park==='off'){
                        if($voto <= $vote){

                            echo '<tr>';
                            
                            echo '<td>' . $name . '</td>';
                            echo '<td>' . $description . '</td>';
                            if($parking){
                                echo '<td> Available </rd>';
                            } else{
                                echo '<td> Not available </rd>';
                            };
                            
                            echo '<td>' . $vote . '</td>';
                            echo '<td>' . $distance_to_center . ' km </td>';
                            
                            echo '</tr>';
                        };
                    };
                };
            ?>

        </tbody>
    </table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>