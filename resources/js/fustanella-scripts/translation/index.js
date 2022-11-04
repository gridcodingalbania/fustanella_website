// Fix urls when change language


// Swap Icons when url change (flags)

var toggle_lang_dropdown = document.getElementById("select-lang");
var drop_down_menu = document.getElementById('dropdown-language');
var current_language_src = document.getElementById('current-lang');
var sq_path = window.location.pathname.includes('sq');

if(sq_path){
    current_language_src.src = '../resources/images/language-icons/al.svg';
}


toggle_lang_dropdown.addEventListener('click', () => {
    drop_down_menu.classList.remove('hidden');
})
