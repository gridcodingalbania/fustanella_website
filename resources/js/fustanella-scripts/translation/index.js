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

    // let url_origin = window.location.origin;

    // Swap Icons when url change (flags)
    // if url origin doesnt contain fustanella, remove it 
    // current_language_src.src = url_origin + '/fustanella/wp-content/themes/fustanella/resources/images/language-icons/al.svg';
    // other_language_image.src = url_origin + '/fustanella/wp-content/themes/fustanella/resources/images/language-icons/en.svg';

    current_language_src.innerText = 'AL';
    // if user wants to go to english 
    let english_url = window.location.pathname.replace('/sq/', "/");
    other_language_slug.setAttribute('href', english_url);
    other_language_image.innerText = 'EN';
}


toggle_lang_dropdown.addEventListener('click', () => {
    drop_down_menu.classList.remove('hidden');
})
// Fix urls when change language for mobile

var toggle_lang_dropdown1 = document.getElementById("select-lang1");
// Get url 
var sq_path1 = window.location.pathname.includes('sq');
let server_pathname1 = window.location.pathname;

var drop_down_menu1 = document.getElementById('dropdown-language1');

var current_language_src1 = document.getElementById('current-lang1');

var other_language_slug1 = document.getElementById('other-lang-slug1');
var other_language_image1 = document.getElementById('other-lang-image1');




if (sq_path1) {

    // Manipulate DOM 

    let url_origin1 = window.location.origin;

    // Swap Icons when url change (flags)
    // if url origin doesnt contain fustanella, remove it 
    // current_language_src1.src = url_origin1 + '/fustanella/wp-content/themes/fustanella/resources/images/language-icons/al.svg';
    // other_language_image1.src = url_origin1 + '/fustanella/wp-content/themes/fustanella/resources/images/language-icons/en.svg';

    current_language_src1.innerText = 'AL';
    // if user wants to go to english 
    let english_url1 = window.location.pathname.replace('/sq/', "/");
    other_language_slug1.setAttribute('href', english_url1);
    other_language_slug1.innerText = 'EN';
}


toggle_lang_dropdown1.addEventListener('click', () => {
    drop_down_menu1.classList.remove('hidden');
})
