<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Calculo de litros</title>
</head>
<body>
  
        <h1 class="titulo">Cálculo de litros</h1>

<form  method="POST">
   <div class="inputs">
            <p class="inputN">
             Tempo de viagem em H: <input class="inputR" type="number" name="tempo" />
            </p>
            <p class="inputN">
             Velocidade média: <input class="inputR" type="number" name="velocidade" />
            </p>
            </div>
        <button class="res">Calcular</button> <br>
        
        <?php
      if(isset($_POST['tempo']) || isset($_POST['velocidade'])){
        $tempo = $_POST['tempo'];
        $velocidade = $_POST['velocidade'];
        $distancia = $tempo*$velocidade;
        $litros = $distancia/12;

        echo "<p>Foram gastos $litros litros de 
        gasolina em $tempo horas, na distância de $distancia KM, na velocidade media de $velocidade KM. </p>";
      }
            
         ?>
        </form>
        </div>
</body>
</html>