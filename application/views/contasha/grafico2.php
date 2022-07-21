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
        text: 'Participação dos regimes de financiamento (HF) nos gastos com funções de cuidados de saúde (HC) – Brasil (2019)'
    },
    xAxis: {
        categories: ['HC 1 - Atenção curativa', 'HC 2 - Atendimentos de reabilitação', 'HC 3 - Cuidados de longo prazo', 'HC 4 - Atividades complementares de diagnóstico e tratamento', 'HC 5 - Medicamentos e artigos médicos', 'HC 6 - Atividades de prevenção, promoção evigilância emsaúde','HC 7 - Gestão e regulação do sistema de saúde', 'Todas as funçoes' ]
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
        name: 'HF 1',
        data: [10.7, 18.0, 18.74, 9.57, 87.7, 3.0,0.0,25.7]
    }, {
        name: 'HF 2',
        data: [36.9,40.7,50.7,46.0,87.7,7.4,64.4,32.1]
    }, {
        name: 'HF 3',
        data: [52.5,41.4,30.6,44.5,10.0,89.6,35.6,42.2]
    }]
});

</script>