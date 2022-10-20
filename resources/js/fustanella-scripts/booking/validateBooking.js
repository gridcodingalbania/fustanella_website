let year_selected = $("#selectedYear").text().includes("_");
let time_selected = $("#selectedTime").text().includes("_");
let persons_selected = $("#selectedPersons").text().includes("0");

$("#booking-form").hide();

$("#show-appoint-form").on('click', () => {
    if (year_selected || time_selected || persons_selected) {
        alert("Please pick a date, time and number of persons");
        return;
    }
    $("#booking-form").fadeIn();
    $('html, body').animate({
        scrollTop: $("#booking-form").offset().top
    }, 1000);
})