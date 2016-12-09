function calculator(){
	var num1 = document.getElementById("num1").value;
	var num2 = document.getElementById("num2").value;
	var oprt = document.getElementById("operator").value;

	if(oprt == '+')
		var result = parseFloat(num1) + parseFloat(num2);
	else if(oprt == '-')
		var result = parseFloat(num1) - parseFloat(num2);
	else if(oprt == 'x')
		var result = parseFloat(num1) * parseFloat(num2);
	else
		var result = parseFloat(num1) / parseFloat(num2);

	document.getElementById("result").value = result;

	return [num1, oprt, num2, result];
}

function calculator2(){
	var num1 = $("#num1").val();
	var num2 = $("#num2").val();
	var oprt = $("#operator").val();

	if(oprt == '+')
		var result = parseFloat(num1) + parseFloat(num2);
	else if(oprt == '-')
		var result = parseFloat(num1) - parseFloat(num2);
	else if(oprt == 'x')
		var result = parseFloat(num1) * parseFloat(num2);
	else
		var result = parseFloat(num1) / parseFloat(num2);

	$("#result").val(result);

	return [num1, oprt, num2, result];	
}

function addHistory(){
	var result = calculator();

	var theTable = document.getElementById('tabel_riwayat').getElementsByTagName('tbody')[0];
	var newRow = theTable.insertRow(-1); // tr
	var num1 = newRow.insertCell(0); // td
	var oprt = newRow.insertCell(1); // td
	var num2 = newRow.insertCell(2); // td
	var res = newRow.insertCell(3); // td

	var txtNum1 = document.createTextNode(result[0]);
	var txtOprt = document.createTextNode(result[1]);
	var txtNum2 = document.createTextNode(result[2]);
	var txtres = document.createTextNode(result[3]);
	
	num1.appendChild(txtNum1);
	oprt.appendChild(txtOprt);
	num2.appendChild(txtNum2);
	res.appendChild(txtres);
}

function addHistory2(){
	var result = calculator2();
	$("#tabel_riwayat").append('<tr><td>'+result[0]+'</td><td>'+result[1]+'</td>'+
														 '<td>'+result[2]+'</td><td>'+result[3]+'</td><tr>');
}