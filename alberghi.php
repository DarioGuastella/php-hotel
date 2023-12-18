<?php
$voto = $_GET["vote"] ?? "Nessun voto";
?>
<!-- Lista Alberghi -->
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class=" bg-dark">
    
    <main class="container mt-5">
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nome Struttura:</th>
      <th scope="col">Descrizione:</th>
      <th scope="col">Valutazione:</th>
      <th scope="col">Disponibilità di parcheggio:</th>
      <th scope="col">Distanza dal centro:</th>
    </tr>
  </thead>
  <tbody>
  <?php
  foreach ($hotels as $albergo){
    if ($albergo['vote']<=$voto) {
    
        echo "<tr>";
        echo "<td>".$albergo['name']."</td>";
        echo "<td>".$albergo['description']."</td>";
        echo "<td>".$albergo['vote']."</td>";
        if ($albergo["parking"]==true) {
            echo "<td>Si</td>";
        } else {
            echo "<td>No</td>";
        };
        echo "<td>".$albergo['distance_to_center']." km</td>";
        echo "</tr>";
    
    }
    if ($voto=="") {
        
        echo "<tr>";
        echo "<td>".$albergo['name']."</td>";
        echo "<td>".$albergo['description']."</td>";
        echo "<td>".$albergo['vote']."</td>";
        if ($albergo["parking"]==true) {
            echo "<td>Si</td>";
        } else {
            echo "<td>No</td>";
        };
        echo "<td>".$albergo['distance_to_center']." km</td>";
        echo "</tr>";
    }
}
    ?>
  </tbody>
</table>
<a href="ricerca.php">Torna alla pagina di ricerca</a>
    </main>
</body>
</html>