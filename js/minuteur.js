"use strict";

document.addEventListener("DOMContentLoaded", () => {

    let start = document.getElementById("start");
    let timer = document.getElementById("timer");
    let clock = document.getElementById("clockdiv");
    let status = "down";

    start.addEventListener("click", () => {

        if (status === "down") {

            status = "up";
            clock.style.display = "none";
            timer.style.display = "flex";

            var deadline = new Date("dec 31, 2023 15:37:25").getTime();

            var x = setInterval(() => {
                var now = new Date().getTime();
                var t = deadline - now;
                var hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((t % (1000 * 60)) / 1000);

                document.getElementById("timerHrs").innerHTML = hours;
                document.getElementById("timerMins").innerHTML = minutes;
                document.getElementById("timerSec").innerHTML = seconds;

                if (t < 0) {

                    clearInterval(x);
                    document.getElementById("alert").innerHTML = "le temps est écoulé";
                    document.getElementById("hour").innerHTML = '0';
                    document.getElementById("minute").innerHTML = '0';
                    document.getElementById("second").innerHTML = '0';
                    clock.style.display = "inline-block";
                    status = "down";

                }

            }, 1000);

        }


    })


});