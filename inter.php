<?php 
$userpara = $_GET["userpara"];
$usercensored = $_GET["usercensored"]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Hello</title>
</head>
<body>
    <h1><?php echo $userpara ?></h1>
    <h4> Il paragrafo che hai scritto ha  <?php echo  strlen($userpara); ?> parole. </h4>
    <hr>
    <h1>Ecco il paragrafo censurato</h1>
    <h4><?php echo str_replace($usercensored, "***", $userpara); ?></h4>
</body>
</html>