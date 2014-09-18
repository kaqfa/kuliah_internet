document.write("ini menulis tapi menggunakan Javascript");
// var teksPopup = "";
// for(i = 0; i < 100; i++){
// 		teksPopup = teksPopup+"saya tidak akan mencoret lagi ";
// }
// alert(teksPopup);

// instantiasi
var mainContent = document.getElementById("main-content");
// manipulasi element / object
var teks = "<ul>";
for(i = 0; i < 100; i++){
	teks += "<li>"+(i+1)+"</li>";
}
teks += "</ul>";
mainContent.innerHTML = teks;