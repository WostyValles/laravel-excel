<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>index.php</title>
    <style media="screen">
        body{
            background: gray;
        }
        h1{
            text-align: center;
            color: black;
            font-family: Arial, Helvetica, sans-serif;
            border-style: dotted dashed solid double;
            border-width: 5px 1px;

        }
      div
      { 
        text-align: center;
      }
      h2{
        color: black ;
       
      }

    </style>
</head>
<body>
    <h1> Tarea Arreglos de TP2</h1>
    <div><form action="media_aritmetica.php" method="post">
        <h2>Ingresar programa #1</h2>
        <button type="submit" class="btn btn-outline-info">Ingresar #1</button>
    </form>
 <br></b>
    <form action="serie.php" method="post">
        <h2>Ingresar programa #2</h2>
        <button type="submit" class="btn btn-outline-info">Ingresar #2</button>
    </form>
<br></br>
    <form action="frase.php" method="post">
        <h2>Ingresar programa #3</h2>
        <button type="submit" class="btn btn-outline-info">Ingresar #3</button>
    </form>
</div>

</body>
</html>