<!DOCTYPE html>
<html>
<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="utf-8">
    <title>Chitanta #{id_plata}</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
	<style>
			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}

			/** RTL **/
			.invoice-box.rtl {
				direction: rtl;
				font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
			}

			.invoice-box.rtl table {
				text-align: right;
			}

			.invoice-box.rtl table tr td:nth-child(2) {
				text-align: left;
			}
		</style>
</head>
<body>
<?php
$this->load->model("courses_model");
$chitante=$this->courses_model->get_chitanta_by_id(1);
//print_r($chitante[0]->nume); exit;
 echo '
<div class="invoice-box">
			<table cellpadding="0" cellspacing="0">
				<tr class="top">
					<td colspan="2">
						<table>
							<tr>
								<td class="title">
									
								</td>

								<td>
									Chitanta #: '.$chitante[0]->id_plata.' <br />
									Data:'.$chitante[0]->data_plata.' <br />
									
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								

								<td>
									Facultatea X<br />
									<br />
									mail@facultateaX.com
								</td>
						
							</tr>
						</table>
					</td>
				</tr>
<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								

								
								<td>
									Nume si prenume student:<br />
									<br />	'.$chitante[0]->nume.'<br /> '.$chitante[0]->prenume.'	</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr class="heading">
					<td>Metoda plata</td>

					<td></td>
				</tr>

				<tr class="details">
					<td>Numerar</td>

					<td>'.$chitante[0]->suma.'</td>
				</tr>

				<tr class="heading">
					<td>Taxa</td>

					<td>Pret</td>
				</tr>

				<tr class="item">
					<td>Taxa scolarizare</td>

					<td>'.$chitante[0]->suma.'</td>
				</tr>

				

				<tr class="total">
					<td></td>

					<td>Total: '.$chitante[0]->suma.'</td>
				</tr>
			</table>
		</div>
</body>
</html>'
?>