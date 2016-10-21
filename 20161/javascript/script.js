function getMessage() {
	var amount = Math.round(Math.random() * 100000);
	if((amount % 2) == 0){
		amount = 0;
	}
	var message = "You won $" + amount + "!\n" +
		"To collect y g , y our winnings, send your credit card\n" +
		"and bank details to oil-minister@phisher.com.";
	return(message);
}

function showWinnings1() {
	alert(getMessage());
}

function showWinnings2() {
	document.write(getMessage());
}

function showNumbers(num) {	
	for(i = 0; i < num; i++){
		document.write("<h1>" + (i+1)*20 +"</h1>");
	}	
}

function arrayLoops() {
	var names = ["Joe", "Jane", "John"];
	// printArray1(names);
	// printArray2(names);
	names.length = 6;
	printArray1(names);
	printArray2(names);
}

function printArray1(array) {
	for(var i=0; i<array.length; i++) {
		console.log("[printArray1] array[%o] is %o", i, array[i]);
	}
}

function printArray2(array) {
	for(var i in array) {	
		console.log("[printArray2] array[%o] is %o", i, array[i]);
	}
}

function stringManipulation(){
	text1 = "123";
	text2 = "456";
  newText = "Some Text";

	console.log(parseInt(text1) + parseInt(text2));
	console.log(newText.toLowerCase());
	console.log(newText.toUpperCase());
	console.log("Some Very Long Text".substring(5, 8));
}
