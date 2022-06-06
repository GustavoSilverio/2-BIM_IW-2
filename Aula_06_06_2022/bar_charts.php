<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bar Graphic</title>
</head>
<body>
<div id="barchart_material" style="width: 900px; height: 500px;"></div>

<?php
$d1= [10,52,45,54,25,93];
$d2= [15,66,45,30,45,60,];
$d3= [10,78,92,45,60,65,];
$ano= [2014,2015,2016,2017,2018, 2019];
$tam_d1= count($d1);
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Ano', 'Vendas', 'Despesas', 'Lucro'],
          <?php
          for($i=0;$i <$tam_d1; $i++){
              ?>
                 ['<?= $ano[$i]?>', <?= $d1[$i]?>, <?=$d2[$i] ?>, <?=$d3[$i] ?>],
              <?php
          }
          ?>
        ]);

        var options = {
          chart: {
            title: 'Performance da companhia',
            subtitle: 'Vendas, Despesas, e Lucro: 2014-2018.'
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
</body>
</html>