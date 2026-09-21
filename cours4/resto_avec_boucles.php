<?php
  $nbrangee = 4;
  $nbtableparrangee = 5;
  $numeroTable = 0;
  $tablereserve1 = 17;
  $tablereserve2 = 5;
  $tablereserve3 = 19;

  
  // $k = 1;
  // for($i = 1 ; $i<=4; $i++){
  //     for($j = 1 ; $j<=5; $j++){
  //       echo " Table $k | ";
  //       $k++;
  //     }
  //     echo "<br>";
  // }

  /***
   * <table style="width: 500px; margin-left:300px" class="table table-bordered text-center">
    <!-- Parcourir les rangees -->
    <?php for($i = 1; $i <= $nbrangee; $i++){ ?>
<tr>
  <!-- Pour chaque rangee nous parcourons les tables -->
  <?php for($j=1; $j<=$nbtableparrangee; $j++){
        $numeroTable++;
        if($numeroTable == $tablereserve){

        ?>

  <td class="bg-danger">Table <?= $numeroTable ?></td>

  <?php }else{ ?>
  <td class="bg-success">Table <?= $numeroTable ?></td>


  <?php
      }
      } ?>
</tr>
<?php } ?>
</table>
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
</head>

<body>
  <h1 class="text-center my-5">Bienvenue au restaurant amoul fayy</h1>

  <table style="width: 500px; margin-left:300px" class="table table-bordered text-center">
    <!-- Parcourir les rangees -->
    <?php for($i = 1; $i <= $nbrangee; $i++){ ?>
    <tr>
      <!-- Pour chaque rangee nous parcourons les tables -->
      <?php for($j=1; $j<=$nbtableparrangee; $j++){
        $numeroTable++;
        ?>

      <td
        class=" <?= ($numeroTable == $tablereserve1 || $numeroTable == $tablereserve2 || $numeroTable == $tablereserve3) ? "bg-danger" : "bg-success" ?>">
        Table <?= $numeroTable ?></td>
      <?php } ?>
    </tr>
    <?php } ?>
  </table>
</body>

</html>