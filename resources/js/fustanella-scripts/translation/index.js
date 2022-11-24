// Fix urls when change language

var toggle_lang_dropdown = document.getElementById("select-lang");
// Get url 
var sq_path = window.location.pathname.includes('sq');
let server_pathname = window.location.pathname;

var drop_down_menu = document.getElementById('dropdown-language');

var current_language = document.getElementById('current-lang');

var other_language_slug = document.getElementById('other-lang-slug');
var other_language_text = document.getElementById('other-lang-image');


// Mobile Menu

var toggle_lang_dropdown_mobile = document.getElementById("select-lang1");

var drop_down_menu_mobile = document.getElementById('dropdown-language1');

var current_language_mobile = document.getElementById('current-lang1');

var other_language_mobile_slug = document.getElementById('other-lang-slug1');
var other_language_mobile_text = document.getElementById('other-lang-image1');


if (sq_path) {

    // Manipulate DOM 

    let english_url = window.location.pathname.replace('/sq/', "/");

    // let url_origin = window.location.origin;

    // Swap Icons when url change (flags)
    // if url origin doesnt contain fustanella, remove it 
    // current_language_src.src = url_origin + '/fustanella/wp-content/themes/fustanella/resources/images/language-icons/al.svg';
    // other_language_image.src = url_origin + '/fustanella/wp-content/themes/fustanella/resources/images/language-icons/en.svg';

    current_language.innerText = 'AL';
    
    // if user wants to go to english 
    
    other_language_slug.setAttribute('href', english_url);
    other_language_text.innerText = 'EN';
    
    // Mobile

    current_language_mobile.innerText = 'AL';
    other_language_mobile_slug.setAttribute('href', english_url);
    other_language_mobile_text.innerText = 'EN';
}

//Desktop toggle

toggle_lang_dropdown.addEventListener('click', () => {
    drop_down_menu.classList.remove('hidden');
})

//Mobile toggle

toggle_lang_dropdown_mobile.addEventListener('click', () => {
    drop_down_menu_mobile.classList.remove('hidden');
})
