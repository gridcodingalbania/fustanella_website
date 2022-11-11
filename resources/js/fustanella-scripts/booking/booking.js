//decrement
//currentnumber
//increment

var decrement = document.getElementById("decrement");
var increment = document.getElementById("increment");
var currentnumber = document.getElementById('currentnumber');
var no_of_persons = document.getElementById('selectedPersons');

let count = 0;

currentnumber.innerText = count;


function handleIncrement() {
    count++;
    currentnumber.innerText = count;
    no_of_persons.innerText = count;
    no_of_persons.classList.add('text-[25px]');
}
function handleDecrement() {
    if (count <= 0) {
        count = 1;
    }
    count--;
    currentnumber.innerText = count;
    no_of_persons.innerText = count;
    no_of_persons.classList.add('text-[25px]');

}

increment.addEventListener('click', handleIncrement);
decrement.addEventListener('click', handleDecrement);

