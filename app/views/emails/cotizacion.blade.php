<!DOCTYPE html>
<html style="margin: 0;padding: 0;border: 0;font-size: 20px;">
<head style="margin: 0;padding: 0;border: 0;font-size: 20px;">
	<meta charset="utf-8" style="margin: 0;padding: 0;border: 0;font-size: 20px;">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" style="margin: 0;padding: 0;border: 0;font-size: 20px;">
	<title style="margin: 0;padding: 0;border: 0;font-size: 20px;"></title>
	<link rel="stylesheet" href="" style="margin: 0;padding: 0;border: 0;font-size: 20px;">
	
	<style type="text/css" media="screen" style="margin: 0;padding: 0;border: 0;font-size: 20px;">
		*{
			margin: 0;
			padding: 0;
			border:0;
			font-size: 20px;
		}	
		.contenedor{
			width: 75%;
			margin: 10% auto;
			text-align: center;
		}
		.head 
		{
			width: 100%;
		}
		.body{
			border-top: 2px solid #666;
			padding: 20px;
		}
		.body p {
			margin: 10px auto;
			padding: 5px;
		}

		.head img {
			height: 200px;
			width: 100%;
		}
		.table {
			width: 100%;
			border: 1px solid;
		}
	</style>
</head>
<body style="margin: 0;padding: 0;border: 0;font-size: 20px;">
	<div class="contenedor" style="margin: 10% auto;padding: 0;border: 0;font-size: 20px;width: 75%;text-align: center;">
		<div class="head" style="margin: 0;padding: 0;border: 0;font-size: 20px;width: 100%;">
				<img src="https://dl.dropboxusercontent.com/u/61124746/h1.jpg" alt="" style="margin: 0;padding: 0;border: 0;font-size: 20px;height: 200px;width: 100%;">
			
		</div>
		<div class="body" style="margin: 0;padding: 20px;border: 0;font-size: 20px;border-top: 2px solid #666;">
			<h1 style="margin: 0;padding: 0;border: 0;font-size: 20px;">COTIZACIÓN</h1>

			<p style="margin: 10px auto;padding: 5px;border: 0;font-size: 20px;">
				Tu cotización se ha proccesado exitosamente, acontinuación el detalle de la cotización
			</p>

			<hr style="margin: 0;padding: 0;border: 0;font-size: 20px;">

			<table class="table" style="margin: 0;padding: 0;border: 1px solid;font-size: 20px;width: 100%;">
				
				<thead style="margin: 0;padding: 0;border: 0;font-size: 20px;">
					<tr style="margin: 0;padding: 0;border: 0;font-size: 20px;">
						<th style="margin: 0;padding: 0;border: 0;font-size: 20px;">Articulo</th>
						<th style="margin: 0;padding: 0;border: 0;font-size: 20px;">Vlr. Unitario</th>
						<th style="margin: 0;padding: 0;border: 0;font-size: 20px;">Cantidad</th>
						<th style="margin: 0;padding: 0;border: 0;font-size: 20px;">TOTAL</th>
					</tr>
				</thead>
				<tbody style="margin: 0;padding: 0;border: 0;font-size: 20px;">
					@foreach($prod as $p)
						<tr style="margin: 0;padding: 0;border: 0;font-size: 20px;">
							<td style="margin: 0;padding: 0;border: 0;font-size: 20px;">{{$p->ProNom}}</td>
							<td style="margin: 0;padding: 0;border: 0;font-size: 20px;">{{number_format($p->ProPre, 0, '', '.')}}</td>
							<td style="margin: 0;padding: 0;border: 0;font-size: 20px;"> {{$p->CotProCan}}</td>
							<td style="margin: 0;padding: 0;border: 0;font-size: 20px;">$ {{number_format($p->TotalPro, 0, '', '.')}}</td>
						</tr>
					@endforeach	
				</tbody>
			</table>
			<p style="margin: 10px auto;padding: 5px;border: 0;font-size: 20px;">
				VALOR TOTAL : {{number_format($compra->TotalCot, 0, '', '.')}}
			</p>
			
		</div>
		
	</div>
	
</body>
</html>