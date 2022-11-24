<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Hello</title>
</head>
<body>
    <form action="inter.php" method="GET">
        <label for="paragrafo">Scrivi un paragrafo</label>
        <textarea name="userpara" id="paragrafo" cols="30" rows="10"></textarea>
        <hr>
        <label for="censura">Scrivi la parola da censurare</label>
        <input type="text" id="censura" name="usercensored">
    <button type="submit">Submit</button>
    </form>
</body>
</html>