var position = document.querySelectorAll('#position-btn');
var modal = document.getElementById('app_modal');
var close_modal = document.getElementById('close_modal');

var append_current_position = document.getElementById('application-position');

var file_name = document.getElementById('file-description');

var uploaded_file = document.getElementById('file');



for (var i = 0; i < position.length; i++) {
    position[i].addEventListener('click', function () {
        modal.classList.remove('hidden'); // Show Modal
        append_current_position.value = this.getAttribute('data-value');
    })
}

close_modal.addEventListener('click', function () {
    modal.classList.add('hidden');
})

uploaded_file.addEventListener('change', function () {
    file_name.innerText = document.getElementById('file').files[0].name;
})