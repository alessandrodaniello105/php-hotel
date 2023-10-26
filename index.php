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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous"/>

  <title>PHP Hotel</title>
</head>
<body>
  
  <div class="container my-5">
    <div class="row justify-content-center">

      <?php foreach ($hotels as $hotel): ?>
      <div class="col-6">

        <div class="card my-3 w-100" style="width: 18rem;">

          <div class="card-body">

            <h5 class="card-title border-bottom pb-2">
              <?php echo $hotel['name'] ?>
            </h5>

            <h6 class="card-subtitle mt-3 mb-2 ps-1 text-body-secondary">
              Parcheggio: <?php echo ($hotel['parking'])? 'Sì' : 'No' ?>
            </h6>

            <h6 class="card-subtitle mb-2 ps-1 text-body-secondary">
              Distanza dal centro: <?php echo $hotel['distance_to_center'] ?> km
            </h6>

            <p class="card-text my-3 ps-2">
              Descrizione: <?php echo $hotel['description'] ?>
            </p>

            <div class="text-end px-3 my-4">
              <p class="card-subtitle mb-2 ps-1 text-body-secondary">
                Voto: <?php echo $hotel['vote'] ?> / 5
              </p>
            </div>

            <div class="text-center"><a href="#" class="card-link">Vai sul sito!</a></div>

          </div>

        </div>

      </div>
      <?php endforeach; ?>


    </div>
  </div>

</body>
</html>