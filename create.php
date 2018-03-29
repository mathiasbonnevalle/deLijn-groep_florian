<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php require('_header.php');?>
<main>
    <form action="create.code.php" method="post">
        <div>
            <label for="nr">Nr:</label>
            <input type="text" id="nr" name="nr">
        </div>
        <div>
            <label for="omschrijving">Omschrijving:</label>
            <input type="text" id="omschrijving" name="omschrijving">
        </div>
        <div>
            <label for="parkride">Nr:</label>
            <select name="parkride" id="parkride">
                <option value="1">PR bla</option>
                <option value="2">PR bla2</option>
                <option value="3">PR bla3</option>
            </select>
        </div>
        <div>
            <label for="type">Nr:</label>
            <select name="type" id="type">
                <option value="1">tram</option>
                <option value="2">bus</option>
                <option value="3">trein</option>
                <option value="4">trolleybus</option>
            </select>
        </div>
        <div>
            <input type="submit" name="submit" value="create">
        </div>
    </form>
</main>
</body>
</html>