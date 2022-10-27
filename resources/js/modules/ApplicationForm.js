import { wp_ajax } from '../wp';

class BookingForm {
    constructor() {
        this.form = document.querySelector("#application-form");
        if (this.form) {
            this.form.addEventListener('submit', (e) => this.handleForm(e))
        }
    }

    handleForm(e) {
        e.preventDefault();

        let formData = new FormData();

        formData.append('file', document.getElementById('file').files[0])

        const data = {
            name: this.form.querySelector('#full_name').value,
            phone: this.form.querySelector('#phone').value,
            position: this.form.querySelector('#application-position').value,
            file_name: this.form.querySelector('#file').files[0].name,
            uploaded_file: this.form.querySelector('#file').files[0]
        }

        wp_ajax('application_form')
            .post({
                headers: {
                    'Content-Type': 'multipart/form-data'
                },
                data: formData,
            });
    }




}
export default BookingForm;