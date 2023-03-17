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
        <label for="name">name</label>
        <input type="text" name="name" id="name">

        <label for="userName">userName</label>
        <input type="text" name="userName" id="userName">

        <label for="email">email</label>
        <input type="email" name="email" id="email">

        <label for="age">edad</label>
        <input type="number" name="age" id="age">


        <button name="btnEnviarDato" type="submit">enviar</button>
    </form>
</body>
</html>