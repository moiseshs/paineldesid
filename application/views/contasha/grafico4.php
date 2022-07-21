</br>
</br>
</br>

<main >
	<div class="container">
		<div class="row">
			<div class="col">
				<figure class="highcharts-figure">
					<div id="container" class="border"></div>
				</figure>
			</div>
		</div>
	</div>
</br>
	<div class="container">
	
	</div>
</main>

<script>
	Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Gastos em saúde de países selecionados, segundo serviços e bens consumidos (Em %)'
    },
    xAxis: {
        categories: ['Brasil', 'Portugal', 'Grécia', 'Reino Unido', 'EU27']
    },
    yAxis: {
        min: 0,
        title: {
            text: ''
        }
    },
    tooltip: {
        pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
        shared: true
    },
    plotOptions: {
        column: {
            stacking: 'percent',
            dataLabels: {
                enabled: true
            }
        }
    },
    series: [{
        name: 'Internações',
        data: [5.0,3.8,2.9,9.5,5.4]
    }, {
        name: 'Atendimentos ambulatoriais',
        data: [23.2,19.0,29.7,14.7,21.1]
    }, {
        name: 'LTC',
        data: [2.1,4.9,2.2,17.9,11.9]
    }, {
        name: 'Medicamentos',
        data: [44.6,46.5,21.5,30.2,31.4]
    }, {
        name: 'Cuidados coletivos',
        data: [25.2,25.8,43.7,27.7,30.1]
    }]
});

</script>