import $ from 'jquery';
import { wp_ajax } from '../wp';

class ApplicationForm {
    constructor() {
        this.form = document.querySelector('#application-form');
        if (this.form) {
            this.form.addEventListener('submit', (e) => this.handleForm(e));
        }
    }

    handleForm(e) {
        e.preventDefault();

        let formData = new FormData();
        formData.append('file', document.getElementById('file').files[0]);
        formData.append('name', this.form.querySelector('#full_name').value);
        formData.append('phone', this.form.querySelector('#phone').value);
        formData.append('position', this.form.querySelector('#application-position').value);
        formData.append('action', 'application_form');
        $.ajax({
            url: window.APP_DATA.ajax_url,
            type: "POST",
            processData: false,
            contentType: false,
            data: formData,
            success: function (response) {
                document.getElementById('app_modal').classList.add('hidden');
                document.getElementById("thank_you_modal").classList.remove('hidden');
                var response_text = document.getElementById('pop-up-response-text');
                response_text.innerText = response.data.message;
                setTimeout(() => {
                    window.location.reload();
                }, "1200")

            },
        });
    }
}
export default ApplicationForm;
