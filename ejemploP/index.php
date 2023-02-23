<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      max-width: 1500px;
      margin: auto;
      background-color: #b6bbb6;
    }

    h2 {
      text-align: center;
      background-color: #4CAF50;
      color: #ffffff;
      margin: 20px 200px;
    }

    table {
      border-collapse: collapse;
      width: auto;
      margin: auto;
    }

    th,
    td {
      text-align: left;
      padding: 8px;
    }

    th {
      background-color: #4CAF50;
      color: white;
    }
/* Es para el color saltado */
    tr:nth-child(even) {
      background-color: #f2f2f2
    }
/* Es para el color saltado */
    tr:nth-child(odd) {
      background-color: #bec7be
    }
  </style>
  <title>Nota</title>
</head>

<body>
  <?php
    $p_aceite = 14.5;
    $c_aceite = 3;
    $t_aceite = $p_aceite*$c_aceite;
    $p_ceraeal = 28.5;
    $c_cereal = 1;
    $t_cereal = $c_cereal*$p_ceraeal;
    $p_aromatizante = 18.9;
    $c_aromatizante = 2;
    $t_aromatizante = $c_aromatizante*$p_aromatizante;
    $p_cerillos = 6.5;
    $c_cerillos = 1;
    $t_cerillos=$c_cerillos*$p_cerillos;
    $sub = $t_aceite+$t_aromatizante+$t_cereal+$t_cerillos;
    $iva = $sub*0.16;
    $total = $sub + $iva;
  ?>
  <h2>Abarrotes "El baratero"</h2>
  <table id="tabla">
    <tr>
      <th>Cantidad</th>
      <th>Descripción</th>
      <th>Precio unitario</th>
      <th>Precio</th>
    </tr>
    <tr>
      <!-- Cantida de aceite primera columna -->
      <td> <?php print($c_aceite)?> </td>
      <!-- segunda columna Descripción-->
      <td>Aceite "Grasoso pero sabroso" (1 Lt)</td>
      <!-- tercera columna precio -->
      <td><?php print('$'.$p_aceite)?></td>
      <!-- total del precio se llama directo del php original creado antes -->
      <td><?='$'.$t_aceite?></td>
    </tr>
    <tr>
      <td><?php print($c_cereal)?></td>
      <td>Cereal "FresiCorn" (750grs)</td>
      <td><?php print('$'.$p_ceraeal)?></td>
      <!-- esto funciona como un print-->
      <td><?='$'.$t_cereal?></td>

    </tr>
    <tr>
      <td><?php print($c_aromatizante)?></td>
      <td>Aromatizante "Oloroso" (750 ml)</td>
      <td><?php print('$'.$p_aromatizante)?></td>
      <td><?='$'.$t_aromatizante?></td>
    </tr>
    <tr>
      <td><?php print($c_cerillos)?></td>
      <td>Cerillos "Lámpara sin luz" (caja 100 cerillos)</td>
      <td><?php print('$'.$p_cerillos)?></td>
      <td><?='$'.$t_cerillos?></td>
    </tr>
    <tr>
      <td colspan="3" style="text-align: right">SUB TOTAL</td>
      <td><?='$'.$sub?></td>
    </tr>
    <tr>
      <td colspan="3" style="text-align: right">IVA</td>
      <td><?='$'.$iva?></td>
    </tr>
    <tr>
      <td colspan="3" style="text-align: right">TOTAL</td>
      <td><?='$'.$total?></td>
    </tr>

  </table>

</body>

</html>