var loadPage = function (thePage){
	$.ajax( thePage )
		.done(function(content) {
			$('#ajax_area').html(content);
		})
		.fail(function() {
			alert( "error" );
		});
};

var loadCustomer = function(theFile){
	htmlText = '<div class="h_title">Manage pages - table</div>';
	htmlText += '<h2>Lorem ipsum dolor sit ame</h2>';
	htmlText += '<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>';
	htmlText += '<div class="entry"> <div class="sep"></div></div>';
	htmlText += '<table><thead><tr><th>customerNumber</th><th>customerName</th><th>phone</th>';
	htmlText += '<th>city</th><th>country</th><th>creditLimit</th></tr></thead><tbody>';
	
	$.ajax(theFile)
		.done(function(xmlData){
			$('customers', xmlData).each(function(i){
				custNumber = $(this).find("customerNumber").text();
				custName = $(this).find("customerName").text();
				phone = $(this).find("phone").text();
				city = $(this).find("city").text();
				country = $(this).find("country").text();
				creditLimit = $(this).find("creditLimit").text();

				htmlText += '<tr><td>'+custNumber+'</td><td>'+custName+'</td><td>'+phone+'</td>';
				htmlText += '<td>'+city+'</td><td>'+country+'</td><td>'+creditLimit+'</td></tr>';
			});
			htmlText += '</tbody></table>';
			theTable = $('#ajax_area').html(htmlText);
		});
}