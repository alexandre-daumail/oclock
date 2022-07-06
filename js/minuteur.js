"use strict";

document.addEventListener("DOMContentLoaded", event => {

    var deadline = new Date("dec 31, 2023 15:37:25").getTime();

    var x = setInterval(event => {
    
    var now = new Date().getTime();
    var t = deadline - now;
    var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60));
    var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((t % (1000 * 60)) / 1000);

    document.getElementById("hour").innerHTML = hours;
    document.getElementById("minute").innerHTML = minutes;
    document.getElementById("second").innerHTML = seconds;

    if (t < 0) {

        clearInterval(x);
        document.getElementById("alert").innerHTML = "le temps est écoulé";
        document.getElementById("hour").innerHTML ='0';
        document.getElementById("minute").innerHTML ='0' ;
        document.getElementById("second").innerHTML = '0'; 

    }
    }, 1000);

    
});