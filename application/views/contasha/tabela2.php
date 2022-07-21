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
				<tr>
					<th scope="col">Ano</th>
					<th scope="col">População (IBGE)</th>
					<th scope="col">Gasto em saúde per capita (R$)</th>
					<th scope="col">Gasto em saúde (US$PPC)5</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>2015 </td>
					<td>203475683</td>
					<td>2613.34</td>
					<td>1314.02</td>					
				</tr>
				<tr>
					<td>2016 </td>
					<td>205156587</td>
					<td>2801.94</td>
					<td>1313.56</td>					
				</tr>
				<tr>
					<td>2017</td>
					<td>206804741</td>
					<td>3016.02</td>
					<td>1382.51</td>					
				</tr>
				<tr>
					<td>2018</td>
					<td>208494900</td>
					<td>3179.57</td>
					<td>1428.29</td>					
				</tr>
				<tr>
					<td>2019</td>
					<td>210147125</td>
					<td>3380.62</td>
					<td>1482.26</td>					
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
        text: 'População, gastos per capita em saúde – Brasil (2015-2019)'
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
        name: 'Gasto em saúde per capita (R$)',
        data: [2613.34, 2801.94, 3016.02, 3179.57, 3380.62],
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            format: 'R$ {point.y:.0f}', // one decimal
            y: 10, // 10 pixels down from the top
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }


    }, {
        name: 'Gasto em saúde (US$PPC)5',
        data: [1314.02, 1313.56, 1382.51, 1428.29, 1482.26],
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            format: 'R$ {point.y:.1f}', // one decimal
            y: 10, // 10 pixels down from the top
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }

    }]
});
</script>