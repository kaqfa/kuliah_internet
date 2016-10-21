function hitung(){
	var input1 = document.getElementById('inp1').value;
	var input2 = document.getElementById('inp2').value;
	var operator = document.getElementById('op').value;
	var hasil = document.getElementById('hasil');

	if (operator == '+') {
		hasil.value = parseFloat(input1) + parseFloat(input2);
	} else {
		hasil.value = parseFloat(input1) - parseFloat(input2);
	}
}

function jqHitung(){
	var input1 = $('#inp1').val();
	var input2 = $('#inp2').val();
	var operator = $('#op').val();
	var hasil = $('#hasil');

	if (operator == '+') {
		hasil.val(parseFloat(input1) + parseFloat(input2));
	} else {
		hasil.val(parseFloat(input1) - parseFloat(input2));
	}
}

function addRow(teks){
	theTable = document.getElementById('table_tags').getElementsByTagName('tbody')[0];
	newRow = theTable.insertRow(-1);
	newCell = newRow.insertCell(0);

	value = document.createTextNode(teks);
	newCell.appendChild(value);
}

function jqAddRow(teks){
	$('#table_tags').append('<tr><td>'+teks+'</td></tr>');
}

function extractTags(){
	var tagsText = document.getElementById('input_tags').value;
	var tags = tagsText.split(',');

	for (var i in tags) {
		addRow(tags[i]);
	}
}

function jqExtractTags(){
	var tagsText = $('#input_tags').val();
	var tags = tagsText.split(',');

	for (var i in tags) {
		jqAddRow(tags[i]);
	};
}

function total(){
	var td = document.getElementById('table_barang').getElementsByTagName('td');
	var sum = 0;

	for(var i in td){
		console.log(td[i].innerHTML);
		if (td[i].className == 'harga') {
			sum += parseFloat(td[i].innerHTML);
		}
	}

	document.getElementById('total').innerHTML = sum.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

function jqTotal(){
	var sum = 0;
	$('.harga').each(function(index){
		sum += parseFloat($(this).text());
	});
	console.log(sum);

	$('#total').html(sum);
}