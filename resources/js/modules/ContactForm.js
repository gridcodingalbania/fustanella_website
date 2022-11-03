import { wp_ajax } from '../wp';

class ContactForm {
    constructor() {
        this.form = document.querySelector("#contact-form");
        if (this.form) {
            this.form.addEventListener('submit', (e) => this.handleBooking(e))
        }
    }

    handleBooking(e) {
        e.preventDefault();

        const data = {
            name: this.form.querySelector('#full_name').value,
            email: this.form.querySelector('#email').value,
            message: this.form.querySelector('#message').value
        }

        wp_ajax('contact_form')
            .post({
                data: data,
            })
            .then((response) => this.handleResponse(response.data));
    }

    handleResponse(response) {
        document.getElementById("thank_you_modal").classList.remove('hidden');
        var response_text = document.getElementById('pop-up-response-text');
        response_text.innerText = response.data.message;
        setTimeout(() => {
            window.location.reload();
        }, "1200")
    }


}
export default ContactForm;