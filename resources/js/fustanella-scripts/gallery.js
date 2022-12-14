function onClick(element) {
    currentImg = element;
    updatePrevNext();
    document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
}
function callPrevious() {
    currentImg = ar[prevIdx];
    updatePrevNext();
    document.getElementById("img01").src = currentImg.src;
    document.getElementById("modal01").style.display = "block";
}
function callNext() {
    currentImg = ar[nextIdx];
    updatePrevNext();
    document.getElementById("img01").src = currentImg.src;
    document.getElementById("modal01").style.display = "block";
}
function openFullscreen() {
    let tmp = $('table').find('img[src="' + currentImg.src + '"]')[0];
    tmp.requestFullscreen();
}
function updatePrevNext() {
    for (let i = 9; i < ar.length - 8; i++) {
        if (ar[i].src === currentImg.src) {
            if (i > 9)
                prevIdx = i - 1;
            if (i < ar.length - 9)
                nextIdx = i + 1;
            if (i === ar.length - 9)
                nextIdx = 9;
            if (i === 9)
                nextIdx = i + 1;
        }
    }
}