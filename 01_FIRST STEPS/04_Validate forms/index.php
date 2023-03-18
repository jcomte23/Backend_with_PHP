<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate forms</title>
</head>
<body>
<form action="server.php" method="post" enctype="multipart/form-data">
        <label for="dato">input simple</label>
        <input type="text" name="dato" id="dato">
        <button name="btnEnviarDato" type="submit">enviar</button>
    </form>
</body>
</html>