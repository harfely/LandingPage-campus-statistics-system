

// Variable - array
const txtElement = ['Pemprograman', 'Web', 'Framework']; //untuk nilai tidak akan berubah.
let count = 0; 
let txtIndex = 0; 
let currentTxt = '';  //mengetahui sekarang ada di text yang mana
let words = ''; //mengambil 1 kata


//fungsi untuk jalankan program
(function ngetik(){


	if(count == txtElement.length){
		count = 0;
	}

	currentTxt = txtElement[count];

	words = currentTxt.slice(0, ++txtIndex);
	document.querySelector('.efek-ngetik').textContent = words; //tampilkan

	if(words.length == currentTxt.length){
		count++;
		txtIndex = 0;
	}

	setTimeout(ngetik, 500);

})();