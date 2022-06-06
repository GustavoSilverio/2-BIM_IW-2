<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div id="curve_chart" style="width: 900px; height: 500px"></div>

<?php
$dados = [15,30,25,56,45, 80];
$mes = ['Jan','Fev', 'Mar', 'Abr', 'Mai', 'Jun'];
$tam = count($dados);


?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Sales'],
          <?php
          for($i=0; $i <$tam; $i++){
            ?>
             ['<?= $mes[$i]?>',  <?= $dados[$i]?>],
            <?php
          }
          
          ?>
          ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
</body>
</html>