$("#user-details-form").hide(),$("#show-appoint-form").on("click",()=>{let e=$("#selectedYear").text().includes("_"),t=$("#selectedTime").text().includes("_"),s=$("#selectedPersons").text().includes("0");if(e){alert("Please pick a date!");return}if(t){alert("Please choose time!");return}if(s){alert("Please select number of persons!");return}$("#show-appoint-form").fadeOut(),$("#user-details-form").fadeIn(),$("html, body").animate({scrollTop:$("#user-details-form").offset().top-70},1e3)});