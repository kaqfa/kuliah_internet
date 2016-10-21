function calculation(){
	var inp1 = document.getElementById('input1');
	var inp2 = document.getElementById('input2');
	var op = document.getElementById('operator');
	var result; 

	if (op.value == '+') {
		result = parseInt(inp1.value) + parseInt(inp2.value);
	} else {
		result = parseInt(inp1.value) - parseInt(inp2.value);
	};

	document.getElementById('result').value = result;
}

function jqCalculation(){
	var inp1 = $('#input1');
	var inp2 = $('#input2');
	var op = $('#operator');
	var result; 

	if (op.val() == '+') {
		result = parseInt(inp1.val()) + parseInt(inp2.val());
	} else {
		result = parseInt(inp1.val()) - parseInt(inp2.val());
	};

	$('#result').val(result);
}

function addRow(someText){
	var table = document.getElementById('tags_table').getElementsByTagName('tbody')[0];
	var row = table.insertRow(-1);
	var cell = row.insertCell(0);	

	var theText = document.createTextNode(someText);
	cell.appendChild(theText);
}

function jqAddRow(someText){
	$('#tags_table').append('<tr><td>'+someText+'</td></tr>');
}

function jqTagsExtractor(){
	var tagsText = $('#tags_input').val();
	var tags = tagsText.split(',');

	for (var i in tags) {
		jqAddRow(tags[i]);
	};
}

function tagsExtractor(){
	var tagsText = document.getElementById('tags_input').value;
	var tags = tagsText.split(',');

	for (var i in tags) {
		addRow(tags[i]);
	};
}

function totalTransaction(){
	var tds = document.getElementById('transactions_table').getElementsByTagName('td');
	var total = 0;

	for(var i in tds){
		if (tds[i].className == 'price') {
			total += parseInt(tds[i].innerHTML);
		}
	}

	document.getElementById('result_td').innerHTML = total;
}

function jqTotalTransaction(){
	var total = 0;
	$('.price').each(function(data){
		total += parseInt($(this).html());
	});

	$('#result_td').html(total);
}