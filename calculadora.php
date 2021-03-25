<html>
<head>
  <title>Unidad tecnica vida nueva </title>
  <h1>SEGUNDO BACHILLERATO</h1>
  <h1>CALCULADORA</h1>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
<!--Crear una calculadora web basica que realize las 4 operaciones (suma,resta,divicion y multiplicacion) utilizando el metodo post-->
<form method="POST" action="" class="form-inline">
   <label for="numero1">numero1</label>
   <input type="text" name="num1" placeholder="ingrese numero" class="form-control" id="numero1">
   <label for="numero2">numero2</label>
   <input type="text" name="num2" placeholder="ingrese numero" class="form-control" id="numero2">
   <label for="operador">Operador</label>
   <select class="form-control" name="operador">
   <option>suma</option>
   <option>resta</option>
   <option>multiplicacion</option>
   <option>divicion</option>
   <option>potencia</option>
   </select>
   <input type="submit" value="calcular" class="btn btn-warning" name ="btn1">
   </form>
   <?php
   if(isset($_POST["btn1"]))
   {
       $num1=$_POST["num1"];
       $num2=$_POST["num2"];
       $operador=$_POST["operador"];
       switch($operador){
        case "suma": $total= $num1+$num2;
        echo "El resultado es $total";
        break;
        case "resta": $total= $num1-$num2;
        echo "El resultado es $total";
        break;
        case "multiplicacion": $total= $num1*$num2;
        echo "El resultado es $total";
        break;
        case "divicion": $total= $num1/$num2;
        echo "El resultado es $total";
        break;
        default: echo "operador no valido";
        break;
       }
   }
   ?>
</body>