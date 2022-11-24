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
    <link rel="stylesheet" href="css/style.css">
    <title>PHP-Hello</title>
</head>
<body>
    <h1><?php echo $userpara ?></h1>
    <h4> Il paragrafo che hai scritto ha  <?php echo  strlen($userpara); ?> parole. </h4>
    <hr>
    <h4>Ecco il paragrafo censurato</h4>
    <h1><?php echo str_replace($usercensored, "***", $userpara); ?></h1>


</body>
</html>