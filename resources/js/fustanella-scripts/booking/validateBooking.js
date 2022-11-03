$("#user-details-form").hide();

$("#show-appoint-form").on('click', () => {
    let year_selected = $("#selectedYear").text().includes("_");
    let time_selected = $("#selectedTime").text().includes("_");
    let persons_selected = $("#selectedPersons").text().includes("0");

    if (year_selected) {
        alert("Please pick a date!");
        return;
    }

    if (time_selected) {
        alert("Please choose time!");
        return;
    }


    if (persons_selected) {
        alert("Please select number of persons!");
        return
    }
    $("#show-appoint-form").fadeOut();
    $("#user-details-form").fadeIn();
    $('html, body').animate({
        scrollTop: $("#user-details-form").offset().top - 70
    }, 1000);
})