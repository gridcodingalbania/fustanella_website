function onClick(e){currentImg=e,updatePrevNext(),document.getElementById("img01").src=e.src,document.getElementById("modal01").style.display="block"}function callPrevious(){currentImg=ar[prevIdx],updatePrevNext(),document.getElementById("img01").src=currentImg.src,document.getElementById("modal01").style.display="block"}function callNext(){currentImg=ar[nextIdx],updatePrevNext(),document.getElementById("img01").src=currentImg.src,document.getElementById("modal01").style.display="block"}function openFullscreen(){$("table").find('img[src="'+currentImg.src+'"]')[0].requestFullscreen()}function updatePrevNext(){for(let e=9;e<ar.length-8;e++)ar[e].src===currentImg.src&&(e>9&&(prevIdx=e-1),e<ar.length-9&&(nextIdx=e+1),e===ar.length-9&&(nextIdx=9),9===e&&(nextIdx=e+1))}