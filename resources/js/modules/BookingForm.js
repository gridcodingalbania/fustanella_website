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
        var selected_time_split = selected_time.split(":");


        const data = {
            date: selected_year[0] + "-" +  selected_month[0] + "-" +  selected_day,
            time: selected_time,
            persons: no_of_persons,
            name: this.form.querySelector('#name').value,
            surname: this.form.querySelector('#surname').value,
            phone_number: this.form.querySelector('#phone').value
        }

        wp_ajax('booking_form')
            .post({
                data: data,
            })
            .then((response) => this.handleResponse(response.data));
    }

    handleResponse(response) {
        alert(response.data.message);
    }


}
export default BookingForm;