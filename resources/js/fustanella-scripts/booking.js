//decrement
//currentnumber
//increment
var decrement = document.getElementById("decrement");
var increment = document.getElementById("increment");
var currentnumber = document.getElementById('currentnumber');

let count = 0;

currentnumber.innerText = count;


function handleIncrement() {
    count++;
    currentnumber.innerText = count;
}
function handleDecrement() {
    if (count <= 0) {
        count = 1;
    }
    count--;
    currentnumber.innerText = count;

}
function handleCurrentNumber(){
    console.log(currentnumber.innerText);
}

increment.addEventListener('click', handleIncrement);
decrement.addEventListener('click', handleDecrement);


