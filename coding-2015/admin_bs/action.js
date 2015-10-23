function hitung(){
	var input1 = document.getElementById('input1');
	var input2 = document.getElementById('input2');
	var operator = document.getElementById('operator');
	var hasil = document.getElementById('hasil');

	if (operator.value == '+') {
		hasil.value = parseFloat(input1.value) + parseFloat(input2.value)
	} else {
		hasil.value = parseFloat(input1.value) - parseFloat(input2.value)
	}
}

function jqHitung(){
	var input1 = $('#input1');
	var input2 = $('#input2');
	var operator = $('#operator');
	var hasil = $('#hasil');

	if (operator.val() == '+') {
		hasil.val(parseFloat(input1.val()) + parseFloat(input2.val()));
	} else {
		hasil.val(parseFloat(input1.val()) - parseFloat(input2.val()));
	}
}

function addRow(teks){
	var theTable = document.getElementById('table_tags').getElementsByTagName('tbody')[0];
	var newRow = theTable.insertRow(-1); // tr
	var newCell = newRow.insertCell(0); // td

	var theText = document.createTextNode(teks);
	newCell.appendChild(theText);
}

function jqAddRow(teks){
	$('#table_tags').append('<tr><td>'+teks+'</td></tr>');
}

function extractTags(){
	var inputTags = document.getElementById('input_tags').value;
	var tags = inputTags.split(',');

	for(var i in tags){
		jqAddRow(tags[i]);
	}
}

function total(){
	var td = document.getElementById('table_barang').getElementsByTagName('td');
	var total = 0;

	for(var i in td){
		if(td[i].className == 'harga')
			total += parseInt(td[i].innerHTML);
	}

	document.getElementById('total').innerHTML = total;
}

function jqTotal(){
	var total = 0;
	$('.harga').each(function(index){
		total += parseFloat($(this).text());
	});

	$('#total').html(total);
}