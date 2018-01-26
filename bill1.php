<?php
$rice=$_REQUEST['quantitybox1'];
$wheat=$_POST['quantitybox2'];
$bajra=$_POST['quantitybox3'];
$rajma=$_POST['quantitybox4'];
$moong=$_POST['quantitybox5'];
$peas=$_POST['quantitybox6'];
$dal=$_POST['quantitybox7'];
$turdal=$_POST['quantitybox8'];
$channa=$_POST['quantitybox9'];
$maize=$_POST['quantitybox10'];
$rice1=$_POST['totalbox1'];
$wheat1=$_POST['totalbox2'];
$bajra1=$_POST['totalbox3'];
$rajma1=$_POST['totalbox4'];
$moong1=$_POST['totalbox5'];
$peas1=$_POST['totalbox6'];
$dal1=$_POST['totalbox7'];
$turdal1=$_POST['totalbox8'];
$channa1=$_POST['totalbox9'];
$maize1=$_POST['totalbox10'];
$total=$_POST['total1'];
$total1=$_POST['total2'];
?>
<html>
<body>
<button style="float: right;" onclick="billprint()"> <b>Print</b></button>
<p align="center" style="font-size: 36px"> Smart Grocery Shop</p>
<p align="center" style="font-size: 20px">Smart Shop For Smart Buyers</p>

<div style="border: 2px; border-color: black; background-color:#d8fec9; " align="center">
<table  align="center" cellpadding="1px" cellspacing="5.5px" style="font-size: 20px">
	<tr>
		<th>No.</th>
		<th>Product</th>
		<th>Quantity(KG)</th>
		<th>Amount</th>
		</tr>
		<tr>
			<td>1</td>
			<td>Rice</td>
			<td><?=$rice?></td>
			<td><?=$rice1?></td>
		</tr>
		<tr>
			<td>2</td>
			<td>Wheat</td>
			<td><?=$wheat?></td>
			<td><?=$wheat1?></td>
		</tr>
		<tr>
			<td>3</td>
			<td>Bajra</td>
			<td><?=$bajra?></td>
			<td><?=$bajra1?></td>
		</tr>
		<tr>
			<td>4</td>
			<td>Rajma</td>
			<td><?=$rajma?></td>
			<td><?=$rajma1?></td>
		</tr>
		<tr>
			<td>5</td>
			<td>Moong</td>
			<td><?=$moong?></td>
			<td><?=$moong1?></td>
		</tr>
		<tr>
			<td>6</td>
			<td>Peas</td>
			<td><?=$peas?></td>
			<td><?=$peas1?></td>
		</tr>
		<tr>
			<td>7</td>
			<td>Dal</td>
			<td><?=$dal?></td>
			<td><?=$dal1?></td>
		</tr>
		<tr>
			<td>8</td>
			<td>Tur dal</td>
			<td><?=$turdal?></td>
			<td><?=$turdal1?></td>
		</tr>
		<tr>
			<td>9</td>
			<td>Channa</td>
			<td><?=$channa?></td>
			<td><?=$channa1?></td>
		</tr>
		<tr>
			<td>10</td>
			<td>Maize</td>
			<td><?=$maize?></td>
			<td><?=$maize1?></td>
		</tr>
		
		<hr/>
			<td colspan="2"><strong><b>Total</b></strong></td>
			<td><b><?=$total?></b></td>
			<td><b><?=$total1?></b></td>
		
		
</table>
</div>

<p align="center" style="font-size: 20px"> Thank You for Shopping at Smart Grocery Shop</p>
<p align="center" style="font-size: 20px">Visit Again!</p>
<p align="center" style="font-size: 20px">Call us at:02162 252 589</p>
<script>
	function billprint(){
		window.print();
	}
</script>
</body>
</html>