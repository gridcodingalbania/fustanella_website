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

        // let formData = new FormData();
		// var file_input = this.form.querySelector('#file');
        // formData.append('file', file_input.files[0]);
        // console.log('form DATA');
        // console.log(formData.getAll('file')[0]);

		//console.log(document.getElementById('file').files[0]);

		// const data = {
		// 	name: this.form.querySelector('#full_name').value,
		// 	phone: this.form.querySelector('#phone').value,
		// 	position: this.form.querySelector('#application-position').value,
		// 	//file_name: this.form.querySelector('#file').files[0],
		// 	file_input: file_input,
		// 	// uploaded_file: this.form.querySelector('#file').files[0]
		// 	// uploaded_file: this.form.querySelector('#file').value
		// };
        let formData = new FormData();
        formData.append('file', document.getElementById('file').files[0]);
        formData.append('name', this.form.querySelector('#full_name').value);
        formData.append('phone', this.form.querySelector('#phone').value);
        formData.append('position', this.form.querySelector('#application-position').value);
        formData.append('action', 'application_form');
        $.ajax({
            url: window.APP_DATA.ajax_url,
            type:"POST",
            processData: false,
            contentType: false,
            data: formData,
            success : function( response ){
               alert(response.data.message);
            },
        });
	}
}
export default ApplicationForm;
