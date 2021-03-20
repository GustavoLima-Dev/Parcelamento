<?php
header("Content-type:text/html; charset=utf8");

$parcela = "";
$total = 0.00;
$valor = 1200;
$precoParcela = 0.00;

if(isset($_POST["comprar"])){
  $parcela = $_POST["opcao"];
}else{
    header("location:index (4).html");
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <style>
      img{height:500px;
        width:500px;
      }
        body{
            margin: 0;
        }
        th{
          padding:10px;
          background-color:#add8e6;
        }
     #container   table{
          border:2px;
          color:blue;
          border-color:#add8e6;
        }
        #container{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 400px;
  margin: 0 auto;
  padding: 30px;
  box-sizing: border-box;
  display: block;
  margin-inline-start: 2px;
  margin-inline-end: 2px;
  padding-block-start: 0.35em;
  padding-inline-start: 0.75em;
  padding-inline-end: 0.75em;
  padding-block-end: 0.625em;
  min-inline-size: min-content;
        }
        table{
          width:100%;
        }
    </style>
</head>
<body>
  <img src="dev3.jpg">
  <div id="container">
  <table border="2px">
    <tr>
        <th>Parcelas</th>
        <th>Preço Parcela</th>
        <th>Desconto</th>
        <th>Total:</th>
    </tr>
  <?php for($x = 1;$x <= 12;$x++){?>
  <tr>
  <td><?php 
  if($x == $parcela){
  echo "Selecionado $x";
  }else{
    echo $x;
  }
  ?>
  </td>
  <td><?php 
    if($x == 1){
      $total = $valor * 0.90;
      $precoParcela = $total / $x;
      echo number_format($precoParcela,2);
    }
    else  if($x == 11){
      $total = $valor * 1.292;
      $precoParcela = $total / $x;
      echo number_format($precoParcela,2);
    }else if($x == 12){
      $total = $valor * 1.292;
      $precoParcela = $total / $x;
      echo $precoParcela;
    }else{
      $total =$valor;
    $precoParcela = $valor / $x;
    echo number_format($precoParcela,2);
    }
    ?></td>
    <td><?php 
      if($x == 1){echo "Avista você ganha 10% de desconto";}
      else if($x == 11){echo "11 Parcelas com juros de 2.92%";}
      else if($x == 12){echo "12 Parcelas com juros de 2.92%";}
      else{echo"sem juros";}
    ?> </td>

  <td><?php 
    echo $total;
    ?></td>
</tr>
  <?php } ?>

</table>
<form action="index (4).html">
<button type="submit">Voltar</button>
</form>
</div>
</body>
</html>