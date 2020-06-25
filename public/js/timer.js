
function startTimer(duration,display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            document.location.reload(true);
            //document.location.href="/";
           
        }
    }, 1000);
}

window.onload = function () {
    //const time = 20;
    const Minutes=50;
    //let value=document.getElementById("attempt").innerHTML;
   // console.log(value)
    display = document.querySelector('#timer');
    /*if(value<6)
      startTimer(time,display);
    else*/
     startTimer(Minutes,display);
};