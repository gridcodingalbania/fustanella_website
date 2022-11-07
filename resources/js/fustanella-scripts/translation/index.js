// Fix urls when change language

var toggle_lang_dropdown = document.getElementById("select-lang");
// Get url 
var sq_path = window.location.pathname.includes('sq');
let server_pathname = window.location.pathname;

var drop_down_menu = document.getElementById('dropdown-language');

var current_language_src = document.getElementById('current-lang');

var other_language_slug = document.getElementById('other-lang-slug');
var other_language_image = document.getElementById('other-lang-image');



if (sq_path) {

    // Manipulate DOM 

    let url_origin = window.location.origin;

    // Swap Icons when url change (flags)
    // if url origin doesnt contain fustanella, remove it 
    current_language_src.src = url_origin + '/fustanella/wp-content/themes/fustanella/resources/images/language-icons/al.svg';
    other_language_image.src = url_origin + '/fustanella/wp-content/themes/fustanella/resources/images/language-icons/en.svg';

    // if user wants to go to english 
    let english_url = window.location.pathname.replace('/sq/',"/");
    other_language_slug.setAttribute('href', english_url);
}


toggle_lang_dropdown.addEventListener('click', () => {
    drop_down_menu.classList.remove('hidden');
})