var position = document.querySelectorAll('#position-btn');
var modal = document.getElementById('app_modal');
var close_modal = document.getElementById('close_modal');
for (var i = 0; i < position.length; i++) {
    position[i].addEventListener('click', function () {
        console.log(this.getAttribute('data-value'));
        modal.classList.remove('hidden'); // Show Modal

    })
}

close_modal.addEventListener('click', function(){
    modal.classList.add('hidden');
})