function addRow(teks){
	var table = document.getElementById('label_table').getElementsByTagName('tbody')[0];
	var newRow = table.insertRow(-1);
	var newCell1 = newRow.insertCell(0);
	var newCell2 = newRow.insertCell(1);

	var newText1 = document.createTextNode('2.');
	var newText2 = document.createTextNode(teks);

	newCell1.appendChild(newText1);
	newCell2.appendChild(newText2);
}

function jqAddRow(){
	$('#label_table').append('<tr id="row1"><td>2.</td><td>Label jQuery</td></tr>');
}

function extractLabel(){
	var teks = document.getElementById('label_input').value;
	var labels = teks.split(',');

	for (var i in labels) {		
		addRow(labels[i]);
	};
}

function countClass(){
	var td = document.getElementById('table_count').getElementsByTagName('td');
	var sum = 0.0;
	for (var i in td) {
		if (td[i].className == 'count') {
			number = td[i].innerHTML.replace(/,/g, "");
			sum += parseFloat(number);
		}		
	}	
	document.getElementById('val_count').innerHTML = sum.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}