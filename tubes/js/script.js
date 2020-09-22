	let keyword = document.getElementById('keyword');
	let container = document.getElementById('container');

	//buat event 
	keyword.addEventListener('keyup', function(){
		//membuat objek ajax 
		let xhr = new XMLHttpRequest();

		//cek kasiapan ajax
		xhr.onreadystatechange = function(){
			if ( xhr.readyState == 4 && xhr.status == 200){
				container.innerHTML = xhr.responseText;
			} 
		}

		//eksekusi ajaxs
		xhr.open('get', 'cari_ajax.php?keyword=' + keyword.value);
		xhr.send();
	});