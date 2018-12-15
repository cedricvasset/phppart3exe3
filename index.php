<?php
$var1 = 100;
$var2 = 44;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>php part3 ex3</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <?php while($var1 > 10){ ?>
    <p><?= $var1 * $var2 ?></p>
    <?php
    $var1-- ;
  }
  ?>

  <!--  <?php for($var1 = 100 , $var2 = 44 ; $var1 > 10 ; $var1 -- ) { ?>
  <p><?= $var1 * $var2 ?></p>
<?php } ?>-->
</body>
</html>
