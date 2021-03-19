/*
 *  Usage: Place an id tag of "today" to the element u want for today's day
 *  eg. <span id="today"></span>
 */

(function(){
    var daysInWeek = [
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday"
    ]

    var today = new Date();

    document.getElementById("today").innerText = daysInWeek[today.getDay()];
})();