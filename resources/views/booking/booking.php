<div class="container">
    <div class="w-5/6 mx-auto mb-10">
        <div class="flex flex-col items-center justify-center">
            <p class="text-center text-[40px] uppercase text-headingColor cormorant">Book A table</p>

            <div class="calendar">
                <div class="month">
                    <div class="prev mr-5 cursor-pointer">
                        <svg width="11" height="20" viewBox="0 0 11 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.63664 18.7296C9.02717 19.1201 9.66033 19.1201 10.0509 18.7296C10.4414 18.339 10.4414 17.7059 10.0509 17.3154L8.63664 18.7296ZM1.20703 9.88574L0.499925 9.17863C0.109401 9.56916 0.1094 10.2023 0.499925 10.5928L1.20703 9.88574ZM10.0509 2.45613C10.4414 2.06561 10.4414 1.43244 10.0509 1.04192C9.66033 0.651392 9.02717 0.651392 8.63664 1.04192L10.0509 2.45613ZM10.0509 17.3154L1.91414 9.17863L0.499925 10.5928L8.63664 18.7296L10.0509 17.3154ZM1.91414 10.5928L10.0509 2.45613L8.63664 1.04192L0.499925 9.17863L1.91414 10.5928Z" fill="#A5A5A5" />
                        </svg>

                    </div>
                    <div class="date">
                        <h1></h1>
                        <p></p>
                    </div>
                    <div class="next ml-5 cursor-pointer">
                        <svg width="11" height="20" viewBox="0 0 11 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.795 1.04192C1.40447 0.651392 0.771308 0.651392 0.380784 1.04192C-0.00974047 1.43244 -0.00974047 2.06561 0.380784 2.45613L1.795 1.04192ZM9.22461 9.88574L9.93172 10.5928C10.3222 10.2023 10.3222 9.56916 9.93172 9.17864L9.22461 9.88574ZM0.380784 17.3154C-0.00974047 17.7059 -0.00974047 18.339 0.380784 18.7296C0.771308 19.1201 1.40447 19.1201 1.795 18.7296L0.380784 17.3154ZM0.380784 2.45613L8.5175 10.5928L9.93172 9.17864L1.795 1.04192L0.380784 2.45613ZM8.5175 9.17864L0.380784 17.3154L1.795 18.7296L9.93172 10.5928L8.5175 9.17864Z" fill="#A5A5A5" />
                        </svg>
                    </div>
                </div>
                <div class="weekdays">
                    <div>Sun</div>
                    <div>Mon</div>
                    <div>Tue</div>
                    <div>Wed</div>
                    <div>Thu</div>
                    <div>Fri</div>
                    <div>Sat</div>
                </div>
                <div class="days mt-2 mb-5" id="rendered-days">
                </div>
            </div>
            <div class="grid grid-cols-2 gap-3 justify-items-stretch w-[900px] mx-auto pt-5">
                <div class="flex flex-row items-center justify-between bg-gray94 h-[100px] p-5">
                    <p class="red-hat text-[20px]">Choose Time</p>
                    <input type="time" class="border border-black bg-transparent text-[20px] p-2" id="select-timer" min="10:00" max="23:00" required />
                </div>
                <div class="flex flex-row items-center justify-between bg-gray94">
                    <p class="red-hat text-[20px] p-5">No. of Persons</p>
                    <div class="flex flex-row items-center p-5">
                        <input type="button" id="decrement" class="border border-black bg-transparent text-[20px] w-[63px] h-[50px] cursor-pointer" value="-" />
                        <p id="currentnumber" class="border border-black text-[20px] w-[70px] h-[50px] text-center flex items-center justify-center mx-auto bg-transparent outline-none"></p>
                        <input type="button" id="increment" class="border border-black bg-transparent text-[20px] w-[63px] h-[50px] cursor-pointer" value="+" />

                    </div>
                </div>
            </div>
            <div class="w-[900px] grid grid-cols-3 justify-items-center items-center p-3 mt-5 bg-egreen cormorant">
                <div class="flex flex-row justify-between items-center text-white">
                    <svg width="61" height="60" viewBox="0 0 61 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="10.4902" y="12.7336" width="39.6205" height="39.6205" rx="2" stroke="white" />
                        <path d="M40.207 5.30493L40.207 18.1626C40.207 19.1054 40.207 19.5768 39.9141 19.8697C39.6212 20.1626 39.1498 20.1626 38.207 20.1626L22.3968 20.1626C21.454 20.1626 20.9826 20.1626 20.6897 19.8697C20.3968 19.5768 20.3968 19.1054 20.3968 18.1626L20.3968 5.30494" stroke="white" stroke-linecap="round" />
                        <path d="M22.8711 30.0676L37.7288 30.0676" stroke="white" stroke-linecap="round" />
                        <path d="M22.8711 35.5664L37.7288 35.5664" stroke="white" stroke-linecap="round" />
                        <path d="M22.8711 40.7903L37.7288 40.7903" stroke="white" stroke-linecap="round" />
                    </svg>

                    <p id="selectedYear" class="ml-5 pr-3">_ _ _ _ /</p>
                    <p id="selectedMonth" class="pr-3">_ _ /</p>
                    <p id="selectedDay">_ _</p>
                </div>
                <div class="flex flex-row justify-between items-center text-white cormorant">
                    <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="30.1872" cy="30.0676" r="20.3102" stroke="white" />
                        <path d="M41.3308 30.0676H30.4375C30.2994 30.0676 30.1875 29.9557 30.1875 29.8176V21.4006" stroke="white" stroke-linecap="round" />
                    </svg>
                    <p id="selectedTime" class="ml-5">_ _ : _ _</p>
                </div>
                <div class="flex flex-row justify-between items-center text-white cormorant">
                    <svg width="49" height="49" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M39.7086 41.3846C38.7929 38.8215 36.775 36.5566 33.9681 34.9412C31.1611 33.3258 27.7219 32.4502 24.1838 32.4502C20.6457 32.4502 17.2065 33.3258 14.3995 34.9412C11.5925 36.5566 9.57471 38.8215 8.65899 41.3846" stroke="white" stroke-linecap="round" />
                        <ellipse cx="24.1827" cy="16.3775" rx="8.03623" ry="8.03623" stroke="white" stroke-linecap="round" />
                    </svg>
                    <p id="selectedPersons" class="ml-5">0</p>
                </div>
            </div>
            <input type="button" value="Apply" class="uppercase mt-12 border-2 border-headingColor text-headingColor text-xl w-[400px] h-[60px] cursor-pointer cormorant hover:bg-headingColor hover:text-white hover:transition-all" id="show-appoint-form" />
        </div>
    </div>
</div>

<div class="w-full bg-gray94 pb-5" id="booking-form">
    <div class="container p-5">
        <form id="user_details">
            <div class="flex flex-col w-1/2 mx-auto pb-5">
                <label for="name" class="mb-5 mt-5 uppercase text-[22px] cormorant">Name</label>
                <input type="text" id="name" placeholder="Write your name" class="bg-gray94 border-b border-black outline-none text-[16px]" />
            </div>
            <div class="flex flex-col w-1/2 mx-auto pb-5">
                <label for="surname" class="mb-5 mt-5 uppercase text-[22px] cormorant">Surname</label>
                <input type="text" id="surname" placeholder="Write your surname" class="bg-gray94 border-b border-black outline-none text-[16px]" />
            </div>
            <div class="flex flex-col w-1/2 mx-auto pb-5">
                <label for="phone" class="mb-5 mt-5 uppercase text-[22px] cormorant">Phone</label>
                <input type="text" id="phone" placeholder="Write your number" class="bg-gray94 border-b border-black outline-none text-[16px]" />
            </div>
            <div class="bg-egreen text-center w-1/2 mx-auto mt-10">
                <input type="submit" class="uppercase cormorant h-[50px] text-white cursor-pointer" value="Send" />
            </div>
        </form>
    </div>
</div>


<script src="<?php echo get_fustanella_scripts("booking/calendar.js"); ?>"></script>
<script src="<?php echo get_fustanella_scripts("booking/booking.js"); ?>"></script>
<script src="<?php echo get_fustanella_scripts("booking/validateBooking.js"); ?>"></script>
