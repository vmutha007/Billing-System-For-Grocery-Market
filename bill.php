<html>
<body>
<table border="15px" align="center" cellpadding="7.7px">
<form method="POST" id="myForm" name="myForm" action="bill1.php">
<tr>
<th></th>
	<th>Product Name</th>
	<th>Rate</th>
	<th>Quantity(KG)</th>
	<th>Total</th>
</tr>
<tr>
<td><input required="" id="check1" onclick="myFunction2(1)" type="checkbox"/></td>
<td>Rice</td>
<td><input readonly id="rate1" readonly="" value="40" style="width:30px"/></td>
<td><input type="text" id="quantitybox1" name="quantitybox1" style="width: 60px" required="" disabled="" onblur="myFunction3(1)" required=""/></td>
<td><input id="totalbox1" name="totalbox1" readonly="" onblur="myFunction()"/></td>
</tr>
<tr>
<td><input id="check2" onclick="myFunction2(2)" type="checkbox"/></td>
<td>Wheat</td>
<td><input readonly id="rate2" value="45" style="width:30px"/></td>
<td><input type="text" id="quantitybox2" name="quantitybox2" disabled style="width: 60px" required="" onblur="myFunction3(2)"/></td>
<td><input id="totalbox2" name="totalbox2" readonly="" onblur="myFunction()"/></td>
</tr>
<tr>
<td><input id="check3" onclick="myFunction2(3)" type="checkbox"/></td>
<td>Bajra</td>
<td><input readonly id="rate3" value="55" style="width:30px"/></td>
<td><input type="text" id="quantitybox3" name="quantitybox3" disabled style="width: 60px" required="" onblur="myFunction3(3)"/></td>
<td><input id="totalbox3" name="totalbox3" readonly="" onblur="myFunction()"/></td>
</tr><tr>
<td><input id="check4" onclick="myFunction2(4)" type="checkbox"/></td>
<td>Rajma</td>
<td><input readonly="" id="rate4" value="70" style="width:30px"/></td>
<td><input type="text" id="quantitybox4" name="quantitybox4" disabled style="width: 60px" required="" onblur="myFunction3(4)"/></td>
<td><input id="totalbox4" name="totalbox4" readonly="" onblur="myFunction()"/></td>
</tr><tr>
<td><input id="check5" onclick="myFunction2(5)" type="checkbox"/></td>
<td>Moong</td>
<td><input id="rate5" readonly="" value="50" style="width:30px"/></td>
<td><input type="text" id="quantitybox5" name="quantitybox5" disabled style="width: 60px" required="" onblur="myFunction3(5)"/></td>
<td><input id="totalbox5" name="totalbox5" readonly="" onblur="myFunction()"/></td>
</tr>
<tr>
<td><input id="check6" onclick="myFunction2(6)" type="checkbox"/></td>
<td>Peas</td>
<td><input id="rate6" readonly="" value="20" style="width:30px"/></td>
<td><input type="text" id="quantitybox6" name="quantitybox6" disabled style="width: 60px" required=""  onblur="myFunction3(6)"/></td>
<td><input id="totalbox6" name="totalbox6" readonly="" onblur="myFunction()"/></td>
</tr>
<tr>
<td><input id="check7" onclick="myFunction2(7)" type="checkbox"/></td>
<td>Dal</td>
<td><input id="rate7" readonly="" value="75" style="width:30px"/></td>
<td><input type="text" id="quantitybox7" name="quantitybox7" disabled style="width: 60px" required="" onblur="myFunction3(7)"/></td>
<td><input id="totalbox7" name="totalbox7" readonly="" onblur="myFunction()"/></td>
</tr>
<tr>
<td><input id="check8" onclick="myFunction2(8)" type="checkbox"/></td>
<td>Tur Dal</td>
<td><input id="rate8" readonly="" value="40" style="width:30px"/></td>
<td><input type="text" id="quantitybox8" name="quantitybox8" disabled style="width: 60px" required="" onblur="myFunction3(8)"/></td>
<td><input id="totalbox8" name="totalbox8" readonly="" onblur="myFunction()"/></td>
</tr>
<tr>
<td><input id="check9" onclick="myFunction2(9)" type="checkbox"/></td>
<td>Channa</td>
<td><input id="rate9" readonly="" value="80" style="width:30px"/></td>
<td><input type="text" id="quantitybox9" name="quantitybox9" disabled style="width: 60px" required="" onblur="myFunction3(9)"/></td>
<td><input id="totalbox9" name="totalbox9" readonly="" onblur="myFunction()"/></td>
</tr>
<tr>
<td><input  id="check10" onclick="myFunction2(10)" type="checkbox"/></td>
<td>Maize</td>
<td><input id="rate10" readonly="" value="25" style="width:30px"/></td>
<td><input type="text" id="quantitybox10" name="quantitybox10" disabled style="width: 60px" required="" onblur="myFunction3(10)"/></td>
<td><input id="totalbox10" name="totalbox10" readonly="" onblur="myFunction()"/></td>
</tr>
<tr>
	<td colspan="3">Total</td>
	<td><input readonly="" id="total1" name="total1" style="width: 60px"/></td>
	<td><input readonly="" id="total2" name="total2" value=""/></td>
</tr>
<tr>
	<td colspan="5"><input style="height: 40px; width: 450px" align="middle" type="submit" value="Generate Bill" /></td>
</tr>
</form>
</table>


<script>
	function myFunction(){
		
	}
	function myFunction2(id){
		//alert(id)
		
		var z="check"+id;
		var quantity="quantitybox"+id;
			var total="totalbox"+id;
		var y=document.getElementById(z).checked;
	    
		
	if(y==true){
		document.getElementById(quantity).disabled=false;
		
	
	}	else{
		document.getElementById(quantity).disabled=true;
		document.getElementById(quantity).value="";
		document.getElementById(total).value="";
		myFunction3(id);
		
		}
			if(y=="none"){
				alert("At least select one item");
			}
	}
	function myFunction3(id){
	
		//alert(id)
		var rate="rate"+id;
		var total="totalbox"+id;
		var quantity="quantitybox"+id;
		var ratevalue=document.getElementById(rate).value;
		var quantityvalue=document.getElementById(quantity).value;
	var into = ratevalue*quantityvalue;
	document.getElementById(total).value=into;
	var tempquantity=0;
	var addition=0;
		for(var i=1;i<=10;i++){
			var quantity="quantitybox"+i;
		
		var quantityvalue=parseInt(document.getElementById(quantity).value);
		var add="totalbox"+i;
		var additionequalto=parseInt(document.getElementById(add).value);
		
		if(isNaN(quantityvalue))
		{
			
			quantityvalue=0;
		}
		if(isNaN(additionequalto))
		{
			
			additionequalto=0;
		}
			 tempquantity=(tempquantity)+(quantityvalue);
			 addition=(addition)+(additionequalto);
		}
		document.getElementById('total1').value=tempquantity;
		document.getElementById('total2').value=addition;
	}
</script>
</body>
</html>
