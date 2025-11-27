// marriage countdown timer
let marriageDate = new Date("Dec 27, 2025 00:00:00").getTime();

setInterval(function () {
    let now = new Date().getTime();
    let diff = marriageDate - now;

    let days = Math.floor(diff / (1000 * 60 * 60 * 24));
    let hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((diff % (1000 * 60)) / 1000);

    document.getElementById("timer").innerHTML =
        days + " Days " + hours + " Hrs " + minutes + " Min " + seconds + " Sec ";
}, 1000);
