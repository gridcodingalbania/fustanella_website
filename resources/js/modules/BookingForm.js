import { wp_ajax } from '../wp';

class BookingForm {
    constructor() {
        this.form = document.querySelector("#user_details");
        if (this.form) {
            this.form.addEventListener('submit', (e) => this.handleBooking(e))
        }
    }

    handleBooking(e) {
        e.preventDefault();

        var no_of_persons = document.getElementById('selectedPersons').innerText;
        var selected_time = document.getElementById('selectedTime').innerText;
        var selected_year = document.getElementById('selectedYear').innerText.split(' ');
        var selected_month = document.getElementById('selectedMonth').innerText.split(' ');
        var selected_day = document.getElementById('selectedDay').innerText;

        var dial_code = document.getElementById("dial-code").value;


        const data = {
            date: selected_year[0] + "-" + selected_month[0] + "-" + selected_day,
            time: selected_time,
            persons: no_of_persons,
            name: this.form.querySelector('#name').value,
            surname: this.form.querySelector('#surname').value,
            phone_number: dial_code + this.form.querySelector('#phone').value
        }

        wp_ajax('booking_form')
            .post({
                data: data,
            })
            .then((response) => this.handleResponse(response.data));
    }

    handleResponse(response) {
        if (response.data.message) {
            document.getElementById("thank_you_modal").classList.remove('hidden');
            var response_text = document.getElementById('pop-up-response-text');
            response_text.innerText = response.data.message;
            setTimeout(() => {
                window.location.reload();
            }, "1200")
        }
    }


}
export default BookingForm;