const date = new Date();
const weekDays = [
    'Sun',
    'Mon',
    'Tue',
    'Wed',
    'Thu',
    'Fri',
    'Sat'
];

let set_selected_date = false;
let set_selected_time = false;

const renderCalendar = () => {
    date.setDate(1);

    const monthDays = document.querySelector(".days");

    const lastDay = new Date(
        date.getFullYear(),
        date.getMonth() + 1,
        0
    ).getDate();

    const prevLastDay = new Date(
        date.getFullYear(),
        date.getMonth(),
        0
    ).getDate();

    const firstDayIndex = date.getDay();

    const lastDayIndex = new Date(
        date.getFullYear(),
        date.getMonth() + 1,
        0
    ).getDay();

    const nextDays = 7 - lastDayIndex - 1;

    const months = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
    ];

    document.querySelector(".date h1").innerHTML = months[date.getMonth()] + " " + date.getFullYear();


    let days = "";

    for (let x = firstDayIndex; x > 0; x--) {
        days += `<div class="prev-date">${prevLastDay - x + 1}</div>`;
    }

    for (let i = 1; i <= lastDay; i++) {
        days += `<div>${i}</div>`;
    }

    for (let j = 1; j <= nextDays; j++) {
        days += `<div class="next-date">${j}</div>`;
    }
    monthDays.innerHTML = days;

    // Append Selected Day
    $('#rendered-days div').not(".next-date, .prev-date").on('click', function () {
        var that = $(this);
        // Swap active day 
        that.parent().find('.today').removeClass('today');
        $(this).addClass('today');
        // Add Chosen Year, Month & day
        $('#selectedYear').text(date.getFullYear() + " - ").addClass('text-[22px]');
        $("#selectedMonth").text(date.getMonth() + 1 + " - ").addClass('text-[22px]');
        $("#selectedDay").text(this.innerText).addClass('text-[22px]');
    });


    // Append Selected Time to current context
    var select_timer = document.getElementById('select-timer');
    select_timer.addEventListener('change', function () {
        var selected_time = document.getElementById('selectedTime');
        selected_time.innerText = this.value;
        selected_time.classList.add('text-[22px]')
    })


};

document.querySelector(".prev").addEventListener("click", () => {
    date.setMonth(date.getMonth() - 1);
    renderCalendar();
});

document.querySelector(".next").addEventListener("click", () => {
    date.setMonth(date.getMonth() + 1);
    renderCalendar();
});

renderCalendar();



