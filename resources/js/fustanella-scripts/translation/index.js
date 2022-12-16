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


    current_language.innerText = 'AL';

    // if user wants to go to english 

    other_language_slug.setAttribute('href', english_url);
    other_language_text.innerText = 'EN';

    // Mobile

    current_language_mobile.innerText = 'AL';
    other_language_mobile_slug.setAttribute('href', english_url);
    other_language_mobile_text.innerText = 'EN';

    if(window.location.pathname === "/about-us/sq"){
        document.location.href = "https://fustanellafarm.al/sq/about-us"
    }
    
    if(window.location.pathname === "/restaurant-food/sq"){
        document.location.href = "https://fustanellafarm.al/sq/restaurant-food"
    }
    
    if(window.location.pathname === "/farm-page/sq"){
        document.location.href = "https://fustanellafarm.al/sq/farm-page"
    }
    
    if(window.location.pathname === "/events/sq"){
        document.location.href = "https://fustanellafarm.al/sq/events"
    }
    
    if(window.location.pathname === "/gallery/sq"){
        document.location.href = "https://fustanellafarm.al/sq/gallery"
    }
    
    if(window.location.pathname === "/contact/sq"){
        document.location.href = "https://fustanellafarm.al/sq/contact"
    }
    
    if(window.location.pathname === "/work-with-us/sq"){
        document.location.href = "https://fustanellafarm.al/sq/work-with-us"
    }
    
    if(window.location.pathname === "/book-a-table/sq"){
        document.location.href = "https://fustanellafarm.al/sq/book-a-table"
    }

    if(window.location.pathname === "/privacypolicy/sq"){
        document.location.href = "https://fustanellafarm.al/sq/privacypolicy"
    }

}

//Desktop toggle

let toggler = false;

toggle_lang_dropdown.addEventListener('click', () => {
    toggler = !toggler;
    if (toggler) {
        drop_down_menu.classList.remove('hidden');
    } else {
        drop_down_menu.classList.add('hidden');
    }

})

//Mobile toggle

toggle_lang_dropdown_mobile.addEventListener('click', () => {
    toggler = !toggler;
    if (toggler) {
        drop_down_menu_mobile.classList.remove('hidden');
    } else {
        drop_down_menu_mobile.classList.add('hidden');
    }

})
