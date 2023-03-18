<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Types of inputs</title>
</head>
<body>
    <form action="server.php" method="post" enctype="multipart/form-data">
        <label for="nombre">input simple</label>
        <input type="text" name="nombre" id="nombre">
        <br>

        <label >input tipo arreglos</label>
        <input type="text" name="personas[]">
        <input type="text" name="personas[]">
        <input type="text" name="personas[]">
        <input type="text" name="personas[]">
        <br>

        <label>arreglos asociativos</label>
        <input type="text" name="persona[nombre]">
        <input type="email" name="persona[email]">
        <input type="number" name="persona[edad]">
        <br>

        <label>checbox</label>
        <input type="checkbox" name="list1" value="el valor 1 se le dio click" >
        <input type="checkbox" name="list2" value="el valor 2 se le dio click" >
        <input type="checkbox" name="list3" value="el valor 3 se le dio click" >
        <br>

        <label>radios</label>
        <input type="radio" name="pais" value="EEUU">
        <input type="radio" name="pais" value="COLOMBIA">
        <input type="radio" name="pais" value="PERU">
        <button type="submit">enviar</button>

        <h4>multiples archivos</h4>
        <label for="galeria">cargar multiples imagenes</label>
        <input type="file" multiple name="galeria[]" id="galeria">
    </form>
</body>
</html>