function calculate(){
	val1 = document.getElementById('num1').value;
	val2 = document.getElementById('num2').value;
	opr = document.getElementById('operator').value;

	if(opr == '+'){
		result = parseFloat(val1) + parseFloat(val2);
	} else if(opr == '-') {
		result = parseFloat(val1) - parseFloat(val2);
	} else if(opr == 'x') {
		result = parseFloat(val1) * parseFloat(val2);
	} else {
		result = parseFloat(val1) / parseFloat(val2);
	}

	document.getElementById('result').value = result;
	return [val1, val2, opr, result];
}

function calculateJq(){
	val1 = $('#num1').val();
	val2 = $('#num2').val();
	opr = $('#operator').val();

	if(opr == '+'){
		result = parseFloat(val1) + parseFloat(val2);
	} else if(opr == '-') {
		result = parseFloat(val1) - parseFloat(val2);
	} else if(opr == 'x') {
		result = parseFloat(val1) * parseFloat(val2);
	} else {
		result = parseFloat(val1) / parseFloat(val2);
	}

	$('#num1').val(result);
	return [val1, val2, opr, result];
}

function addHistory(){
	calc = calculateJq();

	var theTable = document.getElementById('calc_table').getElementsByTagName('tbody')[0];
	var newRow = theTable.insertRow(-1); // tr
	var cellVal1 = newRow.insertCell(0); // td
	var cellVal2 = newRow.insertCell(1); // td
	var cellOpr = newRow.insertCell(2); // td
	var cellRes = newRow.insertCell(3); // td

	var textVal1 = document.createTextNode(calc[0]);
	var textVal2 = document.createTextNode(calc[1]);
	var textOpr = document.createTextNode(calc[2]);
	var textRes = document.createTextNode(calc[3]);
	cellVal1.appendChild(textVal1);
	cellVal2.appendChild(textVal2);
	cellOpr.appendChild(textOpr);
	cellRes.appendChild(textRes);
}

function addHistoryJq(){
	calc = calculateJq();
	content = '<tr><td>'+calc[0]+'</td><td>'+calc[1]+'</td><td>'+calc[2]+'</td><td>'+calc[3]+'</td></tr>';
	$('#calc_table').append(content);
}

function addTags(){
	tagsText = document.getElementById('tagText').value;
	tags = tagsText.split(',');
	document.getElementById('tagText').value = '';
	
	if(tagsText != ''){
		theTable = document.getElementById('table_tags').getElementsByTagName('tbody')[0];
		for(i in tags){						
			newRow = theTable.insertRow(-1); // tr
			newCell = newRow.insertCell(0); // td
			textCell = document.createTextNode(tags[i]);
			newCell.appendChild(textCell);
		}	
	}
}

function addTags(){
	tagsText = $('#tagText').val();
	tags = tagsText.split(',');
	$('#tagText').val('');
	
	if(tagsText != ''){		
		for(i in tags){						
			content = '<tr><td>'+tags[i]+'</td></tr>';
			$('#table_tags').append(content);			
		}	
	}
}