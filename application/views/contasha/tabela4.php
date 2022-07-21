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
					<th scope="col">Regimes de financiamento </th>
					<th scope="col">2015</th>
					<th scope="col">2016</th>
					<th scope="col">2017</th>
					<th scope="col">2018</th>
					<th scope="col">2019</th>
		
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>SUS1(HF 1.1) </td>
					<td>1.083,39</td>
					<td>1.154,19</td>
					<td>1.202,92</td>					
					<td>1.244,11</td>					
					<td>1.319,98</td>					
				</tr>
				<tr>
					<td>Saúde suplementar2(HF 2.1) </td>
					<td>2.977,26</td>
					<td>3.504,15</td>
					<td>3.871,06</td>					
					<td>4.159,01</td>					
					<td>4.485,49</td>					
				</tr>
				<tr>
					<td>Desembolso direto3(HF 3.1) </td>
					<td>623,89</td>
					<td>669,19</td>
					<td>713,75</td>					
					<td>762,95</td>					
					<td>814,09</td>					
				</tr>				
				<tr>
					<th>Total </th>
					<th>2.613,34</th>
					<th>2.801,94</th>
					<th>3.016,02</th>					
					<th>3.179,57</th>					
					<th>3.380,62</th>					
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
        text: 'Gastos anuais per capita em saúde, segundo regime de financiamento – Brasil (2015-2019)'
    },
    subtitle: {
        text: '(Em R$ correntes)'
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
        name: 'Desembolso direto3(HF 3.1)',
        data: [623.89,669.19, 713.75, 762.95, 814.09],
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'lefth',
            format: 'R$ {point.y:.2f}', // one decimal
            y: 3, // 10 pixels down from the top
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }


    }, {
        name: 'Saúde suplementar2(HF 2.1)',
        data: [2977.26, 3504.15, 3871.06, 4159.01, 4485.49],
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            format: 'R$ {point.y:.2f}', // one decimal
            y: 37, // 10 pixels down from the top
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }

    }, {
        name: 'SUS1(HF 1.1)',
        data: [1083.39, 1154.19, 1202.92, 1244.11, 1319.98],
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'lefth',
            format: 'R$ {point.y:.2f}', // one decimal
            y: 37, // 10 pixels down from the top
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }

    }]
});
</script>