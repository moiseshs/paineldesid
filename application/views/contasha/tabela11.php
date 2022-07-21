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
		<table id="datatable" class="table table-striped table-bordered" style="width:100%">
			<thead>
				<tr style="color: #fff; background: #87CEEB;">
					<th scope="col">Ano</th>
					<th scope="col">HF 1.1 – SUS – Órgãos de saúde</th>
					<th scope="col">HF 1.1 – MEC – Hospitais universitários e similares</th>
					<th scope="col">HF 1.1.2+1.2 – Regimes servidores públicos</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>2015 </td>
					<td>92.4</td>
					<td>2.8</td>
					<td>4.8</td>					
				</tr>
				<tr>
					<td>2016</td>
					<td>92.5</td>
					<td>3.0</td>
					<td>4.4</td>					
				</tr>
				<tr>
					<td>2017</td>
					<td>92.2</td>
					<td>3.2</td>
					<td>4.6</td>					
				</tr>
				<tr>
					<td>2018</td>
					<td>91.6</td>
					<td>3.4</td>
					<td>5.0</td>					
				</tr>
				<tr>
					<td>2019</td>
					<td>92.2</td>
					<td>3.4</td>
					<td>4.5</td>					
				</tr>
				<tr style="color: #fff; background: #87CEEB;">
					<td>Média 2015-2019</td>
					<td>92.2</td>
					<td>3.2</td>
					<td>4.6</td>					
				</tr>
				
				
				
			</tbody>
		</table>	
		<div>  
			<td colspan=6>
				Fontes: Ministério da Saúde, Ministério da Educação, Ministério da Economia, Senado Federal, Agência Nacional de Saúde
				Suplementar, IBGE e sistemas de informações orçamentário-financeiras de governos estaduais. Para mais informações,
				ver quadro B.1 no apêndice B.
				Elaboração a partir da metodologia das Contas SHA 2011 (OECD, Eurostat e WHO, 2017). 
			</td>
		</div>
	</div>
</main>

<script>
	Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Despesas com saúde de regimes públicos (governamentais) (HF 1): participação institucional no período – Brasil (2015-2019)'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: [
            '2015',
            '2016',
            '2017',
            '2018',
            '2019'
            
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
           
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.02,
            borderWidth: 0
        }
    },
    series: [ /*{
        name: 'População (IBGE)',
        data: [203475683, 205156587, 206804741, 208494900, 210147125],
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            format: '{point.y:.0f}', // one decimal
            y: 10, // 10 pixels down from the top
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }

    },*/ {
        name: 'HF 1.1 - SUS',
        data: [92.4,92.5,92.2,94.6,92.2],
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            format: 'R$ {point.y:.0f}', // one decimal
            y: 4, // 10 pixels down from the top
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }


    }, {
        name: 'HF 1.1 - MEC',
        data: [2.8,3.0,3.2,3.4,3.4],
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'left',
            format: 'R$ {point.y:.1f}', // one decimal
            y: 4, // 10 pixels down from the top
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }

    }, {
        name: 'HF 1.1 - Regimes servidores públicos',
        data: [4.8,4.4,4.6,5.0,4.5],
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'left',
            format: 'R$ {point.y:.1f}', // one decimal
            y: 4, // 10 pixels down from the top
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }

    }]
});
</script>