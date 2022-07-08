"use strict";

document.addEventListener("DOMContentLoaded", () => {

    let start = document.getElementById("start");
    let stop = document.getElementById("stop");
    let timer = document.getElementById("timer");
    let clock = document.getElementById("clockdiv");

    start.addEventListener("click", () => {
console.log("go");
        var hours = document.getElementById("hour-input").value;
        var minutes = document.getElementById("minute-input").value;
        var seconds = document.getElementById("second-input").value;


            var countdown = hours * 3600 + minutes * 60 + seconds;

            var x = setInterval(() => {
                
                if (countdown >= 60) {

                    if (countdown > 3600) {
                        hours = Math.floor(countdown / 3600);
                        minutes = Math.floor(countdown / 60);
                        seconds = Math.floor(countdown % 60);

                        document.getElementById("timerDisplay").innerHTML = `${hours < 10 ? '0' : ''}${hours}:${minutes < 10 ? '0' : ''}${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
                    } else {
                        minutes = Math.floor(countdown / 60);
                        seconds = Math.floor(countdown % 60);

                        document.getElementById("timerDisplay").innerHTML = `${hours < 10 ? '0' : ''}${hours}:${minutes < 10 ? '0' : ''}${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
                    }

                } else {
                    console.log(countdown);
                    seconds = Math.floor(countdown % 60);

                    document.getElementById("timerDisplay").innerHTML = `00 : 00 : ${seconds < 10 ? '0' : ''}${seconds}`;

                    clock.style.display = "none";
                    start.style.display = "none";
                    stop.style.display = "inline-block";
                    timer.style.display = "flex";
        

                    if (countdown == 0) {

                        clearInterval(x);
                        document.getElementById("alert").innerHTML = "le temps est écoulé";
                        clock.style.display = "inline-block";
                        start.style.display = "inline-block";
                        stop.style.display = "none";
                        

                    }

                    countdown--;

                }

            }, 1000);


    })


});