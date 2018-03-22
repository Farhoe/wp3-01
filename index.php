<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>čtvereček</title>
  </head>
  <body>
    <h1>Čtvereček</h1>

    <?php
    define('PI',3.14);
    $r=50;
    $obvod= 2*PI*"$r";
    ?>
    <p> Poloměr : <?php echo $r  ?> </p>
    <p> Obvod kruhu : O = <?php echo "2 * PI * r =  2 * " . PI . " * $r " ?> = <?php echo $obvod ?></p>

    <div style= "width: <?php echo $obvod ?>px ; height: <?php echo $obvod ?>px ; border-radius:1000px;display:circle; background:#F00;">
    </div>

  </body>
</html>
