<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>
<body>
    <h3>Formulário:</h3>

    <form action="dados.php" method="POST" >

         <p>Nome:<br>
            <input type="text" name="nome">
        </p>
    

        <p>Idade:<br>
            <input type="number" name="idade">
        </p>

        <p>Telemóvel:<br>
            <input type="number" name="telemovel">
        </p>

        <p>Horas semanais:<br>
            <input type="number" name="horas_sema">
        </p>

        <p>Dias da semana:<br>
            <input type="number" name="dia_semana">
        </p>

        <p>Preço por hora:<br>
            <input type="number" name="preco_hora">
        </p>
   

    <input type="submit" name="enviar">
    </form>
   
</body>
</html>