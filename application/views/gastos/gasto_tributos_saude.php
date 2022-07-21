<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<div class="container">
	<div class="row">
		<div class="col">
		<figure class="highcharts-figure">
		<div id="container" class="border"></div>
		</figure>
		</div>
	</div>
	<div class="table-responsive">

		<table id="datatable" class="display">
    <thead>
        <tr>
            	<th scope="col">Ano</th>
				<th scope="col">IRPJ</th>
				<th scope="col">IPRF</th>
        </tr>
    </thead>
    <tbody>
      <?php		
				foreach($admin as $gastos){
					echo "<tr>";
					echo "<td>".$gastos->ano."</td>";				
					echo "<td>R$: ".number_format(str_replace('.', '', floatval($gastos->irpj)),0,",",".")."</td>";
					echo "<td>R$: ".number_format(str_replace('.', '', floatval($gastos->irpf)),0,",",".")."</td>";
					echo "</tr>";
				}
				?>
    </tbody>
</table>


		
	</div>
	</main>
</div>
</div>

<script>
	Highcharts.chart('container', {
		chart: {
			type: 'column'
		},
		title: {
			text: 'Gasto Administrativos'
		},
		subtitle: {
			text: 'Desid'
		},
		xAxis: {
			categories: [
			<?php 
			foreach($admin as $gastos){
			echo "'".$gastos->ano."',";
			}
			?>
			],
			crosshair: true
		},
		yAxis: {
			min: 0,
			title: {
				text: 'Gastos Brasil'
			}
		},
		tooltip: {
			headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
			pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
			'<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
			footerFormat: '</table>',
			shared: true,
			useHTML: true
		},
		plotOptions: {
			column: {
				pointPadding: 0.2,
				borderWidth: 0
			}
		},
		series: [{
		name: 'Público',
		data: [
			<?php
				foreach($admin as $gastos){
				echo "".floatval($gastos->irpj).",";
				}
			?>
		]
		},  {
		name: 'Privado',
		data: [
			<?php
			foreach($admin as $gastos){
				echo "".floatval($gastos->irpf).",";
			}
			?>
		]
		}]
	});

</script>
	<script>
	$(document).ready(function () {
	$('#example').DataTable();
	});
</script>



