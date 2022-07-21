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
					<th scope="col">Regimes de financiamento</th>
					<th scope="col">2015</th>
					<th scope="col">2016</th>
					<th scope="col">2017</th>
					<th scope="col">2018</th>
					<th scope="col">2019</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td> HF 1 – Governamentais e de seguro social obrigatório </td>
					<td> 231470.66</td>
					<td> 247761.30</td>
					<td> 260701.30</td>
					<td> 272948.12</td>
					<td> 290392.14</td>
				</tr>
				<tr>
					<td> HF 2 – Planos, seguros e outros regimes privados voluntários </td>
					<td> 155486.37</td>
					<td> 175978.58</td>
					<td> 191476.69</td>
					<td> 205404.41</td>
					<td> 221237.07</td>
				</tr>
				<tr>
					<td> HF 3 – Pagamento direto do bolso das famílias  </td>
					<td> 129550.45</td>
					<td> 140378.16</td>
					<td> 152613.17</td>
					<td> 164572.94</td>
					<td> 176753.24</td>
				</tr>
				<tr>
					<td> Não identificados (HF 0) </td>
					<td> 15243.21</td>
					<td> 10717.61</td>
					<td> 18936.05</td>
					<td> 19998.95</td>
					<td> 22044.91</td>
				</tr>
			</tbody>
		</table>
		<div>  
			<td colspan=6>
				Fontes: Ministério da Saúde, Ministério da Educação, Ministério da Economia, Senado Federal, Agência Nacional de Saúde
				Suplementar, IBGE e sistemas de informações orçamentário-financeiras de governos estaduais. Para mais informações,
				ver quadro B.1 no apêndice B.
				Elaboração a partir da metodologia das Contas SHA 2011 (OECD, Eurostat e WHO, 2017) 
			</td>
		</div>
	</div>
</main>

<script>
	Highcharts.chart('container', {
		data: {
			table: 'datatable'
		},
		chart: {
			type: 'column'
		},
		title: {
			text: 'Gastos em saúde segundo regimes de financiamento SHA 2011 – Brasil (2015-2019) (Em R$ milhões correntes)'
		},
		yAxis: {
			allowDecimals: false,
			title: {
				text: 'Units'
			}
		},
		tooltip: {
			formatter: function () {
			return '<b>' + this.series.name + '</b><br/>R$ ' +
			this.point.y + '  -  ' + this.point.name.toLowerCase();
			}
		}
	});
</script>