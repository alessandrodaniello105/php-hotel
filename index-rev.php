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

    // $hasParking = $_GET['parking'];
    $minVote = isset($_GET['vote']) ? $_GET['vote'] : 0; 

    $filteredHotels = [];


    if (isset($_GET['parking'])){
      foreach($hotels as $hotel){
        if($hotel['parking']){
          $filteredHotels[] = $hotel;
        } 
      }
    } else {
      foreach($hotels as $hotel){
        if($hotel['vote'] >= $minVote){
          $filteredHotels[] = $hotel;
        }
      }
    }

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

    <div class="row">
      <div class="col-2">

        <form action="index-rev.php" method="GET">
          <label for="parking"> Cerca con parcheggio:</label>

          <!-- <select if="parking" name="parking" class="form-select my-2" aria-label="Default select example">
            <option selected>Qualsiasi</option>
            <option value="true">Sì</option>
            <option value="false">No</option>
          </select> -->

          <input type="checkbox" name="parking" id="parking"> 

          <label label for="parking"> Voto:</label>

          <select if="vote" name="vote" class="form-select my-2" aria-label="Default select example">
            <option selected value="0">Qualsiasi</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>

          <button type="submit">Invia</button>
        </form>

      </div>
    </div>

    <div class="row justify-content-center">

      <table class="table">

        <thead>
          <tr>
            <?php foreach ($hotels[0] as $key => $hotel): ?>

      
            <th scope="col"><?php echo ((str_contains($key, '_')) ? ucwords(str_replace('_', ' ', $key)) : ucwords($key)) ?></th>

            <?php endforeach; ?>
          </tr>
        </thead>

        <tbody>


          <?php foreach ($filteredHotels as $hotel): ?>

              <tr>
                <td><?php echo $hotel['name'] ?></td>
                <td><?php echo $hotel['description'] ?></td>
                <td><?php echo ($hotel['parking'])? 'Sì' : 'No' ?></td>
                <td><?php echo $hotel['vote'] ?> / 5</td>
                <td><?php echo $hotel['distance_to_center'] ?> km</td>
              </tr>
          


          <?php endforeach; ?>




        </tbody>

      </table>

      

    </div>

  </div>

</body>
</html>